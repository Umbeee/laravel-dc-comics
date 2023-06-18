@vite('resources/js/app.js')
<div class="bg-black h-100 p-5">
<div class="container text-white text-center">
    <h1>Crea nuovo Comic</h1>
    <form action=" {{ route('comics.update', $comic) }} " method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <input class="form-control" type="text" name="title" placeholder="titolo" value="{{ old('title') ?? $comic->title }}">
        </div>

        <div class="form-group">
        <textarea class="form-control" type="text" name="description" placeholder="description" >{{ old('description') ?? $comic->description }}</textarea>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="thumb" placeholder="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
        </div>

        <div>
            <input class="form-control" type="text" name="price" placeholder="price" value="{{ old('price') ?? $comic->price }}">
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="series" placeholder="series" value="{{ old('series') ?? $comic->series }}">
        </div>

        <div class="form-group">
            <input class="form-control" type="date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="type" placeholder="type" value="{{ old('type') ?? $comic->type }}">
        </div>
        <button type="submit" class="btn btn-primary">invia</button>
    </form>
    <a href="/">
        <button type="submit" class="btn btn-danger">annulla</button>
    </a>

</div>
</div>