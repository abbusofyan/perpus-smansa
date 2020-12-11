@extends('admin.master')

@section('main-content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Page Heading -->
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-4 text-gray-800">Tambah Peminjaman</h1>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow mb-4">
          <div class="card-body">
            <form>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="nis" autofocus>
                </div>
                <div class="col-sm-1">
                  <button type="button" id="btn-cari" class="btn btn-primary" name="button">cari</button>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Jurusan / Kelas</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-8">
                      <input type="text" class="form-control" id="jurusan">
                    </div>
                    <div class="col-4">
                      <input type="text" class="form-control" id="kelas">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card shadow mb-4">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
            <button type="button" class="btn btn-primary float-right" name="button">Save</button>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('js')
<script type="text/javascript">
  $(document).ready( function () {
    $('#profile').show();

    $('#btn-cari').click(function() {
      var nis = $("#nis").val();
      getDataByNIS(nis);
    })
  });

  function getDataByNIS(nis) {
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
         type:'POST',
         url:'{{route('get_data_by_nis')}}',
         data: {_token: CSRF_TOKEN, nis:nis},
         success:function(data) {
           if (data.length > 0) {
             console.log(data);
             $('#jurusan').val('')
           } else {
             alert('data not found')
           }
         }
      });
  }
</script>
@endsection
