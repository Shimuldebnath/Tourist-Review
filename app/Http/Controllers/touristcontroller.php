<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tourist;

class touristcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tourists=tourist::all();
        return view('tourist.review',compact('tourists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tourist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tourist= new tourist;
        $this->validate($request,[
            'country'=>'required',
            'email'=>'required|unique:tourists',
            'place'=>'required',
            'body'=>'required',
            'title'=>'required|min:10|unique:tourists'
            ]);
        $tourist->country=$request->country;
        $tourist->place=$request->place;
        $tourist->title=$request->title;
        $tourist->body=$request->body;
        $tourist->email=$request->email;
        $tourist->save();
        session()->flash('message','Thanks for your review');
        return redirect('tourist');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =tourist::find($id);
        return view('tourist.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item =tourist::find($id);
        return view('tourist.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tourist= tourist::find($id);
        $this->validate($request,[
            'country'=>'required',
            'place'=>'required',
            'body'=>'required',
            'title'=>'required'
            ]);
        $tourist->country=$request->country;
        $tourist->place=$request->place;
        $tourist->title=$request->title;
        $tourist->body=$request->body;
        $tourist->save();
        session()->flash('message','Updated Successfully');
        return redirect('tourist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=tourist::find($id);
        $item->delete();
        session()->flash('message','Deleted Successfully');
        return redirect('tourist');
    }
}
