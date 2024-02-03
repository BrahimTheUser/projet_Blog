<?php

namespace App\Table;

class Article
{
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->key = $this->$method();
        return $this->$key;
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