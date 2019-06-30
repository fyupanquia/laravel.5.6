<?php

namespace CMBPokemon\Http\Controllers;

use CMBPokemon\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainers = Trainer::all();
        return view('trainer.index', compact("trainers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $name = "";
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move( public_path().'/images/', $name );
        }
        $t = new Trainer;
        $t->name =  $request->name;
        $t->avatar = $name;
        $t->save();
        return "Saved successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show(Trainer $trainer) //implicit binding
    //public function show($slug) //Find by SLUG
    public function show(Trainer $trainer) //implicit binding customed (check the model)
    {
        //
        //$trainer = Trainer::where("slug","=",$slug)->firstOrFail();
        return view("trainer.show", compact("trainer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        return view("trainer.edit", compact("trainer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //

        $trainer->fill($request->except("avatar"));
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move( public_path().'/images/', $name );
            $trainer->avatar = $name;
        }
        $trainer->save();
        return "saved correctly";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Res ponse
     */
    public function destroy($id)
    {
        //
    }
}
