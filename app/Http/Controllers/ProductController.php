<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('client.pages.home');
    }
    public function topProduct(){
        $top_product = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
                                ->select('product_name', 'slug', 'description', 'image', 'status', 'price', 'discounts.discount')
                                ->where('category_id', '=', 1)
                                ->get();
        return view('client.pages.top', [
            'top_product' => $top_product
        ]);
    }
}
