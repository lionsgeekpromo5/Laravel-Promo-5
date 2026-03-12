<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

use function Flasher\Prime\flash;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $clubss = Club::withCount('subscribers')->get();
        $clubs = Club::all();
        return view('Club.index', compact('clubs'));
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

        $request->validate([
            'club_name' => 'required',
            'club_address' => 'required'
        ]);

        Club::create($request->all());
        flash()->title('Club Added')->success('Club has been added Successfully!');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        //
    }
}
