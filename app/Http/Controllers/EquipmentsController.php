<?php

namespace App\Http\Controllers;

use App\Equipments;
use Illuminate\Http\Request;
use Datatables;

class EquipmentsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view-equipments');
    }

    public function dataTable(){
        $equipments = Equipments::all();
		return Datatables::of($equipments)
							->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-equipment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Equipments::create($input);
        toastr()->success('Equipments Has Been Created!');
        
        return redirect()->route('equipments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = Equipments::find($id);
        return view('edit-equipment', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Equipments $equipment, Request $request)
    {
        $equipment->update($request->all());
        toastr()->success('Equipment Has Been Update!');
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
