@foreach ($recentReviews as $item)
    <!-- review-->
    {{-- {{dd($item->user)}} --}}
    <a href="{{url('/')}}/school/{{$item->user->id}}/#reviews" class="review small">
        <h3>{{$item->school->name}}</h3>
        <figure>{{$item->school->locality}}</figure>
        <div class="info">
            <div class="rating" data-rating="{{$item->rating}}"></div>
            <div class="type">
                <i><img src="icons/restaurants-bars/restaurants/restaurant.png" alt="{{$item->school->name}}"></i>
                <span>{{$item->school->level}}</span>
            </div>
        </div>
        <p>
            {{$item->comment}}
        </p>
    </a><!--/.review-->

@endforeach
