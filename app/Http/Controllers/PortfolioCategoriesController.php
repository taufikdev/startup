<?php

namespace App\Http\Controllers;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoriesController extends Controller
{
    
    public function index()
    {
        // $portfolioCategories = PortfolioCategory::all();
        // return view('portfolio',['portfolioCategories'=>$portfolioCategories]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $portCat =  new PortfolioCategory();
        $portCat->name = $request->name;
        $portCat->save();
        return back()->with('success', 'Portfolio category has been Added successfully');
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
        $portCat =  PortfolioCategory::find($request->id);
        $portCat->name = $request->name;
        $portCat->save();
        return back()->with('success', 'Portfolio category has been Updated successfully');
    }
   
    public function destroy($id)
    {
        $portfolioCat = PortfolioCategory::find($id);
        $portfolioCat->delete();
        return back()->with('delete', 'Portfolio category has been deleted successfully');
    }
}
