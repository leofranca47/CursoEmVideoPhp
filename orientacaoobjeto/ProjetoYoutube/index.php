<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula1 poo");
        $v[1] = new Video("Aula2 poo");
        $v[2] = new Video("Aula3 poo");

        $p[0] = new Gafanhoto("Leo", 32, "Masculino", "leo");
        $p[1] = new Gafanhoto("Diego", 35, "Masculino", "diego");
        $p[2] = new Gafanhoto("João", 22, "Maculino", "joao");

        $vi[0] = new Visualizacao($p[0], $v[1]);

        $vi[0]->avaliar();

        var_dump($vi);
    ?>
</body>
</html>