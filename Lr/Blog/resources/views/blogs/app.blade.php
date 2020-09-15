<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
 
    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
    <link href="/admin-style/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body>
    <div id="app">
        @include('blogs.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/admin-style/vendor/jquery/jquery.min.js"></script>
    {{-- <script src="/admin-style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Core plugin JavaScript-->
    <script src="/admin-style/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/admin-style/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/admin-style/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin-style/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/admin-style/js/demo/datatables-demo.js"></script>
</body>

</html>