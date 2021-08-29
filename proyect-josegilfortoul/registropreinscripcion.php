<?php
	
	$banco=$_POST['banco'];
	$num_referencia=$_POST['num_referencia'];
	$tipo_pago=$_POST['tipo_pago'];
	$fecha=$_POST['fecha'];
	$archivo=$_POST['archivo'];

	
	

	session_start();

	$cedula=$_SESSION['ci_alumno'];

	include('db.php');

	$consulta="INSERT INTO datos_de_pago (id_alumno, banco, nro_referencia, tipo_pago, fecha, archivo) VALUES ('$cedula', '$banco', '$num_referencia', '$tipo_pago', '$fecha', '$archivo')";

	$resultado=mysqli_query($conexion,$consulta);

	if ($resultado) {
	   
		header("location:archivo_registrado_exitosamente.php");
	    }

	    else {
	    	echo "falló el registro, la cédula ya existe";
	    		   
	    }  

	// mysqli_free_result($resultado);
	mysqli_close($conexion);
	

?>
