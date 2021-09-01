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
                            @auth
                                <a href="{{ route('submit') }}" class="submit-item">
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
            <div id="page-canvas" style="height: auto;
            padding-bottom: 60px;
            z-index: 0;
            position: relative;">
                <!--Off Canvas Navigation-->
                <nav class="off-canvas-navigation">
                    <header>Navigation</header>
                    <div class="main-navigation navigation-off-canvas"></div>
                </nav>
                <!--end Off Canvas Navigation-->

                <!--Sub Header-->
                <section class="sub-header">
                    <div class="search-bar horizontal collapse" id="redefine-search-form"></div>
                    <!-- /.search-bar -->
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="redefine-search">
                                <a href="#redefine-search-form" class="inner" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="redefine-search-form">
                                    <span class="icon"></span>
                                    <span>Redefine Search</span>
                                </a>
                            </div>
                            <ol class="breadcrumb">
                                <li><a href="index-directory.html"><i class="fa fa-home"></i></a></li>
                                <li><a href="#">Page</a></li>
                                <li class="active">Add School</li>
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
                            <form id="form-submit" role="form" method="post" action="submit"
                                enctype="multipart/form-data">
                        <div class="row">
                            <!--Content-->
                                <div class="col-md-12">
                                    <header>
                                        <h1 class="page-title">Submit Item</h1>
                                    </header>
                                    {{ csrf_field() }}

                                    <section>
                                        <div class="form-group large">
                                            <label for="title">School Name</label>
                                            <input type="text" required class="form-control" id="title" name="name">
                                        </div>
                                    </section>
                                    <section>
                                        <h3>Address & Contact</h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="state">County</label>
                                                    <select required name="county" id="model" title="County"
                                                        data-live-search="true">
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
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="city">City/Estate</label>
                                                            <input required type="text" class="form-control" id="city"
                                                                name="locality">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="zip">Level</label>
                                                            <select required name="level" id="model"
                                                                title="Level of school" data-live-search="true">
                                                                <option value='primary'>Primary School</option>
                                                                <option value='secondary'>Secondary School</option>
                                                                <option value='university'>University</option>
                                                                <option value='college'>College</option>
                                                                <option value='other'>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="street">Students Gender</label>
                                                    <select name="gender" id="model" title="Mixed/girls/Boys"
                                                        data-live-search="true">
                                                        <option value='mixed'>Mixed</option>
                                                        <option value='boys'>Male</option>
                                                        <option value='girls'>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                        </div>
                                        <!--/.row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="phone-number">Phone Number</label>
                                                    <input required type="text" class="form-control" id="phone-number"
                                                        name="phone" pattern="\d*">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="email">E-mail</label>
                                                    <input required type="email" class="form-control" id="email"
                                                        name="email">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="website">Motto/Slogan</label>
                                                    <input required type="text" class="form-control" id="website"
                                                        name="motto">
                                                </div>
                                            </div>
                                            <!--/.col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="website">Ownership</label>
                                                    <select required name="ownership" id="model"
                                                        title="Government/Private" data-live-search="true">
                                                        <option value='public'>Public</option>
                                                        <option value='private'>Private</option>
                                                        <option value='mission'>Mission</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/.col-md-12-->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="website">Vision</label>
                                                    <textarea required name="vision"  class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            <!--/.col-md-12-->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="website">Mission</label>
                                                    <textarea required name="mission"  class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            <!--/.col-md-12-->
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="website">Performance (Describe in details the number of As/Upper classes/Pass Respectively)</label>
                                                        <textarea required name="performance"  class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                            <!--/.col-md-12-->
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="website">Description (Include fees per term/Semister)</label>
                                                    <textarea required name="description"  class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.row-->
                                    </section>
                                    <!--/#address-contact-->
                                    <section>
                                        <h3>Map</h3>
                                        <div id="map-simple" class="map-submit"></div>

                                        <br>
                                        <button id="confirmPosition" class="btn framed " type="button">Confirm Position</button>

                                        <br>
                                        <br>
                                        <input required class="form-control col-md-4 col-sm-4" placeholder="Longitude" required id="longitude" type="text" name="longitude" readonly="readonly"/>
                                        <input required class="form-control col-md-4 col-sm-4" placeholder="Latitude" required id="latitude" type="text" name="latitude" readonly="readonly"/>

                                    </section>
                                    <section>
                                        <h3>Features</h3>
                                        <ul class="list-unstyled checkboxes">
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="Meals">Meals</label></div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="Online Exams">Online Exams</label></div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="Wi-Fi">Wi-Fi</label></div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="School Vehicle">School Vehicle</label></div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="Swimming Pool">Swimming Pool</label></div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="Football Field">Football Field</label></div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label><input type="checkbox" name="features[]"
                                                            value="Clubs">Clubs</label></div>
                                            </li>
                                        </ul>
                                    </section>
                                    <!--Menu-->
                                    <section>
                                        <h3>Lessons Courses and activities</h3>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="active"><a href="#tab-main-lessons"
                                                            data-toggle="tab">Main Lessons/Courses</a>
                                                    </li>
                                                    <li><a href="#tab-curricular" data-toggle="tab">Curriculum
                                                            Activities</a></li>
                                                    <li><a href="#tab-other-activities" data-toggle="tab">Other
                                                            Activities</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-9">
                                                <!-- Tab panes -->
                                                <div class="tab-content menu min-height-160">
                                                    <div class="tab-pane fade in active" id="tab-main-lessons">
                                                        <article>
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <div class="menu-icon"><i
                                                                            class="fa fa-book"></i><span>1</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-11">
                                                                    <div id="main-course">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="form-group">
                                                                                    <input required type="text"
                                                                                        class="form-control"
                                                                                        name="main_course[]"
                                                                                        placeholder="Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.row-->
                                                                        <div class="form-group">
                                                                            <input  type="text"
                                                                                class="form-control"
                                                                                name="main-description[]"
                                                                                placeholder="Description">
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <button id="add_main_field"
                                                                            class="btn framed  appendbtn">Add<i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                                <!--/.col-md-11-->
                                                            </div>
                                                            <!--/.row-->
                                                        </article>
                                                    </div>
                                                    <!--/#tab-menu-->
                                                    <div class="tab-pane fade" id="tab-curricular">
                                                        <article>
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <div class="menu-icon"><i
                                                                            class="fa fa-book"></i><span>1</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-11">
                                                                    <div id="main-course2">
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <button id="add_main_field2"
                                                                            class="btn framed  appendbtn">Add<i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                                <!--/.col-md-11-->
                                                            </div>
                                                            <!--/.row-->
                                                        </article>
                                                    </div>
                                                    <!--/#tab-daily-menu-->
                                                    <div class="tab-pane fade" id="tab-other-activities">
                                                        <article>
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <div class="menu-icon"><i
                                                                            class="fa fa-book   "></i><span>1</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-11">

                                                                    <div id="main-course3">
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <button id="add_main_field3"
                                                                            class="btn framed  appendbtn">Add<i
                                                                                class="fa fa-plus"></i></button>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                                <!--/.col-md-11-->
                                                            </div>
                                                            <!--/.row-->
                                                        </article>
                                                    </div>
                                                    <!--/#tab-wine-list-->
                                                </div>
                                                <!--end Tab panes-->
                                            </div>
                                            <!--/.col-md-9-->
                                        </div>
                                        <!--/.row-->
                                    </section>
                                    <!--end Menu-->
                                    <!--Gallery-->
                                    <section>
                                        <h3>Gallery</h3>
                                        <div id="file-submit" class="dropzone dz-success" url="/uploadImage">
                                            <input name="file" type="file" multiple>
                                            <div class="dz-default dz-message"><span>Click or Drop Images Here</span>
                                            </div>
                                        </div>
                                    </section>
                                    <!--end Gallery-->
                                    <section>
                                        <h3>Payment</h3>
                                        <div class="form-group">
                                            <label for="package">Select your Package</label>
                                            <select name="package" id="package" class="framed">
                                                <option value="3">3 Month</option>
                                                <option value="6">6 Months</option>
                                                <option value="12">1 Year</option>
                                            </select>
                                    </div>
                                    </section>
                                    <hr>
                                    <section>
                                        <figure class="pull-left margin-top-15">
                                            <p>By clicking “Submit & Pay” button you agree with <a
                                                    href="terms-conditions.html" class="link">Terms & Conditions</a></p>
                                        </figure>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default pull-right" id="submit">Submit
                                                & Pay</button>
                                        </div>
                                        <!-- /.form-group -->
                                    </section>
                                </div>
                                <!--/.col-md-9-->
                                <!--Sidebar-->
                                <!-- /.col-md-3-->
                                <!--end Sidebar-->
                        </div>
                            </form>
                            <!--/#form-submit-->
                    </section>
                </div>
                <!-- end Page Content-->
            </div>
            <!-- end Page Canvas-->
            <!--Page Footer-->
            <footer id="page-footer" style="">
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

