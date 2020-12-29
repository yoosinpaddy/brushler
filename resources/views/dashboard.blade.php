@include('common.top')


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
                        @auth

                        <a href="{{url('/')}}/submit" class="submit-item">
                            <div class="content"><span>Submit Your Item</span></div>
                            <div class="icon">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                        @endauth
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
                        <img src="img/back.jpg" alt="">
                    </div>
                </section>
                <!--end Hero Image-->

                <!--Featured-->
                <section id="featured" class="block equal-height">
                    <div class="container">
                        @if (count($featured)>0)
                            <header><h2>Featured</h2></header>
                            <div class="row">
                                @foreach ($featured as $item)

                                    <div class="col-md-3 col-sm-3">
                                        <div class="item">
                                            <div class="image">
                                                <div class="quick-view-a" id="{{$item->id}}"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                <a href="{{url('/')}}/school/{{$item->id}}">
                                                    <div class="overlay">
                                                        <div class="inner">
                                                            <div class="content">
                                                                @if ($item->description!=""||$item->description!=null)
                                                                    <h4>Description</h4>
                                                                    <p>{{$item->description}}</p>

                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-specific">

                                                    </div>
                                                    {{-- <div class="icon">
                                                         <i class="fa fa-thumbs-up"></i>
                                                    </div> --}}
                                                    @if (count($item->photos)>0)
                                                        <img src="{{url('/')}}/uploads/{{$item->photos[0]->name}}" alt="{{$item->name}} photo">
                                                    @else
                                                        <img src="{{url('/')}}/img/items/restaurant/9.jpg" alt="{{$item->name}} photo">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="wrapper">
                                                <a href="item-detail.html"><h3>{{$item->name}}</h3></a>
                                                <figure>{{$item->county}}</figure>
                                                <div class="info">
                                                    <div class="type">
                                                        {{-- <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i> --}}
                                                        <span>{{$item->level}}</span>
                                                    </div>

                                                    <?php
                                                        $averagecomments=5;
                                                        $allComments=count($item->comments);
                                                        if ($allComments!=0) {
                                                            $totalRating=0;
                                                            foreach ($item->comments as $comment) {
                                                                $totalRating+=$comment->rating;
                                                            }

                                                            $averagecomments=$totalRating/$allComments;
                                                        }
                                                    ?>
                                                    <div class="rating" data-rating="{{$averagecomments}}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.item-->
                                    </div>
                                    <!--/.col-sm-4-->
                                @endforeach
                            </div>
                            <!--/.row-->

                        @endif
                    </div>
                    <!--/.container-->
                    <div class="background opacity-5">
                        <img src="img/restaurants-bg2.jpg" alt="">
                    </div>
                </section>
                <!--end Featured-->

                <!--Popular-->
                @if (count($popular)>0)
                    <section id="popular" class="block background-color-white">
                        <div class="container">
                            <header><h2>Popular</h2></header>
                            <div class="owl-carousel wide carousel">
                                @foreach ($popular as $item)

                                    <div class="slide">
                                        <div class="inner">
                                            <div class="image">
                                                <div class="item-specific">
                                                    <div class="inner">
                                                        <div class="content">
                                                            <dl>
                                                                @if (count($item->courses)>0)
                                                                    @foreach ($item->courses as $course)
                                                                        <dt>{{$course->name}}</dt>
                                                                        <dd>-</dd>
                                                                    @endforeach
                                                                @endif
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if (count($item->photos)>0)
                                                    <img src="{{url('/')}}/uploads/{{$item->photos[0]->name}}" alt="{{$item->name}} photo">
                                                @else
                                                    <img src="{{url('/')}}/img/items/restaurant/9.jpg" alt="{{$item->name}} photo">
                                                @endif
                                            </div>
                                            <div class="wrapper">
                                                <a href="{{url('/')}}/school/{{$item->id}}"><h3>{{$item->name}}</h3></a>
                                                <figure>
                                                    <i class="fa fa-map-marker"></i>
                                                    <span>{{$item->county}}</span>
                                                </figure>
                                                <div class="info">

                                                    <?php
                                                        $averagecomments=5;
                                                        $allComments=count($item->comments);
                                                        if ($allComments!=0) {
                                                            $totalRating=0;
                                                            foreach ($item->comments as $comment) {
                                                                $totalRating+=$comment->rating;
                                                            }

                                                            $averagecomments=$totalRating/$allComments;
                                                        }
                                                    ?>
                                                    <div class="rating" data-rating="{{$averagecomments}}">
                                                        <aside class="reviews">{{$allComments}} reviews</aside>
                                                    </div>
                                                    <div class="type">
                                                        <i><img src=""></i>
                                                        <span>{{$item->level}}</span>
                                                    </div>
                                                </div>
                                                <!--/.info-->
                                                <p>{{$item->description}} </p>
                                                <a href="{{url('/')}}/school/{{$item->id}}" class="read-more icon">Read More</a>
                                            </div>
                                            <!--/.wrapper-->
                                        </div>
                                        <!--/.inner-->
                                    </div>
                                    <!--/.slide-->
                                @endforeach
                            </div>
                            <!--/.owl-carousel-->
                        </div>
                        <!--/.container-->
                    </section>
                    <!--end Popular-->

                @endif


                <hr>

                <!--Listing-->
                <section id="listing" class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <section class="equal-height">
                                    @if (count($popularPrimary)>0)

                                    <header><h2>Popular Primary Schools</h2></header>
                                    <div class="row">
                                        @foreach ($popularPrimary as $item)

                                        <div class="col-md-4 col-sm-4">
                                            <div class="item ">
                                                <div class="image">
                                                    <div class="quick-view-a" id="{{$item->id}}"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="item-detail.html">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p>{{$item->description}}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if (count($item->photos)>0)
                                                            <img src="{{url('/')}}/uploads/{{$item->photos[0]->name}}" alt="{{$item->name}} photo">
                                                        @else
                                                            <img src="{{url('/')}}/img/items/restaurant/9.jpg" alt="{{$item->name}} photo">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href="{{url('/')}}/school/{{$item->id}}"><h3>{{$item->name}}</h3></a>
                                                    <figure>{{$item->county}}</figure>
                                                    <div class="info">
                                                        <div class="type">
                                                            {{-- <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i> --}}
                                                            <span>{{$item->level}}</span>
                                                        </div>
                                                        <?php
                                                            $averagecomments=5;
                                                            $allComments=count($item->comments);
                                                            if ($allComments!=0) {
                                                                $totalRating=0;
                                                                foreach ($item->comments as $comment) {
                                                                    $totalRating+=$comment->rating;
                                                                }

                                                                $averagecomments=$totalRating/$allComments;
                                                            }
                                                        ?>
                                                        <div class="rating" data-rating="{{$averagecomments}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.item-->
                                        </div>
                                        <!--/.col-sm-4-->
                                        @endforeach
                                    </div>
                                    <!--/.row-->
                                </section>
                                    @endif
                                <!--/.equal-height-->


                            </div>
                            <div class="col-md-3 col-sm-3">
                                <aside id="sidebar">
                                    <section>
                                        <header><h2>New Schools</h2></header>

                                        @include('viewmodels.newItem', ['newItems' => $newItems_3])

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
                                <!--New Items-->
                                <section>
                                    <h2>New Schools</h2>
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
                                                <a
                                                    href="mailto:inquiry@myschoolmychoice.co.ke">inquiry@myschoolmychoice.co.ke</a>
                                            </div>
                                        </figure>
                                    </address>
                                    <div class="social">
                                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-button"><i class="fa fa-pinterest"></i></a>
                                    </div>

                                    <a href="{{ route('contact') }}" class="btn framed icon">Contact Us<i
                                            class="fa fa-angle-right"></i></a>
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
</body>

@include('common.bottom')

<script>
    $('.quick-view-a').live('click',  function(){
        var id = $(this).attr('id');
        quickView1(id);
        return false;
    });
    function quickView1(id){
        $.ajax({
            type: 'GET',
            url: '{{url('/')}}/itemModal/'+id,
            data: id,
            success: function (data) {
                // Create HTML element with loaded data
                $('body').append(data);
            }
        });
    }

</script>
