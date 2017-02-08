<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/image/favicon.ico" rel="icon" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta property="og:site_name" content="Tienda - Online Grocery in Pampanga" />
<meta property="og:title" content="Tienda - Online shopping in Pampanga" />
<meta property="og:image" content="image/banner/meta-image.jpg" />

<meta property="og:url" content="http://www.tienda.ph/">
<meta property="og:description" content="First Online Grocery Shopping in Pampanga & Philippines offering the lowest prices." />

<meta name="description" content="Pampanga online grocery delivery service, Tienda, first in the Philippines. Order now!"/>


<title>Tienda - Pampanga Online Grocery, First in the Pilippines</title>

<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/css/notify.css">
<link rel="stylesheet" type="text/css" href="/css/prettify.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="/css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="/css/stylesheet-skin2.css" />
<link rel="stylesheet" type="text/css" href="/css/custom.css" />
<link rel="stylesheet" type="text/css" href="/css/helpers/flasher.css" />
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Droid+Sans' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/tienda.css" />
<link rel="stylesheet" type="text/css" href="/css/loader.css" />
<link rel="stylesheet" type="text/css" href="/css/mobile.css" />

<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
<!-- CSS Part End-->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '0b4731d52aed923c8f005f84210e97c00c7506e5';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='//www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>


<style type="text/css">

.add-minus-bar {
    margin-top: -10px;
    margin-bottom: 10px;
    margin-right: 5px;
    margin-left: 0px;
}

.add-minus-bar .input-number {
    height: 32px;
    text-align: center;
    font-size: 20px;
}

.grandtotal {

  text-align: right; margin: 20px auto 10px; font-size: 2em; font-weight: bold; color: #ae242a

}


.product-title {
    margin-top: 0;
    font-size: 20px;
    font-weight: bold;
    padding-left: 20px;
}

.product-price {
  padding-right: 25px; text-align: right; font-size: 20px; font-weight: bold;
}

.product-body {
  padding-left: 5px; padding-right: 5px;
}
@media (max-width: 767px) {
  .confirm_details h2 {display: none}

 /* .sweet-overlay, .sweet-alert{
      position: absolute!important;
  } */
}

  </style>

</head>
<body onunload="">
  <!-- 
    back button refresh hack!!! 
    do we need to find a better cross browser solution here?
  -->
  <!-- <input id="alwaysFetch" type="hidden" />
  <script>
    setTimeout(function () {
        var el = document.getElementById('alwaysFetch');
        el.value = el.value ? location.reload() : true;
    }, 0);
  </script> -->
<div class="wrapper-wide">
  <div id="header" class="navbar-fixed-top" style="position: fixed;">
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row" style="padding-top: 5px; padding-bottom: 5px;">
      <div class="container">
        <div class="table-container">
          <!-- Logo Start -->
          <div class="col-table-cell col-xs-6 inner">
            <div id="logo"><a href="/"><img style="height: 60px;" class="img-responsive" src="/image/logo.png" title="Tienda" alt="Tienda - Online Grocery & Delivery in Pampanga" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-xs-6 pull-right" id="minicart-container">
                <!--  <form class="form-inline">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name here">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

              
      <p class='grandtotal'><span class="hidden-xs">Total: </span>P<span id="order-total">0.00</span></p>


          </div>
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- Main Menu Start-->
    
   
    
    <!-- Main Menu End-->
  </div>
  <div id="container" style="padding-top: 80px;">
        @include('helpers.flasher')
        @include('errors.validation')
        @yield('content')
  </div>

  <!--Footer Start-->
  <footer id="footer">
    <div class="fpart-first">
      <div class="container">
        <div class="row">
          <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h5>About Tienda</h5>

            <p>
            Your online grocery delivery service in Pampanga is here to help you say good bye to long queues in supermarkets. Say hi to low prices and convenience! Tienda is an online grocery service that also delivers goods straight to your doorsteps.
            </p>
            <a href="/"><img alt="Tienda - Online Grocery & Delivery in Pampanga" src="/image/logo-small.png"></a>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Information</h5>
            <ul>
              <li><a href="/about-us">About Us</a></li>
              <li><a href="/privacy-policy">Privacy Policy</a></li>
              <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Customer Service</h5>
            <ul>
              <li><a href="/how-it-works">How It Works</a></li>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="/contact-us">Contact Us</a></li>
              <!-- <li><a href="/sitemap">Sitemap</a></li> -->
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Extras</h5>
            <ul>
              <li><a href="/suppliers">Suppliers</a></li>
             <!--  <li><a href="#">Gift Vouchers</a></li>
              <li><a href="#">Affiliates</a></li>
              <li><a href="#">Specials</a></li> -->
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>My Account</h5>
            <ul>
              <li><a href="/account">My Account</a></li>
              <li><a href="/order/history">Order History</a></li>
             <!--  <li><a href="javascript:;">Wish List</a></li>
              <li><a href="javascript:;">Newsletter</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fpart-second">
      <div class="container">
        <div id="powered" class="clearfix">
          <div class="powered_text pull-left flip">
            <p>Tienda - Your First Online Grocery in the Philippines © {{ date('Y') }}</p>
          </div>
          <div class="social pull-right flip"> 
                <a href="https://www.facebook.com/tiendadotph" target="_blank"> 
                    <img data-toggle="tooltip" src="/image/socialicons/facebook.png" alt="Facebook" title="Facebook">
                </a> 
              <!--   <a href="#" target="_blank"> 
                    <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> 
                </a> --> <!-- 
                <a href="#" target="_blank"> 
                    <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> 
                </a>  -->
         <!--        <a href="#" target="_blank"> 
                    <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> 
                </a>  -->
                <a href="#" target="_blank"> 
                    <img data-toggle="tooltip" src="/image/socialicons/rss.png" alt="RSS" title="RSS"> 
                </a> 
            </div>
        </div>
        <div class="bottom-row">
          <div class="custom-text text-center">
            <p>If you are not 100% satisfied with your purchase, you can call us at +63 9258166813 for a full refund. <br />We believe that in order to have the best possible online shopping experience, our customers should not be bothered returning the product, <br />so you can just contact us and we will get your purchase and deliver your refund to your doorstep.</p>
          </div>
          <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>
        </div>
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>


  <!--Footer End-->
  <!-- Twitter Side Block Start --><!-- 
  <div id="twitter_footer" class="twit-right sort-order-1">
    <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
    <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div> -->
  <!-- Twitter Side Block End -->
  <!-- Facebook Side Block Start -->
  <div id="facebook" class="fb-right sort-order-2">
    <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
    <div class="fb-page" data-href="https://www.facebook.com/tiendadotph/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
      <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/tiendadotph/"><a href="https://www.facebook.com/tiendadotph/">Tienda</a></blockquote>
      </div>
    </div>
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
  </div>
  <!-- Facebook Side Block End -->

