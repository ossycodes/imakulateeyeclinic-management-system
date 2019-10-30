@extends('layouts.app')

@section('title', 'Registered Patients')


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        File Description
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="general.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('relatedfiles') }}">Related file</a></li>
        <li class="breadcrumb-item active">description</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

        <div class="row">

          <!--Multi elements!-->
          @forelse($relatedfiles as $file)
          <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Created  - {{ $file->created_at->diffForHumans() }} </h4>
                      <div class="box-controls pull-right">
                        <div class="box-header-actions">
                                <a href="{{ route('relatedfile.edit', ['relatedfile' => $file->id]) }}"class="btn btn-app bg-blue">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                          <form action="{{ route('relatedfile.destroy', ['relatedfile' => $file->id]) }}" method="POST">@csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-app bg-green">  <i class="fa fa-stop"></i> Delete </button>
                         </form>
                        </div>
                      </div>
                  </div>
    
                  <div class="box-body">
                        {!! $file->record !!}
                  </div>
                </div>
            </div>
            @empty 
                    <h1>
                        No FIle records for this patient
                    </h1>
            @endforelse      
  
        </div>
        
            {{ $relatedfiles->render() }}
        
            <!-- /.row -->
        <!-- END TYPOGRAPHY -->
  
      </section>
      <!-- /.content -->

@endsection      