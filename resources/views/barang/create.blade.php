@extends('master.template')
@section('navigasi')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/barang') }}"> barang</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Barang </li>
    </ol>
</nav>
@endsection
@section('button')
<div class="mb-3 mt-3 ">
  <a href="{{route('barang')}}"><button class="btn btn-warning"><i class="fa-solid fa-arrow-left me-2"></i>Back</button></a>
</div>
@endsection
@section('konten')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-body">
        <small class="text-danger">(*) Wajib di isi.</small>
        <form action="{{ route('barang.store') }}" enctype="multipart/form-data" method="post">
          <div class="row mb-3">
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Kode <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-paperclip"></i></span>
                <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Kode" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
            @error('kode')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Nama Barang <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-bag-shopping"></i></span>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Nama Barang" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
              </div>
            </div>
            @error('nama')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Jumlah Barang <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-square"></i></span>
                <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Jumlah barang" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
              </div>
            </div>
            @error('jumlah')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Gambar <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-folder"></i></span>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" class="form-control" id="basic-icon-default-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
              </div>
            </div>
            @error('gambar')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Lokasi <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                <select id="defaultSelect" class="form-select @error('lokasi') is-invalid @enderror" name="lokasi">
                    <option hidden></option>
                    <option value="1">One</option>
                  </select>
              </div>
            </div>
            @error('lokasi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">kondisi <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                <select id="defaultSelect" class="form-select @error('kondisi') is-invalid @enderror" name="kondisi">
                    <option hidden></option>
                    <option value="1">One</option>
                  </select>
              </div>
            </div>
            @error('kondisi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-md-2 form-label" for="basic-icon-default-phone">Kategori <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="fa-solid fa-circle-info"></i></span>
                <select id="defaultSelect" class="form-select @error('kategori') is-invalid @enderror" name="kategori">
                    <option hidden></option>
                    <option value="1">One</option>
                    
                  </select>
              </div>
            </div>
            @error('kategori')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Supplier <span class="text-danger">*</span></label>
            <div class="col-sm-10 col-md-4">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-circle-user"></i></span>
                <select id="defaultSelect" class="form-select @error('supplier') is-invalid @enderror" name="supplier">
                    <option hidden></option>
                    <option value="1">One</option>
                    
                  </select>
              </div>
            </div>
            @error('supplier')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Spesifikasi </label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="fa-solid fa-comment"></i></span>
                <textarea id="basic-icon-default-message" class="form-control" placeholder="Spesifikasi" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane me-2"></i>Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection