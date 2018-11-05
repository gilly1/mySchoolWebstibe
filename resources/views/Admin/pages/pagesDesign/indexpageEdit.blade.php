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
    
           <div class="row">
               <div class="col-md-6">
                   <h2>Cover Images</h2>

                   <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                                @foreach($coverimage as $coverimage)
                                <tr>
                                    <td>{{$coverimage->desc}}</td>
                                    <td>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#coverImages">
                                            <i class="fa fa-trash"></i>
                                        </button>
        
                                            <!-- Delete modal -->
        
                                        <div class="modal fade" id="coverImages">
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
                                                    <form method="POST" action="{{route('coverimage.destroy',$coverimage->id)}}">
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
               </div>
               <div class="col-md-6">
                   <h2>Front Gallery</h2>

                   <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                                @foreach($Coverpagegallery as $Coverpagegallery)
                                <tr>
                                    <td>{{$Coverpagegallery->desc}}</td>
                                    <td>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#frontGallery">
                                            <i class="fa fa-trash"></i>
                                        </button>
        
                                            <!-- Delete modal -->
        
                                        <div class="modal fade" id="frontGallery">
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
                                                    <form method="POST" action="{{route('covergallery.destroy',$Coverpagegallery->id)}}">
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
               </div>
           </div>


           <div class="row">
               <div class="col-md-6">
                    <h2>Jumbotron</h2>

                    <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                    @foreach($jumbotron as $jumbotron)
                                    <tr>
                                        <td>{{$jumbotron->title}}</td>
                                        <td>
                                            <a href="{{route('jumbotron.edit',$jumbotron->id)}}">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-editMember">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#jumbotron">
                                                <i class="fa fa-trash"></i>
                                            </button>
            
                                                <!-- Delete modal -->
            
                                            <div class="modal fade" id="jumbotron">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Delete Confirmation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure to delete {{$jumbotron->title}}?</p>                            
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                                                        <form method="POST" action="{{route('jumbotron.destroy',$jumbotron->id)}}">
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
                    </div>
                    <div class="col-md-6">
                        <h2>Why Us</h2>
                        <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                        @foreach($Whyus as $Whyus)
                                        <tr>
                                            <td>{{$Whyus->title}}</td>
                                            <td>
                                            <td>
                                                <a href="{{route('whyus.edit',$Whyus->id)}}">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-editMember">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#whyus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                
                                                    <!-- Delete modal -->
                
                                                <div class="modal fade" id="whyus">
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
                                                            <form method="POST" action="{{route('whyus.destroy',$Whyus->id)}}">
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h2>Counter</h2>
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                    @foreach($Counter as $Counter)
                                    <tr>
                                        <td>{{$Counter->name}}</td>
                                        <td>
                                            <a href="{{route('counter.edit',$Counter->id)}}">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-editMember">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#counter">
                                                <i class="fa fa-trash"></i>
                                            </button>
            
                                                <!-- Delete modal -->
            
                                            <div class="modal fade" id="counter">
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
                                                        <form method="POST" action="{{route('counter.destroy',$Counter->id)}}">
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
                    </div>
                </div>

    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      




@endsection