</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/map.js"></script>
<script type="text/javascript" src="/js/notify.js"></script>
<script type="text/javascript" src="/js/prettify.js"></script>
<script type="text/javascript" src="/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/contact.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<script type="text/javascript" src="/js/jquery.jscroll.min.js"></script>
<script type="text/javascript" src="/js/jquery.imgcheckbox.js"></script>
<script src="/js/sweetalert.min.js"></script>

<script src="/js/mask.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    // $("img.checkbox").imgCheckbox({
    //     onclick: function(){
    //        calculateTotal();
    //     }
    // });

    $("#cmobile").mask("9999-999-9999");

    $('.btn-number').click(function(e){
        e.preventDefault();
        
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
        calculateTotal();
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
});
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }

        
    });

    $(".input-number").keyup(function (e) {


        if( $(this).val() == "" ) {
            $(this).val("0");
        }
        calculateTotal();
    });


    function calculateTotal() {
       
        var total = 0;
        $( ".product .input-number" ).each(function( index ) {


           total += parseFloat($(this).parents('.product').find('.item-price').text() ) * parseInt($(this).val());
           
        });

        $("#order-total").text(total.toFixed(2));
    }

    $('#companyOrder').on('submit', function(e) {

       $("#submit").attr("disabled", "disabled");

        var $form = $(this);
        var $submitButton = $form.find('btn');
        // prevent native submit
        e.preventDefault();

        var orders = [];
        var orders_str = '';

        $( ".product .input-number" ).each(function( index ) {

          if($(this).val() > 0) {
              var order_text = $(this).val() + ' ' + $(this).parents('.product').find('img').attr('alt');
              orders.push( order_text );
              orders_str += order_text + "<br />";
          }

        });

        $("#order-hidden").val(JSON.stringify(orders));
        $("#total-hidden").val($("#order-total").text());

        if(orders.length < 1) {
            swal({
              title: "Error!",
              text: "You forgot to select your meal.",
              type: "error",
              confirmButtonText: "Cool"
            });

            $("#submit").removeAttr("disabled");

            return false;
        }
        var html = '<div class="table-responsive"><table class="table" style="text-align: left"><tbody>';
        html    += "<tr><th class='hidden-xs'><strong>Name: </strong></th><td>" + $("#cname").val() + '</td></tr>';
        if($("#cmobile").val() != "") {
        html    += "<tr><th class='hidden-xs'><strong>Mobile: </strong></th><td>" + $("#cmobile").val() + '</td></tr>';
        }
        html    += "<tr><th class='hidden-xs'><strong>Company: </strong></th><td>" + $("#ccompany").val() + ' / ' +$("#cbranch").val() + '</td></tr>';
        html    += "<tr><th class='hidden-xs'><strong>Order(s): </strong></th><td>" + orders_str + '</td></tr>';
        
        html    += "<tr><th class='hidden-xs'><strong>Total: </strong></th><td>P" + $("#order-total").text() + '</td></tr>';
        html    += "<tr><th class='hidden-xs'><strong>Delivery: </strong></th><td>" + $("#cdeliverytime").val() + '</td></tr>';
        html    += '</tbody></table></div>'
        swal({
          title: "Please Confirm Details",
          text: html,
          customClass: "confirm_details",
          html: true,
          showCancelButton: true,
          showLoaderOnConfirm: true,
          confirmButtonText: "Looks Good!",
          closeOnConfirm: false
        }, function(isConfirm){
            if (isConfirm) {
            $form.ajaxSubmit({
                url: '/orders/process',
                type: 'post',
                dataType: 'json',
                success: function(response, status, xhr, form) {
                    swal({
                      title: "Good job!", 
                      text: "Your order is now being processed.  If you have questions, don't hesitate to call us at ‎(045) 308-5345.", 
                      type: "success",
                      allowEscapeKey: false

                    }, function () {
                      //hardcoded
                       location.href = $("#redirect-hidden").val();
                    });
                },
                error: function(response) {
                   
                    swal({
                      title: "Error!",
                      text: "Something went wrong, try again!",
                      type: "error",
                      confirmButtonText: "Cool"
                    });
                    $("#submit").removeAttr("disabled");
                }
            });
          } else {  
             $("#submit").removeAttr("disabled");
          }
        });
    });

    
  });
</script>
<!-- JS Part End-->
@yield('script')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47080785-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1679290829049061');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1679290829049061&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</body>
</html>