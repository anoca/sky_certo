 <?php
	//Verificacao do nome
	function nome($nome){
		$erros = array();

		if (strlen(trim($nome) == false)){
			$erros[] = "Favor inserir seu nome "."<br>";
		}elseif(ctype_digit($nome) == true){
			$erros[] = "Favor inserir apenas caracteres no seu nome "."<br>";
		}elseif(strlen($nome)< 8){
			$erros[] = "Favor inserir seu nome completo "."<br>";
		}

		return $erros;
	}
	//Verificacao do email
	function email($email){
		$erros = array();

		$email=strip_tags($email);
		if(strlen(trim($email)) == 0){
			$erros[] = "Favor inserir um email "."<br>";
		}elseif(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
			$erros[] = "O email não é válido ". "<br>";
		}

		return $erros;
	}
	
	//Verificacao da senha
	function senha($senha){
		$erros = array(); //nao atribuiu o array

		if (strlen(trim($senha)) == false){
			$erros[] = "Favor inserir uma senha "."<br>";
		}elseif(ctype_alnum($senha) == false){
			$erros[] =  "Favor inserir senha com números e letras "."<br>";
		}elseif((strlen($senha)) < 8 && strlen($senha > 16)){
			$erros[] =  "Favor inserir uma senha com mais de 8 caracteres"."<br>";
		}
	}
	
	
	//Verificacao do cpf
	function CPF($cpf){
		$erros = array();

		if (preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/", $cpf)){
			$erros[] = " ";
		} else {
			$erros[] =  "Esse CPF não é válido, favor inserir cpf correto."."<br>";
		}
	}
	
	//Verificacao da data de nascimento	
	function nasc($dtNasc){
		$erros = array();
		
		if (strlen(trim($dtNasc)) == false){
			$erros[] =  "Favor sua data de nascimento "."<br>";
		}elseif(ctype_digit($dtNasc) == true){
			$erros[] =  "Favor inserir sua data de nascimento com apenas números "."<br>";
		}
	}
	
	
 ?>