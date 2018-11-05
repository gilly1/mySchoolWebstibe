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

                            <h2>Send Message</h2>
                            <form method="POST" action="{{ route('store') }}" aria-label="{{ __('Send') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="form">
                                        <option selected disabled="disabled">Choose...</option>
                                        <option value="all">All Forms</option>
                                        <option value="Form1">Form 1</option>
                                        <option value="Form2">Form 2</option>
                                        <option value="Form3">Form 3</option>
                                        <option value="Form4">Form 4</option>
                                    </select>
                                <div class="form-group">
                                    <label for="article-ckeditors">{{ __('Description') }}</label>
                                    <textarea class="form-control"id="article-ckeditors" class="form-control" name="message" rows="10" cols="80"></textarea>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
                                </div>
                                </form>

                        </div>
                    </div>
            </section>
                <!-- /.content -->
        </div>
          <!-- /.content-wrapper -->
    
    
    
    
    
    @endsection
    
    
    
    
    
        