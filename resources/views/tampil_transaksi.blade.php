<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align='center'>Tabel Data Transaksi</h1>
    <table border="5" align="center">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Jenis Kelamin</th>
            <th>Jumlah Barang</th>
            <th>Tanggal Beli</th>
        </tr>
        @php $no = 1;@endphp
        @foreach($transaksi as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data-> barang2 -> nama_barang }}</td>
            <td>{{ $data-> pembeli -> nama_pembeli }}</td>
            <td>{{ $data-> pembeli -> jenis_kelamin }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>{{ $data->tanggal }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>