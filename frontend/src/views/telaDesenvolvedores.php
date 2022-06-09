<?php session_start();
 if(!isset($_SESSION['sessao'])) header('location: telaLogin.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleDesenvolvedores.css">
    <link rel="stylesheet" type="text/css" href="../style/styleConsultar.css">
   <link rel="icon" href="../assets/icon.png">
    <title>Desenvolvedores</title>
</head>
<body>

    <div class ="centro">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div>
                        <h1 class="text-white">
                            GS <span style="color: #ff0;">.</span>
                        </h1>
                    </div>
                </div>
                <div class=" col-6 col-md-6">
                    <div class="menu">
                        <a class="link" href="../views/telaHomeLogin.php">Home</a> &nbsp;&nbsp;
                        <a class="link" href="../views/telaEstatistica.php">Estatistica</a>&nbsp;&nbsp;
                        <a class="link" href="../views/telaHome.php">Sair</a> &nbsp;&nbsp;
                    </div>
                </div>

            </div>
 

        </div>


      <div class="container">
          <div class="row">
            <div class="mt-5 ">
                <table class="table table-dark table-hover ">
                    <h3 class="text-white mb-4">Desenvolvedores</h3>
                        <tr class="text-white table-active">
                            <th>Nome</th>
                            <th>Telefone</th>
                        </tr>

                        <tr class="text-white">
                            <th>Hernany Simão</th>
                            <th>+244 930586957</th>
                        </tr>

                        <tr class="text-white">
                            <th>Cristiano Alberto</th>
                            <th>+244 945213730</th>
                        </tr>
                        <tr class="text-white">
                            <th>Celso Vicente</th>
                            <th>+244 923968508</th>
                        </tr>
                     
                        <tr class="text-white">
                            <th>Ludmila de Carvalho</th>
                            <th>+244 932151238</th>
                        </tr>
                     
                        <tr class="text-white">
                            <th>Nelson Pires</th>
                            <th>+244 944271186 </th>
                        </tr>
                     
                         
                     
                </table>
          </div>
      </div>
    </div>
</body>
</html>