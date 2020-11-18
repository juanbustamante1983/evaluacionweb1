<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Evaluacion 1</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Ejercicio 1 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                        </li>
                        <li class="nav-item active">
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
            <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-5 ; m-5 pb-5 " style="background-color:white">
                        <form class="mt-5" action="ejercicio3.php" method="POST">
                            <h3 class="m-5; pb-107">Total venta</h3>
                            <div class="form-group">
                                <label >Cantidad De Calzado</label>
                                <input type="text" class="form-control" placeholder="Cantidad De zapatos" name="cantidad">
                            </div>
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control" placeholder="Precio calzado" name="precio">
                            </div>
                            <button type="submit" class="btn btn-primary"name="total">TOTAL </button>
                                    
                        </form>
                        <?php  if(isset($_POST["total"])) {
                                  
                            $cantidad=$_POST["cantidad"];
                            $precio=$_POST["precio"];
                            $descuento;
                            $total=$cantidad*$precio;
                             
                            if ($cantidad<3 ){
                                echo("\n\nTOTAL A APAGAR ES DE :  " .$total. "$  PESOS,  NO TIENE  NINGUN DESCUENTO.");
                            }elseif ($cantidad==3 ){
                                $descuento=$total*0.10;
                                $tpagar=$total-$descuento;  
                                echo("\n\nTOTAL A APAGAR ES DE :  " .$tpagar."$  PESOS, SU DESCUENTO ES DE 10%  " .$descuento. "$  PESOS."); 
                            }elseif($cantidad>=4 && $cantidad <=7){
                                $descuento=$total*0.20;
                                $tpagar=$total-$descuento;  
                                echo("\n\nTOTAL A APAGAR ES DE :  " .$tpagar."$  PESOS, SU DESCUENTO ES DE 20%  " .$descuento. "$  PESOS." ); 
                            }elseif($cantidad>=8){
                                $descuento=$total*0.50;
                                $tpagar=$total-$descuento; 
                                echo("\n\nTOTAL A APAGAR ES DE :  " .$tpagar."$  PESOS, SU DESCUENTO ES DE 50%  " .$descuento. "$  PESOS." );    
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
     