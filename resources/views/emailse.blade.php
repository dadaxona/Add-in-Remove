@component('mail::message')
<h1>Hello {{$name}} you Login and Password Accaunt</h1>

<h2>Login: {{$email}}</h2>
<h3>Paassword: {{$password}}</h3><br>
<hr>

We look forward to communicating more with you. For more information visit our blog.

@component('mail::button', ['url' => 'www.Google.com'])
Vetfication Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent