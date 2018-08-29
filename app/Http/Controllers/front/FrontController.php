<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorie;
use App\Brand;

class FrontController extends Controller
{

    public function index(){
        $cells = Product::where('categorie_id', 1)->orderBy('id', 'DESC')->take(4)->get();
        $acces = Product::where('categorie_id', '!=', 1)->orderBy('id', 'DESC')->take(4)->get();
        
        return view('welcome', ['celulares' => $cells, 'accesorios' => $acces]);
    }

    public function cells()
    {
        $cells1 = Product::where('categorie_id', 1)->take(4)->get();
        $cells2 = Product::where('categorie_id', 1)->skip(4)->take(4)->get();
        return view('front/celulares', ['linea1' => $cells1, 'linea2' => $cells2]);
    }

    public function product($id)
    {
        $products = Product::all();
        $cell = Product::find($id);
        return view('front/celu', ['celu' => $cell, 'producto' => $products]);
    }

    public function accesorios()
    {
        $access1 = Product::where('categorie_id', '!=', 1)->take(4)->get();
        $access2 = Product::where('categorie_id', '!=', 1)->skip(4)->take(4)->get();
        return view('front/accesorios', ['linea1' => $access1, 'linea2' => $access2]);
    }

    public function contact()
    {
        return view('front/contacto');
    }

    public function contactPost()
    {
        return redirect('/');
    }

    public function faq(){
        return view('front/faq');
    }

    public function scope($resultado) {
        
        $producto = Product::where('name', 'LIKE', '%'.$resultado.'%')
        ->orderBy('id')->get();

        return view('front/busqueda', ['resultados' => $producto]);    

    }
}
