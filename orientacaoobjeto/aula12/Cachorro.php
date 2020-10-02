<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero
{
    public function enterrarOsso()
    {
        echo "<p>enterrando osso</p>";
    }

    public function abanarRabo()
    {
        echo "<p>Abanando o rabo</P>";
    }
}