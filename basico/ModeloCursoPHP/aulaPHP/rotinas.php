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
        function soma()
        {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i = 0; $i < $t; $i++){
                $s += $p[$i];
            }
            return $s;
        }
        

        echo soma(8,6,9);
    ?>
</div>
</body>
</html>
 