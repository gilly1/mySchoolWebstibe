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
                @include('Admin/inc/message')
            <div>
                <h3>Non-Teaching Staff</h3>
                <div class="row">
                    <div class="col-md-6">
                            
                        <form method="POST" action="{{route('workers.update',$workers->id)}}" enctype="multipart/form-data"  aria-label="{{ __('Update') }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="workersname">Name</label>
                                <input type="text" class="form-control" id="workersname" placeholder="Name" name="name" value="{{$workers->name}}">
                            </div>
                            <div class="form-group">
                                <label for="workersDesc">Description</label>
                                <input type="text" class="form-control" id="workersDesc" placeholder="Description" name="description" value="{{$workers->desc}}">
                            </div>
                            <div class="form-group">
                                <label for="workersimage">File input</label>
                                <input type="file" id="workersimage" name="image">
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        preview
                    </div>
                </div>
            </div>
               

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection





    