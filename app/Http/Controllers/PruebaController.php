<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;


class PruebaController extends Controller
{
    public function prueba()
    {
        
        $product = Product::with('images','category')->orderby('id','desc')->get();
        return $product;
        
    }

    public function resultados()
    {
        
        $image = Image::orderBy('id','Desc')->get();
        return  $image; 
    
    }
}
