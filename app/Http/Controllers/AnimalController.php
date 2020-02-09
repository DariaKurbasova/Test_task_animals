<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends BaseController {

    public function showAll() {
        return view('main_page', ['animals' => Animal::all()]);
    }

    public function create() {
        return view('create');
    }

    public function addAnimal(Request $request) {
        $animal = new Animal();

        $request->validate([
            'name' => 'required|string|unique:animals|min:2|max:255',
            'type' => 'required',
            'legs' => 'required|integer|min:0|max:100',
        ]);

        $animal->name = $request->name;
        $animal->type = $request->type;
        $animal->legs = $request->legs;

        $animal->save();

        return redirect('/');
    }

    public function edit($id) {
        return view('edit', ['animal' => Animal::find($id)]);
    }

    public function updateAnimal(Request $request) {
        $animal = Animal::find($request->id);

        $request->validate([
            'name' => 'required|string|min:2|max:255|unique:animals,name,'.$request->id,
            'type' => 'required',
            'legs' => 'required|integer|min:0|max:100',
        ]);

        $animal->name = $request->name;
        $animal->type = $request->type;
        $animal->legs = $request->legs;

        $animal->save();

        return redirect('/');
    }

    public function delete($id) {
        Animal::find($id)->delete();

        return redirect('/');
    }
}