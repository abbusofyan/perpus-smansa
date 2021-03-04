@extends('member.master')



@section('main-content')

@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
  </div>
@endif
<div class="row">
  <div class="col">
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-lg-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <form class="" action="index.html" method="post">
          <div class="row">
            <div class="col">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NISN</label>
                    <input type="text" value="{{$user->nis}}" class="form-control" name="password">
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama</label>
                    <input type="text" value="{{$user->name}}" class="form-control" name="password">
                  </div>
                </div>
               </div>
               <div class="row">
                 <div class="col-lg-6 col-12">
                   <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Username</label>
                     <input type="text" value="{{$user->username}}" class="form-control" name="password">
                   </div>
                 </div>
                 <div class="col-lg-6 col-12">
                   <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Password</label>
                     <input type="password" value="{{$user->password}}" class="form-control" name="password">
                   </div>
                 </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card shadow mb-4">
      <div class="card-body">
        <form action="{{route('member.profile.update_profile', $user->member->id)}}" method="post">
          @csrf
          <div class="row">
            <div class="col">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <input type="text" value="{{$user->member->major}}" class="form-control" name="major">
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kelas</label>
                    <input type="text" value="{{$user->member->class}}" class="form-control" name="class">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No HP</label>
                    <input type="text" value="{{$user->member->phone_number}}" class="form-control" name="phone_number">
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" value="{{$user->member->email}}" class="form-control" name="email">
                  </div>
                </div>
              </div>

               <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Alamat</label>
                 <input type="text" value="{{$user->member->address}}" class="form-control" name="address">
               </div>
               <div class="row">
                 <div class="col">
                   <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Tahun Masuk</label>
                     <input type="text" class="form-control" name="password">
                   </div>
                 </div>
                 <div class="col">
                   <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Tahun Lulus</label>
                     <input type="password" class="form-control" name="password">
                   </div>
                 </div>
               </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="button">Update Profile</button>
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
