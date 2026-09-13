<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the clubs.
     */
    public function index()
    {
        $clubs = Club::all();

        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new club.
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created club in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'titles' => 'required|integer|min:0',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'colors' => 'required|string|max:255',
            'stadium' => 'required|string|max:255',
            'founded_year' => 'required|integer|min:1800|max:' . date('Y'),
        ]);

        Club::create($validated);

        return redirect()
            ->route('clubs.index')
            ->with('success', 'Club created successfully.');
    }

    /**
     * Display the specified club.
     */
    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    /**
     * Show the form for editing the specified club.
     */
    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    /**
     * Update the specified club in storage.
     */
    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'titles' => 'required|integer|min:0',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'colors' => 'required|string|max:255',
            'stadium' => 'required|string|max:255',
            'founded_year' => 'required|integer|min:1800|max:' . date('Y'),
        ]);

        $club->update($validated);

        return redirect()
            ->route('clubs.index')
            ->with('success', 'Club updated successfully.');
    }

    /**
     * Remove the specified club from storage.
     */
    public function destroy(Club $club)
    {
        $club->delete();

        return redirect()
            ->route('clubs.index')
            ->with('success', 'Club deleted successfully.');
    }
}