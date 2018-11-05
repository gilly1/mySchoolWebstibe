@extends('Admin/Layout.App')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (page header) -->
        <section class="content-header">
            <h1>
            Page Header
            <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">News</li>
            </ol>
        </section>
        
        <!-- Main content -->
        <section class="content container-fluid">
                @include('Admin/inc/message')
            <div class="row">

                <div class="col-md-6">
                        <a href="{{route('eventadmin.add')}}" class="btn btn-primary">Add</a>
                    <div class="form-group">
                        <label>{{ __('Page Name') }}</label>
                        <table class="table table-striped">
                             <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                @foreach($events as $event)
                                <td>{{$event->title}}</td>
                                <td>
                                    <a href="{{route('eventadmin.edit',$event->id)}}">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa fa-pencil fa-fw"></i>
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
                                                <p>Are you sure to delete?</p>                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                                                <form method="POST" action="{{route('eventadmin.destroy',$event->id)}}">
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
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>



                <div class="col-md-6">
                    
                </div>
            </div>

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection