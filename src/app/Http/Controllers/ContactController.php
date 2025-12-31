<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Http\Requests\DownloadRequest;
use App\Http\Requests\ConsultationRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * お問い合わせページを表示
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * 一般問い合わせフォーム送信処理
     */
    public function inquiry(InquiryRequest $request)
    {
        $contact = Contact::create([
            'type' => Contact::TYPE_INQUIRY,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'inquiry_type' => $request->inquiry_type,
            'message' => $request->message,
            'privacy_agreed' => true,
            'status' => Contact::STATUS_PENDING,
        ]);

        // メール送信処理
        try {
            Mail::to(config('mail.from.address'))->send(new ContactMail($contact));
        } catch (\Exception $e) {
            // メール送信エラーはログに記録するが、ユーザーには成功メッセージを表示
            \Log::error('メール送信エラー: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', 'お問い合わせを受け付けました。ありがとうございます。');
    }

    /**
     * 資料請求フォーム送信処理
     */
    public function download(DownloadRequest $request)
    {
        $contact = Contact::create([
            'type' => Contact::TYPE_DOWNLOAD,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'requested_materials' => $request->requested_materials,
            'privacy_agreed' => true,
            'status' => Contact::STATUS_PENDING,
        ]);

        // メール送信処理
        try {
            Mail::to(config('mail.from.address'))->send(new ContactMail($contact));
        } catch (\Exception $e) {
            // メール送信エラーはログに記録するが、ユーザーには成功メッセージを表示
            \Log::error('メール送信エラー: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', '資料請求を受け付けました。ありがとうございます。');
    }

    /**
     * 無料相談申し込みフォーム送信処理
     */
    public function consultation(ConsultationRequest $request)
    {
        $contact = Contact::create([
            'type' => Contact::TYPE_CONSULTATION,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'preferred_datetime' => $request->preferred_datetime,
            'consultation_content' => $request->consultation_content,
            'privacy_agreed' => true,
            'status' => Contact::STATUS_PENDING,
        ]);

        // メール送信処理
        try {
            Mail::to(config('mail.from.address'))->send(new ContactMail($contact));
        } catch (\Exception $e) {
            // メール送信エラーはログに記録するが、ユーザーには成功メッセージを表示
            \Log::error('メール送信エラー: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', '無料相談の申し込みを受け付けました。ありがとうございます。');
    }
}
