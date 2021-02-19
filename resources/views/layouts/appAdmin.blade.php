<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Agape | Administrador')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/faviconAgapect/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/faviconAgapect/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/faviconAgapect/favicon-16x16.png">
    <link rel="manifest" href="img/faviconAgapect/site.webmanifest">
    <link rel="mask-icon" href="img/faviconAgapect/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/faviconAgapect/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="img/faviconAgapect/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- iconos -->
    <link rel="stylesheet" href="fontawesome-free/css/all.css">
    <!-- tables -->
    <link href="tables/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="tables/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body>
<!--::header part start::-->
@if( Auth::User()->rol == 'user_admin')
    @include('admin.navAdmin')
@else
    @include('admin.navClient')
@endif
<!-- Header part end-->

@yield('content')

<!-- subscribe part end -->

<!--::footer_part start::-->
<footer class="footer_part">
    {{--    <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="img/ÁGAPE_logo-2.png" height="100" width="100" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="product_list.html">Products</a>
                                <a href="#">Pages</a>
                                <a href="blog.html">Blog</a>
                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}

    <div class="copyright_part" style="margin-top: 20px;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <a href="/"><img src="img/logo_agapect.jpeg" height="50" width="50" alt="#"></a> Agapect &copy;<script>document.write(new Date().getFullYear());</script> | Derechos reservados <i class="ti-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        <div class="col-lg-4">
                            <div class="social_icon">
                                <a href="https://www.facebook.com/agapectg" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/agapectg/" target="_blank"><i class="fab fa-instagram"></i></a>
                                {{--<a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- table -->
<script src="tables/vendor/jquery/jquery.min.js"></script>
<script src="tables/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="tables/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="tables/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="tables/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="tables/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="tables/js/demo/datatables-demo.js"></script>

<!-- jquery plugins here-->
{{--<script src="js/jquery-1.12.1.min.js"></script>--}}
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- magnific popup js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- carousel js -->
<script src="js/owl.carousel.min.js"></script>
{{--<script src="js/jquery.nice-select.min.js"></script>--}}
<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>



</body>

</html>
