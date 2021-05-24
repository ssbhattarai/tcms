@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')

    <div class="container-fluid">

        {{-- header nav --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="{{url('/admin/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reservations</li>
            </ol>
        </nav>

       <div class="title">
           <h3>Reservations</h3>
       </div>

        <hr>


        {{-- slider listing --}}
        <section>

            <reservation></reservation>

        </section>

        <hr>

        


    </div>

   

   


    


   


    
    
@endsection