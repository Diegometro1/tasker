<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chore;

class ChoresController extends Controller
{
    //

    public function index()
    {

        $chores = Chore::all();


        return view('layouts.chores')->with('chores', $chores);

    }

}
