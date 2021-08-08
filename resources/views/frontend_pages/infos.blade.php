@extends('layouts.frontend_layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/infos.css')}}">

@endpush
@push('script')
@endpush

@section('content')

    @php
        $images = ['sunset.jpg','stupa.jpg','everest.jpg'];
        $random = rand(0,count($images)) ?rand(0,count($images))  : 0 ;
        if ($random !==0) {
            $random = $random -1;
        }
    @endphp


    @if (isset($infos))
        <section>
            <div class="header-title" style="background-image: url(/assets/images/{{$images[$random]}});">
                <div>
                    <h2>{{$infos->page_name}}</h2>
                    <div class="underline"></div>
                </div>
            </div>
        </section>

        <section>
            <div class="info-details col-md-8 col-10 p-4">
                {!! $infos->description !!}
            </div>
        </section>

    @endif




@endsection
