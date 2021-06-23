<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pais;

class PaisController extends Controller
{
    public function index()
    {
        $datos['paises']=Pais::paginate(5);
        return view('pais.index',$datos);
    }

    public function create()
    {
        return view('pais.create');
    }
    public function store(Request $request)
    {
        $datosPais = request()->except('_token');
        Pais::insert($datosPais);
        return redirect('pais')->with('mensaje','Pais registrado exitosamente');
    }
    public function destroy($id)
    {
        Pais::destroy($id);
        return redirect('pais')->with('mensaje','Pais eliminado exitosamente');
    }
    public function edit($id)
    {
        $pais=Pais::findOrFail($id);
        return view('pais.edit',compact('pais'));
    }
    public function update(Request $request,$id)
    {
        $datosPais = request()->except(['_token','_method']);
        Pais::where('id','=',$id)->update($datosPais);
        $pais=Pais::findOrFail($id);
        return view('pais.edit',compact('pais'));
    }
}
