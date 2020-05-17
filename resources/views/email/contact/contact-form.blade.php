@component('mail::message')
{{$data['name']}} - {{$data['email']}}
<br>
{{$data['phone']}}
<br>
{{$data['subjet']}}
<br>
{{$data['messge']}}
The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
