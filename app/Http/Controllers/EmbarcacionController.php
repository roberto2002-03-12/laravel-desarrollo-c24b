<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\embarcacion;

class EmbarcacionController extends Controller
{
    public function index()
    {
        $datos['embarcaciones']=Embarcacion::paginate(5);
        return view('embarcacion.index',$datos);
    }

    public function create()
    {
        return view('embarcacion.create');
    }
    public function store(Request $request)
    {
        $datosEmbarcacion = request()->except('_token');
        Embarcacion::insert($datosEmbarcacion);
        return redirect('embarcacion')->with('mensaje','Embarcacion registrado exitosamente');
    }
    public function destroy($id)
    {
        Embarcacion::destroy($id);
        return redirect('embarcacion')->with('mensaje','Embarcacion eliminado exitosamente');
    }
    public function edit($id)
    {
        $embarcacion=Embarcacion::findOrFail($id);
        return view('embarcacion.edit',compact('embarcacion'));
    }
    public function update(Request $request,$id)
    {
        $datosEmbarcacion = request()->except(['_token','_method']);
        Embarcacion::where('id','=',$id)->update($datosEmbarcacion);
        $embarcacion=Embarcacion::findOrFail($id);
        return view('embarcacion.edit',compact('embarcacion'));
    }
}
