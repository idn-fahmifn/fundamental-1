<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah data barang</h1>
    
    <!-- form input -->

    <form action="{{route('barang.store')}}" method="post">
        @csrf
        <!-- input untuk nama barang -->
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang">
        </div>

        <!-- input untuk merek -->
        <div class="form-group">
            <label>Merek Barang</label>
            <input type="text" name="merek">
        </div>

        <!-- Input untuk kategori -->
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori">
                <option value="cair">Cair</option>
                <option value="padat">padat</option>
                <option value="berat">Berat</option>
            </select>
        </div>

        <!-- input untuk deskripsi -->
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi_barang" id=""></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Tambah barang</button>
        </div>


    </form>

</body>
</html>