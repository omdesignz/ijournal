@component('mail::message')
# Welcome {{ $event->user->first_name }} {{ $event->user->last_name }}

You've successfully created an account with IJournal. One of our admins will activate your account within 24 hours. In the meantime, grab a cup of coffee and start drafting your awesome articles.

@component('mail::button', ['url' => config('app.url')])
Visit our website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
