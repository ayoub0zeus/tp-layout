<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function price()
    {
        $options = ['Cras justo odio', 'testing', 'Morbi leo risus', 'Excepteur sint occaecat velit'];
        return view('price', ['options' => $options]);
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }
    public function more()
{
    return view('layout1.layout');
}

}
