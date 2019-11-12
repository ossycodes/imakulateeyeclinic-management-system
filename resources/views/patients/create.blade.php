@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @push('stylesheet')
        <!--alerts CSS -->
        <link href="{{ asset('assets/vendor_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    @endpush
    
    <section class="content-header">
      <h1>
        Patient Registration
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-dashboard"></i><a href="{{ route('dashbaord') }}">Dashbaord</a></li>
        <li class="breadcrumb-item"><a href="{{ route('patients.index') }}">Patients</a></li>
        <li class="breadcrumb-item active">Register</li>
      </ol>
      <div id="widgethere"></div>
    </section>

    
    <!-- Main content -->
    <section class="content">
     
      <!-- Validation wizard -->
      <div class="box box-default">
            <div class="box-header with-border">
            <h3 class="box-title">Register New Patient</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body wizard-content">
            <form action="form-wizard.html#" class="validation-wizard wizard-circle">
                <!-- Step 1 -->
                <h6>Step 1</h6>
                <section>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="wfullname"> Full Name : <span class="danger">*</span> </label>
                        <input type="text" class="form-control required" id="wfullname" name="fullname"> </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="wparentname"> Parent Name (if minor):</label>
                        <input type="text" class="form-control" id="wparentname" name="lastName"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="waddress"> Address : <span class="danger">*</span> </label>
                        <input type="text" class="form-control required" id="waddress" name="address"> </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="woccupation"> Occupation : <span class="danger">*</span> </label>
                        <input type="text" class="form-control required" id="woccupation" name="Occupation"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="wphonenumber">Phone Number : <span class="danger">*</span> </label>
                        <input type="number" class="form-control required" id="wphonenumber"> </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="walternatephonenumber">Alternative Phone Number :</label>
                        <input type="number" class="form-control" id="walternatephonenumber"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="wnextofkin"> Next Of Kin Name : <span class="danger">*</span> </label>
                        <input type="text" class="form-control required" id="wnextofkin" name="nextofkin"> </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="wdateofbirth">Date of Birth :</label>
                        <input type="date" class="form-control" id="wdateofbirth"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" value="xxxxx" class="form-control required" id="wdateofbirthexceptyear" name="wdateofbirthexceptyear"> </div>
                    </div>
                </div>   
                </section>
                <!-- Step 2 -->
                <h6>Step 2</h6>
                <section>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="wcliniccardnumber">Clinic Card Number :<span class="danger">*</span> </label>
                        <input type="text" class="form-control required" id="wcliniccardnumber" name="cliniccardnumber"> </div>
                    </div>
                </div>
                </section>

            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @push('scripts')
  
  <!-- steps  -->
  <script src="{{ asset('assets/vendor_components/jquery-steps-master/build/jquery.steps.js') }}"></script>
   
   <!-- validate  -->
   <script src="{{ asset('assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js') }}"></script>
 
   <!-- Sweet-Alert  -->
   <script src="{{ asset('assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
   
   <!-- wizard  -->
   <script src="{{ asset('js/pages/steps.js') }}"></script>
 
  @endpush

@endsection