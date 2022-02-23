@extends('frontend.master')

@section('homeContent')



<form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
<input type='hidden' name='sid' value='901413330' >
<input type='hidden' name='mode' value='2CO' >
<input type='hidden' name='li_0_type' value='product' >

@php
$cartitem= 0;
@endphp
@foreach(Cart::content() as $item)

<input type='hidden' name='li_{{$cartitem}}_name' value='{{$item->name}}' >
<input type='hidden' name='li_{{$cartitem}}_product_id' value='{{$item->id}}' >
<input type='hidden' name='li_{{$cartitem}}_price' value='{{$item->price}}' >
<input type='hidden' name='li_{{$cartitem}}_quantity' value='{{$item->qty}}' >



@php
$cartitem++;
@endphp

@endforeach


<input type='hidden' name='li_0_tangible' value='N' >
<input type='hidden' name='purchase_step' value='payment-method' >
<input class="center md-3 p-0 m-3"name='submit' type='submit' value='Confirm Payment' >
</form>

<a href="{{url('/cart')}}">Back</a>


@endsection