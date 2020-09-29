<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Aluno.php';
        require_once 'Visitante.php';
        require_once 'Bolsista.php';

        $v1 = new Visitante();
        $v1->setNome("Leonardo visitante");
        $v1->setIdade(32);
        $v1->setSexo('Maculino');
        var_dump($v1);

        $a1 = new Aluno();
        $a1->setNome("Leo Aluno");
        $a1->setIdade(32);
        $a1->pagarMensalidade();
        var_dump($a1);

        $b1 = new Bolsista();
        $b1->setNome("Leo bolsista");
        $b1->RenovarBolsa();
        $b1->pagarMensalidade();
        var_dump($b1);
    ?>
</body>
</html>