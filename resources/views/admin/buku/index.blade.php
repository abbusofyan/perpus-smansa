@extends('admin.master')

@section('main-content')
    <!-- Page Heading -->
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-4 text-gray-800">Data Buku</h1>
      </div>
      <div class="col float-right">
        <a href="{{route('admin.buku.create')}}" class="btn btn-primary float-right">Tambah</a>
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
                    <th>Penerbit</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pancasila 1</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                        <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                        <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Pancasila 2</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Pancasila 3</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Bahasa Indonesia 1</td>
                    <td>Yudhistira</td>
                    <td>Buku Paket</td>
                    <td>90</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Bahasa Indonesia 2</td>
                    <td>Yudhistira</td>
                    <td>Buku Paket</td>
                    <td>90</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Bahasa Indonesia 3</td>
                    <td>Yudhistira</td>
                    <td>Buku Paket</td>
                    <td>90</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Kimia 1</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Kimia 2</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Kimia 3</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Biologi 1</td>
                    <td>Erlangga</td>
                    <td>Buku Paket</td>
                    <td>100</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Laskar Pelangi</td>
                    <td>Bentang Pustaka</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Dilan</td>
                    <td>Pastel Books</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Milea</td>
                    <td>Pastel Books</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Terusir</td>
                    <td>Gema Insani</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Sepatu Dahlan</td>
                    <td>Noura Books</td>
                    <td>Buku Cerita</td>
                    <td>15</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>The Lord of The Rings</td>
                    <td>Allen & Unwin</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Invisible Man</td>
                    <td>Random House</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Perahu Kertas</td>
                    <td>Bentang Pustaka</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Sabtu Bersama Bapak</td>
                    <td>Gagas Media</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Tenggelamnya Kapal van der wijck</td>
                    <td>Bulan Bintang</td>
                    <td>Buku Cerita</td>
                    <td>10</td>
                    <td>

                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-success btn-sm">Detail</a>
                      <a href="{{route('detail')}}" data-toggle="modal" data-target="#modal_detail" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Buku A</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                <tr>
                  <td>Judul</td>
                  <td>Pancasila 1</td>
                </tr>
                <tr>
                  <td>Jenis</td>
                  <td>Buku Paket</td>
                </tr>
                <tr>
                  <td>Penerbit</td>
                  <td>Airlangga</td>
                </tr>
                <tr>
                  <td>Jumlah</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>QR CODE</td>
                  <td>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/220px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Print QR Code</button>
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
