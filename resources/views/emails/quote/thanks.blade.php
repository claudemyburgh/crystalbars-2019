@component('mail::message')

<h1 style="text-align:center;">Hi, {{ $name }}.</h1>
<h2 style="text-align:center;">Thank you for getting in contact with us.</h2>
<h3 style="text-align:center;">We will get back to You as soon as possible.</h3>
<p style="text-align:center;"> &#128077; Please dont forget to like us on Facebook.</p>

@component('mail::button', ['url' => 'https://www.facebook.com/www.crystalbars.co.za'])
LIKE US ON FACEBOOK
@endcomponent

<p style="text-align:center;">Thanks, {{ config('app.name') }} Team</p>

@endcomponent
