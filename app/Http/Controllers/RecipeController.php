<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipes.index', [
            'recipes' => Recipe::latest()->filter(request(['search']))->paginate(6)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'picture' => 'required|image'
        ]);

        $attributes['picture'] = request()->file('picture')->store('public/uploads');

        $attributes['picture'] = str_replace('public', 'storage', $attributes['picture']);

        Recipe::create($attributes);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', [
            'recipe' => $recipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Recipe $recipe)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'picture' => 'required|image'
        ]);

        if ($attributes['picture'] ?? false) {
            $attributes['picture'] = request()->file('picture')->store('public/uploads');
            $attributes['picture'] = str_replace('public', 'storage', $attributes['picture']);
        }

        $recipe->update($attributes);

        return redirect('/')->with('success', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect('/')->with('success', 'Post Deleted!');
    }
}
