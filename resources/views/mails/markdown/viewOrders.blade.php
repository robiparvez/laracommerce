@component('mail::message')
# Order Shipped
Your Order has been shipped. Congratulations!
Your Total Orders Cost: <strong>{{ $total_price }}</strong>

@component('mail::button', ['url' => ''])
Reply To Us
@endcomponent

Thanks,<h3>{{ $name }}</h3>
<br>
{{-- {{ config('app.name') }} --}}
@endcomponent
