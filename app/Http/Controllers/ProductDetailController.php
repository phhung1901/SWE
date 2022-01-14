<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(){
        return view('client.pages.product_detail');
    }

    public function productDetail($id){
        $product_detail = ProductDetail::join('sizes', 'product_details.size_id', '=', 'sizes.id')
                                        ->join('products', 'product_details.product_id', '=', 'products.id')
                                        ->select('product_details.product_id', 'size_id', 'sizes.size', 'quantity', 'product_name', 'description', 'image', 'price')
                                        ->where('product_id', '=', $id)
                                        ->get();
        // dd($product_detail);
        return view('client.pages.product_detail', [
            'product_detail' => $product_detail
        ]);
    }
}
