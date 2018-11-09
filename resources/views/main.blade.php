
@extends('layout')

@section('title', 'Home')
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
@section('content')
    <div class="sub-content">
        <h2>Cars</h2>
         @foreach ($car_brands as $car_brand)
            <div class="sub-content">
                    <a href="cars.php?category=<?php $car_brand->name; ?>"><li>{{$car_brand->name}}</li> </a>
            </div>
        @endforeach
    </div>
    <div class="sub-content">    
        <h2>Bikes</h2>
         @foreach ($bike_brands as $bike_brand)
            <div class="sub-content">
                    <a href="bikes.php?category=<?php $bike_brand->name; ?>"><li>{{$bike_brand->name}}</li> </a>
            </div>
        @endforeach
    </div>
        <div class="sub-content"> 
        <h2>Laptops</h2>
          @foreach ($laptop_brands as $laptop_brand)
            <div class="sub-content">
                    <a href="laptops.php?category=<?php $laptop_brand->name; ?>"><li>{{$laptop_brand->name}}</li> </a>
            </div>
        @endforeach
    </div>
    <div class="sub-content"> 
        <h2>TVs</h2>
      
         @foreach ($tv_brands as $tv_brand)
            <div class="sub-content">
                    <a href="tvs.php?category=<?php $tv_brand->name; ?>"><li>{{$tv_brand->name}}</li> </a>
            </div>
        @endforeach
        </div>
    </div>
@endsection

