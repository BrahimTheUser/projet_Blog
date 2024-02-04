<?php

namespace App\Table;

class Article
{
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $key = $method(); // stocker dans le variable d'instance, pour qu'il ne soit pas lourd
        return $key;    // return to the video 13 after a while
    }
    public function getURL()
    {
        return 'index.php?p=post&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . $this->continue . '</p>';
        $html .= '<p> <a href="' . $this->url . '">Voir la suite </a></p>';
        return $html;
    }
}