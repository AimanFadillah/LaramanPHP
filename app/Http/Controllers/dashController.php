<?php

namespace App\Http\Controllers;

use App\Models\Projeck;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use \Cviebrock\EloquentSluggable\Services\SlugService;


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
        return view('dashbord.projeck.create',[
            "kategori" => kategori::all() 
        ]);
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('img')->store('projeck-img');

        $validatedData = $request->validate([
            "title" => "required|max:255",
            "slug" => "required|unique:projecks",
            "kategori_id" => "required",
            "img" => "image|file|max:3024",
            "body" => "required"
        ]);

        if($request->file('img')){
            $validatedData['img'] = $request->file('img')->store('projeck-img');
        }

        $validatedData["user_id"] = auth()->user()->id;
        $validatedData["excerpt"] = Str::limit( strip_tags( $request->body),200 );

      
        projeck::create($validatedData);

        return redirect('/dashbord/projeck')->with('success','Berhasil Membuat Projeck');
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
        return view('dashbord.projeck.edit',[
            "projeck" => $projeck,
            "kategori" => kategori::all() 
        ]);
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
        $rules = [
            "title" => "required|max:255",
            "kategori_id" => "required",
            "img" => "image|file|max:3024",
            "body" => "required"
        ];

        if($request->slug != $projeck->slug){
            $rules["slug"] = "required|unique:projecks";
        }

        $validatedData = $request->validate($rules);

        if($request->file('img')){

            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['img'] = $request->file('img')->store('projeck-img');
        }

        $validatedData["user_id"] = auth()->user()->id;
        $validatedData["excerpt"] = Str::limit( strip_tags( $request->body),200 );

        projeck::where('id',$projeck->id)->update($validatedData);
        return redirect('/dashbord/projeck')->with('success','Berhasil mengubah Projeck ' . $projeck->title );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projeck  $projeck
     * @return \Illuminate\Http\Response
     */
    public function destroy(projeck $projeck)
    {
        if($projeck->img){
            Storage::delete($projeck->img);
        }


        projeck::destroy($projeck->id);
        return redirect('/dashbord/projeck')->with('success','Projeck Berhasil di Delete');
    }

    // public function checkSlug (Request $request) {

    //     $slug = SlugService::createSlug(projeck::class, 'slug', $request->title);

    //     return response()->json( ["slug" => $slug ] );
    // }

}
