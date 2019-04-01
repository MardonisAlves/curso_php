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
    private $Dados;

    public function index()
    {
        $this->Dados = ['nome' => 'Mardonis' , 'email' => 'mardonisgp@gmail.com', 'assunto' => 'teste4',
        'mensagem' => 'sms teste', 'created' => date('y-m-d H:i:s')];
        var_dump($this->Dados);
        $contato = new \Sts\Models\StsContato();
        $this->Dados= $contato->cadContato($this->Dados);

    }

}
