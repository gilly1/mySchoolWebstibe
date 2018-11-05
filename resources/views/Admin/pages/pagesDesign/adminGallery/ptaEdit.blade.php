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
                <h3>PTA Members</h3>
                <div class="row">
                    <div class="col-md-6">
                            
                        <form method="POST" action="{{route('pta.update',$pta->id)}}" enctype="multipart/form-data"  aria-label="{{ __('Update') }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="ptaname">Name</label>
                                <input type="text" class="form-control" id="ptaname" placeholder="Name" name="name" value="{{$pta->name}}">
                            </div>
                            <div class="form-group">
                                <label for="ptaDesc">Description</label>
                                <input type="text" class="form-control" id="ptaDesc" placeholder="Description" name="description" value="{{$pta->desc}}">
                            </div>
                            <div class="form-group">
                                <label>Rank</label>
                                <select class="form-control" name="rank">
                                    <option value="Chairman">Chairman</option>
                                    <option value="Vice-chair">vice-Chair</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ptaimage">File input</label>
                                <input type="file" id="ptaimage" name="image">
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





    