{{-- resources/views/emails/contact.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff;">
        <!-- Header -->
        <div style="background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%); padding: 40px 20px; text-align: center;">
            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: bold;">
                New Contact Form Submission
            </h1>
        </div>
        
        <!-- Content -->
        <div style="padding: 40px 20px;">
            <p style="color: #374151; font-size: 16px; line-height: 1.6; margin-bottom: 20px;">
                You have received a new message through your portfolio contact form.
            </p>
            
            <!-- Contact Details -->
            <div style="background-color: #f9fafb; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; color: #6b7280; font-weight: bold; width: 80px;">Name:</td>
                        <td style="padding: 8px 0; color: #374151;">{{ $contactName }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; color: #6b7280; font-weight: bold;">Email:</td>
                        <td style="padding: 8px 0; color: #374151;">{{ $contactEmail }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; color: #6b7280; font-weight: bold;">Subject:</td>
                        <td style="padding: 8px 0; color: #374151;">{{ $contactSubject }}</td>
                    </tr>
                </table>
            </div>
            
            <!-- Message -->
            <div style="margin-bottom: 30px;">
                <h3 style="color: #374151; margin-bottom: 10px;">Message:</h3>
                <div style="background-color: #f9fafb; border-left: 4px solid #3b82f6; padding: 20px; border-radius: 0 8px 8px 0;">
                    <p style="color: #374151; line-height: 1.6; margin: 0; white-space: pre-wrap;">{{ $contactMessage }}</p>
                </div>
            </div>
            
            <!-- Reply Button -->
            <div style="text-align: center; margin-top: 30px;">
                <a href="mailto:{{ $contactEmail }}?subject=Re: {{ $contactSubject }}" 
                   style="display: inline-block; background-color: #3b82f6; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: bold;">
                    Reply to {{ $contactName }}
                </a>
            </div>
        </div>
        
        <!-- Footer -->
        <div style="background-color: #f3f4f6; padding: 20px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="color: #6b7280; font-size: 14px; margin: 0;">
                This email was sent from your portfolio contact form at {{ config('app.url') }}
            </p>
        </div>
    </div>
</body>
</html>