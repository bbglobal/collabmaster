<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewUserNotification;
use App\Mail\VerificationEmail;
use App\Models\Brand;
use App\Models\Campaign;
use App\Models\Creator;
use App\Models\Offer;
use App\Models\Package;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
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

        $adminEmail = 'team.collabmaster@gmail.com';
        Mail::to($adminEmail)->send(new NewUserNotification($user));

        return redirect("/verify-email")->with("success", "Your Account Registered Successfully");
    }

    public function creatorSingup(Request $request, $name)
    {
        $request->validate([
            'name' => 'required|unique:users'
        ]);

        session()->put('name', $name);

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

            'name' => session()->get('name'),
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

        $adminEmail = 'team.collabmaster@gmail.com';
        Mail::to($adminEmail)->send(new NewUserNotification($user));

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

                $request->validate([
                    'img' => 'required',
                    'img1' => 'required',
                    'img2' => 'required',
                    'img3' => 'required',
                    'img4' => 'required',
                ]);

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


                // dd($request->all());

                $request->validate([
                    'img_files' => 'required',
                    'img1' => 'required',
                    'img2' => 'required',
                    'img3' => 'required',
                    'img4' => 'required',
                ]);

                $img = $request->file('img_files')->getClientOriginalName();
                $request->file('img_files')->move('assets/images', $img);
                $request->session()->put('file_path', 'assets/images/' . $img);

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

        $formData['file_path'] = $request->session()->get('file_path', '');
        $formDataOne['img_1'] = $request->session()->get('img_1', '');
        $formDataTwo['img_2'] = $request->session()->get('img_2', '');
        $formDataThree['img_3'] = $request->session()->get('img_3', '');
        $formDataFour['img_4'] = $request->session()->get('img_4', '');

        $user = Auth::user();

        $formData = array_merge(
            $request->session()->get('c_1', []),
            $request->session()->get('c_2', []),
            $request->session()->get('c_3', []),
            $request->session()->get('c_4', []),
            $request->session()->get('c_5', []),
            $request->session()->get('c_6', []),
            $request->session()->get('c_7', []),
            $formData,
            $formDataOne,
            $formDataTwo,
            $formDataThree,
            $formDataFour,
            $request->session()->get('c_9', []),
            $request->session()->get('c_10', []),
        );

        unset($formData['_token']);

        $formData['user_id'] = $user->id;

        // dd($formData);
        Campaign::create($formData);

        $request->session()->forget(['c_1', 'c_2', 'c_3', 'c_4', 'c_5', 'c_6', 'c_7', 'file_path', 'img_1', 'img_2', 'img_3', 'img_4', 'c_9', 'c_10']);

        $campaign = Campaign::all();
        $data = compact('campaign');
        return redirect('profile/' . Auth::user()->id)->with($data);
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email, 'password' => $password];
        if (!Auth::attempt($credentials)) {
            return redirect()->route('login')->with(['error' => 'Invalid credentials. Please try again.']);
        }
        $user = Auth::user();
        if ($user->status !== 'Active') {
            Auth::logout();
            return redirect()->route('login')->with(['decline' => 'Wait For Admin Approval']);
        } else {
            $user = Auth::user();

            if ($user->role === "brand") return redirect('influencers');

            elseif ($user->role === "creator") return redirect('influencers');

            else return redirect('admin');
        }

        return redirect()->route('login')->with(['success', 'Wait For Admin Approval']);
    }

    function createOffer(Request $request, $id)
    {
        $request->validate([
            'creator_id' => 'required',
            'brand_id' => 'required',

            'package_category' => 'required',
            'package_title' => 'required|max:60',
            'package_description' => 'required|min:60',
            'package_price' => 'required',
        ]);

        $offer = new Offer();
        $offer->creator_id = $request->input('creator_id');
        $offer->package_category = $request->input('package_category');
        $offer->package_title = $request->input('package_title');
        $offer->package_description = $request->input('package_description');
        $offer->package_price = $request->input('package_price');
        $offer->website = $request->input('website');
        $offer->instagram_username = $request->input('instagram_username');
        $offer->tiktok_username = $request->input('tiktok_username');
        $offer->youtube_username = $request->input('youtube_username');
        $offer->twitter_username = $request->input('twitter_username');
        $offer->brand_id = $request->input('brand_id');
        $offer->save();

        return redirect()->back()->with('success', 'Offer submitted');
    }

    function editProfile(Request $request, $id)
    {
        $request->validate([
            'location' => 'required',
            'description' => 'required',
        ]);

        dd($request->all());
        die;

        $edit = Brand::where('user_id', $id)->first();
        $edit->location = $request->input('location');
        $edit->description = $request->input('description');
        $edit->update();

        return redirect()->back()->with('success', 'profile updated');
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
            $user->name = $data->name;
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

    public function requestPassword()
    {
        return view('forgot-password');
    }

    public function emailPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->with('email', __($status));
    }

    public function resetPassword(string $token)
    {
        return view('reset-password', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('user.login')->with('status', __($status))
            : back()->with('email', __($status));
    }

    public function submitProposal(Request $request, $id)
    {
        // dd($request->all());
        $proposals = new Proposal();
        $proposals->proposal = $request->input('proposal');
        $proposals->price = $request->input('price');
        $proposals->duration = $request->input('duration');
        $proposals->campaign_id = $id;
        $proposals->brand_id = $request->input('brand_id');
        $proposals->creator_id = $request->input('creator_id');
        $proposals->save();

        return redirect('campaigns')->with('success', 'Your Porposal submited successfully');
    }
}
