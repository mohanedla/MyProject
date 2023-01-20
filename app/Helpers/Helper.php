<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    static public function  get_property($code, $item)
    {
        foreach (explode('->',$code) as $property) {
            $item  = self::get_nested_property($property, $item);
        }
        return $item;
    }
    static private function  get_nested_property($property, $item)
    {
        return $item->{$property};
    }
}