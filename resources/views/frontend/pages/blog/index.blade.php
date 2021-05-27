@extends('frontend.layouts.app')
@section('content')


<div class="page-title-area">
    <div class="d-table">
       <div class="d-table-cell">
          <div class="container">
             <h2>Blog List</h2>
          </div>
       </div>
    </div>
    <div class="shape1"><img src="{{ asset('frontend/images/shape1.png') }}" alt="shape"></div>
    <div class="shape2 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
    <div class="shape3"><img src="{{ asset('frontend/fonts/shape3.svg') }}" alt="shape"></div>
    <div class="shape4"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape5"><img src="{{ asset('frontend/images/shape5.png') }}" alt="shape"></div>
    <div class="shape6 rotateme"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape7"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape8 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
 </div>
 <div class="blog-area ptb-80">
    <div class="container">
        @if(count($blog) > 0)

       {{-- <div class="row">
           @foreach ($blog as $b)
            <div class="col-lg-4 col-md-6">

                <div class="single-blog-post-item">
                    <div class="post-image"><a href="{{ route('blog.view', $b->slug) }}"><img src="{{ URL::asset('storage/') }}/{{ $b->image }}" alt="image"></a></div>
                    <div class="post-content">
                        <ul class="post-meta">
                        <li>{{ $b->category->name }}</li>
                        <li>{{ \Carbon\Carbon::parse($b->created_at)->diffForHumans() }}</li>
                        </ul>
                        <h3><a href="{{ route('blog.view', $b->slug) }}">{{ $b->title }}</a></h3>
                        <a class="read-more-btn" href="{{ route('blog.view', $b->slug)}}">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="16"/>
                            <line x1="8" y1="12" x2="16" y2="12"/>
                        </svg>
                        </a>
                    </div>
                </div>
            </div>
           @endforeach
       </div> --}}
       <div class="container">
        <div class="row justify-content-center">
            @foreach ($blog as $item)
                <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="{{ route('blog.view', $item->slug) }}"><img src="{{ URL::asset('storage/') }}/{{ $item->image }}" alt="image"></a>
                        <div class="date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            {{ \Carbon\Carbon::parse($item->created_at )->toFormattedDateString() }}
                        </div>
                    </div>
                    <div class="blog-post-content">
                        <h3><a href="{{ route('blog.view', $item->slug) }}">{{ $item->title }}</a></h3>
                        {{-- <span>By {{ $item->written_by }}</span> --}}
                        <p>{{ $item->blog_introduction }}</p>
                        <a class="read-more-btn" href="{{ route('blog.view', $item->slug) }}">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
     </div>
       @else

       <h3>No Blogs published</h3>

       @endif
    </div>
    <div class="shape2 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
    <div class="shape3"><img src="{{ asset('frontend/fonts/shape3.svg') }}" alt="shape"></div>
    <div class="shape4"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape6 rotateme"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape7"><img src="{{ asset('frontend/fonts/shape4.svg') }}" alt="shape"></div>
    <div class="shape8 rotateme"><img src="{{ asset('frontend/fonts/shape2.svg') }}" alt="shape"></div>
 </div>




@endsection
