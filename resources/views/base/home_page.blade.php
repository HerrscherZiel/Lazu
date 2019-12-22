@include('base/header_page')
@extends('base/script_page')
@section('content')
    <!-- LANDING PAGE -->
    <div id="home" class="parallax first-section" style="background-image:url('tema/images/bimbel.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="row mb-4">
                    @if(Auth::guest())
                        <div class="col-md-7">
                            <h3>Gabung bersama kami dan</h3>
                            <h3>menjadi juara!</h3>
                            <p class="lead"></p>
                            <a data-scroll href="/registerPilih" class="btn btn-light btn-radius btn-brd" style="font-weight:bold"> GABUNG SEKARANG! </a>
                        </div>
                    @else
                    <div class="col-md-7">
                            <h3>Gabung bersama kami dan</h3>
                            <h3>menjadi juara!</h3>
                            <p class="lead"></p>
                            <a data-scroll href="/" class="btn btn-light btn-radius btn-brd" style="font-weight:bold">ANDA SUDAH BERGABUNG</a>
                        </div>
                    @endif    
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="paket" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h4 style="color:#4a4a4a">Program Inofa Course</h4>
                <hr class="small-line" style="center">
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                            <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                    required autofocus>
                                            <h2>PAKET FREE</h2>
                                            <h3>FREE</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Program les gratis untuk satu mata pelajaran dalam 1 semester dengan pengajar yang berpengalaman</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>MATA PELAJARAN :</strong><p style="margin-left:18%">Matematika, IPA, Bahasa Indonesia, dan Bahasa Inggris.</p>
                                            <p><i class="fa fa-rocket"></i> <strong>DURASI :</strong><p style="margin-left:18%">90 Menit/sesi
                                            <p><i class="fa fa-database"></i> <strong>PERTEMUAN :</strong><p style="margin-left:18%">20 Pertemuan/6bln
                                            <p><i class="fa fa-link"></i> <strong>PILIHAN HARI :</strong><p style="margin-left:18%">Setiap Hari.</p>
                                            <p><i class="fa fa-link"></i> <strong>FASILITAS :</strong><p style="margin-left:18%">Soal latihan dan buku modul.</p>     
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <h2>PAKET GOLD</h2>
                                            <h3>RP.100.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Program les berbayar dengan keunggulan waktu pertemuan yang lebih banyak dan pengajar yang sudah berpengalaman.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>MATA PELAJARAN :</strong><p style="margin-left:18%">Matematika, IPA, Bahasa Indonesia, dan Bahasa Inggris.</p>
                                            <p><i class="fa fa-rocket"></i> <strong>DURASI :</strong><p style="margin-left:18%">90 Menit/sesi
                                            <p><i class="fa fa-database"></i> <strong>PERTEMUAN :</strong><p style="margin-left:18%">56 Pertemuan/6bln
                                            <p><i class="fa fa-link"></i> <strong>PILIHAN HARI :</strong><p style="margin-left:18%">Setiap Hari.</p>
                                            <p><i class="fa fa-link"></i> <strong>FASILITAS :</strong><p style="margin-left:18%">Soal latihan, buku modul, video materi, dan seminar</p>        
                                        <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <h2>PAKET REGULER</h2>
                                            <h3>Rp.75.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Program les eksklusif untuk kamu dengan lebih banyak keunggulan.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>MATA PELAJARAN :</strong><p style="margin-left:18%">Matematika, IPA, Bahasa Indonesia, dan Bahasa Inggris.</p>
                                            <p><i class="fa fa-rocket"></i> <strong>DURASI :</strong><p style="margin-left:18%">90 Menit/sesi
                                            <p><i class="fa fa-database"></i> <strong>PERTEMUAN :</strong><p style="margin-left:18%">40 Pertemuan/6bln
                                            <p><i class="fa fa-link"></i> <strong>PILIHAN HARI :</strong><p style="margin-left:18%">Setiap Hari.</p>
                                            <p><i class="fa fa-link"></i> <strong>FASILITAS :</strong><p style="margin-left:18%">Soal latihan, buku modul, dan video materi</p>     
                                        <br>
                                        </div>
                                     </div>
                                </div>

                                
                            </div><!-- end row -->
                            <br>
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="bayar" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h4 style="color:#4a4a4a">Cara Bayar Kursus di Inofa Course</h4><br>
                <hr class="small-line" style="center">
                <li class="nav-item dropdown">
                <p style="text-align:left;margin-left:15%; margin-bottom: 10px;">Transfer Bank</p>
                <a class="nav-link button4" data-toggle="collapse" style="text-align:left" data-target="#bca">
                    <img src="https://bimbel.ruangguru.com/hubfs/Bank_Central_Asia.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer BCA
                </a>
                <div class="collapse" id="bca">
                <ol style="text-align:left;margin-left:20%">
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunjuk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Inofa Course</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Inofa Course sebagai tujuan transfer</li>
                </ol>
            </div>
            
            <a class="nav-link button4" data-toggle="collapse" data-target="#mandiri" style="margin-buttom:10px; text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Bank-Mandiri-Logo-Vector-Image.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer Mandiri
                </a>
                <div class="collapse" id="mandiri">
                <ol style="text-align:left;margin-left:20%">
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunjuk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening Mandiri</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Inofa Course</li>
                    <li>5. Masukkan nomor rekening Mandiri yang tertera di aplikasi Inofa Course sebagai tujuan transfer</li>
                </ol>
            </div>
            <a class="nav-link button4" data-toggle="collapse" data-target="#bni" style="margin-buttom:10px; text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/BNI.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer BNI
                </a>
                <div class="collapse" id="bni">
                <ol style="text-align:left;margin-left:20%">
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunjuk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BNI</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Inofa Course</li>
                    <li>5. Masukkan nomor rekening BNI yang tertera di aplikasi Inofa Course sebagai tujuan transfer</li>
                </ol>
            </div>
            <a class="nav-link button4" data-toggle="collapse" data-target="#bri" style="margin-buttom:10px; text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Logo_BRI.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer BRI
                </a>
                <div class="collapse" id="bri">
                <ol style="text-align:left;margin-left:20%">
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunjuk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BRI</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Inofa Course</li>
                    <li>5. Masukkan nomor rekening BRI yang tertera di aplikasi Inofa Course sebagai tujuan transfer</li>
                </ol>
            </div>
            <li class="nav-item dropdown">
                <p style="text-align:left;margin-left:15%; margin-bottom: 10px;">Minimarket</p>
                <a class="nav-link button4" data-toggle="collapse" data-target="#indo" style="text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Indomaret.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Via Indomaret
                </a>
                <div class="collapse" id="indo">
                <ol style="text-align:left;margin-left:20%">
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening Indomaret</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Inofa Course</li>
                    <li>5. Masukkan nomor rekening Indomaret yang tertera di aplikasi Inofa Course sebagai tujuan transfer</li>
                </ol>
            </div><!-- end title -->
            <li class="nav-item dropdown" style="margin-bottom:5%">
                <p style="text-align:left;margin-left:15%; margin-bottom: 10px;">GO-PAY</p>
                <a class="nav-link button4" data-toggle="collapse" data-target="#go" style="text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Logo%20GoPay%20Vector%20CDR%20dan%20PNG.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Via GO-PAY
                </a>
                <div class="collapse" id="go">
                <ol style="text-align:left;margin-left:20%">
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening GO-PAY</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Inofa Course</li>
                    <li>5. Masukkan nomor rekening GO-PAY yang tertera di aplikasi Inofa Course sebagai tujuan transfer</li>
                </ol>
            </div><!-- end title -->
            </div>
        </div>
    </div>
    @include('base/features_page') 
    @include('base/footer_page')   
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@endsection