<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAll() {
        $hero = Hero::all();
        return response()->json($hero, 200);
    }

    public function show($id) {
        $hero = Hero::find($id);
        return response()->json($hero, 200);
    }

    public function add(Request $request) {
        if (!$request->input('name_hero')) {
            return response()->json(['error' => 'is not name_hero.'], 422);
        }
        if (!$request->input('universe')) {
            return response()->json(['error' => 'is not universe'], 422);
        }
        if (!$request->input('ability')) {
            return response()->json(['error' => 'is not ability.'], 422);
        }
        if (!$request->input('age')) {
            return response()->json(['error' => 'is not age.'], 422);
        }
        if (!$request->input('main_villain')) {
            return response()->json(['error' => 'is not main_villain.'], 422);
        }

        $name_hero = $request->input('name_hero');
        $universe = $request->input('universe');
        $ability = $request->input('ability');
        $age = $request->input('age');
        $main_villain = $request->input('main_villain');

        $hero = new Hero();
        $hero->name_hero = $name_hero;
        $hero->universe = $universe;
        $hero->ability = $ability;
        $hero->age = $age;
        $hero->main_villain = $main_villain;
        $hero->save();

        return response()->json($hero, 201);
    }

    public function edit(Request $request, $id) {
        $hero = Hero::find($id);

        $name_hero = $request->input('name_hero');
        $universe = $request->input('universe');
        $ability = $request->input('ability');
        $age = $request->input('age');
        $main_villain = $request->input('main_villain');

        $hero = new Hero();
        $hero->name_hero = $name_hero;
        $hero->universe = $universe;
        $hero->ability = $ability;
        $hero->age = $age;
        $hero->main_villain = $main_villain;
        $hero->save();

        return response()->json($hero, 200);
    }

    public function delete($id) {
        $hero = Hero::find($id);
        $hero->delete();
        return response()->json(['hero'=> 'Запись успешно удалена.'], 200);
    }
}
