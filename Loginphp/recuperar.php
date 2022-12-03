<?php
/*include('conexion.php');*/

$correo = $_POST['txtCorreo'];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM login WHERE Correo = '$Correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['Password'];

$paracorreo 		= $correo;
$titulo				= "Recuperar contraseña";
$mensaje			= $enviarpass;
$tucorreo			= "From: sonia77mlm@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviado');window.location= 'index.html' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'index.html' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'index.html' </script>";
}

?>