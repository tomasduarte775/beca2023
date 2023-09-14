<?php 
// conecion a base de datos
$servidor="localhost";
$usuario="root";
$password="";
$basededatos="convenios";

$conexion= new mysqli($servidor,$usuario,$password,$basededatos);

if ($conexion->connect_error) {
    die ("error de conexion".$conexion->connect_error);
}
echo "conocion establecida....";

/*CRACION BASE DE DATOS------------------------------------------------------------------------------------------

$sql="CREATE DATABASE convenios";

if($conexion->query($sql)===TRUE){
    echo"Base de datos creada"; 
}else{
    echo "Error".$conexion->error; 
}
------------------------------------------------------------------------------------------------------------------**/

/*CRACION TABLA ALUMNO----------------------------------------------------------------------------------------- 
$sql= 'CREATE TABLE `alumno` (
    `id` int(10) NOT NULL,
    `nombre` varchar(550) NOT NULL,
    `numero` varchar(550) NOT NULL,
    `email` varchar(500) NOT NULL,
    `legajo` varchar(500) NOT NULL,
    `carrera` varchar(500) DEFAULT NULL
  )
)';

if($conexion->query($sql)==TRUE){
    echo "tabla creada";
}else{
    echo "hubo un error".$conexion->error; 
}
------------------------------------------------------------------------------------------------------------------**/


/*CREACION TABLA EMPRESA----------------------------------------------------------------------------------------- 

$sql= 'CREATE TABLE `empresa` (
    `id` int(50) NOT NULL,
    `nombreEmpresa` varchar(300) NOT NULL
)';

if($conexion->query($sql)==TRUE){
    echo "tabla creada";
}else{
    echo "hubo un error".$conexion->error; 
}
------------------------------------------------------------------------------------------------------------------**/

/*CRACION TABLA USUARIO--------------------------------------------------------------------------------------------- 

$sql= 'CREATE TABLE `usuario`(
    `id` int (10) NOT NULL,
    `nombre` varchar(200) NOT NULL,
    `contraseña` varchar(200) NOT NULL,
    `token_hash` varchar(200) DEFAULT NULL,
    `token_expires_at` datetime DEFAULT NULL,
    `email` varchar(200) NOT NULL
)';
if($conexion->query($sql)==TRUE){
    echo "tabla creada";
}else{
    echo "hubo un error".$conexion->error; 
}

?> 
------------------------------------------------------------------------------------------------------------------**/

//INSERTS ALUMN0-----------------------------------------------------------------------------------------------------
$sql="INSERT INTO alumno (id,nombre,numero,email,legajo,carrera)
VALUE('1', 'tomas duarte','3534259177','tomasduarte775@gmail.com','14387','ing.sistemas')";

if($conexion->query($sql)==TRUE){
    echo "registro agregado";
}else{
    echo "hubo un error".$conexion->error; 
}

$conexion->close();