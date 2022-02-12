<?php

if(isset($_POST["provincia"])){

	$provincia=$_POST["provincia"];
	$today=$_POST["today"];
	$tomorrow=$_POST["tomorrow"];
	$servidor="localhost";
	$usuario="root";
	$password="";
	$dbname="eltiempo";

	$conexion=mysqli_connect($servidor,$usuario,$password,$dbname);

	if(!$conexion){
		echo "Error en la conexion a MySQL: " . mysqli_connect_error();
		exit();
	}
	$sql = "INSERT INTO infotiempo (provincia,today,tomorrow) VALUES ('".addslashes($provincia)."',
	'".addslashes($today)."','".addslashes($tomorrow)."')";


	if (mysqli_query($conexion,$sql)){
		echo "REGISTRO INSERTADO CORRECTAMENTE.";
		}else{
			echo "Error en la inserción" . mysqli_error($conexion);
		}
	}
?>
