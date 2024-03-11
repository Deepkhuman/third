<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;

class student extends Controller
{
    function display(Request $request){
        $empinsert = new Emp;

        $empinsert->name = $request->name;
        $empinsert->email = $request->email;
        $empinsert->message = $request->message;
        $empinsert->created_at;
        $empinsert->updates_at;
        $empinsert->save();

        return redirect('/submit');

    }

    function data(Request $request){
        $res = Emp::all();
        $data = compact('res');
        return view('data')->with($data);
    }
}
