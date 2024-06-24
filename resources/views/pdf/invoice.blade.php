<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda untuk PDF */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Kota</h2>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Kota</th>
                <th>Nama Pemimpin</th>
                <th>Tanggal Berdiri</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Jenis Kota</th>
                <th>Keunggulan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listKota as $kota)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kota->nama_kota }}</td>
                <td>{{ $kota->nama_pemimpin }}</td>
                <td>{{ $kota->tanggal_berdiri }}</td>
                <td>{{ $kota->jumlah_penduduk }}</td>
                <td>{{ $kota->luas_wilayah }}</td>
                <td>{{ $kota->jenis_kota }}</td>
                <td>{{ $kota->keunggulan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>