@extends('layout')
@section('other_styles')
    <link rel="stylesheet" href="../css/main.css">
    {{-- You can load any other stylesheets --}}
@endsection
@section('title', 'Cars')
@section('header')
    <div class="logo">
        <div class="name">
            <a href="/"> <h1 class="grass">My Little Shop.com</h1></a>
        </div>
        <div class="help">
            <a href="/help" class="button-help">help <i class="fas fa-info-circle"></i></a>
        </div>
        <div class="message">
            <a href="/messages" class="button-help">messages<i class="fas fa-comments"></i></a>
        </div>
        <div class="login">
            <a href="/login" class="button-help">login<i class="fas fa-sign-in-alt"></i></a>
        </div>
        <div class="shopcar">
            <a href="/shopcar" class="button-help">cart<i class="fas fa-shopping-cart"></i></a>
        </div>
        <div class="searchBox">
            <form action="/search" method="POST">
                <input type="text" id="searchBar" name="search" placeholder="Search ..." maxlength="25" autocomplete="off">
                <input class="searchBtn" type="submit" value="GO!" name="searchBtn">
            </form>
        </div>            
    </div>
@endsection
