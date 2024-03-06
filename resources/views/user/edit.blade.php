<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pinjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9e3b5dfe4e.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid mt-4">
        <a href="{{ route('pinjam') }}" style="text-decoration: none;" class="d-flex justify-content-end mb-3"><button type="button" class="btn btn-primary"><i class="fa fa-circle-left"></i>  Kembali</button></a>
        <div class="card px-3 py-3">
            <form class="row g-3" method="post" action="{{ route('pinjam.store') }}" enctype="multipart/form-data">
                @csrf
                <h2 class="fw-bold">Edit Peminjaman Barang</h2>
                <div class="col-6">
                    <label for="user_id" class="form-label">User Id</label>
                    <input type="number" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                    @error('user_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang">
                    @error('kode_barang')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang">
                    @error('nama_barang')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
                    <input type="number" min="0" class="form-control @error('jumlah_pinjam') is-invalid @enderror" id="jumlah_pinjam" name="jumlah_pinjam">
                    @error('jumlah_pinjam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="tgl_kembali" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali" name="tgl_kembali">
                    @error('tgl_kembali')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan" rows="3"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-success">Pinjam</button>
                </div>
              </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>