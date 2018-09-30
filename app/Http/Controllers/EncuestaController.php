<?php

namespace App\Http\Controllers;



use App\Curso;
use App\CursoUser;
use App\Encuesta;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Null_;

class EncuestaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $encuestas = Encuesta::all();
        return view('CRUD_Encuesta.index',compact('encuestas'));
    }
    public function DatosEncuestas()
    {
        $encuestas = Encuesta::all();
        return view('CRUD_Encuesta.masivo',compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    public function LlenarEncuesta($curso)
    {
        $id = Auth::id();
        $usuario = User::find($id);
        $encuesta = Curso::find($curso);
        $llena=Encuesta::where('user_id',$id)->where('curso_id',$curso)->count();
        if(!$llena==1){
            return view('CRUD_Encuesta.create',compact('encuesta','usuario'));
        }else{
            return back()->with('error','La encuesta '.$encuesta->name.' ya ha sido registrada, GRACIAS');
        }

    }
    public function ListaEncuestas()
    {
        $id = Auth::id();
        $usuario = User::find($id);
        $cursos=$usuario->cursos()->where('encuestaRealizada','No')->get();
        return view('CRUD_Encuesta.dashboard',compact('cursos','usuario','encuestas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encuesta = new Encuesta();
        $encuesta->user_id = Auth::id();
        $encuesta->curso_id = $request->curso;
        $encuesta->quiz1 = $request->quiz1;
        $quizAUX='';
        foreach ($request->quiz2 as $opciones){
            $quizAUX.= $opciones.' ';
        }
        $encuesta->quiz2 = $quizAUX;
        $encuesta->quiz3 = $request->quiz3;
        $encuesta->quiz4 = $request->quiz4;
        $encuesta->quiz5 = $request->quiz5;
        $encuesta->quiz6 = $request->quiz6;
        $encuesta->quiz7 = $request->quiz7;
        $encuesta->quiz8 = $request->quiz8;
        $encuesta->quiz9 = $request->quiz9;
        $encuesta->curso_id = $request->fk;
        $encuesta->save();

        CursoUser::where('user_id',Auth::id())->where('curso_id',$encuesta->id)->update(['encuestaRealizada'=>'Si']);
        $user=User::find(Auth::id());
        $nombreCurso=Curso::find($encuesta->curso_id);

        $data = [
            'name' =>$user->name,
            'email'=>$user->email,
            'curso'=>$nombreCurso->name,

            'quiz1'=>$encuesta->quiz1,
            'quiz2'=>$encuesta->quiz2,
            'quiz3'=>$encuesta->quiz3,
            'quiz4'=>$encuesta->quiz4,
            'quiz5'=>$encuesta->quiz5,
            'quiz6'=>$encuesta->quiz6,
            'quiz7'=>$encuesta->quiz7,
            'quiz8'=>$encuesta->quiz8,
            'quiz9'=>$encuesta->quiz9,

            'direccion'=>$user->direccion,
            'dependencia'=>$user->dependencia,
            'calidad'=>'informaticadgc@uaeh.edu.mx'
        ];

        Mail::send('emails.gracias',$data,function($message) use ($data){
            $message->to($data['email'])->subject('Muchas gracias por participar en la encuesta')->from('encuestas.dgc@gmail.com','DGC Dirección de Gestión de la Calidad');
        });
        Mail::send('emails.contacto',$data,function($message) use ($data){
            $message->to('informaticadgc@uaeh.edu.mx')->cc('siga@uaeh.edu.mx','dgcinformatica1@gmail.com','sica@uaeh.edu.mx','procesosdgc@uaeh.edu.mx')->subject('Meeting')->from('encuestas.dgc@gmail.com','DGC Dirección de Gestión de la Calidad');
        });//Email esta fallando

        return redirect()->route('Encuesta.ListaEncuestas')->with('info','Encuesta registrada correctamente, GRACIAS');
       //return back()->with('info','Encuesta resgistrada correctamente, GRACIAS');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show($encuesta)
    {
        $datos = Encuesta::find($encuesta);
        return view('CRUD_Encuesta.show',compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuesta $encuesta)
    {
        //
    }
}
