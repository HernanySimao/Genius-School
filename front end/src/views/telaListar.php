<?php
require '../../../controllers/candidatoListar.php';
require '../../../controllers/adminController.php';
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['senha']) ){
    header('location: ../frontend/src/views/telaLogin.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleListar.css">
    <link rel="icon" href="../assets/icon.png">
    <title>Consultar</title>


</head>

<body>

    <div class="centro">
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
                        <a class="link" href="../views/telaHome.php">Home</a> &nbsp;&nbsp;
                        <a class="link" href="../views/telaConsultar.php">Consultar</a> &nbsp;&nbsp;
                        <a class="link" href="../views/telaDesenvolvedores.php">Desenvolvedores</a> &nbsp;&nbsp;
                        <a class="link" href="../views/telaHome.php">Sair</a>
                    </div>
                </div>
            </div>



        </div>










        <div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <form action="../../../controllers/candidatoAdmitir.php" method="post">
                    <table class="table table-dark table-hover ">
                        <h3 class="text-white mb-4">Cadidatos</h3>
                        <tr class="text-white table-active">
                            <th>#</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Sexo</th>
                            <th>Telefone</th>
                            <th>B.I</th>
                            <th>Media final</th>
                            <th>Antiga escola</th>
                            <th>Curso</th>
                            <th>*</th>
                            <th>*</th>
                        </tr>
                        <?php 
                            if (count($res)) {
                                foreach ($res as $key=>$value) {
                                    $id= $value[0];
                                    $nome= $value[1];
                                    $idade=$value[2];
                                    $sexo= $value[3];
                                    $telefone= $value[4];
                                    $bi= $value[5];
                                    $media_final= $value[6];
                                    $antiga_escola= $value[7];
                                    $curso= $value[11];
                                    $estado= $value[9]; ?>
                        <tr class="text-white">
                            <th><?php echo $id ?></th>
                            <th><?php echo $nome ?></th>
                            <th><?php echo $idade ?></th>
                            <th><?php echo $sexo ?></th>
                            <th><?php echo $telefone ?></th>
                            <th><?php echo $bi ?></th>
                            <th><?php echo $media_final ?></th>
                            <th><?php echo $antiga_escola?></th>
                            <th><?php echo $curso ?></th>
                            <th><?php echo $state=$estado==0?'Não admitido':'admitido'; ?></th>
                            <th><button  type="submit" name="id" value="<?php echo $id ?>" class="btn btn-success">Admitir</button></th>
                            <th><button  type="submit" name="id2" value="<?php echo $id ?>" class="btn btn-danger">x</button></th>
                            <?php
                                }
                            }else{
                                echo '<h1>Sem candidatos no momento</h1>';
                            }

                            
                        ?>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>