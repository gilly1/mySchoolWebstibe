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
            <li class="active">Tender Add</li>
            </ol>
        </section>
        
        <!-- Main content -->
        <section class="content container-fluid">
                @include('Admin/inc/message')
            <h2>Add</h2>
            <div class="row">
                <div class="col-md-6">


                    <form method="POST" action="{{ route('tenderadmin.store') }}" enctype="multipart/form-data" aria-label="{{ __('Save') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ __('title') }}</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter the Title" name="title" value="">
                        </div>
                        <div class="form-group">
                            <label for="article-ckeditor">{{ __('Description') }}</label>
                            <textarea class="form-control"id="article-ckeditor" class="form-control" name="body" name="body" value=""></textarea>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-6">
                    <h2>Preview</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('tenderadmin.view') }}" class="btn btn-primary">Back</a>
                </div>
            </div>

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection