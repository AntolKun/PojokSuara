@extends('layouts.tempadmin')

@section('content')
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0 font-size-18">Dashboard</h4>

					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-xl-4">
					<div class="card overflow-hidden">
						<div class="bg-primary bg-soft">
							<div class="row">
								<div class="col-7">
									<div class="text-primary p-3">
										<h5 class="text-primary">Welcome Back !</h5>
										<p>PojokSuara Dashboard</p>
									</div>
								</div>
								<div class="col-5 align-self-end">
									<img src="{{asset('skoteassets/images/profile-img.png')}}" alt="" class="img-fluid" />
								</div>
							</div>
						</div>
						<div class="card-body pt-0">
							<div class="row">
								<div class="col-sm-4">
									<div class="avatar-md profile-user-wid mb-4">
										<img src="" alt="" class="img-thumbnail rounded-circle" />
									</div>
								</div>
								<h5 class="font-size-15">TEST</h5>
								<p class="text-muted mb-0">
									Staff
								</p>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xl-8">
					<div class="row">
						<div class="col-md-4">
							<div class="card mini-stats-wid">
								<div class="card-body">
									<div class="d-flex">
										<div class="flex-grow-1">
											<p class="text-muted fw-medium">Total Post</p>
											<h4 class="mb-0">1</h4>
										</div>

										<div class="flex-shrink-0 align-self-center">
											<div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
												<span class="avatar-title">
													<i class="bx bx-copy-alt font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card mini-stats-wid">
								<div class="card-body">
									<div class="d-flex">
										<div class="flex-grow-1">
											<p class="text-muted fw-medium">Total Staff</p>
											<h4 class="mb-0">1</h4>
										</div>

										<div class="flex-shrink-0 align-self-center">
											<div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
												<span class="avatar-title rounded-circle bg-primary">
													<i class="bx bx-purchase-tag-alt font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end row -->

				</div>
			</div>
			<!-- end row -->

			<!-- end row -->

			<!-- end row -->
		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->
</div>

@endsection
