<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Validator;

class AboutController extends Controller
{
    //
    public function about_view()
    {
        $about = About::first();
        return view('admin.pages.about.about', compact('about'));
    }

    public function aboutus_process(Request $req)
    {

        $controlls = $req->all();
        $rules = array(
            "content" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            if (isset($req->id)) {
                $aboutus = About::find($req->id);
            } else {
                $aboutus = new About;
            }
            $aboutus->content = $req->content;
            $aboutus->save();
            if (isset($req->id)) {
                return redirect()->back()->withSuccess('About Information Updated Successfully');
            }
            return redirect()->back()->withSuccess('About Information Added Successfully');
        }
    }
}
