<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Contato
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Contato
{

    public function index()
    {
        echo "Página Contato <br>";
    }

}
