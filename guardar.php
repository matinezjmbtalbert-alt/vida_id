<?php

$id = time();

$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$sangre=$_POST["sangre"];
$condicion=$_POST["condicion"];
$medicamentos=$_POST["medicamentos"];
$nota_medica=$_POST["nota_medica"];

$emergencia_nombre=$_POST["emergencia_nombre"];
$emergencia_parentesco=$_POST["emergencia_parentesco"];
$emergencia_tel=$_POST["emergencia_tel"];

$respaldo_nombre=$_POST["respaldo_nombre"];
$respaldo_parentesco=$_POST["respaldo_parentesco"];
$respaldo_tel=$_POST["respaldo_tel"];

$nota_personal=$_POST["nota_personal"];

$foto=$_FILES["foto"]["name"];
$temp=$_FILES["foto"]["tmp_name"];

$ruta="imagenes/".$id."_".$foto;

move_uploaded_file($temp,$ruta);

$url="ver.php?id=$id&foto=$ruta&nombre=$nombre&edad=$edad&sangre=$sangre&condicion=$condicion&medicamentos=$medicamentos&nota_medica=$nota_medica&emergencia_nombre=$emergencia_nombre&emergencia_parentesco=$emergencia_parentesco&emergencia_tel=$emergencia_tel&respaldo_nombre=$respaldo_nombre&respaldo_parentesco=$respaldo_parentesco&respaldo_tel=$respaldo_tel&nota_personal=$nota_personal";

header("Location: $url");

?>