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
                        
                    <form method="POST" action="{{route('whyus.update',$whyus->id)}}" aria-label="{{ __('Update') }}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="schhead">Title</label>
                            <input type="text" class="form-control" id="schhead" placeholder="Title"name="title" value="{{$whyus->title}}">
                        </div>
                        <div class="form-group">
                            <label for="article-ckeditor">{{ __('Description') }}</label>
                            <textarea class="form-control"id="article-ckeditor" class="form-control" name="body">{{$whyus->body}}</textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-6"></div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="/indexPageEdit" class="btn btn-primary">Back</a>
                </div>
            </div>

        </section>
            <!-- /.content -->
    </div>
      <!-- /.content-wrapper -->





@endsection