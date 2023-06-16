@vite('resources/js/app.js')


<div class="bg-black h-100 p-5">

    <div class="container">
        <div class="text-center">
                <img class="card-img-top" src="{{ $singleComic->thumb }}" style="height:500px; width: 350px;">
            <div class="card-body">
                <h2 class="card-title text-white m-2">{{ $singleComic->title }}</h2>
                <p>{{ $singleComic->description }}</p>
                <p>{{ $singleComic->series }}, {{ $singleComic->sale_date }}, {{ $singleComic->price }}</p>
                <a href="/"  class="text-reset text-decoration-none">
                    <button class="btn btn-primary">Torna alla home</button>
                </a>
                <a href="{{ route('comics.update', [ 'comic' => $singleComic] )}}"  class="text-reset text-decoration-none">
                    <button class="btn btn-warning m-3">Edit</button>
                </a>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
