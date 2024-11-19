<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nama nama barang</title>
</head>
<body>

<h1>Nama barang yang ada di database</h1>

<table>
    <thead>
        <th>Nama Barang</th>
        <th>Merek</th>
        <th>Kategori</th>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->nama_barang}}</td>
                <td>{{$item->merek}}</td>
                <td>{{$item->kategori}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    
</body>
</html>