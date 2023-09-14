<?php include_once 'templates\header.php' ?>
<div class="volver-rc">
    <a href="./login.php" class="volver">
        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="23" viewBox="0 0 57 23" fill="none">
            <path d="M0.93472 10.4393C0.348934 11.0251 0.348934 11.9749 0.93472 12.5607L10.4807 22.1066C11.0664 22.6924 12.0162 22.6924 12.602 22.1066C13.1878 21.5208 13.1878 20.5711 12.602 19.9853L4.1167 11.5L12.602 3.01472C13.1878 2.42893 13.1878 1.47918 12.602 0.893398C12.0162 0.307612 11.0664 0.307612 10.4807 0.893398L0.93472 10.4393ZM56.0046 10L1.99538 10V13L56.0046 13V10Z" fill="black" />
        </svg>
        Volver
    </a>
</div>

<div class="bg-login">

    <?php
    if (isset($_GET['mensaje'])) {
        $mensaje_recibido = urldecode($_GET['mensaje']);
        echo "<div class='registro-msj correo'><p> $mensaje_recibido </p></div>";
    }
    ?>

    <div class="form-container1">
        <h3>Restablecer contraseña</h3>
        <div class="email-msj">
            <p>Introduce tu correo electrónico para buscar tu cuenta y enviar un correo con las instrucciones a seguir para reestablecer tu contraseña.</p>
        </div>

        <div class="form_c_email">
            <form action="./includes/recuperar_contra.inc.php" method="post">
                <input type="text" name="email" id="nombre" placeholder="Correo electrónico" required>
                <div class="btn-enviar">
                    <input type="submit" value="Enviar correo" name="submit" id="enviar">
                </div>
            </form>
        </div>

    </div>
</div>





<?php include_once 'templates\footer.php' ?>