<?php
session_start();
if (isset($_SESSION['flash_message'])) {
    $message=$_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo"<h1 class='msg'>$message</h1>";   
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleLogin.css">
   <link rel="icon" href="../assets/icon.png">
   <style>.msg {
    background-color: #2e2f34;
    color: #fff;
    border: 1px solid #2e2f34;
    width: 100%;
    margin-bottom: 0;
    text-align: center;
    padding: 10px;
}</style>
    <title>Iniciar Sessão</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 mt-5">
                <div class="d-flex justify-content-center align-items-center mt-5"> 
                <div class="card">
                     <div class="card-body ">
                        <div class="card-text">
                          <h4 class="text-secondary">Iniciar Sessão</h4>
                        </div>

                        <div>
                           <form action="../../../controllers/adminController.php" method="post">
                               <div class="mt-4 mb-3">
                                   <label class="form-label" for="nome">Nome ou E-mail: </label>
                                   <input type="email"
                                   id="email" 
                                   name="email" 
                                   placeholder="O seu nome ou email..."
                                   autocomplete="off"
                                   class="form-control" required>
                               </div>

                               <div class="mb-3">
                                <label  class="form-label" for="numero">Senha: </label>
                                   <input type="password" 
                                   id="senha"
                                   name="senha"
                                   placeholder="A sua senha..."
                                   autocomplete="off"
                                   class="form-control" required>
                               </div>

                               <div class="mt-4">
                                   <button type="submit"
                                   class="btn btn-warning form-control">
                                   Iniciar</button>
                               </div>
 
                            <div class="mt-2">
                                <small> <a class="btn btn-dark" href="../views/telaHome.php"> Voltar </a></small>
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
</html>