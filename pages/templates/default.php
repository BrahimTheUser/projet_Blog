<?php

$db = new App\Database('blog');
$datas = $db->query('SELECT * FROM articles');
var_dump($datas);