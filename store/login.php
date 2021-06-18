<?php 

require 'templates/header.php'; 
require 'templates/breadcumb.php'; 

?>
    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 my-auto">
                    <div class="login_form mb-50">
                        <h5 class="mb-3 text-black">Acceso</h5>

                        <form action="my-account.html" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Contraseña">
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mb-3 pl-1">
                                    <input type="checkbox" class="custom-control-input" id="customChe">
                                    <label class="custom-control-label" for="customChe">Recordar en este equipo</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Acceso</button>
                        </form>
                        <!-- Forget Password -->
                        <div class="forget_pass mt-15">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="login_form mb-50">
                        <h5 class="mb-3 text-black">Registro</h5>

                        <form action="" method="post" id="resgister">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="last" name="last" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Repertir Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End -->

<?php require 'templates/footer.php'; ?>