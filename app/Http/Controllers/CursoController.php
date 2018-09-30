<?php

namespace App\Http\Controllers;

use App\Asistencia;
use App\Curso;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos =Curso::all();
        return view('CRUD_Curso.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD_Curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->inicio = $request->input('finicio');
        $curso->final = $request->input('ffinal');
        $curso->name = $request->input('name');
        $nuevafecha = strtotime ( '+7 day' , strtotime ( $request->input('ffinal') ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
        $curso->tiempoExtra = $nuevafecha;
        $curso->save();
        return redirect('Curso')->with('info','Elemento guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        $usuarios=$curso->usuarios()->get();
        return view('CRUD_Curso.show',compact('curso','usuarios'));
    }

    public function UserCursoAsistencia($user,$course)
    {
        $usuario=User::find($user);
        $curso=Curso::find($course);
        $asistencias= Asistencia::where('user_id',$user)->where('curso_id',$course)->get();
        //return $asistencias;
        return view('CRUD_Curso.asistencias',compact('asistencias','usuario','curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($curso)
    {
        $cursos = Curso::find($curso);
        return view('CRUD_Curso.edit',compact('cursos'));
    }
    public function tiempoExtra($curso)
    {
        $cursos = Curso::find($curso);
        return view('CRUD_Curso.tExtra',compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $curso)
    {
        //return $request;
        $cursos = Curso::find($curso);
        $cursos->inicio = $request->input('finicio');
        $cursos->final = $request->input('ffinal');
        $cursos->name = $request->input('name');
        $cursos->save();
        return redirect()->route('Curso.index')->with('info','Actividad '.$cursos->name.' actualizado correctamente, GRACIAS');
    }
    public function tiempoExtraUpdate(Request $request, $curso)
    {
        $cursos = Curso::find($curso);
        $cursos->tiempoExtra = $request->input('tiempoExtra');
        $cursos->save();
        return redirect()->route('Curso.index')->with('info','Actividad '.$cursos->name.' actualizado correctamente, GRACIAS');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
