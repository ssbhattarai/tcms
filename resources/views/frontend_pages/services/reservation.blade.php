@extends('layouts.frontend_layouts.app')
@prepend('styles')
<link href="{{ asset('/css/reservation.css') }}" rel="stylesheet" />
@endprepend
@prepend('script')

@endprepend

@section('content')

    <div class="menu-heading mb-0">
        <img src="{{ asset('/assets/images/menu1.jpg')}}" alt="">
        <div class="title-wrapper">
        <h1>Reservation</h1>
        </div>
    </div>

    <div class="title-description mb-5">
        <p class=" text-center mb-5 col-md-6 col-sm-8 col-11 m-auto">
            Please make online reservations for parties of 1 to six . If there's no availability showing, please put yourself on our waitlist or contact the restaurant directly as we could also be ready to assist.
        </p>
    </div>

    <div class="reservation row col-11 m-auto p-0">
        <div class="col-md-8">            
                <reservation></reservation>            
        </div>
        <div class="col-md-4">
            <div class="reservation-info mt-4 shadow p-3">
                <h4 class="font-weight-bold">DIETS</h4>
                <p class="text-secondary">
                    Although every attempt are going to be made to accommodate food intolerances and allergies, we cannot guarantee that each dish are going to be completely allergen free.
                </p>
            </div>
            <div class="reservation-info mt-4 shadow p-3">
                <h4 class="font-weight-bold">GROUP BOOKING</h4>
                <p class="text-secondary">
                    You can reserve tables from 1 to six people via the shape online,
                    Parties of seven or larger groups please call us to form reservations at +17204853107.
                    We look forward to welcoming you soon.
                </p>
            </div>
            <div class="reservation-info mt-4 shadow p-3">
                <h4 class="font-weight-bold">CANCELLATION POLICY</h4>
                <p class="text-secondary">
                    If you're running late for your reservation, please call us. we'll divulge your table if you're over 10 minutes late and that we haven't heard from you. Please be considerate of the tiny nature of our business. If within the event you are doing got to cancel, kindly allow us to know a minimum of within reasonable time.
                </p>
            </div>
        </div>
    </div>

@endsection