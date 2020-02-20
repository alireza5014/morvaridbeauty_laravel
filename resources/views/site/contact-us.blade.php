@extends('layouts.site.layout')

@section('header')
    <link rel="stylesheet" href="{{url('wp-content/vendors/ladda-button/css/ladda-themeless.min.css')}}">
    <link rel="stylesheet" href="{{url('wp-content/vendors/toastr/css/toastr.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>تماس با کلینیک لیزر موهای زاید شهر قدس</title>
    <meta name="description" content="برای ارتباط با مدیریت می توانیداز طریق فرم زیر اقدام نمایید">
    <meta name="Keywords" content="تماس با ما , ازسال نظر ,     تماس با کلینیک لیزر موهای زاید شهر قدس"/>
     @parent

@endsection
@section('content')
@include('site.pages.contact-us')

@endsection
