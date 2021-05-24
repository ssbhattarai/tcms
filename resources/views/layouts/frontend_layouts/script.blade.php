

<script type="application/javascript">
    function closeNotice() {
        $('#header-notify').css('display','none');   
    }
</script>


<script type="application/javascript"> 

    
    
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style = "background-color:white !important; box-shadow:0 6px 12px rgba(0, 0, 0, 0.1);";
        document.getElementById("nav-logo").style.height = "70px";
            
    } else {
        document.getElementById("navbar").style = "background-color:white !important";
        document.getElementById("nav-logo").style.height = "80px";
    }
    }

     // alert notification remove
    setTimeout(() => {
        var x = $('.alert').css('display','none');
         $('#alert-message').css('display','none');
         $('#alert-message').css('padding', '0px');
    }, 4000);

    // session alert
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
        $('#alert-message').html(msg);
        $('#alert-message').css('padding', '10px 20px');
    }
</script>





</body>
</html>