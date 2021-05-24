@extends('frontend.layouts.app')
@section('content')
<div class="page-title-area">
    <div class="d-table">
       <div class="d-table-cell">
          <div class="container">
             <h2>Contact Us</h2>
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
 <div class="contact-info-area ptb-80">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="contact-info-box">
                <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                      <polyline points="22,6 12,13 2,6"/>
                   </svg>
                </div>
                <h3>Mail Here</h3>
                <p><a href="mailto:thopomachine@gmail.com"><span class="__cf_email__" >thopomachine@gmail.com</span></a></p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="contact-info-box">
                <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                      <circle cx="12" cy="10" r="3"/>
                   </svg>
                </div>
                <h3>Visit Here</h3>
                <p>Koteshwor Mahadevsthan</p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="contact-info-box">
                <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                   </svg>
                </div>
                <h3>Call Here</h3>
                <p><a href="tel:+977984444444444">+977 984444444444</a></p>
                <p><a href="tel:+977984444444444">+977 984444444444</a></p>
             </div>
          </div>
       </div>
    </div>
 </div>
 @if (isset($map))
            @if ($map->count() !== 0)
            {!!$map->name !!}
            @endif
        @endif

 <div class="contact-area ptb-80">
    <div class="container">
       <div class="section-title">
          <h2>Get In Touch With Us</h2>
          <div class="bar"></div>
          <p>Anything On your Mind. We’ll Be Glad To Assist You!</p>
       </div>
       <div class="row align-items-center">
          <div class="col-lg-6 col-md-12"><img src="{{ asset('frontend/images/contact-img.png') }}" alt="image"></div>
          <div class="col-lg-6 col-md-12">
            @if ($message = Session::get('success'))
            <div class="col-lg-12 mt-2">
                <div class="alert alert-success alert-block text-center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="col-lg-12 mt-2">
                <div class="alert alert-danger alert-block text-center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        @endif

             <form id="contactForm" action="{{ url('save-contact') }}" method="POST">
                @csrf
                <div class="row">
                   <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                         <input type="text" name="name" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                         @error('name')

                        <div class="invalid-feedback" style="display:block">
                            {{ $message }}
                        </div>
                        @enderror

                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                         <input type="text" name="email" placeholder="Your email address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                         @error('email')

                         <div class="invalid-feedback" style="display:block">
                             {{ $message }}
                         </div>
                         @enderror
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                         <input type="text" name="phone" placeholder="Your phone number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                         @error('phone')

                         <div class="invalid-feedback" style="display:block">
                             {{ $message }}
                         </div>
                         @enderror
                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                         <input type="text" name="subject" placeholder="Your Subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}">

                         @error('subject')

                         <div class="invalid-feedback" style="display:block">
                             {{ $message }}
                         </div>
                         @enderror

                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                         <textarea name="message" cols="30" rows="5" placeholder="Write your message..." class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                         @error('message')

                         <div class="invalid-feedback" style="display:block">
                             {{ $message }}
                         </div>
                         @enderror
                      </div>
                   </div>
                   <div class="col-lg-12 col-sm-12"><button type="submit" class="btn btn-primary">Send Message</button></div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>


@endsection
