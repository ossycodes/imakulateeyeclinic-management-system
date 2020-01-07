@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @push('stylesheet')
        <!--alerts CSS -->
        <link href="{{ asset('assets/vendor_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    @endpush
    
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @php $patientName = request()->segment(2); @endphp
            Create Case File For {{ $patientName }}
          </h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="form-validation.html#"><i class="fa fa-dashboard"></i> dashbaord</a></li>
            <li class="breadcrumb-item"><a href="form-validation.html#">casefile</a></li>
            <li class="breadcrumb-item active">create</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
         
         <!-- Basic Forms -->
          <div class="box">
            <div class="box-header with-border">
              {{-- <h3 class="box-title"> Create Patient Case File  </h3> --}}
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">

                <div class="col">
                    <form action="{{ route('casefile.store') }}" method="POST" novalidate>@csrf
                            <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                            {{-- <div class="col-12"> --}}
                                    <h5>Case History <span class="text-danger">*</span></h5>
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body" >
                                            <textarea class="textarea" id="editor1" name="casehistory"  placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- /.box -->
                                {{-- </div> --}}
                                    
                                {{-- <div class="col-12"> --}}
                                    <h5>Systemic <span class="text-danger">*</span></h5>
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <textarea class="textarea" id="editor2" name="systemic"  placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                            </textarea>
                                        </div>
                                    </div>
                                <!-- /.box -->
                                {{-- </div> --}}

                        <div class="form-group">
                            <h5>Family (Oculo-visual ) <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="family" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5>Last Eye Examinxation <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="lasteyeexamination" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <label>UNAIDED VISUAL ACUITY @6M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="uvaod6m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="uvaos6m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <label>UNAIDED VISUAL ACUITY @0.4M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="uvaod04m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="uvaos04m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>      

                        <div class="form-group">
                            <label> PINHOLE TEST </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="pinhholetestod" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="pinholetestos" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>  

                        <div class="form-group">
                            <label> STENOPAIC DISC </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="stenopaicdiscod" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="stenopaicdiscos" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div> 
                        
                        <div class="form-group">
                            <label>AIDED VISUAL ACUITY @6M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="avaod6m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="avaos6m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>  

                        <div class="form-group">
                            <label>AIDED VISUAL ACUITY @0.4M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="avaod04m" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="avaos04m" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>  

                        <div class="form-group">
                            <label>PRESENT PRESCRIPTION</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="ppod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="ppos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <h5>EXTERNAL EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor15" name="ee"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <h5>INTERNAL EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor18" name="ie"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <h5>UNAIDED VISUAL ACUITY @6M <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor16" name="uva6m"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <h5>UNAIDED EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor17" name="ue"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <h5>Preferred eye<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="prefferedeye" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5>Blood Pressure <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="bloodpressure" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5>Blood Sugar <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="bloodsugar" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Weight <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="weight" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Age <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="age" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>TONOMETRY</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="tonometryod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="tonometryos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Time <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="time" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Anaesthetics <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="anaesthetics" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>AUTOREFRACTOMETRY</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="autorefractometryod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="autorefractometryos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>      
                        
                        <div class="form-group">
                            <label>STATIC RETINOSCOPY</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="staticretinoscopyod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="staticretinoscopyos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> SUBJECTIVE <span class="text-danger">*</span></h5>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="subjectiveod" class="form-control"  > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="subjectiveos" class="form-control"  > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>ADD</label>
                            <div class="controls">
                                <input type="text" name="staticretinoscopyadd" class="form-control"  > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>SPECTACLE PRESCRIPTION</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" name="spectacleprescriptionod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="spectacleprescriptionos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        
                        <div class="form-group">
                            <h5> P D  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="pd" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5>Recommendation<span class="text-danger">*</span></h5>
                            <div class="controls">

                                <fieldset>
                                    <input type="checkbox" id="checkbox_1" name="dist" value="dist">
                                    <label for="checkbox_1">Dist</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_2" name="near" value="near">
                                    <label for="checkbox_2">Near</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_3" name="bifocal" value="bifocal">
                                    <label for="checkbox_3">Bifocal</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_4" name="vanilux" value="vanilux">
                                    <label for="checkbox_4">Vanilux</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_5" name="typesoflenses" value="typesoflenses">
                                    <label for="checkbox_5">Types of lens</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_6" name="thinnerlenses" value="thinnerlenses">
                                    <label for="checkbox_6">Thinner lenses</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_7" name="antireflectivelenses" value="antireflectivelenses">
                                    <label for="checkbox_7">Anti-reflective lenses</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_8" name="photochronic" value="photochronic">
                                    <label for="checkbox_8">Photochronic</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_9" name="sunglasses" value="sunglasses">
                                    <label for="checkbox_9">Sunglases</label>
                                </fieldset>
                              
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <h5> Tint <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="tint" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Next Appointment <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nextappointment" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <h5>ADDITIONAL TESTS, COMMENTS <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor20" name="additionaltestsandcomments"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <h5 >ASSESSMENT PLAN <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor21" name="assessmentplan"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <h5> DIAGNOSIS <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="diagnosis" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> DOCTOR'S NAME <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="doctorsname" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">CREATE</button>
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
  
   <!-- steps  -->
   <script src="{{ asset('assets/vendor_components/jquery-steps-master/build/jquery.steps.js') }}"></script>
   
   <!-- validate  -->
   <script src="{{ asset('assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js') }}"></script>

   <!-- Form validator JavaScript -->
   <script src="{{ asset('js/pages/validation.js') }}"></script>

   <script>
       ! function(window, document, $) {
        "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
 
  @endpush

@endsection