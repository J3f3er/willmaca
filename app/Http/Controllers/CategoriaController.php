<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria\Categoria;
use App\Models\Producto\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    public function Categorias()
    {
        if(Auth::check() && Auth::user()->roles == 1)
        {
            $categoria = Categoria::all();
            return view('willmaca.formulario_productos', compact('categoria'));
        }
        else
        {
            return redirect('/login');
        }
    }

    public function registro(Request $request)
    {
        $validate = $request->validate([
            'nombre'        => ['required', 'max:255'],
            'precio'        => ['required', 'numeric','max:255'],
            'descripción'   => ['required'],
            'file'          => ['required'],
        ]);

        if($request->hasfile('file'))
        {
            $categoria = $request->input('categoria');
            switch($categoria)
            {
                case "Botas":
                    $destino = 'public/img/botas';
                    $file    = $request->file('file');
                    $nombre  = $file->getClientOriginalName();
                    $path    = $file->storeAs($destino, $nombre);
                    $ruta    = 'storage/img/botas/'.$nombre;
                    $producto = new Producto();
                    $producto->nombre    = $request->input('nombre');
                    $producto->precio    = $request->input('precio');
                    $producto->categoria = $request->input('categoria');
                    $producto->ruta      = $path;
                    $producto->imagen    = $ruta;
                    $producto->descripcion = $request->input('descripción');
                    $producto->save();
                    break;

                case "Tapa Bocas":
                    $destino = 'public/img/tapa_bocas';
                    $file    = $request->file('file');
                    $nombre  = $file->getClientOriginalName();
                    $path    = $file->storeAs($destino, $nombre);
                    $ruta    = 'storage/img/tapa_bocas/'.$nombre;
                    $producto = new Producto();
                    $producto->nombre    = $request->input('nombre');
                    $producto->precio    = $request->input('precio');
                    $producto->categoria = $request->input('categoria');
                    $producto->ruta      = $path;
                    $producto->imagen    = $ruta;
                    $producto->descripcion = $request->input('descripción');
                    $producto->save();
                    break;

                    case "Lentes":
                        $destino = 'public/img/lentes';
                        $file    = $request->file('file');
                        $nombre  = $file->getClientOriginalName();
                        $path    = $file->storeAs($destino, $nombre);
                        $ruta    = 'storage/img/lentes/'.$nombre;
                        $producto = new Producto();
                        $producto->nombre    = $request->input('nombre');
                        $producto->precio    = $request->input('precio');
                        $producto->categoria = $request->input('categoria');
                        $producto->ruta      = $path;
                        $producto->imagen    = $ruta;
                        $producto->descripcion = $request->input('descripción');
                        $producto->save();
                        break;

                        case "Trajes":
                            $destino = 'public/img/trajes';
                            $file    = $request->file('file');
                            $nombre  = $file->getClientOriginalName();
                            $path    = $file->storeAs($destino, $nombre);
                            $ruta    = 'storage/img/trajes/'.$nombre;
                            $producto = new Producto();
                            $producto->nombre    = $request->input('nombre');
                            $producto->precio    = $request->input('precio');
                            $producto->categoria = $request->input('categoria');
                            $producto->ruta      = $path;
                            $producto->imagen    = $ruta;
                            $producto->descripcion = $request->input('descripción');
                            $producto->save();
                            break;

                            case "Guantes":
                                $destino = 'public/img/guantes';
                                $file    = $request->file('file');
                                $nombre  = $file->getClientOriginalName();
                                $path    = $file->storeAs($destino, $nombre);
                                $ruta    = 'storage/img/guantes/'.$nombre;
                                $producto = new Producto();
                                $producto->nombre    = $request->input('nombre');
                                $producto->precio    = $request->input('precio');
                                $producto->categoria = $request->input('categoria');
                                $producto->ruta      = $path;
                                $producto->imagen    = $ruta;
                                $producto->descripcion = $request->input('descripción');
                                $producto->save();
                                break;
                        
                        default:
                                echo 'categoria no elegida';
                                break;
            }
        }

        return redirect('/admin/formulario_productos');

    }

    public function indexListaBotas()
    {
        $producto = Producto::where('categoria', 'Botas')->get();
        return view('willmaca.lista_botas', compact('producto'));
    }

    public function listaTapaBocas()
    {
        $producto = Producto::where('categoria', 'Tapa Bocas')->get();
        return view('willmaca.lista_tapa_bocas', compact('producto'));
    }

    public function listaTrajes()
    {
        $producto = Producto::where('categoria', 'Trajes')->get();
        return view('willmaca.lista_tapa_bocas', compact('producto'));
    }

    public function listaBotas()
    {
        $producto = Producto::where('categoria', 'Botas')->get();

        return response()->json($producto);
    }

    public function listaGuantes()
    {
        $producto = Producto::where('categoria', 'Guantes')->get();
        return view('willmaca.lista_guantes', compact('producto'));
    }
    
    public function listaLentes()
    {
        $producto = Producto::where('categoria', 'Lentes')->get();
        return view('willmaca.lista_lentes', compact('producto'));
    }


}
