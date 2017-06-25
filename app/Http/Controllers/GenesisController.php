<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genesis;

class GenesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genesises = Genesis::all();
        return $genesises;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // todo check param
        $genesis = new Genesis();
        foreach($request->request as $k => $v) {
            $genesis->$k = $v;
        }
        $genesis->create_user = $genesis->op_user = $request->op_user;
        $genesis->save();
        return $genesis;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genesis = new Genesis();
        return $genesis->findOrFail($id);
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
        $genesis = Genesis::findOrFail($id);
        foreach($request->request as $k => $v) {
            $genesis->$k = $v;
        }
        $genesis->op_user = $request->op_user;
        $genesis->save();
        return $genesis;
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

    public function commit($id) {
    }
}
