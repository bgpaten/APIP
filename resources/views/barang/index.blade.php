@extends('master.template')
@section('navigasi')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Barang </li>
    </ol>
</nav>
@endsection
@section('button')
<div class="mb-3 mt-3">
  <a href="{{route('barang.create')}}"><button class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i>Tambah Data</button></a>
</div>
@endsection
@section('konten')
<div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Barang</th>
          <th>Jumlah</th>
          <th>Spesifikasi</th>
          <th>Gambar</th>
          <th>Lokasi</th>
          <th>Kondisi</th>
          <th>Kategori</th>
          <th>supplier</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @php
            $no = 1;
        @endphp
        @foreach ($data as $item)
        <tr>
          <td> <strong>{{$no++}}</strong></td>
          <td>{{$item->nama}}</td>
          <td>{{$item->jumlah}}</td>
          <td>{{$item->spesifikasi}}</td>
          <td>
              <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xl pull-up" title="" data-bs-original-title="{{$item->nama}}">
                <img src="{{ asset('img') . '/' . $item->image }}" alt="Avatar" >
              </div>
            
          </td>
          <td>{{$item->lokasi->lokasi}}</td>

          <td><span class="badge bg-label-primary me-1">{{$item->kondisi->kondisi}}</span></td>
          <td>{{$item->kategori->kategori}}</td>
         <td>{{$item->supplier->nama}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('barang.edit',$item->id)}}"><i class="bx bx-edit-alt me-1"></i>  Edit</a>
                <a class="dropdown-item" href="{{ route('barang.show', $item->id) }}"><i class="bx bx-pencil me-1"></i>Detail</a>
                <form
                action="{{ route('barang.destroy', $item->id) }}"
                method="GET">
                @method('DELETE')
                @csrf
                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure??')"><i class="bx bx-trash me-1"></i> Delete</button>
            </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection