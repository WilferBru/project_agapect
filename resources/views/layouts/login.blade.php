<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" style="margin-top: 100px;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: #BB8FCE;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Agape</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="login_part_text text-center">
                                    <div class="login_part_text_iner">
                                        <h3><img src="img/ÁGAPE_logo.png" width="170" height="150" alt="logo"></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="login_part_form">
                                    <div class="login_part_form_iner">
                                        <h3>Bienenido</h3>
                                        <div class="container">
                                            <h4>{!! $errors->first('email','<small style="color: red;">:message</small>') !!}
                                                {!! $errors->first('password','<small style="color: red;">:message</small>') !!}</h4>
                                        </div>
                                        <form class="row contact_form" action="{{ route('login') }}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="col-md-12 form-group p_star">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                                                       placeholder="Correo">
                                            </div>
                                            <div class="col-md-12 form-group p_star">
                                                <input type="password" class="form-control" id="password" name="password" value=""
                                                       placeholder="Contraseña">
                                            </div>
                                            <div class="col-md-12 form-group">

                                                <button type="submit" value="submit" class="btn_3">
                                                    Iniciar Sesión
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
</div>
