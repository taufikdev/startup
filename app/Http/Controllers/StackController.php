<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use Illuminate\Http\Request;

class StackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stack=Stack::all();
        return view('stack',['stacks'=>$stack]);
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
        $Stack = new Stack();
        $Stack->name = $request->name;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $Stack->image = $imgName;
        $Stack->save();
        return back()->with('success', 'Stack has been Added successfully');
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
    public function update(Request $request)
    {
        $Stack = Stack::findOrFail($request->id);
        // dd($service->title.' / '. $request->id);
        $Stack->name = $request->name;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $Stack->image = $imgName;
        $Stack->save();
        return back()->with('success', 'Stack has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Stack = Stack::find($id);
        $Stack->delete();
        return back()->with('delete', 'Stack has been deleted successfully');    }
}
