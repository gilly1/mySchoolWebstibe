<?php

namespace App\Http\Controllers\Admin;

use App\messageNumber;
use App\Events\messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sendMessagesController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Admin/messages/sendMessage');
    }

    public function delete_Form()
    {
        return view('Admin/messages/deleteForm');
    }


    public function sendMessage(Request $request)
    {
        $this->validate($request,[
            'form'=>'required',
            'message'=>'required',
        ]);

        $form=$request->input('form');
        $message=$request->input('message');

        if($form==='all'){

            $members=messageNumber::all();

            foreach($members as $member){
                event(new messages($member,$message));
            }
        }
        else if($form==='Form1'){

            $year=date("Y");
            $members=messageNumber::where('year',$year)->get();

            foreach($members as $member){
                event(new messages($member,$message));
            }
        }
        else if($form==='Form2'){

            $year=date("Y")-1;
            $members=messageNumber::where('year',$year)->get();

            foreach($members as $member){
                event(new messages($member,$message));
            }
        }
        else if($form==='Form3'){

            $year=date("Y")-2;
            $members=messageNumber::where('year',$year)->get();

            foreach($members as $member){
                event(new messages($member,$message));
            }
        }
        else if($form==='Form4'){

            $year=date("Y")-3;
            $members=messageNumber::where('year',$year)->get();

            foreach($members as $member){
                event(new messages($member,$message));
            }
        }

        return view('Admin/messages/sendMessage');
    }

    public function destroy_delete_Form()
    {
        return view('Admin/messages/deleteForm');
    }


}
