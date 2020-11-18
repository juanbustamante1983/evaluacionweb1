<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body style= "background-color:#2EFE2E">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Evaluacion 1</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Ejercicio 1 </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                        </li>
                        <li class="nav-item ">
                            <a  class="nav-link" href="ejercicio3.php">Ejercicio 3 </a>
                        </li>
                        <li class="nav-item">
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
                    <form class="mt-5" action="ejercicio2.php" method="POST">
                        <h3 class="m-5; pb-107">Indice De Masa Corporal</h3>
                        <div class="form-group">
                            <label >Estarura</label>
                            <input type="text" class="form-control" placeholder="Ingrese Su Estatura (Ej:1.85)" name="estatura">
                        </div>
                        <div class="form-group">
                            <label>Peso</label>
                            <input type="text" class="form-control" placeholder="Ingrese Su Peso Actual" name="peso">
                        </div>
                            <button type="submit" class="btn btn-danger"name="calcular">Calcular IMC</button>
                        </form>
                        <?php  if(isset($_POST["calcular"])) {
                                  
                        $altura=$_POST["estatura"];
                        $peso=$_POST["peso"];

                        $total=$peso/($altura*$altura);

                            echo("Su IMC Es De : ".$total ."%");

                            if ($total<=18.5){
                                echo("\nPeso infuficiente");
                            } elseif ($total>=18.5 && $total<=24.9) {
                                echo("\nPeso Normal");
                                }  elseif ($total>=25 && $total<=26.9) {
                                echo("\nSobre Peso Grado 1");
                            } elseif ($total>=27 && $total<=29.9) {
                                echo("\nSobre Peso Grado 2 ( Preobesidad)");
                            } elseif ($total>=30 && $total<=34.9) {
                                echo("\nObesidad Tipo 1"); 
                            }  elseif ($total>=35 && $total<=39.9) {
                                echo("\nObesidad Tipo 2"); 
                            } elseif ($total>=40 && $total<=49.9) {
                                echo("\nObesidad Tipo 3 (Mórbida)"); 
                            } elseif ($total>50 ) {
                                echo("\nObesidad Tipo 4 (Extrema)");
                            }                              
                        }            
                        ?>

                    </div>
                </div>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
     