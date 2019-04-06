<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Artigo
{
    private $Dados;
    private $Artigo;
    private $pageId;
   public function index($Artigo = null)
   {
    
    
    $pageId = filter_input(INPUT_GET ,"pg" , FILTER_SANITIZE_NUMBER_INT);
    $this->pageId = $this->pageId ? $this->pageId : 1;


    $this->Artigo = (string) $Artigo;

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



        $recentes = new \Sts\Models\StsArtigo();
        $this->Dados['sts_artigos'] = $recentes->visualizarArtigo($this->Artigo);

        $prox = new \Sts\Models\StsArtProxAnt();
        $this->Dados['artProximo'] = $prox->artigoProximo($this->Dados['sts_artigos'][0]['id']);
        $this->Dados['artAnterior'] = $prox->artigoAnterior($this->Dados['sts_artigos'][0]['id']);

       $carregarview = new \Core\ConfigView('sts/Views/blog/artigo' , $this->Dados);
       $carregarview->renderizar();
   }
}