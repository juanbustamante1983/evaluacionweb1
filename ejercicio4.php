<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejercicio 4</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Evaluacion 1</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a  class="nav-link" href="index.php">Ejercicio 1 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="ejercicio3.php">Ejercicio 3 </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
                        </li>
                    </ul>
                </div>
            </nav>    
        </header>
        <main>
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-5 ; m-5 pb-5 " style="background-color:white">
                    <form class="mt-5" action="ejercicio4.php" method="POST">
                        <h3 class="m-5; pb-107">Salario semanal</h3>
                        <div class="form-group">
                            <label >Cantidad De Horas Trabajadas</label>
                            <input type="text" class="form-control" placeholder="Numero de Horas Trabajadas" name="cantidadhoras">
                        </div>
                            
                        <button type="submit" class="btn btn-primary "style=" background-color:gray"  name="total">TOTAL </button>        
                    </form>
                    <?php  if(isset($_POST["total"])):?> 
                            <div class="container; mt-2" style="border: black 2px solid; font-size: 10pt ; border-radius:15px">
                                <div class="row justify-content-align-self" >
                                    <div class="col-5" >
                                        <h5>
                                        <?php
                                        $cantidadhoras=$_POST["cantidadhoras"];
                                      

                                        if($cantidadhoras<=40 )  {
                                           $valorhora=20000;
                                           $total=$cantidadhoras * $valorhora;
                                        echo("Horas Trabajadas =".$cantidadhoras." Su Salario Es De : ".$total. "$  Pesos.");
                                        }else if($cantidadhoras>=41){
                                            $valorhoraex=25000;
                                            $hextras=$cantidadhoras-40;
                                            $total=$hextras*$valorhoraex+800000;
                                        echo("Horas Trabajadas =".$cantidadhoras." Su Salario Es De : ".$total. "$  Pesos.");
                                        }
                                    
                                        ?>
                                        </h5>
                                    </div>
                                </div>   
                            </div>
                        <?php endif ?>

                </div>
            </div>
        </div>                
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
     