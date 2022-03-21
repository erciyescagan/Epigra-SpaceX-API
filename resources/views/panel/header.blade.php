<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Çekiliş</title>

    <meta name="keywords" content="Çekiliş" />

    <meta name="description" content="Çekiliş" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('panel-assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('panel-assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('panel-assets/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('panel-assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('panel-assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block"><strong>Menü</strong></div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>ÇY</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Logout    -->
                        <li class="nav-item"><a href="admin/panel" class="nav-link logout"> <span class="d-sm-inline">Admin Panel</span><i class="fa fa-sign-in"></i></a></li>
                        <li class="nav-item"><a href="logout" class="nav-link logout"> <span class="d-none d-sm-inline">Çıkış Yap</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="{{asset('panel-assets/img/avatar-11.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">erciyescagan</h1>
                    <p>Kredi: 100</p>
                    <p><b>Normal Üye</b></p>
                </div>
            </div>
            <span class="heading">Menüler</span>
            <ul class="list-unstyled">
                <li class="nav-item<?php if(strstr($_SERVER['REQUEST_URI'], "panel")){echo ' active';}?>">
                    <a class="nav-link" href="panel">Panel <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item<?php if(strstr($_SERVER['REQUEST_URI'], "my-draws")){echo ' active';}?>">
                    <a class="nav-link" href="my-draws">Çekilişlerim</a>
                </li>
                <li class="nav-item<?php if(strstr($_SERVER['REQUEST_URI'], "payment")){echo ' active';}?>">
                    <a class="nav-link" href="payment">Kredi Yükle</a>
                </li>
                <li class="nav-item<?php if(strstr($_SERVER['REQUEST_URI'], "premium")){echo ' active';}?>">
                    <a class="nav-link" href="premium">Premium Ol</a>
                </li>
                <li class="nav-item<?php if(strstr($_SERVER['REQUEST_URI'], "settings")){echo ' active';}?>">
                    <a class="nav-link" href="settings">Ayarlar</a>
                </li>
            </ul>
        </nav>
        <div class="content-inner">
