<html>
<head>
	<title>teste</title>
	<link href="/../../CodeIgniter/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div>
		<h1>Planos<h1>
			<TABLE class="table">
				<tr>
					<th>Nome:</th>
					<th>Valor:</th>
				</tr>

				<?php foreach ($planos as $plano) : ?>

				<tr>
					<th><?= $plano['Nome'] ?></th>
					<th><?= $plano['Valor'] ?></th>
				</tr>
			<?php endforeach; ?>
			</TABLE>
	</div>
</body>

