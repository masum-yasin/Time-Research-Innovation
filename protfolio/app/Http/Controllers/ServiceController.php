<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::get();
        // dd($service); 
        return view('backend.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
        ]);
        if($validate){
            $data = [
                'title' => $request->title,
                'description' => $request->description,
            ];
            if(Service::insert($data));


            $notification = array(
                'message'=> 'Service Data Insert Successfully',
                'alert-type'=> 'success',
            );
    
            return redirect()->route('service.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service, $id)
    {
        $serviceEdit = Service::find($id);
        return view('backend.service.edit', compact('serviceEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service, $id)
    {
        $serviceUpdate = Service::find($id);
        $validate = $request->validate([
            'title' => 'required',
        ]);
        if($validate){
            $data = [
                'title' => $request->title,
                'description' => $request->description,
            ];
          $serviceUpdate->update($data);


            $notification = array(
                'message'=> 'Service Data Update Successfully',
                'alert-type'=> 'success',
            );
    
            return redirect()->route('service.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Service $service, $id)
    {
        $serviceDelete = Service::find($id);
        $serviceDelete->delete();
        $notification = array(
            'message'=> 'Service Data Delete Successfully',
            'alert-type'=> 'success',
        );

        return redirect()->route('service.index')->with($notification);

    }
}
