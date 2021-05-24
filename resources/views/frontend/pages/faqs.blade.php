@extends('frontend.layouts.app')
@section('content')


<div class="page-title-area">
    <div class="d-table">
       <div class="d-table-cell">
          <div class="container">
             <h2>FAQ</h2>
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
 <div class="faq-area ptb-80">
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How do permissions work in Google Play Instant?
                  </button>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>


       <div class="faq-contact">
          <h3>Ask Your Question</h3>
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
          <div class="row align-items-center">
            <div class="col-md-12">

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
 </div>


@endsection
