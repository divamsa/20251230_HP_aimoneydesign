<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせありがとうございます</title>
</head>
<body style="font-family: 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
        <h1 style="color: #2563eb; margin: 0 0 10px 0; font-size: 24px;">お問い合わせありがとうございます</h1>
        <p style="margin: 0; color: #666;">株式会社マネーデザイン</p>
    </div>

    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #e0e0e0;">
        <p style="margin: 0 0 20px 0;">
            {{ $contact->name }} 様
        </p>

        <p style="margin: 0 0 20px 0;">
            この度は、{{ match($contact->type) {
                \App\Models\Contact::TYPE_INQUIRY => 'お問い合わせ',
                \App\Models\Contact::TYPE_DOWNLOAD => '資料請求',
                \App\Models\Contact::TYPE_CONSULTATION => '無料相談の申し込み',
                default => 'お問い合わせ',
            } }}をいただき、誠にありがとうございます。
        </p>

        <p style="margin: 0 0 20px 0;">
            以下の内容で受け付けいたしました。<br>
            担当者より、2営業日以内にご連絡させていただきます。
        </p>

        <div style="background-color: #f8f9fa; padding: 15px; border-radius: 4px; margin: 20px 0;">
            <h2 style="font-size: 18px; margin: 0 0 15px 0; color: #2563eb;">お問い合わせ内容</h2>
            
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold; width: 120px;">種別</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">
                        {{ match($contact->type) {
                            \App\Models\Contact::TYPE_INQUIRY => '一般問い合わせ',
                            \App\Models\Contact::TYPE_DOWNLOAD => '資料請求',
                            \App\Models\Contact::TYPE_CONSULTATION => '無料相談',
                            default => $contact->type,
                        } }}
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">お名前</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">{{ $contact->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">会社名</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">{{ $contact->company_name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">メールアドレス</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">{{ $contact->email }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">電話番号</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">{{ $contact->phone }}</td>
                </tr>
                @if($contact->inquiry_type)
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">問い合わせ種別</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">{{ $contact->inquiry_type }}</td>
                </tr>
                @endif
                @if($contact->message)
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">問い合わせ内容</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; white-space: pre-wrap;">{{ $contact->message }}</td>
                </tr>
                @endif
                @if($contact->requested_materials)
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">希望資料</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">
                        @if(is_array($contact->requested_materials))
                            {{ implode(', ', $contact->requested_materials) }}
                        @else
                            {{ $contact->requested_materials }}
                        @endif
                    </td>
                </tr>
                @endif
                @if($contact->preferred_datetime)
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">希望日時</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">{{ $contact->preferred_datetime->format('Y年m月d日 H:i') }}</td>
                </tr>
                @endif
                @if($contact->consultation_content)
                <tr>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; font-weight: bold;">相談内容</td>
                    <td style="padding: 8px 0; border-bottom: 1px solid #e0e0e0; white-space: pre-wrap;">{{ $contact->consultation_content }}</td>
                </tr>
                @endif
            </table>
        </div>

        <p style="margin: 20px 0 0 0;">
            ご不明な点がございましたら、お気軽にお問い合わせください。<br>
            今後ともよろしくお願いいたします。
        </p>
    </div>

    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e0e0e0; font-size: 12px; color: #666;">
        <p style="margin: 0 0 5px 0;">
            <strong>株式会社マネーデザイン</strong>
        </p>
        <p style="margin: 0;">
            このメールは自動送信されています。<br>
            本メールに返信されても対応できませんのでご了承ください。
        </p>
    </div>
</body>
</html>

