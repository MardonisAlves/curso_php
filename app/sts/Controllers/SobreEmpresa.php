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
         // MENUR
         $menu = new \Sts\Models\StsMenu();
         $this->Dados['menu'] =  $menu->listarMenu();
         
          //SEO
          $seo = new \Sts\Models\StsSeo();
          $this->Dados['seo']= $seo->listarSeo();
        //echo "Parei nesta Página Sobre Empresa <br>";

        $sobreempresa = new \Sts\Models\StsSobEmp();
        $this->Dados['sob_empresa'] = $sobreempresa->listarSobEmp();

        $carregarview = new \Core\ConfigView("sts/Views/sobEmp/sobEmp" , $this->Dados);
        $carregarview->renderizar();


    }

}
