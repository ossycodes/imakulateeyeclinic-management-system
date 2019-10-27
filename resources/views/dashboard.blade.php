@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('layouts.flashmessages')
	  <div class="row">
        <div class="col-12 ">
		  <div class="row">

			<div class="col-sm-6 col-lg-3">
			  <div class="box pull-up">
				  <div class="box-body">
					<div class="flexbox mb-1">
					  <div>
						<p class="text-success font-size-26 font-weight-300 mb-0">452</p>
						Patients
					  </div>
					  <div class="text-success font-size-40"><i class="mdi mdi-account-plus"></i></div>
					</div>
					<div class="progress progress-xxs mt-10 mb-0">
					  <div class="progress-bar bg-success" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				  </div>
			  </div>
			</div>


			<div class="col-sm-6 col-lg-3">
			  <div class="box pull-up">
				  <div class="box-body">
					<div class="flexbox mb-1">
					  <div>
						<p class="text-danger font-size-26 font-weight-300 mb-0"><a href="{{ route('celebrants') }}">{{ $celebrantCount }}</a></p>
						<a href="{{ route('celebrants') }}">{{ str_plural('Patient', $celebrantCount) }} Have Birthday Today</a>
					  </div>
					  <div class="text-danger font-size-40"><i class="mdi mdi-heart"></i></div>
					</div>
					<div class="progress progress-xxs mt-10 mb-0">
					  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				  </div>
			  </div>
            </div>
            
		  </div>
        </div>
        <!-- /.col -->		  
      </div>

    </section>
    <!-- /.content -->
    
@endsection
