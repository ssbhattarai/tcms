@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')
   <link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <link src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <div class="container-fluid">

        {{-- header nav --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="{{url('/admin/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>


         <service-component></service-component>



    </div>





@endsection
