<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::get();
        return view('backend.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'photo' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = time(). "." . $request->photo->extension();
        if($validate){
            $data = [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'age' => $request->age,
                'lang' => $request->lang,
                'desc' => $request->desc,
                'title' => $request->title,
                'exprience' => $request->exprience,
                'github' => $request->github,
                'address' => $request->address,
                'nationality' => $request->nationality,
                'photo' =>  $filename,
             
            ];
            $request->photo->move('upload/',$filename);

            if(About::insert($data));

            $notification = array(
                'message'=> 'Protfoli Insurt Successfully',
                'alert-type'=> 'success',
            );
            return redirect()->route('about.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about, $id)
    {
        $editAbout =  About::find($id);
        return view('backend.about.edit',compact('editAbout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about, $id)
    {
        $aboutUpdate = About::find($id);
        $validate = $request->validate([
            'photo' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = time(). "." . $request->photo->extension();
        if($validate){
            $data = [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'age' => $request->age,
                'lang' => $request->lang,
                'desc' => $request->desc,
                'title' => $request->title,
                'exprience' => $request->exprience,
                'github' => $request->github,
                'address' => $request->address,
                'nationality' => $request->nationality,
                'photo' =>  $filename,
             
            ];
            $request->photo->move('upload/',$filename);

           $aboutUpdate->update($data);

            $notification = array(
                'message'=> 'Protfoli Update Successfully',
                'alert-type'=> 'success',
            );
            return redirect()->route('about.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(About $about, $id)
    {
        $aboutDelete = About::find($id);
        $aboutDelete->delete();
        $notification = array(
            'message'=> 'Protfoli Delete Successfully',
            'alert-type'=> 'success',
        );
        return redirect()->route('about.index')->with($notification);
    }
}
