<?php

use function PHPSTORM_META\type;

class Page
{
    public static function showUsers()
    {
        $content = file_get_contents("users.json");
        $arr = json_decode($content, true);
        return $arr;
    }
}


foreach (Page::showUsers() as $v) {

    foreach ($v as $vv) : echo
        <<<ITEM
        <ul>
            <li>$vv[nombre] -> $vv[apellido] -> $vv[edad] -> $vv[telefono] -> $vv[email] -> $vv[password] -> $vv[cargo] -> $vv[nacionalidad]</li>
        </ul>
ITEM;
    endforeach;
}
