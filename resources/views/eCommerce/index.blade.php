@extends('layouts_main.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@include('layouts_main.slider')
@include('layouts_main.why')

@include('layouts_main.arrival')

@include('layouts_main.product')

@include('layouts_main.subscribe')

@include('layouts_main.comments')





@endsection

@section('script')


