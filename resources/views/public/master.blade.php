
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>PERPUS SMAN 1 KOTA DEPOK</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
<link href="{{asset('css/app.css')}}" rel="stylesheet">

    <style>
      .jumbotron {
        background-image: url("img/library.jpg");
        background-size: fill;
        color: white;
      }

      body {
        padding-top: 3.0rem;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <nav class="navbar navbar-expand fixed-top navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::segment(1) === '' ? 'active' : null }}">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link btn btn-success" href="{{route('login')}}">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          Login</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="text-center">Selamat Datang Di Peprustakaan Digital SMAN 1 Kota Depok</h1><br><br>
      <h4><i>"Aku rela di penjara asalkan bersama buku, karena dengan buku aku bebas"</i></h4>
      <h4><i>- Mohammad Hatta</i></h4>
    </div>
  </div>

  <div class="container">
    <div class="card shadow mb-4">

        <div class="card-body">
          @yield('content')
        </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
  });
</script>
</body>
</html>
