<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Planos da Academia" content="">
    <meta name="Matheus Levy" content="">
    <link rel="icon" href="/../../CodeIgniter/assets/Icone/PrecoT.ico">

    <title>Planos</title>

    <!-- Bootstrap core CSS -->
    <link href="/../../CodeIgniter/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/../../CodeIgniter/assets/css/pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Academia Fit</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="../index.php/Galeria">Imagens</a>
        <a class="p-2 text-dark" href="../index.php/empresa">Empresa</a>
        <a class="p-2 text-dark" href="../index.php/Contatos">Suporte</a>
      </nav>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Preços</h1>
      <p class="lead">Escolha o plano ideal para você pelo melhor preço. </p>
    </div>


    <?php foreach ($planos as $plano): ?>



    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <?= $plano['Nome'] ?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$  <?= $plano['Valor'];?>    <small class="text-muted">/ mês</small></h1>

            <ul class="list-unstyled mt-3 mb-4">
              <li>1 mês de acesso</li>
              <li>Treinador</li>
              <li>3 vezes por semana</li>
              <li>Halteres</li>
            </ul>
            <a href="../index.php/localizacao"> <button type="button" class="btn btn-lg btn-block btn-outline-primary">Visite-nos</button> </a>
          </div>
        </div>

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <?= $plano['Nome'] ?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$<?= $plano['Valor'] ?> <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Acompanhamento de Treino</li>
              <li>Acesso Livre</li>
              <li>Dieta padrão</li>
              <li>Equipamentos</li>
            </ul>
            <a href="../index.php/localizacao"> <button type="button" class="btn btn-lg btn-block btn-primary">Visite-nos</button> </a>
          </div>
        </div>

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <?= $plano['Nome'] ?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$ <?= $plano['Valor'] ?>  <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Treinador Particular</li>
              <li>Avalição Física</li>
              <li>Suplementos</li>
              <li>Nutricionista</li>
            </ul>
             <a href="../index.php/localizacao"><button type="button" class="btn btn-lg btn-block btn-primary">Visite-nos</button>  </a>
          </div>
        </div>
      </div>



      <?php endforeach; ?>




      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="../index.php/Galeria">Equipamentos</a></li>
              <li><a class="text-muted" href="../index.php/Galeria">Halteres</a></li>
              <li><a class="text-muted" href="../index.php/Galeria">Barras</a></li>
              <li><a class="text-muted" href="../index.php/Galeria">Lazer</a></li>
              <li><a class="text-muted" href="../index.php/Galeria">Lanchonete</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Recursos</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="../index.php/Galeria/Nutricionista">Nutricionista</a></li>
              <li><a class="text-muted" href="../index.php/Galeria/Treinador">Treinador</a></li>
              <li><a class="text-muted" href="../index.php/Galeria/Suplementos">Suplementos</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Sobre</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Equipe</a></li>
              <li><a class="text-muted" href="#">Localizações</a></li>
              <li><a class="text-muted" href="#">Privacidade</a></li>
              <li><a class="text-muted" href="#">Termos</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/../../CodeIgniter/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/../../CodeIgniter/assets/js/vendor/popper.min.js"></script>
    <script src="/../../CodeIgniter/assets/dist/js/bootstrap.min.js"></script>
    <script src="/../../CodeIgniter/assets/js/vendor/holder.min.js"></script> 
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
