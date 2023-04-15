@extends('layouts.tempadmin')

@section('content')

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0 font-size-18">Kategori</h4>
						<div>
							<!-- center modal -->
							<button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
								data-bs-target=".bs-example-modal-center">
								<i class="bx bx-smile font-size-16 align-middle me-2"></i>Tambah Kategori</button>
							<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Tambah Kategori</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<form action="{{ url('/postsKategori') }}" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
											<div class="modal-body">
												<div class="mb-3 column">
													<label for="kategori" class="col-md-2 col-form-label">Kategori</label>
													<div class="col-md-12">
														<input class="form-control" type="text" value="" id="kategori" name="kategori" />
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

						<h4 class="card-title">Manajemen Kategori</h4>
						<p class="card-title-desc">Semua Kategori yang terdaftar muncul disini
						</p>

						<div class="table-responsive">
							<table id="datatable" class="table table-bordered nowrap w-100">
								<thead>
									<tr>
										<th>Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($kategori as $kt)
									<tr>
										<td>{{ $kt->kategori }}</td>
										<td>
											<div class="row-12">
												<!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
												<form action="/kategoriDelete/{{ $kt->id }}" method="POST">
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
	<!-- end main content-->
</div>

@endsection