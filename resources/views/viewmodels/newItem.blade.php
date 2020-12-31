@foreach ($newItems as $item)
    <!-- new item-->
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
    <a href="{{url('/')}}/school/{{$item->id}}" class="item-horizontal small">
        <h3>{{$item->name}}</h3>
        <figure>{{$item->locality}}, {{$item->county}}</figure>
        <div class="wrapper">
            <div class="image"><img src="{{url('/')}}/uploads/{{count($item->photos)>0?$item->photos[0]->name:''}}" alt="{{$item->name}} photo"></div>
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
