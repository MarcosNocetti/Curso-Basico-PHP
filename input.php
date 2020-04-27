<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	
	<?php
	/* GET
		if(isset($_GET['acao']))  {
			$nome = $_GET['nome'];
			$email = $_GET['email'];
		}
	*/
	?>
	
	<?php
	//POST
		if(isset($_POST['acao']))  {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
		foreach($_POST['valor'] as $key => $value){
				echo $key;
				echo '=>';
				echo $value;

			}
		}
	?>
	<form method="post">

		<input type="text" name="nome"/>
		<input type="text" name="email"/>
		<input type="submit" name="acao" value="enviar"/>


	</form>>
</body>
</html>