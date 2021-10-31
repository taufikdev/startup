<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{

    public function index()
    {
        $discount = Discount::all()[0];
        return view('discount',['discount'=>$discount]);
    }

  
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
        $discount = Discount::findOrFail($request->id);
        $discount->amount = $request->amount;
        $discount->description = $request->description;
        $discount->save();
        return back()->with('success', 'Discount has been updated successfully');
    }

   
    public function destroy($id)
    {
        //
    }
}
