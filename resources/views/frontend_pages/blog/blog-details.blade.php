@extends('layouts.frontend_layouts.app')

@push('metatag')
    <meta name="description" content="{{Str::words(strip_tags($blog->description), '25')}}" />
    <meta name="keywords" content="{{$blog->title}}" />
    <meta name="distribution" content="{{$blog->title}}" />
    <meta name="publisher" content="Comsilo (comsilo.com)" />

    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{Str::words(strip_tags($blog->description), '25')}}">
    <meta property="og:image" content="{{asset('/storage/'.$blog->image)}}">

@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/blog-detail.css')}}">  
@endpush
@push('script')
    <script src="{{ asset('js/share.js') }}"></script>
@endpush

@section('content')

    <div class="top-gap"></div>

    <section>
        <div class="blog-header-title">
            <div>
                <h2 class="title">Blog</h2>   
                <div class="underline"></div>     
            </div>
        </div>
    </section>

    <section id='blog-container'>
        <div class="row col-md-10 col-sm-12 col-12 mt-4" style="margin:auto">
            
            <div class="blog-container col-md-8">
                <div class="b-cat">
                    <p>{{ucfirst($blog->category)}}</p>
                </div>
                <div class="b-title">
                    <h1>{{$blog->title}}</h1>
                </div>
                <div class="b-info row justify-content-between">

                    <div class="bi-info">
                        <ul class="row">
                            <li class="bii-item">
                                <i class="fa fa-user"></i> {{$blog->written_by}}
                            </li>
                            <li class="bii-item">
                                <i class="fa fa-calendar"></i> {{$blog->created_at}}
                            </li>
                        </ul>
                    </div>

                    <div class="bi-share">
                        {!!Share::currentPage()
                        ->facebook()
                            ->twitter()
                            ->linkedin()
                            ->whatsapp()!!}
                    </div>
                </div>

                <div class="b-image">
                    <img src="{{asset('/storage/'.$blog->image)}}" alt="">
                </div>

                <div class="b-description">
                    {!! $blog->description !!}
                </div>
            
            </div>

            <ul class="recent col-md-3 mt-5">
                <h4 class="font-weight-bold text-secondary">Recent Blogs</h4>
                <hr>
                @foreach ($recent as $item)
                    <li class="">
                        <a class="text-secondary" href="{{url('/blog/'.$item->slug)}}">{{ucfirst($item->title)}} <i class="fa fa-external-link-alt text-secondary" aria-hidden="true"></i></a>
                    </li>  
                    <hr>                  
                @endforeach
                
            </ul>

        </div>
    </section>

    <section>
        <div class="related col-md-10 col-sm-12">
            <div class="r-title">
                <h2>Related Posts</h2>
            </div>
            <div class="related-list row">

                @foreach ($related as $item)
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


@endsection