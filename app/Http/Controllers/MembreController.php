<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;

class MembreController extends Controller
{
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
        $request->validate([
            'nom' => ['required', 'min:2'],
            'postnom' => ['required', 'min:2'],
            'prenom' => ['required', 'min:2'],
        ]);

        $membre = new Membre;

        $membre->nom = $request->nom;
        $membre->postnom = $request->postnom;
        $membre->prenom = $request->prenom;
        $membre->email = $request->email;
        $membre->phone = $request->phone;
        $membre->pays = $request->pays;
        $membre->province = $request->province;
        $membre->ville = $request->ville;
        $membre->quartier = $request->quartier;
        $membre->qual = $request->qual;
        $membre->dep = $request->dep;
        $membre->parcours = $request->parcours;
        $membre->question = $request->question;

        $membre->save();
        //

        redirect('/membre');
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
    public function edit($id)
    {
        //
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
        //
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
