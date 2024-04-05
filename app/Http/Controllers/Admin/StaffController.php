<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubAdmin;
use App\Models\Staff;
use Validator;

class StaffController extends Controller
{
    //
    public function add_staff(){
        $subadmins = SubAdmin::all();
        return view('admin.pages.staff.add',compact('subadmins'));
    }

    public function store_permission(Request $req)
    {
        $controlls = $req->all();
        // dd($controlls);
        $rules = array(
            "subadmin_id" => "required",
            "permission" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $staff = new Staff;
            $staff->subadmin_id = $req->subadmin_id;
            $staff->permission = json_encode($req->permission);
            $staff->save();

            return redirect()->back()->withSuccess("Permission Successfully Assign");
        }
    }
}
