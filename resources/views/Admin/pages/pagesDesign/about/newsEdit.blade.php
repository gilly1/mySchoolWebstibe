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
            <li class="active">News edit</li>
            </ol>
        </section>
        
        <!-- Main content -->
        <section class="content container-fluid">
                @include('Admin/inc/message')
            <h2>Edit</h2>
            <div class="row">
                <div class="col-md-6">
                        
                    <form method="POST" action="{{route('eventadmin.update',$events->title)}}" enctype="multipart/form-data"  aria-label="{{ __('Update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                                <label for="title">{{ __('title') }}</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter the Title" name="title" value="{{$events->title}}">
                            </div>
                            <div class="form-group">
                                <label for="date">{{ __('Date') }}</label>
                                <input type="text" class="form-control" id="date" placeholder="Enter the Message" name="date" value="{{$events->date}}">
                            </div>
                            <div class="form-group">
                                <label for="article-ckeditor">{{ __('Description') }}</label>
                                <textarea class="form-control"id="article-ckeditor" class="form-control" name="body" name="body">{{$events->body}}</textarea>
                            </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>

                    </form>
                </div>

                
                <div class="col-md-6" style="background-color:white; min-height:70vh;">

                    <div class="rightSide-content">
                        <h1 style="text-align:center;">{{$events->title}}</h1>
                        <h4>{{$events->date}}</h4>
                        <hr>
                        <p>{!!$events->body!!}</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('eventadmin.view') }}" class="btn btn-primary">Back</a>
                </div>
            </div>

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection