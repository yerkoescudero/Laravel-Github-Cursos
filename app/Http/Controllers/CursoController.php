<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();
        
        //compact pasa la var a la vista
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    //StoreCurso extends Request
    public function store(StoreCurso $request){
        // return $request->all();
        
        //la funcion validate detiene en caso de no cumplirse lo del array
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'descripcion' => 'required|min:10',
        //     'categoria' => 'required'
        // ]);
        //esta validacion esta en Request/StoreCurso.php

        
        // Esto si hay pocos campos
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso = Curso::create($request->all());
        
        return redirect()->route('cursos.show', $curso);
    }


    public function show(Curso $curso){

        // compact('curso'); devuelve un array tipo ['curso' => $curso] 
        //$curso = Curso::find($id);

       

        return view('cursos.show', compact('curso'));
    }

    public function edit (Curso $curso){

        //$curso = Curso::find($id);

        return view('cursos.edit', compact('curso'));

    }

    public function update (Request $request, Curso $curso){


        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);
       
        //$curso = Curso::find($id);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);

        
    }

    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
