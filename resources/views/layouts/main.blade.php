<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{asset('assets/style.css')}}">
		
		<!--[if lt IE 9]>
		<script src="{{ asset('assets/js/ie-support/html5.js')}}"></script>
		<script src="{{ asset('assets/js/ie-support/respond.js')}}"></script>
		<![endif]-->

     <style>
            .slider img {
                height: 550px;
            }
     </style>           
    </head>
</head>
<body>

@include('layouts.header')


@yield('content')


@include('layouts.footer')


@stack('scripts')



