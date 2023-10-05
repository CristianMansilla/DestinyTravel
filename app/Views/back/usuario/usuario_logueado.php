<!-- Vista de bienvenida que se muestran a los usuarios cuando se loguean correctamente -->
<main>
    <section class="registrarse">
        <h2>¡Bienvenido <?php echo session('nombre'); ?>!</h2>
        <!-- Mensaje de formulario -->
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
        <?php endif;?>

        <?php if(session()->perfil_id == 1): ?>
            <div class="user-logueado">
                <img src="<?php echo base_url('assets/img/admin.svg'); ?>" alt="">
            </div>
        <?php elseif(session()->perfil_id == 2): ?>
            <div class="user-logueado">
                <img src="<?php echo base_url('assets/img/user.svg'); ?>" alt="">
            </div>
        <?php endif;?>
    </section>
</main>