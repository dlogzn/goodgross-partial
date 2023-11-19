<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body style="text-align: center;">
        <div style="height: 60px; width: 100%; padding-top: 30px;">
            <img src="{{ $message->embed(storage_path() . '/app/public/images/default/logo_slogan.png') }}" style="height: 50px;">
        </div>

        <div style="margin-top: 30px; font-size: 30px; font-weight: 800;">Congratulations!</div>

        <div style="margin-top: 15px;">
            Hi
            @if($user->account->type === 'Personal')
                {{ $user->account->personalAccount->first_name }} {{ $user->account->personalAccount->last_name }}
            @elseif($user->account->type === 'Business')
                {{ $user->account->businessAccount->name }}
            @endif
        </div>
        <div style="margin-top: 15px;">
            <span>Thanks for registering as a <b>{{ $user->account->type }} @if($user->account->type === 'Business')({{ $user->account->businessAccount->type }})@endif</b> account with GoodGross.</span>
            @if($isVerified === false)
            <span>To activate your account, you need to verify your email. Your account Verification Code is as follows.</span>
            @endif
        </div>
        @if($isVerified === false)
        <div style="margin-top: 15px;">
            Verification Code: <span style="font-weight: bold; color: #328C59;">{{ $user->verification_code }}</span>
        </div>

        <div style="margin-top: 15px;">
            Note that the verification code will expire within an hour. So you have to use it within this time period.
        </div>
        @endif
        <div style="margin-top: 15px;">
            Best Regards,<br>
            GoodGross Support Team
        </div>

        <div style="margin-top: 30px; padding-top: 15px; color: #636363; height: 40px; font-size: 0.7rem;">
            &copy; {{ date('Y') }} GoodGross. All Rights Reserved.
        </div>

    </body>
</html>
