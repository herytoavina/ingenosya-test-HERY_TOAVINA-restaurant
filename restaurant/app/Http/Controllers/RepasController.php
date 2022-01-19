<?php

namespace App\Http\Controllers;

use App\Http\Resources\RepasResource;
use App\Models\Repas;
use App\Models\Repas_Crees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repas = Repas::all();
        return RepasResource::collection($repas);
    }

    public function repas_crees(){
        $creer = DB::table('repas__crees')
        ->join('repas', 'repas__crees.repas_id', '=', 'repas.id')
        ->select('repas.nom', DB::raw('COUNT(repas__crees.repas_id) as quantite'))
        ->groupBy('repas.nom')
        ->get();

        return response()->json([
            "success" => true,
            "message" => "Success!!",
            "data" => $creer
        ]);
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
    public function store(Request $request)
    {
        $repas = Repas_Crees::create($request->repas_id);
        if($repas->save()){
            return new RepasResource($repas);
        } 
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
