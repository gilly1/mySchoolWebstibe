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
                    {{__('Add New Board Member') }}
            </button>

            <!--Add Modal-->
            <div class="modal fade" id="modal-addMember">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add new Member</h4>
                    </div>
                    <div class="modal-body">
                         <!--BOARD-->
                        <h3>Board Members</h3>
                        <form method="POST" action="{{ route('board.store') }}" enctype="multipart/form-data" aria-label="{{ __('Save changes') }}">
                            @csrf
                                <div class="form-group">
                                    <label for="boardname">Name</label>
                                    <input type="text" class="form-control" id="boardname" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="boardDesc">Description</label>
                                    <input type="text" class="form-control" id="boardDesc" placeholder="Description" name="description">
                                </div>
                                <div class="form-group">
                                    <label>Rank</label>
                                    <select class="form-control" name="rank">
                                        <option selected disabled="disabled">Choose...</option>
                                        <option value="chairman">Chairman</option>
                                        <option value="vice-chair">vice-Chair</option>
                                        <option value="secretary">Secretary</option>
                                        <option value="member">Member</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="boardimage">File input</label>
                                    <input type="file" id="boardimage" name="image">
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
                    <h3 class="box-title">{{__('Board Members') }}</h3>
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
                                <a href="{{route('board.edit',$member->id)}}">
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
                                            <form method="POST" action="{{route('board.destroy',$member->id)}}">
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





    