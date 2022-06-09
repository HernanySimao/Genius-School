 <?php

    require '../../../controllers/candidatoConsultar.php'; 
    header("Content-type: text/html; charset=utf-8");
    
    $message;
    if(isset($_SESSION['pesquisa'])){
       $message=$_SESSION['pesquisa'];
       unset($_SESSION['pesquisa']);
       //echo"<h1 class='msg'>$message</h1>";
   }
   
 
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleConsultar.css">
    <link rel="icon" href="../assets/icon.png">
    <style>.msg {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3E0CB;
    width: 100%;
    margin-bottom: 0;
    text-align: center;
    padding: 10px;
}</style>
    <title>Consultar</title>
    
</head>
<body>
      
    <div class=" centro">


        <div class=" container">
            <div class=" row">


                <div class="col-6 col-md-6">
                    <div>
                        <h1 class="text-white">
                            GS <span style="color: #ff0;">.</span>
                        </h1>
                    </div>
                </div>


                <div class=" col-6 col-md-6">
                    <div class=" menu">
                        <a class=" link" href="../views/telaHome.php">Home</a> &nbsp;&nbsp;
                        
                        </div>
                </div>


            </div>
 

        </div>
       
         



       
   <div>
    <div class="items">
           <div class="container pt-5">
                 <div class="row pt-5 centraliza">
                    <div class="col-md-10 col-sm-12 ">
                        <form method="post" action="">
                        <div class="">
                              <h5 class="text-white">Buscar</h5>       
                            <input 
                            name="pesquisa"
                            type="text" 
                            class="form-control"
                            id="pesquisa"
                            autocomplete="off"
                            placeholder="Pesquisar candidato..."
                             >
                            
                        </div>
                        
                    </div>
                    <div class="col-md-2 go">
                        <button   type="submit" id="id" value="2" class="btn btn-dark">GO</button>
                       </div>
                       </form>
                       
                       <div class="col-md-12 mt-4">
                    <form action="telaActualizar.php" method="post">
                    <table class="table table-dark table-hover ">
                        <h3 class="text-white mb-4"></h3>
                        <?php 
                        if(count($res)){?>
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
                            
                        </tr>
                        <?php
                        }else{
                            echo "<h1></h1>";
                        }
                        ?>
                        <?php 
                            if (count($res)) {
                                foreach ($res as $key=>$value) {
                                    $id=$value[0];
                                    $nome= $value[1];
                                    $idade=$value[2];
                                    $sexo= $value[3];
                                    $telefone= $value[4];
                                    $bi= $value[5];
                                    $media_final= $value[6];
                                    $antiga_escola= $value[7];
                                    $curso= $value[8];
                                    $estado= $value[9]; ?>
                        <tr class="text-white">
                            
                            <th><?php echo $nome ?></th>
                            <th><?php echo $idade ?></th>
                            <th><?php echo $sexo ?></th>
                            <th><?php echo $telefone ?></th>
                            <th><?php echo $bi ?></th>
                            <th><?php echo $media_final ?></th>
                            <th><?php echo $antiga_escola?></th>
                            <th><?php echo $curso ?></th>
                            <th><?php echo $state=$estado==0?'Não admitido':'Admitido'; ?></th>
                            <th><button  type="submit" name="id" value="<?php echo $id ?>" class="btn btn-success">Editar</button></th>
                            
                            <?php
                                }
                            }else{
                                
                                    echo "<h1 class='text-white pp'>Submeta uma pesquisa valida!</h1>";
                                }

                                          
                        ?>
                        </tr>
                    </table>
                    </form>
                </div>
                       
                 </div>
                 
           </div>
 

      

 
    </div>
      
    </div>
   
    
   

</body>
</html>