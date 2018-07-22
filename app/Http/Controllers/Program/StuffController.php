<?php

namespace App\Http\Controllers\Program;

use App\Category;
use App\Http\Controllers\Controller;
use App\Program;
use App\Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StuffController extends Controller
{
    public function __construct()
    {
        $this->middleware('program');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
//        dd($user);
        $stuffs = Stuff::all()->where('program_id', '=', $user->program_id);
        return view('program.stuff.index')->with(['stuffs' => $stuffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        $categories = Category::all();

        return view('program.stuff.create')->with(['programs' => $programs, 'categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $stuff = new Stuff();

        $stuff->program_id = $user->program_id;
        $stuff->category_id = $request->category_id;
        $stuff->name = $request->name;
        $stuff->description = $request->description;
        $stuff->quantity = 0;

        $stuff->save();

        return redirect('program/stuff');

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
        $stuff = Stuff::find($id);

        $programs = Program::all();
        $categories = Category::all();

        return view('program.stuff.edit')->with(['stuff'=> $stuff, 'programs' => $programs, 'categories' => $categories]);

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
        $stuff = Stuff::find($id);
        $user = Auth::user();

        $stuff->program_id = $user->program_id;
        $stuff->category_id = $request->input('category_id');
        $stuff->name = $request->input('name');
        $stuff->description = $request->input('description');

        $stuff->save();

        return redirect('program/stuff');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stuff = Stuff::find($id);
        $stuff->delete();

        return redirect('program/stuff');
    }
}
