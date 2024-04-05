<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubAdmin;
use Validator;

class SubAdminController extends Controller
{
    //
    public function subadmin_view()
    {
        $subadmins = SubAdmin::all();
        return view('admin.pages.subadmin.table',compact('subadmins'));
    }

    public function subadmin_add()
    {
        return view('admin.pages.subadmin.add');
    }

    public function edit_subadmin($id)
    {
        $subadmin = SubAdmin::find($id);
        return view('admin.pages.subadmin.edit', compact('subadmin'));
    }

    public function delete_subadmin($id)
    {
        $subadmin = SubAdmin::find($id);
        $subadmin->delete();
        return redirect()->back()->with(['success' => "SubAdmin Successfully Deleted"]);
    }

    public function store_subadmin(Request $req)
    {
        $controlls = $req->all();
        // dd($controlls);
        $rules = array(
            "name" => "required",
            "email" => "required|email",
            "password" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $subadmin = new SubAdmin;
            $subadmin->name = $req->name;
            $subadmin->email = $req->email;
            $subadmin->password = bcrypt($req->password);
            $subadmin->save();

            return redirect()->route('admin.subadmin')->with(['success' => "SubAdmin Successfully Created"]);
        }
    }

    public function update_subadmin(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "name" => "required",
            "email" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $subadmin = SubAdmin::find($req->id);
            $subadmin->name = $req->name;
            $subadmin->email = $req->email;
            $subadmin->save();

            return redirect()->route('admin.subadmin')->with(['success' => "SubAdmin Successfully Updated"]);
        }
    }
}
