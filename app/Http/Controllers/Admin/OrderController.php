<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use PDF;
use Validator;

class OrderController extends Controller
{
    //
    public function order_view(){
        $orders = Order::all();
        return view('admin.pages.order.table',compact('orders'));
    }

    public function email_activity_view(){
        $activities = User::select('id','email')->get();
        return view('admin.pages.activity.email_activity',compact('activities'));
    }

    public function email_log_view(){
        $brands = User::all();
        return view('admin.pages.activity.email_log',compact('brands'));
    }

    public function order_edit($id){
        $order = Order::find($id);
        // dd($order);
        return view('admin.pages.order.order_edit',compact('order'));
    }

    public function invoice_view(){
        $orders = Order::all();
        return view('admin.pages.invoice.table',compact('orders'));
    }

    public function order_view_invoice($id)
    {
        $order = Order::find($id);
        return view('admin.pages.order.invoice',compact('order'));
    }

    public function order_update(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "full_name" => "required",
            "address" => "required",
            "description" => "required",
            "package_content_type" => "required",
            "price" => "required",
            "payment_status" => "required"


        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = Order::find($req->id);
            $status->full_name = $req->full_name;
            $status->address = $req->address;
            $status->description = $req->description;
            $status->package_content_type = $req->package_content_type;
            $status->price = $req->price;
            $status->payment_status = $req->payment_status;

            $status->save();

            return redirect()->route('admin.order')->with(['success' => "Order Successfully Updated"]);
        }
    }
}
