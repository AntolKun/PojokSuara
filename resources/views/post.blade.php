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
										@foreach ($post as $pt)
										<tr>
											<td>{{ $pt->judul }}</td>
											<td>{{ $pt->tanggal }}</td>
											<td>{{ $pt->kategori }}</td>
											<td>
												@if ($pt->status == true)
												<span class="badge bg-success">
													Published
												</span>
												@endif
											</td>
											<td><img src="{{ url('posts/', $pt->gambar) }}" alt="" width="100px"></td>
											<td>{{ $pt->user }}</td>
											<td>
												<div class="row-12">
													<!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
													<form action="/admin/postsDelete/{{ $pt->id }}" method="POST">
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
				</div>
			</div>
		</div>
	</div>
	<!-- End Page-content -->
</div>

@endsection