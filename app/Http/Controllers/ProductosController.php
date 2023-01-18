<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos\Productos;

class ProductosController extends Controller
{
    public function queryBotas()
    {
        $query = Productos::where('categoria', 'Botas');
        return view('botas', compact('query'));
    }

    public function queryGuantes()
    {
        $query = Productos::where('categoria', 'Guantes');
        return view('guantes', compact('query'));
    }
}
