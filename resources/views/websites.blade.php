<!DOCTYPE html>
<html>
<head>
    <title>Daftar Website Peminjaman PlayStation</title>
</head>
<body>
    <h1>Daftar Website</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>URL</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($websites as $website)
                <tr>
                    <td>{{ $website->id }}</td>
                    <td>{{ $website->name }}</td>
                    <td><a href="{{ $website->url }}" target="_blank">{{ $website->url }}</a></td>
                    <td>{{ $website->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
