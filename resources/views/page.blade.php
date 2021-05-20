@extends('layouts.master')

@section('title', 'myPageTitleAgain')

@section('header')
    @parent
    <h2>Hi from child</h2>
@stop

@section('content')
    <h2>Content of generic page</h2>
@stop
