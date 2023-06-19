@vite('resources/js/app.js')
<div class="bg-black h-100 p-5">
<div class="container text-white text-center">
    <h1>Crea nuovo Comic</h1>
    <form action=" {{ route('comics.store') }} " method="POST">

        @csrf

        <div class="form-group mb-3">
            <input class="form-control" type="text" name="title" placeholder="titolo">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <textarea class="form-control" type="text" name="description" placeholder="description"></textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="thumb" placeholder="thumb">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="series" placeholder="series">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control" type="date" name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="type" placeholder="type">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">invia</button>
    </form>
    <a href="/">
        <button type="submit" class="btn btn-danger">annulla</button>
    </a>

</div>
</div>