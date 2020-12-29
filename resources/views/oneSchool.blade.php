<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('common.top')


</head>

<body onunload="" class="antialiased page-subpage page-listing-grid navigation-off-canvas" id="page-top">
    <!-- Outer Wrapper-->
    <div id="outer-wrapper">
        <!-- Inner Wrapper -->
        <div id="inner-wrapper">
            <!-- Navigation-->
            <div class="header">
                <div class="wrapper">
                    <div class="brand">
                        <a href="index-directory.html"><img src="assets/img/logo.png" alt="logo"></a>
                    </div>
                    <nav class="navigation-items">
                        <div class="wrapper">
                            <ul class="main-navigation navigation-top-header"></ul>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="text-sm text-gray-700 underline">Dashboard</a>
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
                            <a href="{{ route('submit') }}" class="submit-item">
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

                    <div id="map-detail" style="height: 150px;"></div>
                    <section class="container">
                        <div class="row">
                            <!--Item Detail Content-->
                            <div class="col-md-9">
                                <section class="block" id="main-content">
                                    <header class="page-title">
                                        <div class="title">
                                            <h1>{{$schoolModel->name}}</h1>
                                            <figure>{{$schoolModel->county}}</figure>
                                        </div>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png"
                                                        alt=""></i>
                                                <span>{{$schoolModel->level}}</span>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="row">
                                        <!--Detail Sidebar-->
                                        <aside class="col-md-4 col-sm-4" id="detail-sidebar">
                                            <!--Contact-->
                                            <section>
                                                <header>
                                                    <h3>Contact</h3>
                                                </header>
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
                                            </section>
                                            <!--end Contact-->
                                            <!--Rating-->
                                            <section class="clearfix">
                                                    <?php
                                                        $averagecomments=5;
                                                        $allComments=count($schoolModel->comments);
                                                        if ($allComments!=0) {
                                                            $totalRating=0;
                                                            foreach ($schoolModel->comments as $comment) {
                                                                $totalRating+=$comment->rating;
                                                            }

                                                            $averagecomments=$totalRating/$allComments;
                                                        }
                                                    ?>
                                                <header class="pull-left"><a href="#reviews" class="roll">
                                                        <h3>Rating</h3>
                                                    </a></header>
                                                <figure class="rating big pull-right" data-rating="{{$averagecomments}}"></figure>
                                            </section>
                                            <!--end Rating-->

                                            <!--Contact Form-->
                                            <section>
                                                <header>
                                                    <h3>Contact Form</h3>
                                                </header>
                                                <figure>
                                                    <form id="item-detail-form" role="form" method="post"
                                                        action="contact">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label for="item-detail-name">Name</label>
                                                            <input type="text" class="form-control framed"
                                                                id="item-detail-name" name="name" required="">
                                                        </div>
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="company-form-email">Subject</label>
                                                            <input type="text" class="form-control"
                                                                id="company-form-email" name="subject" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="item-detail-email">Email</label>
                                                            <input type="email" class="form-control framed"
                                                                id="item-detail-email" name="email" required="">
                                                        </div>
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="item-detail-message">Message</label>
                                                            <textarea class="form-control framed"
                                                                id="item-detail-message" name="bodymessage" rows="3"
                                                                required=""></textarea>
                                                        </div>
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="btn framed icon">Send<i
                                                                    class="fa fa-angle-right"></i></button>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </form>
                                                </figure>
                                            </section>
                                            <!--end Contact Form-->
                                        </aside>
                                        <!--end Detail Sidebar-->
                                        <!--Content-->
                                        <div class="col-md-8 col-sm-8">
                                            <section>
                                                <article class="item-gallery">
                                                    <div class="owl-carousel item-slider">
                                                        @for($i=0;$i<count($schoolModel->photos);$i++)
                                                                <div class="slide"><img src="{{url('/')}}/uploads/{{$schoolModel->photos[$i]->name}}"
                                                                data-hash="{{($i+1)}}" alt="{{$schoolModel->name}}"></div>;

                                                            @endfor
                                                    </div>
                                                    <!-- /.item-slider -->
                                                    <div class="thumbnails">
                                                        <span class="expand-content btn framed icon"
                                                            data-expand="#gallery-thumbnails">More<i
                                                                class="fa fa-plus"></i></span>
                                                        <div class="expandable-content height collapsed show-70"
                                                            id="gallery-thumbnails">
                                                            <div class="content">
                                                                    @for($i=0;$i<count($schoolModel->photos);$i++)
                                                                        <a href="#{{($i+1)}}" id="thumbnail-{{($i+1)}}" class="active"><img
                                                                        src="{{url('/')}}/uploads/{{$schoolModel->photos[$i]->name}}" alt="{{$schoolModel->name}}"></a>

                                                                    @endfor

                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- /.item-gallery -->
                                                @if ($schoolModel->description!=""||$schoolModel->description!=null)
                                                    <article class="block">
                                                        <header>
                                                            <h2>Description</h2>
                                                        </header>
                                                        <p>
                                                            {{$schoolModel->description}}
                                                        </p>
                                                    </article>

                                                @endif
                                                <!-- /.block -->
                                                @if (count($schoolModel->courses)>0)

                                                <article class="block">
                                                    <header>
                                                        <h2>Main Lessons</h2>
                                                    </header>
                                                    <div class="list-slider owl-carousel">
                                                        @foreach ($schoolModel->courses as $item)
                                                            <div class="slide">
                                                                <header>
                                                                    <h3><i class="fa fa-calendar"></i>Slide Right</h3>
                                                                </header>
                                                                <div class="list-item">
                                                                    <div class="left">
                                                                        <h4>{{$item->name}}</h4>
                                                                        <figure>{{$item->type}}
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <!-- /.list-item -->
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <!-- /.list-slider -->
                                                </article>
                                                <!-- /.block -->
                                                @endif
                                                @if (count($schoolModel->features)>0)
                                                    <article class="block">
                                                        <header>
                                                            <h2>Features</h2>
                                                        </header>
                                                        <ul class="bullets">

                                                            @foreach ($schoolModel->features as $item)
                                                                <li>{{$item->name}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </article>
                                                @endif
                                            </section>
                                            <!--Reviews-->
                                            <section class="block" id="reviews">
                                                @if (count($schoolModel->comments)>0)


                                                <header class="clearfix">
                                                    <h2 class="pull-left">Reviews</h2>
                                                    <a href="#write-review"
                                                        class="btn framed icon pull-right roll">Write a review <i
                                                            class="fa fa-pencil"></i></a>
                                                </header>
                                                <article class="clearfix overall-rating">
                                                    <strong class="pull-left">Over Rating</strong>
                                                    <figure class="rating big color pull-right" data-rating="{{$averagecomments}}">
                                                    </figure>
                                                    <!-- /.rating -->
                                                </article><!-- /.overall-rating-->
                                                <section class="reviews">
                                                    @foreach ($schoolModel->comments as $item)
                                                        @if ($item!=null)

                                                        <article class="review">
                                                            <figure class="author">
                                                                <img src="assets/img/default-avatar.png" alt="">
                                                                <div class="date">{{ $item->created_at==null?'':$item->created_at->format('d.M.Y') }}</div>
                                                            </figure>
                                                            <!-- /.author-->
                                                            <div class="wrapper">
                                                                <h5>{{$item->user->name}}</h5>
                                                                <figure class="rating big color" data-rating="{{$item->rating}}"></figure>
                                                                <p>
                                                                    {{$item->comment}}
                                                                </p>
                                                                {{-- <div class="individual-rating">
                                                                    <span>Value</span>
                                                                    <figure class="rating" data-rating="4"></figure>
                                                                </div> --}}
                                                                <!-- /.user-rating -->
                                                                {{-- <div class="individual-rating">
                                                                    <span>Service</span>
                                                                    <figure class="rating" data-rating="4"></figure>
                                                                </div> --}}
                                                                <!-- /.user-rating -->
                                                            </div>
                                                            <!-- /.wrapper-->
                                                        </article>
                                                        <!-- /.review -->
                                                        @endif
                                                    @endforeach

                                                </section>
                                                <!-- /.reviews-->
                                                @endif
                                            </section>
                                            <!-- /#reviews -->
                                            <!--end Reviews-->
                                            <!--Review Form-->
                                            <section id="write-review">
                                                @auth

                                                    @if($errors->any())
                                                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                                                    @endif
                                                        <?php
                                                        $hasAlreadyReviewed=false;
                                                        $id=Auth::user()->id;
                                                        foreach ($schoolModel->comments as $item) {
                                                            if ($item->user->id==$id) {
                                                                $hasAlreadyReviewed=true;
                                                            }
                                                        }
                                                        $csrf=csrf_field();
                                                        if (!$hasAlreadyReviewed) {
                                                            echo('
                                                            <header>
                                                                <h2>Write a Review</h2>
                                                            </header>
                                                            <form id="form-review" role="form" method="post" action="'.url('/').'/review"
                                                                class="background-color-white">
                                                                <input type="hidden" name="school_id" value="'.$schoolModel->id.'"/> '.csrf_field().'
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="form-review-message">Message</label>
                                                                            <textarea class="form-control" id="form-review-message"
                                                                                name="message" rows="3"
                                                                                required=""></textarea>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-default">Submit
                                                                                Review</button>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <aside class="user-rating">
                                                                            <label>Rating</label>
                                                                            <figure class="rating active" data-name="value">
                                                                            </figure>
                                                                        </aside>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            ');
                                                        }
                                                        ?>



                                                @endauth
                                                <!-- /.main-search -->
                                            </section>
                                            <!--end Review Form-->
                                        </div>
                                        <!-- /.col-md-8-->
                                    </div>
                                    <!-- /.row -->
                                </section>
                                <!-- /#main-content-->
                            </div>
                            <!-- /.col-md-8-->
                            <!--Sidebar-->
                            <div class="col-md-3">
                                <aside id="sidebar">
                                    <section>

                                    </section>
                                    <section>
                                        <a href="#"><img src="assets/img/ad-banner-sidebar.png" alt=""></a>
                                    </section>
                                    <section>

                                    </section>
                                    <section>

                                        <!-- /.form-group -->
                                    </section>
                                </aside>
                                <!-- /#sidebar-->
                            </div>
                            <!-- /.col-md-3-->
                            <!--end Sidebar-->
                        </div><!-- /.row-->
                    </section>
                    <!-- /.container-->
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
<script>
    function getMap(){
        console.log("Getting map");
        var _latitude = {{$schoolModel->latitude}};
        var _longitude = {{$schoolModel->longitude}};
        console.log(_latitude);
        var base_url = window.location.origin;
        var itemID = 1;
        $.getJSON(base_url+'/json/items.json.txt')
            .done(function(json) {
                $.each(json.data, function(a) {
                    if (json.data[a].id == itemID) {
                        itemDetailMap(json.data[a],_latitude,_longitude);
                    }
                });
            })
            .fail(function(jqxhr, textStatus, error) {
                console.log(error);
            });
        $(window).load(function() {
            var rtl = false; // Use RTL
            initializeOwl(rtl);
        });

    }

</script>
@include('common.bottom')

<script>
    $(window).load(function() {
        var _latitude = {{$schoolModel->latitude}};
        var _longitude = {{$schoolModel->longitude}};
        var draggableMarker = true;
        simpleMap(_latitude, _longitude, draggableMarker);
        $("#add_main_field").click(function(event) {
            event.preventDefault();
            $("#main-course").append(
                '<div class="row"><div class="col-md-10"><div class="form-group"> <input type="text"  required  class="form-control" name="main_course[]" placeholder="Name"></div></div> </div><!-- /.row--><div class="form-group"><input type="text" class="form-control" name="main_course-description[]" placeholder="Description"> </div>'
            );
        });

        $("#add_main_field2").click(function(event) {
            event.preventDefault();
            $("#main-course2").append(
                '<div class="row"><div class="col-md-10"><div class="form-group"> <input type="text" required  class="form-control" name="other_course[]" placeholder="Name"></div></div> </div><!-- /.row--><div class="form-group"><input type="text" class="form-control" name="curricular-description[]" placeholder="Description"> </div>'
            );
        });

        $("#add_main_field3").click(function(event) {
            event.preventDefault();
            $("#main-course3").append(
                '<div class="row"><div class="col-md-10"><div class="form-group"> <input  required type="text" class="form-control" name="other_course[]" placeholder="Name"></div></div> </div><!-- /.row--><div class="form-group"><input type="text" class="form-control" name="other-description[]" placeholder="Description"> </div>'
            );
        });
    });

    $("#file-submit").dropzone({
        url: "/uploadImage",
        addRemoveLinks: true,
        maxFilesize: 5,
        dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Drop files <span class="font-xs">to upload</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (Or Click)</h4></span>',
        dictResponseError: 'Error uploading file!',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        init: function() {
            this.on("addedfile", function(file) {
                    // alert("added xx");
                    console.log("Added file.");
                }),
                this.on("success", function(file, response) {
                    // alert("Added uploaded.");
                    console.log(response.file);

                    $("#file-submit").append(
                        '<input  required type="hidden" class="form-control" name="file_name[]" value="' +
                        response.file + '">'
                    );
                }),
                this.on("successmultiple", function(file, response) {
                    // alert("Added  successmultiple.");
                    console.log(response);
                })
        },
        success: function(file, response) {
            console.log(response);
        }
    });




    autoComplete();

</script>
{{--
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
--}}
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>


<!--[if lte IE 9]>
    <script type="text/javascript" src="assets/js/ie-scripts.js"></script>
    <![endif]-->
