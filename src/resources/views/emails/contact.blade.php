<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', Meiryo, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <h1 style="color: #2563eb; margin-bottom: 20px;">
            @if($contact->type === App\Models\Contact::TYPE_INQUIRY)
                一般問い合わせ
            @elseif($contact->type === App\Models\Contact::TYPE_DOWNLOAD)
                資料請求
            @elseif($contact->type === App\Models\Contact::TYPE_CONSULTATION)
                無料相談申し込み
            @endif
        </h1>

        <div style="background-color: #fff; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <h2 style="color: #1e293b; border-bottom: 2px solid #e0e0e0; padding-bottom: 10px; margin-bottom: 15px;">お客様情報</h2>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 8px 0; font-weight: bold; width: 150px;">お名前</td>
                    <td style="padding: 8px 0;">{{ $contact->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: bold;">会社名・組織名</td>
                    <td style="padding: 8px 0;">{{ $contact->company_name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: bold;">メールアドレス</td>
                    <td style="padding: 8px 0;"><a href="mailto:{{ $contact->email }}" style="color: #2563eb;">{{ $contact->email }}</a></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: bold;">電話番号</td>
                    <td style="padding: 8px 0;"><a href="tel:{{ $contact->phone }}" style="color: #2563eb;">{{ $contact->phone }}</a></td>
                </tr>
            </table>
        </div>

        <div style="background-color: #fff; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <h2 style="color: #1e293b; border-bottom: 2px solid #e0e0e0; padding-bottom: 10px; margin-bottom: 15px;">問い合わせ内容</h2>
            
            @if($contact->type === App\Models\Contact::TYPE_INQUIRY)
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; width: 150px;">問い合わせ種別</td>
                        <td style="padding: 8px 0;">{{ $contact->inquiry_type }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; vertical-align: top;">問い合わせ内容</td>
                        <td style="padding: 8px 0; white-space: pre-wrap;">{{ $contact->message }}</td>
                    </tr>
                </table>
            @elseif($contact->type === App\Models\Contact::TYPE_DOWNLOAD)
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; width: 150px;">希望資料</td>
                        <td style="padding: 8px 0;">
                            @if(is_array($contact->requested_materials))
                                @foreach($contact->requested_materials as $material)
                                    <div style="padding: 4px 0;">・{{ $material }}</div>
                                @endforeach
                            @else
                                {{ $contact->requested_materials }}
                            @endif
                        </td>
                    </tr>
                </table>
            @elseif($contact->type === App\Models\Contact::TYPE_CONSULTATION)
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; width: 150px;">希望日時</td>
                        <td style="padding: 8px 0;">{{ $contact->preferred_datetime->format('Y年m月d日 H:i') }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold; vertical-align: top;">相談内容</td>
                        <td style="padding: 8px 0; white-space: pre-wrap;">{{ $contact->consultation_content }}</td>
                    </tr>
                </table>
            @endif
        </div>

        <div style="background-color: #fff; padding: 20px; border-radius: 8px;">
            <p style="color: #64748b; font-size: 14px; margin: 0;">
                このメールは、株式会社マネーデザインのお問い合わせフォームから送信されました。<br>
                送信日時: {{ $contact->created_at->format('Y年m月d日 H:i') }}
            </p>
        </div>
    </div>
</body>
</html>

