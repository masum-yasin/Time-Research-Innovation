<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::get();
        return view('backend.contact.index', compact('contact'));
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
        // dd($request->all());
        $validate = $request->validate([
            'email' => 'required',
        ]);
       
        if($validate){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
               
               
                
             
            ];
            

            if(Contact::insert($data));

            $notification = array(
                'message'=> 'Contact Insert Successfully',
                'alert-type'=> 'success',
            );
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Contact $contact, $id)
    {
        $contactDelete = Contact::find($id);
        $contactDelete->delete();
        $notification = array(
            'message'=> 'Contact Delete Successfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('project.index')->with($notification);
    }
}
