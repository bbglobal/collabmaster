<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    //
    public function brand_view(){
        $brands = User::where('role','brand')->get();
        // dd($users);
        return view('admin.pages.user.brand_table',compact('brands'));
    }

    public function brand_edit($id){
        $brand = User::where('role','brand')->find($id);
        // dd($brand);
        return view('admin.pages.user.brand_edit',compact('brand'));
    }

    public function creator_view(){
        $creators = User::where('role','creator')->get();
        // dd($users);
        return view('admin.pages.user.creator_table',compact('creators'));
    }

    public function creator_edit($id){
        $creator = User::where('role','creator')->find($id);
        // dd($users);
        return view('admin.pages.user.creator_edit',compact('creator'));
    }

    public function brand_status($id){
        $user = User::find($id);
        return view('admin.pages.user.change_status',compact('user'));
    }

    public function brand_details($id){
        $user = User::with('brand')->find($id);
        // dd($user);
        return view('admin.pages.user.brand_details',compact('user'));
    }

    public function creator_status($id){
        $user = User::find($id);
        return view('admin.pages.user.creator_status',compact('user'));
    }

    public function creator_details($id){
        $user = User::with('creator')->find($id);
        // dd($user);
        return view('admin.pages.user.creator_details',compact('user'));
    }

    public function brand_status_update(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "status" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = User::find($req->id);
            $status->status = $req->status;
            $status->save();

            return redirect()->route('admin.brand')->with(['success' => "Status Successfully Updated"]);
        }
    }

    public function brand_update(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "full_name" => "required",
            "brand_name" => "required",
            "email" => "required",
            "found_us" => "required"

        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = User::find($req->id);
            $status->full_name = $req->full_name;
            $status->brand_name = $req->brand_name;
            $status->email = $req->email;
            $status->found_us = $req->found_us;
            $status->save();

            return redirect()->route('admin.brand')->with(['success' => "Brand Successfully Updated"]);
        }
    }

    public function creator_status_update(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "status" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = User::find($req->id);
            $status->status = $req->status;
            $status->save();

            return redirect()->route('admin.creator')->with(['success' => "Status Successfully Updated"]);
        }
    }

    public function creator_update(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "full_name" => "required",
            "email" => "required",
            "phone_number" => "required"

        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = User::find($req->id);
            $status->full_name = $req->full_name;
            $status->email = $req->email;
            $status->phone_number = $req->phone_number;
            $status->save();

            return redirect()->route('admin.creator')->with(['success' => "Creator Successfully Updated"]);
        }
    }
}
