@extends('layouts.tempadmin')

@section('content')

<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users</h4>
            <div>
              <!-- center modal -->
              <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                data-bs-target=".bs-example-modal-center">
                <i class="bx bx-smile font-size-16 align-middle me-2"></i>Tambah User</button>
              <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ url('/postsUser') }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="mb-3 column">
                          <label for="username" class="col-md-2 col-form-label">Username</label>
                          <div class="col-md-12">
                            <input class="form-control" type="text" value="" id="name" name="name" />
                          </div>
                        </div>

                        <div class="mb-3 column">
                          <label for="email" class="col-md-2 col-form-label">email</label>
                          <div class="col-md-12">
                            <input class="form-control" type="email" value="" id="email" name="email" />
                          </div>
                        </div>

                        <div class="mb-3 column">
                          <label class="form-label">Password</label>
                          <div class="input-group auth-pass-inputgroup">
                            <input type="password" class="form-control" placeholder="Enter password"
                              aria-label="Password" name="password">
                            <button class="btn btn-light " type="button" id="password-addon"><i
                                class="mdi mdi-eye-outline"></i></button>
                          </div>
                        </div>

                        <div class="mb-3 column">
                          <label class="col-md-12 col-form-label">Upload Foto</label>
                          <div class="col-md-12">
                            <div>
                              <input class="form-control form-control-lg" id="formFileLg" type="file" name="foto" />
                            </div>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-md-2 col-form-label">Role</label>
                          <div class="col-md-12">
                            <select class="form-select" id="role" name="role">
                              <option>Admin</option>
                              <option>Staff</option>
                            </select>
                          </div>
                        </div>

                        <div class="row-12">
                          <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                          <button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button>
                        </div>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

          </div>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Manajemen User</h4>
            <p class="card-title-desc">Semua User yang terdaftar muncul disini
            </p>

            <div class="table-responsive">
              <table id="datatable" class="table table-bordered nowrap w-100">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($user as $u)
                  <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td><img src="{{ url('foto/', $u->foto) }}" alt="" width="100px"></td>
                    <td>{{ $u->role }}</td>
                    <td>
                      <div class="row-12">
                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
                        <form action="/userDelete/{{ $u->id }}" method="POST">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger waves-effect waves-light">Hapus</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- end col -->
    </div>

    <!-- end row -->

    <!-- end row -->

    <!-- end row -->
  </div>
  <!-- container-fluid -->
</div>

@endsection