<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--
    <link rel="apple-touch-icon" tailles="57x57" href="{{asset('images/flavicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" tailles="60x60" href="{{asset('images/flavicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" tailles="72x72" href="{{asset('images/flavicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" tailles="76x76" href="{{asset('images/flaviconimages/flavicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" tailles="114x114" href="{{asset('images/flavicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" tailles="120x120" href="{{asset('images/flavicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" tailles="144x144" href="{{asset('images/flavicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" tailles="152x152" href="{{asset('images/flavicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" tailles="180x180" href="{{asset('images/flavicon/apple-icon-180x180.png')}}">
    <lien rel="icon" type="image/png" tailles="192x192" href="{{asset('images/flavicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" tailles="32x32" href="{{asset('images/flavicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" tailles="32x32" href="{{asset('images/flavicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" tailles="96x96" href="{{asset('images/flavicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" tailles="16x16" href="{{asset('images/flavicon/favicon-16x16. png')}}">

        <link rel="manifest" href="{{asset('images/flavicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="# ffffff">
        <meta name="msapplication-TileImage" content="{{asset('images/flavicon/ms-icon-144x144.png')}}">
        -->
    <meta name="thème couleur" content="# ffffff">
    <link href="{{ asset('css/taildwindcss.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('feather-icons/feather.css') }}" rel="stylesheet">
     <script src="{{asset('/js/jquery.js')}}" defer></script>
    <script src="{{asset('/js/slick.min.js')}}" defer></script>
    <script src="{{asset('/js/wow.min.js')}}" defer></script>
    <script src="{{asset('/js/own.js')}}" defer></script>

    <title>{{config('app.name')}}</title>
</head>
<body class="">
