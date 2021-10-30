<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Services;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $heros = Hero::all()[0];
        $services = Services::all();
        // echo $heros[0]->title;
        return view('welcome', ['heros' => $heros,'services'=>$services]);
       
    }
}
