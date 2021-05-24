@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')

    <div class="container-fluid">

        {{-- header nav --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="{{url('/admin/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
                <li class="breadcrumb-item active" aria-current="page">Blog Category</li>
            </ol>
        </nav>


        <hr>

        {{-- blog listing --}}
        <category></category>









    </div>











@endsection
