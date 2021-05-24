@extends('layouts.frontend_layouts.app')
@prepend('styles')
<link href="{{ asset('/css/menu.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('/assets/vendors/swiper/css/swiper.min.css')}}">  

@endprepend
@prepend('script')
<script src="{{asset('/assets/vendors/swiper/js/swiper.min.js')}}"></script>
@endprepend

@section('content') 

  <div class="menu-heading">
    <img src="{{ asset('/assets/images/menu1.jpg')}}" alt="">
    <div class="title-wrapper">
      <h1>Menu</h1>
      <h3>{{$slug}}</h3>
    </div>
  </div>

    <section>
      <div class="categories-menu">
        <div class="cat-menu-list col-md-6 col-sm-8 col-11">
          @foreach ($category as $item)
              <div class="cat-item">
                <a href="{{ url('/menu/'.$item->slug)}}" class="cat-content">
                  <div class="cat-menu-image">
                    <img src="{{asset('/storage/'.$item->image)}}" alt="">
                  </div>
                  <div class="cat-text">
                    <h4>{{$item->name}}</h4>
                  </div>
                </a>
              </div>
          @endforeach          
        </div>
      </div>
    </section>


    <section>
        <products category_slug="{{$slug}}" cat_id="{{$cat_id}}"></products>
    </section>



    <!-- Initialize Swiper -->
  <script type="application/javascript">
      // for menu list items
    var swiper = new Swiper('.menu-list', {
      slidesPerView:'auto',
      spaceBetween: 50,
      loopFillGroupWithBlank: true,
            
    });
  </script>
   

 

@endsection