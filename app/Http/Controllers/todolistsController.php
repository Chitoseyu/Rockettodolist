<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\todolist;

class todolistsController extends Controller
{
    //
    public function todo()
    {
        $todo = todolist::all();

        return view('todo',compact('todo'));
    }
    public function newtodo(Request $request)
    {
        $todo=new todolist;

        $todo->todoth = $request->input('todoth');
        $todo->time = $request->input('time');
        $todo->finish = '0';
        $todo->save();

        $todo = todolist::all();
        return view('todo',compact('todo'));
    }

    public function edit($id)
    {
        $todo = todolist::find($id);

        return view('edit',compact('todo'));
    }

    public function store($id)
    {
        $todo = todolist::find($id);
        $request = \request();

        $todo->todoth = $request->input('todoth');
        $todo->time = $request->input('time');
        $todo->finish = '0';
        $todo->save();

        $todo = todolist::all();
        return view('todo',compact('todo'));
    }

    public function delete($id)
    {
        $todo = todolist::find($id);

        $todo->delete();

        $todo = todolist::all();
        return view('todo',compact('todo'));
    }
}
