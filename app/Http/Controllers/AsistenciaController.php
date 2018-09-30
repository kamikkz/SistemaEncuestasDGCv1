<?php

namespace App\Http\Controllers;

use App\Asistencia;
use Illuminate\Http\Request;
use App\User;
use App\Curso;
use App\CursoUser;
use Illuminate\Support\Facades\Mail;

class AsistenciaController extends Controller
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
        $asistencias=Asistencia::all();
        return view('CRUD_Asistencia.index',compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    public function registrarNVAasistencia(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $auxiliar=$request->input('email');
        $user->password = $password = bcrypt($auxiliar);
        $user->direccion = $request->input('direccion');
        $user->dependencia = $request->input('dependencia');

        $validar=User::where('email',$user->email)->get();
        //return $validar;
        foreach ($validar as $anteriorUser)
        {
            if($validar){
                return back()->with('error','Disculpe el correo electronico '. $user->email .' ya fue registrado por '. $anteriorUser['name'] .' de la dependencia '. $anteriorUser['dependencia'] .' por favor introduzca uno distinto');
            }
        }
        $user->save();
        $id =$user->id;
        $cursoUser = new CursoUser();
        $cursoUser->user_id =$id;
        $cursoUser->curso_id = $request->input('fkcurso');
        $cursoUser->save();
        $asistencia = new Asistencia();
        $asistencia->user_id = $id;
        $asistencia->curso_id = $request->input('fkcurso');
        $asistencia->asiste = now();
        $asistencia->save();
        $nombreCurso = Curso::find($cursoUser->curso_id);

        $data = [
            'name' =>$user->name,
            'email'=>$user->email,
            'curso'=>$nombreCurso->name,
            ];


        Mail::send('emails.encuesta',$data,function($message) use ($data){
           $message->to($data['email'])->subject('Por favor apoyenos llenando esta encuesta')->from('encuestas.dgc@gmail.com','DGC Dirección de Gestión de la Calidad');
        });//Esta fallando email
        return back()->with('info','Usuario '. $user->name .' ha sido resgistrado correctamente, BIENVENIDO');
    }
    public function registrarAsistencia(Request $request){
        $user = User::find($request->name);
        $asistencia = new Asistencia();
        $asistencia->user_id = $user->id;
        $asistencia->curso_id = $request->fkcurso;
        $asistencia->asiste = now();
        $asistencia->save();
        $nombreCurso = Curso::find($asistencia->curso_id);
        return back()->with('info','Asistencia de '. $user->name .' ha sido resgistrado correctamente, BIENVENIDO');

    }

    public function registrarUSERAsistencia(Request $request){
        $user = User::find($request->name);
        $asistencia = new Asistencia();
        $asistencia->user_id = $user->id;
        $asistencia->curso_id = $request->fkcurso;
        $asistencia->asiste = now();
        $asistencia->save();
        $nombreCurso = Curso::find($asistencia->curso_id);

        $data = [
            'name' =>$user->name,
            'email'=>$user->email,
            'curso'=>$nombreCurso->name,
        ];
        $cursoUser = new CursoUser();
        $cursoUser->user_id =$user->id;
        $cursoUser->curso_id = $request->fkcurso;
        $cursoUser->save();
        Mail::send('emails.encuesta',$data,function($message) use ($data){
            $message->to($data['email'])->subject('Por favor apoyenos llenando esta encuesta')->from('encuestas.dgc@gmail.com','DGC Dirección de Gestión de la Calidad');
        });//Esta fallando email
        return back()->with('info','El usuario '. $user->name .' ha sido resgistrado correctamente en el curso');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit($curso)
    {

        $cursos = Curso::find($curso);
        $usersCurso=$cursos->usuarios()->get();//por si quiero ser selectivo
        $users=User::all();
        return view('CRUD_Asistencia.create', compact('cursos','users','usersCurso'));
    }
    /*public function edit(Asistencia $asistencia)
    {

    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
