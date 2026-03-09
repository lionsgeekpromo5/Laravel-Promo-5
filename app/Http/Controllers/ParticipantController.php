<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participants = Participant::paginate(3);
        return view('Participant.participants_list', [
            'participants' => $participants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Participant.register_form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //*validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:participants,email', 
            'phone' => 'required', 
            'school' => 'required|array', 
            'gender' => 'required', 
            'english_level' => 'required|integer', 
            'campus' => 'required|in:casablanca,fes,tanger', 
            'terms' => 'required|accepted'
        ]);

        //* store or create

        Participant::create([
            'name' => $request->name,
            'email' => $request->email, 
            'phone' => $request->phone, 
            'school' => $request->school, 
            'gender' => $request->gender, 
            'english_level' => $request->english_level, 
            'campus' => $request->campus, 
            'terms' => $request->terms
        ]);
        return redirect('/participants');
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {

        return view('Participant.participant_details', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
