<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // definir o metodo inicial da clase
    public function index(){
        //devuelve una views de projects
        //return view('index');
        //Buscar os projectos do banco de datos
        $products = DB::table('products')->get();
        //Retornar a view de projetos con os productos
        return view('index', ['products' => $products]);
    }

    //metodo para buscar los productos da api 
    public function products(){
        $products = DB::table('products')->get();
        return view('products', ['products' => $products]);
    }

    //metodo para buscar productos uno a uno
    public function single_product(Request $request, $id){
        //Buscar el producto por el id
        $product_array = DB::table('products')->where('id', $id)->get();
        // retornar a view de producto con el producto
        return view('single_product',  ['product_array' => $product_array]);
    }

    //metodo para mostrar la galeria
    public function gallery(){
        $gallery = DB::table('products')->get();
        return view('gallery', ['products' => $gallery]);
    }    
}
