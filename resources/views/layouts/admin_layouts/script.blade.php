<script type="application/javascript">
    // alert notification remove
    setTimeout(() => {
        var x = $('.alert').css('display','none');
    }, 5000);
</script>


<!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('/assets/admin/vendor/js-cookie/js.cookie.js')}}" defer></script>
  <script src="{{asset('/assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}" defer></script>
  <script src="{{asset('/assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}" defer></script>

  <!-- Argon JS -->
  <script src="{{asset('/assets/admin/js/argon.js?v=1.2.0')}}" defer></script>


  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

@yield('script')


</body>
</html>
