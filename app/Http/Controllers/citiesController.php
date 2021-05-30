<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\cities;

class citiesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos[ 'cities']=cities::paginate('5');
        return view('cities.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cities.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoscities=request()->all();
        $datoscities=request()->except('_token');
        cities::insert($datoscities);
       // return response()->json($datoscities);
       return redirect('/cities');

    }

    /**
     * Display the specified resource.
     *
     * @param  \app\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities= cities:: findOrFail($id);
        return view('cities.edit',compact('cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datoscities=request()->except(['_token','_method']);
        cities::where('id','=',$id)->update($datoscities);
        $cities= cities:: findOrFail($id);
        return view('cities.edit',compact('cities'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo)
    {
        cities::destroy($codigo);
        return redirect('/cities');
    }
}
