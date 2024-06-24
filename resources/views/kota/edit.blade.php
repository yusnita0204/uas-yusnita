<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Kota</h2>
    <form action="{{ route('process-edit', ['id' => $listKota->id_kota]) }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="nama_kota" class="form-label">Nama Kota</label>
            <input type="text" class="form-control" id="nama_kota" name="nama_kota" value="{{ $listKota->nama_kota }}" required>
        </div>
        <div class="mb-3">
            <label for="nama_pemimpin" class="form-label">Nama Pemimpin</label>
            <input type="text" class="form-control" id="nama_pemimpin" name="nama_pemimpin" value="{{ $listKota->nama_pemimpin }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_berdiri" class="form-label">Tanggal Berdiri</label>
            <input type="date" class="form-control" id="tanggal_berdiri" name="tanggal_berdiri" value="{{ $listKota->tanggal_berdiri }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk</label>
            <input type="number" class="form-control" id="jumlah_penduduk" name="jumlah_penduduk" value="{{ $listKota->jumlah_penduduk }}" required>
        </div>
        <div class="mb-3">
            <label for="luas_wilayah" class="form-label">Luas Wilayah (km<sup>2</sup>)</label>
            <input type="text" class="form-control" id="luas_wilayah" name="luas_wilayah" value="{{ $listKota->luas_wilayah }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kota" class="form-label">Jenis Kota</label>
            <select class="form-select" id="jenis_kota" name="jenis_kota" required>
                <option value="istimewa" {{ $listKota->jenis_kota == 'istimewa' ? 'selected' : '' }}>Istimewa</option>
                <option value="otonom" {{ $listKota->jenis_kota == 'otonom' ? 'selected' : '' }}>Otonom</option>
                <option value="percontohan" {{ $listKota->jenis_kota == 'percontohan' ? 'selected' : '' }}>Percontohan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="keunggulan" class="form-label">Keunggulan</label>
            <textarea class="form-control" id="keunggulan" name="keunggulan" rows="3" required>{{ $listKota->keunggulan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>