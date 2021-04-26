<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);
        $categories = Category::all();

        return view('index', compact(['categories', 'products']));
    }

    public function getAllProduct()
    {
        $products = Product::paginate(4);
        $categories = Category::all();

        return view('home.product_list', compact(['categories', 'products']));
    }

    public function getProductById($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('home.product_detail', compact(['categories', 'product']));
    }

    public function getProductByCategory($id)
    {
        $products = Product::where('category_id', '=', $id)
        ->get();


        return view('home.productBycategory', compact(['products']));
    }
}
