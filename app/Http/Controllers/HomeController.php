<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function company()
    {
        return view('pages.company');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function join()
    {
        return view('pages.join');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function statement()
    {
        return view('pages.statement');
    }

    // Métodos para productos
    public function products()
    {
        return view('products.index');
    }

    public function solarModules()
    {
        return view('products.SolarModules');
    }

    public function inverters()
    {
        return view('products.inverters');
    }

    public function storageSolutions()
    {
        return view('products.StorageSolutions');
    }

    public function evCharger()
    {
        return view('products.EVCharger');
    }
}