<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../admin/assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  
  <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


  <!-- CSS Files -->
  <link href="{{ asset('admin/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet">
  <!-- Mystyle  -->
  <link href="{{ asset('admin/assets/css/mystyle_admin.css') }}" rel="stylesheet">
</head>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

<!-- Sidebar Start -->
@include('admin.components.sidebar')
<!-- Sidebar End -->
  <main class="main-content position-relative border-radius-lg ">
    <!-- Top Navbar Start -->
    @include('admin.components.top_navbar')
    <!-- Top Navbar End -->