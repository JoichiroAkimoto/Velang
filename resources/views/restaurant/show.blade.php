@extends('layout')
@section('content')
<article>
    <div class="contents row">
        <div class="content_post">
            <div class="more">
                <h1>{{$restaurant->store_name}}</h1>
                <ul class="more_list">
                    <!-- <li><a href="/restaurants/{{$restaurant->id}}">詳細</a></li> -->
                </ul>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url1 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url1 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url2 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url2 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url3 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url3 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url4 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url4 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url5 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url5 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url6 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url6 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url7 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url7 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url8 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url8 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url9 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url9 }}" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="{{ $restaurant->image_url10 }}" class="thumbnail">
                        <img src="{{ $restaurant->image_url10 }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <p>
          <h3>{{$restaurant->comment_title}}</h2>
          <p4>{{$restaurant->comment_first}}</h3>
        </p>
        <span class="name">
        </span>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Genre
            </div>
            <div class="col-xs-10">
                {{$restaurant->genre}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Contact
            </div>
            <div class="col-xs-10">
                {{$restaurant->contact}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Reservation Availability
            </div>
            <div class="col-xs-10">
                {{$restaurant->reservation_availability}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Address
            </div>
            <div class="col-xs-10">
                {{$restaurant->address}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Access
            </div>
            <div class="col-xs-10">
                {{$restaurant->access}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Opening Hours
            </div>
            <div class="col-xs-10">
                {{$restaurant->opening_hours}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Regular Holiday
            </div>
            <div class="col-xs-10">
                {{$restaurant->regular_holiday}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Budget
            </div>
            <div class="col-xs-10">
                {{$restaurant->budget}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Budget Word of Mouth
            </div>
            <div class="col-xs-10">
                {{$restaurant->budget_word_of_mouth}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                Payment
            </div>
            <div class="col-xs-10">
                {{$restaurant->payment}}
            </div>
        </div>
        <hr noshade>
        <div class="row">
            <div class="col-xs-2">
                <a href="https://tabelog.com/">食べログURL</a>
            </div>
            <div class="col-xs-10">
                <a href="{{ $restaurant->tabelog }}">{{$restaurant->tabelog}}</a>
            </div>
        </div>
        <hr noshade>
    </div>
</article>
@endsection
