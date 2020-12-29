<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div class="modal-window fade_in">
    <div class="modal-wrapper"><h2>{{$schoolModel->name}}</h2>
        <figure>{{$schoolModel->county}}</figure>
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
        <div class="rating" data-rating="{{$averagecomments}}"></div>
        <div class="modal-body">
            <div class="gallery">
                <div class="image">
                    <div class="type"><i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i><span>Apartment</span></div>
                    <div class="owl-carousel gallery">
                        @for($i=0;$i<count($schoolModel->photos);$i++)
                            <img src="{{url('/')}}/uploads/{{$schoolModel->photos[$i]->name}}">
                        @endfor
                    </div>
                </div>

                @if (count($schoolModel->features)>0)
                    <div class="features"><h3>Features</h3>
                        <ul class="bullets">

                            @foreach ($schoolModel->features as $item)
                                <li>{{$item->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="modal-content">
                @if ($schoolModel->description!=""||$schoolModel->description!=null)

                <section><h3>Description</h3>
                        <p>
                            {{$schoolModel->description}}
                        </p>
                    </article>

                </section>
                @endif

                @if (count($schoolModel->courses)>0)

                <article class="block">
                    <section><h3>Lessons/Courses</h3>
                        <dl>
                        @foreach ($schoolModel->courses as $item)
                            <dt>{{$item->name}}</dt>
                            <dd>-</dd>
                        @endforeach

                    </dl>
                </section>
                @endif
                @if (count($lastReview)>0)
                <section><h3>Last Review</h3>
                    <div class="rating" data-rating="{{$lastReview[0]->rating}}"></div>
                    <p>{{$lastReview[0]->comment}}</p>
                </section>

                @endif
                <a href="{{url('/')}}/school/{{$schoolModel->id}}" class="btn btn-default btn-large">Show Detail</a></div>
        </div>
        <div class="modal-close"><img src="assets/img/close.png"></div>
    </div>
    <div class="modal-background fade_in"></div>
</div>

<script>
    // Render Owl carousel gallery

    var _rtl = false;
    drawOwlCarousel(_rtl);

    // Render Rating stars

    rating('.modal-window');

    // Remove modal element form DOM

    $('.modal-window .modal-background, .modal-close').live('click',  function(e){
        $('.modal-window').addClass('fade_out');
        setTimeout(function() {
            $('.modal-window').remove();
        }, 300);
    });
</script>

<!--[if lte IE 9]>
<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>
