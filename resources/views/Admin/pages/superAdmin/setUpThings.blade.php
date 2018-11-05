@extends('Admin/Layout.App')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content container-fluid">
    
            <div class="row">
                <div class="col-md-6">
                    
                    @if(count($link)===0)
                    <form method="POST" action="{{ route('superadmin.store') }}" enctype="multipart/form-data" aria-label="{{ __('Save') }}">
                        @csrf

                        <p>Click the buttton to set up things</p>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Set Up Things') }}</button>
                        </div>
    
                    </form>
                    @else
                    <p>EveryThing is good</p>
                    @endif
                </div>
            </div>
    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->





@endsection
