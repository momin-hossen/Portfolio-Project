@extends('layouts.layouts_admin')
@section('content')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboardd') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">About</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <h2>Hello About</h2>
</main><!-- End #main -->
@endsection
  

  