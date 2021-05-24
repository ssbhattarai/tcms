@extends('layouts.frontend_layouts.app')
@prepend('styles')
<link href="{{ asset('/css/cart.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('/assets/vendors/swiper/css/swiper.min.css')}}">  

@endprepend
@prepend('script')
<script src="{{asset('/assets/vendors/swiper/js/swiper.min.js')}}"></script>
@endprepend

@section('content')

    
<section id="checkout">
    <div class="checkout col-md-10 col-11 mb-5">
        <h4 class="checkout-title mb-4 font-weight-bold text-secondary">
            Delivery Information
        </h4>
        <div class="checkout-wrapper row">
            <div class="delivery-form shadow col-md-8 col-11 pt-3">
            <form action="{{url('checkout/save')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input class="form-field"  type="text" name="name" value="{{auth()->user()->name}}" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-field" type="text" name="phone" value="{{auth()->user()->phone}}" required>
                </div>
                <div class="form-group">
                    <label>State</label>
                    @include('frontend_pages.payment.statelist')                    
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-field" type="text" name="address"  required>{{auth()->user()->address}}</textarea>
                </div>
                <div class="form-group">
                    <button class="button" type="submit">Confirm Order</button>
                </div>
            </form>
        </div>
        <div class="order-summary col-md-4 col-11">
            <div class="summary-wrapper">
                <div class="summary-title">
                    <h3>Order Summary</h3>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Subtotal ({{count($cart)}}  items)</td>
                            <td>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($cart as $item)
                                    @php 
                                        $total += $item['price'] * $item['quantity']
                                    @endphp
                                @endforeach
                                ${{$total}}
                            </td>
                        </tr>
                    </tbody>
                </table>  
            </div>              
        </div>
        
    </div>
</section>

    

@endsection