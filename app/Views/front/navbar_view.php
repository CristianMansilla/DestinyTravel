<?php
$session = session();
$nombre = $session->get('nombre');
$usuario = $session->get('usuario');
$perfil = $session->get('perfil_id');
?>
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('principal') ?>">
                <img class="logo" src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo Destinity Travel">
                <!-- Corregir la ruta del logo -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php if (session()->perfil_id == 1) : ?>
                <div class="user-sesion admin-sesion">
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ADMIN: <?php echo session('usuario'); ?>
                            </a>
                            <ul class="dropdown-menu menu-admin">
                                <li><a class="dropdown-item" href="#">Agregar Destinos</a></li>
                                <li><a class="dropdown-item" href="#">Control Usuarios</a></li>
                                <li><a class="dropdown-item" href="#">Informes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="principal">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="principal#destinos">Destinos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('quienessomos'); ?>">Quienes somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="acercade">Acerca de</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Ingrese un texto" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>

            <?php elseif (session()->perfil_id == 2) : ?>
                <div class="user-sesion">
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                USUARIO: <?php echo session('usuario'); ?>
                            </a>
                            <ul class="dropdown-menu menu-usuario">
                                <li><a class="dropdown-item" href="#">Favoritos</a></li>
                                <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="principal">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="principal#destinos">Destinos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('quienessomos'); ?>">Quienes somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="acercade">Acerca de</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Ingrese un texto" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>

            <?php else : ?>
                <!-- Navbar para clientes no logueados -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="principal">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="principal#destinos">Destinos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= base_url('quienessomos'); ?>">Quienes somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="acercade">Acerca de</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="registrarse">Registrarse</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="acceso">Acceso</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Ingrese un texto" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</header>