<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang Chủ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

 
    @include('components.link')
</head>

<body>
    @include('components.topbar')
 <!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                data-toggle="collapse" href="#navbar-vertical"
                style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                id="navbar-vertical">     @foreach ($thuonghieus as $thuonghieu)   
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                                
                        <a href="" class="nav-item nav-link" >{{ $thuonghieu->tenthuonghieu }}</a>
                                
                </div>@endforeach      
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{URL::to('') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{URL::to('/shop') }}" class="nav-item nav-link">Shop</a>
                        <a href="{{URL::to('/detail') }}" class="nav-item nav-link">Shop Detail</a>               
                        <a href="{{URL::to('/cart') }}" class="nav-item nav-link">Shopping Cart</a>
                        <a href="{{URL::to('/checkout') }}" class="nav-item nav-link">Checkout</a>
                        <a href="{{URL::to('/contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <?php
                        $data=Session::get('data');
                        ?>
                        @if($data=="")
                        <a href="{{URL::to('/login') }}" class="nav-item nav-link">Đăng nhập</a>
                        <a href="{{URL::to('/register') }}" class="nav-item nav-link">Đăng kí</a>
                
                    </div>
                    @else<div class="navbar-nav ml-auto py-0">
                        <a class="nav-item nav-link">Xin chào {{$data->fullname??""}}</a>
                        <a href="{{URL::to('/logout') }}" class="nav-item nav-link">Đăng Xuất</a>
                    </div>
                    @endif
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('frontend/img/carousel-1.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First
                                    Order</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                <a href="{{URL::to('/shop') }}" class="btn btn-light py-2 px-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="{{asset('frontend/img/carousel-2.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First
                                    Order</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                <a href="{{URL::to('/shop') }}" class="btn btn-light py-2 px-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->
    @include('components.featured')
 
    @include('components.offer')
    @include('components.product')
    @include('components.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

 
</body>

</html>