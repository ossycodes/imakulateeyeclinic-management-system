@extends('layouts.app')

@section('title', 'Registered Patients')


@section('content')

	@push('stylesheet')

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">

	@endpush

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View and Create Additional Files For Patients
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="data.html#">Patients</a></li>
        <li class="breadcrumb-item active">view/create files</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<!-- Flash Session Message -->
		@include('layouts.flashmessages')
      <div class="row">
        <div class="col-12">
         
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Patients Record Files</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Clinic Card Number</th>
							<th>Patient Full Name</th>
                            <th>Create File</th>
                            <th>View Files</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($patients as $patient)
						<tr>
							<td>{{ $patient->cliniccardnumber }}</td>
							<td>{{ $patient->fullname }}</td>
							<td>
							    <a href="{{ route('relatedfile.create', ['patient' => $patient]) }}"><button type="button" class="btn btn-primary"><i class="fa fa-envelope"></i> Create File </button></a>
							</td>
                            <td>
                                <a href="{{ route('relatedfile.show', ['patient' => $patient]) }}"><button type="button" class="btn btn-success"><i class="fa fa-envelope"></i> View Files </button></a>
                            </td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Clinic Card Number</th>
							<th>Patient Full Name</th>
                            <th>Create File</th>
                            <th>View Files</th>
						</tr>
					</tfoot>
				  </table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->       
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

	@push('scripts')
		<!-- jQuery UI 1.11.4 -->
		<script src="{{ asset('assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
	  	$.widget.bridge('uibutton', $.ui.button);
		  var del = document.getElementById('del');
		  del.addEventListener('click', function(e) {
		  	alert(del.value);
		  });
		</script>
	@endpush

@endsection
