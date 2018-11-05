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
                <h3>Board Members</h3>
                <div class="row">
                    <div class="col-md-6">
                            
                        <form method="POST" action="{{route('formThree.update',$number->id)}}"  aria-label="{{ __('Update') }}">
                            @csrf
                            @method('PATCH')
                            
                            <div class="form-group">
                                    <label for="admNo">Admission number</label>
                                    <input type="text" class="form-control" id="admNo" placeholder="Admission number" name="adm" value="{{$number->adm}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Parent/Gurdian Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$number->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="telno">Telephone Number</label>
                                    <input type="text" class="form-control" id="telno" placeholder="Telephone Number" name="telNo" value="{{$number->telNo}}">
                                </div>

                            <input type="submit" class="btn btn-primary" value="{{__('Save changes') }}" >
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
               

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection





    