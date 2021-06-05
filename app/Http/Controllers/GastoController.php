<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::all();
        return view('crud.index')->with('gastos',$gastos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gastos = new Gasto();

        $gastos->id = $request->get('id');
        $gastos->gasto = $request->get('gasto');
        $gastos->descripcion = $request->get('descripcion');
        $gastos->monto = $request->get('monto');

        $gastos->save();

        return redirect('/crud');
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
        //
        $gasto = Gasto::find($id);
        return view('crud.edit')->with('gasto',$gasto);
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
        //
        $gasto = Gasto::find($id);

        $gasto->id = $request->get('id');
        $gasto->gasto = $request->get('gasto');
        $gasto->descripcion = $request->get('descripcion');
        $gasto->monto = $request->get('monto');

        $gasto->save();

        return redirect('/crud');
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
        $gasto = Gasto::find($id);
        $gasto->delete();
        return redirect('/crud');
    }
}
