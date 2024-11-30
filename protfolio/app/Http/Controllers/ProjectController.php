<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::get();
        return view('backend.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'project_demo' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = time(). "." . $request->project_demo->extension();
        if($validate){
            $data = [
                'project_name' => $request->project_name,
                'description' => $request->description,
               
               
                'project_demo' =>  $filename,
             
            ];
            $request->project_demo->move('upload/',$filename);

            if(Project::insert($data));

            $notification = array(
                'message'=> 'Project Insurt Successfully',
                'alert-type'=> 'success',
            );
            return redirect()->route('project.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project, $id)
    {
        $projectEdit =  Project::find($id);
        return view('backend.project.edit',compact('projectEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project, $id)
    {
        $projectUpdate = Project::find($id);
        $validate = $request->validate([
            'project_demo' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = time(). "." . $request->project_demo->extension();
        if($validate){
            $data = [
                'project_name' => $request->project_name,
                'description' => $request->description,
               
               
                'project_demo' =>  $filename,
             
            ];
            $request->project_demo->move('upload/',$filename);

            $projectUpdate->update($data);

            $notification = array(
                'message'=> 'Project Insurt Successfully',
                'alert-type'=> 'success',
            );
            return redirect()->route('project.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Project $project,$id)
    {
        $projectDelete = Project::find($id);
        $projectDelete->delete();
        $notification = array(
            'message'=> 'Project Delete Successfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('project.index')->with($notification);
    }
}
