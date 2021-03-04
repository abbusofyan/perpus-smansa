@extends('admin.master')

@section('css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

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
                  <select class="js-example-basic-single" style="width: 70%" name="state">
                    <option value="">-- piih member --</option>
                    @foreach ($users as $user)
                      <option value="{{$user->id}}">{{$user->nis.' - '.$user->name}}</option>
                    @endforeach
                  </select>
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

        <div class="card shadow mb-4">
          <div class="card-body">
            <form>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Buku</label>
                  <select class="js-example-basic-single" style="width: 70%" name="state">
                    <option value="">-- piih buku --</option>
                    @foreach ($books as $book)
                      <option value="{{$book->id}}">{{$book->id.' - '.$book->title}}</option>
                    @endforeach
                  </select>
                <div class="col-sm-1">
                  <button type="button" id="btn-cari" class="btn btn-primary" name="button">cari</button>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Qty / Durasi Peminjaman</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-3">
                      <input type="text" value="1" class="form-control" id="jurusan">
                    </div>
                    <div class="col-9">
                      <input type="text" value="7 hari" class="form-control" id="kelas">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Pengembalian</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jurusan">
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
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2({
      width: 'resolve',
      theme: "classic"
    });
  });
  </script>
@endsection
