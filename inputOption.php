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

			foreach($_POST['valor'] as $key => $value){
				echo $key;
				echo '=>';
				echo $value;

			}
		}
	?>
	<form method="post">
		<select name= "nome">
			<option value="marcos">marcos</option>>
			<option value="joao">joao</option>>

		</select>>
		<input type="checkbox" name="valor[]" value="10"/>
		<input type="checkbox" name="valor[]" value="30"/>
		<input type="checkbox" name="valor[]" value="40"/>
		<input type="checkbox" name="valor[]" value="50"/>


		
		<input type="submit" name="acao" value="enviar"/>


	</form>>
</body>
</html>