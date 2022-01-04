<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets_LP/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="{{ asset('assets_LP/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">SIPAK RT</a><button
                data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cara">Tata Cara</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#daftar">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#hubungi">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white d-flex masthead"
        style="background-image:url('{{ asset('assets_LP/img/header2.jpg') }}');">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>Sistem informasi pengaduan tingkat rt</strong></h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Sampaikan jika terjadi masalah di lingkungan dan Sosial, disini.</p><a
                    class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="{{ route('login') }}">Lapor
                    pak!</a>
            </div>
        </div>
    </header>
    <section id="cara">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tata Cara Pengaduan</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons"
                            data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3">Tulis Laporan</h3>
                        <p class="text-muted mb-0">Tulis laporan pengaduan anda dengan benar dan jelas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons"
                            data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Proses Audit</h3>
                        <p class="text-muted mb-0">Tunggu laporan anda di audit oleh ketua RT.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons"
                            data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Tindak Lanjut</h3>
                        <p class="text-muted mb-0">Laporan anda akan ditindak lanjut oleh ketua RT.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons"
                            data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3">Selesai</h3>
                        <p class="text-muted mb-0">Laporan selesai di tindak lanjut oleh ketua RT.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary" style="height: 500px;" id="daftar">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">Sudah Memiliki Akses Masuk?</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Jika anda belum memiliki akses masuk, silahkan melakukan pendaftaran
                        terlebih dahulu dengan klik Tombol dibawah ini.</p><a
                        class="btn btn-light btn-xl js-scroll-trigger" role="button"
                        href="{{ route('register') }}">Daftar
                        Sekarang!</a>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="p-0"></section>
    <section id="hubungi">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading">Hubungi Kami!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Jika ada kendala pada sistem, Silahkan langsung hubungi kami pada kontak
                        di bawah.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ml-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact"
                        data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>0823-3183-3848</p>
                </div>
                <div class="col-lg-4 text-center mr-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact"
                        data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="mailto:your-email@your-domain.com">admin@sipakrt.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets_LP/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_LP/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_LP/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets_LP/js/creative.js') }}"></script>
</body>

</html>
