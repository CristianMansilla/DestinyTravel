<main>
    <section class="registrarse">
        <h2>Iniciar Sesión</h2>
        <!-- Mensaje de formulario -->
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
        <?php endif;?>
        <!-- El action es el lugar donde se van a procesar los datos que le estoy enviando, la ruta con el nombre enviar-login ejecuta el AccesoController::auth-->
        <form class="register" method="post" action="<?php echo base_url('/enviar-login') ?>">
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input name="mail" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
            </div>

            <div class="register_forgotpass">
                <a href="">¿Has olvidado la contraseña?</a>
                <p>¿Aún no se registró? <a href="registrarse">Registrarse aquí</a></p>
            </div>
            <div class="btns">
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </section>
</main>