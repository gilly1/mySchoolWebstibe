<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

       
    @include('inc/head')
        @section('headSection')
            @show
</head>
<body>

    @section('fbSection')
        @show
    <div>
        @include('inc/nav')
        <div id="app">
            <div class="content-section">

                @section('content')
                    @show
            </div>
            
        </div>
        @include('inc/footer')
    </div>
</body>
</html>
