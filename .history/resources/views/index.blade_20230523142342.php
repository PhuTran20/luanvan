<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang Chủ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
    @include('components.link')
</head>

<body>
    @include('components.topbar')
    <!-- Navbar Start -->
 
  
    @include('components.navbar')
    @include('components.featured')
 
    @include('components.offer')
    @include('components.product')
    @include('components.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     
   <!-- Libraries Stylesheet -->
   <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

 
       <!-- Contact Javascript File -->
       <script src="{{asset('frontend/js/jqBootstrapValidation.min.js')}}"></script>
       <script src="{{asset('frontend/js/contact.js')}}"></script>
   
       <!-- Template Javascript -->
       <script src="{{asset('frontend/js/main.js')}}"></script>
       <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
       <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
 
</body>

</html>