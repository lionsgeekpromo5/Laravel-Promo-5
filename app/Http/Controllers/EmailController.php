<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::all();
        return view('Contact.contact', compact('emails'));
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'email_priority' => 'required|in:urgent,not_urgent,important',
        ]);

        // Email::create([
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'message' => $request->message,
        //     'email_priority' => $request->email_priority
        // ]);
        Email::create($request->all());
        return back();
    }

    public function filterEmails(Request $request) {

            $query = Email::query();
            // if($request->email_priority == 'all'){
            //     $query = $query->get();
            // }
            if($request->email_priority != 'all'){
                $query->where('email_priority', $request->email_priority)->get();
            }
            if($request->is_read != 'all'){
                $query->where('is_read', $request->is_read)->get();
            }
            $emails = $query->get();
            $prio = $request->email_priority;
            $read = $request->is_read;
            return view('Contact.contact', compact('emails', 'prio', 'read'));

            
    }
    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email $email)
    {
        $email->update([
            'is_read' => $request->is_read ? true : false
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
    }
}
