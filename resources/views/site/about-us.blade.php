@extends('layouts.site.layout')

@section('header')

     <title>  درباره نرم مرکز لیزر شهر قدس (قلعه حسن خان)</title>
    <meta name="description" content="درباره نرم مرکز لیزر شهر قدس ">
    <meta name="Keywords" content="درباره نرم مرکز لیزر شهر قدس "/>
     @parent

@endsection
@section('content')

 @include('site.pages.about-us')
@endsection
