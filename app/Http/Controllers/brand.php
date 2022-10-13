<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brand extends Controller
{
    public function brand_brand()
    {
        return View('brand.brand');

    }

    public function brand_add_brand()
    {
        return View('brand.add_brand');

    }
}


?>