<!DOCTYPE html>
<html>

<head>
    @include('include.head')
    @yield('head')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('include.header')
        @include('include.sidebar')
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

@include('include.resources')

</body>

</html>
