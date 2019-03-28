<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::all();

        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store()
    {
        request()->validate([
            'pet_nickname' => ['required','min:2','max:191'],
            'pet_type' => ['required','min:3','max:191'],
            'pet_about' => ['required','min:1','max:191'],
            'user_id' => ['required','min:1'],
        ]);
        Pet::create(request(['pet_nickname','pet_type','pet_about','user_id']));

        return redirect('/pets');
    }

    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit',compact('pet'));
    }

    public function update(Pet $pet)
    {
        $pet >update(request(['pet_name','pet_type','pet_about']));

        return redirect('/pets');
    }

    public function destroy(Pet $pet)
    {
//        dd(request()->all());
//        Pet::destroy($id);
        $pet->delete();
        return redirect('/pets');
    }

    //
}
