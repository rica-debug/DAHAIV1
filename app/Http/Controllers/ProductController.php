<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listado general de productos
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Módulos solares
    public function solarModules()
    {
        $products = Product::where('category', 'SolarModules')->get();
        return view('products.SolarModules', [
            'products' => $products,
            'pageTitle' => 'Módulos Fotovoltaicos'
        ]);
    }

    // Inversores
    public function inverters()
    {
        $products = Product::where('category', 'Inverters')->get();
        return view('products.Inverters', compact('products'));
    }

    // Soluciones de almacenamiento
    public function storageSolutions()
    {
        $products = Product::where('category', 'StorageSolutions')->get();
        return view('products.StorageSolutions', compact('products'));
    }

    // Cargadores EV
    public function evCharger()
    {
        $products = Product::where('category', 'EVCharger')->get();
        return view('products.EVCharger', compact('products'));
    }

    // Detalle de producto
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    
    // Crear producto (si lo necesitas)
    public function create()
    {
        return view('products.create');
    }
    
    // Categorías (si lo necesitas)
    public function category($category)
    {
        $products = Product::where('category', $category)->get();
        return view('products.category', compact('products', 'category'));
    }
}