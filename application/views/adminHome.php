<html class="admin">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link href="/../../CodeIgniter/assets/dist/css/bootstrap.min.css" rel="stylesheet">
         <style type="text/css">
            #th-bb{
                color: white;
            }
            #td-bb{
                color: white;
            }
            h1{
                color: white;
            }
            input{
                font-size: 20px;
            }

         </style>
    </head>
    <body class="admin" style="background-color:#353535">
        <div class="container">
            <div><h1>Planos</h1></div>
            <table class="table">
                <tr>
                    <th id="th-bb">idPlano</th>
                    <th id="th-bb">Nome</th>
                    <th id="th-bb">Valor</th>
                </tr>
                <?php foreach ($planos as $plano) : ?>
                
                <tr>
                    <td id="td-bb"><?= $plano['idPlanos'] ?><td>
                    <td id="td-bb"><?= anchor("Plano/detalhe?id={$plano['idPlanos']}", $plano["Nome"]) ?><td>
                    <td id="td-bb"><?= $plano['Valor'] ?><td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div><h1>Cadastrar<h1> 
            <form action="Plano/cadastrar" method="post">
            <input type="text" name="nome" value="" placeholder="Nome do plano" style="color:black">
            <input type="number" name="valor" value=""  placeholder="Valor" style="color: black">
            <input type="submit" name="enviar" value="Cadastrar"/>
        </div>
        </form>
         
    </body>
</html> 