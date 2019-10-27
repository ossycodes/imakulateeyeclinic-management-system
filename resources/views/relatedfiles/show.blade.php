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
        <li class="breadcrumb-item"><a href="general.html#">Related file</a></li>
        <li class="breadcrumb-item active">description</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

        <div class="row">
            @forelse($relatedfiles as $file)
                <div class="col-md-12 col-lg-6">
                    <div class="box box-solid">
                    <div class="box-header with-border">
                        {{-- <i class="fa fa-text-width"></i> --}}
                        <h3 class="box-title">Created  - {{ $file->created_at->diffForHumans() }} </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! $file->record !!}
                    </div>
                    <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                        <div class="timeline-footer text-right">
                                <a class="btn btn-app bg-blue" href="{{ route('relatedfile.edit', ['relatedfile' => $file->id]) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                      
                                <form action="{{ route('relatedfile.destroy', ['relatedfile' => $file->id]) }}" method="POST">@csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-app bg-green">  <i class="fa fa-stop"></i> Delete </button>
                                    {{-- <input type="submit" class="btn btn-danger btn-sm" value="Delete"/> --}}
                                </form>
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