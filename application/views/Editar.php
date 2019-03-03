<html>
<head>
  <link href="/../../CodeIgniter/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
		<div class = "container">
		<h1>Plano Editar</h1>
		<form action="../Plano/salvar/" method = "post">
		<input type="Hidden" class="Hidden" name ="id" value="<?= $plano['idPlanos'] ?>">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" value="<?= $plano['Nome'] ?>">
		<label>Valor</label>
		<input type="text" name="valor" class="form-control" value="<?= $plano['Valor'] ?>">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<?= anchor("/AdminHome", "voltar", array('class' => "btn btn-primary")); ?>
		</form>
		</div>
</body>
</html>