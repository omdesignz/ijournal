@component('mail::message')
# Hi there {{ $event->first_name }} {{ $event->last_name }},

This is simply to confirm that we've received the following message from you and we'll get back to you as soon as possible.
_______________ <br>
{{ $event->message }}
_______________ <br>
If you didn't send us this message please ignore this email.


@component('mail::button', ['url' => config('app.url')])
Visit IJournal
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
