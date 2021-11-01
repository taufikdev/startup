<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Services;
use App\Models\Contact;
use App\Models\Discount;
use App\Models\Plan;
use App\Models\PlanCaracters;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $heros = Hero::all()[0];
        $services = Services::all();
        $contacts = Contact::all()[0];
        $discount = Discount::all()[0];
        $plans = Plan::all();
        $plan_caracters = PlanCaracters::all();
        // dd($plan_caracters);
        return view('welcome', ['heros' => $heros,'services'=>$services,'contact'=>$contacts,'discount'=>$discount,'plans'=>$plans, 'plan_caracters'=> $plan_caracters]);
       
    }
}
