<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $datos['users']=User::paginate(5);
        return view('user.index',$datos);
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('mensaje','Usuario eliminado exitosamente');
    }
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('user.edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $datosUser = request()->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUser);
        $user=User::findOrFail($id);
        return view('user.edit',compact('user'));
    }
}
