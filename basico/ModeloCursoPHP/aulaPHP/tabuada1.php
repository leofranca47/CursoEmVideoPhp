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
        $num = isset($_GET['num'])? $_GET['num']:1;
        for($a = 1; $a <= 10; $a++){
            $r = $num * $a;
            echo "$num x $a = $r<br>";
        }
        
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 