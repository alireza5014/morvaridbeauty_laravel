@extends('layouts.site.layout')

@section('header')

     <title> خدمات کلینیک مروارید شهر قدس</title>
    <meta name="description" content="برخی از  خدمات کلینیک مروارید شهر قدس">
    <meta name="Keywords" content=" خدمات کلینیک مروارید شهر قدس"/>
     @parent

@endsection
@section('content')

  @include('site.pages.services')
@endsection
