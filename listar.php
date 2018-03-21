<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Portifólio: Listar</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body class="corpo">
	
		<h1 class="h1">Lista de Atividades</h1>
		
		<table border="1" class="table">
			<thead>
				<tr>
					<th>Atividade</th>
					<th>Data</th>
					<th>Download</th>
				</tr>
			</thead>
			
			<tbody>
			
				<?php
					$xml=simplexml_load_file("portifolio.xml");
					
					foreach($xml->children() as $portifolio){
						echo "<tr>";
							echo "<td><button class='linkLista'><a href='http://$portifolio->link'>$portifolio->nome</a></button></td>";
							
							echo "<td class='linkLista'>$portifolio->data</td>";
							echo "<td><button class='linkLista'><a href='$portifolio->fileUpload' download>Baixar Arquivo</a></button></td>";
						echo "</tr>";
					}
				?>
			</tbody>   
		</table>
		
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