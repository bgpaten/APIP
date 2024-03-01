@extends('master.template')
@section('navigasi')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/barang') }}"> Barang</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail: </li>
    </ol>
</nav>
@endsection
