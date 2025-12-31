<?php

namespace App\Http\Requests;

use App\Services\RecaptchaService;
use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'preferred_datetime' => ['required', 'date', 'after:now'],
            'consultation_content' => ['required', 'string', 'max:5000'],
            'privacy_agreed' => ['required', 'accepted'],
            'recaptcha_token' => ['required', 'string'],
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $recaptchaToken = $this->input('recaptcha_token');
            
            if (empty($recaptchaToken)) {
                $validator->errors()->add('recaptcha_token', 'reCAPTCHAの検証に失敗しました。ページを再読み込みして再度お試しください。');
                return;
            }

            $recaptchaService = app(RecaptchaService::class);
            if (!$recaptchaService->verify($recaptchaToken)) {
                $validator->errors()->add('recaptcha_token', 'reCAPTCHAの検証に失敗しました。スパムと判定された可能性があります。再度お試しください。');
            }
        });
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'お名前を入力してください。',
            'company_name.required' => '会社名・組織名を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => '正しいメールアドレスを入力してください。',
            'phone.required' => '電話番号を入力してください。',
            'preferred_datetime.required' => '希望日時を入力してください。',
            'preferred_datetime.date' => '正しい日時を入力してください。',
            'preferred_datetime.after' => '希望日時は現在より後の日時を選択してください。',
            'consultation_content.required' => '相談内容を入力してください。',
            'privacy_agreed.required' => '個人情報の取り扱いに同意してください。',
            'privacy_agreed.accepted' => '個人情報の取り扱いに同意してください。',
        ];
    }
}
