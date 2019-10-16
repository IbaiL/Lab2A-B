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
			$preguntas = mysqli_query($mysqli, "select Correo, Enunciado, Respuesta from preguntas" ); 
			 if (!$mysqli)
			{
				die('Error: ' . mysqli_connect_error());
			}
			echo '<table border=1> <tr> <th> AUTOR </th> <th> ENUNCIADO </th> <th> RESPUESTA </th> </tr>';
			while ($row = mysqli_fetch_array( $preguntas )) {
				echo '<tr><td>' . $row['Correo'] . '</td> <td>' . $row['Enunciado'] . '</td> <td>' . $row['Respuesta'] . '</td></tr>';
			}
			echo '</table>';
			$preguntas->close();
			mysqli_close($mysqli);
		?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
