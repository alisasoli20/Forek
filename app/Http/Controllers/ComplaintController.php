<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function complaints(){
        $complaints = Complaint::all();
        return view("admin.complaints.index")->with(["complaints" => $complaints]);
    }


    public function index(){
        return view("front.sikayet-yaz");
    }

    public function submitComplaint(Request $request){
        $rules = [
            "company_name" => "required",
            "title" => "required",
            "detail" => "required",
            "rating" => "required",
        ];

        $this->validate($request,$rules);

        $data = $request->except("_token");


        if($request->hasFile("image")){
            $file = $request->file("image");
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path("storage"),$filename);
            $data['image'] = $filename;
        }

        $data["user_id"] = Auth::id();

        $complaint = new Complaint($data);

        if($complaint->save()){
            session()->flash("success","Complaint Registered Successfully");
            return redirect()->back();
        }

        session()->flash("error","Invalid Input");
        return redirect()->back();
    }
}
