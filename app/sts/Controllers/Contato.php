<?php

namespace App\sts\Controllers;

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
    private $Dados;

    public function index()
    {
        $this->Dados = filter_input_array(INPUT_POST , FILTER_DEFAULT);

        //var_dump($this->Dados);
        
        if(!empty($this->Dados['CadMsgCont'])):
        unset($this->Dados['CadMsgCont']);
        $contato = new \Sts\Models\StsContato();
        $this->Dados= $contato->cadContato($this->Dados);

        endif;

        $carregarview = new  \Core\ConfigView('sts/Views/contato/contato', $this->Dados);
        $carregarview->renderizar();

    }

}
