<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Site de Academia" content="">
    <meta name="Matheus Levy" content="">
    <link rel="icon" href="/../../CodeIgniter/assets/Icone/ContatoIcone.ico">

    <title>Contatos</title>
    <link href="/../../CodeIgniter/assets/css/style.css" rel="stylesheet">
    <link href="/../../CodeIgniter/assets/css/normalize.css" rel="stylesheet">

  </head>
  
  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">Academia</a>
      </div>
    </div>
  </nav>

  <div class="container login">

    <form action="/pagina-processa-dados-do-form" method="post" class="form-signin">
      <h2 class="form-signin-heading"><img src="/../../CodeIgniter/assets/Imagens/Academia.png"/></h2>
      <label for="inputUser" class="sr-only">Usuário</label>
      <input id="inputUser" class="form-control" placeholder="Usuário" required="" autofocus="" type="text">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

      <div class="row">
        <div class="col-md-6"><a class="btn btn-link" href="../index.php/Registro" role="button">Registrar</a></div>
      </div>


    </form>

  </div> 

  </body>
  
</html>