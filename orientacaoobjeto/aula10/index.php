<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Funcionario();
        $p4 = new Professor();

        $p2->setNome("Leonardo");
        $p2->setIdade(32);
        $p2->setSexo("Masculino");
        $p2->setCurso("informatica");
        $p2->setMatr(true);

        var_dump($p2);
    ?>
</body>
</html>