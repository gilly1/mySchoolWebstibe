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

            <div class="row">

                <a href="{{route('overview.add')}}" class="btn btn-primary">Add</a>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('Page Name') }}</label>
                        <table>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$page->pages}}</td>
                                <td>
                                    <a href="{{route('overview.edit',$page->pages)}}">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa fa-pencil fa-fw"></i>
                                        </button>
                                    </a>                                
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