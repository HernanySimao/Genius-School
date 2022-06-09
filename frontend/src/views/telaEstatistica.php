<?php 
session_start();
require '../../../controllers/estatisticaCandidatos.php';


 if(!isset($_SESSION['sessao'])) header('location: telaLogin.php');
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleEstatistica.css">
    <link rel="stylesheet" type="text/css" href="../style/styleConsultar.css">
   <link rel="icon" href="../assets/icon.png">
    <title>Estatistica</title>
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
                        <a class="link" href="../views/telaDesenvolvedores.php">Desenvolvedores</a>&nbsp;&nbsp;
                        
                        <a class="link" href="../views/telaHome.php">Sair</a> &nbsp;&nbsp;
                    </div>
                </div>

            </div>
 

        </div>

        

      <div class="container">
          <div class="row">
            <div class="mt-5 ">
                <table class="table table-dark table-hover ">
                    <h3 class="text-white mb-4">Estatistica</h3>
                        <tr class="text-white table-active">
                            <th>Homens</th>
                            <th>Mulheres</th>
                            <th>Total</th>
                        </tr>

                        <tr class="text-white">
                            <th><?php echo number_format($perSexoM, 1);?>%</th>
                            <th><?php echo number_format($perSexoF, 1);?>%</th>
                            <th><?php echo number_format($perTotalSexo, 1);?>%</th>
                        </tr>                   
                </table>

                <table class="table table-dark table-hover ">
                    <h3 class="text-white mb-4">Estatistica curso</h3>
                        <tr class="text-white table-active">
                            <th>Informática</th>
                            <th>Electricidade</th>
                            <th>Química</th>
                            <th>Construção civil</th>
                            <th>Mecânica</th>
                            <th>Medicina</th>
                            <th>Total</th>
                        </tr>

                        <tr class="text-white">
                     <th><?php echo number_format($perInfo, 1);?>%</th>
                     <th><?php echo number_format($perElec, 1);?>%</th>
                     <th><?php echo number_format($perQuimi, 1);?>%</th>
                     <th><?php echo number_format($perConstru, 1);?>%</th>
                     <th><?php echo number_format($perMeca, 1);?>%</th>
                     <th><?php echo number_format($perMedi, 1);?>%</th>
                            <th><?php echo$perTotal;?>%</th>
                        </tr>                   
                </table>
          </div>
      </div>
    </div>
</body>
</html>