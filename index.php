<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body style= "background-color:black">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Evaluacion 1</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Ejercicio 1 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="ejercicio3.php">Ejercicio 3 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
                        </li>
                    </ul>
                </div>
            </nav>    
        </header>
        <main>
        <div class="container"  >
                <div class="row justify-content-center" >
                    <div class="col-5 ; m-5 pb-5 " style="background-color:white">
                        <form class="mt-5" action="index.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Ingrese Un Numero" name="numero1">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Ingrese Un Numero" name="numero2">
                                </div>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary mt-2 btn-block "  style="border: black 3px solid; font-size: 15pt; border-radius: 15px; 
                                background-color:red"  name="sumar">Sumar</button>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary mt-2 btn-block " style="border: black 3px solid; font-size: 15pt; border-radius: 15px; 
                                background-color:green" name="restar">Restar</button>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary mt-2 btn-block " style="border: black 3px solid; font-size: 15pt; border-radius: 15px; 
                                background-color:gray" name="multiplicar">Multiplicar</button>
                            </div>
                            
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary mt-2 btn-block "style="border: black 3px solid; font-size: 15pt; border-radius: 15px; "
                                name="dividir">Dividir</button>
                            </div>
                        </form>
                        <?php  if(isset($_POST["sumar"])):?> 
                            <div class="container; mt-2" style="border: black 2px solid; font-size: 10pt ; border-radius:15px">
                                <div class="row justify-content-center" >
                                    <div class="col-5" >
                                        <h5>
                                        <?php
                                        $numero1=$_POST["numero1"];
                                        $numero2=$_POST["numero2"];

                                        $total=$numero1 + $numero2;

                                        echo("La Suma Es De  : ".$total);
                                        ?>
                                        </h5>
                                    </div>
                                </div>   
                            </div>
                        <?php endif ?>
                        <?php  if(isset($_POST["restar"])):?> 
                            <div class="container; mt-2" style="border: black 2px solid; font-size: 10pt ; border-radius:15px">
                                <div class="row justify-content-center" >
                                    <div class="col-5" >
                                        <h5>
                                        <?php
                                        $numero1=$_POST["numero1"];
                                        $numero2=$_POST["numero2"];

                                        $total=$numero1 - $numero2;

                                        echo("La Resta Es De  : ".$total);
                                        ?>
                                        </h5>
                                    </div>
                                </div>   
                            </div>
                        <?php endif ?> 
                        <?php  if(isset($_POST["multiplicar"])):?> 
                            <div class="container; mt-2" style="border: black 2px solid; font-size: 10pt ; border-radius:15px">
                                <div class="row justify-content-center" >
                                    <div class="col-5" >
                                        <h5>
                                        <?php
                                        $numero1=$_POST["numero1"];
                                        $numero2=$_POST["numero2"];

                                        $total=$numero1 * $numero2;

                                        echo("La Multiplicacion Es De  : ".$total);
                                        ?>
                                        </h5>
                                    </div>
                                </div>   
                            </div>
                        <?php endif ?> 
                        <?php  if(isset($_POST["dividir"])):?> 
                            <div class="container; mt-2" style="border: black 2px solid; font-size: 10pt ; border-radius:15px">
                                <div class="row justify-content-center" >
                                    <div class="col-5" >
                                        <h5>
                                        <?php
                                        $numero1=$_POST["numero1"];
                                        $numero2=$_POST["numero2"];

                                        $total=$numero1 / $numero2;

                                        echo("La Divición Es De : ".$total);
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
                    
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
     