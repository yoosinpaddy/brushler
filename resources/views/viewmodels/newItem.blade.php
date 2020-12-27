@foreach ($newItems as $item)
    <!-- new item-->
    <?php
        $averagecomments=5;
        $allComments=count($item->comments);
        $totalRating=0;
        foreach ($item->comments as $comment) {
            $totalRating+=$comment->rating;
        }
        $averagecomments=$totalRating/$allComments;
    ?>
    <a href="item-detail.html" class="item-horizontal small">
        <h3>{{$item->name}}</h3>
        <figure>{{$item->locality}}, {{$item->county}}</figure>
        <div class="wrapper">
            <div class="image"><img src="img/items/1.jpg" alt=""></div>
            <div class="info">
                <div class="type">
                    <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                    <span>{{$item->level}}</span>
                </div>
                <div class="rating" data-rating="{{$averagecomments}}"></div>
            </div>
        </div>
    </a>
    <!--/ New Item-->
@endforeach
