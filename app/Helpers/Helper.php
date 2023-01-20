<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    static public function  get_property($n, $value)
    {
        foreach (explode('->',$n) as $property) {
            $value  = self::get_nested_property($property, $value);
        }
        return $value;
    }
    static private function  get_nested_property($property, $object)
    {
        return $object->{$property};
    }
}