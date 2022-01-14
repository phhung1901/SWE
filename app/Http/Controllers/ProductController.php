<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('client.pages.home');
    }

    public function allProduct(){
        $all_product = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
                                ->select('product_name', 'slug', 'description', 'image', 'status', 'price', 'discounts.discount')
                                // ->where('category_id', '=', 1)
                                ->get();
        return view('client.pages.all', [
            'all_product' => $all_product
        ]);
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

    public function outerwearProduct(){
        $outerwear_product = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
                                ->select('product_name', 'slug', 'description', 'image', 'status', 'price', 'discounts.discount')
                                ->where('category_id', '=', 2)
                                ->get();
        return view('client.pages.outerwear', [
            'outerwear_product' => $outerwear_product
        ]);
    }
    
    public function bottomProduct(){
        $bottom_product = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
                                ->select('product_name', 'slug', 'description', 'image', 'status', 'price', 'discounts.discount')
                                ->where('category_id', '=', 3)
                                ->get();
        return view('client.pages.bottom', [
            'bottom_product' => $bottom_product
        ]);
    }

    public function accProduct(){
        $acc_product = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
                                ->select('product_name', 'slug', 'description', 'image', 'status', 'price', 'discounts.discount')
                                ->where('category_id', '=', 4)
                                ->get();
        return view('client.pages.accessories', [
            'acc_product' => $acc_product
        ]);
    }

    public function newProduct(){
        $new_product = Product::join('discounts', 'products.discount_id', '=', 'discounts.id')
                                ->select('products.id', 'product_name', 'slug', 'description', 'image', 'status', 'price', 'discounts.discount')
                                ->where('created_at', '>', '2021-12-06')
                                ->get();
        return view('client.pages.home', [
            'new_product' => $new_product
        ]);
    }
}
