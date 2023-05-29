@component('mail::message')
# Contact Form Submission

<strong>Name:</strong> {{ $data['name'] }}
<br>
<strong>Email:</strong> {{ $data['email'] }}
<br>
<strong>Message:</strong>
<br>
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent