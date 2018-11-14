
@include('partials._head')

<body>
    <div class="header">
       @yield('header')
    </div>
    <div class="content">
        @yield('content')
    </div>
    
    <?php
// include_once('conf.php');
// include_once('connect.php');
// include_once('functions.php');



// $arrGroups = ['cars'=>'cars.php', 'bikes'=>'bikes.php','laptops'=>'laptops.php','tvs'=>'tvs.php'];
   
?>
<div class="sidebar">
    @yield('sidebar')
</div>
@include('partials._footer')








