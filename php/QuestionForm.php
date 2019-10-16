<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/ValidateFieldsQuestion.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      <form id='fquestion' name='fquestion' action="AddQuestion.php" method="post">
		<b>Introduzca su correo electrónico:</b><br>
		<input name="Correo" id="CorreoElectronico" type ="text"><br><br>
		<b>Enunciado de la pregunta:</b><br>
		<input name="Enunciado" id="EnunciadoPregunta" type ="text"><br><br>
		<b>Respuesta Correcta:</b><br>
		<input name="Correcta" id="RespuestaCorrecta" type ="text"><br>
		<b>Respuesta Incorrecta 1:</b><br>
		<input name="Incorrecta1" id="RespuestaIncorrecta1" type ="text"><br>
		<b>Respuesta Incorrecta 2:</b><br>
		<input name="Incorrecta2" id="RespuestaIncorrecta2" type ="text"><br>
		<b>Respuesta Incorrecta 3:</b><br>
		<input name="Incorrecta3" id="RespuestaIncorrecta3" type ="text"><br><br>
		<b>Dificultad: </b>
		<select id="Dificultad" name ="Dif">
			<option value = "1" id="Baja">Baja</option>
			<option value = "2" id="Media">Media</option>
			<option value = "3" id="Alta">Alta</option>
		</select><br><br>
			<b>Tema de la pregunta:</b><br>
			<input name="Tema" id="TemaDeLaPregunta" type ="text"><br><br>
		<input type="submit" id = "Submit"></button>
	  </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
  
</body>
</html>