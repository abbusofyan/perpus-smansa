@extends('admin.master')

@section('css')
  <style media="screen">
  /* #qrcode {
    width:160px;
    height:160px;
    margin-top:15px;
  } */
  </style>
@endsection

@section('main-content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
    </div>
  @endif
<!-- Page Heading -->
<div class="row">
  <div class="col">
    <h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>
  </div>
  <div class="col float-right">
    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#add_member">Tambah</button>
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
                <th>NIS</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach ($users as $user)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$user->nis}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->member != null ? $user->member->major : ''}}</td>
                  <td>{{$user->member != null ? $user->member->class : ''}}</td>
                  <td>
                    <a href="{{route('admin.anggota.detail', $user->id)}}" class="btn btn-primary btn-sm" name="button">Detail</a>
                    <button type="button" class="btn btn-danger btn-sm" name="button">Hapus</button>
                  </td>
                </tr>
                @php $no++; @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{route('admin.anggota.store')}}" method="post">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Role Member</label>
            <select class="form-control" id="user_role" name="role">
              <option>-- pilih user role --</option>
              <option value="siswa">Siswa</option>
              <option value="guru">Guru</option>
            </select>
          </div>
          <div class="field_siswa">
            <div class="form-group">
              <label>NIS</label>
              <input type="text" name="nis" class="form-control" id="nisn">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="name" class="form-control" id="nama">
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select class="form-control" name="major" id="jurusan">
                    <option value="">-- pilih jurusan --</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="class" id="kelas">
                    <option value="">-- pilih kelas --</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary" id="btn-generate" name="button">Generate QrCode</button>
            <div class="rqcode"><br>
              <input id="qrstring" name="qrcode" type="hidden"/><br />
              <div id="qrcode"></div>
            </div>
          </div>
          <div class="field_guru">
            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
    $('.field_siswa').hide();
    $('.field_guru').hide();
    $("#user_role").change(function() {
      var role = $('#user_role').val();
      if (role == 'siswa') {
        $('.field_siswa').show();
        $('.field_guru').hide();
      } else if (role == 'guru') {
        $('.field_siswa').hide();
        $('.field_guru').show();
      } else {
        $('.field_siswa').hide();
        $('.field_guru').hide();
      }
    })

    var qrcode = new QRCode("qrcode");

    function makeCode () {
        var elText = document.getElementById("text");

        if (!elText.value) {
            alert("Input a text");
            elText.focus();
            return;
        }

        qrcode.makeCode(elText.value);
    }

    $('#btn-generate').click(function() {
      var nisn = $('#nisn').val();
      var nama = $('#nama').val();
      var jurusan = $('#jurusan').val();
      var kelas = $('#kelas').val();
      if (nisn == '' || nama == '' || jurusan == '' || kelas == '') {
        alert('lengkapi data terlebih dahulu');
      } else {
        var string = nisn+nama;
        qrcode.makeCode(string);
        $('#qrstring').val(string);
      }
    })

  });
</script>
@endsection
