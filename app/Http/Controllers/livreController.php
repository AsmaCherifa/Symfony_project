<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livre;
class livreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres=livre::all();
        //appel view
        return view("livre/index",compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("livre.formLivre");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        livre::create($request->all());
        return redirect()->route("livre.index")->with("info","livre est bien ajoutée");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(livre $livre)
    {
        return view("livre.editLivre",compact("livre"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livre $livre)
    {
        $livre->update($request->all());
        return redirect()->route("livre.index")->with("info","livre est bien ajoutée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(livre $livre)
    {
        $livre->delete();
        return redirect()->route("livre.index")->with("info","livre est bien supprimé");
    }
}
