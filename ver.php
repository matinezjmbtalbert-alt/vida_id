<?php

$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$foto=$_GET["foto"];
$nombre=$_GET["nombre"];
$edad=$_GET["edad"];
$sangre=$_GET["sangre"];

$condicion=$_GET["condicion"];
$medicamentos=$_GET["medicamentos"];
$nota_medica=$_GET["nota_medica"];

$emergencia_nombre=$_GET["emergencia_nombre"];
$emergencia_parentesco=$_GET["emergencia_parentesco"];
$emergencia_tel=$_GET["emergencia_tel"];

$respaldo_nombre=$_GET["respaldo_nombre"];
$respaldo_parentesco=$_GET["respaldo_parentesco"];
$respaldo_tel=$_GET["respaldo_tel"];

$nota_personal=$_GET["nota_personal"];

?>

<!DOCTYPE html>
<html>
<head>

<style>

body{
font-family:Arial;
background:#eaeaea;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.tarjeta{
background:white;
padding:30px;
width:380px;
border-radius:12px;
box-shadow:0 0 25px rgba(0,0,0,0.3);
}

.foto{
text-align:center;
}

.foto img{
width:120px;
height:120px;
border-radius:50%;
border:4px solid red;
object-fit:cover;
}

h2{
text-align:center;
}

.qr{
text-align:center;
margin-top:20px;
}

button{
background:red;
color:white;
border:none;
padding:10px;
margin-top:10px;
cursor:pointer;
}

@media print {

body *{
visibility:hidden;
}

.qr, .qr *{
visibility:visible;
}

.qr{
position:absolute;
left:0;
top:0;
width:100%;
text-align:center;
}

}

</style>

</head>

<body>

<div class="tarjeta">

<div class="foto">
<img src="<?php echo $foto; ?>">
</div>

<h2><?php echo $nombre; ?></h2>

<p><b>Edad:</b> <?php echo $edad; ?></p>
<p><b>Tipo de sangre:</b> <?php echo $sangre; ?></p>

<hr>

<p><b>Condición:</b> <?php echo $condicion; ?></p>
<p><b>Medicamentos:</b> <?php echo $medicamentos; ?></p>
<p><b>Nota médica:</b> <?php echo $nota_medica; ?></p>

<hr>

<p><b>Emergencia:</b> <?php echo $emergencia_nombre; ?> (<?php echo $emergencia_parentesco; ?>)</p>
<p><b>Tel:</b> <?php echo $emergencia_tel; ?></p>

<hr>

<p><b>Respaldo:</b> <?php echo $respaldo_nombre; ?> (<?php echo $respaldo_parentesco; ?>)</p>
<p><b>Tel:</b> <?php echo $respaldo_tel; ?></p>

<hr>

<p><?php echo $nota_personal; ?></p>

<div class="qr">

<h3>QR de la tarjeta</h3>

<img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo urlencode($url); ?>">

<br>

<button onclick="window.print()">Imprimir QR</button>

</div>

</div>

</body>
</html>