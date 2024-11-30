<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::get();
        return view('backend.client.index', compact('client'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
 {
        // dd($request->all());
        $validate = $request->validate([
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = time(). "." . $request->image->extension();
        if($validate){
            $data = [
                'name' => $request->name,
                'profession' => $request->profession,
                'desc' => $request->desc,
                'image' => $request->$filename,
               
               
                
             
            ];
            $request->image->move('upload/',$filename);

            if(Client::insert($data));

            $notification = array(
                'message'=> 'Client Insert Successfully',
                'alert-type'=> 'success',
            );
            return redirect()->route('client.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client,$id)
    {
        $clientEdit =  Client::find($id);
        return view('backend.client.edit',compact('clientEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Client $client,$id)
    {
        $clientDelete = Client::find($id);
        $clientDelete->delete();
        $notification = array(
            'message'=> 'Client Delete Successfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('project.index')->with($notification);
    }
}
