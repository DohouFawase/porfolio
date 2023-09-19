<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="My porfoli Website" />
    <meta name="keywords" content="Fawase Dohou, usercode, ondevfam, Gbênoupko">
    <title>@yield('title') | Admin</title>
    @include('components.admin.header.header')
</head>
<body>
   
     <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
    @include('components.admin.header.aside')
         <!-- Menu -->

         <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar --->
        @include('components.admin.header.nav')
              <!-- Content wrapper -->
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">

             @if (session('success'))
                 
         <div class="alert alertet-success">
            {{session('success')}}
         </div>
                 
             @endif

                
                    @yield('content')
                </div>
            </div>
        </div>      
    </div>
</div>







    @include('components.admin.header.script')
</body>
</html>