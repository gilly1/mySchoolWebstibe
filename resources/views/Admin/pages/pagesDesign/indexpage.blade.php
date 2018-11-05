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
    
            <!--coverImages-->
            <a href="/indexPageEdit" class="btn btn-primary">Edit Index Page</a>
            <div class="row">
                <div class="col-md-6">
                    <h2>Cover Images</h2>
                    <form method="POST" action="{{ route('coverimage.store') }}" enctype="multipart/form-data" aria-label="{{ __('Save') }}">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="schhead">Description</label>
                            <input type="text" class="form-control" id="schhead" placeholder="description" name="desc">
                        </div>
                        
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>

                </div>

                <!--Front Page Gallery-->
                <div class="col-md-6">
                    <h2>Front Page Gallery</h2>
                    <form method="POST" action="{{ route('covergallery.store') }}" enctype="multipart/form-data" aria-label="{{ __('Save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Image No</label>
                            <select class="form-control" name="forunique">
                                <option selected disabled="disabled">Choose...</option>
                                <option value="image1">image 1</option>
                                <option value="image2">image 2</option>
                                <option value="image3">image 3</option>
                                <option value="image4">image 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="schhead">Description</label>
                            <input type="text" class="form-control" id="schhead" placeholder="description" name="desc">
                        </div>
                        
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>

            <!--Jumbotron-->
            <div class="row">
                <div class="col-md-6">
                    <h2>Jumbtron</h2>
                    <form method="POST" action="{{ route('jumbotron.store') }}" aria-label="{{ __('Save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Jumbotron</label>
                            <select class="form-control" name="forunique">
                                <option selected disabled="disabled">Choose...</option>
                                <option value="value1">Value 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="schhead">Title</label>
                            <input type="text" class="form-control" id="schhead" placeholder="Title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="article-ckeditor">{{ __('Description') }}</label>
                            <textarea class="form-control"id="article-ckeditor" class="form-control" name="body" name="body" value=""></textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>

                </div>

                <!--Accordion-->
                <div class="col-md-6">
                    <h2>Why Us</h2>
                    <form method="POST" action="{{ route('whyus.store') }}" aria-label="{{ __('Save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="forunique">
                                <option selected disabled="disabled">Choose...</option>
                                <option value="value1">Value 1</option>
                                <option value="value2">Value 2</option>
                                <option value="value3">Value 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="schhead">Title</label>
                            <input type="text" class="form-control" id="schhead" placeholder="Title"name="title">
                        </div>
                        <div class="form-group">
                            <label for="article-ckeditor2">{{ __('Description') }}</label>
                            <textarea class="form-control"id="article-ckeditor2" class="form-control" name="body" name="body" value=""></textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                    
                </div>
            </div>

            

            <!--school numbers-->
            <div class="row">
                <div class="col-md-6">
                    <h2>Counter</h2>
                    <form method="POST" action="{{ route('counter.store') }}" aria-label="{{ __('Save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="forunique">
                                <option selected disabled="disabled">Choose...</option>
                                <option value="value1">Value 1</option>
                                <option value="value2">Value 2</option>
                                <option value="value3">Value 3</option>
                                <option value="value4">Value 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" class="form-control" id="value" placeholder="Value" name="value">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    
                </div>
            </div>
    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->





@endsection