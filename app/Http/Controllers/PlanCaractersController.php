<?php

namespace App\Http\Controllers;
use App\Models\PlanCaracters;
use Illuminate\Http\Request;

class PlanCaractersController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $planId = $request->plan_id;
        $plan_caracter_name = $request->plan_caracter;
        // var_dump($plan_caracter_name);
        $plan_caracter = new PlanCaracters();
        $plan_caracter->name = $plan_caracter_name;
        $plan_caracter->plan_id = $planId;
        $plan_caracter->save();
        $plan_caracters = PlanCaracters::where('plan_id', $planId)->get();
        $response = array(
            'status' => 'success',
            'plan_caracters' => $plan_caracters,
        );
        return response()->json($response);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $planId = $request->plan_id;
        $ids_of_caracters = $request->caracters_to_delete;
        foreach($ids_of_caracters as $id_to_delete){
            PlanCaracters::where('id', $id_to_delete)->delete();
        }
        $plan_caracters = PlanCaracters::where('plan_id', $planId)->get();
        $response = array(
            'status' => 'success',
            'plan_caracters' => $plan_caracters,
        );
        return response()->json($response);
    }
}
