<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body style="text-align: center;">
    <div style="height: 60px; width: 100%; padding-top: 30px;">
        <img src="{{ $message->embed(storage_path() . '/app/public/images/default/logo_slogan.png') }}" style="height: 50px;">
    </div>

    @if ($for === 'Pending Account')
        <div style="margin-top: 30px; font-size: 30px; font-weight: 800;">Welcome Back!</div>
    @elseif ($for === 'Forgotten Password')
        <div style="margin-top: 30px; font-size: 30px; font-weight: 800;">Forgotten Password Retrieval!</div>
    @endif

    <div style="margin-top: 15px;">
        Hi
        @if($user->account->type === 'Personal')
            {{ $user->account->personalAccount->first_name }} {{ $user->account->personalAccount->last_name }},
        @elseif($user->account->type === 'Business')
            {{ $user->account->businessAccount->name }},
        @endif
    </div>
    <div style="margin-top: 15px;">
        @if ($for === 'Pending Account')
            Thanks for coming back. You have a <b>{{ $user->account->type }} @if($user->account->type === 'Business')({{ $user->account->businessAccount->type }})@endif</b> account with GoodGross. To activate your account, you need to verify your email. Your account Verification Code is as follows.
        @elseif ($for === 'Forgotten Password')
            Thanks for requesting reset password of your account. You have a <b>{{ $user->account->type }} @if($user->account->type === 'Business')({{ $user->account->businessAccount->type }})@endif</b> account with GoodGross. To reset your account password, you need the Verification Code as follows.
        @endif
    </div>
    <div style="margin-top: 15px;">
        Verification Code: <span style="font-weight: bold; color: #328C59;">{{ $user->verification_code }}</span>
    </div>

    <div style="margin-top: 15px;">
        Note that the verification code will expire within an hour. So you have to use it within this time period.
    </div>
    <div style="margin-top: 15px;">
        Best Regards,<br>
        GoodGross Support Team
    </div>

    <div style="margin-top: 30px; padding-top: 15px; color: #636363; height: 40px; font-size: 0.7rem;">
        &copy; {{ date('Y') }} GoodGross. All Rights Reserved.
    </div>

</body>
</html>
