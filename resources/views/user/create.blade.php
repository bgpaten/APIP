{{-- Halaman untuk membuat form peminjaman brang  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Form Peminjaman Barang</h2>
    <a href="{{ route('pinjam') }}"><button>Kembali</button></a><br><br>
    <form action="{{ route('pinjam.store') }}" method="post">
        <input type="text" value="[id]" name="id" disabled>
        <input type="text" value="[user id]" name="user_id" disabled>
        <input type="text" placeholder="Masukkan kode barang" name="kode_barang">
        <input type="text" placeholder="Masukkan nama barang" name="nama_barang">
        <input type="text" placeholder="Masukkan jumlah pinjam" name="jumlah_pinjam">
        <input type="date" placeholder="Pilih tanggal kembali" name="tanggal_kembali">
        <input type="text" name="keterangan" placeholder="Masukan Keterrangan">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>