<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\Applicant;

class SendEmailController extends Controller
{   

    public function loadForm(){
        return view('form');
    }


    public function send(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'mobile' => 'required',
    ]);
        $data = new Applicant;

        
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->age = $request->input('age');
        $data->gender = $request->input('gender');
        $data->education = $request->input('education');
        $data->mobile = $request->input('mobile');

        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'education' => $request->education,
            'mobile' => $request->mobile,
        ];

        $data->save();
        
        $myMail = 'aliaarif995@gmail.com';
        Mail::to($myMail)->send(new SendEmail($mailData));
        return redirect('/')->with('success', 'Email sent successfully');
    }
}
