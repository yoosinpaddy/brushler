<head>
@include('common.top')
<title>{{$keywords}}</title>


<script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
            getData(page);

        });
    });
    function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
</script>
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
                                            <span>Redefine Search</span>
                                        </a>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="index-directory.html"><i class="fa fa-home"></i></a></li>
                                        <li><a href="#">Page</a></li>
                                        <li class="active">Search</li>
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
                            <section class="container">
                                <div class="">
                                    <!--Content-->
                                    <div class="">
                                        <header>
                                            <h1 class="page-title">{{$keywords}} Results</h1>
                                        </header>
                                        <figure class="filter clearfix">
                                            {{-- <div class="buttons pull-left">
                                                <a href="listing-grid.html" class="btn icon active"><i class="fa fa-th"></i>Grid</a>
                                                <a href="listing-list.html" class="btn icon"><i class="fa fa-th-list"></i>List</a>
                                            </div>
                                            <div class="pull-right">
                                                <aside class="sorting">
                                                    <span>Sorting</span>
                                                    <div class="form-group">
                                                        <select class="framed" name="sort">
                                                            <option value="">Date - Newest First</option>
                                                            <option value="1">Date - Oldest First</option>
                                                            <option value="2">Price - Highest First</option>
                                                            <option value="3">Price - Lowest First</option>
                                                        </select>
                                                    </div>
                                                </aside>
                                            </div>--}}
                                        </figure>

                                        <!--Listing Grid-->
                                        <section class="block equal-height">
                                            <div class="row" id="tag_container">
                                                @include('viewmodels.searchitem')
                                            </div>
                                            <!--/.row-->
                                        </section>
                                        <!--end Listing Grid-->
                                        <!--Pagination-->
                                        <nav>
                                            @include('pagination.default', ['paginator' => $schools])
                                        </nav>
                                            {{-- <nav>
                                            <ul class="pagination pull-right">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="?page=2">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#" class="previous"><i class="fa fa-angle-left"></i></a></li>
                                                <li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </nav> --}}
                                        <!--end Pagination-->
                                    </div>

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
