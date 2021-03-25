<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cruds;


class CrudsController extends Controller
{
    public function index(){
        $cruds = Cruds::all();

        return view('cruds', ['cruds' => $cruds]);
    }
    public function crear(Request $request) {
        Cruds::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
        return redirect('/cruds');
    }
    public function agregar(){
        return view('agregar');
    }

    public function editar($id) {
        $cruds = Cruds::find($id);
    
        return view('editar', ['cruds' => $cruds]);
    }

    public function update(Cruds $cruds, Request $request){
        $cruds->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
        return redirect('/cruds');
    }

    public function destroy($id){
        $cruds = Cruds::find($id);
        $cruds->delete();
        return redirect('/cruds');
    }

}