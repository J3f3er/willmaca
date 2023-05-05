<?php

namespace App\Http\Controllers\Willmaca;

use App\Http\Controllers\Controller;
use App\Models\Producto\Producto;
use App\Models\Categoria\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WillmacaController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('willmaca.index');
        }
        elseif(Auth::user()->roles == 1)
        {
            return redirect()->route('formulario.productos');
        }
        
    }

    public function botas()
    {
       if (!Auth::check()) 
        {    
            $producto = Producto::where('categoria', 'Botas')->get();
            $categoria = Categoria::where('nombre', 'Botas')->get();
            return view('willmaca.botas', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1)
        {
            return redirect()->route('formulario.productos');
        }
    }

    public function guantes()
    {
       if (!Auth::check()) 
        {
            $producto = Producto::where('categoria', 'Guantes')->get();
            $categoria = Categoria::where('nombre', 'Guantes')->get();
            return view('willmaca.guantes', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1)
        {
            return redirect()->route('formulario.productos');
        }
    }
    
    public function tapaBocas()
    {
        if(!Auth::check())
        {
            $producto = Producto::where('categoria', 'Tapa Bocas')->get();
            $categoria = Categoria::where('nombre', 'Tapa Bocas')->get();
            return view('willmaca.tapa_bocas', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1)
        {
            return redirect()->route('formulario.productos');
        }
    }

    public function lentes()
    {
        if(!Auth::check())
        {    
            $producto = Producto::where('categoria', 'Lentes')->get();
            $categoria = Categoria::where('nombre', 'Lentes')->get();
            return view('willmaca.lentes', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1)
        {
            return redirect()->route('formulario.productos');
        }
    }

    public function trajes()
    {
        if(!Auth::check())
        {
            $producto = Producto::where('categoria', 'Trajes')->get();
            $categoria = Categoria::where('nombre', 'Trajes')->get();
            return view('willmaca.trajes', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1)
        {
            return redirect()->route('formulario.productos');
        }
    }

    public function loginVerify(Request $request)
    {

        $request->validate([
            'email' => ['required', 'min:3'],
            'password' => ['required', 'min:3']
            ]);

            $email = $request->input('email');
            $psw = $request->input('password');
        
        if(Auth::attempt(["email" => $email, "password" => $psw, "roles" => 1]))
        {
            $request->session()->regenerate();
            return redirect()->intended('/admin/formulario_productos');
        }
        elseif (Auth::attempt(["email" => $email, "password" => $psw, "roles" => 2])) 
        {
            $request->session()->regenerate();
            return redirect()->intended('/cliente/index');
        }

        return redirect("/");
    }

    public function restriccion() 
    {
        return view("willmaca.restriccion");
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route("willmaca.index");
    }

    public function pretty()
    {
        $producto = Producto::all();
        return view('willmaca.pretty_product_list', compact('producto'));
    }

    public function prettyGuantes()
    {
        if(Auth::user()->roles == 1)
        {
        $categoria = Categoria::where('nombre', 'Guantes')->get();
        $producto = Producto::where('categoria', 'Guantes')->get();
        return view('willmaca.prettyGuantes', compact('categoria', 'producto'));
        }
        elseif(!Auth::check())
        {
            return redirect('/');
        }

    }
    
    public function prettyBotas()
    {
        if(Auth::user()->roles == 1)
        {
        $categoria = Categoria::where('nombre', 'Botas')->get();
        $producto = Producto::where('categoria', 'Botas')->get();
        return view('willmaca.prettyBotas', compact('categoria', 'producto'));
        }
        elseif(!Auth::check())
        {
            return redirect('/');
        }
    }

    public function prettyTapaBocas()
    {
        if (!Auth::check()) {
            $producto = Producto::where('categoria', 'Tapa Bocas')->get();
            $categoria = Categoria::where('nombre', 'Tapa Bocas')->get();
            return view('willmaca.prettyTapaBocas', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1) {
            return redirect()->route('formulario.productos');
        }
    }

    public function prettyLentes()
    {
        if (!Auth::check()) {
            $producto = Producto::where('categoria', 'Lentes')->get();
            $categoria = Categoria::where('nombre', 'Lentes')->get();
            return view('willmaca.prettyLentes', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1) {
            return redirect()->route('formulario.productos');
        }
    }

    public function prettyTrajes()
    {
        if (!Auth::check()) {
            $producto = Producto::where('categoria', 'Trajes de Bio Seguridad')->get();
            $categoria = Categoria::where('nombre', 'Trajes de Bio Seguridad')->get();
            return view('willmaca.prettyTrajes', compact('producto', 'categoria'));
        }
        elseif(Auth::user()->roles == 1) {
            return redirect()->route('formulario.productos');
        }
    }

}