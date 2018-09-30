<?php

namespace App\Http\Controllers;

use App\Recursos\Dependence;
use App\Recursos\GeneralManagement;
use Illuminate\Http\Request;

class GeneralManagementController extends Controller
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
        $generalManagements =GeneralManagement::all();
        return view('CRUD_GeneralManagement.index',compact('generalManagements'));
    }

    public function getDependence($id)
    {
        return 'soy set dependence'.$id;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recursos\GeneralManagement  $generalManagement
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralManagement $generalManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recursos\GeneralManagement  $generalManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralManagement $generalManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recursos\GeneralManagement  $generalManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralManagement $generalManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recursos\GeneralManagement  $generalManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralManagement $generalManagement)
    {
        //
    }
}
