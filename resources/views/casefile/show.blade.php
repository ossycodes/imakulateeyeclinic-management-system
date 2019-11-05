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
            Edit Case File For {{ $patient->fullname }}
          </h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="form-validation.html#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="form-validation.html#">casefile</a></li>
            <li class="breadcrumb-item active">edit</li>
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
                            <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                            {{-- <div class="col-12"> --}}
                                    <h5>Case History <span class="text-danger">*</span></h5>
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body" >
                                            <textarea class="textarea" id="editor1" name="casehistory"  placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                                    {{ $casefile->casehistory }}
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
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                                    {{ $casefile->systemic }}
                                            </textarea>
                                        </div>
                                    </div>
                                <!-- /.box -->
                                {{-- </div> --}}

                        <div class="form-group">
                            <h5>Family (Oculo-visual ) <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->family }}" name="family" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5>Last Eye Examinxation <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->lasteyeexamination }}" name="lasteyeexamination" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <label>UNAIDED VISUAL ACUITY @6M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" {{ $casefile->uvaod6m }} name="uvaod6m" class="form-control" disabled> </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" {{ $casefile->uvaos6m }} name="uvaos6m" class="form-control" disabled> </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <label>UNAIDED VISUAL ACUITY @0.4M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->uvaod04m }}" name="uvaod04m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->uvaos04m }}" name="uvaos04m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>      

                        <div class="form-group">
                            <label> PINHOLE TEST </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->pinhholetestod }}"  name="pinhholetestod" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->pinholetestos }}" name="pinholetestos" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>  

                        <div class="form-group">
                            <label> STENOPAIC DISC </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->stenopaicdiscod }}" name="stenopaicdiscod" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->stenopaicdiscos }}" name="stenopaicdiscos" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div> 
                        
                        <div class="form-group">
                            <label>AIDED VISUAL ACUITY @6M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->avaod6m }}" name="avaod6m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->avaos6m }}" name="avaos6m" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>  

                        <div class="form-group">
                            <label>AIDED VISUAL ACUITY @0.4M </label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->avaod04m }}" name="avaod04m" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->avaos04m }}" name="avaos04m" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>  

                        <div class="form-group">
                            <label>PRESENT PRESCRIPTION</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->ppod }}"  name="ppod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->ppos }}" name="ppos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <h5>EXTERNAL EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor15" name="ee"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                        {{ $casefile->ee }}
                                </textarea>
                            </div>
                        </div>

                        <h5>UNAIDED VISUAL ACUITY @6M <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor16" name="uva6m"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                        {{ $casefile->uva6m }}
                                </textarea>
                            </div>
                        </div>

                        <h5>UNAIDED EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor17" name="ue"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                        {{ $casefile->ue }}
                                </textarea>
                            </div>
                        </div>

                        <h5>INTERNAL EXAMINATION <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor18" name="ie"  placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                        {{ $casefile->ie }}
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <h5>Preferred eye<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="prefferedeye" disabled value="{{ $casefile->prefferedeye }}" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5>Blood Pressure <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->bloodpressure }}" name="bloodpressure" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5>Blood Sugar <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->bloodsugar }}" name="bloodsugar" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5> Weight <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->weight }}" name="weight" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5> Age <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->age }}" name="age" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <label>TONOMETRY</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->tonometryod }}"  name="tonometryod" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" name="tonometryos" disabled value="{{ $casefile->tonometryos }}" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5> Time <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->time }}" name="time" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Anaesthetics <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->anaesthetics }}" name="anaesthetics" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>AUTOREFRACTOMETRY</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->autorefractometryod }}" name="autorefractometryod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->autorefractometryos }}" name="autorefractometryos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>      
                        
                        <div class="form-group">
                            <label>STATIC RETINOSCOPY</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->staticretinoscopyod }}"  name="staticretinoscopyod" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->staticretinoscopyos }}" name="staticretinoscopyos" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> SUBJECTIVE <span class="text-danger">*</span></h5>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->subjectiveod }}" name="subjectiveod" class="form-control"  > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->subjectiveos }}" name="subjectiveos" class="form-control"  > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            <br>
                            <label>ADD</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->staticretinoscopyadd }}" name="staticretinoscopyadd" class="form-control"  > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <label>SPECTACLE PRESCRIPTION</label>
                            <br>
                            <label>O.D</label>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->spectacleprescriptionod }}" name="spectacleprescriptionod" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                            <br>
                            <label>O.S</label>
                            <div class="controls">
                                <input type="text"  disabled value="{{ $casefile->spectacleprescriptionos }}" name="spectacleprescriptionos" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        
                        <div class="form-group">
                            <h5> P D  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" disabled value="{{ $casefile->pd }}" name="pd" class="form-control" > </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                        </div>

                        <div class="form-group">
                            <h5>Recommendation<span class="text-danger">*</span></h5>
                            <div class="controls">

                                <fieldset>
                                    <input type="checkbox" id="checkbox_1" name="dist" disabled value="dist" {{ $casefile->dist ? 'checked' : ''}}>
                                    <label for="checkbox_1">Dist</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_2" name="near" disabled value="near" {{ $casefile->near ? 'checked' : ''}}>
                                    <label for="checkbox_2">Near</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_3" name="bifocal" disabled value="bifocal" {{ $casefile->bifocal ? 'checked' : ''}}>
                                    <label for="checkbox_3">Bifocal</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_4" name="vanilux" disabled value="vanilux" {{ $casefile->vanilux ? 'checked' : ''}}>
                                    <label for="checkbox_4">Vanilux</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_5" name="typesoflenses" disabled value="typesoflenses" {{ $casefile->typesoflenses ? 'checked' : ''}}>
                                    <label for="checkbox_5">Types of lens</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_6" name="thinnerlenses" disabled value="thinnerlenses" {{ $casefile->thinnerlenses ? 'checked' : ''}}>
                                    <label for="checkbox_6">Thinner lenses</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_7" name="antireflectivelenses" disabled value="antireflectivelenses" {{ $casefile->antireflectivelenses ? 'checked' : ''}}>
                                    <label for="checkbox_7">Anti-reflective lenses</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_8" name="photochronic" disabled value="photochronic" {{ $casefile->photochronic ? 'checked' : ''}}>
                                    <label for="checkbox_8">Photochronic</label>
                                </fieldset>
                                <fieldset>
                                    <input type="checkbox" id="checkbox_9" name="sunglasses" disabled value="sunglasses" {{ $casefile->sunglasses ? 'checked' : ''}}>
                                    <label for="checkbox_9">Sunglases</label>
                                </fieldset>
                              
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <h5> Tint <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="{{ $casefile->tint}}"  disabled name="tint" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="form-group">
                            <h5> Next Appointment <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="{{ $casefile->nextappointment }}" disabled name="nextappointment" class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <h5>ADDITIONAL TESTS, COMMENTS <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor20" name="additionaltestsandcomments"  placeholder="Place some text here" disabled
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                                        {{ $casefile->additionaltestsandcomments }}
                                </textarea>
                            </div>
                        </div>

                        <h5 >ASSESSMENT PLAN <span class="text-danger">*</span></h5>
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <textarea class="textarea" id="editor21" name="assessmentplan"  placeholder="Place some text here" 
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled required>
                                        {{ $casefile->assessmentplan }}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <h5> DOCTOR'S NAME <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text"  value="{{ $casefile->doctorsname }}"  name="doctorsname" disabled class="form-control" > </div>
                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                        </div>

                        <div class="text-xs-right">
                            <a href="{{  route('casefile.edit', ['casefile' => $casefile, 'patient' => $patient]) }}"><button class="btn btn-info">UPDATE</button></a>
                        </div>
                    
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
  
   <script>
       ! function(window, document, $) {
        "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
 
  @endpush

@endsection