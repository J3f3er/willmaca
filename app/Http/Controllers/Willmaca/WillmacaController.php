<?php

namespace App\Http\Controllers\Willmaca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WillmacaController extends Controller
{
    public function index()
    {
        return view('willmaca.index');
    }

    public function botas()
    {
        return view('willmaca.botas');
    }

    public function guantes()
    {
        return view('willmaca.guantes');
    }

    public function tapaBocas()
    {
        return view('willmaca.tapa_bocas');
    }

    public function lentes()
    {
        return view('willmaca.lentes');
    }

    public function trajes()
    {
        return view('willmaca.trajes');
    }

    /* public function login()
    {
        return view('auth.login');
    } */
}
