 @extends('layouts.frontend_layouts.app')

@push('metatag')

@endpush

@push('styles')
  <link rel="stylesheet" href="{{asset('/css/contact.css')}}">
  <style>
      body{
          background-color: #f9f9f9;
      }
  </style>
@endpush
@push('script')
@endpush

@section('content')


    <section>
        <div class="blog-header-title">
            <div>
                <h2 class="title">Contact</h2>
                <div class="underline"></div>
            </div>
        </div>
    </section>



  <section id="contact-us" class="col-md-10 m-auto">
        <div class="contact-us row mt-5 mb-5 col-12">

            <div class="contact-infos border-primary-color pl-5 col-md-6">
                <div class="title-description mb-5">
                    <div class="col-11">
                        <h4 class="font-weight-bold">Get in-touch</h4>

                        Himalayan Spice Indian Cusine offers delicious cuisines from the rich royal heritage of India recreating the magic of spices by using ingredients fit royalty.<br><br>
                        We are committed to providing you with an exceptional dining experience whenever you rehearse our door.<br><br>
                        Each dish on our extensive menu is prepared to order using only the freshest and highest quality of ingredients which we offer everyday lunch buffet. No MSG is used in our cooking.<br><br>
                        We operate as a restaurant in Denver, CO. Come see us today!<br><br>
                        If you've questions or comments, please get a hold folks in whichever way is most convenient.
                    </div>
                </div>
            </div>

            <div class="contact-form bg-white p-4 col-md-6">

                <div class="row">
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" id='name' placeholder="Full Name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="number" id="phone" placeholder="Phone Number" name="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" id="email" placeholder="Email Address" name="email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="message" placeholder="Message" name="message" required></textarea>
                </div>
                <button class="button" onclick="sendMessage()">Send Message</button>

                <div id="response" class="bg-success text-light mt-2">

                </div>

            </div>

        </div>

    </section>

    <div class="contact-us-infos row col-11 m-auto">
            <div class="cu-item col-md-4 col-sm-6 ">
                <div class="cu-content shadow">
                    <h4 class="">
                        <i class="fa fa-phone"></i>
                        +17204853107
                    </h4>
                </div>
            </div>
            <div class="cu-item col-md-4 col-sm-6">
                <div class="cu-content shadow">
                <h4 class="">
                    <i class="fa fa-envelope"></i>
                    info@himalayanspicedenver.com
                </h4>
                </div>
            </div>

            <div class="cu-item col-md-4 col-sm-6">
                <div class="cu-content shadow">
                <h4 class="">
                    <i class="fas fa-map-marker-alt"></i>
                    4279 Tennyson St,<br>
                    Denver,Co 80212
                </h4>
                </div>
            </div>
        </div>

    <div class="contact-map col-12 m-0 p-0">
        @if (isset($map))
            @if ($map->count() !== 0)
            {!!$map->name !!}
            @endif
        @endif
    </div>





<script type="application/javascript">
    function sendMessage(){
        $.ajax({
            url:'/save-contact',
            type:'POST',
            dataType:'JSON',
            data:{
                _token: "{{ csrf_token() }}",
                'name':$('#name').val(),
                'phone':$('#phone').val(),
                'email':$('#email').val(),
                'message':$('#message').val(),
            },
            success:function(response){
                $('#name').val(''),
                $('#phone').val(''),
                $('#email').val(''),
                $('#message').val(''),
                $('#response').html(response.message);
                $('#response').css('padding','5px 10px');
                setTimeout(() => {
                    $('#response').css('padding','0px');
                   $('#response').html('');
                }, 4000);
            }

        })
    }
</script>





@endsection

