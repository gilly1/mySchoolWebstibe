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
            <li class="active">Parents</li>
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
                        <form method="POST" action="{{ route('newsparents.store') }}" aria-label="{{ __('Save changes') }}">
                            @csrf
                                <div class="form-group">
                                    <label>Platform</label>
                                    <select class="form-control" name="platform">
                                        <option value="facebook">facebook</option>
                                        <option value="twitter">twitter</option>
                                        <option value="instagram">instagram</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="boardname">Link</label>
                                    <input type="text" class="form-control" id="boardname" placeholder="Name" name="link">
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
                    <h3 class="box-title">{{__('All Links') }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                        @foreach($links as $link)
                        <tr>
                            <td>{{$link->link}}</td>
                            <td>
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
                                            <p>Are you sure to delete {{$link->link}}?</p>                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                                            <form method="POST" action="{{route('newsparents.destroy',$link->id)}}">
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





    