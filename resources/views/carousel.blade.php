@extends('layouts.tempadmin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Carousel</h4>
                        <div>
                            <!-- center modal -->
                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                                <i class="bx bx-smile font-size-16 align-middle me-2"></i>Tambah Carousel</button>
                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Carousel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <form action="{{ url('/postsCarousel') }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-body">

                                                <div class="mb-3 column">
                                                    <label class="col-md-12 col-form-label">Upload Foto</label>
                                                    <div class="col-md-12">
                                                        <div>
                                                            <input class="form-control form-control-lg" id="formFileLg"
                                                                type="file" name="carousel" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 column">
                                                    <label for="judul" class="col-md-2 col-form-label">Judul</label>
                                                    <div class="col-md-12">
                                                        <input class="form-control" type="text" value="" id="judul"
                                                            name="judul" />
                                                    </div>
                                                </div>

                                                <div class="mb-3 column">
                                                    <label for="subjudul"
                                                        class="col-md-2 col-form-label">Subjudul</label>
                                                    <div class="col-md-12">
                                                        <input class="form-control" type="text" value="" id="subjudul"
                                                            name="subjudul" />
                                                    </div>
                                                </div>

                                                <div class="row-12">
                                                    <button type="submit"
                                                        class="btn btn-success waves-effect waves-light">Simpan</button>
                                                    <button type="button"
                                                        class="btn btn-danger waves-effect waves-light">Cancel</button>
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

                        <h4 class="card-title">Manajemen Carousel</h4>
                        <p class="card-title-desc">Semua Carousel yang terdaftar muncul disini
                        </p>

                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($carousel as $c)
                                    <tr>
                                        <td><img src="{{ url('carousel/', $c->carousel) }}" alt="" width="100px"></td>
                                        <td>{{ $c->judul }}</td>
                                        <td>{{ $c->subjudul }}</td>
                                        <td>
                                            <div class="row-12">
                                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
                                                <form action="/carouselDelete/{{ $c->id }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit"
                                                        class="btn btn-danger waves-effect waves-light">Hapus</button>
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