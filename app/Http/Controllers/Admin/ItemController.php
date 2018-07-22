<?php

namespace App\Http\Controllers\Admin;

use App\Condition;
use App\Http\Controllers\Controller;
use App\Item;
use App\Stuff;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('admin.item.index')->with(['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stuffs = Stuff::all();

        $conditions = Condition::all();

        return view('admin.item.create')->with(['conditions' => $conditions, 'stuffs' => $stuffs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $item = new Item();

//        $item->name = $request->name;
        $item->quantity = $request->quantity;
        $item->stuff_id = $request->stuff_id;
        $item->condition_id = $request->condition_id;
        $item->location = $request->location;

        $this->add_stuff_qty($item->stuff_id, $request->quantity);
        $item->save();

        return redirect('admin/item');
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
        $item = Item::find($id);

        $stuffs = Stuff::all();
        $conditions = Condition::all();
        return view('admin.item.edit')->with(['item' => $item, 'stuffs' => $stuffs, 'conditions' => $conditions]);
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
        $item = Item::find($id);
//        $item->name = $request->input('name');
        $item->quantity = $request->input('quantity');
        $item->stuff_id = $request->input('stuff_id');
        $item->condition_id = $request->input('condition_id');
        $item->location = $request->input('location');

        $item->save();

        return redirect('admin/item');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        $item->delete();
        return redirect('admin/item');
    }

    public function add_stuff_qty($id, $qty)
    {
        $stuff = Stuff::find($id);
        $stuff->quantity = $qty;

        $stuff->save();
    }
}
