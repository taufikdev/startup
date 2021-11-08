<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use File;
class PortfolioController extends Controller
{
    
    public function index()
    {
        $portfolioCat=PortfolioCategory::all();
        $portfolio=Portfolio::all();
        return view('portfolio',['portfolioCats'=> $portfolioCat,'portfolio'=>$portfolio]);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->name = $request->name;
        $portfolio->link = $request->link;
        $portfolio->portfolio_category_id = $request->category;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $portfolio->image = $imgName;
        $portfolio->save();
        return back()->with('success', 'Portfolio has been Added successfully');
    }

    
    public function show(Request $request)
    {
        $portfolioId = $request->portfolio_id;
        $portfolioCategory = PortfolioCategory::find($portfolioId);
        $protfolio = Portfolio::where('portfolio_category_id', $portfolioId)->get();
        $response = array(
            'status' => 'success',
            'selectedPortfolioCategory' => $portfolioCategory,
            'protfolio' => $protfolio,
        );
        return response()->json($response);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request)
    {
        $protfolio = Portfolio::findOrFail($request->id);
        if (File::exists(public_path('images') . '/' . $protfolio->image)) {
            File::delete(public_path('images') . '/' . $protfolio->image);
        }
        $protfolio->name = $request->name;
        $protfolio->link = $request->link;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $protfolio->image = $imgName;
        $protfolio->save();
        return back()->with('success', 'service has been updated successfully');
    }

    
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return back()->with('delete', 'This work has been deleted successfully');
    }
}
