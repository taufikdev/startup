<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanCaracters;
use Illuminate\Http\Request;

class PlanController extends Controller
{
   
    public function index()
    {
        $plans = Plan::all();
        $plan_caracters = PlanCaracters::all();
        return view('plan',['plans'=>$plans,'plan_caracters'=>$plan_caracters]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(Request $request)
    {
        $planId = $request->plan_id;
        $plan = Plan::find($planId);
        $plan_caracters = PlanCaracters::where('plan_id', $planId)->get();
        $response = array(
            'status' => 'success',
            'selectedPlan' => $plan,
            'plan_caracters' => $plan_caracters,
        );
        return response()->json($response);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request)
    {
        $planId = $request->plan_id;
        $plan = Plan::find($planId);
        $plan->price = $request->plan_price;
        $plan->save();
        $plans = Plan::all();
        $plan_caracters = PlanCaracters::where('plan_id',$planId)->get();
        $response = array(
            'status' => 'success',
            // 'selectedPlan' => $plan,
            'plans' => $plans,
            'plan_caracters' => $plan_caracters,
        );
        return response()->json($response);
    }

   
    public function destroy($id)
    {
        //
    }
}
