<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tratado;

class TratadoController extends Controller
{
    public function index()
    {
        $datos['tratados']=Tratado::paginate(5);
        return view('tratado.index',$datos);
    }

    public function create()
    {
        return view('tratado.create');
    }
    public function store(Request $request)
    {
        $datosTratado = request()->except('_token');
        Tratado::insert($datosTratado);
        return redirect('tratado')->with('mensaje','Tratado registrado exitosamente');
    }
    public function destroy($id)
    {
        Tratado::destroy($id);
        return redirect('tratado')->with('mensaje','Tratado eliminado exitosamente');
    }
    public function edit($id)
    {
        $tratado=Tratado::findOrFail($id);
        return view('tratado.edit',compact('tratado'));
    }
    public function update(Request $request,$id)
    {
        $datosTratado = request()->except(['_token','_method']);
        Tratado::where('id','=',$id)->update($datosTratado);
        $tratado=Tratado::findOrFail($id);
        return view('tratado.edit',compact('tratado'));
    }
}
