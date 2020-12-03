@extends('admin.master')

@section('main-content')
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
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Jurusan / Kelas</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-8">
                      <input type="text" class="form-control" id="inputPassword">
                    </div>
                    <div class="col-4">
                      <input type="text" class="form-control" id="inputPassword">
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
  });
</script>
@endsection
