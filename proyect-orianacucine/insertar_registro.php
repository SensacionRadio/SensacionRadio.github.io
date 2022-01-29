<?php
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$cedula=$_POST['cedula'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
//	$tipo_cocina=$_POST['tipo_cocina'];
//	$tipo_material=$_POST['tipo_material'];
//	$cantidad=$_POST['cantidad'];
//	$tipo_modulo=$_POST['tipo_modulo'];
//	$mensaje=$_POST['mensaje'];

	session_start();
	$_SESSION['cedula']=$cedula;

	include('db.php');

	$consulta="INSERT INTO presupuesto (nombre, apellido, cedula, correo, mensaje, direccion, telefono, correo, tipo_cocina, tipo_material, cantidad, tipo_modulo, mensaje) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$direccion', '$telefono')";

	//$consulta="INSERT INTO presupuesto (nombre, apellido, cedula, correo, mensaje, direccion, telefono, correo, tipo_cocina, tipo_material, cantidad, tipo_modulo, mensaje) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$direccion', '$telefono', '$tipo_cocina', '$tipo_material', '$cantidad', '$tipo_modulo', '$mensaje')";

	$resultado=mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:archivo_presupuesto.php");
	    }

	    else {
	    	echo "Error 1001 falló el registro";
	    	//header("location:archivo_presupuesto.php");
	    }  

	// mysqli_free_result($resultado);
	mysqli_close($conexion);

?>



