@extends('layouts.app')
@section('title')
    Users
@endsection

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        @include('dashboard.row1')
      <!-- /.row -->

      @include('dashboard.row2')
      <!-- /.row -->

      <!-- Main row -->
      @include('dashboard.row3')
      <!-- /.row -->
    </section>
@endsection
@section('page_scripts')
    <script>
      let userUrl = '{{url('users')}}/'
    </script>
    <script src="{{ asset('assets/users/user.js') }}"></script>
    {!! $data['phChart']->script() !!}
    {!! $data['kelembabanChart']->script() !!}
@endsection


