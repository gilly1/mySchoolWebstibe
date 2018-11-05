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
            <h2>Edit</h2>
            <div class="row">
                <div class="col-md-6">
                        
                    <form method="POST" action="{{route('academicsadmin.update',$academics->link)}}" enctype="multipart/form-data"  aria-label="{{ __('Update') }}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="heading">{{ __('Heading') }}</label>
                            <input type="text" class="form-control" id="heading" placeholder="Enter the Title" name="heading" value="{{$academics->title}}">
                        </div>
                        <div class="form-group">
                            <label for="headingmessage">{{ __('Heading Message') }}</label>
                            <input type="text" class="form-control" id="headingmessage" placeholder="Enter the Message" name="headingmessage" value="{{$academics->titlemesso}}">
                        </div>
                        <div class="form-group">
                            <label for="article-ckeditor">{{ __('Body') }}</label>
                            <textarea class="form-control"id="article-ckeditor" class="form-control" name="body">{{$academics->body}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">File input</label>
                            <input type="file" id="image" name="image">
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>

                    </form>
                </div>

                
                <div class="col-md-6" style="background-color:white; min-height:70vh;">

                    <div class="rightSide-content">
                        <h1 style="text-align:center;">{{$academics->title}}</h1>
                        <h4>{{$academics->titlemesso}}</h4>
                        <hr>
                        <img src="/storage/thumbnails/{{$academics->image}}" alt="">
                        <p>{!!$academics->body!!}</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('academicsadmin.view') }}" class="btn btn-primary">Back</a>
                </div>
            </div>

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection