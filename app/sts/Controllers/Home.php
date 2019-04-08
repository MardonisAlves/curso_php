<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Home
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Home
{

    private $Dados;

    public function index()
    {
        // MENUR
        $menu = new \Sts\Models\StsMenu();
        $this->Dados['menu'] =  $menu->listarMenu();

        //SEO
        $seo = new \Sts\Models\StsSeo();
        $this->Dados['seo']= $seo->listarSeo();
        // CAROUSEL
        $home = new \Sts\Models\StsCarousel();
        $this->Dados['sts_carousels']= $home->index();

        // SERVIÇOS
        $listar_ser = new \Sts\Models\StsServico();
        $this->Dados['sts_servicos'] = $listar_ser->listar();
        
        // VIDEOS
        $videos = new \Sts\Models\StsVideo();
        $this->Dados['sts_videos'] = $videos->listar();

        // ARTIGOS

        $artigos = new \Sts\Models\StsArtHome();
        $this->Dados['sts_artigos'] = $artigos->listarArtHome();
        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->Dados);
        $carregarView->renderizar();
    }

}
