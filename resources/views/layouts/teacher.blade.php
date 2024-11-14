<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ASMSY Teacher Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    
@include('layouts.head')

</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
   
       @include('layouts.teachernav_bar')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           
@include('layouts.teacherside_bar')


            <!-- Sidebar Area End Here -->
            @yield('contents')
               
            @include('layouts.footer')
                
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    
     @include('layouts.jquery')
</body>

</html>