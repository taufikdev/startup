<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Services;
use App\Models\Contact;
use App\Models\Discount;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $heros = Hero::all()[0];
        $services = Services::all();
        $contacts = Contact::all()[0];
        $discount = Discount::all()[0];
        // echo $heros[0]->title;
        return view('welcome', ['heros' => $heros,'services'=>$services,'contact'=>$contacts,'discount'=>$discount]);
       
    }
}
