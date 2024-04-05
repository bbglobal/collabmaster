<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assign;
use App\Models\SubAdmin;
use Validator;

class AssignController extends Controller
{
    //
    public function assign_view()
    {
        $assigns = Assign::with('subadmin')->get();
        // dd($assigns);
        return view('admin.pages.assign.table',compact('assigns'));
    }

    public function assign_add()
    {
        $subadmins = SubAdmin::all();
        return view('admin.pages.assign.add',compact('subadmins'));
    }

    public function edit_assign($id)
    {
        $assign = Assign::find($id);
        $subadmins = SubAdmin::all();
        return view('admin.pages.assign.edit', compact('assign','subadmins'));
    }

    public function delete_assign($id)
    {
        $assign = Assign::find($id);
        $assign->delete();
        return redirect()->back()->with(['success' => "Assign Successfully Deleted"]);
    }

    public function store_assign(Request $req)
    {
        $controlls = $req->all();
        // dd($controlls);
        $rules = array(
            "subadmin_id" => "required",
            "assign" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $assign = new Assign;
            $assign->subadmin_id = $req->subadmin_id;
            $assign->assign = $req->assign;
            $assign->save();

            return redirect()->route('admin.assign')->with(['success' => "Assign Successfully Created"]);
        }
    }

    public function update_assign(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "subadmin_id" => "required",
            "assign" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $assign = Assign::find($req->id);
            $assign->subadmin_id = $req->subadmin_id;
            $assign->assign = $req->assign;
            $assign->save();

            return redirect()->route('admin.assign')->with(['success' => "Assign Successfully Updated"]);
        }
    }
}
