<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <?php include "DbConfig.php"?>

</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
		<?php 
			$mysqli = mysqli_connect($server,$user,$pass,$basededatos);
			$sql="insert into preguntas(Correo, Enunciado, Respuesta, Respuesta1, Respuesta2, Respuesta3, Dificultad, Tema)
			VALUES('$_POST[Correo]','$_POST[Enunciado]','$_POST[Correcta]','$_POST[Incorrecta1]','$_POST[Incorrecta2]','$_POST[Incorrecta3]','$_POST[Dif]','$_POST[Tema]')";
			 if (!mysqli_query($mysqli ,$sql))
			{
				die('Error: ' . mysqli_connect_error());
			}
			echo "Pregunta guardada en la BD";
			echo "<p> <a href='ShowQuestions.php'> Ver preguntas en la BD </a> </p>";
			mysqli_close($mysqli);
		?>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
