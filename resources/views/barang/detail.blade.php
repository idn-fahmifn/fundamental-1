<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail Barang</title>
</head>

<body>

    <table>
        <tbody>
            <tr>
                <th>Nama Barang</th>
                <td>{{$data->nama_barang}}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{$data->merek}}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{$data->kategori}}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{$data->deskripsi_barang}}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>