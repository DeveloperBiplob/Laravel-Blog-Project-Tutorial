@extends('Backend.Layouts.backend_app')
@section('Backend-app-content')
<div class="wrapper">
    <!-- Navbar -->
      @include('Backend.Partials.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
      @include('Backend.Partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              @yield('backend-master-content')
          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('Backend.Partials.footer')
  </div>
@endsection
