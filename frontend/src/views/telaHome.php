<?php
session_start();
if (isset($_SESSION['flash_message'])) {
    $message=$_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo"<h1 class='msg'>$message</h1>";
}
unset($_SESSION['sessao']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
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
    <title>Página Inicial</title>

</head>

<body>

    <div class="centro">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div>
                        <h2 class="text-white pt-3">
                            GS <span class="ponto">.</span>
                        </h2>
                        
                    </div>
                </div>
                <div class=" col-6 col-md-6">
                    <div class="menu">
                        <a class="hyperlink btnX" href="../views/telaLogin.php">Entrar</a>
                    </div>
                </div>


            </div>

        </div>
        <div>
            <img class="img" src="../assets/img.png" alt="">



            <div class="items">


                <div class="container">

                    <div class="col-md-4 col-sm-6 col-12">
                        <h1 class="text-white mgP">Genius School <label class="ponto">.</label></h1>
                    </div>
                    <div class="ordem p-lg-5 text-white">
                        <h4>A sua genialidade pode mudar o mundo. &copysr;<br> Faça com a melhor segurança. <br> Faça com o melhor desempenho.
                        </h4>
                    </div>

                    <div class="row">


                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="paddingPerso">
                                <a href="../views/telaCadastrar.php" class="neonEfect-btn">CADASTRAR&nbsp;ALUNO</a>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-3 col-6">
                            <!-- Null -->
                        </div>



                        <div class="col-md-3 col-sm-4 col-6">
                            <div class="paddingPerso ">
                                <a href="../views/telaConsultar.php" class="neonEfect-btn">CONSULTAR&nbsp;ALUNO</a>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

        


        <footer>
            <div>
                <h4 class="text-center pt-3"> &copy; <small>Copyright</small> Genius School </h4>
            </div>
        </footer>

    </div>
    <!-- fim da imagem -->

    <div class="container">
        <span class="efeitoT"></span>
    </div>

    </div>

    </div>




    </div>
    </div>
 
</body>

</html>