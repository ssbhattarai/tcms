@extends('layouts.frontend_layouts.app')

@push('metatag')

@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/blog.css')}}">  
@endpush
@push('script')
@endpush

@section('content')

    <div class="menu-heading">
        <img src="{{ asset('/assets/images/menu1.jpg')}}" alt="">
        <div class="title-wrapper">
        <h1>BLOG</h1>
        </div>
    </div>



    {{-- @dd($blog) --}}

  @foreach ($blog as $key => $item)
    <div class="blog col-11">
    
        <div class="b-header-title m-3">
            <p>{{$key}}</p>
            <div class="blog-button">
                <a href="/category/{{$key}}" >View all</a>
            </div>
        </div>
        
        <div class="blog-list row col-md-12 col-12 m-0 p-0">
          
           @foreach ($item as $i)
              <div class="blog-item  mb-5 col-md-3 col-sm-6">
                <div class="blog-content shadow p-0 m-0">
                  <a href="{{url('/blog/' . $i->slug)}}" class="p-0 m-0">
                    <div class="blog-image">
                      <img class="col-12 p-0 m-0" src="{{asset('/storage/'.$i->image)}}" alt="">
                    </div>
                    <div class="blog-title">
                      <h5 class="font-weight-bold">{{$i->title}}</h5>                      
                      <div class="blog-description">
                        {{Str::words(strip_tags($i->description), '8')}}
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
      
  @endforeach





    
@endsection