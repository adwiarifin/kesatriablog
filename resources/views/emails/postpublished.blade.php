@component('mail::message')
# Post Published

Hello {{ $user->firstname }} {{ $user->lastname }}, you have successfully published an article in our blog. You can check your published article by clicking the button below.

@component('mail::button', ['url' => url('/posts/'.$post->slug)])
Go to Article
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent