<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/skote/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 07:05:08 GMT -->

<head>
	<meta charset="utf-8" />
	<title>Create Posts | PojokSuara</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="{{ asset('skoteassets/images/favicon.ico')}}" />

	<!-- Bootstrap Css -->
	<link href="{{ asset('skoteassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="{{ asset('skoteassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="{{ asset('skoteassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body data-sidebar="dark" data-layout-mode="light">
	<!-- <body data-layout="horizontal" data-topbar="dark"> -->

	<!-- Begin page -->
	<div id="layout-wrapper">
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="index.html" class="logo logo-dark">
							<span class="logo-sm">
								<img src="{{ asset('images/jktnews-r.png') }}" alt="" height="22" />
							</span>
							<span class="logo-lg">
								<img src="{{ asset('images/jktnews-r.png') }}" alt="" height="80" />
							</span>
						</a>

						<a href="index.html" class="logo logo-light">
							<span class="logo-sm">
								<img src="{{ asset('images/jktnews-r.png') }}" alt="" height="22" />
							</span>
							<span class="logo-lg">
								<img src="{{ asset('images/jktnews-r.png') }}" alt="" height="80" />
							</span>
						</a>
					</div>

					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
						<i class="fa fa-fw fa-bars"></i>
					</button>

				</div>

				<div class="d-flex">

					<div class="dropdown d-none d-lg-inline-block ms-1">
						<button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
							<i class="bx bx-fullscreen"></i>
						</button>
					</div>

					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
							data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle header-profile-user" src="{{ url('foto/', auth()->user()->foto) }}"
								alt="Header Avatar" />
							<span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth()->user()->name }}</span>
							<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							<!-- item-->
							<a class="dropdown-item text-primary" href="/profile"><i
									class="bx bx-user font-size-16 align-middle me-1 text-primary"></i>
								<span key="t-logout">Profile</span></a>
							<a class="dropdown-item text-danger" href="{{ route('actionLogout') }}"><i
									class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
								<span key="t-logout">Logout</span></a>
						</div>
					</div>

					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
							<i class="bx bx-cog bx-spin"></i>
						</button>
					</div>
				</div>
			</div>
		</header>

		<!-- ========== Left Sidebar Start ========== -->
		<div class="vertical-menu">
			<div data-simplebar class="h-100">
				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title" key="t-menu">Menu</li>

						<li>
							<a href="/dashboard" class="waves-effect">
								<i class="bx bx-file"></i>
								<span key="t-file-manager">Dashboard</span>
							</a>
						</li>

						<li class="menu-title" key="t-apps">Apps</li>

						<li>
							<a href="/post" class="waves-effect">
								<i class="bx bx-chat"></i>
								<span key="t-chat">Posts</span>
							</a>
						</li>

						<li>
							<a href="/create-posts" class="waves-effect">
								<i class="bx bx-chat"></i>
								<span key="t-chat">Tambah Artikel</span>
							</a>
						</li>

						<li>
							<a href="/admin/kategori" class="waves-effect">
								<i class="bx bx-chat"></i>
								<span key="t-chat">Tambah Kategori</span>
							</a>
						</li>

						<li>
							<a href="/admin/tag" class="waves-effect">
								<i class="bx bx-chat"></i>
								<span key="t-chat">Tambah Tag</span>
							</a>
						</li>

						<li>
							<a href="/admin/carousel" class="waves-effect">
								<i class="bx bx-chat"></i>
								<span key="t-chat">Tambah Carousel</span>
							</a>
						</li>

						<li>
							<a href="/admin/breaking" class="waves-effect">
								<i class="bx bx-chat"></i>
								<span key="t-chat">Tambah Breaking</span>
							</a>
						</li>

						<li>
							<a href="/admin/manage-user" class="waves-effect">
								<i class="bx bx-file"></i>
								<span key="t-file-manager">Manajemen User</span>
							</a>
						</li>

					</ul>
				</div>
				<!-- Sidebar -->
			</div>
		</div>
		<!-- Left Sidebar End -->

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">
					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box d-sm-flex align-items-center justify-content-between">
								<h4 class="mb-sm-0 font-size-18">Create Post</h4>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Input Post</h4>
									<p class="card-title-desc">
										Silahkan Input Post Disini
									</p>

									<form action="{{ url('admin/postsStore') }}" method="POST" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="mb-3 col">
											<label for="judul" class="col-md-2 col-form-label">Judul</label>
											<div class="col-md-12">
												<input class="form-control" name="judul" type="text" id="judul" />
											</div>
										</div>

										<div class="mb-3 col">
											<label for="subjudul" class="col-md-2 col-form-label">Sub Judul</label>
											<div class="col-md-12">
												<input class="form-control" name="subjudul" type="text" id="subjudul" />
											</div>
										</div>

										<div class="mb-3 col">
											<label for="slug" class="col-md-2 col-form-label">Slug</label>
											<div class="col-md-12">
												<input class="form-control" name="slug" type="text" id="slug"
													placeholder="contoh slug: berita-hari-ini" />
											</div>
										</div>

										<div class="mb-3 col">
											<label for="tanggal" class="col-md-2 col-form-label">Tanggal</label>
											<div class="col-md-12">
												<input class="form-control" name="tanggal" type="date" id="tanggal" />
											</div>
										</div>

										<div class="mb-3 row">
											<label class="col-md-2 col-form-label">Kategori</label>
											<div class="col-md-12">
												<select class="form-select" id="kategori" name="kategori">
													@foreach ($kategori as $kt)
													<option value="{{ $kt->kategori }}">{{ $kt->kategori }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-2 col-form-label">Isi Artikel</label>
											<!-- <textarea class="ckeditor form-control" id="isiartikel" name="isiartikel"></textarea> -->
											<!-- <textarea id="isiartikel" name="isiartikel" class="form-control" required></textarea> -->
											<textarea id="summernote" name="isiartikel"></textarea>
										</div>

										<div class="mb-3 row">
											<label class="col-md-2 col-form-label">Staff</label>
											<div class="col-md-12">
												<select class="form-select" id="user" name="user">
													@foreach ($user as $u)
													<option value="{{ $u->name }}">{{ $u->name }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="mb-3 row">
											<label class="col-md-2 col-form-label">Upload Gambar</label>
											<div class="col-md-12">
												<div>
													<input class="form-control form-control-lg" id="gambar" name="gambar" type="file" />
												</div>
											</div>
										</div>

										<div class="mb-3 col">
											<label class="col-md-2 col-form-label">Tag 1</label>
											<div class="col-md-4">
												<select class="form-select" name="tag1" id="tag1">
													@foreach ($tag as $t)
													<option value="{{ $t->tag }}">{{ $t->tag }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="mb-3 col">
											<label class="col-md-2 col-form-label">Tag 2</label>
											<div class="col-md-4">
												<select class="form-select" name="tag2" id="tag2">
													@foreach ($tag as $t)
													<option value="{{ $t->tag }}">{{ $t->tag }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="mb-3 col">
											<label class="col-md-2 col-form-label">Tag 3</label>
											<div class="col-md-4">
												<select class="form-select" name="tag3" id="tag3">
													@foreach ($tag as $t)
													<option value="{{ $t->tag }}">{{ $t->tag }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="mb-3 col">
											<div class="col-md-4">
												<button type="submit" class="btn btn-success">SIMPAN</button>
												<button type="reset" class="btn btn-primary">RESET</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
						<!-- end col -->
					</div>
					<!-- end row -->

				</div>
				<!-- container-fluid -->
			</div>
			<!-- End Page-content -->

			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<script>
								document.write(new Date().getFullYear());
							</script>
							© Jakarta - News.
						</div>
						<div class="col-sm-6">
							<div class="text-sm-end d-none d-sm-block">
								Developed by Antol-Kun
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- end main content-->
	</div>
	<!-- END layout-wrapper -->

	<!-- Right Sidebar -->
	<div class="right-bar">
		<div data-simplebar class="h-100">
			<div class="rightbar-title d-flex align-items-center px-3 py-4">
				<h5 class="m-0 me-2">Settings</h5>

				<a href="javascript:void(0);" class="right-bar-toggle ms-auto">
					<i class="mdi mdi-close noti-icon"></i>
				</a>
			</div>

			<!-- Settings -->
			<hr class="mt-0" />
			<h6 class="text-center mb-0">Choose Layouts</h6>

			<div class="p-4">
				<div class="mb-2">
					<img src="{{ asset('skoteassets/images/layouts/layout-1.jpg')}}" class="img-thumbnail" alt="layout images" />
				</div>

				<div class="form-check form-switch mb-3">
					<input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
					<label class="form-check-label" for="light-mode-switch">Light Mode</label>
				</div>

				<div class="mb-2">
					<img src="{{ asset('skoteassets/images/layouts/layout-2.jpg')}}" class="img-thumbnail" alt="layout images" />
				</div>
				<div class="form-check form-switch mb-3">
					<input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" />
					<label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
				</div>
			</div>
		</div>
		<!-- end slimscroll-menu-->
	</div>
	<!-- /Right-bar -->

	<!-- Right bar overlay-->
	<div class="rightbar-overlay"></div>

	<!-- JAVASCRIPT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	@if ($message = session()->get('success'))
	<script type="text/javascript">
		Swal.fire({
			icon: 'success',
			title: 'Sukses!',
			text: '{{ $message }}',
		})
	</script>
	@endif

	@if ($message = session()->get('error'))
	<script type="text/javascript">
		Swal.fire({
			icon: 'error',
			title: 'Waduh!',
			text: '{{ $message }}',
		})
	</script>
	@endif
	<!-- <script src="{{ asset('skoteassets/libs/jquery/jquery.min.js')}}"></script> -->
	<script src="{{ asset('skoteassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('skoteassets/libs/metismenu/metisMenu.min.js')}}"></script>
	<script src="{{ asset('skoteassets/libs/simplebar/simplebar.min.js')}}"></script>
	<script src="{{ asset('skoteassets/libs/node-waves/waves.min.js')}}"></script>
	<script>
		$('#summernote').summernote({
			tabsize: 2,
			height: 500
		});
	</script>

	<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 07:05:08 GMT -->

</html>
