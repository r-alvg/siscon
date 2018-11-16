<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="../css/bootstrap.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        
            <a class="navbar-brand" href="../index.php"><h2>SisCon</h2></a>
             <div class = "container">
                 
             <div id="navbarTogglerDemo01">
                  <ul class="nav justify-content-center">
            
                    <li class="nav-item ">
                        <a class="nav-link" href="#"><h3>Sistema de consultorio Medico </h3> </a>
                    </li>
                
                </ul>
                
                </div>         
        </div>
                
               
       
            <ul class = "navbar-nav ml-auto"> 
                <li class = nav-item dropdown>    
                    <a class = "nav-item"><script type = "text/javascript" src = "js/data.js"></script></a>
                    <a class = "nav-tes real-clock" ><span id="real-clock"></span></a>
                </li>
            </ul>
           
        </nav>

    
    <div class="container login-container">
        <div class="row">
        <div class=" col-md-6 offset-md-3 login-form-1">
            <form action="criar_usuario_post.php" method="post">

                <div>
                    <label>Nome:</label>
                    <input type="text" class= "form-control" name="nome" id="nome">
                </div>
                <div>
                    <label>matricula:</label>
                    <input type="text"class= "form-control" name="matricula" id="matricula">
                </div>
                <div>
                    <label>Senha:</label>
                    <input type="password" class= "form-control"name="senha" id="senha">
                </div> 
                 <?php if (isset($_GET["usuarioCadastrado"]) && $_GET["usuarioCadastrado"] == true) { ?>
                      <div class = "col s4 agoraVai">
                     <p class = "" > Usuario já cadastrado</p>
                   </div>   <?php  } ?>          

                <input type="submit" class= "form-control" value="salvar" />
                </div>

            </form>
        </div>
    </div>
     <script>
    setInterval(function () {
        clock.innerHTML = ((new Date).toLocaleString().substr(11, 8));
    }, 1000);
     var clock = document.getElementById('real-clock');
    </script>
</body>
</html>