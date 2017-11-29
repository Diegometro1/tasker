<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chore;

class ChoresController extends Controller
{
    //

    public function index()
    {

        $chore = Chore::all();


        return view('layouts.chores')->with('chores', $chore);

    }



    public function store(Request $request)
    {

        //dd($request->all());

        $chore = new Chore;

        $chore->chore = $request->chore;

        $chore ->save();



        return redirect()->back();
    }



    public function delete($id)
    {

        //dump($id);


        $chore = Chore::find($id);


        $chore->delete();


        return redirect()->back();


    }


    public function update($id)
    {

        //dump($id);


        $chore = Chore::find($id);


        return view('layouts.update')->with('chore', $chore );


    }


    public function save(Request $request, $id)
    {

        //dump($request->all());

        $chore = Chore::find($id);

        $chore->chore = $request->chore;

        $chore->save();

        return redirect()->route('chore');
    }




    public function completed($id)
    {



        $chore = Chore::find($id);

        $chore->completed = 1;

        $chore->save();

        return redirect()->back();
        //route('chore');
    }




}
