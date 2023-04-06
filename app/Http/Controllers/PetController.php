<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pets;

class PetController extends Controller
{
    //show all
    public function index(Request $request){
    if($request -> search){
        $pets = Pets::where('pets', 'LIKE', "%$request->search%")->get();//for query string, search directly the task
        return $pets;
    }
    $pets = Pets::all();
    // return $pets;
    return view('pets.index', [
        'data' => $pets
    ]);
}


public function adopt(Request $request ){
    if($request -> search){
        $pets = Pets::where('pets', 'LIKE', "%$request->search%")->get();//for query string, search directly the task
        return $pets;
    }
    $pets = Pets::all();
    // return $pets;
    return view('pets.index-adopter', [
        'data' => $pets]);
}
    

public function create(){
    
    return view('pets.create');
}
    //create
    public function store(Request $request){
        // $this->validate($request,[
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        // ]);
        $image_path = $request -> file('image')->getClientOriginalName();
        $request -> file('image')->move(public_path(), $image_path);
        $data[]= $image_path;
        Pets::create([
            'type' => $request -> type,
            'age' => $request -> age,
            'desc' => $request -> desc,
            'image' => $image_path,
            'shop' => $request -> shop,

        ]);
        session()->flash('success', 'Image Upload successfully');
        return redirect('/home-admin');
    }


    public function update($id){
        $pets = Pets::find($id);
        return view('pets.update', compact('pets'));
    }

    public function edit(Request $request, $id){
        $image_path = $request -> file('image')->getClientOriginalName();
        $request -> file('image')->move(public_path(), $image_path);
        $data[]= $image_path;
        $pets = Pets::find($id);
        $pets->update([
            'type' => $request -> type,
            'age' => $request -> age,
            'desc' => $request -> desc,
            'image' => $image_path,
            'shop' => $request -> shop,
        ]);
        return redirect('/home-admin');
    }

    public function delete(Request $request, $id){
        Pets::where('id', $id)->delete();
        return redirect('/home-admin');
    }

}
