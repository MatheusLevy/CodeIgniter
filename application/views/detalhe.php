<html>
<head>
  <link href="/../../CodeIgniter/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    Id:<?= $plano['idPlanos'] ?> <br>
	Nome:<?= $plano['Nome'] ?>	  <br>
	Preço: <?= $plano['Valor'] ?>	  <br>
	
	<?= anchor("AdminHome", "voltar", array('class' => "btn btn-primary")); ?>
	<a href="<?= base_url('Plano/delete/'.$plano['idPlanos']); ?>" class="btn btn-danger">Deletar Plano </a>
	<a href="<?= base_url('Plano/editar?id='.$plano['idPlanos']); ?>" class="btn btn-warning">Editar </a>
</body>
</html>