<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        // return $cursos;

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show(Curso $curso)
    {
        // $curso = Curso::find($ id);
        // return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso'));
    }

    public function store(StoreCurso $request)
    {
        // $curso =  new Curso();

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;

        // $curso->save();

        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso );
    }

    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso')) ;
    }

    public function update(Curso $curso, StoreCurso $request){
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        $curso->update(request()->all());

        return redirect()->route('cursos.show', $curso );
    }

    public function destroy(Curso $curso)
    {
         $curso->delete();
         return redirect()->route('cursos.index');
    }
}
