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
  <body id="contatobodys">
     <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">Academia</a>
      </div>
    </div>
  </nav>
      <div id="Form">
        <form action="/pagina-processa-dados-do-form" method="post">
        <div id="wrap">
          <div>
             <label class="label-menu">Nome:</label>
            <input type="text" name="nome" id = "CampoNome" class= "textArea">
          </div>
          <div>
            <label class="label-menu">Email:</label>
            <input type="text" name="email" id = "CampoEmail" class= "textArea">
          </div>
        </div>
          <div>
             <label class="label-menu">Mensagem:</label>
            <textarea type="text" name="Mensagem" id = "CampoMensagem" class= "textArea"></textarea>
          </div>
          <div>
              <input type="button" value="Enviar"  class="botaoEnviar">
          </div>
        </form>
      </div>
  </body>


</html>