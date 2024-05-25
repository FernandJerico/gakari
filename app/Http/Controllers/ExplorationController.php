<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ExplorationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::with('user', 'category')->select('id', 'image', 'user_id')->where('category_id', 1)->get();

        return view('pages.exploration', compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = $request->input('category');
        $artworks = Artwork::with('user', 'category')
            ->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            })
            ->select('id', 'image', 'description', 'user_id')
            ->get();
        return response()->json($artworks);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Artwork::with('user', 'category')->findOrFail($id);

        return view('pages.detail-exploration', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
