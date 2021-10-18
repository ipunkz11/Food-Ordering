<!DOCTYPE html>
<html>
@include('layouts.order.head')
<body>
    <div class="wrapper">
        <!-- Header part  -->
        @include('layouts.order.breadcumb')
    <!-- End Header Main, logo, search bar,cart -->

    <div class="header-navigation">
        @include('layouts.order.navbar') <!-- End Navigation header -->

</div>
<!-- Header part  -->


<div class="content-area">
    @include('pages.order.slider') <!-- End Main slider class -->


@yield('products')
@yield('cart') 
@yield('checkout')<!-- End Latest products -->
</div> <!-- End content Area class -->


@include('layouts.order.footer')
</body>
</html>