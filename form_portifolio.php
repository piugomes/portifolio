<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Portifólio: Cadastrar</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />	
	</head>
	
	<body class="corpo">
        <div>
    		<form action="salvar.php" method="post" enctype="multipart/form-data">
    			<fieldset>
    				<legend class="legend">Entrada de Dados</legend>
    				
    				<label class="label">Nome: </label>
    				<input type="text" name="nome" placeholder="nome da atividade" required />
    				<br />
    				<br />
    				
    				<label class="label">Link: </label>
    				<input type="text" name="link" placeholder="link" required />
    				<br />
    				<br />
    				
    				<label class="label">Data: </label>
    				<input type="date" name="data" required/>
    				<br />
    				<br />
    				
    				<label class="label">Arquivo: </label> 
    				<input type="file" name="fileUpload">
    				<br />
    				<br />
    				
    				
						<input class="linkSalvar" type="submit" value="Enviar"/>
					
    			</fieldset>
    		</form>
        </div>
		
		<footer class="footer">
			Desenvolvido por: Pedro Augusto Gomes Copyright &copy;<br/>	
			Aluno do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo campus Araraquara
		
		</footer>
	</body>
</html>
