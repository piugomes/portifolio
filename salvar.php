<html lang=pt-br>
	<head>
		<meta charset="UTF-8"/>
		<title>Portifólio: Salvar</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body class="corpo">
		<?php 
			$nome = $_POST["nome"];
			$link = $_POST["link"];
			$data = $_POST["data"];
			
			if(isset($_FILES['fileUpload'])){
				
			  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

			  $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
			  
			  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
			  
			  $dir = 'uploads/'; //DiretÃ³rio para uploads

			  move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
			  
		   }

			$arquivo = $dir.$new_name;
			
			if(!file_exists("portifolio.xml")){
				$xml = "<?xml version='1.0' encoding='UTF-8'?>
				
				<portifolio>
					<atividade>
						<nome>$nome</nome>
						<link>$link</link>
						<data>$data</data>*
						
						<fileUpload>$arquivo</fileUpload>
					</atividade>
				</portifolio>";
				
				file_put_contents("portifolio.xml", $xml);
			}else{
				$xml = simplexml_load_file("portifolio.xml");
				$atividade = $xml->addChild('atividade');
				
				$atividade->addChild('nome', $nome);
				$atividade->addChild('link', $link);
				$atividade->addChild('data', $data);
				$atividade->addChild('fileUpload', $arquivo);
				
				file_put_contents("portifolio.xml", $xml->asXML());
			}
			
			echo "<h1 class='enviado'>Enviado!!</h1>";
			echo "<button class='linkCadastro'>
			
					<a href='listar.php'>Listar</a>
				</button>";
		?>
		<button class="linkCadastro"><a href="form_portifolio.php">Cadastrar outra Atividade</a></button>
		
			<br />
			<br />
			<br />
			<br />
			<br />
		<footer class="footer">
			Desenvolvido por: Pedro Augusto Gomes Copyright &copy;<br/>	
			Aluno do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo campus Araraquara
		
		</footer>
	</body>
</html>