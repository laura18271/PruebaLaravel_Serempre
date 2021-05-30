<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos[ 'Clientes']=client::paginate('5');
        return view('client.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosClientes=request()->all();
        $datosClientes=request()->except('_token');
        Client::insert($datosClientes);
       // return response()->json($datosClientes);
       return redirect('/clientes');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(client $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= client:: findOrFail($id);
        return view('client.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosClientes=request()->except(['_token','_method']);
        client::where('id','=',$id)->update($datosClientes);
        $cliente= client:: findOrFail($id);
        return view('client.edit',compact('cliente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo)
    {
        client::destroy($codigo);
        return redirect('/clientes');
    }
}