@include('common.bottom')

<script>
    $(window).load(function() {
        var _latitude =-1.286389;
        var _longitude = 36.817223;
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
        addRemoveLinks : true,
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
                    '<input  required type="hidden" class="form-control" name="file_name[]" value="'+response.file+'">'
                    );
            }),
            this.on("successmultiple", function(file, response) {
                // alert("Added  successmultiple.");
                console.log(response);
            })
        },
        success: function(file, response){
            console.log(response);
        }
    });




    autoComplete();

</script>
{{--
<script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key="></script> --}}
  <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>

<script>
    // // Get element references
    // var confirmBtn = document.getElementById('confirmPosition');
    // var longitude = document.getElementById('longitude');
    // var latitude = document.getElementById('latitude');

    // // Initialize locationPicker plugin
    // var lp = new locationPicker('map-simple', {
    //   setCurrentPosition: true, // You can omit this, defaults to true
    // }, {
    //   zoom: 12 // You can set any google map options here, zoom defaults to 15
    // });

    // // Listen to button onclick event
    // confirmBtn.onclick = function (event) {
    //     event.preventDefault();
    //   // Get current location and show it in HTML
    //   var location = lp.getMarkerPosition();
    //   longitude.value= location.lng;
    //   latitude.value= location.lat;
    // //   onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
    // };

    // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
    // google.maps.event.addListener(lp.map, 'idle', function (event) {
    //   // Get current location and show it in HTML
    //   var location = lp.getMarkerPosition();
    //   onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
    // });
  </script>
<!--[if lte IE 9]>
    <script type="text/javascript" src="assets/js/ie-scripts.js"></script>
    <![endif]-->
{{--
    _token: k5mDnmVWYwvd6qc6GXX64zKfwDDmhgelz4PXlNAK
    name: muranga high
    county: Muranga
    locality: muranga
    level: secondary
    level: boys
    phone: 0877665544
    email: admin@gmail.com
    motto: Strive to succed
    ownership: public
    features[]: Meals
    features[]: School Vehicle
    features[]: Football Field
    main-course[]: english
    main-description[]:
    main-course[]: Swahili
    main-course-description[]:
    main-course[]: CRE
    main-course-description[]:
    main-course[]: maths
    main-course-description[]:
    file: (binary)
    file_name[]: d406391f999a448eabab2f347b7d2f4267304a1a.png
    file_name[]: 7f5f1451ef1805ded6264766d0bb448355f0164b.jpg
    package: 1 --}}
