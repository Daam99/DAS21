<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Answer;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers =Answer::all();
        return view('admin/modules/answers/index',compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/modules/answers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'number' => 'required',
            'text' => 'required',
            'name' => 'required',
        ]);
        $answer = new Answer;
        $answer->number = $request->number;
        $answer->text = $request->text;
        $answer->name = $request->name;
        $answer->save();
        return Redirect()->back()->with('status', 'Answer created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::find($id);
        return view('admin/modules/answers/edit',compact(['answer']));
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
        $this->validate($request, [ 
            'number' => 'required',
            'text' => 'required',
            'name' => 'required',
        ]);
        $answer = Answer::find($id);
        $answer -> number = $request -> number;
        $answer -> text = $request -> text;
        $answer -> name = $request -> name;
        $answer -> save();
        return Redirect()->back()->with('status', 'Answer Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Answer::find($id); 
        $answer->delete();     
        return Redirect()->back()->with('status', 'Answer deleted successfully!');
    }
}