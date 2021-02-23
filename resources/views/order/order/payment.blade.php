@extends('layouts.appAdmin')
@section('contentClient')
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Facturar Pedido</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_padding">
        <div class="container">
            <div class="cupon_area">
                <div class="check_title">
                    <h2>
                        ¿Cuentas con un cupón de descuento?
                        <a href="#">¡Click aquí para consultar uno!</a>
                    </h2>
                </div>

            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cupon_area">
                            <input type="text" placeholder="Ingresa el codigo del cupon" />
                            <a class="tp_btn" href="#">Aplicar Cupón</a>
                        </div>

                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">

                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Destinatario Secundario</h3>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add1" name="add1" />
                                    <span class="placeholder" data-placeholder="Direccion de Residencia"></span>
                                </div>
                            </div>


                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Mensaje</h3>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="¿Quieres agregarle un mensaje al destinatario? adelante, escribelo aquí"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Detalles de la compra</h3>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="¿Quieres darnos especificaciones sobre como quieres tu producto? adelante, escribelo aquí"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Tu Pedido</h2>
                            <ul class="list">
                                <li>
                                    <a><b>Producto</b>
                                        <span><b>Total</b></span>
                                    </a>
                                </li>

                                <?php $subtotal = 0 ?>
                                @foreach($order as $product)
                                    <li>
                                        <?php $subtotal += $product->total ?>
                                        <a href="#">{{ $product->name }}
                                            <span class="middle">x {{$product->quantity }} -</span>
                                            <span class="last">$ {{ number_format($product->total) }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal
                                        <span>$ {{ number_format($subtotal) }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Cupón de Descuento
                                        <span>- $50.000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Total
                                        <span>$ {{ number_format($subtotal-50000) }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector" />
                                    <label for="f-option5">Pago contra-entrega</label>
                                    <div class="check"></div>
                                </div>
                                <p>
                                    Se le enviara el producto a su resisdencia y usted lo pagara al recibirlo.
                                </p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector" />
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/single-product/card.jpg" alt="" />
                                    <div class="check"></div>
                                </div>
                                <p>
                                    Págue desde la comodidad de su casa y relajese, nosotros le avisamos cuando su pedido este en camino
                                </p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" required />
                                <label for="f-option4">He leido y acepto los </label>
                                <a href="#">Terminos y Condiciones</a>
                            </div>
                            <a class="btn_3" href="{{ route('confirmation') }}">Continuar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    ================End Checkout Area =================-->
@endsection
