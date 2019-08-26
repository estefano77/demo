<?php 
//Esta linea es para incluir el archivo con las variables 
include ("variables.php"); 
/* CONECTAR CON BASE DE DATOS **************** */ 
$con = mysql_connect(HOSTNAME,USER,PASS); 

if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());} 
	/* ********************************************** */ 
	/* CONECTA CON LA BASE DE DATOS **************** */ 
	$database = mysql_select_db("prueba",$con); 
	if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
/* ********************************************** */ 
//REALIZAR CONSULTA 
$sql = "INSERT INTO prueba1 VALUES (NULL,'".$_POST['Nombre']."','" .
                                            $_POST['Paterno']."','".
                                            $_POST['Materno']."','".
                                            $_POST['sexo']."')"; 

$result = mysql_query($sql); 
if (! $result){ 
	echo "La consulta SQL contiene errores.".mysql_error(); 
	exit(); 
}else {echo "<center><font color='RED'>DATOS INSERTADOS CORRECTAMENTE</font>"; 
} 

?>