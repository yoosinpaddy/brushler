@foreach ($schools as $item)
    <!--start of item-->
    <div class="col-md-3 col-sm-4" id="">
        <div class="item">
            <div class="image">
                <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                <a href="item-detail.html">
                    <div class="overlay">
                        <div class="inner">
                            <div class="content">
                                <h4>Description</h4>
                                <p>{{ $item->description }}</p>
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
                <a href="item-detail.html">
                    <h3>{{ $item->name }}</h3>
                </a>
                <figure>{{ $item->county }}{{-- 63 Birch Street
                    --}}</figure>
                <div class="info">
                    <div class="type">
                        <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                        <span>{{ $item->level }}</span>
                    </div>
                    <div class="rating" data-rating="4"></div>
                </div>
            </div>
        </div>
        <!-- /.item-->
    </div>
    <!--end of item-->
    
@endforeach
