@include('common.top')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">

    <!-- Outer Wrapper-->
<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">
        <!-- Navigation-->
        <div class="header">
            <div class="wrapper">
                <div class="brand">
                    <a href="/"><img src="img/logo-restaurants.png" alt="logo"></a>
                </div>
                <nav class="navigation-items">
                    <div class="wrapper">
                        <ul class="main-navigation navigation-top-header"></ul>
                        <ul class="user-area">
                        </ul>
                        <a href="submit.html" class="submit-item">
                            <div class="content"><span>Submit Your Item</span></div>
                            <div class="icon">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                        <div class="toggle-navigation">
                            <div class="icon">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end Navigation-->
        <!-- Page Canvas-->
        <div id="page-canvas">
            <!--Off Canvas Navigation-->
            <nav class="off-canvas-navigation">
                <header>Navigation</header>
                <div class="main-navigation navigation-off-canvas"></div>
            </nav>
            <!--end Off Canvas Navigation-->
            <!--Page Content-->
            <div id="page-content">
                <!--Hero Image-->
                <section class="hero-image search-filter-middle height-500">
                    <div class="inner">
                        <div class="container">
                            <h1>Find school to learn</h1>
                            <div class="search-bar horizontal">
                                <form class="main-search border-less-inputs background-dark narrow" role="form" method="post" action="./search">
                                    {{ csrf_field() }}
                                    <div class="input-row">
                                        <div class="form-group">
                                            <label for="keyword">Keyword</label>
                                            <input name="keyword" type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="model">Place Type</label>
                                            <select name="county" id="model" multiple title="Any" data-live-search="true">
                                                <option value='any'>Any</option>
                                                <option value='Nairobi City'>Nairobi City</option>
                                                <option value='Baringo'>Baringo</option>
                                                <option value='Bomet'>Bomet</option>
                                                <option value='Bungoma'>Bungoma</option>
                                                <option value='Busia'>Busia</option>
                                                <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                                                <option value='Embu'>Embu</option>
                                                <option value='Garissa'>Garissa</option>
                                                <option value='Homa Bay'>Homa Bay</option>
                                                <option value='Isiolo'>Isiolo</option>
                                                <option value='Kajiado'>Kajiado</option>
                                                <option value='Kakamega'>Kakamega</option>
                                                <option value='Kericho'>Kericho</option>
                                                <option value='Kiambu'>Kiambu</option>
                                                <option value='Kilifi'>Kilifi</option>
                                                <option value='Kirinyaga'>Kirinyaga</option>
                                                <option value='Kisii'>Kisii</option>
                                                <option value='Kisumu'>Kisumu</option>
                                                <option value='Kitui'>Kitui</option>
                                                <option value='Kwale'>Kwale</option>
                                                <option value='Laikipia'>Laikipia</option>
                                                <option value='Lamu'>Lamu</option>
                                                <option value='Machakos'>Machakos</option>
                                                <option value='Makueni'>Makueni</option>
                                                <option value='Mandera'>Mandera</option>
                                                <option value='Marsabit'>Marsabit</option>
                                                <option value='Meru'>Meru</option>
                                                <option value='Migori'>Migori</option>
                                                <option value='Mombasa'>Mombasa</option>
                                                <option value='Muranga'>Muranga</option>
                                                <option value='Nakuru'>Nakuru</option>
                                                <option value='Nandi'>Nandi</option>
                                                <option value='Narok'>Narok</option>
                                                <option value='Nyamira'>Nyamira</option>
                                                <option value='Nyandarua'>Nyandarua</option>
                                                <option value='Nyeri'>Nyeri</option>
                                                <option value='Samburu'>Samburu</option>
                                                <option value='Siaya'>Siaya</option>
                                                <option value='Taita-Taveta'>Taita-Taveta</option>
                                                <option value='Tana River'>Tana River</option>
                                                <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                                                <option value='Trans Nzoia'>Trans Nzoia</option>
                                                <option value='Turkana'>Turkana</option>
                                                <option value='Uasin Gishu'>Uasin Gishu</option>
                                                <option value='Vihiga'>Vihiga</option>
                                                <option value='West Pokot'>West Pokot</option>
                                                <option value='wajir'>wajir</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <div class="input-group location">
                                                <input name="location" type="text" class="form-control" id="location" placeholder="Enter Location">
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </form>
                                <!-- /.main-search -->
                            </div>
                            <!-- /.search-bar -->
                        </div>
                    </div>
                    <div class="background">
                        <img src="img/restaurant-bg.jpg" alt="">
                    </div>
                </section>
                <!--end Hero Image-->

                <!--Featured-->
                <section id="featured" class="block equal-height">
                    <div class="container">
                        <header><h2>Featured</h2></header>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-specific">
                                                <span title="Bedrooms"><img src="img/bedrooms.png" alt="">2</span>
                                                <span title="Bathrooms"><img src="img/bathrooms.png" alt="">2</span>
                                                <span title="Area"><img src="img/area.png" alt="">240m<sup>2</sup></span>
                                                <span title="Garages"><img src="img/garages.png" alt="">1</span>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-thumbs-up"></i>
                                            </div>
                                            <img src="img/items/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="item-detail.html"><h3>Steak House Restaurant</h3></a>
                                        <figure>63 Birch Street</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                            <div class="rating" data-rating="4"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!--/.col-sm-4-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="img/items/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="item-detail.html"><h3>Benny’s Cafeteria</h3></a>
                                        <figure>63 Birch Street</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/cafetaria.png" alt=""></i>
                                                <span>Cafeteria</span>
                                            </div>
                                            <div class="rating" data-rating="4"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!--/.col-sm-4-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-specific">
                                                <span>Daily menu from: $6</span>
                                            </div>
                                            <img src="img/items/restaurant/9.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="item-detail.html"><h3>Big Bamboo</h3></a>
                                        <figure>4662 Bruce Street</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/japanese-food.png" alt=""></i>
                                                <span>Sushi</span>
                                            </div>
                                            <div class="rating" data-rating="3"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!--/.col-sm-4-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-specific">
                                                <span>Daily menu from: $6</span>
                                            </div>
                                            <img src="img/items/restaurant/10.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="item-detail.html"><h3>Sushi Wooshi Bar</h3></a>
                                        <figure>357 Trainer Avenue</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/fishchips.png" alt=""></i>
                                                <span>Sushi Bar</span>
                                            </div>
                                            <div class="rating" data-rating="3"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!--/.col-sm-4-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                    <div class="background opacity-5">
                        <img src="img/restaurants-bg2.jpg" alt="">
                    </div>
                </section>
                <!--end Featured-->

                <!--Popular-->
                <section id="popular" class="block background-color-white">
                    <div class="container">
                        <header><h2>Popular</h2></header>
                        <div class="owl-carousel wide carousel">
                            <div class="slide">
                                <div class="inner">
                                    <div class="image">
                                        <div class="item-specific">
                                            <div class="inner">
                                                <div class="content">
                                                    <dl>
                                                        <dt>Bedrooms</dt>
                                                        <dd>2</dd>
                                                        <dt>Bathrooms</dt>
                                                        <dd>2</dd>
                                                        <dt>Area</dt>
                                                        <dd>240m<sup>2</sup></dd>
                                                        <dt>Garages</dt>
                                                        <dd>1</dd>
                                                        <dt>Build Year</dt>
                                                        <dd>1990</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="img/items/restaurant/8.jpg">
                                    </div>
                                    <div class="wrapper">
                                        <a href="item-detail.html"><h3>Magma Bar and Grill</h3></a>
                                        <figure>
                                            <i class="fa fa-map-marker"></i>
                                            <span>970 Chapel Street, Rosenberg, TX 77471</span>
                                        </figure>
                                        <div class="info">
                                            <div class="rating" data-rating="4">
                                                <aside class="reviews">6 reviews</aside>
                                            </div>
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/restaurant.png"></i>
                                                <span>Restaurant</span>
                                            </div>
                                        </div>
                                        <!--/.info-->
                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa, viverra interdum eros ut,
                                            imperdiet pellentesque mauris. Proin sit amet scelerisque risus. Donec semper semper erat ut mollis.
                                            Curabitur suscipit, justo eu dignissim lacinia, ante sapien pharetra dui...
                                        </p>
                                        <a href="item-detail.html" class="read-more icon">Read More</a>
                                    </div>
                                    <!--/.wrapper-->
                                </div>
                                <!--/.inner-->
                            </div>
                            <!--/.slide-->
                            <div class="slide">
                                <div class="inner">
                                    <div class="image">
                                        <div class="item-specific">
                                            <div class="inner">
                                                <div class="content">
                                                    <dl>
                                                        <dt>Bedrooms</dt>
                                                        <dd>2</dd>
                                                        <dt>Bathrooms</dt>
                                                        <dd>2</dd>
                                                        <dt>Area</dt>
                                                        <dd>240m<sup>2</sup></dd>
                                                        <dt>Garages</dt>
                                                        <dd>1</dd>
                                                        <dt>Build Year</dt>
                                                        <dd>1990</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="img/items/restaurant/9.jpg">
                                    </div>
                                    <div class="wrapper">
                                        <a href="item-detail.html"><h3>Saguaro Tavern</h3></a>
                                        <figure>
                                            <i class="fa fa-map-marker"></i>
                                            <span>2476 Whispering Pines Circle</span>
                                        </figure>
                                        <div class="info">
                                            <div class="rating" data-rating="4">
                                                <aside class="reviews">6 reviews</aside>
                                            </div>
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/restaurant.png"></i>
                                                <span>Restaurant</span>
                                            </div>
                                        </div>
                                        <!--/.info-->
                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa, viverra interdum eros ut,
                                            imperdiet pellentesque mauris. Proin sit amet scelerisque risus. Donec semper semper erat ut mollis.
                                            Curabitur suscipit, justo eu dignissim lacinia, ante sapien pharetra dui...
                                        </p>
                                        <a href="item-detail.html" class="read-more icon">Read More</a>
                                    </div>
                                    <!--/.wrapper-->
                                </div>
                                <!--/.inner-->
                            </div>
                            <!--/.slide-->
                        </div>
                        <!--/.owl-carousel-->
                    </div>
                    <!--/.container-->
                </section>
                <!--end Popular-->


                <hr>

                <!--Listing-->
                <section id="listing" class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <section class="equal-height">
                                    <header><h2>Today Popular</h2></header>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="img/items/restaurant/11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="item-detail.html"><h3>Max Five Lounge</h3></a>
                                                    <figure>63 Birch Street</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                            <span>Restaurant</span>
                                                        </div>
                                                        <div class="rating" data-rating="4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->
                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="img/items/restaurant/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="item-detail.html"><h3>Magma Bar & Grill</h3></a>
                                                    <figure>63 Birch Street</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="icons/restaurants-bars/restaurants/restaurant_steakhouse.png" alt=""></i>
                                                            <span>Steak House</span>
                                                        </div>
                                                        <div class="rating" data-rating="4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->
                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-specific">
                                                            <span>Menu from: $9.00</span>
                                                        </div>
                                                        <img src="img/items/restaurant/8.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="item-detail.html"><h3>Guild Trattoria</h3></a>
                                                    <figure>4662 Bruce Street</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="icons/restaurants-bars/restaurants/barbecue.png" alt=""></i>
                                                            <span>BBQ Restaurant</span>
                                                        </div>
                                                        <div class="rating" data-rating="3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->

                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="img/items/restaurant/12.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="item-detail.html"><h3>Sushi Wooshi Bar</h3></a>
                                                    <figure>357 Trainer Avenue</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="icons/restaurants-bars/restaurants/fishchips.png" alt=""></i>
                                                            <span>Sushi Bar</span>
                                                        </div>
                                                        <div class="rating" data-rating="3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->
                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="img/items/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="item-detail.html"><h3>Max Five Lounge</h3></a>
                                                    <figure>63 Birch Street</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                            <span>Restaurant</span>
                                                        </div>
                                                        <div class="rating" data-rating="4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->
                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view" id="10"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="img/items/6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="item-detail.html"><h3>Magma Bar & Grill</h3></a>
                                                    <figure>63 Birch Street</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="icons/restaurants-bars/restaurants/restaurant_steakhouse.png" alt=""></i>
                                                            <span>Steak House</span>
                                                        </div>
                                                        <div class="rating" data-rating="4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->
                                    </div>
                                    <!--/.row-->
                                </section>
                                <!--/.equal-height-->


                            </div>
                            <div class="col-md-3 col-sm-3">
                                <aside id="sidebar">
                                    <section>
                                        <header><h2>New Schools</h2></header>
                                        <a href="item-detail.html" class="item-horizontal small">
                                            <h3>Cash Cow Restaurante</h3>
                                            <figure>63 Birch Street</figure>
                                            <div class="wrapper">
                                                <div class="image"><img src="img/items/1.jpg" alt=""></div>
                                                <div class="info">
                                                    <div class="type">
                                                        <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                        <span>Restaurant</span>
                                                    </div>
                                                    <div class="rating" data-rating="4"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--/.item-horizontal small-->
                                        <a href="item-detail.html" class="item-horizontal small">
                                            <h3>Blue Chilli</h3>
                                            <figure>2476 Whispering Pines Circle</figure>
                                            <div class="wrapper">
                                                <div class="image"><img src="img/items/2.jpg" alt=""></div>
                                                <div class="info">
                                                    <div class="type">
                                                        <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                        <span>Restaurant</span>
                                                    </div>
                                                    <div class="rating" data-rating="3"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--/.item-horizontal small-->
                                        <a href="item-detail.html" class="item-horizontal small">
                                            <h3>Eddie’s Fast Food</h3>
                                            <figure>4365 Bruce Street</figure>
                                            <div class="wrapper">
                                                <div class="image"><img src="img/items/3.jpg" alt=""></div>
                                                <div class="info">
                                                    <div class="type">
                                                        <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                        <span>Restaurant</span>
                                                    </div>
                                                    <div class="rating" data-rating="5"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--/.item-horizontal small-->
                                    </section>
                                </aside>
                                <!--/#sidebar-->
                            </div>
                            <!--/.col-md-3-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.block-->
                </section>
                <!--end Listing-->

                <hr>

            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
        <!--Page Footer-->
        <footer id="page-footer">
            <div class="inner">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!--Recent Reviews-->
                                <section>
                                    <h2>Recent Reviews</h2>
                                    <a href="item-detail.html#reviews" class="review small">
                                        <h3>Max Five Lounge</h3>
                                        <figure>4365 Bruce Street</figure>
                                        <div class="info">
                                            <div class="rating" data-rating="4"></div>
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non suscipit felis, sed sagittis tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ac placerat mauris.
                                        </p>
                                    </a><!--/.review-->
                                    <a href="item-detail.html#reviews" class="review small">
                                        <h3>Saguaro Tavern</h3>
                                        <figure>2476 Whispering Pines Circle</figure>
                                        <div class="info">
                                            <div class="rating" data-rating="5"></div>
                                            <div class="type">
                                                <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                        </div>
                                        <p>
                                            Pellentesque mauris. Proin sit amet scelerisque risus. Donec semper semper erat ut mollis curabitur
                                        </p>
                                    </a>
                                    <!--/.review-->
                                </section>
                                <!--end Recent Reviews-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <section>
                                    <h2>About Us</h2>
                                    <address>
                                        <div>Max Five Lounge</div>
                                        <div>63 Birch Street</div>
                                        <div>Granada Hills, CA 91344</div>
                                        <figure>
                                            <div class="info">
                                                <i class="fa fa-mobile"></i>
                                                <span>818-832-5258</span>
                                            </div>
                                            <div class="info">
                                                <i class="fa fa-phone"></i>
                                                <span>+1 123 456 789</span>
                                            </div>
                                            <div class="info">
                                                <i class="fa fa-globe"></i>
                                                <a href="#">www.maxfivelounge.com</a>
                                            </div>
                                        </figure>
                                    </address>
                                    <div class="social">
                                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-button"><i class="fa fa-pinterest"></i></a>
                                    </div>

                                    <a href="contact.html" class="btn framed icon">Contact Us<i class="fa fa-angle-right"></i></a>
                                </section>
                            </div>
                            <!--/.col-md-4-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                </div>
                <!--/.footer-top-->
                <div class="footer-bottom">
                    <div class="container">
                        <span class="left">(C) Yoosin Paddy, All rights reserved</span>
                            <span class="right">
                                <a href="#page-top" class="to-top roll"><i class="fa fa-angle-up"></i></a>
                            </span>
                    </div>
                </div>
                <!--/.footer-bottom-->
            </div>
        </footer>
        <!--end Page Footer-->
    </div>
    <!-- end Inner Wrapper -->
</div>
<!-- end Outer Wrapper-->
</body>
</x-app-layout>
@include('common.bottom')
