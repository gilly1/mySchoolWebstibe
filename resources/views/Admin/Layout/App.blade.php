<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('Admin/inc/head')
        @section('headSection')
            @show
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('Admin/inc/nav')
    @include('Admin/inc/sidebar')
    <div id="app">
        <div class="content-section">

            @section('content')
                @show
        </div>
        
    </div>
    @include('Admin/inc/footer')
    @include('Admin/inc/controlSidebar')

    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
        CKEDITOR.replace( 'article-ckeditor2' );
    </script>
</body>
</html>

