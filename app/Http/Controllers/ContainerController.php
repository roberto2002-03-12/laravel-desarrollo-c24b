<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\container;

class ContainerController extends Controller
{
    public function index()
    {
        $datos['containers']=Container::paginate(5);
        return view('container.index',$datos);
    }
    public function create()
    {
        return view('container.create');
    }
    public function store(Request $request)
    {
        $datosContainer = request()->except('_token');
        Container::insert($datosContainer);
        return redirect('container')->with('mensaje','Container registrado exitosamente');
    }
    public function destroy($id)
    {
        Container::destroy($id);
        return redirect('container')->with('mensaje','Container eliminado exitosamente');
    }
    public function edit($id)
    {
        $container=Container::findOrFail($id);
        return view('container.edit',compact('container'));
    }
    public function update(Request $request,$id)
    {
        $datosContainer = request()->except(['_token','_method']);
        Container::where('id','=',$id)->update($datosContainer);
        $container=Container::findOrFail($id);
        return view('container.edit',compact('container'));
    }
}
