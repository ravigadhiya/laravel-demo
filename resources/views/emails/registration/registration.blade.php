@component('mail::message')
# Hello {!! $data['email'] !!},

Thank you for signing up for Gateway Cloud!

Please verify Your Email Address by clicking the button below.



Thanks,<br>
{{ config('app.name') }}
@endcomponent
