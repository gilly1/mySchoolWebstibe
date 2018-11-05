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

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-addMember">
                    {{__('Add New Non-Teaching Staff') }}
            </button>

            <!--Add Modal-->
            <div class="modal fade" id="modal-addMember">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add new Staff</h4>
                    </div>
                    <div class="modal-body">
                         <!--Workers-->
                        <h3>Non-Teaching Staff</h3>
                        <form method="POST" action="{{ route('workers.store') }}" enctype="multipart/form-data" aria-label="{{ __('Save changes') }}">
                            @csrf
                                <div class="form-group">
                                    <label for="workersname">Name</label>
                                    <input type="text" class="form-control" id="workersname" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="workersDesc">Description</label>
                                    <input type="text" class="form-control" id="workersDesc" placeholder="Description" name="description">
                                </div>
                                <div class="form-group">
                                    <label for="workersimage">File input</label>
                                    <input type="file" id="workersimage" name="image">
                                </div>

                            <input type="submit" class="btn btn-primary" value="{{__('Save changes') }}" >
                        </form>
                    </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </div>
           
            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{__('Non-Teaching Staff') }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                        @foreach($members as $member)
                        <tr>
                            <td>{{$member->name}}</td>
                            <td>
                                <img src="" alt="" class="img-responsive">
                            </td>
                            <td>
                                <a href="{{route('workers.edit',$member->id)}}">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-editMember">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-deleteMember">
                                    <i class="fa fa-trash"></i>
                                </button>

                                    <!-- Delete modal -->

                                <div class="modal fade" id="modal-deleteMember">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure to delete {{$member->name}}?</p>                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                                            <form method="POST" action="{{route('workers.destroy',$member->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Yes" class="btn btn-primary">
                                            </form>
                                        </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

                

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection





    