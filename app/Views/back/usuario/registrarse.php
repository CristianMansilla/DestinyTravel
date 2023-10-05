<main>
    <section class="registrarse">
        <h2>Registrar usuario</h2>

        <!-- Se pone antes de abrir el form. Se indica que vamos a utilizar el validation que ofrece codeigniter -->
        <?php $validation = \Config\Services::validation(); ?>

        <!-- Metodos de validación para mostrar el mensaje de fail o success al usuario -->
        <?php if(!empty (session()->getFlashdata('fail'))):?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('fail');?>
            </div>
        <?php endif?>

        <?php if(!empty (session()->getFlashdata('success'))):?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success');?>
            </div>
        <?php endif?>

        <!-- El action es el lugar donde se van a procesar los datos que le estoy enviando, la ruta con el nombre enviar-form ejecuta el UsuarioController::formValidation-->
        <form class="register" method="post" action="<?php echo base_url('/enviar-form') ?>">
            <div class="mb-3">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                <!-- Error -->
                <?php if($validation->getError('nombre')){?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('nombre');?>
                    </div>
                <?php }?>
            </div>
            <div class="mb-3">
                <label for="inputApellido" class="form-label">Apellido</label>
                <input name="apellido" type="text" class="form-control" id="inputApellido" placeholder="Apellido">
                <!-- Error -->
                <?php if($validation->getError('apellido')){?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('apellido');?>
                    </div>
                <?php }?>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input name="mail" type="email" class="form-control" id="inputEmail" placeholder="correo@algo.com">
                <!-- Error -->
                <?php if($validation->getError('mail')){?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('mail');?>
                    </div>
                <?php }?>
            </div>
            <div class="mb-3">
                <label for="inputUsuario" class="form-label">Usuario</label>
                <input name="usuario" type="text" class="form-control" id="inputUsuario" placeholder="Usuario">
                <!-- Error -->
                <?php if($validation->getError('usuario')){?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('usuario');?>
                    </div>
                <?php }?>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="Contraseña (mínimo 5 caracteres)">
                <!-- Error -->
                <?php if($validation->getError('pass')){?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('pass');?>
                    </div>
                <?php }?>
            </div>
            <div class="btns">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </section>
</main>