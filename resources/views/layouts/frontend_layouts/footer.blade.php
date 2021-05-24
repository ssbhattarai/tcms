<footer>

    <div class="footer col-12 mt-4">
        <div class="bg-image">
            <img src="{{asset('/assets/images/ama.jpg')}}" alt="">
        </div>
        <div class="row col-12 m-0 p-0">

            <div class="social col-md-3">

                <div class="f-logo col-8">
                    <h5 class="text-center">Created By</h5>
                    <a href="https://digitalterai.com/" target="_blank">
                        <img class="col-12" src="{{asset('/assets/images/digitalterai.png')}}" alt="">
                    </a>
                </div>


            </div>

            <div class="footer-services col-md-3 mt-3">
                <ul class="f-social-icons row justify-content-center">
                    <li class="p-2">
                        <a href="https://www.facebook.com/grillandbakes">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="p-2">
                        <a href="https://www.twitter.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="p-2">
                        <a href="https://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-services col-md-3 mt-3">
                <h3 class="fs-title">
                    Resources
                </h3>
                <ul class="fs-list p-0">
                    <li>
                        <a href="/about">About Us</a>
                    </li>
                    <li>
                        <a href="{{url('/blog')}}">Blog </a>
                    </li>
                </ul>
            </div>

            <div class="footer-services col-md-3 mt-3">
                <h3 class="fs-title">
                    Support
                </h3>
                <ul class="fs-list p-0">
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                    <li>
                        <a href="/infos/terms-conditions">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="/infos/privacy-policy">Privacy Policy</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-copyright">
            <p>
                Copyright &copy; 2021 Gril and Bakes
            </p>
        </div>

    </div>

</footer>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script type="application/javascript">
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
attribution="setup_tool"
page_id="104033138449893">
</div>
