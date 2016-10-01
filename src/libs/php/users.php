<?php
session_start();
ob_start();
if (!$_SESSION['usuario']) $_SESSION['usuario']="Invitado";
//include("funcions.php");
//include("productos.php");
//Identificación de usuarios 10.12.2010
$user=$_POST['username'];
$pass=$_POST['password'];
//echo "CACA";
//if($_POST['envia']){
	include("funcions.php");
	$link=conecta();
	$sql="select * from usuarios where login='$user' and pass='$pass' and estado=1";
	$result=busqueda($sql, $link);
	if($row=recibir_array($result)){
		if($row['tipo']=="superuser" || $row['tipo']=="administrador"){
			$_SESSION['usuarioa']=$row['nombre']." ".$row['apellidos'];
			$_SESSION['tipo']="superuser";
			echo "Usuari registrat: ".$_SESSION['usuario']."<br />";
			echo "<a href='dashboard.php?user=$_SESSION[usuario]'>Continuar</a>";
			?><script>document.location.href="../../home.html";</script><?php
		}
		else{ echo "Usuario no autorizado<br><a href='../../../index.html'>Volver</a>";} 	
	}
	
	else echo "Usuario o Contrase&ntilde;a incorrectos, int&eacute;ntalo de nuevo.<a href='../../../index.html'>Atras</a>";
//}