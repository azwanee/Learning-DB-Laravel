<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Produksi</th>
            <th>Nama Merek</th>
        </tr>
        @php $no = 1;@endphp
        @foreach($produk as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->Nama_Produk }}</td>
            <td>{{ $data->Jumlah }}</td>
            <td>{{ $data->Tanggal_Produksi }}</td>
            <td>{{ $data-> merek -> Nama_Merek }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>