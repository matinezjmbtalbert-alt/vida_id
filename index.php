<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro Tarjeta Médica</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
display:flex;
justify-content:center;
padding:40px;
}

.form{

background:white;
padding:30px;
width:500px;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,0.2);

}

h2{
text-align:center;
color:black;
}

h3{
margin-top:20px;
border-bottom:2px solid #eee;
padding-bottom:5px;
}

label{
font-weight:bold;
display:block;
margin-top:10px;
}

input,select,textarea{

width:100%;
padding:10px;
margin-top:5px;
border-radius:6px;
border:1px solid #ccc;
font-size:14px;

}

textarea{
resize:none;
}

button{

background:red;
color:white;
border:none;
padding:14px;
margin-top:20px;
width:100%;
cursor:pointer;
font-size:16px;
border-radius:6px;

}

button:hover{

background:#c40000;

}

</style>

</head>

<body>

<div class="form">

<h2>Registro Tarjeta Médica</h2>

<form action="guardar.php" method="POST" enctype="multipart/form-data">

<label>Foto</label>
<input type="file" name="foto">

<label>Nombre completo</label>
<input name="nombre" placeholder="Ej: Juan Pérez Martínez">

<label>Edad</label>
<input name="edad" placeholder="Ej: 25">

<label>Tipo de sangre</label>
<select name="sangre">
<option value="">Seleccionar tipo de sangre</option>
<option>O+</option>
<option>O-</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
</select>

<label>Condición médica</label>
<textarea name="condicion" placeholder="Ej: Asma, Diabetes, Hipertensión"></textarea>

<label>Medicamentos</label>
<textarea name="medicamentos" placeholder="Ej: Paracetamol, Insulina"></textarea>

<label>Nota médica</label>
<textarea name="nota_medica" placeholder="Ej: Paciente alérgico a la penicilina"></textarea>

<h3>Contacto de Emergencia</h3>

<label>Nombre</label>
<input name="emergencia_nombre" placeholder="Ej: María Pérez">

<label>Parentesco</label>
<select name="emergencia_parentesco">
<option value="">Seleccionar parentesco</option>
<option>Padre</option>
<option>Madre</option>
<option>Hermano</option>
<option>Pareja</option>
<option>Hijo</option>
<option>Otro</option>
</select>

<label>Teléfono</label>
<input name="emergencia_tel" placeholder="Ej: 8091234567">

<h3>Contacto de Respaldo</h3>

<label>Nombre</label>
<input name="respaldo_nombre" placeholder="Ej: Carlos Martínez">

<label>Parentesco</label>
<select name="respaldo_parentesco">
<option value="">Seleccionar parentesco</option>
<option>Padre</option>
<option>Madre</option>
<option>Hermano</option>
<option>Pareja</option>
<option>Amigo</option>
<option>Otro</option>
</select>

<label>Teléfono</label>
<input name="respaldo_tel" placeholder="Ej: 8097654321">

<label>Nota personal</label>
<textarea name="nota_personal" placeholder="Ej: Llevar siempre inhalador"></textarea>

<button>Guardar Tarjeta</button>

</form>

</div>

</body>
</html>