@include('base.header')

<div class="content-wrapper">
  <section class="content-header">
  <h1>Edit</h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="/Daftar" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="box-body">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" name="id" value="{{ $Daftar->id }}" readonly="true">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="{{ $Daftar->name }}">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $Daftar->alamat }}">
                </div>
                <div class="form-group">
                    <label>No. Hp</label>
                    <input type="text" class="form-control" name="no_hp" value="{{ $Daftar->no_hp }}">
                </div>
                <div class="form-group">
                         <label>Image</label>
                        <input type="file" name="image">
                        </div>
            <!-- /.box-body -->
        
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-warning" href="/Daftar">Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

@include('base.footer')