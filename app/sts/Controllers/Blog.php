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
    private $Dados;
    private $pageId;
    public function index()
    {
        $pageId = filter_input(INPUT_GET ,"pg" , FILTER_SANITIZE_NUMBER_INT);
        $this->pageId = $this->pageId ? $this->pageId : 1;
        
        $listarArtigos = new \Sts\Models\StsBlog();
        $this->Dados['artigos'] = $listarArtigos->listarArtigos($this->pageId);
        

        
        $recentes = new \Sts\Models\StsArtRecente();
        $this->Dados['artRecente'] = $recentes->listarArtRecente();


        $StsArtDestaque = new \Sts\Models\StsArtDestaque();
        $this->Dados['artDestaque'] = $StsArtDestaque->listarArtDestaque();


        $StsPaginas = new \Sts\Models\StsPaginas();
        $this->Dados['paginacao'] = $StsPaginas->listarPaginas();

        $sobreAutor = new \Sts\Models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $sobreAutor->sobreAutor();

        $this->Dados['paginacao'] = $listarArtigos->getResultadoPg();


        $carregarview = new     \Core\ConfigView('sts/Views/blog/blog' , $this->Dados);
        $carregarview->renderizar();
    }

}
