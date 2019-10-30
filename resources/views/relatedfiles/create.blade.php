@extends('layouts.app')

@section('title', 'Related Files')


@section('content')


@push('stylesheet')
  <!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="{{ asset('assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css') }}">
@endpush

  
  <!-- Content Header (Page header) -->
  @include('layouts.includes.errormessages')
  <section class="content-header">
    <h1>
      Create Related File For Patient
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashbaord') }}"><i class="fa fa-dashboard"></i> Dashbaord </a></li>
      <li class="breadcrumb-item"><a href="{{ route('relatedfiles') }}">related files</a></li>
      <li class="breadcrumb-item active">create</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Create Related File For Patient<br>
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                      title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form action="{{ route('relatedfile.store', ['patient' => $patient]) }}" method="POST"> @csrf
              <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                </textarea>
                <button type="submit" class="btn btn-app bg-blue">
                  <i class="fa fa-save"></i> Save
                </button>
            </form>
          </div>
        </div>
        <!-- /.box -->
        
        
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
   
@endsection