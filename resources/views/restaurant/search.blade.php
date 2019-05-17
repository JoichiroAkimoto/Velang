@extends('layout')
@section('content')
<article>
    <article class="section">
        <div class="container">
            <header class="header header--section">
                <h2 class="text-middle">
                    <i class="fa fa-film color-gray-light"></i>検索結果
                </h2>
            </header>
            <!-- <ul class="listview js-lazy-load-images"> -->
                @foreach ($restaurants as $restaurant)
                <hr noshade>
                <div class="thumbnail__caption"><a href="/restaurants/{{ $restaurant->id }}">
                        <h3 class="text-xsmall text-overflow" title="{{ $restaurant->store_name }}">
                            {{ $restaurant->store_name }}
                        </h3>
                </div>
                <div style="background-repeat:no-repeat">
                <a href="/restaurants/{{ $restaurant->id }}">
                    <div style="background-image:url({{ $restaurant->image_url1 }})"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                </a>
                </div>
                @endforeach
            <!-- </ul> -->
        </div>

    </article>
    @endsection
