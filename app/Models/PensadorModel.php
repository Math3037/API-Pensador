<?php

namespace App\Models;

use voku\helper\HtmlDomParser;

class PensadorModel
{
    public static function getLastImage()
    {
        $urlRecent = 'https://www.pensador.com/recentes/';
        try {
            return
                HtmlDomParser::file_get_html($urlRecent)
                ->findOne('div.thought-card')
                ->getAttribute('data-src');
        } catch (\Exception $e) {
            return false;
        }
    }
}