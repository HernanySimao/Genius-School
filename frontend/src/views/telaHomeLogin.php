<?php
 
session_start();

    if(!isset($_SESSION['sessao'])) header('location: telaLogin.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/styleHomeLogin.css">
    <link rel="icon" href="../assets/icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Zona Admin
  </title>
  
    <style>.msg {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3E0CB;
    width: 100%;
    margin-bottom: 0;
    text-align: center;
    padding: 10px;
}</style>
    <title> Sessão Iniciada</title>

</head>

<body class="g-sidenav-show  bg-gray-200">
  
    <!-- End Navbar -->
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
                        <a class="link" href="../views/telaListar.php">Listar candidatos</a> &nbsp;&nbsp;
                        
                        <a class="link" href="../views/telaDesenvolvedores.php">Desenvolvedores</a> &nbsp;&nbsp;
                        <a class="link" href="../views/telaHome.php">Sair</a> &nbsp;&nbsp;
                    </div>

            </div>

        </div>
        </div>
        <div>
            <img class="img" src="../assets/img4.png" alt="">



            <div class="items centra">


                <div class="container">

                    <div class="col-md-4 col-sm-4 col-12">
                        <h1 class="text-white mgP mb-3">Olá<label class="ponto">.</label></h1>
                    </div>
                    
                    <div class="ordem text-white">
                        <h4>Agora você pode usufruir dos nossos serviços <br>   
                            conferir a nossa qualidade e fazer a melhor gestão <label class="ponto">.</label> </h4>
                    
                    </div>

                    <div class="row">



                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="paddingPerso ">
                                <a href="../views/telaEstatistica.php" class="neonEfect-btn">ESTATÍSTICA</a>
                            </div>
                        </div>


                        
                        <div class="col-md-1 col-sm-3 col-6"> </div>


                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="paddingPerso ">
                                <a href="../views/telaConsultarLogin.php" class="neonEfect-btn">CONSULTAR</a>
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