<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - Append Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/mystyle.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Updated: Mar 10 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  @include('components.header')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="login-container">
            <form class="login-form" method="POST" action="{{ url('saveregister') }}">
                @csrf
                <h1>Welcome Back</h1>
                <p>Please login to your account</p>
                <div class="input-group">
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>

                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="input-group">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <button type="submit">Login</button>
                <div class="bottom-text">
                <p>Don't have an account? <a href="/login">register</a></p>
                <p><a href="#">Forgot password?</a></p>
                </div>
            </form>
    </div>
        </div>    
    </div>
</div>
@include('components.footer')