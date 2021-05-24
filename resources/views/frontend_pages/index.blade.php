@extends('layouts.frontend_layouts.app')
@prepend('styles')
<link href="{{ asset('/css/index.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('/assets/vendors/swiper/css/swiper.min.css')}}">  

@endprepend
@prepend('script')
<script>
  function closeMenu(){
    $('.menu-pdf').css('display','none');
  }
</script>
<script src="{{asset('/assets/vendors/swiper/js/swiper.min.js')}}"></script>
@endprepend

@section('content')

    <div class="reservation-side">
        <a href="http://">
            <h5>Order Now</h5>
        </a>
    </div>

    @if ($menu_image !== null)
        <div class="menu-pdf">
          <div class="menu-pdf-content">
            <div class="menu-image">
              <img class="col-12" src="{{asset('/storage/'.$menu_image->name)}}" alt="">
            </div>
          </div>
          <i class="fa fa-close text-secondary" onclick="closeMenu()"></i>
          <div class="pdf-download">
            <a href="{{asset('/storage/'.$menu_file->name)}}" download>
              Download Menu <i class="fa fa-download"></i>
            </a>
          </div>
        </div>
    @endif


    {{-- slider section --}}
    <section id="slider-section">
        <div class="swiper-container bg-swiper mb-4 mt-0">
            <div class="swiper-wrapper">
                @foreach($slider as $item)
                <div class="swiper-slide">
                    <div class="swiper-image">
                        <img src="{{asset('/storage/'.$item->image)}}" alt="">            
                    </div>
                    <div class="swiper-text">
                        @if ($item->title)
                            <h1>{{$item->title}}</h1>   
                        @endif                        
                        @if ($item->description)
                            <p>{{$item->description}}</p>
                        @endif
                        @if ($item->link && $item->link !== "" && $item->link !== null)
                            <a href="{{$item->link}}" class="button"> {{$item->link_name}}</a>
                        @endif
                    </div>   
                </div> 
                @endforeach     
                </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
    </section>



    <section>
      <div class="categories-menu">
        <div class="category-title pb-5">
          <h1 class="text-center mb-5 cursive">HELLO & WELCOME.</h1>
          <p class="text-center col-md-6 col-sm-8 col-11 ml-auto mr-auto text-secondary">
            Himalayan Spice Indian Cuisine, established by few Friends in 2020 in Denver Colorado. Himalayan Spice Indian Cuisine’s commitment to quality recipes, integrity with use of produce and its masterful art of blending spices attracted curry addicts from everywhere.
          </p>
          <p class="text-center col-md-6 col-sm-8 col-11 ml-auto mr-auto text-secondary">
            We appreciated all of your support for our  restaurant.
            <br> <br>Thank you!
          </p>
        </div>
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


    {{-- latest recipies --}}

    <section id="latest-recipies">
      <div class="latest-recipies row col-12 p-0 m-0">

        <div class="sticky-title col-md-4 p-0">
          <div class="image" >
            <img src="{{ asset('/assets/images/menu1.jpg')}}" alt="">
          </div>
          <div class="st-title">
            <h1>Latest Recipies</h1>
            <a href="/menu" class="button">SEE MENU</a>
          </div>
        </div>

        <div class="col-md-8 p-0 m-0">
          <latest-recipie></latest-recipie>
        </div>
      
      </div>
    </section>
    


    <section>
        <products category_slug="all" cat_id="0"></products>
    </section>


    <section>
      <div class="blog">
        <div class="blog-main-title">
          <h1>Read Our Blogs</h1>
          <p class="col-md-6 col-sm-8 col-11">
            Find out latest articles about food recipes
          </p>
          <div class="underline"></div>
        </div>
        <div class="blog-list row col-md-11 col-12 m-auto">
          
          @foreach ($blog as $item)
              <div class="blog-item  mb-5 col-md-3 col-sm-6">
                <div class="blog-content shadow p-0 m-0">
                  <a href="{{url('/blog/' . $item->slug)}}" class="p-0 m-0">
                    <div class="blog-image">
                      <img class="col-12 p-0 m-0" src="{{asset('/storage/'.$item->image)}}" alt="">
                      
                    </div>
                    <div class="blog-title">
                      <h5 class="font-weight-bold">{{$item->title}}</h5>                      
                      <div class="blog-description">
                        {{Str::words(strip_tags($item->description), '8')}}
                      </div>
                      <div class="bc-button" href="">
                          <label class="text-secondary">read article</label>
                          <span></span>
                      </div>
                    </div>
                  </a>                  
                </div>
              </div>
          @endforeach

        </div>
      </div>
    </section>




    <!-- Initialize Swiper -->
  <script type="application/javascript">
    var swiper1 = new Swiper('.bg-swiper', {
      speed: 600,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      effect: 'fade',
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });  

    // for menu list items
    var swiper = new Swiper('.menu-list', {
      slidesPerView:'auto',
      spaceBetween: 20,
      loopFillGroupWithBlank: true,
            
    });

   
  </script>
   

 

@endsection