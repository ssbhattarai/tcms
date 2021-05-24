@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')

    <div class="container-fluid">

        {{-- header nav --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="{{url('/admin/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Management</li>
                <li class="breadcrumb-item active" aria-current="page">Api Management</li>
            </ol>
        </nav>


        <hr>

        {{-- blog listing --}}
        <api-management></api-management>




    




    </div>

   

   





    
    
@endsection