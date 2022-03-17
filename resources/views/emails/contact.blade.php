@component('mail::message')
# Hi there Guys, We've received a new message from {{ $event->first_name }} {{ $event->last_name }} ({{ $event->email }}),

_______________ <br>
{{ $event->message }}.
_______________<br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
