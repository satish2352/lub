<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                <a class="sidebar-brand brand-logo" href="index.html"><img
                        src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img
                        src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="profile" />
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column pr-3">
                            <span class="font-weight-medium mb-2">Henry Klein</span>
                            <span class="font-weight-normal">$8,753.00</span>
                        </div>
                        <span class="badge badge-danger text-white ml-3 rounded">3</span>
                    </a>
                </li>
                @include('admin.layout.sidebar')
                @yield('content')
                @extends('admin.layout.footer')
