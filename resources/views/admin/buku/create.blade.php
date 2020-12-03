@extends('admin.master')

@section('main-content')
    <!-- Page Heading -->
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-4 text-gray-800">Tambah Data Buku</h1>
      </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-12">

            <div class="card shadow mb-4">

                <div class="card-body">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label>ISBN</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group col-md-5">
                        <label>Judul</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Penerbit</label>
                          <div class="input-group mb-3">
                            <select id="inputState" class="form-control">
                              <option selected>-- pilih penerbit --</option>
                              <option>... </option>
                            </select>
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">tambah</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label>Jenis</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>-- pilih jenis buku --</option>
                            <option>Buku Paket</option>
                            <option>Novel</option>
                            <option>Komik</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="form-group">
                          <label>Jumlah</label>
                          <input type="number" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary" name="button">Generate QR CODE</button><br>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/220px-QR_code_for_mobile_English_Wikipedia.svg.png" alt=""><br>
                    <button type="button" class="btn btn-primary" name="button">Save</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
  });
</script>
@endsection
