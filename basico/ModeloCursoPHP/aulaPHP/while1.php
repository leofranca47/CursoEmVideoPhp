<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
        </head>
    <body>
        <div>
            <?php
                // $inicio = isset($_GET['inicio'])?$_GET['inicio']:0;
                // $final = isset($_GET['final'])?$_GET['final']:0;
                // $i = isset($_GET['incremento'])?$_GET['incremento']:0;

                // if($inicio <= $final){
                //     while($inicio <= $final){
                //         echo "$inicio ";
                //         $inicio += $i;
                //     }
                // }elseif($inicio > $final){
                //     while($inicio >= $final){
                //         echo "$inicio ";
                //         $inicio -= $i;
                //     }
                // }

                $fatorial = isset($_GET["fatorial"])?$_GET['fatorial']:0;
                    $i = $fatorial;
                do{
                   $resu = $fatorial *= $i ;
                   $i--;
                }while($i >= 1);
                echo $resu;
                
            ?>
            <br><a href="while.html">Voltar</a>
        </div>
    </body>
</html>