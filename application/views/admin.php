<html class="admin">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    </head>
    <body class="admin" style="background-color:#353535">
            <div><p style="color:white">Login</p></div>

            <?php if($this->session->flashdata("success")) : ?>
            <p> <?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger"))  : ?>
             <p> <?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>
        <form action="Admin/autenticar" method="post">
            <input type="text" name="usuario" value="" placeholder="Usuário"/ style="color:white">
            <input type="password" name="senha" value=""  placeholder="Senha" style="color:white"/>
            <input type="submit" name="enviar" value="Login"/>
        </form>
    </body>
</html> 