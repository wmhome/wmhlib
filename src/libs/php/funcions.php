<?php
function conecta(){
	$link=mysql_connect("db509550299.db.1and1.com", "dbo509550299", "lopercal");
	mysql_select_db("db509550299", $link);
	return $link;	
}
function busqueda($sql, $link){
	$link=conecta();
	$result=@mysql_query($sql, $link);
	return $result;
}
function recibir_array($result){
	$link=conecta();
	$row=@mysql_fetch_array($result);
	return $row;
}
function recortar($txt){
	$Texto=$txt;
	$MaxLENGTH=150;
	$TextoResumen = substr($Texto,0,strrpos(substr($Texto,0,$MaxLENGTH)," "));
	return $TextoResumen."...";
}