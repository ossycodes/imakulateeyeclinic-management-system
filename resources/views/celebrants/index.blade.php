@extends('layouts.app')

@section('title', 'Page Title')


@section('content')

	@push('stylesheet')

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">

	@endpush

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patients Who Have Birthday Today @php echo date('d-D-F-Y') @endphp
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="data.html#">Patients</a></li>
        <li class="breadcrumb-item active">Celebrants</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Celebrants</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Address</th>
							<th>Phone Number</th>
                            <th>Alternative Phone Number</th>
                            <th>Date Of Birth</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($celebrants as $celebrant)
						<tr>
							<td>{{ $celebrant->fullname }}</td>
							<td>{{ $celebrant->address }}</td>
							<td>{{ $celebrant->phonenumber }}</td>
							<td>{{ $celebrant->alternativephonenumber }}</td>
							<td>{{ $celebrant->dateofbirth }}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
                        <tr>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Alternative Phone Number</th>
                            <th>Date Of Birth</th>
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
