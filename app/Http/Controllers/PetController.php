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
    

public function create(){
    
    return view('pets.create');
}
    //create
    public function store(Request $request){
        Pets::create([
            'type' => $request -> type,
            'age' => $request -> age,
            'desc' => $request -> desc,
            'shop' => $request -> shop,

        ]);
        return redirect('/home-admin');
    }


    public function update($id){
        $pets = Pets::find($id);
        return view('pets.update', compact('pets'));
    }

    public function edit(Request $request, $id){
        $pets = Pets::find($id);
        $pets->update([
            'type' => $request -> type,
            'age' => $request -> age,
            'desc' => $request -> desc,
            'shop' => $request -> shop,
        ]);
        return redirect('/home-admin');
    }

    public function delete(Request $request, $id){
        Pets::where('id', $id)->delete();
        return redirect('/home-admin');
    }

}
