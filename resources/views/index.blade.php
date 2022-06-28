<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from levantech.com/workdemo/fashion/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2015 02:18:10 GMT -->
    <head>
        @include('head')
    </head>
    <body>
        <header>
            <div class="up-header clearfix">
                @include('user.header.up-header')
            </div>
            <div class="header clearfix">
                @include('user.header.header')
            </div>
            <div class="below-header">
                @include('user.header.below-header')
            </div>
        </header>

        <div data-example-id="simple-carousel" class="below-headeer hidden-xs">
            <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
                    <li data-slide-to="1" data-target="#carousel-example-generic"></li>
                    <li data-slide-to="2" data-target="#carousel-example-generic"></li>
                </ol>
                <div role="listbox" class="carousel-inner">
                    <div class="item active"> <img src="assets/images/pic-1.jpg" alt="" class="img-responsive hidden-lg">

                        <img src="assets/images/pic-1-lg.jpg" alt="" class="img-responsive visible-lg">



                    </div>
                    <div class="item"> <img src="assets/images/pic-2.jpg" alt="" class="img-responsive hidden-lg">
                        <img src="assets/images/pic-2-lg.jpg" alt="" class="img-responsive visible-lg"></div>
                    <div class="item"> <img src="assets/images/pic-3.jpg" alt="" class="img-responsive hidden-lg"><img src="assets/images/pic-3-lg.jpg" alt="" class="img-responsive visible-lg"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="pro-sec clearfix wow bounceInUp" data-wow-duration="2s">
                <div class="col-md-3 col-sm-3 ">
                    <div class="row">
                        <!-- Carousel -->
                        <div id="carousel-example-generic-3" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic-3" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic-3" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic-3" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="black-bg">
                                        <p class="font-25 font-bold text-uppercase">Best Selling
                                            Products</p>
                                        <p class="font-13">Lorem ipsum dolor sit amet conse ctetur adipiscing elit. Sed luctus as cu id nibh scelerisque.</p>
                                        <p><a href="#" class="view text-uppercase">View all products</a></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="black-bg">
                                        <p class="font-25 font-bold text-uppercase">Best Selling
                                            Products</p>
                                        <p class="font-13">Lorem ipsum dolor sit amet conse ctetur adipiscing elit. Sed luctus as cu id nibh scelerisque.</p>
                                        <p><a href="#" class="view text-uppercase">View all products</a></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="black-bg">
                                        <p class="font-25 font-bold text-uppercase">Best Selling
                                            Products</p>
                                        <p class="font-13">Lorem ipsum dolor sit amet conse ctetur adipiscing elit. Sed luctus as cu id nibh scelerisque.</p>
                                        <p><a href="#" class="view text-uppercase">View all products</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                </div>
                <div class="pro-item col-md-3 col-sm-3 "> <img src="assets/images/s-2.jpg" alt="" class="img-responsive">
                    <p class="font-15">Solo Bag In Natural</p>
                    <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                    <div class="clearfix"> <a class="cart" href="#">add to cart</a> </div>
                </div>
                <div class="pro-item col-md-3 col-sm-3 "> <img src="assets/images/s-3.jpg" alt="" class="img-responsive">
                    <p class="font-15">Solo Bag In Natural</p>
                    <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                    <div class="clearfix"> <a class="cart" href="#">add to cart</a> </div>
                </div>
                <div class="pro-item col-md-3 col-sm-3 "> <img src="assets/images/s-4.jpg" alt="" class="img-responsive" >
                    <p class="font-15">Solo Bag In Natural</p>
                    <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                    <div class="clearfix"> <a class="cart" href="#">add to cart</a> </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row wow home-1 bounceInLeft hidden-sm hidden-xs" data-wow-duration="2s">
                <div class="col-md-6 col-sm-12"> <img src="assets/images/b-4.jpg" alt="" class="img-responsive hvr-float" style="height:332px;"></div>
                <div class="col-md-3 col-sm-3">
                    <div class="row">
                        <ul class="list-unstyled man-li">
                            <li><img src="assets/images/b-7.jpg" alt="" class="img-responsive hvr-float"></li>
                            <li><img src="assets/images/b-9.jpg" alt="" class="img-responsive hvr-float"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 last-item">
                    <div class="row"> <img src="assets/images/b-5.jpg" alt="" class="img-responsive hvr-float"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="timer-sec">
                <div class="row wow bounceInRight" data-wow-duration="2s">
                    <div class="col-md-3 col-sm-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="feature">
                                    <p class="font-18 text-uppercase deals"><span class="font-bold">Supper</span> deals</p>
                                </div>
                            </div>
                        </div>
                        <div class="pro-item">
                            <div class="counter-timer">
                                <ul class="list-unstyled">
                                    <li>
                                        <div id="daysBox" class="font-bold font-16">15</div>
                                        Days </li>
                                    <li>
                                        <div id="hoursBox" class="font-bold font-16">8</div>
                                        Hours </li>
                                    <li>
                                        <div id="minsBox" class="font-bold font-16">0</div>
                                        Minutes </li>
                                    <li>
                                        <div id="secsBox" class="font-bold font-16">35</div>
                                        Seconds </li>
                                </ul>
                            </div>
                            <div class=""> <img src="assets/images/b-14.jpg" alt="" class="img-responsive" ><br>
                                <p class="font-15">Solo Bag In Natural</p>
                                <img src="assets/images/star-rating.png" alt="" class="img-responsive mar-bot-7">
                                <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="col-xs-12 clearfix">
                                <div class="feature clearfix">
                                    <p class="font-18 text-uppercase deals pull-left"><span class="font-bold">Feature</span> products</p>
                                    <ul role="tablist" class="tab-links pull-right list-inline" id="myTab">
                                        <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#home">Women<span class="slash-spacing">/</span></a></li>
                                        <li role="presentation" class=""><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#profile" aria-expanded="false"> Men<span class="slash-spacing">/</span></a></li>
                                        <li class="active" role="presentation"><a aria-expanded="true" aria-controls="acc" data-toggle="tab" role="tab" id="acc-tab" href="#acc"> Accessories<span class="slash-spacing">/</span></a></li>
                                        <li class="active" role="presentation"><a aria-expanded="true" aria-controls="kids" data-toggle="tab" role="tab" id="kids-tab" href="#kids"> Kids</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-1.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-13.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-12.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-3.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-15.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-16.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-17.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-18.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kids" aria-labelledby="kids-tab">
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-26.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-25.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-24.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-23.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="acc" aria-labelledby="acc-tab">
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-19.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-20.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-21.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 pro-item"> <img class="img-responsive" alt="" src="assets/images/b-22.jpg">
                                        <p class="font-15">Solo Bag In Natural</p>
                                        <p class="font-15 orange font-bold"><del class="light-grey lighter">$409.00</del>$260.00</p>
                                        <div class="clearfix"> <a href="#" class="cart">add to cart</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner hidden-xs hidden-sm"> <img src="assets/images/banner-long.jpg" alt="" class="img-responsive"></div>
        <footer class="wow bounceInUp" data-wow-duration="2s">
            <div class="container">
                <div class="col-md-3 col-sm-6 footer-item"> <img src="assets/images/logo-no-line.jpg" alt="" class="img-responsive">
                    <ul class="list-unstyled footer-icons">
                        <li class="message">contact@leebros.us</li>
                        <li  class="phone">+1 (00) 86 868 868 666 - 868 666 888</li>
                    </ul>
                    <div class="social-icons-2"> <a href="#" class="social fa fa-twitter" title="google-plus"></a> <a href="#" class="social fa fa-google-plus" title="google-plus"></a><a href="#" class="social fa fa-facebook fa-icon" title="google-plus"></a><a href="#" class="social fa fa-linkedin" title="Linkedin"></a> <a href="#" class="social fa fa-pinterest" title="Pinterest"></a></div>
                </div>
                <div class="col-md-2 col-sm-3 footer-item">
                    <p class="font-15 font-bold text-uppercase">Help</p>
                    <ul class="list-unstyled footer-links">
                        <li> <a href="#">Orders & Returns</a> </li>
                        <li> <a href="#">Search Terms</a> </li>
                        <li> <a href="#">Advance Search</a> </li>
                        <li> <a href="#">Affiliates</a> </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 footer-item">
                    <p class="font-15 font-bold text-uppercase">My Account</p>
                    <ul class="list-unstyled footer-links">
                        <li> <a href="#">About Us</a> </li>
                        <li> <a href="#">Delivery Information</a> </li>
                        <li> <a href="#">Privacy & Policy</a> </li>
                        <li> <a href="#">Terms & Conditions</a> </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 footer-item">
                    <p class="font-15 font-bold text-uppercase">Information</p>
                    <ul class="list-unstyled footer-links">
                        <li> <a href="#">About Us</a> </li>
                        <li> <a href="#">Delivery Information</a> </li>
                        <li> <a href="#">Privacy & Policy</a> </li>
                        <li> <a href="#">Terms & Conditions</a> </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-item">
                    <p class="font-15 font-bold text-uppercase">newsleeter</p>
                    <ul class="list-unstyled footer-links">
                        <li> <a href="#">Sign up  with your email to get updates!</a> </li>
                    </ul>
                    <br>
                    <div class="input-group search">
                        <input type="text" placeholder="Type your email" class="form-control">
                        <span class="input-group-btn">
                <button type="button" class="btn btn-default">Go</button>
                </span> </div>
                    <!-- /input-group -->

                </div>
            </div>
        </footer>
        <div class="line-full"></div>
        <br>
        <div class="below-footer clearfix">
            <div class="container">
                <p class=" pull-left font-14">Copyright &copy; 2015 <span class="pink">Leebros.</span> </p>
                <div class="pull-right">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#"><img src="assets/images/visa.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/card.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/discover.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/american.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/paypal.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @include('scripts')
    </body>

<!-- Mirrored from levantech.com/workdemo/fashion/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2015 02:20:02 GMT -->
</html>
