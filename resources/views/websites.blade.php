<!DOCTYPE html>
<html>
<head>
    <title>Daftar Website Peminjaman PlayStation</title>
</head>
<body>
    <h1>Daftar Peminjam PlayStation</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Meminjam</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($websites as $website)
                <tr>
                    <td>{{ $website->id }}</td>
                    <td>{{ $website->name }}</td>
                    <td>{{ $website->tanggal_meminjam }}</td>
                    <td>{{ $website->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
