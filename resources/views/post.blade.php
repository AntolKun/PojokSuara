@extends('layouts.tempadmin')

@section('content')

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0 font-size-18">Posts</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="card-title">Post Yang Telah Dipublikasi</h4>
							<p class="card-title-desc">Semua post yang telah dipublikasikan muncul disini
							</p>

							<div class="table-responsive">
								<table id="datatable" class="table table-bordered nowrap w-100">
									<thead>
										<tr>
											<th>Judul</th>
											<th>Tanggal Berita</th>
											<th>Kategori</th>
											<th>Status</th>
											<th>Gambar</th>
											<th>Staff Uploader</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>Pascol Ngakak</td>
											<td>12-12-12</td>
											<td>Nasional</td>
											<td>
												<span class="badge bg-success">
													Published
												</span>
											</td>
											<td><img src="" alt="" width="100px"></td>
											<td>TEST</td>
											<td>
												<div class="row-12">
													<!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
													<form action="" method="POST">
														<button type="submit" class="btn btn-danger waves-effect waves-light">Hapus</button>
													</form>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page-content -->
</div>

@endsection
