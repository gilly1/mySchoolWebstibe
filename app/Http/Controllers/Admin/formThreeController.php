<?php

namespace App\Http\Controllers\Admin;

use App\messageNumber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class formThreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form=date("Y")-2;
        $members=messageNumber::where('year',$form)->get();
        return view('Admin/messages/formThree')->with('members',$members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'adm'=>'required',
            'name'=>'required',
            'telNo'=>'required|unique:message_numbers,telNo',
        ]);


        $form=date("Y")-2;
        $number=new messageNumber;
        $number->adm=$request->input('adm');
        $number->name=$request->input('name');
        $number->telNo='+254'.$request->input('telNo');
        $number->year=$form;
        $number->save();

        session()->flash('success','Added Successfully');

        $members=messageNumber::where('year',$form)->get();
        return view('Admin/messages/formThree')->with('members',$members);
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
        $number= messageNumber::where('id',$id)->first();
        return view('Admin/messages/formThreeEdit')->with('number',$number);
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
        $this->validate($request,[
            'adm'=>'required',
            'name'=>'required',
            'telNo'=>'required',
        ]);

        $number=messageNumber::where('id',$id)->first();
        $number->adm=$request->input('adm');
        $number->name=$request->input('name');
        $number->telNo='+254'.$request->input('telNo');
        $number->save();

        session()->flash('success','Added Successfully');

        return view('Admin/messages/formThreeEdit')->with('number',$number);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $number= messageNumber::where('id',$id)->first();
        $number->delete();
        $members=messageNumber::all();
        return view('Admin/messages/formThree')->with('members',$members);
    }
}
