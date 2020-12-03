@extends('admin.master')

@section('main-content')
    <!-- Page Heading -->
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-4 text-gray-800">Data Pengembalian</h1>
      </div>
      <div class="col float-right">
        <a href="{{route('admin.pengembalian.create')}}" class="btn btn-primary float-right">Tambah</a>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Sisa Durasi</th>
                    <th>Denda</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
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
