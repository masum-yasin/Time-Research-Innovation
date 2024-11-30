<?php

namespace App\Http\Controllers;

use App\Models\EducationQualification;
use Illuminate\Http\Request;

class EducationQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = EducationQualification::get();
        // dd($service); 
        return view('backend.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'degree' => 'required|unique:education_qualifications',
        ]);
        if($validate){
            $data = [
                'degree' => $request->degree,
                'session' => $request->session,
                'result' => $request->result,
                'department' => $request->department,
                'institue' => $request->institue,
            ];
            if(EducationQualification::insert($data));


            $notification = array(
                'message'=> 'Education Data Insert Successfully',
                'alert-type'=> 'success',
            );
    
            return redirect()->route('education.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EducationQualification $educationQualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EducationQualification $educationQualification,$id)
    {
        $serviceEdit = EducationQualification::find($id);
        return view('backend.education.edit', compact('serviceEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EducationQualification $educationQualification,$id)
    {
        $serviceUpdate = EducationQualification::find($id);
        $validate = $request->validate([
            'degree' => 'required|unique:education_qualifications',
        ]);
        if($validate){
            $data = [
                'degree' => $request->degree,
                'session' => $request->session,
                'result' => $request->result,
                'department' => $request->department,
                'institue' => $request->institue,
            ];
          $serviceUpdate->update($data);


            $notification = array(
                'message'=> 'Education Data Insert Successfully',
                'alert-type'=> 'success',
            );
    
            return redirect()->route('education.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(EducationQualification $educationQualification, $id)
    {
        $serviceDelete = EducationQualification::find($id);
        $serviceDelete->delete();
        $notification = array(
            'message'=> 'Service Data Delete Successfully',
            'alert-type'=> 'success',
        );

        return redirect()->route('education.index')->with($notification);

    }
}
