<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Club $club)
    {

        return view('Subscriber.create', compact('club'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clubId = $request->club_id;
        $request->validate([
            'club_id' => 'required',
            'subscriber_name' => 'required',
            'subscriber_city' => 'required',
            'subscriber_age' => 'required'
        ]);

        $subscriber = Subscriber::create([
            'subscriber_name' => $request->subscriber_name,
            'subscriber_city' => $request->subscriber_city,
            'subscriber_age' => $request->subscriber_age
        ]);


        // $subscriber->attach()->$club();
        $subscriber->clubs()->attach($clubId);
        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
