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
                                <p>Are you sure to delete All Members?</p>                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                                <form method="POST" action="{{route('destroy')}}">
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
            
           
            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{__('Numbers for Form One Parents') }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                    <tr>
                        <th>Adm</th>
                        <th>Name</th>
                    </tr>
                        @foreach($members as $member)
                        <tr>
                            <td>{{$member->adm}}</td>
                            <td>{{$member->name}}</td>
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





    