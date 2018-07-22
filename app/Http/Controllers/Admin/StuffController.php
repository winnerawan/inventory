<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Program;
use App\Stuff;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuffs = Stuff::all();
        return view('admin.stuff.index')->with(['stuffs' => $stuffs]);
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

        return view('admin.stuff.create')->with(['programs' => $programs, 'categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $stuff = new Stuff();

        $stuff->program_id = $request->program_id;
        $stuff->category_id = $request->category_id;
        $stuff->name = $request->name;
        $stuff->description = $request->description;
        $stuff->quantity = 0;

        $stuff->save();

        return redirect('admin/stuff');

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

        return view('admin.stuff.edit')->with(['stuff'=> $stuff, 'programs' => $programs, 'categories' => $categories]);

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

        $stuff->program_id = $request->input('program_id');
        $stuff->category_id = $request->input('category_id');
        $stuff->name = $request->input('name');
        $stuff->description = $request->input('description');

        $stuff->save();

        return redirect('admin/stuff');

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

        return redirect('admin/stuff');
    }
}
