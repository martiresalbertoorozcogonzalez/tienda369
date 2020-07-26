<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class TiendaController extends Controller
{
    public function index()
    {
        
        $products = Product::all();

        return view('tienda.index',compact('products'));
    }
}
