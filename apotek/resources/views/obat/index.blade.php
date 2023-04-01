@extends('layout.main')

@section('container')
<table class="table">
  <thead>
    <tr>
    <th scope="col">Kode Obat</th>
      <th scope="col">Nama Obat</th>
      <th scope="col">Merk</th>
      <th scope="col">Jenis</th>
      <th scope="col">Satuan</th>
      <th scope="col">Golongan</th>
      <th scope="col">Kemasan</th>
      <th scope="col">Harga Jual</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $obat)
    <tr>
      <td>{{$obat->kode_obat}}</td>
      <td>{{$obat->nama_obat}}</td>
      <td>{{$obat->merk}}</td>
      <td>{{$obat->jenis}}</td>
      <td>{{$obat->satuan}}</td>
      <td>{{$obat->golongan}}</td>
      <td>{{$obat->kemasan}}</td>
      <td>{{$obat->harga_jual}}</td>
    </tr>
    @endforeach()
  </tbody>
</table>
@endsection