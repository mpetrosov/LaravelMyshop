@extends('layout')

@section('title', 'Your Page')
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
            <a href="/signin" class="button-help">logout<i class="fas fa-sign-in-alt"></i></a>
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

@section('sidebar')

<h2>Groups</h2> 
    <div class="select">
        <select id="category-selector">
        <?php
        // $currentController = $_SERVER['SCRIPT_NAME'];
        // if (endsWith($currentController, 'index.php')) {
            ?>
            <option>All</option>
            <?php
        //}


        //foreach($arrGroups as $key=>$value){?>

            
                <option value="<?php //echo $value;?>" 
                    <?php //if (endsWith($currentController, $value)) { echo 'selected="selected"'; } ?>>
                    <?php //echo $key;?>
                </option>

        <?php //}?>
        </select>
    </div>

    <?php

    // echo $currentController;

    // if (endsWith($currentController, 'cars.php')) {
    //     $cars = getCars();
    //     foreach($cars as $car){?>
        <div class = "sub-category">
            <a href="cars.php?category=<?//=$car['name']?>"><?//=$car['name']?></a>
        </div>
        <?php //}
    //}

    // if (endsWith($currentController, 'bikes.php')) {
    //     $bikes = getBikes();
    //     foreach($bikes as $bike){?>
        <div class = "sub-category">
            <a href="bikes.php?category=<?//=$bike['name']?>"><?//=$bike['name']?></a>
        </div>
        <?php //}
    //}

    // if (endsWith($currentController, 'laptops.php')) {
    //     $laptops = getLaptops();
    //     foreach($laptops as $laptop){?>
        <div class = "sub-category">
            <a href="laptops.php?category=<?//=$laptop['name']?>"><?//=$laptop['name']?></a>
        </div>
        <?php //}
   // }

    // if (endsWith($currentController, 'tvs.php')) {
    //     $tvs = getTvs();
    //     foreach($tvs as $tv){?>
        <div class = "sub-category">
            <a href="#"><?//=$tv['name']?></a>
        </div>
        <?php// }
   // }
    ?>
    
@endsection