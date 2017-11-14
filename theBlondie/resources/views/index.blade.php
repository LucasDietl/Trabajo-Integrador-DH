<?php require_once("../../html/soporte.php");?>
<?php
if($_POST){
    if($_POST["button"]){
        $auth->logout();
        header("location:home.php");exit;
    }};
?>
@extends('layout')
<!DOCTYPE html>
<html>
<head>
    @section('title')
    <title>The Blondie - Shoes</title>
        @endsection
</head>

<body class="bgcolorhome">

<!-- NOTE: Navbar start -->
@section('navbar')
<?php require_once("../../html/navbar.php"); ?>
@endsection
<!-- NOTE: Navbar end -->

<!-- NOTE: introduccion start -->
@section('content')
<div class="slideimages" style="display: flex;">
    <div class="slideshow" style="">
        <img src="{{asset('images/dorada.jpg')}}" class="izquierda"style="" alt="">
        <img src="{{asset('images/blackwhite.jpg')}}" class="derecha" alt="">
        <img src="{{asset('images/comingsoon.jpg')}}" class="medio" alt="">
        <img src="{{asset('images/skate.jpg')}}" class="izquierda" alt="">
        <img src="{{asset('images/piernasyzapatos.jpg')}}" class="derecha" alt="">
        <img src="{{asset('images/cactuswide.jpg')}}" class="medio" alt="">
    </div>
</div>
@endsection
<!-- NOTE: introduccion end -->

<!-- NOTE: Footer start -->
@section('footer')
<?php require_once("../../html/footer.php"); ?>
@endsection
<!-- NOTE: Footer end -->


</body>
</html>
