<?php include_once 'templates\header.php' ?>

<div class="bg-login">
    <?php
        if(isset($_GET['mensaje'])){
            $mensaje_recibido = urldecode($_GET['mensaje']);
            echo "<div class='registro-msj'><p> $mensaje_recibido </p></div>";
        }

        if(isset($_GET['error'])) {
            if($_GET['error'] == 'usuarioNoExiste') {
                echo "<div class='error-msj-l'><p> El usuario ingresado no existe. Intentelo nuevamente. </p></div>";
            }

            if($_GET['error'] == 'contraIncorrecta') {
                echo "<div class='error-msj-l'><p> La contraseña ingresada no es correcta. Intentelo nuevamente. </p></div>";
            }
        }
    ?> 

<div class="form-container">
            <h3>Inicio de sesión</h3>
            <!-- Login -->
            <form action="./includes/login.inc.php" method="post">
                    <label for="nombre">Usuario</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario" required>
                    <label for="contra">Contraseña</label>
                    <input type="password" name="contra" id="contra" placeholder="Contraseña" required>
                    <a href="recuperar_contra.php" class="r-contra">¿Olvidaste tu contraseña?</a>
                    <div class="btn-enviar">
                        <input type="submit" value="Ingresar" name="submit" id="enviar">
                    </div>
                    <div class="links">
                        <a href="./registrar.php"> ¿No tenes una cuenta? Registrate</a>
                    </div>
                    
            </form>
            
        </div>
    </div>

</div>

<?php include_once 'templates\footer.php' ?>
