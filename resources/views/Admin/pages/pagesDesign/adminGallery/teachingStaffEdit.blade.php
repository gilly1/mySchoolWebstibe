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
                <h3>Teaching staff</h3>
                <div class="row">
                    <div class="col-md-6">
                            
                        <form method="POST" action="{{route('teachers.update',$teachers->id)}}" enctype="multipart/form-data"  aria-label="{{ __('Update') }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="teachersname">Name</label>
                                <input type="text" class="form-control" id="teachersname" placeholder="Name" name="name" value="{{$teachers->name}}">
                            </div>
                            <div class="form-group">
                                <label for="teachersDesc">Description</label>
                                <input type="text" class="form-control" id="teachersDesc" placeholder="Description" name="description" value="{{$teachers->desc}}">
                            </div>
                            <div class="form-group">
                                <label for="teachersimage">File input</label>
                                <input type="file" id="teachersimage" name="image">
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





    