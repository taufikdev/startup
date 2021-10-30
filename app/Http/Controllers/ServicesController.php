<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function index()
    {

        return view('services',['services'=>Services::all()]);
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $Service = new Services();
        $Service->title = $request->title;
        $Service->content = $request->content;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $Service->img = $imgName;
        $Service->save();
        return back()->with('success', 'Service has been Added successfully');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request,$id)
    {
        $service = Services::findOrFail($request->id);
        // dd($service->title.' / '. $request->id);
        $service->title = $request->title;
        $service->content = $request->content;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $service->img = $imgName;
        $service->save();
        return back()->with('success', 'service has been updated successfully');
    }

    
    public function destroy($id)
    {
        $service = Services::find($id);
        $service->delete();
        return back()->with('delete', 'Service has been deleted successfully');
    }
}
