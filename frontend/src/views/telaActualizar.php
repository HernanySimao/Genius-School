<?php

require '../../../database/db.php';
session_start();
if(isset($_SESSION['flash_message'])){
    $message=$_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo"<h1 class='msg'>$message</h1>";
}
$id=$_POST['id'];

 $sql="SELECT * FROM candidatos WHERE id=$id";

 $result=$conn->query($sql);

 $res=mysqli_fetch_all($result);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleCadastrar.css">
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
    <title>Cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="">
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card">
                        <div class="card-body ">
                            <div class="card-text">
                                <h4 class="text-secondary">Actualizar aluno</h4>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <form action="../../../controllers/candidatoActualizar.php" method="post">
                                        <div class="mt-4 mb-3">
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
                                                $estado= $value[9];
                                        ?>
                                            <label class="form-label" for="nome">Nome do aluno </label>

                                            <input minlength="3" value="<?php echo $nome?>" 
                                            maxlength="100" 
                                            required type="text" 
                                            id="nome" name="nome" 
                                            placeholder="O seu nome..."
                                            autocomplete="off"
                                            class="form-control">

                                            <div class="mb-3 mt-2">
                                                <label class="form-label" for="sexo">Sexo </label>
                                                <select class="form-select" name="sexo" id="sexo" required>
                                         <option value="<?php echo $sexo?>"><?php  echo $se=$sexo=='M'?'Masculino':'Femenino'?></option>
                                         <option value="M">Masculino</option>
                                         <option value="F">Femenino</option>
                                     </select>
                                     
                                     
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="bilhete">Número do B.I do aluno  </label>
                                                <input required 
                                                minlength="14" 
                                                maxlength="14"
                                                value="<?php echo $bi?>" 
                                                type="text" id="bilhete" 
                                                name="bilhete" placeholder="O seu bilhete..."
                                                autocomplete="off"
                                                class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="escolaAntiga">Antiga escola</label>
                                                <input 
                                                required 
                                                minlength="5"
                                                 maxlength="100" 
                                                 value="<?php echo $antiga_escola ?>"
                                                 type="text" 
                                                 id="escolaAntiga" 
                                                 name="escolaAntiga" 
                                                 placeholder="A sua antiga escola..."
                                                 autocomplete="off" 
                                                 class="form-control">
                                            </div>

                                        </div>
                                </div>

                                <div class="col-md-6 col-sm-6 mt-4">
                                    <label class="form-label" for="idade">Idade do aluno </label>
                                    <input 
                                    required 
                                    min="12" 
                                    value="<?php echo $idade ?>"
                                    max="20" 
                                    type="number" 
                                    id="idade" 
                                    name="idade" 
                                    placeholder="A sua idade..."
                                    autocomplete="off"
                                    class="form-control">




                                    <div class="mb-3 mt-2">
                                        <label class="form-label" for="telemovel">Telemóvel</label>
                                        <input 
                                        required
                                        value="<?php echo $telefone?>" 
                                        min="0" 
                                        type="number" 
                                        id="telemovel" 
                                        name="telemovel" 
                                        placeholder="O seu telemóvel... "
                                        autocomplete="off" 
                                        class="form-control ">
                                    </div>



                                    <div class="mb-3">
                                        <label class="form-label " for="mediaFinal ">Média Final</label>
                                        <input 
                                        required 
                                        min="10" 
                                        max="20" 
                                        value="<?php echo $media_final ?>"
                                        type="number" 
                                        id="mediaFinal" 
                                        name="mediaFinal" 
                                        placeholder="A sua média final..."
                                        autocomplete="off" 
                                        class="form-control">
                                    </div>

                                    <div class="mb-3 ">
                                        <label class="form-label " for="cursosDaEscola ">Curso que pretende</label>
                                        <select required class="form-select " name="cursosDaEscola" id="cursosDaEscola">
                                           <option value="1">Informática</option>
                                           <option value="2">Electricidade</option>
                                           <option value="3">Química</option>
                                           <option value="4">Construção Civil</option>
                                           <option value="5">Mecânica</option>
                                           <option value="6">Medicina</option>
                                       </select>
                                    </div>


                                </div>
                            </div>
<?php 
    }
        
    }else{
        echo "<h1>Olaaaaaa</h1>";
}?>

                            <div class="mt-4 ">
                                <button type="submit " class="btn btn-dark form-control ">
                                   Actualizar</button>
                            </div>


                            <div class="mt-3 ">
                                <small> <a class="btn btn-warning " href="../views/telaHome.php "> Voltar </a></small>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
<script>
    let telemovel = document.findElementById('telemovel');

    function verificarTelefone() {
        /* if (telemovel.lenght < 9) {
            if (telemovel.lenght > 9) {
                alert('Número de telefone incorreto')
            }
        }*/

        return alert('funcionando');
    }
</script>

</html>