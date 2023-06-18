@vite('resources/js/app.js')
<div class="bg-black h-100 p-5">
<div class="container text-white text-center">
    <h1>Crea nuovo Comic</h1>
    <form action=" {{ route('comics.store') }} " method="POST">

        @csrf

        <div class="form-group">
            <input class="form-input" type="text" name="title" placeholder="titolo">
        </div>

        <div class="form-group">
            <textarea class="form-input" type="text" name="description" placeholder="description"></textarea>
        </div>

        <div class="form-group">
            <input class="form-input" type="text" name="thumb" placeholder="thumb">
        </div>

        <div>
            <input type="text" name="price" placeholder="price">
        </div>

        <div class="form-group">
            <input class="form-input" type="text" name="series" placeholder="series">
        </div>

        <div class="form-group">
            <input class="form-input" type="date" name="sale_date">
        </div>

        <div class="form-group">
            <input class="form-input" type="text" name="type" placeholder="type">
        </div>
        <button type="submit" class="btn btn-primary">invia</button>
    </form>
    <a href="/">
        <button type="submit" class="btn btn-danger">annulla</button>
    </a>

</div>
</div>