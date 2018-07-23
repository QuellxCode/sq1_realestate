<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('user.include.head')
</head>
<body>
<div id="fakeLoader"></div>
<div class="wrapper white_bg">
@include('user.include.header')
@yield('content')
@include('user.include.footer')


</body>

</html>