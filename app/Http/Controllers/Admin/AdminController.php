<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria\Categoria;
use App\Models\Producto\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Session;


class AdminController extends Controller
{
    public function Categorias()
    {
        
            $categoria = Categoria::all();
            return view('willmaca.admin.formulario_productos', compact('categoria'));
        
    }

    

    public function registro(Request $request)
    {
        $request->validate([
            'nombre'        => ['required', 'max:255'],
            'precio'        => ['required', 'numeric','max:255'],
            'descripción'   => ['required', 'min:50'],
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
                    $producto->precio    = $request->input('precio')."$";
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
                    $producto->precio    = $request->input('precio')."$";
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
                        $producto->precio    = $request->input('precio')."$";
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
                            $producto->precio    = $request->input('precio')."$";
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
                                $producto->precio    = $request->input('precio')."$";
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
        $mensaje = " Mensaje:  Producto $producto->nombre Registrado con ¡EXITO!";

        $request->session()->flash('mensaje', $mensaje);


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

    public function vistaBotas()
    {
        $producto = Producto::where('categoria', 'Botas')->get();
        $categoria = Categoria::where('nombre', 'Botas')->get();
        return view('willmaca.admin.botas', compact('producto', 'categoria'));
    }

    public function vistaGuantes()
    {
        $producto = Producto::where('categoria', 'Guantes')->get();
        $categoria = Categoria::where('nombre', 'Guantes')->get();
        return view('willmaca.admin.guantes', compact('producto', 'categoria'));
    }

    public function vistaTapaBocas()
    {
        $producto = Producto::where('categoria', 'Tapa Bocas')->get();
        $categoria = Categoria::where('nombre', 'Tapa Bocas')->get();
        return view('willmaca.admin.tapa_bocas', compact('producto', 'categoria'));
    }

    public function vistaLentes()
    {
        $producto = Producto::where('categoria', 'Lentes')->get();
        $categoria = Categoria::where('nombre', 'Lentes')->get();
        return view('willmaca.admin.lentes', compact('producto', 'categoria'));
    }

    public function vistaTrajes()
    {
        $producto = Producto::where('categoria', 'Trajes')->get();
        $categoria = Categoria::where('nombre', 'Trajes')->get();
        return view('willmaca.admin.trajes', compact('producto', 'categoria'));
    }

    public function pruebaVue()
    {
        return view('willmaca.admin.pruebaVue');
    }

    public function productosVue()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
    }

}
