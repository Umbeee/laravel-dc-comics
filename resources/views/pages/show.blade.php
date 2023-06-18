@vite('resources/js/app.js')


<div class="bg-black h-100 p-5">

    <div class="container">
        <div class="text-center">
                <img class="card-img-top" src="{{ $comic->thumb }}" style="height:500px; width: 350px;">
            <div class="card-body">
                <h2 class="card-title text-white m-2">{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->series }}, {{ $comic->sale_date }}, {{ $comic->price }}</p>
                <a href="{{ route( 'comics.index' ) }}"  class="btn btn-link">
                    Torna alla home
                </a>
            </div>
        </div>
    </div>
</div>
