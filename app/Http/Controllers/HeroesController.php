<?php

namespace App\Http\Controllers;

use App\Models\Heroes;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Vistas_heroes']=Heroes::paginate(6);
        return view('Vistas_heroes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Vistas_heroes.create');
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
        $datos_heroe = request()->except('_token');

        if($request->hasFile('Foto')){
            $datos_heroe['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Heroes::insert($datos_heroe);

        return redirect('Vistas_heroes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show(Heroes $heroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $heroe = Heroes::findOrFail($id);
        return view('Vistas_heroes.edit', compact('heroe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos_heroe = request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){
            $heroe = Heroes::findOrFail($id);
            Storage::delete('public/'.$heroe->Foto);
            $datos_heroe['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Heroes::where('id','=',$id)->update($datos_heroe);

        $heroe = Heroes::findOrFail($id);
        return view('Vistas_heroes.edit', compact('heroe'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Heroes::destroy($id);
        return redirect('Vistas_heroes');
    }
}
