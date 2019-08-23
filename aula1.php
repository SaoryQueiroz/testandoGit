<html>
	<head>
		<meta charset="utf-8"/>
		<title> Aula 1 - Desenvolvimento Web 2</title>
		<link rel = "stylesheet" href = "estilo.css" type = "text/css"/>
	</head>
	
	<body class = "b1">
		<h2> Aula 1 </h2>
		<fieldset  class = "field">
		<legend> Formulario - Desenvolvimento Web 2</legend>
		<form action = "aula1.php" method = "POST">
			<label>Nome: </label>
			<input type = "text" size="30" maxlength="100" name = "nome">
			<br/>

			<label> Idade: </label>
			<input type = "text" size = "15" maxlength = "3" name = "idade">
			<br/>
			<label> Escolaridade  </label>
			<select name="formacao">
				<option value = ""> </option>
				<option value="Ensino Fundamental">Ensino fundamental</option>
				<option value="Ensino Medio Incompleto">Ensino medio incompleto</option>
				<option value="Ensino Medio Completo">Ensino medio completo</option>
				<option value="Ensino Superior Incompleto">Ensino superior incompleto</option>
				<option value="Ensino Superior Completo">Ensino superior completo</option>
			</select>
			<br/>
			<label> Sexo: </label>
			<input type = "radio" value = "Feminino" name = "sexo"> Feminino
			<input type = "radio" value = "Masculino" name = "sexo"> Masculino
			<input type = "radio" value = "Outro" name = "sexo">Outro
			<br/><br/>
			<input type="submit" name="enviar" value="    Enviar Dados    ">
			<input type="submit" name="limpar" value="    Limpar Formulario    ">
			<br/>
		</form>
		</fieldset>
		
		<?php
		
			if(!empty($_POST)){
				if(isset($_POST['nome'])){
					if(!empty($_POST['nome'])){
						$nome = $_POST['nome'];
						echo "Ola, " .$nome;
					}else{
						echo"Por favor preencha o campo com seu nome";
					}
				}
				
				echo"</br>";
				
				if(isset($_POST['idade'])){
					if(!empty($_POST['idade'])){
						$idade = $_POST['idade'];
						echo "Idade: " .$idade;
					}else{
						echo"Campo em branco";
					}
				}
				
				
				echo"</br>";
				
				$sexo = 0;
				if(isset($_POST['sexo'])){
					echo"Seu sexo é: " .$_POST['sexo'];
				}else{
					echo"Nenhuma opcao foi selecionada";
				}
			
				echo"</br>";
				
				$formacao = 0;
				echo "Escolaridade: " . $_POST['formacao'];
				
				
			}
			
			
			
		
		?>
	</body>
</html>