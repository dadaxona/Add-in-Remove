@component('mail::message')
Werfication Code


<h3>Code:  {{$pin}}</h3><br>
<hr>

We look forward to communicating more with you. For more information visit our blog.

@component('mail::button', ['url' => 'www.Google.com'])
Vetfication Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent