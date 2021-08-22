<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use function Illuminate\Support\Facades\Date;

class MailController extends Controller {
    public function verifyEmail($id,$hash){
        $user = User::where('id',$id)->first();
        if(!$user){
            session()->flash("error","Invalid user!");
            return redirect(route("login"));
        }
        if($user->email_verified_at != null){
            session()->flash("success","Email already verified");
            return redirect(route("login"));
        }
        if(hash_equals($hash, $user->mail_hash)){
            $user->email_verified_at = now();
            $user->update();
            session()->flash("success","Email verified successfully");
            return redirect(route("login"));
        }
    }
}
