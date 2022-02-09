<?php

namespace App\Http\Controllers;

use App\Models\Campio;
use App\Http\Requests\StoreCampioRequest;
use App\Http\Requests\UpdateCampioRequest;

class CampioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campions = Campio::all();
        return view('index',compact('campions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCampioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campio  $campio
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $campio = Campio::find($id);
        return view('show',compact('campio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campio  $campio
     * @return \Illuminate\Http\Response
     */
    public function edit(Campio $campio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampioRequest  $request
     * @param  \App\Models\Campio  $campio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampioRequest $request, Campio $campio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campio  $campio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campio $campio)
    {
        //
    }
}
