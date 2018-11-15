@extends('product-layout')
@section('other_styles')
    <link rel="stylesheet" href="../../css/main.css">
    {{-- You can load any other stylesheets --}}
@endsection
@section('scripts')
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
    <script src="../../js/login.js"></script>
@endsection
@section('title', 'Laptops')
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
    @section('product-container')
    <div class="product-sidebar">
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

                    
                        <option value="cars">cars</option>
                        <option value="bikes">bikes</option>
                        <option value="laptops">laptops</option>
                        <option value="tvs">tvs</option>

                </select>
            </div>

            
        </div>
        <div class="product-content">
            <div class="sub-header">Laptops</div>
            @foreach ($laptop_models as $laptop_model)
               
                <div class="product-view">
                    <h3>{{$laptop_model->name}}</h3>
                    <p> {{$laptop_model->id}}</p>
                    <p>Price: {{$laptop_model->price}}</p>
                    <p>Processor: {{$laptop_model->processor}}</p>
                    <p>Ram: {{$laptop_model->ram}}</p>
                    <p>Storage capacity: {{$laptop_model->storageCapacity}}</p>
                </div>
            @endforeach  
        </div>
    @endsection
            
    
