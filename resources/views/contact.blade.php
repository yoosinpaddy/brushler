<head>
@include('common.top')


</head>

    <body  onunload="" class="antialiased page-subpage page-listing-grid navigation-off-canvas" id="page-top">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">



            <!-- Outer Wrapper-->
            <div id="outer-wrapper">
                <!-- Inner Wrapper -->
                <div id="inner-wrapper">
                    <!-- Navigation-->
                    <div class="header">
                        <div class="wrapper">
                            <div class="brand">
                                <a href="index-directory.html"><img src="img/logo.png" alt="logo"></a>
                            </div>
                            <nav class="navigation-items">
                                <div class="wrapper">
                                    <ul class="main-navigation navigation-top-header"></ul>
                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                            @else
                                                <ul class="user-area">
                                                    <li><a href="{{ route('login') }}">Sign In</a></li>
                                                @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}"><strong>Register</strong></a></li>
                                                @endif
                                                </ul>
                                            @endauth
                                        </div>
                                    @endif
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

                        <!--Sub Header-->
                        <section class="sub-header">
                            <div class="search-bar horizontal collapse" id="redefine-search-form">

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
                            </div>
                            <!-- /.search-bar -->
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="redefine-search">
                                        <a href="#redefine-search-form" class="inner" data-toggle="collapse" aria-expanded="false" aria-controls="redefine-search-form">
                                            <span class="icon"></span>
                                            <span>Perform Search</span>
                                        </a>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="index-directory.html"><i class="fa fa-home"></i></a></li>
                                        <li><a href="#">Page</a></li>
                                        <li class="active">Contact</li>
                                    </ol>
                                    <!-- /.breadcrumb-->
                                </div>
                                <!-- /.container-->
                            </div>
                            <!-- /.breadcrumb-wrapper-->
                        </section>
                        <!--end Sub Header-->

                        <!--Page Content-->
                        <div id="page-content">
                            <section id="map-simple" class="map-contact"></section>
                            <section class="container">
                                <div class="row">
                                    <!--Content-->
                                    <div class="col-md-9">
                                        <header>
                                            <h1 class="page-title">Contact</h1>
                                        </header>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <header class="no-border"><h3>Address</h3></header>
                                                    <address>
                                                        <div>My SchoolMy Choice</div>
                                                        {{-- <div>63 Birch Street</div>
                                                        <div>Granada Hills, CA 91344</div> --}}
                                                        <figure>
                                                            <div class="info">
                                                                <i class="fa fa-mobile"></i>
                                                                <a href="tel:+254700887860">+25470 088 7860</a>
                                                            </div>
                                                            {{-- <div class="info">
                                                                <i class="fa fa-phone"></i>
                                                                <span>+1 123 456 789</span>
                                                            </div> --}}
                                                            <div class="info">
                                                                <i class="fa fa-globe"></i>
                                                                <a href="mailto:inquiry@myschoolmychoice.co.ke">inquiry@myschoolmychoice.co.ke</a>
                                                            </div>
                                                        </figure>
                                                    </address>
                                                </div>
                                                <!--/.col-md-4-->
                                                <div class="col-md-4 col-sm-4">
                                                    <header class="no-border"><h3>Social Networks</h3></header>
                                                    <a href="#" class="social-button"><i class="fa fa-twitter"></i>Twitter</a>
                                                    <a href="#" class="social-button"><i class="fa fa-facebook"></i>Facebook</a>
                                                    <a href="#" class="social-button"><i class="fa fa-pinterest"></i>Pinterest</a>
                                                </div>
                                                <!--/.col-md-4-->
                                                <div class="col-md-4 col-sm-4">
                                                    <header class="no-border"><h3>About Us</h3></header>
                                                    <p>We offer a platform where you can search for schools and view the best schools within kenya
                                                    </p>
                                                    {{-- <a href="about-us.html" class="read-more icon">Read More</a> --}}
                                                </div>
                                                <!--/.col-md-4-->
                                            </div>
                                            <!--/.row-->
                                        </section>
                                        <hr>
                                        <section>
                                            <header class="no-border"><h3>Contact Form</h3></header>

                                            @if ($datasubmited)
                                            <div style="background: green;padding: 3px;color: white;"> Request sent successfully</div>
                                            @endif

                                            <form id="contact-form" role="form" method="post" action="contact" class="background-color-white">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="company-form-name">Name</label>
                                                            <input type="text" class="form-control" id="company-form-name" name="name" required="">
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <!--/.col-md-6-->
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="company-form-email">Subject</label>
                                                            <input type="text" class="form-control" id="company-form-email" name="subject" required="">
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <!--/.col-md-6-->
                                                    <!--/.col-md-6-->
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="company-form-email">Email</label>
                                                            <input type="email" class="form-control" id="company-form-email" name="email" required="">
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <!--/.col-md-6-->
                                                </div>
                                                <div class="form-group">
                                                    <label for="company-form-message">Message</label>
                                                    <textarea class="form-control" id="company-form-message" name="bodymessage"  rows="3" required=""></textarea>
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default icon">Send a Message<i class="fa fa-angle-right"></i></button>
                                                </div>
                                                <!-- /.form-group -->
                                            </form>
                                            <!--/#contact-form-->
                                        </section>
                                    </div>
                                    <!--Sidebar-->
                                    <div class="col-md-3">
                                        <aside id="sidebar">
                                            <section>
                                                {{-- <header><h2>New Places</h2></header>
                                                <a href="item-detail.html" class="item-horizontal small">
                                                    <h3>Cash Cow Restaurante</h3>
                                                    <figure>63 Birch Street</figure>
                                                    <div class="wrapper">
                                                        <div class="image"><img src="assets/img/items/1.jpg" alt=""></div>
                                                        <div class="info">
                                                            <div class="type">
                                                                <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                <span>Restaurant</span>
                                                            </div>
                                                            <div class="rating" data-rating="4"></div>
                                                        </div>
                                                    </div>
                                                </a> --}}
                                                <!--/.item-horizontal small-->
                                                {{-- <a href="item-detail.html" class="item-horizontal small">
                                                    <h3>Blue Chilli</h3>
                                                    <figure>2476 Whispering Pines Circle</figure>
                                                    <div class="wrapper">
                                                        <div class="image"><img src="assets/img/items/2.jpg" alt=""></div>
                                                        <div class="info">
                                                            <div class="type">
                                                                <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                <span>Restaurant</span>
                                                            </div>
                                                            <div class="rating" data-rating="3"></div>
                                                        </div>
                                                    </div>
                                                </a> --}}
                                                <!--/.item-horizontal small-->
                                                {{-- <a href="item-detail.html" class="item-horizontal small">
                                                    <h3>Eddie’s Fast Food</h3>
                                                    <figure>4365 Bruce Street</figure>
                                                    <div class="wrapper">
                                                        <div class="image"><img src="assets/img/items/3.jpg" alt=""></div>
                                                        <div class="info">
                                                            <div class="type">
                                                                <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                <span>Restaurant</span>
                                                            </div>
                                                            <div class="rating" data-rating="5"></div>
                                                        </div>
                                                    </div>
                                                </a> --}}
                                                <!--/.item-horizontal small-->
                                            </section>
                                            <section>
                                                {{-- <a href="#"><img src="assets/img/ad-banner-sidebar.png" alt=""></a> --}}
                                            </section>
                                            <section>
                                                {{-- <header><h2>Categories</h2></header>
                                                <ul class="bullets">
                                                    <li><a href="#" >Restaurant</a></li>
                                                    <li><a href="#" >Steak House & Grill</a></li>
                                                    <li><a href="#" >Fast Food</a></li>
                                                    <li><a href="#" >Breakfast</a></li>
                                                    <li><a href="#" >Winery</a></li>
                                                    <li><a href="#" >Bar & Lounge</a></li>
                                                    <li><a href="#" >Pub</a></li>
                                                </ul> --}}
                                            </section>
                                            <section>
                                                {{-- <header><h2>Events</h2></header>
                                                <div class="form-group">
                                                    <select class="framed" name="events">
                                                        <option value="">Select Your City</option>
                                                        <option value="1">London</option>
                                                        <option value="2">New York</option>
                                                        <option value="3">Barcelona</option>
                                                        <option value="4">Moscow</option>
                                                        <option value="5">Tokyo</option>
                                                    </select>
                                                </div> --}}
                                                <!-- /.form-group -->
                                            </section>
                                        </aside>
                                        <!-- /#sidebar-->
                                    </div>
                                    <!-- /.col-md-3-->
                                    <!--end Sidebar-->
                                </div>
                            </section>
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
                                            <!--New Items-->
                                            <section>
                                                <h2>New Items</h2>
                                                @include('viewmodels.newItem', ['newItems' => $newitems])
                                            </section>
                                            <!--end New Items-->
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <!--Recent Reviews-->
                                            <section>
                                                <h2>Recent Reviews</h2>
                                                @include('viewmodels.recentReviewItem', ['recentReviews' => $recentReviews])

                                            </section>
                                            <!--end Recent Reviews-->
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <section>
                                                <h2>About Us</h2>
                                                <address>
                                                    <div>My SchoolMy Choice</div>
                                                    {{-- <div>63 Birch Street</div>
                                                    <div>Granada Hills, CA 91344</div> --}}
                                                    <figure>
                                                        <div class="info">
                                                            <i class="fa fa-mobile"></i>
                                                            <a href="tel:+254700887860">+25470 088 7860</a>
                                                        </div>
                                                        {{-- <div class="info">
                                                            <i class="fa fa-phone"></i>
                                                            <span>+1 123 456 789</span>
                                                        </div> --}}
                                                        <div class="info">
                                                            <i class="fa fa-globe"></i>
                                                            <a href="mailto:inquiry@myschoolmychoice.co.ke">inquiry@myschoolmychoice.co.ke</a>
                                                        </div>
                                                    </figure>
                                                </address>
                                                <div class="social">
                                                    <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="social-button"><i class="fa fa-pinterest"></i></a>
                                                </div>

                                                <a href="{{route('contact')}}" class="btn framed icon">Contact Us<i class="fa fa-angle-right"></i></a>
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
                                    <span class="left">(C) Yoosin, All rights reserved</span>
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
        </div>
    </body>

@include('common.bottom')
