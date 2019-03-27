<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Blog
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Blog
{

    public function index()
    {
        echo "Página Blog <br>";
    }

}
