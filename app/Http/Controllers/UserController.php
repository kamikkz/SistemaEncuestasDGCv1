<?php

namespace App\Http\Controllers;

use App\Recursos\Dependence;
use App\Recursos\GeneralManagement;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $usuarios = User::all();
        return view('CRUD_Usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependencias =Dependence::all();
        $direcciones = GeneralManagement::all();
        return view('CRUD_Usuarios.create',compact('direcciones','dependencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $auxiliar=$request->input('email');
        $user->password = $password = bcrypt($auxiliar);
        $user->direccion = $request->input('direccion');
        $user->dependencia = $request->input('dependencia');

        $validar=User::where('email',$user->email)->get();

        foreach ($validar as $anteriorUser)
        {
            if($validar){
                return back()->with('error','Disculpe el correo electronico '. $user->email .' ya fue registrado por '. $anteriorUser['name'] .' de la dependencia '. $anteriorUser['dependencia'] .' por favor introduzca uno distinto');
            }
        }
        $user->save();
        return back()->with('info','El usuario '. $user->name .' ha sido registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=User::find($id);
        $cursos=$usuario->cursos()->get();
        return view('CRUD_Usuarios.show',compact('usuario','cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        $dependencias =Dependence::all();
        $direcciones = GeneralManagement::all();
        return view('CRUD_Usuarios.edit', compact('user','dependencias','direcciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user -> fill($request->all());
        $user -> save();
        return redirect()->route('Usuarios.index')->with('info','Usuario '.$user->name.' actualizado correctamente, GRACIAS');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
