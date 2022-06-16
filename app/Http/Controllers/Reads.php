<?php

namespace App\Http\Controllers;

use App\Models\Read;
use Illuminate\Http\Request;

class Reads extends Controller
{
    public function read()
    {
        $read_list = Read::all();
        return view('read-db',compact('read_list',));
    }
}
