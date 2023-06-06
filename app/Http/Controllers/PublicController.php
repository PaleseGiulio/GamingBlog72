<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;
use App\Mail\NewslettersMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\NewslettersRequest;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }

    public function newsletters(Request $request){
        $newsletter=Newsletters::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        $name=$request->name;
        $email=$request->email;
        Mail::to($email)->send(new NewslettersMail($name, $email));
        return redirect(route('welcome'))->with('newslettersMail','Richiesta inviata!');
    }


}

