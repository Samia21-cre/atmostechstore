@extends('Store.app')
@section('content')
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.html">Home</a></li>
                                    <li class="drop"><a href="portfolio-gutter-box-3.html">portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Boxed Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-box-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-gutter-box-3.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-gutter-box-2.html">Gutter 2 Column</a></li>
                                                    <li><a href="portfolio-nospace-box-4.html">no Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-box-3.html"> no Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-nospace-box-2.html">no Gutter 2 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Wide Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-full-wide-6.html">Gutter 6 Column</a></li>
                                                    <li><a href="portfolio-gutter-full-wide-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-full-wide-6.html">no Gutter 6 Column</a></li>
                                                    <li><a href="portfolio-nospace-full-wide-4.html"> no Gutter 4 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Card Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-card-box-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-card-box-3.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-card-box-2.html">Gutter 2 Column</a></li>
                                                    <li><a href="portfolio-card-full-wide-6.html"> full Width 6 Column</a></li>
                                                    <li><a href="portfolio-card-full-wide-4.html"> full Width 4 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Masonry Box <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-masonry-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-masonry-3.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-masonry-2.html">Gutter 2 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-4.html">no Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-3.html"> no Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-2.html">no Gutter 2 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Masonry Wide <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-masonry-fullwide-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-gutter-masonry-fullwide-6.html">Gutter 6 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-fullwide-4.html">no Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-fullwide-6.html"> no Gutter 6 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">carousel style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-box-3-carousel.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-gutter-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                    <li><a href="portfolio-card-box-3-carousel.html">card 3 Column</a></li>
                                                    <li><a href="portfolio-card-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">justified style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-justified-box-3.html">box 3 Column</a></li>
                                                    <li><a href="portfolio-justified-full-wide-3.html">full wide 3 Column</a></li>
                                                    <li><a href="portfolio-justified-box-nospace-3.html">box no space 3 Column</a></li>
                                                    <li><a href="portfolio-justified-nospace-fullwide-3.html">full wide no space 3 Col</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Portfolio Details <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="single-portfolio.html">style 1</a></li>
                                                    <li><a href="single-portfolio-left-details.html">style 2</a></li>
                                                    <li><a href="single-portfolio-gallery.html">gallery style</a></li>
                                                    <li><a href="single-portfolio-slider.html">slider style</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="blog.html">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">blog 3 column</a></li>
                                            <li><a href="blog-2-col.html">blog 2 column</a></li>
                                            <li><a href="blog-2-col-leftsidebar.html">2 col left siderbar</a></li>
                                            <li><a href="blog-4-col-fullwide.html">4 column full wide</a></li>
                                            <li><a href="blog-3-col-fullwide-sidebar.html">3 col full wide sidebar</a></li>
                                            <li><a href="blog-details.html"> details right sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html"> details left sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="shop.html">Shop</a>
                                        <ul class="dropdown mega_dropdown">
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.html">shop layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="shop.html">default shop</a></li>
                                                    <li><a href="shop-2-col.html">2 column box</a></li>
                                                    <li><a href="shop-3-col.html">3 column box</a></li>
                                                    <li><a href="shop-4-col-full-wide.html">4 column full wide</a></li>
                                                    <li><a href="shop-6-col-full-wide.html">6 column full wide</a></li>
                                                    <li><a href="shop-on-sale.html">shop on sale</a></li>
                                                    <li><a href="shop-sidebar.html">shop left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.html">product details layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="product-details.html">tab style 1</a></li>
                                                    <li><a href="product-details-2.html">tab style 2</a></li>
                                                    <li><a href="product-details-gallery-left.html">gallery left</a></li>
                                                    <li><a href="product-details-gallery-right.html">gallery right</a></li>
                                                    <li><a href="product-details-sticky-left.html">sticky left</a></li>
                                                    <li><a href="product-details-sticky-right.html">sticky right</a></li>
                                                    <li><a href="product-details-slider-box.html">slider box</a></li>
                                                    <li><a href="product-details-slider-full-wide.html">slider full wide</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li>
                                                <ul class="mega__item">
                                                    <li>
                                                        <div class="mega-item-img">
                                                            <a href="shop.html">
                                                                <img src="images/feature-img/3.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">pages</a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="customer-review.html">customer review</a></li>
                                                    <li><a href="customer-review-2.html">customer review 2</a></li>
                                                    <li><a href="customer-review-3.html">customer review 3</a></li>
                                                    <li><a href="customer-review-4.html">customer review 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="login-register.html">login & register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                                <li><a href="index-9.html">Home 9</a></li>
                                                <li><a href="index-10.html">Home 10</a></li>
                                                <li><a href="index-11.html">Home 11</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">portfolio</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Boxed Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-box-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-gutter-box-3.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-gutter-box-2.html">Gutter 2 Column</a></li>
                                                        <li><a href="portfolio-nospace-box-4.html">no Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-box-3.html"> no Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-nospace-box-2.html">no Gutter 2 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Wide Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-full-wide-6.html">Gutter 6 Column</a></li>
                                                        <li><a href="portfolio-gutter-full-wide-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-full-wide-6.html">no Gutter 6 Column</a></li>
                                                        <li><a href="portfolio-nospace-full-wide-4.html"> no Gutter 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Card Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-card-box-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-card-box-3.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-card-box-2.html">Gutter 2 Column</a></li>
                                                        <li><a href="portfolio-card-full-wide-6.html"> full Width 6 Column</a></li>
                                                        <li><a href="portfolio-card-full-wide-4.html"> full Width 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry Box <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-masonry-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-masonry-3.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-masonry-2.html">Gutter 2 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-4.html">no Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-3.html"> no Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-2.html">no Gutter 2 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry Wide <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-masonry-fullwide-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-gutter-masonry-fullwide-6.html">Gutter 6 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-fullwide-4.html">no Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-fullwide-6.html"> no Gutter 6 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">carousel style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-box-3-carousel.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-gutter-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                        <li><a href="portfolio-card-box-3-carousel.html">card 3 Column</a></li>
                                                        <li><a href="portfolio-card-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">justified style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-justified-box-3.html">box 3 Column</a></li>
                                                        <li><a href="portfolio-justified-full-wide-3.html">full wide 3 Column</a></li>
                                                        <li><a href="portfolio-justified-box-nospace-3.html">box no space 3 Column</a></li>
                                                        <li><a href="portfolio-justified-nospace-fullwide-3.html">full wide no space 3 Col</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Portfolio Details <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="single-portfolio.html">style 1</a></li>
                                                        <li><a href="single-portfolio-left-details.html">style 2</a></li>
                                                        <li><a href="single-portfolio-gallery.html">gallery style</a></li>
                                                        <li><a href="single-portfolio-slider.html">slider style</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog 3 column</a></li>
                                                <li><a href="blog-2-col.html">blog 2 column</a></li>
                                                <li><a href="blog-2-col-leftsidebar.html">2 col left siderbar</a></li>
                                                <li><a href="blog-4-col-fullwide.html">4 column full wide</a></li>
                                                <li><a href="blog-3-col-fullwide-sidebar.html">3 col full wide sidebar</a></li>
                                                <li><a href="blog-details.html"> details right sidebar</a></li>
                                                <li><a href="blog-details-left-sidebar.html"> details left sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-down"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="customer-review.html">customer review</a></li>
                                                        <li><a href="customer-review-2.html">customer review 2</a></li>
                                                        <li><a href="customer-review-3.html">customer review 3</a></li>
                                                        <li><a href="customer-review-4.html">customer review 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="login-register.html">login & register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">  
                            <ul class="menu-extra">
                                <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                                <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <ul class="sidebar__thumd">
                        <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                    </ul>
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('Store/images/bg/2.jpg') }}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">About Us</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">About Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Our Store Area -->
        <section class="htc__store__area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">Welcome To Tmart Store</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        </div>
                        <div class="store__btn">
                            <a href="#">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Store Area -->
        <!-- Start Choose Us Area -->
        <section class="htc__choose__us__ares bg__white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="video__wrap bg--3" data--black__overlay="5">
                            <div class="video__inner">
                                <a class="video__trigger video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__choose__wrap bg__cat--4">
                            <h2 class="choose__title">Why Choose Us?</h2>
                            <div class="choose__container">
                                <div class="single__chooose">
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                            <span class="ti-heart"></span>
                                        </div>
                                        <div class="choose__details">
                                            <h4>Free Gift Box</h4>
                                            <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                        </div>
                                    </div>
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                            <span class="ti-truck"></span>
                                        </div>
                                        <div class="choose__details">
                                            <h4>Free Delivery</h4>
                                            <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__chooose">
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                            <span class="ti-reload"></span>
                                        </div>
                                        <div class="choose__details">
                                            <h4>Money Back</h4>
                                            <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                        </div>
                                    </div>
                                    <div class="choose__us">
                                        <div class="choose__icon">
                                            <span class="ti-time"></span>
                                        </div>
                                        <div class="choose__details">
                                            <h4>Support 24/7</h4>
                                            <p>Lorem ipsum dolor sit amet consect adipisic elit sed do. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Us Area -->
        <!-- Start brand Area -->
        <div class="htc__brand__area bg__white ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="brand__list">
                            <li><a href="#">
                                <img src="images/brand/1.png" alt="brand images">
                            </a></li>
                            <li><a href="#">
                                <img src="images/brand/2.png" alt="brand images">
                            </a></li>
                            <li><a href="#">
                                <img src="images/brand/3.png" alt="brand images">
                            </a></li>
                            <li><a href="#">
                                <img src="images/brand/4.png" alt="brand images">
                            </a></li>
                            <li class="hidden-sm"><a href="#">
                                <img src="images/brand/5.png" alt="brand images">
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand Area -->
    </div>
@endsection