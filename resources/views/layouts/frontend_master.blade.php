<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Mamma's Kitchen</title>

        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/owl.theme.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/animate.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/flexslider.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/pricing.css">
        <link rel="stylesheet" href="{{asset('frontend_asset')}}/css/main.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
            alpha/css/bootstrap.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <style media="screen">
        <?php foreach ($sliders as $key => $slider): ?>


        .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{$key+1}}) .item
        {
          background: url('{{asset('uploads/slider_photos/')}}/{{$slider->image}}');
          background-size: cover;
          background-position: bottom;
        }
          <?php endforeach; ?>
        </style>
        <style media="screen">
        <?php foreach ($abouts as $key => $about): ?>


        .about-bg
        {
          background: url('{{asset('uploads/about_photos/')}}/{{$about->image}}');
          background-repeat: no-repeat;
          background-size: 85%;
            background-position-x: 15%;
            background-position-y: 80%;
        }
          <?php endforeach; ?>
        </style>
        <style>
        <?php foreach ($breads as $key => $bread): ?>


        .bread .section-bg
        {
        	/*background: url('../images/bread-bg1.png'), url('../images/bread-bg2.png');
        	background-position-x: 58%, 80%;
        	background-position-y: 50%, 50%;
        	background-repeat: no-repeat, no-repeat;
        	background-size: 300px,240px;*/

        	background: url("{{asset('uploads/bread_photos')}}/{{$bread->image}}"), url("{{asset('uploads/bread2_photos')}}/{{$bread->image2}}");
            background-repeat: no-repeat, no-repeat;
            background-position: 51% 58%, 75% 58%;
            background-size: 300px 300px, 240px 240px;
        }
        <?php endforeach; ?>
        </style>
        <style media="screen">
        <?php foreach ($dishes as $key => $dish): ?>


        .featured-dish .section-bg
        {
          background-image: url('{{asset('uploads/dishes_photos')}}/{{$dish->image}}');
        }
          <?php endforeach; ?>
        </style>


        <script src="{{asset('frontend_asset')}}/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="{{asset('frontend_asset')}}/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"Mamma's Kitchen Restaurant"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="{{asset('frontend_asset')}}/images/Logo_main.png" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">about</a></li>
                        <li><a href="#pricing">pricing</a></li>
                        <li><a href="#breakfast">bread</a></li>
                        <li><a href="#reserve">reservation</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>
@yield('frontend_content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="{{asset('frontend_asset')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend_asset')}}/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{asset('frontend_asset')}}/js/jquery.mixitup.min.js" ></script>
        <script src="{{asset('frontend_asset')}}/js/wow.min.js"></script>
        <script src="{{asset('frontend_asset')}}/js/jquery.validate.js"></script>
        <script type="text/javascript" src="{{asset('frontend_asset')}}/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="{{asset('frontend_asset')}}/js/jQuery.scrollSpeed.js"></script>
        <script src="{{asset('frontend_asset')}}/js/script.js"></script>




         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
         <script>
          @if(Session::has('message'))
          toastr.options =
          {
          	"closeButton" : true,
          	"progressBar" : true
          }
          		toastr.success("{{ session('message') }}");
          @endif
          </script>


    </body>
</html>
