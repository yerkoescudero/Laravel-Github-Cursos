<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::paginate();
        
        //compact pasa la var a la vista
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){

        // compact('curso'); devuelve un array tipo ['curso' => $curso] 
        $curso = Curso::find($id)->select;

       

        return view('cursos.show', compact('curso'));
    }
}
