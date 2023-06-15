<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<style>
    main{
        background-color: black;
        color: grey;
        min-height: 90vh;
    }
    .jumbo{
        height: 400px;
        background-color: blue;
        margin-bottom: 100px;
        background-image: url(".\public\images\jumbotron.jpg");
    }
    .card-img-top{
        height: 200px;
    }
    .blue-sections {
    height: 100px;
    }
 
</style>
<body>

    @include( 'partials.header' )

    <main>

        <div class="jumbo"></div>
        <div class="container">

            <div class="row g-4">
                @foreach( $comics as $elem)
                    <div class="text-start col-2">
                        <img class="card-img-top" src="https://picsum.photos/300" alt="{{ $elem['title'] }}">
                        <!-- {{ $elem['thumb'] }} -->
                        <div class="card-body">
                        <h5 class="card-title">{{ $elem['title'] }}</h5>
                      </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pb-3">
                <a name="" id="" class="btn btn-primary text-uppercase" href="#" role="button">load more</a>
            </div>
            <div>

            </div>
        </div>
    </main>

    <div class="main blue-sections">
        <div class="container">

            <div>
                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                <p>digital comics</p>
            </div>
            <div>
                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                <p>dc merchandise</p>
            </div>

            <div>
                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                <p>subscription</p>
            </div>

            <div>
                <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                <p>comic shop locator</p>
            </div>
            <div>
                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                <p>dc power visa</p>
            </div>
        </div>
    </div>

     @include( 'partials.footer' ) 

</body>

</html>