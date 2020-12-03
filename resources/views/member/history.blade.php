@extends('member.master')



@section('main-content')

<div class="row">
  <div class="col">
    <h1 class="h3 mb-4 text-gray-800">History Peminjaman</h1>
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
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Sisa Durasi Peminjaman</th>
                <th scope="col">ACtion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Pancasila 1</td>
                <td>20-05-2020</td>
                <td>25-05-2020</td>
                <td>4 Hari</td>
                <td>
                  <button type="button" class="btn btn-success btn-sm" name="button">Perpanjang</button>
                </td>
              </tr>
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
