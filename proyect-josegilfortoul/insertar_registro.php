<?php
	$nombre_representante=$_POST['nombre_representante'];
	$apellido_representante=$_POST['apellido_representante'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$nombre_alumno=$_POST['nombre_alumno'];
	$apellido_alumno=$_POST['apellido_alumno'];
	$cedula=$_POST['ci_alumno'];
	$ano_a_cursar=$_POST['ano_a_cursar'];
	$mensaje=$_POST['mensaje'];
	

	session_start();
	$_SESSION['ci_alumno']=$cedula;

	include('db.php');

	$consulta="INSERT INTO inscripcion (ci_alumno, nombre_alumno, apellido_alumno, ano_a_cursar, mensaje, nombre_representante, apellido_representante, correo, telf_representante) VALUES ('$cedula', '$nombre_alumno', '$apellido_alumno', '$ano_a_cursar', '$mensaje', '$nombre_representante', '$apellido_representante', '$correo', '$telefono')";

	$resultado=mysqli_query($conexion,$consulta);

	if ($resultado) {
	   
		header("location:archivo_preinscripcion.php");
	    }

	    else {
	    	echo "falló el registro, la cédula ya existe";
	    		   
	    }  

	// mysqli_free_result($resultado);
	mysqli_close($conexion);
	

?>



