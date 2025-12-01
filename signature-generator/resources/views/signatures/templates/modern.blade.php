<table cellpadding="0" cellspacing="0" border="0" style="font-family: 'Helvetica', sans-serif; font-size: 14px; color: #1f2937;">
    <tr>
        <td width="6" style="background-color: #0ea5e9; border-radius: 4px;"></td>
        
        <td style="padding-left: 16px;">
            <div style="margin-bottom: 6px;">
                <span style="font-size: 20px; font-weight: bold; color: #0f172a; letter-spacing: -0.5px;">
                    {{ $name ?: 'Seu Nome' }}
                </span>
                <br>
                <span style="text-transform: uppercase; font-size: 10px; color: #0ea5e9; font-weight: bold; letter-spacing: 1px;">
                    {{ $role ?: 'CARGO ATUAL' }}
                </span>
            </div>

            <table cellpadding="0" cellspacing="0" border="0" style="font-size: 12px; color: #64748b;">
                @if($email)
                <tr>
                    <td style="padding-bottom: 4px;">
                        <strong style="color: #0f172a;">Email:</strong> 
                        <a href="mailto:{{ $email }}" style="color: #64748b; text-decoration: none;">{{ $email }}</a>
                    </td>
                </tr>
                @endif
                
                @if($phone)
                <tr>
                    <td style="padding-bottom: 4px;">
                        <strong style="color: #0f172a;">Tel:</strong> {{ $phone }}
                    </td>
                </tr>
                @endif
                
                @if($linkedin)
                <tr>
                    <td style="padding-top: 4px;">
                        <a href="{{ $linkedin }}" style="background-color: #0f172a; color: #ffffff; text-decoration: none; padding: 4px 8px; border-radius: 4px; font-size: 10px;">
                            Ver Perfil
                        </a>
                    </td>
                </tr>
                @endif
            </table>
        </td>
    </tr>
</table>