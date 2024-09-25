@extends('layouts.app')

@section('title', 'My Cat')

@section('content')
    <!-- Hero Area Start -->
    <div class="hero-area2 d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <!-- Hero Caption -->
                    <div class="hero-cap pt-100">
                        <h2>My Cats</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    <!-- Cat Section Start -->
    <section class="about-area section-padding40">
        <div class="container">
            <!-- Bolu Section -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('bolu.jpg') }}" alt="Bolu" class="img-fluid" style="max-width: 300px; height: auto;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-caption">
                        <div class="section-tittle mb-35">
                            <h2>Bolu</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li><strong>Nama:</strong> Bolu</li>
                            <li><strong>Tempat/Tgl Lahir:</strong> Bekasi, 17 November 2021</li>
                            <li><strong>Jenis Kelamin:</strong> Jantan</li>
                            <li><strong>Status Perkawinan:</strong> Belum Kawin</li>
                            <li><strong>Makanan Favorit:</strong> Segala</li>
                            <li><strong>Pekerjaan:</strong> Tidur, Makan</li>
                            <li><strong>Hobi:</strong> Pup sembarangan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Ceuceu Section -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="about-img">
                        <img src="{{ asset('ceuceu.jpg') }}" alt="Ceuceu" class="img-fluid" >
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="about-caption">
                        <div class="section-tittle mb-35">
                            <h2>Ceuceu</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li><strong>Nama:</strong> Ceuceu</li>
                            <li><strong>Tempat/Tgl Lahir:</strong> Bandung, 1 Januari 2020</li>
                            <li><strong>Jenis Kelamin:</strong> Betina</li>
                            <li><strong>Status Perkawinan:</strong> Belum Kawin</li>
                            <li><strong>Makanan Favorit:</strong> Mee-O</li>
                            <li><strong>Pekerjaan:</strong> Nangkep cicak</li>
                            <li><strong>Hobi:</strong> Kabur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cat Section End -->
@endsection
