<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Sunshine | @yield('title')</title>
    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
  </head>
  <body>
    <!-- Navbar -->
    @include('backend.layouts.partials.navbar')
    <!-- End Navbar -->
    <!-- Main content -->
    <div class="container-fluid main-content">
        <div class="row">
          
            <!-- Content -->
            <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('feature-title')</h1>
                    <small>@yield('feature-description')</small>
                </div>
                @include('backend.layouts.partials.error-message')
                @include('backend.layouts.partials.flash-message')
                @yield('main-content')
            </main>
            <!-- End content -->
        </div>
    </div>
    <!-- End main content -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Các custom script dành riêng cho từng view -->
    @yield('custom-scripts')
  </body>
</html>
