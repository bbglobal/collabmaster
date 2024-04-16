<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;
use App\Models\Brand;
use App\Models\Campaign;
use App\Models\Creator;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class RegisterController extends Controller
{

    public function brandRegister(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'brand_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'found_us' => 'required',
        ]);

        $user = User::create([
            'full_name' => $request['full_name'],
            'brand_name' => $request['brand_name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'found_us' => $request['found_us'],
            'role' => 'brand',
            'verificaton_token' => str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT),
        ]);

        Auth::login($user);

        Mail::to($user->email)->send(new VerificationEmail($user));

        return redirect("/verify-email")->with("success", "Your Account Registered Successfully");
    }

    public function creatorSingup(Request $request, $username)
    {
        $request->validate([
            'username' => 'required|unique:users'
        ]);

        session()->put('creator_username', $username);

        return view("creator-signup");
    }

    public function creatorRegister(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([

            'username' => session()->get('creator_username'),
            'full_name' => $request['full_name'],
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'role' => 'creator',
            'verificaton_token' => str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT),
        ]);

        session()->forget('creator_username');

        Auth::login($user);

        Mail::to($user->email)->send(new VerificationEmail($user));

        return redirect("/verify-your-email")->with("success", "Your Account Registered Successfully");
    }

    public function verify($token)
    {
        $user = User::where('verificaton_token', $token)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid verification token.');
        }

        if ($user->email_verified_at) {
            return redirect('/brand-signup')->with('success', 'Email already verified.');
        }

        $user->markEmailAsVerified();
        event(new Verified($user));

        return redirect('/complete-profile/1')->with('success', 'Email verified successfully. You can now login.');
    }

    public function token($token)
    {
        $user = User::where('verificaton_token', $token)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid verification token.');
        }

        if ($user->email_verified_at) {
            return redirect('/creator-signup')->with('success', 'Email already verified.');
        }

        $user->markEmailAsVerified();
        event(new Verified($user));

        return redirect('/create-page/1')->with('success', 'Email verified successfully. You can now login.');
    }

    public function registerBrand(Request $request, $id)
    {
        switch ($id) {
            case '1':
                return view('brand.c-1');
                break;
            case '2':
                $request->session()->put('s_1', $request->all());
                return view('brand.s-2');
                break;
            case '3':
                $data = $request->validate([
                    'categories' => 'required|array',
                    'categories.*' => 'string',
                ]);
                $request->session()->put('s_2', $data);
                return view('brand.s-3');
                break;
            case '4':
                $request->session()->put('s_3', $request->all());
                return view('brand.s-4');
                break;
            case '5':
                $data = $request->validate([
                    'platforms' => 'required|array',
                    'platforms.*' => 'string',
                ]);
                $request->session()->put('s_4', $data);
                return view('brand.s-5');
                break;
            case '6':
                $request->session()->put('s_5', $request->all());
                return view('brand.s-6');
                break;
            case '7':
                $request->session()->put('s_6', $request->all());
                return view('brand.s-7');
                break;
            default:
                abort(404);
        }
    }

    public function submitBrand(Request $request)
    {
        $request->session()->put('s_7', $request->all());

        $user = Auth::user();

        $formData = array_merge(
            $request->session()->get('s_1', []),
            $request->session()->get('s_2', []),
            $request->session()->get('s_3', []),
            $request->session()->get('s_4', []),
            $request->session()->get('s_5', []),
            $request->session()->get('s_6', []),
            $request->session()->get('s_7', []),
        );

        $formData['categories'] = implode(',', $formData['categories'] ?? []);
        $formData['platforms'] = implode(',', $formData['platforms'] ?? []);

        unset($formData['_token']);

        $formData['user_id'] = $user->id;

        // dd($formData);
        Brand::create($formData);

        $request->session()->forget(['c_1', 'c_2', 'c_3', 'c_4', 'c_5', 'c_6', 'c_7']);
        Auth::logout();
        return redirect('login');
    }

    public function createPage(Request $request, $id)
    {
        switch ($id) {
            case '1':
                return view('creator.c-1');
                break;
            case '2':
                $request->session()->put('c_1', $request->all());
                return view('creator.c-2');
                break;
            case '3':
                $request->session()->put('c_2', $request->all());
                return view('creator.c-3');
                break;
            case '4':
                $request->session()->put('c_3', $request->all());
                return view('creator.c-4');
                break;
            case '5':
                $request->session()->put('c_4', $request->all());
                return view('creator.c-5');
                break;
            case '6':
                $request->session()->put('c_5', $request->all());
                return view('creator.c-6');
                break;
            case '7':
                $data = $request->validate([
                    'categories' => 'required|array',
                    'categories.*' => 'string',
                ]);
                $request->session()->put('c_6', $data);
                return view('creator.c-7');
                break;
            case '8':
                $img = $request->file('img')->getClientOriginalName();
                $request->file('img')->move('assets/images', $img);
                $request->session()->put('file_path', $img);

                $imgOne = $request->file('img1')->getClientOriginalName();
                $request->file('img1')->move('assets/images', $imgOne);
                $request->session()->put('img_1', $imgOne);

                if ($request->hasFile('img2')) {
                    $imgTwo = $request->file('img2')->getClientOriginalName();
                    $request->file('img2')->move('assets/images', $imgTwo);
                    $request->session()->put('img_2', $imgTwo);
                }

                if ($request->hasFile('img3')) {
                    $imgThree = $request->file('img3')->getClientOriginalName();
                    $request->file('img3')->move('assets/images', $imgThree);
                    $request->session()->put('img_3', $imgThree);
                }

                if ($request->hasFile('img4')) {
                    $imgFour = $request->file('img4')->getClientOriginalName();
                    $request->file('img4')->move('assets/images', $imgFour);
                    $request->session()->put('img_4', $imgFour);
                }
                // dd($request->all());
                return view('creator.c-8');
                break;
            case '9':
                // $data = $request->validate([
                //     'package_content_type_' => 'array',
                //     'package_content_type_.*' => 'string',

                //     'package_quantity_' => 'array',
                //     'package_quantity_.*' => 'string',

                //     'package_duration_' => 'array',
                //     'package_duration_.*' => 'string',

                //     'package_duration_unit_' => 'array',
                //     'package_duration_unit_.*' => 'string',

                //     'package_price_' => 'array',
                //     'package_price_.*' => 'string',

                //     'package_description_' => 'array',
                //     'package_description_.*' => 'string',
                // ]);
                $request->session()->put('c_7', $request->all());
                // dd($request->all());
                return view('creator.c-9');
                break;
            case '10':
                $request->session()->put('c_8', $request->all());
                // dd($request->all());
                return view('creator.phone');
                break;
            case '11':
                // 		dd($request);
                $request->validate([
                    'phone_number' => 'numeric|digits:10',
                ]);
                $token = 999999;
                // dd($request);
                $token = random_int(100000, 999999);

                $fields = array(
                    "variables_values" => $token,
                    "route" => "otp",
                    "numbers" => $request->phone_number,
                );

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode($fields),
                    CURLOPT_HTTPHEADER => array(
                        "authorization: WyLhPS58rgldY2wuZm73ACnGqVNbxpkFUOQ1E6otj0zIfec4HD1u5fqXzTZBGHRO2LdUVnh4M8arpWcx",
                        "accept: */*",
                        "cache-control: no-cache",
                        "content-type: application/json"
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    session()->flash('message', 'Your Phone Number Is Not Valid!');
                    session()->flash('messageType', 'danger');
                    return redirect()->back();
                } else {
                    //   dd($response);
                    $user_id = Auth::user()->id;
                    $user = User::find($user_id);
                    $user->phone_number = $request->phone_number;
                    $user->remember_token = $token;
                    $user->save();
                    session()->flash('message', 'Your account is registered please wait verification code');
                    session()->flash('messageType', 'success');
                    return redirect()->route('verification.form', ['id' => $user_id]);
                }
                break;
            case '12':
                $user_id = Auth::user()->id;
                $user = User::where('id', $user_id)->first();
                // dd($user);
                if ($user) {
                    if ($user->remember_token == $request->token) {
                        $user->remember_token = null;
                        $user->is_verified = 1;
                        $user->save();
                        session()->flash('message', 'Your Account is verified Successfully');
                        return redirect()->route('card.verification');
                    } else {
                        session()->flash('message', 'Your Token is not match');
                        return redirect()->back();
                    }
                } else {
                    session()->flash('message', 'Something is wrong this is system error');
                    return redirect()->back();
                }
                break;
            default:
                abort(404);
        }
    }

    public function submitCreator(Request $request)
    {
        // dd($request->all());

        $user = Auth::user();

        $formData['file_path'] = $request->session()->get('file_path', '');
        $formDataOne['img_1'] = $request->session()->get('img_1', '');
        $formDataTwo['img_2'] = $request->session()->get('img_2', '');
        $formDataThree['img_3'] = $request->session()->get('img_3', '');
        $formDataFour['img_4'] = $request->session()->get('img_4', '');
        $packageData = $request->session()->get('c_7', '');

        $formData = array_merge(
            $request->session()->get('c_1', []),
            $request->session()->get('c_2', []),
            $request->session()->get('c_3', []),
            $request->session()->get('c_4', []),
            $request->session()->get('c_5', []),
            $request->session()->get('c_6', []),
            $request->session()->get('c_8', []),
            $formData,
            $formDataOne,
            $formDataTwo,
            $formDataThree,
            $formDataFour,
        );

        $formData['categories'] = implode(',', $formData['categories'] ?? []);
        unset($formData['_token']);

        $formData['user_id'] = $user->id;

        // dd($formData);
        Creator::create($formData);

        // dd($packageData);
        foreach ($packageData['package_content_type_'] as $index => $contentType) {
            $package = new Package();
            $package->package_content_type_ = $contentType;
            $package->package_quantity_ = $packageData['package_quantity_'][$index];
            $package->package_duration_ = $packageData['package_duration_'][$index];
            $package->package_duration_unit_ = $packageData['package_duration_unit_'][$index];
            $package->package_price_ = $packageData['package_price_'][$index];
            $package->package_description_ = $packageData['package_description_'][$index];
            $package->user_id = $user->id;
            $package->save();
        }

        $request->session()->forget(['c_1', 'c_2', 'c_3', 'c_4', 'c_5', 'c_6', 'c_8', 'file_path', 'img_1', 'img_2', 'img_3', 'img_4']);

        $creators = Creator::all();
        $data = compact("creators");
        Auth::logout();
        return redirect('login')->with($data);
    }

    public function createCampaign(Request $request, $id)
    {
        switch ($id) {
            case '1':
                return view('campaign.c-1');
                break;
            case '2':
                $request->session()->put('c_1', $request->all());
                return view('campaign.c-2');
                break;
            case '3':
                $request->session()->put('c_2', $request->all());
                return view('campaign.c-3');
                break;
            case '4':
                $request->session()->put('c_3', $request->all());
                return view('campaign.c-4');
                break;
            case '5':
                $request->session()->put('c_4', $request->all());
                return view('campaign.c-5');
                break;
            case '6':
                $request->session()->put('c_5', $request->all());
                return view('campaign.c-6');
                break;
            case '7':
                $request->session()->put('c_6', $request->all());
                return view('campaign.c-7');
                break;
            case '8':
                $request->session()->put('c_7', $request->all());
                return view('campaign.c-8');
                break;
            case '9':
                $img = $request->file('img_files')->getClientOriginalName();
                $request->file('img_files')->move('assets/images', $img);
                $request->session()->put('file_path', 'assets/images/' . $img);
                return view('campaign.c-9');
                break;
            case '10':
                $request->session()->put('c_9', $request->all());
                return view('campaign.c-10');
                break;
            default:
                abort(404);
        }
    }

    public function submitCampaign(Request $request, $id)
    {
        // dd($request->all());
        $img = $request->file('files')->getClientOriginalName();
        $request->file('files')->move('assets/images', $img);
        $request->session()->put('files', 'assets/images/' . $img);

        $user = Auth::user();

        $formData = array_merge(
            $request->session()->get('c_1', []),
            $request->session()->get('c_2', []),
            $request->session()->get('c_3', []),
            $request->session()->get('c_4', []),
            $request->session()->get('c_5', []),
            $request->session()->get('c_6', []),
            $request->session()->get('c_7', []),
            $request->session()->get('c_8', []),
            $request->session()->get('c_9', []),
            $request->session()->get('c_10', []),
        );

        unset($formData['_token']);

        $formData['user_id'] = $user->id;

        // dd($formData);
        Campaign::create($formData);

        $request->session()->forget(['c_1', 'c_2', 'c_3', 'c_4', 'c_5', 'c_6', 'c_7', 'c_8', 'c_9', 'c_10']);

        $campaign = Campaign::all();
        $data = compact('campaign');
        return view('profile')->with($data);
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $credentials = $request->only('email', 'password','Active');
        $credientials = ['email' => $request->email, 'password' => $request->password, 'status' => 'Active'];

        if (!Auth::attempt($credientials)) {
            // return redirect()->route('admin.login')->withErrors(['error' => "Invalid Credientials"]);
            return redirect()->route('login')->with(['success' => 'Wait For Admin Approval']);
        } else {
            $user = Auth::user();

            if ($user->role === "brand") return redirect('influencers');

            elseif ($user->role === "creator") return redirect('influencers');

            else return redirect('admin');
        }

        return redirect()->route('login')->with(['success', 'Wait For Admin Approval']);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallBack()
    {
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);

        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();

        if (!$user) {
            $user = new User();
            $user->username = $data->name;
            $user->full_name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->phone_number = $data->contact;
            $user->password = $data->token;
            $user->role = "creator";
            $user->verificaton_token = $data->token;
            $user->save();
        }

        Auth::login($user);
    }
}
