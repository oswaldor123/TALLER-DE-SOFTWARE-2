<header>
        <div id="padre">
            <div id="logo">
                <img src="imagenes/logohf.png" width=70px height=70px>
                <h3>HAPPY FEET</h3>
            </div>
            <div id="navegador">
                <nav>
                    <ul>
                        <li> <a href="index.php">Inicio</a></li>
                        <li> <a href="#">Servicios</a>
                            <ul class="submenu">
                            <?php
                            if(isset($_SESSION["correo"])) { ?>
                                <li><a href="adoptar.php">Adopta</a></li>
                                <li><a href="registrarperro.php">Registra</a></li>
                                <li><a href="sebusca.php">Se Busca</a></li>
                            <?php } else { ?>
                                <li><a href="adoptar.php">Adopta</a></li>
                                <li><a href="sebusca.php">Se Busca</a></li>
                            <?php } ?>
                            </ul>
                        </li>
<<<<<<< HEAD
                        <li> <a href="veterinario.php">Salud</a>
=======
                        <li> <a href="#">Salud</a>
                            <ul class="submenu">
                                <li><a href="veterinario.php">Veterinario</a></li>
                                <li><a href="esterilizacion.php">Esterilización</a></li>
                            </ul>
                        </li>
>>>>>>> 1240bc7c7a7e41a94966ec8741990ae9765f92c7
                        <li> <a href="donaciones.php">Donaciones</a></li>
                        <li> <a href="#">Mi Cuenta</a>
                            <ul class="submenu">
                        <?php
                        if(isset($_SESSION["correo"])) { ?>
                            
                            <li><a href="actualizardatos.php">Actualizar datos</a></li>
                            <li><a href="misreservaciones.php">Mis Reservaciones</a></li>
                            <li><a href="logout.php">Cerrar Sesión</a></li>
                        <?php } else { ?>
                            <li><a href="login.php">Iniciar Sesión</a></li>
                            <li><a href="registro.php">Crear Cuenta</a></li>
                        <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
</header>
