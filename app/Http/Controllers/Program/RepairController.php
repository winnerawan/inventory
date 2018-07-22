<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Item;
use App\Repair;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::all();

        return view('program.repair.index')->with(['repairs' => $repairs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $items = Item::join('stuffs', 'stuffs.id', '=', 'items.stuff_id')->join('programs', 'programs.id', '=', 'stuffs.program_id')->where('programs.id', '=', $user->program_id)->where('condition_id', '=', 3)->get();
//        dd(sizeof($items));
        if (sizeof($items)==0) {
            redirect('program/home');
        }
        return view('program.repair.create')->with(['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repair = new Repair();

        $repair->item_id = $request->item_id;
        $repair->quantity = $request->quantity;

        $repair->save();
        $item = Item::find($request->item_id);
        $qty = (int)$item->quantity - (int)$request->quantity;

        DB::table('items')->where('id', '=', $request->item_id)->update(['quantity' => $qty]);

        return redirect('program/repair');
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
        $repair = Repair::find($id);

        return view('program.repair.edit')->with(['repair' => $repair]);
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
        $repair = Repair::find($id);

        $repair->item_id = $request->input('item_id');
        $repair->quantity = $request->input('quantity');

        $repair->save();

        return redirect('program/repair');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repair = Repair::find($id);
        $repair->delete();

        return redirect('program/repair');
    }

    public function getJsonQty($id)
    {
        $stuff = Stuff::find($id);
        $j = $stuff->quantity;
        return $j;
    }

    public function fixed(Request $request)
    {
        $repair = Repair::find($request->repair_id);
        $item = Item::find($repair->item_id);

        $qty = ((int)$item->quantity - (int)$request->quantity);

        $qty2 = (int)$repair->quantity - (int)$request->quantity;

        if ($qty2==0) {
            $this->destroy($repair->id);
        }

        $this->update_condition($repair->item->stuff->id, $request->quantity);

        $repair->quantity = $qty2;
        $repair->save();

        return redirect('program/repair');
    }

    public function update_condition($s_id, $qty)
    {
        $item = Item::where('stuff_id', $s_id)->where('condition_id', '=', 1)->first();
        if ($item==null) {

        } else {
            $item->quantity = $item->quantity + $qty;
            $item->save();
        }

    }

    public function back()
    {
        $repairs = Repair::all();
        return view('program.repair.back')->with(['repairs' => $repairs]);
    }

    public function subtract_repair()
    {

    }
}
