<?php

namespace App\Http\Controllers;

use App\Http\Resources\RepasIngredientsResource;
use App\Models\Repas;
use App\Models\Repas_Ingredients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepasIngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idRepas)
    {
        $repas_ingredients = DB::table('repas__ingredients')
        ->join('ingredients', 'repas__ingredients.ingredients_id', '=' , 'ingredients.id')
        ->where('repas__ingredients.repas_id', $idRepas)
        ->select('ingredients.nom', 'repas__ingredients.quantite', 'ingredients.unite')
        ->get();

        return response()->json([
            "success" => true,
            "message" => "Liste des ingredients",
            "data" => $repas_ingredients
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
        try {
            DB::beginTransaction();
            $repas = new Repas();
            $repas->nom = $request[0];
            $repas->save();
            foreach($request[1] as $ingredients) {
                $repasIngredients = new Repas_Ingredients();
                $repasIngredients->repas_id = $repas->id;
                $repasIngredients->ingredients_id = $ingredients['nom_ingredient'];
                $repasIngredients->quantite = $ingredients['quantite'];
                $repasIngredients->save();
            }   

            DB::commit();
            return response()->json([
                "success" => true,
                "message" => "Repas créer!",
                "data" => $repas
                ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                "success" => false,
                "data" => $request[1][0]["quantite"]
            ]);
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
