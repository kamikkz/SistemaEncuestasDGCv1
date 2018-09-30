<?php

namespace App\Http\Controllers;

use App\CursoUser;
use Illuminate\Http\Request;

class CursoUserController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'miaw';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CursoUser  $cursoUser
     * @return \Illuminate\Http\Response
     */
    public function show(CursoUser $cursoUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CursoUser  $cursoUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CursoUser $cursoUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CursoUser  $cursoUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CursoUser $cursoUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CursoUser  $cursoUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CursoUser $cursoUser)
    {
        //
    }
}
