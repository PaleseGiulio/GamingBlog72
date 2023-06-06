<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){
        return view('user.profile');
    }
    public function destroy(){
        foreach($user_consols as $user_consol){
            $user_consol->update([
                'user_id'=>NULL,
            ]);
        }
        Auth::user()->delete();
        return redirect(route('welcome'))->with('userdeleted','Cancellazione avvenuta con successo!');
    }
}
