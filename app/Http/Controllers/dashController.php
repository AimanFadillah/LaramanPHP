<?php

namespace App\Http\Controllers;

use App\Models\Projeck;
use Illuminate\Http\Request;

class dashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        return view("dashbord.projeck.index",[
            "projeck" => Projeck::where('user_id',auth()->user()->id )->get()
        ]);
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
     * @param  \App\Models\projeck  $projeck
     * @return \Illuminate\Http\Response
     */
    public function show(projeck $projeck)
    {
        return view("dashbord.projeck.show",[
            "projeck" => $projeck
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projeck  $projeck
     * @return \Illuminate\Http\Response
     */
    public function edit(projeck $projeck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projeck  $projeck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projeck $projeck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projeck  $projeck
     * @return \Illuminate\Http\Response
     */
    public function destroy(projeck $projeck)
    {
        //
    }
}
