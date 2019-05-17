@extends('flat_ui')
@section('title', 'Velang')
@section('content')
<!-- <img class="logo" src="img/vege.jpg" alt="vege">
Find Best Vegan Restaurant -->
<div class="header">
    <h1><a accesskey="1">Find the Best Vegan Restaurant</h1>
    <p></p><br>
    <div class="row">
        <div class="col-lg-6">
            <form action='/restaurants/search' accept_sharset="UTF-8" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Keywords" name="keyword">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-lg" type="submit">
                            <!-- <span class="glyphicon glyphicon-search" aria-hidden="true"> </span> -->
                            GO</button>
                    </span>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <br><br><br><br><br><br><br>
    {!!Form::label('test_name','ver. 0.0.1')!!}
</div>
<div>
    <div class="container">
        <header>
            <h4>New!</h2>
        </header>
        @foreach ($restaurants as $restaurant)
        <!-- <li class="col"> -->
        <hr noshade>
        <div class="thumbnail__caption"><a href="/restaurants/{{ $restaurant->id }}">
                <h3 class="text-xsmall text-overflow" title="{{ $restaurant->store_name }}">
                    {{ $restaurant->store_name }}
                </h3>
        </div>
        <a href="/restaurants/{{ $restaurant->id }}">
            <div class="thumbnail__figure" style="background-image:url({{ $restaurant->image_url1 }})"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
        </a>
        <!-- </li> -->
        @endforeach
        <div align="center">
            <div class="pagination pagination-success">
                {{ $restaurants->render() }}
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="demo-row">
        <div class="demo-title">
            <h3>Flat UI!</h3>
        </div>
        <div class="demo-content demo-content-article">
            <p>
                <a href="https://designmodo.com/flat" target="_blank">Flat UI</a>
                is a beautiful theme for <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>.
                We have redesigned many of its components to look flat in every pixel.
            </p>
            <p>
                For the most part, it is very simple to use. However, to be able
                to make some form elements and others look exactly how we want,
                we ended up using some JS plugins, which requires a bit more effort
                to integrate within your project.
            </p>
        </div>
    </div>
</div>/.container -->
@endsection
