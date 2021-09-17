@component('mail::message')
# Hi there {{ $event->user->first_name }} {{ $event->user->last_name }},

You've kindly been selected to review the following article:
## {{ strtoupper($event->article->title) }}

@component('mail::button', ['url' => config('app.url') . '/dashboard'])
Go to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
