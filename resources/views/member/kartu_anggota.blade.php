@extends('member.master')



@section('main-content')

<div class="row">
  <div class="col">
    <h1 class="h3 mb-4 text-gray-800">Kartu Anggota</h1>
  </div>
</div>

<div class="row justify-content-center mb-5">
  <div class="col-md-8 col-lg-4 col-sm-8 my-auto">
    <div class="card-header bg-primary text-center">
      <b class="text-white">Kartu Anggota Perpustakaan SMAN 1 Depok</b>
    </div>
    <div class="card text-center">
      <h5 class="mt-3">Nama : {{$user->name}}</h5>
      <h5>NISN : {{$user->nis}}</h5>
      <h5>Kelas : {{$user->member->major}}-{{$user->member->class}}</h5>
      <hr>
      <div class="mt-4 d-flex justify-content-center mb-4" id="qrcode"></div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
  });

  var qrcode = new QRCode("qrcode", {
    text: "http://jindo.dev.naver.com/collie",
    width: 150,
    height: 150,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
  qrcode.makeCode('{{$user->qr_code}}');

</script>
@endsection
