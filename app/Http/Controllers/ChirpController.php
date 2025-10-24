<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirp;
use App\Http\Controllers\ChirpController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ChirpController extends Controller
{ 
    /** @use ...existing code... */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50)  // Limit to 50 most recent chirps
            ->get();
 
        return view('home', ['chirps' => $chirps]);
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
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ], [
            'message.required' => 'Please write something to chirp!',
            'message.max' => 'Chirps must be 255 characters or less.',
        ]);

        auth()->user()->chirps()->create($validated);

        return redirect('/')->with('success', 'Your chirp has been posted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    use AuthorizesRequests;
    
    
    public function edit(Chirp $chirp)
    {
        $this->authorize('update', $chirp);
       
        return view('chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp)
    {

        $this->authorize('update', $chirp);

        // Validate
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Update
        $chirp->update($validated);

        return redirect('/')->with('success', 'Chirp updated!');
    }

    public function destroy(Chirp $chirp)
    {

        $this->authorize('delete', $chirp);

        $chirp->delete();

        return redirect('/')->with('success', 'Chirp deleted!');
    }
}