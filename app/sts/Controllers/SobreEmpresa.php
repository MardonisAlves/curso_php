<?php

namespace App\sts\Controllers;

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
    private $Dados ;
    public function index()
    {
        //echo "Parei nesta Página Sobre Empresa <br>";

        $sobreempresa = new \Sts\Models\StsSobEmp();
        $this->Dados['sob_empresa'] = $sobreempresa->listarSobEmp();

        $carregarview = new \Core\ConfigView("sts/Views/sobEmp/sobEmp" , $this->Dados);
        $carregarview->renderizar();


    }

}
