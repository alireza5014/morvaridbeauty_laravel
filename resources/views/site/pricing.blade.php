@extends('layouts.site.layout')

@section('header')

     <title>لیست قیمت های لیزر مروارید در شهر قدس  </title>
    <meta name="description" content="لیست  قیمت های لیزر - هزینه لیزر موهای زاید در شهر قدس ">
    <meta name="Keywords" content=" هزینه لیزر موهای زاید , قیمت های لیزر مروارید در شهر قدس"/>
     @parent

@endsection
@section('content')

 @include('site.pages.pricing')
@endsection
