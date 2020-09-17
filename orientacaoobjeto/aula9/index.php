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
        require_once 'Livro.php';

        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "F");

        $l[0] = new Livro("PHP Básico", "José da Silva", 300,3, true, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, 4, false, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, 6, true, $p[1]);

        $l[0]->folhear(500);
        $l[0]->voltarPag();

        var_dump($l[0], $l[0]->detalhes());
    ?>
</body>
</html>