@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')

    <div class="container-fluid">

        {{-- header nav --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="{{url('/admin/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>

       <div class="title">
           <h3>Orders</h3>
       </div>

        <hr>


        {{-- slider listing --}}
        <section>

            <orders></orders>

        </section>

        <hr>

        


    </div>

   

   


    


   


    
    
@endsection