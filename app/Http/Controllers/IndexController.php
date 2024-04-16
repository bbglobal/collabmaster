<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Throwable;
use Validator;

class IndexController extends Controller
{
    public function index()
    {
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(4)
            ->get();

        $insta = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->where('creators.platform', 'Instagram')
            ->limit(4)
            ->get();

        $tiktok = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->where('creators.platform', 'TikTok')
            ->limit(4)
            ->get();

        $youtube = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->where('creators.platform', 'youtube')
            ->limit(4)
            ->get();

        $ugc = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->where('creators.platform', 'user generated content')
            ->limit(4)
            ->get();

        $data = compact("creators", "insta", "tiktok", 'youtube', 'ugc');
        return view('index')->with($data);
    }

    public function exploreInfluencers()
    {
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->get();
        $data = compact("creators");
        return view("influencers", $data);
    }

    public function explore($id)
    {
        if ($id === 'search') {
            $platform = request('platform');
            $category = request('category');

            $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
                ->join('packages', function ($join) {
                    $join->on('users.id', '=', 'packages.user_id')
                        ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
                })
                ->select('users.*', 'creators.*', 'packages.package_price_')
                ->where('platform', $platform)
                ->where(function ($query) use ($category) {
                    if ($category) {
                        $query->where('category', 'LIKE', '%' . $category . '%');
                    }
                })
                ->get();

            $data = compact('creators');
            return view('influencers', $data);
        } else {
            // Handle other cases here if needed
        }
    }

    public function influencerDetails($id)
    {

        $creator = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->where('creators.id', $id)
            ->select('users.*', 'creators.*')
            ->first();

        $packages = Package::where('user_id', $creator->user_id)->get();

        $data = compact("creator", "packages");
        return view("influencer-details", $data);
    }

    public function joinAsBrand()
    {

        return view('join-as-brand');
    }

    public function brandSingup()
    {
        return view("brand-signup");
    }

    public function verifyEmail()
    {

        return view("verify-email");
    }
    public function verifyYourEmail()
    {

        return view("verify-your-email");
    }

    public function login()
    {
        return view("login");
    }

    public function marketplace()
    {
        return view("influencer-marketplace");
    }
    public function blogs()
    {
        return view("blogs");
    }
    public function hub()
    {
        return view("creator-hub");
    }
    public function program()
    {
        return view("affiliate-program");
    }
    public function ebook()
    {
        return view("tiktok-e-book");
    }
    public function report()
    {
        return view("influencer-marketing-report");
    }
    public function rateCalculator()
    {
        return view("influencer-rate-calculator");
    }
    public function instaRateCalculator()
    {
        return view("instagram-engagement-rate-calculator");
    }
    public function tiktokRateCalculator()
    {
        return view("tiktok-engagement-rate-calculator");
    }
    public function campainTemplate()
    {
        return view("influencer-campaign-brief-template");
    }
    public function contractTemplate()
    {
        return view("influencer-contract-template");
    }
    public function findInfluencer()
    {
        return view("find-influencer");
    }
    public function topInfluencer()
    {
        return view("top-influencer");
    }
    public function hireInfluencer()
    {
        return view("hire-influencer");
    }
    public function searchInfluencers()
    {
        return view("search-influencer");
    }
    public function buyContent()
    {
        return view("buy-content");
    }
    public function buyShoutouts()
    {
        return view("buy-shoutouts");
    }
    public function contactUs()
    {
        return view("contact-us");
    }
    public function howItWork()
    {
        return view("how-it-work");
    }
    public function faqs()
    {
        return view("faqs");
    }

    public function pricing()
    {
        return view("pricing");
    }

    public function referrals()
    {
        return view("referrals");
    }

    public function insights()
    {
        return view("insights");
    }

    public function orders()
    {
        $user = auth()->user();
        if ($user->role === 'brand') {
            $orders = Order::where('brand_id', $user->id)->get();
        } elseif ($user->role === 'creator') {
            $orders = Order::where('creator_id', $user->id)->get();
        } else {
            $orders = Order::all();
        }
        // dd($orders);
        return view("orders", compact('orders'));
    }

    public function lists()
    {
        return view("lists");
    }

    public function checkout($id)
    {
        $package = Package::join('creators', 'packages.user_id', '=', 'creators.user_id')
            ->where('packages.id', $id)
            ->select('packages.*', 'creators.*')
            ->first();

        $data = compact('package');
        return view("checkout")->with($data);
    }

    public function campaigns()
    {
        return view("campaigns");
    }

