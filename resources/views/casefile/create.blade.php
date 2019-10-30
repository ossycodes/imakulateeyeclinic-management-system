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
            <li class="breadcrumb-item"><a href="form-validation.html#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="form-validation.html#">Forms</a></li>
            <li class="breadcrumb-item active">Form Validation</li>
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
                    <form novalidate>
                            {{-- <div class="col-12"> --}}
                                    <h5>Case History <span class="text-danger">*</span></h5>
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
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
                                            <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                            </textarea>
                                        </div>
                                    </div>
                                <!-- /.box -->
                                {{-- </div> --}}

                        <div class="form-group">
                            <h5>Family (Oculo-visual ) <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5>Last Eye Examinxation <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>PRESENT Rx</label>
                            <br>
                            <label>O.D</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Sphere</option>
                                <option>Cylinder</option>
                                <option>Axis</option>
                                <option>Prism</option>
                                <option>Add</option>
                            </select>
                            <br>
                            <label>O.S</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Sphere</option>
                                <option>Cylinder</option>
                                <option>Axis</option>
                                <option>Prism</option>
                                <option>Add</option>
                            </select>
                        </div>

                        <h5>EXTERNAL EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <h5>INTERNAL EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <h5>Preferred eye<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5>Blood Pressure <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5>Blood Sugar <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Weight <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Age <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>TONOMETRY</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">OD</option>
                                <option>OS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <h5> Time <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                            <div class="form-group">
                                <h5> Anaesthetics <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div>

                            <div class="form-group">
                                <label>REFRACTION</label>
                                <br>
                                <label>OD</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Autorefractometry</option>
                                    <option>STALIC REFIMESCOPY</option>
                                </select>
                                <br>
                                <label>O.S</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Autorefractometry</option>
                                    <option>STALIC REFIMESCOPY</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <h5> SUBJECTIVE <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" placeholder="OD________VA______" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                <br>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" placeholder="O.S________VA______"  required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                <br>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" placeholder="ADD________VA______"  required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div>

                            <div class="form-group">
                                <label>SPECTACLE Rx</label>
                                <br>
                                <label>O.D</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Sphere</option>
                                    <option>Cylinder</option>
                                    <option>Axis</option>
                                    <option>Prism</option>
                                    <option>Add</option>
                                    <option>V.A.</option>
                                </select>
                                <br>
                                <label>O.S</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Sphere</option>
                                    <option>Cylinder</option>
                                    <option>Axis</option>
                                    <option>Prism</option>
                                    <option>Add</option>
                                    <option>V.A.</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <h5> P D  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Dist</label>
                                </div>								
                            </div>
                            
                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Near</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Bifocal</label>
                                </div>								
                            </div>
                            
                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Varius</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Types of lens</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Thinner lenses</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Anit-reflective lenses</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Scratch resistance</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Photochronic</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Sunglasses</label>
                                </div>								
                            </div>

                            <div class="form-group">
                                <h5> Tint <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div>

                            <div class="form-group">
                                <h5> Next Appointment <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div>

                            <h5>ADDITIONAL TESTS, COMMENTS <span class="text-danger">*</span></h5>
                            <div class="box">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                    </textarea>
                                </div>
                            </div>

                            <h5 >ASSESSMENT PLAN <span class="text-danger">*</span></h5>
                            <div class="box">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <textarea class="textarea" id="editor1" name="record"  placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Submit</button>
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