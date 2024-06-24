<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
  <div class="">
    <a href="{{route('add-kota')}}" class="btn btn-primary">Tambah</a>
    <a  href="{{ route('download-pdf') }}" class="btn btn-secondary">Print</a>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">nama kota</th>
      <th scope="col">nama pemimpin</th>
      <th scope="col">tanggal berdiri</th>
      <th scope="col">jumlah penduduk</th>
      <th scope="col">luas wilayah</th>
      <th scope="col">jenis kota</th>
      <th scope="col">keunggulan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listKota as $kota)
    <tr>
        <th>{{++$i}}</th>
        <th>{{$kota->nama_kota}}</th>
        <th>{{$kota->nama_pemimpin}}</th>
        <th>{{$kota->tanggal_berdiri}}</th>
        <th>{{$kota->jumlah_penduduk}}</th>
        <th>{{$kota->luas_wilayah}}</th>
        <th>{{$kota->jenis_kota}}</th>
        <th>{{$kota->keunggulan}}</th>
        <th class="d-flex gap-2">
        <a href="{{ route('edit-kota', ['id' => $kota->id_kota]) }}" class="btn btn-success">Edit</a>
        <form action="{{ route('process-delete', ['id' => $kota->id_kota]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </th>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>