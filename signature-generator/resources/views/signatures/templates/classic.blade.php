<table cellpadding="0" cellspacing="0" border="0" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.4; color: #333333;">
    <tr>
        <td style="padding-right: 20px; border-right: 2px solid #e2e8f0; vertical-align: middle;">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($name ?? 'User') }}&background=4f46e5&color=fff&size=128" 
                 alt="{{ $name }}" 
                 width="80" 
                 height="80" 
                 style="border-radius: 50%; display: block;">
        </td>
        <td style="padding-left: 20px; vertical-align: middle;">
            <h3 style="margin: 0; font-size: 18px; color: #111827;">
                {{ $name ?: 'Seu Nome Aqui' }}
            </h3>
            <p style="margin: 2px 0 8px 0; color: #6b7280; font-size: 13px;">
                {{ $role ?: 'Seu Cargo' }}
            </p>
            
            <div style="font-size: 12px; color: #4b5563;">
                @if($email)
                    <div style="margin-bottom: 2px;">
                        <span style="color: #4f46e5;">✉</span> 
                        <a href="mailto:{{ $email }}" style="color: #4b5563; text-decoration: none;">{{ $email }}</a>
                    </div>
                @endif
                
                @if($phone)
                    <div style="margin-bottom: 2px;">
                        <span style="color: #4f46e5;">☎</span> {{ $phone }}
                    </div>
                @endif

                @if($linkedin)
                    <div>
                        <span style="color: #4f46e5;">in</span> 
                        <a href="{{ $linkedin }}" style="color: #4b5563; text-decoration: none;">LinkedIn</a>
                    </div>
                @endif
            </div>
        </td>
    </tr>
</table>