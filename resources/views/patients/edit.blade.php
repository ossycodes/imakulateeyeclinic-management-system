
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

@push('stylesheet')
        <!--alerts CSS -->
        <link href="{{ asset('assets/vendor_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endpush

    <!-- Main content -->
    <section class="content">
     {{-- <div id="widgethere"></div> --}}
    
     <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Patient Details</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
            	<form method="POST" action="{{ route('patient.update', ['patient' => $patient]) }}" novalidate id="form">@csrf
                   @method('PATCH')
                   <input type="hidden" value="{{ $patient->id }}" id="patientId">
                   
                   <div class="form-group">
                        <h5>Clinic card number: <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" id="wcliniccardnumber" value="{{ $patient->cliniccardnumber }}" name="cliniccardnumber" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
					<div class="form-group">
						<h5>Full Name: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="wfullname" value="{{ $patient->fullname }}" name="fullname" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
						<h5>Parent's Name: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="wparentname" value="{{ $patient->parentname }}" name="parentname" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
					</div>
					<div class="form-group">
						<h5>Address: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="waddress" value="{{ $patient->address }}" name="address" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
						<h5>Occupation: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="woccupation" value="{{ $patient->occupation }}" name="occupation" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                            <h5>Phonenumber: <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="number" id="wphonenumber" value="{{ $patient->phonenumber }}" name="phonenumber" class="form-control" required data-validation-required-message="This field is required"> 
                            </div>
                    </div>
                    <div class="form-group">
                            <h5>Alternative Phonenumber: </h5>
                            <div class="controls">
                                <input type="number" id="walternatephonenumber" value="{{ $patient->alternativephonenumber }}" name="alternativephonenumber" class="form-control"> 
                            </div>
                    </div>
                    <div class="form-group">
                        <h5>Next Of Kin: <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" id="wnextofkin" value="{{ $patient->nextofkin }}" name="nextofkin" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Date Of Birth: <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="date" id="wdateofbirth" value="{{ $patient->dateofbirth }}" name="dateofbirth" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback">This field is required</div>
                    </div>

					<div class="text-xs-right">
						<input type="submit" class="btn btn-info" value="update"/>
					</div>
				</form>
            	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->

    @push('scripts')
        <!-- Form validator JavaScript -->
        <script src="{{ asset('js/pages/validation.js') }}"></script>\
        Sweet-Alert  -->
        <script src="{{ asset('assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
        <script>
        ! function(window, document, $) {
            "use strict";
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            }(window, document, jQuery);
        </script>
        <script>
            // var fullname = document.getElementById("wfullname").value;
            // var parentname = document.getElementById("wparentname").value;
            // var address = document.getElementById("waddress").value;
            // var occupation = document.getElementById("woccupation").value;
            // var phonenumber = document.getElementById("wphonenumber").value;
            // var alternativePhonenumber = document.getElementById(
            // "walternatephonenumber"
            // ).value;
            // var nextOfKin = document.getElementById("wnextofkin").value;
            // var dateOfBirth = document.getElementById("wdateofbirth").value;
            // var cliniccardnumber = document.getElementById("wcliniccardnumber").value;

            // var token = document.querySelector('[name="csrf-token"]').content;

            // var form = document.getElementById('form');

            // form.addEventListener('submit', function(e) {
                    
            //         e.preventDefault();

            //         // window.scrollTo({
            //         //     top: 60,
            //         //     left: 100,
            //         //     behavior: 'smooth'
            //         // });
                    
            //         var patientId = document.getElementById('patientId').value;
                    
            //         var xhr = new XMLHttpRequest();
                    
            //         xhr.onreadystatechange = function() {
            //         if (xhr.readyState === 4 && xhr.status === 200) {
            //             // Json.parse
            //             // var jsonData = Json.parse(xhr.responseText);
            //           }
            //        };

            //         xhr.onprogress = function() {
            //             var loadingWidget = document.getElementById("widgethere");
            //             loadingWidget.innerHTML = `
            //                     <div class="box box-danger box-inverse">
            //                     <div class="box-header">
            //                         <h3 class="box-title">Updating Patient Details<h3>
            //                     </div>
            //                     <!-- Loading (remove the following to stop the loading)-->
            //                     <div class="overlay">
            //                         <i class="fa fa-refresh fa-spin"></i>
            //                     </div>
            //                     <!-- end loading -->
            //                     </div>
            //                 `;
            //         };

            //         xhr.onload = function() {
            //             document.getElementById("widgethere").innerHTML = "";
            //             // swal("Patient Details Updated Successfully!");
            //             // location.href = "/patients"
            //         };

                
            //     xhr.open('PUT', `/patients/${patientId}`);

            //     //Send the proper header information along with the request
            //     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            //     xhr.setRequestHeader("X-CSRF-TOKEN", token);

            //     xhr.send(`fullname=${fullname}&parentname=${parentname}&address=${address}&occupation=${occupation}&phonenumber=${phonenumber}&alternativephonenumber=${alternativePhonenumber}&nextofkin=${nextOfKin}&dateofbirth=${dateOfBirth}&cliniccardnumber=${cliniccardnumber}`);
                
            // });
        </script>
    @endpush

@endsection

  