@extends('layouts.frontend_layouts.app')
@prepend('styles')
<link href="{{ asset('/css/cart.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('/assets/vendors/swiper/css/swiper.min.css')}}">  

@endprepend
@prepend('script')
<script src="{{asset('/assets/vendors/swiper/js/swiper.min.js')}}"></script>
@endprepend

@section('content')

    

    <cart></cart>

@endsection