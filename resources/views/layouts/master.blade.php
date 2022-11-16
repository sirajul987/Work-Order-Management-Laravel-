<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="simple to use and easy to customize.">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#1c90fb">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="admin/css/vendor.min.css">
    <link rel="stylesheet" href="admin/css/elephant.min.css">
    <link rel="stylesheet" href="admin/css/application.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body class="layout layout-header-fixed layout-sidebar-fixed">
    @include('layouts.header')
    <div class="layout-main">

    @include('layouts.sidebar')
      <div class="layout-content">
        <div class="layout-content-body">

        @yield('content')
          

        </div>
      </div>

      @include('layouts.footer')

    </div>
    
    <script src="admin/js/vendor.min.js"></script>
    <script src="admin/js/elephant.min.js"></script>
    <script src="admin/js/application.min.js"></script>
    
  </body>
</html>