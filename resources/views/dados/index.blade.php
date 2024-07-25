<x-layout>

<!-- Page Wrapper -->
    <div class="page-wrapper">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<div class="page-sub-header">
									<h3 class="page-title">Seja bem vindo!</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active">Admin</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Overview Section -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Alunos</h6>
											<h3>{{ $alunos->count() }}</h3>
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-01.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Turmas</h6>
											<h3>{{ $turmas->count() }}</h3>
										</div>		
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-02.svg"  alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Department</h6>
											<h3>30+</h3>
										</div>
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-03.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Revenue</h6>
											<h3>$505</h3>
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/dash-icon-04.svg"  alt="Dashboard Icon">
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Overview Section -->				

			
					
				
				
					<!-- /Socail Media Follows -->
				</div>
				
		

			</div>
			<!-- /Page Wrapper -->

			
		
        </div>
		<!-- /Main Wrapper -->
		



       

</x-layout>