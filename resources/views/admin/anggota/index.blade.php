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
                <th>NISN</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1112350245610001</td>
                <td>Adrian</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>1112350245610002</td>
                <td>Vania</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>1112350245610003</td>
                <td>Viona</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>1112350245610004</td>
                <td>Lyodra</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>1112350245610005</td>
                <td>Lorenzo</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>1112350245610006</td>
                <td>Krisna</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>1112350245610007</td>
                <td>Syifa</td>
                <td>IPA</td>
                <td>10</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>1112350245610201</td>
                <td>Keisya</td>
                <td>IPA</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>1112350245610202</td>
                <td>Riska</td>
                <td>IPA</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>1112350245610203</td>
                <td>Rian</td>
                <td>IPA</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>11</td>
                <td>1112350245610204</td>
                <td>Yoga</td>
                <td>IPS</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>12</td>
                <td>1112350245610205</td>
                <td>Abdul</td>
                <td>IPS</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>13</td>
                <td>1112350245610206</td>
                <td>Nico</td>
                <td>IPS</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>14</td>
                <td>1112350245610207</td>
                <td>Irene</td>
                <td>IPS</td>
                <td>11</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>15</td>
                <td>1112350245610301</td>
                <td>Aziz</td>
                <td>IPS</td>
                <td>12</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>16</td>
                <td>1112350245610302</td>
                <td>Aisyah</td>
                <td>IPS</td>
                <td>12</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>17</td>
                <td>1112350245610303</td>
                <td>Siti</td>
                <td>IPS</td>
                <td>12</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>18</td>
                <td>1112350245610304</td>
                <td>Herald</td>
                <td>IPS</td>
                <td>12</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>19</td>
                <td>1112350245610305</td>
                <td>Joko</td>
                <td>IPS</td>
                <td>12</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>20</td>
                <td>1112350245610306</td>
                <td>Silvia</td>
                <td>IPS</td>
                <td>12</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
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
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Role Member</label>
            <select class="form-control" id="user_role">
              <option>-- pilih user role --</option>
              <option value="siswa">Siswa</option>
              <option value="guru">Guru</option>
            </select>
          </div>
          <div class="field_siswa">
            <div class="form-group">
              <label>NISN</label>
              <input type="text" class="form-control" id="nisn">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select class="form-control" id="jurusan">
                    <option value="">-- pilih jurusan --</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" id="kelas">
                    <option value="">-- pilih kelas --</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary" id="btn-generate" name="button">Generate QrCode</button>
            <div class="rqcode">
              <input id="qrstring" type="text"/><br />
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
          <button type="button" class="btn btn-primary">Save</button>
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
