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
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>
        @php $no = 1;@endphp
        @foreach($siswa as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->Nama }}</td>
            <td>{{ $data->Jenis_Kelamin }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->agama }}</td>
            <td>{{ $data->telepon }}</td>
            <td>{{ $data->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>