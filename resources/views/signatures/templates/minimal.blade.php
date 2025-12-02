<div style="font-family: 'Courier New', Courier, monospace; color: #000;">
    <p style="margin: 0; font-size: 16px; font-weight: bold; border-bottom: 1px solid #000; padding-bottom: 8px; display: inline-block;">
        {{ $name ?: 'Seu Nome' }}
    </p>
    
    <p style="margin: 8px 0 0 0; font-size: 12px;">
        {{ $role ?: 'Dev' }}
    </p>

    <div style="margin-top: 12px; font-size: 11px;">
        @if($email)
            <a href="mailto:{{ $email }}" style="color: #000; text-decoration: none; border-bottom: 1px dotted #000;">{{ $email }}</a>
        @endif
        
        @if($phone)
             &nbsp;|&nbsp; {{ $phone }}
        @endif

        @if($linkedin)
             &nbsp;|&nbsp; 
             <a href="{{ $linkedin }}" style="color: #000; text-decoration: none;"><b>LN</b></a>
        @endif
    </div>
</div>