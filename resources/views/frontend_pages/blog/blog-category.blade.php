@extends('layouts.frontend_layouts.app')

@push('metatag')
   
@endpush

@push('styles')
  <link rel="stylesheet" href="{{asset('/css/blog.css')}}">  
@endpush
@push('script')
  
@endpush

@section('content')


<div class="main">

        <div class="row col-11 m-auto">
            <div class="col-md-10">                
                <section>
                    <div class="blog-column">
                        <div class="bc-title">                          
                            <h1>{{$category}}</h1>                            
                        </div>                       
                        
                        <div class="bc-list">

                            
                            @foreach ($blog as $item)
                                <div class="bc-item mb-3">
                                    <a href="{{url('/blog/'.$item->slug)}}">
                                        <div class="row">
                                            <div class="bc-image col-md-4 col-sm-4 p-0">
                                                <img class="col-12" src="/storage/{{$item->image}}" alt="">
                                            </div>
                                            <div class="bc-description col-md-8 col-sm-8">
                                                <label>FEATURED</label>
                                                <h3>
                                                    {{$item->title}}
                                                </h3>
                                                <p>
                                                    {{$item->meta_description}}
                                                </p>
                                                <div class="bc-button" href="">
                                                    <label>read article</label>
                                                    <span></span>
                                                </div>
                                            </div>       
                                        </div>      
                                    </a>   
                                </div>
                                
                            @endforeach
                           

                        </div>

                    </div>
                    
                </section>

               <div class="mt-5">
                    <blog-category  category="{{$category}}"></blog-category>
               </div>

                

            </div>

            <div class="col-md-3">

            </div>

        </div>



     



</div>



<script type="application/javascript">



</script>


    
@endsection