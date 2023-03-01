@component('mail::message')
# {{ $data['subject'] }}

{{ $data['body'] }}

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

<br>
{{ config('app.name') }}
@endcomponent
