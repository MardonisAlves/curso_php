<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of SobreEmpresa
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class SobreEmpresa
{

    public function index()
    {
        echo "Página Sobre Empresa <br>";
    }

}
