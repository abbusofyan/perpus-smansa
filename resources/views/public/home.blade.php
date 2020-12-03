@extends('public.master')

@section('content')
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

              <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Pancasila 2</td>
          <td>Erlangga</td>
          <td>Buku Paket</td>
          <td>100</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Pancasila 3</td>
          <td>Erlangga</td>
          <td>Buku Paket</td>
          <td>100</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Bahasa Indonesia 1</td>
          <td>Yudhistira</td>
          <td>Buku Paket</td>
          <td>90</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Bahasa Indonesia 2</td>
          <td>Yudhistira</td>
          <td>Buku Paket</td>
          <td>90</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Bahasa Indonesia 3</td>
          <td>Yudhistira</td>
          <td>Buku Paket</td>
          <td>90</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>Kimia 1</td>
          <td>Erlangga</td>
          <td>Buku Paket</td>
          <td>100</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>Kimia 2</td>
          <td>Erlangga</td>
          <td>Buku Paket</td>
          <td>100</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>Kimia 3</td>
          <td>Erlangga</td>
          <td>Buku Paket</td>
          <td>100</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>Biologi 1</td>
          <td>Erlangga</td>
          <td>Buku Paket</td>
          <td>100</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>Laskar Pelangi</td>
          <td>Bentang Pustaka</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>Dilan</td>
          <td>Pastel Books</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>14</td>
          <td>Milea</td>
          <td>Pastel Books</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>14</td>
          <td>Terusir</td>
          <td>Gema Insani</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>15</td>
          <td>Sepatu Dahlan</td>
          <td>Noura Books</td>
          <td>Buku Cerita</td>
          <td>15</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>16</td>
          <td>The Lord of The Rings</td>
          <td>Allen & Unwin</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>17</td>
          <td>Invisible Man</td>
          <td>Random House</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>18</td>
          <td>Perahu Kertas</td>
          <td>Bentang Pustaka</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>19</td>
          <td>Sabtu Bersama Bapak</td>
          <td>Gagas Media</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
        <tr>
          <td>20</td>
          <td>Tenggelamnya Kapal van der wijck</td>
          <td>Bulan Bintang</td>
          <td>Buku Cerita</td>
          <td>10</td>
          <td>

            <a href="{{route('detail')}}" class="btn btn-primary btn-sm">Detail</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
