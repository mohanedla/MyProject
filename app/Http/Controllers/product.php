<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function product_product()
    {
        return View('product.product');

    }

    public function product_add_product()
    {
        return View('product.add_product');
    }

    public function product_detail_page()
    {
        return View('product_detail_page');

    }
}
