{{-- Halaman untuk membuat form peminjaman brang  --}}
{{-- <!DOCTYPE html>
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
</html> --}}placeholder="Your Email" 

@extends('master.app')
@section('konten')
     <!-- Contact Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">info@example.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">123 Street, NY, USA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form action="{{ route('pinjam.store') }}" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <select id="defaultSelect" class="form-select border-0 bg-light px-4 @error('kode') is-invalid @enderror" name="kode_barang" style="height: 55px;">
                                    <option hidden>Pilih Kode Barang</option>
                                    @foreach ($data as $brg)
                                    <option value="{{$brg->id}}">{{$brg->kode}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select id="defaultSelect" class="form-select border-0 bg-light px-4 @error('nama_barang') is-invalid @enderror" name="nama_barang" style="height: 55px;">
                                    <option hidden>Pilih Kode Barang</option>
                                    @foreach ($data as $brg)
                                    <option value="{{$brg->id}}">{{$brg->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <input type="number" class="form-control border-0 bg-light px-4" placeholder="Masukkan jumlah pinjam" name="jumlah_pinjam" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Pilih tanggal kembali" name="tanggal_kembali" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="keterangan" placeholder="Masukan Keterangan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection