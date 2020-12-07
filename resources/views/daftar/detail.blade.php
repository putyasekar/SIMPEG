<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>PENDAFTARAN CALON KARYAWAN</title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="../assets/favicon-light.png" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-2">DETAIL HASIL DAFTAR FORM</h3>
            <!-- <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <!-- <div class="row justify-content-center">
        <div class="col-lg-10 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="row row-beam-md">
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-location-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Location</p>
                <p class="mb-0">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-call-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                <p class="mb-1">+213 908 92034</p>
                <p class="mb-0">+415 123 89245</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-mail-open-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Email</p>
                <p class="mb-1">support@mobster.com</p>
                <p class="mb-0">support@macodeid.com</p>
              </div>
            </div>
          </div>
        </div> -->
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form role="form" action="/daftar/{{$Daftar->id}}" method="get" enctype="multipart/form-data">
              <table class="table table-hover">

               <tr>
                    <td>ID</id>
                    <td>{{ $Daftar->id }}</id>
               </tr>
              
               <tr>
                    <td>Nama Lengkap</id>
                    <td>{{ $Daftar->nama_lengkap }}</id>
               </tr>
               
               <tr>
                    <td>Alamat</id>
                    <td>{{ $Daftar->alamat }}</id>
               </tr>
               <tr>
                    <td>No. Hp</id>
                    <td>{{ $Daftar->no_hp }}</id>
               </tr>
               <tr>
                    <td>Email</id>
                    <td>{{ $Daftar->email }}</id>
               </tr>
               <tr>
                    <td>Tempat Tanggal Lahir</id>
                    <td>{{ $Daftar->ttl }}</id>
               </tr>
               <tr>
                    <td>Agama</id>
                    <td>{{ $Daftar->agama }}</id>
               </tr>
               <tr>
                    <td>Institusi</id>
                    <td>{{ $Daftar->institusi }}</id>
               </tr>
               <tr>
                    <td>Pendidikan Terakhir</id>
                    <td>{{ $Daftar->pendidikan_terakhir }}</id>
               </tr>
               <tr>
                    <td>Nama Pelatihan</id>
                    <td>{{ $Daftar->nama_pelatihan }}</id>
               </tr>
               <tr>
                    <td>Nama Penyelenggara</id>
                    <td>{{ $Daftar->penyelenggara }}</id>
               </tr>
               <tr>
                    <td>Tahun Pelatihan</id>
                    <td>{{ $Daftar->tahun_pelatihan }}</id>
               </tr>
               <tr>
                    <td>Tempat Pelatihan</id>
                    <td>{{ $Daftar->tempat_pelatihan }}</id>
               </tr>
               <tr>
                    <td>Nama Perusahaan</id>
                    <td>{{ $Daftar->nama_perusahaan }}</id>
               </tr>
               <tr>
                    <td>Alamat Kantor</id>
                    <td>{{ $Daftar->alamat_kantor }}</id>
               </tr>
               <tr>
                    <td>Bidang Pekerjaan</id>
                    <td>{{ $Daftar->bidang_pekerjaan }}</id>
               </tr>
               <tr>
                    <td>Jabatan</id>
                    <td>{{ $Daftar->jabatan }}</id>
               </tr>
               <tr>
                    <td>Tahun Mulai-Akhir</id>
                    <td>{{ $Daftar->tahun_mulai_akhir }}</id>
               </tr>
               <tr>
                    <td>Image</td>
                    <td><img src="/images/{{ $Daftar->image }}" style="width: 150px; height: 120px"></td>
               </tr>
              
              </table>
              <div class="col-lg-6">
        <a class="btn btn-dark rounded-pill" href="/daftar">Back</a>
      </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
</div>
