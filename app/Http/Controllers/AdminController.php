<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }

    public function users(){
        $users = User::all()->except(Auth::id());
        return view("admin.users.index")->with(["users" => $users]);
    }

    public function addUser(){
        return view("admin.users.add");
    }

    public function storeUser(Request $request){
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required',
            'surname' => 'required',
            'number' => 'required',
            'password' => 'required|min:8'
        ];
        $this->validate($request,$rules);

        $data = $request->except('_token');
        $data['password'] = bcrypt($data['password']);

        $data["name"] = $data["name"]." ".$data["surname"];

        unset($data["surname"]);

        if(User::create($data)){
            session()->flash("success","User Added successfully");
            return redirect(route("admin.users"));
        }

        session()->flash("error","Error input");
        return redirect()->back();
    }

    public function editUser($id){
        $user = User::where('id',$id)->first();
        return view("admin.users.edit")->with(["user" => $user]);
    }

    public function updateUser(Request $request,$id){
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required',
            'surname' => 'required',
            'number' => 'required',
        ];
        $this->validate($request,$rules);


        $data = $request->except('_token');

        if($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data["password"]);
        }

        if(User::where("id",$id)->update($data)){
            session()->flash("success","User Updated successfully");
            return redirect(route("admin.users"));
        }

        session()->flash("error","Error input");
        return redirect()->back();
    }

    public function deleteUser(Request $request,$id){
        $user = User::where('id',$id)->first();
        if($user){
            User::where('id',$id)->delete();
            session()->flash("success","User Deleted successfully");
            return redirect(route("admin.users"));
        }
        session()->flash("error","Invalid input");
        return redirect()->back();
    }
}
