

 {{-- @include('frontend.layouts.header')
 @include('frontend.layouts.navbar')

        @yield('content')

         @include('frontend.layouts.footer')
     </div>
     @include('frontend.layouts.script')
 </body>

 </html> --}}

@include("frontend.layouts.header")

  @include('frontend.layouts.navbar')

 @yield('content')
@include("frontend.layouts.footer")
 @include("frontend.layouts.script")

</body>

</html>
