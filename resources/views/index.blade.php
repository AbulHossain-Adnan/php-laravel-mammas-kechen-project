@extends('layouts.frontend_master')
@section('frontend_content')

        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel">
          <?php foreach ($sliders as $key => $slider): ?>
          <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">{{$slider->big_title}}</h1>
                        <p class="header-sub-title">{{$slider->small_title}}</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
          <?php endforeach; ?>
        </section>

        <!--== 6. About us ==-->
        <?php foreach ($abouts as $key => $about): ?>

        <section id="about" class="about">
            <img src="{{asset('uploads/icon_photos/')}}/{{$about->icon}}" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">{{$about->title}}</h2>
                                <p class="section-content-para">
                                      {{$about->description}}
                                </p>

                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->

<?php endforeach; ?>
        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
              <div id="w">
                  <div class="pricing-filter">
                      <div class="pricing-filter-wrapper">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-10 col-md-offset-1">
                                      <div class="section-header">
                                          <h2 class="pricing-title">Affordable Pricing</h2>
                                          <ul id="filter-list" class="clearfix">
                                              <li class="filter" data-filter="all">All</li>
                                              <?php foreach ($categories as $category): ?>
                                              <li class="filter" data-filter="#categori_{{$category->slug}}">{{$category->name}}</li>
                                            <?php endforeach; ?>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="container">

                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <ul id="menu-pricing" class="menu-price">
                                <?php foreach ($items as $item): ?>
                                  <li class="item" id="categori_{{$item->category->slug}}">
                                      <a href="#">
                                          <img src="{{asset('uploads/item_photos/'.$item->image)}}" class="img-responsive" alt="Food" >
                                          <div class="menu-desc text-center">
                                              <span>
                                                  <h3>{{$item->name}}</h3>
                                                  {{$item->description}}
                                              </span>
                                          </div>
                                      </a>
                                      <h2 class="white">${{$item->price}}</h2>
                                  </li>
                                <?php endforeach; ?>


                              </ul>


                          </div>
                      </div>
                  </div>

              </div>
          </section>

          <!--==  9. Our Beer  ==-->
                 <section id="beer" class="beer">
                     <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend_asset')}}/images/icons/beer_color.png">
                     <div class="container-fluid">
                         <div class="row dis-table">
                             <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                             </div>

                             <div class="col-xs-12 col-sm-6 dis-table-cell">
                                 <div class="section-content">
                                     <h2 class="section-content-title">Our Beer</h2>
                                     <div class="section-description">
                                         <p class="section-content-para">
                                             Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                         </p>
                                         <p class="section-content-para">
                                             beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>



                 <!--== 10. Our Breakfast Menu ==-->
                 <section id="breakfast" class="breakfast">
                     <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend_asset')}}/images/icons/bread_black.png">
                     <div class="wrapper">
                         <div class="container-fluid">
                             <div class="row dis-table">
                                 <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                                     <h2 class="section-title">Our Breakfast Menu</h2>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                                 </div>
                             </div> <!-- /.dis-table -->
                         </div> <!-- /.row -->
                     </div> <!-- /.wrapper -->
                 </section> <!-- /#breakfast -->

        <!--== 11. Our Bread ==-->
        <?php foreach ($breads as $key => $bread): ?>
        <section id="bread" class="bread">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('uploads/bread_icon_photos')}}/{{$bread->icon}}">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">
                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">
                                {{$bread->title}}
                            </h2>
                            <div class="section-description">
                                <p class="section-content-para">
                                {{$bread->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <?php endforeach; ?>
        <!--== 12. Our Featured Dishes Menu ==-->
        <?php foreach ($dishes as $key => $dish): ?>
<section id="featured-dish" class="featured-dish">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('uploads/dishes_icon_photos')}}/{{$dish->icon}}">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">{{$dish->title}}</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#featured-dish -->
        <?php endforeach; ?>
        <!--== 13. Menu List ==-->





        <!--== 14. Have a look to our dishes ==-->

        <section id="have-a-look" class="have-a-look hidden-xs">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend_asset')}}/images/icons/food_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu1.png" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu2.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu3.png" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu4.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu5.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu6.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu7.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu8.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu9.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu10.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend_asset')}}/images/menu-gallery/menu11.jpg" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                            <h2 class="section-title">Have A Look To Our Dishes</h2>
                        </div>


                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>




        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{asset('frontend_asset')}}/images/icons/reserve_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">


                              <script>
                              @if(Session::has('success_msg'))
                                 toastr.options =
                                 {
                                 	"closeButton" : true,
                                 	"progressBar" : true
                                 }
                                 		toastr.success("{{ session('success_msg') }}");
                                 @endif
                               </script>

                                <form class="reservation-form" method="post" action="{{route('reservation.store')}}">
                                  @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>16th Birn street Get Plaza (4th floar) USA</p>
                            <p>+44 12 213584</p>
                            <p>example@mail.com </p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="http::www.facebook.com" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="g-plus"></a></li>
                                <li><a href="#" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="{{route('contact.store')}}">
                               @csrf
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
