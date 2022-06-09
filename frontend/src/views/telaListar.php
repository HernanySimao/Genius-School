<?php
session_start();
if(!isset($_SESSION['sessao'])) header('location: telaLogin.php');
require '../../../controllers/candidatoListar.php';
header("Content-type: text/html; charset=utf-8");
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
                        <a class="link" href="../views/telaHomeLogin.php">Home</a> &nbsp;&nbsp;
                        <a class="link" href="../views/telaConsultarLogin.php">Consultar</a> &nbsp;&nbsp;
                      
                    </div>
                </div>
            </div>



        </div>



        </div>






        <div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <form action="../../../controllers/candidatoAdmitir.php" method="post">
                    <table class="table table-dark table-hover ">
                        <h3 class="text-white mb-4">Cadidatos</h3>
                        <tr class="text-white table-active">
                            
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Sexo</th>
                            <th>Telefone</th>
                            <th>B.I</th>
                            <th>Media final</th>
                            <th>Antiga escola</th>
                            <th>Curso</th>
                            <th>Estado</th>
                            
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
                            
                            
                            <th><?php echo $nome ?></th>
                            <th><?php echo $idade ?></th>
                            <th><?php echo $sexo ?></th>
                            <th><?php echo $telefone ?></th>
                            <th><?php echo $bi ?></th>
                            <th><?php echo $media_final ?></th>
                            <th><?php echo $antiga_escola?></th>
                            <th><?php echo $curso?></th>
                            <th><?php echo $state=$estado==0?'Não admitido':'Admitido'; ?></th>
                            <?php if($estado==0){
                            echo "<th><button  type='submit' name='id' value='$id' class='btn btn-success'>Admitir</button></th>";
                            }else{
                                echo "<th><button  type='submit' name='id2' value='$id' class='btn btn-warning'>Banir</button></th>";
                            }
                            ?>
                            
                            
                            <th><button  type="submit" name="id3" value="<?php echo $id ?>" class="btn btn-danger"> Eliminar</button></th>
                            <?php
                                }
                            }else{
                                echo '<h1 class="text-white">Sem candidatos no momento</h1>';
                            }

                            
                        ?>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    
</body>

</html>