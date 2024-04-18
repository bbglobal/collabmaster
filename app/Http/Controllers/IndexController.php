<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewUserNotification;
use App\Mail\TestEamil;
use App\Models\Brand;
use App\Models\campaign;
use App\Models\Creator;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Package;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Throwable;
use Validator;

use function PHPUnit\Framework\isNull;

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

    public function explore(Request $request)
    {
        $platform = $request->input('p');
        $category = $request->input('c');
        $contentType = $request->input('t');
        $country = $request->input('ct');
        $city = $request->input('ct');
        $price = $request->input('l');
        $gender = $request->input('g');
        $minPrice = $request->input('pmi');
        $maxPrice = $request->input('pmx');
        $minFollowers = $request->input('fmi');
        $maxFollowers = $request->input('fmx');

        // $query = Creator::join('packages', 'creators.user_id', '=', 'packages.user_id')
        //                 ->select('creators.*', 'packages.*');

        $query = Creator::query();
        $packageQuery = Package::query();

        // dd($packageQuery);

        if ($platform) {
            $query->where('platform', $platform);
        }
        if ($category) {
            $query->where('categories', 'like', "%$category%");
        }
        if ($contentType) {
            $packageQuery->where('package_content_type_', 'like', "%$contentType%");
        }
        if ($minFollowers && $maxFollowers) {
            $query->where('instagram_followers', [$minFollowers, $maxFollowers]);
        }
        if ($country) {
            $query->where('location', 'like', "%$country%");
        }
        if ($minPrice && $maxPrice) {
            $packageQuery->whereBetween('package_price_', [$minPrice, $maxPrice]);
        }
        if ($gender) {
            $query->where('genderOption', $gender);
        }

        $creators = $query->get()->union($packageQuery->get());

        // dd($creators);

        return view('influencers', compact('creators'));
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
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(4)
            ->get();

        $explore = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(20)
            ->get();

        $data = compact('creators', 'explore');

        return view("influencer-marketplace")->with($data);
    }
    public function blogs()
    {
        return view("blogs");
    }
    public function hub()
    {
        return view("creator-hub");
    }
    public function caseStudy()
    {
        return view("case-study");
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
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(4)
            ->get();

        $explore = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(20)
            ->get();

        $data = compact('creators', 'explore');

        return view("find-influencer")->with($data);
    }
    public function topInfluencer()
    {
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(4)
            ->get();

        $explore = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(20)
            ->get();

        $data = compact('creators', 'explore');

        return view("top-influencer")->with($data);
    }
    public function hireInfluencer()
    {
        return view("hire-influencer");
    }
    public function searchInfluencers()
    {
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(4)
            ->get();

        $explore = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(20)
            ->get();

        $data = compact('creators', 'explore');

        return view("search-influencer")->with($data);
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

    public function chat($id)
    {

        return view("chat");
    }

    public function lists()
    {
        return view("lists");
    }

    public function checkout($id)
    {
        if (is_null(Auth::user())) return redirect()->route('user.login');

        $package = Package::join('creators', 'packages.user_id', '=', 'creators.user_id')
            ->join('users', 'users.id', '=', 'creators.user_id')
            ->where('packages.id', $id)
            ->select('packages.*', 'creators.*', 'users.name')
            ->first();

        $data = compact('package');
        return view("checkout")->with($data);

        // $package = Package::join('creators', 'packages.user_id', '=', 'creators.user_id')
        //     ->where('packages.id', $id)
        //     ->select('packages.*', 'creators.*')
        //     ->first();

        // $data = compact('package');
        // return view("checkout")->with($data);
    }

    public function createOffer($id)
    {
        if (is_null(Auth::user())) return redirect()->route('user.login');

        $user = Package::join('users', 'packages.user_id', '=', 'users.id')
            ->where('packages.user_id', $id)
            ->select('packages.package_price_', 'users.*')
            ->first();

        $averagePrice = Package::where('user_id', $id)
            ->avg('package_price_');

        $data = compact('user', 'averagePrice');
        return view("create-offer")->with($data);
    }

    public function campaigns()
    {
        $campaigns = campaign::all();
        $data = compact('campaigns');
        return view("campaigns")->with($data);
    }

    public function campainDetails($id)
    {
        if (!Auth::user()) {
            return redirect('login');
        }

        $campaign = campaign::find($id);
        $proposal = Proposal::join('users', 'proposals.creator_id', '=', 'users.id')
            ->where('campaign_id', $id)
            ->select('proposals.*', 'users.*')
            ->get();

        $data = compact('campaign', 'proposal');
        return view('campain-details')->with($data);
    }

    public function earnings()
    {
        return view("earnings");
    }

    public function account()
    {
        return view("account");
    }

    public function profile($id)
    {

        if (Auth::user()->role == "brand") {

            $user = User::findOrFail(Auth::id());
            $campaigns = campaign::where('user_id', Auth::id())->get();
            $data = compact('campaigns', 'user');

            return view('brand-profile')->with($data);
        }

        $creator = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->where('creators.id', $id)
            ->select('users.*', 'creators.*')
            ->first();

        $packages = Package::where('user_id', $creator->user_id)->get();

        $data = compact("creator", "packages");

        return view('profile')->with($data);
    }

    public function editProfile($id)
    {
        if (Auth::user()->role == "brand") {

            $brand = Brand::where('user_id', $id)->first();

            $data = compact("brand");
            return view('edit-brand')->with($data);
        } else {
            $creator = User::join('creators', 'users.id', '=', 'creators.user_id')
                ->where('creators.id', $id)
                ->select('users.*', 'creators.*')
                ->first();

            $packages = Package::where('user_id', $creator->user_id)->get();

            $data = compact("creator", "packages");

            // $data = compact('campaign', 'user');
            return view('edit-profile')->with($data);
        }
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
        $creators = User::join('creators', 'users.id', '=', 'creators.user_id')
            ->join('packages', function ($join) {
                $join->on('users.id', '=', 'packages.user_id')
                    ->whereRaw('packages.id = (SELECT id FROM packages WHERE user_id = users.id LIMIT 1)');
            })
            ->select('users.*', 'creators.*', 'packages.package_price_')
            ->limit(4)
            ->get();

        $data = compact('creators');
        return view("join-as-creator")->with($data);
    }

    public function cratorSingup($username)
    {
        session()->put('name', $username);
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



    public function showCampain($id)
    {
        $campaign = Campaign::find($id);

        $data = compact('campaign');
        return view('view-campaign')->with($data);
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
            "conformation_status" => "required"
        );

        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        } else {
            $status = Order::find($req->id);
            $status->conformation_status = $req->conformation_status;
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

    public function testEvent()
    {
        $user = User::find(1);
        $adminEmail = 'team.collabmaster@gmail.com';
        Mail::to($adminEmail)->send(new NewUserNotification($user));
        return redirect()->back()->with('success', 'Test Email sent Successfully');
    }
}
