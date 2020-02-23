<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AJAX</title>
    <!-- Fonts -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swal.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sparx/css/par-style.css')}}" />
    <link rel="stylesheet" href="{{ asset('sparx/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('sparx/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('sparx/css/jquery.mmenu.all.css')}}" />

<link rel="stylesheet" href="{{ asset('sparx/styleswitcher/css/styleswitcher.css')}}">
</head>
