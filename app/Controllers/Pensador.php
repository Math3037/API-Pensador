<?php

namespace App\Controllers;

use App\Models\PensadorModel;

class Pensador extends BaseController
{
    public function index()
    {
        $this->imagem_recente();
    }

    public function imagem_recente()
    {
        $pensadorModel = new PensadorModel;
        $urlImg = $pensadorModel->getLastImage();

        if ($urlImg ===  false){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            exit();
        }

        header('location:' . $pensadorModel->getLastImage());
        exit();
    }
}
