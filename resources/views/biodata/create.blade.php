<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Create Biodata</h1>

    <form action="{{route('kirim-biodata')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap">
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir">
        </div>

        <div class="form-group">
            <label>Tanggal lahir</label>
            <input type="date" name="tanggal_lahir">
        </div>

        <div class="form-group">
            <label>Golongan Darah</label>
            <input type="text" name="golongan_darah">
        </div>

        <div class="form-group">
            <button type="submit">Kirim Biodata</button>
        </div>

    </form>

</body>

</html>