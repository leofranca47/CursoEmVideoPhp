<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';

        $m = new Mamifero();
        $a = new Ave();
        $m->setPeso(33);
        $m->locomover();
        $a->locomover();
    ?>
</body>
</html>