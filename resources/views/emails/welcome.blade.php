@component('mail::message')
# Introduction

Thank you {{ $user->firstname }} {{ $user->lastname }} for joining with us, you can login to your account by clicking the button below.

@component('mail::button', ['url' => url('/login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent