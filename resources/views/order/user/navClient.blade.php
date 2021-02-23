<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{route('products')}}"> <img src="{{asset('img/ÁGAPE_logo.png')}}" width="160" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products')}}">Productos</a>
                            </li>
                            <!--                            <li class="nav-item">
                                                            <a class="nav-link" href="about.html">about</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                product
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                                                <a class="dropdown-item" href="product_list.html"> product list</a>
                                                                <a class="dropdown-item" href="single-product.html">product details</a>

                                                            </div>
                                                        </li>-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mis compras
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <!--                                    <a class="dropdown-item" href="login.html">login</a>-->
                                    <a class="dropdown-item" href="{{ route('cart') }}">Lista del carrito</a>
                                    <a class="dropdown-item" href="{{ route('payment') }}">Facturar pedido</a>
                                    <a class="dropdown-item" href="{{ route('confirmation') }}">confirmación</a>
                                </div>
                            </li>


                            <!--                            <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                blog
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                                                <a class="dropdown-item" href="blog.html"> blog</a>
                                                                <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                                            </div>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="contact.html">Contact</a>
                                                        </li>-->
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href="{{ route('cart') }}">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configuración</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            salir
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
