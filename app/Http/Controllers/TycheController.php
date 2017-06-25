<?php

namespace App\Http\Controllers;

use App\Genesis;
use App\Tyche;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TycheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($genesis_id)
    {
        return Tyche::where("genesis_id", $genesis_id)->get();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($genesis_id, Request $request)
    {
        $genesis = Genesis::findOrFail($genesis_id);
        if(0 < $genesis->tyche_id) {
            // A genesis only have one tyche
            // todo
            return null;
        }

        $tyche = new Tyche();
        $tyche->genesis_id = $genesis_id;
        $tyche->save();

        $genesis->tyche_id = $tyche->id;
        $genesis->save();
        return $tyche;
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
