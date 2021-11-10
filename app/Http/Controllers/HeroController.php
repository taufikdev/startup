<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use File;

class HeroController extends Controller
{
    public function addHero(){
        // return view('hero');
        $heros = Hero::all()[0];
        return view('hero', ['heros'=>$heros]);
    }
    public function update(Request $request)
    {

        if (!$request->hasFile('file')) {
            return back()->with('error', 'choose a photo please');
        }

        $hero = Hero::findOrFail($request->id);
        if (File::exists(public_path('images') . '/' . $hero->img)) {
            File::delete(public_path('images') . '/' . $hero->img);
        }
        $hero->title = $request->title;
        $hero->content = $request->content;
        $img = $request->file('file');
        $imgName = time() . '.' . $img->extension();
        $img->move(public_path('images'), $imgName);
        $hero->img = $imgName;

        $hero->save();
        return back()->with('success', 'hero has been updated successfully');
    }
    
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'age' => 'required|numeric',
        //     'email' => 'required|email',
        // ]);

        // $input = $request->all();
        $title = $request->title;
        $content = $request->content;
        $img = $request->file('file');
        $imgName = time().'.'.$img->extension();
        $img->move(public_path('images'),$imgName);

        $hero = new Hero();
        $hero->title = $title;
        $hero->content = $content;
        $hero->img = $imgName;
        
        $hero->save();

        // return redirect()->route('students.index');
        return back()->with('success','hero has been added successfully');
    }
}
