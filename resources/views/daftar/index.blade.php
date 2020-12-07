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
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.html">Homepage 1</a>
            <a class="dropdown-item" href="index-2.html">Homepage 2</a>
          </div>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
       -->
        <!-- <li class="nav-item active">
          <a class="nav-link" href="contact.html">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="updates.html">Table</a>
        </li>
      </ul> -->
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-dark rounded-pill">Isi Form Berikut</button>
      </div>
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-2">FORMULIR PENDAFTARAN CALON KARYAWAN</h3>
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

        <form role="form" action="/daftar" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="box-body">

                      {{-- get session flash --}}
                        @if(Session::has('message'))
                        <h4><strong>{{session::get('message')}}</strong></h4>
                      @endif

                      {{-- get validation --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                        </ul>
                        </div>
                      @endif
        
        <div class="col-md-18 col-lg-18 my-18 wow fadeInUp">
          <div class="card-page">
           <!-- start: RESPONSIVE TABLE PANEL -->
           <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <i class="fa fa-file-text"></i>
                                Data yang harus Anda lengkapi
                            </div> -->
            <div class="panel-body">                                
            <form role="form" enctype="multipart/form-data" id="form-job-hire" action="/index.php?r=Site/ApplyJobHire" method="post">
            <div style="display:none"><input type="hidden" value="1b571c446a731bea9c620a7433e717960b7b2124" name="YII_CSRF_TOKEN" /></div>                                <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                    <label class="control-label">
                    Nama Lengkap<span class="symbol required"></span>
                    </label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="" placeholder="Nama Lengkap" maxlength="100" minlength="2" style="text-transform:uppercase" required="required">
                </div>
                <div class="col-lg-6">
                    <label class="control-label">
                    Email <span class="symbol required"></span>
                    </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="EMAIL" maxlength="100" minlength="2" required="required">
                </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-lg-6">
                    <label class="control-label">
                    Tempat & Tanggal Lahir <span class="symbol required"></span>
                    </label>
                    <input type="text" class="form-control" id="ttl" name="ttl" value="" placeholder="TTL" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                </div>
                <div class="col-md-6">
                    <label class="control-label">
                    Agama <span class="symbol required"></span>
                    </label>
                    <input type="text" class="form-control" id="agama" name="agama" value="" placeholder="AGAMA" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="row">
                    <div class="col-lg-6">
                    <label class="control-label">
                    No. Handphone <span class="symbol required"></span>
                    </label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="" placeholder="+62000000000" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                </div>
                <div class="col-lg-6">
                    <label class="control-label">
                    Alamat <span class="symbol required"></span>
                    </label>
                    <textarea rows="3" class="form-control" id="alamat" name="alamat" placeholder="Alamat" style="text-transform:uppercase" required="required"></textarea>
                 </div>
                </div>
                </div>
               <div class="form-group">
                    <div class="row">
                    <div class="col-lg-6">
                    <label class="control-label">
                    Pendidikan Terakhir
                    </label>
                     <select class="form-control search-select" name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                     <option value="">-Pilih-</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                     </select>                                                                               
                </div>
                    <div class="col-lg-6">
                    <label class="control-label">
                    Nama Institusi
                    </label>
                    <input type="text" class="form-control" id="institusi" name="institusi" value="" placeholder="cth: SMK Islamic Development Network">
                    </div>





                    </div>
                    </div>
                    <div class="alert alert-primary" id="callout-type-b-i-elems"> 
                            <h4>Kursus/Seminar/Pelatihan</h4>
                            <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Nama Pelatihan <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="nama_pelatihan" name="nama_pelatihan" value="" placeholder="Nama Pelatihan" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Penyelenggara <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="" placeholder="Penyelenggara" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                        </div>
                              
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Tahun Pelatihan <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="tahun_pelatihan" name="tahun_pelatihan" value="" placeholder="Tahun Pelatihan" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Tempat Pelatihan <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="tempat_pelatihan" name="tempat_pelatihan" value="" placeholder="Tempat Pelatihan" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                        </div>
                        </div>


                        </div>
                        </div>
                    </div>
                    <div class="alert alert-info" id="callout-type-b-i-elems"> 
                            <h4>Riwayat Pekerjaan</h4>
                            <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Nama Perusahaan <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="" placeholder="Nama Instansi" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Alamat Kantor <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor" value="" placeholder="Alamat Instansi" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                        </div>
                              
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Bidang Pekerjaan <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="bidang_pekerjaan" name="bidang_pekerjaan" value="" placeholder="Bidang Pekerjaan" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">
                                                Jabatan <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="" placeholder="Jabatan" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label class="control-label">
                                                Tahun Mulai-Akhir <span class="symbol required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="tahun_mulai_akhir" name="tahun_mulai_akhir" value="" placeholder="Tahun Mulai-Akhir" maxlength="250" minlength="2" style="text-transform:uppercase" required="required">
                                            </div>
                        </div>
                        
                                <!-- FORM PENGALAMAN -->
                                                                <!-- <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="control-label">
                                            Nama Instansi <span class="symbol required"></span>
                                            </label>
                                            <input type="text" class="form-control" id="pengalaman_0_nama" name="pengalaman[0][nama]" value="" placeholder="cth. PT xyz" required="required" >
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label">
                                            Posisi <span class="symbol required"></span>
                                            </label>
                                            <input type="text" class="form-control" id="pengalaman_0_posisi" name="pengalaman[0][posisi]" value="" placeholder="cth. Staff HRD" required="required" >
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label">
                                            Lama Bekerja (dalam tahun) <span class="symbol required"></span>
                                            </label>
                                            <input type="text" class="form-control" id="pengalaman_0_experience" name="pengalaman[0][experience]" value="" placeholder="cth. 2 Tahun" maxlength="13" minlength="4" required="required" style="text-align:right;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="control-label">
                                            Deskripsi Pekerjaan <span class="symbol required"></span>
                                            </label>
                                            <textarea class="form-control" id="pengalaman_0_job_desk" name="pengalaman[0][job_desk]" placeholder="Deskripsi mengenai pekerjaan anda" required="required" rows="3"></textarea>
                                        </div>
                                    </div>                                      
                                </div>                                               
                                                                TAMBAH FORM PENGALAMAN                                
                                <div class="form-group" id="div_pengalaman" style="display:none; margin-top: 15px; border: 1px solid #ababab; border-radius: 5px; background-color: #f5f5f5; padding: 15px;">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left:30px; padding-right:30px;">
                                            <div class="form-group">
                                                <label class="control-label" style="float: right; cursor: pointer;" id="delPengalaman">
                                                    <i class="fa fa-times-circle"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align:left;">
                                        <div class="col-lg-4">
                                            <label class="control-label">
                                            Nama Instansi
                                            </label>
                                            <input type="text" class="form-control list-pengalaman" id="pengalaman_hidden[]" name="pengalaman[]" value="" placeholder="cth. PT xyz">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label">
                                            Posisi
                                            </label>
                                            <input type="text" class="form-control list-pengalamanposisi" id="posisi_hidden[]" name="posisi[]" value="" placeholder="cth. Staff HRD">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label">
                                            Lama Bekerja (dalam tahun)
                                            </label>
                                            <input type="text" class="form-control list-experience" id="experience_hidden[]" name="experience[]" value="" placeholder="cth. 2 Tahun" maxlength="13" minlength="4" style="text-align:right;">
                                        </div>
                                    </div>
                                    <div class="row" style="text-align:left;">
                                        <div class="col-lg-12">
                                            <label class="control-label">
                                            Deskripsi Pekerjaan
                                            </label>
                                            <textarea class="form-control list-jobdesk" id="job_desk_hidden[]" name="job_desk[]" placeholder="Deskripsi mengenai pekerjaan anda" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>                                 -->
                                <!-- END TAMBAH FORM PENGALAMAN -->
                                <!-- <div class="form-group">
                                    <div class="row">                                        
                                        <div class="col-lg-12" style="text-align:right;">
                                            <label class="control-label btn btn-success" style="margin-top:15px text-align:right;" id="btnaddPengalaman">
                                                <i class="fa fa-plus-circle"></i> Pengalaman Kerja
                                            </label>
                                        </div>
                                    </div>
                                </div> -->


</div>
</div>
                                
                        <div class="form-group">
                         <label>Image</label>
                        <input type="file" name="image">
                        </div>

                                        <!-- <div class="col-lg-6">
                                            <label class="control-label">
                                            Upload Resume <i>(.pdf) Maks. 2Mb</i> <span class="symbol required"></span>
                                            <br>
                                                                                                                                    </label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-primary btn-file" style="border-radius:4px !important"><span class="fileupload-new"><i class="fa fa-file-pdf-o"></i> Select file</span><span class="fileupload-exists"><i class="fa fa-file-pdf-o"></i> Change</span>
                                                    <input type="file" name='cv' id="cv" accept="application/pdf" onchange="resumeValid(this);">
                                                    </span>
                                                </div>
                                            </div>  -->
                                            <div class="row justify-content-center align-items-center text-center ">
          <!-- <div class="col-lg-6">
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </div> -->
                      <div class="col-lg-6">
        <button type="submit"class="btn btn-dark rounded-pill">Submit</button>
      </div>
                    </form>
                </div>
                </div>

            <!--TABLE-->
            <div class="col-md-18 col-lg-18 my-18 wow fadeInUp">
          <div class="card-page">
           <!-- start: RESPONSIVE TABLE PANEL -->
           <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <i class="fa fa-file-text"></i>
                                Data yang harus Anda lengkapi
                            </div> -->
            <div class="panel-body">                                
            <form role="form" enctype="multipart/form-data" id="form-job-hire" action="/index.php?r=Site/ApplyJobHire" method="post">
            <div style="display:none"><input type="hidden" value="1b571c446a731bea9c620a7433e717960b7b2124" name="YII_CSRF_TOKEN" /></div>                                <div class="form-group">
                
                </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <h4>Table</h4>
                <tr>
                  <th>ID</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>No. Hp</th>
                  <th>Email</th>
                  <th>TTL</th>
                  <th>Agama</th>
                  <th>Institusi</th>
                  <th>Pendidikan Terakhir</th>
                </tr>
                @foreach($Daftar as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <!-- <td><img src = "/images/{{ $item->image }}" style="width: 70px; height: 50px"></td> -->
                      <td>{{ $item->nama_lengkap }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>{{ $item->no_hp }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->ttl }}</td>
                      <td>{{ $item->agama }}</td>
                      <td>{{ $item->institusi }}</td>
                      <td>{{ $item->pendidikan_terakhir }}</td>


                      <!-- 02 & 03 -->

                <tr>
                  <th>Nama Pelatihan</th>
                  <th>Nama Penyelenggara</th>
                  <th>Tahun Pelatihan</th>
                  <th>Tempat Pelatihan</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat Kantor</th>
                  <th>Bidang Pekerjaan</th>
                  <th>Jabatan</th>
                  <th>Tahun Mulai/Akhir</th>
                </tr>

                <tr>
                      <td>{{ $item->nama_pelatihan }}</td>
                      <td>{{ $item->penyelenggara }}</td>
                      <td>{{ $item->tahun_pelatihan }}</td>
                      <td>{{ $item->tempat_pelatihan }}</td>
                      <td>{{ $item->nama_perusahaan }}</td>
                      <td>{{ $item->alamat_kantor }}</td>
                      <td>{{ $item->bidang_pekerjaan }}</td>
                      <td>{{ $item->jabatan }}</td>
                      <td>{{ $item->tahun_mulai_akhir }}</td>
                    </tr>

                    <tr>
                    <th>Foto</th>
                    <tr>

                    <tr>
                    <td><img src = "/images/{{ $item->image }}" style="width: 70px; height: 50px"></td>
                    <td>
                      <a class="btn btn-success rounded-pill" href="/daftar/{{$item->id}}/edit">Edit</a>
                      </td>
                      <td>
                      <a class="btn btn-danger rounded-pill" href="/daftar/{{$item->id}}/delete">Delete</a>
                        <td>
                          <td>
                          <a class="btn btn-warning rounded-pill" href="/daftar/{{$item->id}}">Detail</a>
                            <td>
                           
                      <tr>
                  @endforeach
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>
</div>


</div> <!-- .bg-light -->


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>