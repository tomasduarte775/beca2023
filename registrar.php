<?php include_once 'templates\header.php' ?>
<a href="./login.php" class="volver">
        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="23" viewBox="0 0 57 23" fill="none">
        <path d="M0.93472 10.4393C0.348934 11.0251 0.348934 11.9749 0.93472 12.5607L10.4807 22.1066C11.0664 22.6924 12.0162 22.6924 12.602 22.1066C13.1878 21.5208 13.1878 20.5711 12.602 19.9853L4.1167 11.5L12.602 3.01472C13.1878 2.42893 13.1878 1.47918 12.602 0.893398C12.0162 0.307612 11.0664 0.307612 10.4807 0.893398L0.93472 10.4393ZM56.0046 10L1.99538 10V13L56.0046 13V10Z" fill="black"/>
        </svg>
        Volver
    </a>

    <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "nombreInvalido") {
                echo "<div class='error-msj'><p> El nombre ingresado no es valido. Intentelo nuevamente. </p></div>";
            }

            else if ($_GET['error'] == "telefenoInvalido") {
                echo "<div class='error-msj'><p> El teléfono ingresado no es valido. Intentelo nuevamente. </p></div>";
            }

            else if ($_GET['error'] == "legajoInvalido") {
                echo "<div class='error-msj'><p> El legajo ingresado no es valido. Intentelo nuevamente. </p></div>";
            }
            
            else if ($_GET['error'] == "emailInvalido") {
                echo "<div class='error-msj'><p> El email ingresado no es valido. Intentelo nuevamente. </p></div>";
            }

            else if ($_GET['error'] == "contraNoCoincide") {
                echo "<div class='error-msj'><p> La contraseñas ingresadas no son iguales. Intentelo nuevamente. </p></div>";
            }

            else if ($_GET['error'] == "legajoRegistrado") {
                echo "<div class='error-msj'><p> El legajo ingresado ya esta registrado. Intentelo nuevamente. </p></div>";
            }
            
            else if ($_GET['error'] == "crearUsuarioError") {
                echo "<div class='error-msj'><p> Error al crear usuario. Intentelo nuevamente. </p></div>";
            }

            else if ($_GET['error'] == "crearAlumnoError") {
                echo "<div class='error-msj'><p> Error al crear Alumno. Intentelo nuevamente. </p></div>";
            }
        }
    ?>

    <div class="form-r-container">
        <form action="./includes/registrar.inc.php" method="post" class="form-registrar">
            <h3 class="title-registrar">REGISTRAR</h3>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre y apellido completo" required>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <select name="carrera" id="carrera" required>
                    <option value="no">Seleccione una carrera</option>
                    <option value="Ing. En sistemas">Ing. En sistemas</option>
                    <option value="Ing. Química">Ing. Química</option>
                    <option value="Ing. Mecánica">Ing. Mecánica</option>
                    <option value="Ing. Electrónica">Ing. Electrónica</option>
                    <option value="Tec. Superior en Mecatrónica">Tec. Superior en Mecatrónica</option>
                </select>
                <input type="text" name="legajo" id="legajo" placeholder="Número de legajo" required>
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono" required>
                <input type="password" name="contra" id="contra" placeholder="Contraseña" required>
                <input type="password" name="c_contra" id="contra" placeholder="Confirmar contraseña" required>
                <input type="submit" id="submit" name="submit" value="Crear usuario"> 
        </form>
    </div>

<?php include_once 'templates\footer.php' ?>
