<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Platform Belajar Online</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Data dari Tabel Pengguna</h1>

        @if($data->isEmpty())
            <p>Tidak ada data yang tersedia.</p>
        @else
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Status</th>
                        <th>Tanggal Lahir</th>
                        <th>Apakah Subscribed</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Nama }}</td>
                            <td>{{ $item->Umur }}</td>
                            <td>{{ $item->Status }}</td>
                            <td>{{ $item->Tanggal_Lahir }}</td>
                            <td>{{ $item->Apakah_Subscribed ? 'Yes' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
