<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Umur</title>
</head>

<body>

    <h1>Halaman Cek Umur</h1>

    <form action="{{route('proses')}}" method="post">
        @csrf
        <div class="form-control">
            <label>Berapa Umur Kamu?</label>
            <input type="number" name="umur">
        </div>
        <div class="form-control">
            <button type="submit">Masuk</button>
        </div>
    </form>

    @if (session('gagal'))
    <p style="color: red;">{{session('gagal')}}</p>
    @endif

</body>

</html>