<?php

namespace App\Http\Controllers;

use App\Models\Uom;
use Illuminate\Http\Request;

class UomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uoms=Uom::all();
        return view("pages.erp.uom.index",["uoms"=>$uoms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.erp.uom.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uom=new Uom();
        $uom->name=$request->txtname;

        $uom->save();

        return redirect()->route('uoms.create')->with("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uom=Uom::find($id);
        return view("pages.erp.uom.show",["uom"=>$uom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Uom $uom)
    {
        return view("pages.erp.uom.edit",["uom"=>$uom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uom $uom)
    {
        $uom=Uom::find($uom->id);
        $uom->name=$request->txtname;

        $uom->save();

        return redirect()->route('uoms.index')->with("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uom $uom)
    {
        $uom->delete();
        return redirect()->route('uoms.index')->with("success");
    }
}