    public function earnings()
    {
        return view("earnings");
    }

    public function account()
    {
        return view("account");
    }

    public function profile()
    {
        $user = User::findOrFail(Auth::id());
        $campaign = campaign::where('user_id', Auth::id())->get();

        $data = compact('campaign', 'user');
        return view('profile')->with($data);
    }

    public function getStarted()
    {
        return view("get-started");
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

    public function joinAsCreator()
    {
        return view("join-as-creator");
    }

    public function cratorSingup($username)
    {
        session()->put('username', $username);
        return view("creator-signup");
    }

    public function completeProfile($id)
    {
        switch ($id) {
            case '1':
                return view('brand.s-1');
                break;
            case '2':
                return view('brand.s-2');
                break;
            case '3':
                return view('brand.s-3');
                break;
            case '4':
                return view('brand.s-4');
                break;
            case '5':
                return view('brand.s-5');
                break;
            case '6':
                return view('brand.s-6');
                break;
            case '7':
                return view('brand.s-7');
                break;
            default:
                abort(404);
        }
    }

    public function createPage($id)
    {
        switch ($id) {
            case '1':
                return view('creator.c-1');
                break;
            case '2':
                return view('creator.c-2');
                break;
            case '3':
                return view('creator.c-3');
                break;
            case '4':
                return view('creator.c-4');
                break;
            case '5':
                return view('creator.c-5');
                break;
            case '6':
                return view('creator.c-6');
                break;
            case '7':
                return view('creator.c-7');
                break;
            case '8':
                return view('creator.c-8');
                break;
            case '9':
                return view('creator.c-9');
                break;
            default:
                abort(404);
        }
    }

    public function phoneNumber()
    {
        return view('creator.phone');
    }

    public function otp()
    {
        return view('creator.otp');
    }

    public function payment()
    {
        return view('creator.last');
    }

    public function createCampaign($id)
    {
        switch ($id) {
            case '1':
                return view('campaign.c-1');
                break;
            case '2':
                return view('campaign.c-2');
                break;
            case '3':
                return view('campaign.c-3');
                break;
            case '4':
                return view('campaign.c-4');
                break;
            case '5':
                return view('campaign.c-5');
                break;
            case '6':
                return view('campaign.c-6');
                break;
            case '7':
                return view('campaign.c-7');
                break;
            case '8':
                return view('campaign.c-8');
                break;
            case '9':
                return view('campaign.c-9');
                break;
            case '10':
                return view('campaign.c-10');
                break;
            default:
                abort(404);
        }
    }

    public function order_process(Request $request)
    {
        try {
            $order = new Order;
            $order->brand_id = $request->user_id;
            $order->package_id = $request->package_id;
            $order->creator_id = $request->creator_id;
            $order->full_name = $request->full_name;
            $order->address = $request->address;
            $order->description = $request->description;
            $order->package_content_type = $request->package_content_type;
            $order->price = $request->price;
            $order->payment_method = $request->status;
            $order->razorpay_payment_id = $request->razorpay_payment_id;
            $order->razorpay_order_id = $request->razorpay_order_id;
            $order->razorpay_signature = $request->razorpay_signature;
            $order->payment_status = 'Pending';
            $order->save();
            $payment_id = $request->razorpay_payment_id;
            Http::withBasicAuth(env('RAZORPAYKEY'), env('RAZORPAYSECRET'))
                ->post('https://api.razorpay.com/v1/payments/' . $payment_id . '/capture', [
                    'amount' => ((int) $request->price + (((int) $request->price * 10) / 100)) * 100,
                    'currency' => $request->currency,
                ]);
            return response()->json([
                'status' => true,
                'message' => "Order Successfully Created",
            ]);
        } catch (Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function order_conformation_process(Request $req)
    {
        $controlls = $req->all();
        $rules = array(
            "payment_status" => "required",
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = Order::find($req->id);
            $status->payment_status = $req->payment_status;
            $status->save();

            return redirect()->back()->withSuccess("Conformation Status Successfully Changed");
        }
    }

    public function create_payment_order(Request $request)
    {
        try {
            $response = Http::withBasicAuth(env('RAZORPAYKEY'), env('RAZORPAYSECRET'))
                ->post('https://api.razorpay.com/v1/orders', [
                    'amount' => $request->amount,
                    'currency' => $request->currency,
                ]);
            return response()->json([
                'status' => true,
                'data' => json_decode($response->body()),
            ]);
        } catch (Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }
}
