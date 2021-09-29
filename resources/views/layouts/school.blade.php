<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Daarul - Website">
    <meta name="author" content="Felix">
    <meta name="keywords" content="">
    <link rel="icon" href="{{url('/')}}/assets/img/icon.png">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/button.min.css">

    @yield('template_linked_css')
</head>

<body>
<div class="wrapper">
    @include('partials.header')
    <!--header end-->
        <div class="responsive-menu">
            <ul>
                @include('partials.menu')
            </ul>
        </div>

    @yield('content')
    <!--newsletter-sec end-->
    @include('partials.footer')
    <!--footer end-->
</div>

@if(config('settings.googleMapsAPIStatus'))
    {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
@endif

@yield('footer_scripts')

<script src="{{url('/')}}/assets/js/bundle.min.js"></script>


</html>
