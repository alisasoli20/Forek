<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{

    public function index()
    {

        return view('home');
    }

    public function login(){
        if(Auth::check()){
            return redirect(route("admin"));
        }
        return view('front.login');
    }

    public function post_login(Request $request){
        $rules = [
            'email' => 'required',
            'password' => 'required|min:8'
        ];
        $this->validate($request,$rules);


        $user['email'] = $request->get("email");
        $user['password'] = $request->get("password");

        $mailUser = User::where('email',$user['email'])->first();

        if(!$mailUser){
            session()->flash("error","Invalid username or password");
            return redirect(route("login"));
        }

        if($mailUser->role == "admin"){
            Auth::login($mailUser);
            return redirect(route("admin"));
        }

        if($mailUser->email_verified_at == null){
            session()->flash("error","Email not verified");
            return redirect()->back();
        }

        if(Auth::attempt($user)){
            return redirect(route("home"));
        }
        session()->flash("error","Invalid email or password");
        return redirect()->back();
    }

    public function register(){
        return view('front.register');
    }

    public function post_register(Request $request){
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required',
            'surname' => 'required',
            'number' => 'required',
            'password' => 'required|confirmed|min:8'
        ];
        $this->validate($request,$rules);

        $data = $request->except('password_confirmation','_token');
        $data["name"] = $data["name"]." ".$data["surname"];

        unset($data["surname"]);

        $data['password'] = bcrypt($data['password']);

        $six_digit_random_number = random_int(100000, 999999);
        $data['mail_hash'] = bcrypt($six_digit_random_number);

        $user = new User($data);

        if($user->save()){
            $this->sendMail($user->toArray());
            session()->flash("success","Mail has been sent to your email. Kindly check your email.");
            return redirect(route("login"));
        }


        session()->flash("error","Error input");
        return redirect()->back();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route("home"));
    }

    public function profile(){
        return view("front.user-setting");
    }

    public function updateProfile(Request $request){
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required',
        ];
        $this->validate($request,$rules);



        $data = $request->except("_token");

        if($request->hasFile("image")){
            $user = User::where("id",Auth::id())->first();
            @unlink(public_path("storage/".$user->image));
            $file = $request->file("image");
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path("storage"),$filename);
            $data['image'] = $filename;
        }


        if(User::where("id",Auth::id())->update($data)){
            session()->flash("success","Profile Updated successfully");
            return redirect()->back();
        }

        session()->flash("error","Invalid Input");
        return redirect()->back();
    }

    public function updatePassword(Request $request){
        $rules = [
            "current_password" => "required",
            "password" => "required|confirmed|min:8"
        ];

        $this->validate($request,$rules);

        $user = User::where("id",Auth::id())->first();

        $current_password = $request->get("current_password");
        $password = $request->get("password");

        if(password_verify($current_password, $user->password)){
            if($current_password != $password){
                $password = bcrypt($password);
                User::where("id",Auth::id())->update(["password" => $password]);
                session()->flash("success","Password changed successfully");
                return redirect()->back();
            }
            else{
                session()->flash("error","Same password cannot be set again");
                return redirect()->back();
            }
        }

        session()->flash("error","Wrong Password");
        return redirect()->back();
    }

    public function sikayetler(){
        return view("front.sikayetler");
    }

    private function sendMail($user){
        $mailUser = $user;
        Mail::send('mails.mail', $user, function($message) use ($mailUser) {
            $message->to($mailUser["email"], 'Foreks')->subject
            ('Foreks Email verification');
            $message->from('foreks@forekssikayetleri.com','Ali Sasoli');
        });
    }

    public function googleLogin(){
        $googleUser = Socialite::driver('google')->user();

        $this->registerOrLogin($googleUser);

        return redirect(route("home"));

    }

    public function facebookLogin(){
        $facebookUser = Socialite::driver('facebook')->user();

        $this->registerOrLogin($facebookUser);

        return redirect(route("home"));
    }

    private function registerOrLogin($data){

        $user = User::where('email',$data->getEmail())->first();
        if(!$user){
            $user = new User();

            $user->name = $data->getName();
            $user->email = $data->getEmail();
            $user->image = $data->getAvatar();
            $user->email_verified_at = now();
            $user->provider_id = $data->id;
            $user->number = 03;
            $user->save();
        }

        Auth::login($user);
    }
}

