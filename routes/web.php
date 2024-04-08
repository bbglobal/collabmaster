<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



//Admin Routes
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::group(['middleware' => 'AdminGuest'], function () {

        //login Routes
        Route::get('login', ['as' => 'admin.login', 'uses' => '\App\Http\Controllers\Admin\LoginController@login']);
        Route::post('login/process', ['as' => 'admin.login.process', 'uses' => '\App\Http\Controllers\Admin\LoginController@attempt']);
    });

    Route::group(['middleware' => "AdminAuth"], function () {

        //Profile Routes
        Route::get('profile', ['as' => 'admin.profile', 'uses' => '\App\Http\Controllers\Admin\ProfileController@profile']);
        Route::post('profile/update', ['as' => 'admin.profile.update', 'uses' => '\App\Http\Controllers\Admin\ProfileController@updateAdminProfile']);


        //Dashboard Route
        Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => '\App\Http\Controllers\Admin\LoginController@dashboard']);

        //Logout Route
        Route::get('logout', ['as' => 'admin.logout', 'uses' => '\App\Http\Controllers\Admin\LoginController@logout']);

        //SubAdmin Routes
        Route::get('subadmin', ['as' => 'admin.subadmin', 'uses' => '\App\Http\Controllers\Admin\SubAdminController@subadmin_view']);
        Route::get('add/subadmin', ['as' => 'admin.add.subadmin', 'uses' => '\App\Http\Controllers\Admin\SubAdminController@subadmin_add']);
        Route::post('store/subadmin', ['as' => 'admin.store.subadmin', 'uses' => '\App\Http\Controllers\Admin\SubAdminController@store_subadmin']);
        Route::get('edit/subadmin/{id}', ['as' => 'admin.edit.subadmin', 'uses' => '\App\Http\Controllers\Admin\SubAdminController@edit_subadmin']);
        Route::get('delete/subadmin/{id}', ['as' => 'admin.delete.subadmin', 'uses' => '\App\Http\Controllers\Admin\SubAdminController@delete_subadmin']);
        Route::post('update/subadmin', ['as' => 'admin.update.subadmin', 'uses' => '\App\Http\Controllers\Admin\SubAdminController@update_subadmin']);

        //Assign Routes
        Route::get('assign', ['as' => 'admin.assign', 'uses' => '\App\Http\Controllers\Admin\AssignController@assign_view']);
        Route::get('add/assign', ['as' => 'admin.add.assign', 'uses' => '\App\Http\Controllers\Admin\AssignController@assign_add']);
        Route::post('store/assign', ['as' => 'admin.store.assign', 'uses' => '\App\Http\Controllers\Admin\AssignController@store_assign']);
        Route::get('edit/assign/{id}', ['as' => 'admin.edit.assign', 'uses' => '\App\Http\Controllers\Admin\AssignController@edit_assign']);
        Route::get('delete/assign/{id}', ['as' => 'admin.delete.assign', 'uses' => '\App\Http\Controllers\Admin\AssignController@delete_assign']);
        Route::post('update/assign', ['as' => 'admin.update.assign', 'uses' => '\App\Http\Controllers\Admin\AssignController@update_assign']);

        //User Routes
        Route::get('brand', ['as' => 'admin.brand', 'uses' => '\App\Http\Controllers\Admin\UserController@brand_view']);
        Route::get('creator', ['as' => 'admin.creator', 'uses' => '\App\Http\Controllers\Admin\UserController@creator_view']);

        Route::get('brand/status/{id}', ['as' => 'admin.brand.status', 'uses' => '\App\Http\Controllers\Admin\UserController@brand_status']);
        Route::get('brand/edit/{id}', ['as' => 'admin.brand.edit', 'uses' => '\App\Http\Controllers\Admin\UserController@brand_edit']);
        Route::post('brand/update', ['as' => 'admin.brand.update', 'uses' => '\App\Http\Controllers\Admin\UserController@brand_update']);


        Route::post('brand/status/update', ['as' => 'admin.status.brand.update', 'uses' => '\App\Http\Controllers\Admin\UserController@brand_status_update']);
        Route::get('brand/details/{id}', ['as' => 'admin.brand.details', 'uses' => '\App\Http\Controllers\Admin\UserController@brand_details']);


        Route::get('creator/status/{id}', ['as' => 'admin.creator.status', 'uses' => '\App\Http\Controllers\Admin\UserController@creator_status']);
        Route::get('creator/edit/{id}', ['as' => 'admin.creator.edit', 'uses' => '\App\Http\Controllers\Admin\UserController@creator_edit']);
        Route::post('creator/update', ['as' => 'admin.creator.update', 'uses' => '\App\Http\Controllers\Admin\UserController@creator_update']);


        Route::post('creator/status/update', ['as' => 'admin.status.creator.update', 'uses' => '\App\Http\Controllers\Admin\UserController@creator_status_update']);
        Route::get('creator/details/{id}', ['as' => 'admin.creator.details', 'uses' => '\App\Http\Controllers\Admin\UserController@creator_details']);

        //Order Routes
        Route::get('order', ['as' => 'admin.order', 'uses' => '\App\Http\Controllers\Admin\OrderController@order_view']);
        Route::get('order/edit/{id}', ['as' => 'admin.order.edit', 'uses' => '\App\Http\Controllers\Admin\OrderController@order_edit']);
        Route::post('order/update', ['as' => 'admin.order.update', 'uses' => '\App\Http\Controllers\Admin\OrderController@order_update']);


        Route::get('invoices', ['as' => 'admin.invoices', 'uses' => '\App\Http\Controllers\Admin\OrderController@invoice_view']);
        Route::get('invoice/{id}', ['as' => 'admin.invoice', 'uses' => '\App\Http\Controllers\Admin\OrderController@order_view_invoice']);

        //Staff Routes
        Route::get('add/staff', ['as' => 'admin.add.staff', 'uses' => '\App\Http\Controllers\Admin\StaffController@add_staff']);
        Route::post('store/staff', ['as' => 'admin.store.staff', 'uses' => '\App\Http\Controllers\Admin\StaffController@store_permission']);

        //Email Activity
        Route::get('email/activity', ['as' => 'admin.email.activity', 'uses' => '\App\Http\Controllers\Admin\OrderController@email_activity_view']);
        Route::get('activity/log', ['as' => 'admin.activity.log', 'uses' => '\App\Http\Controllers\Admin\OrderController@email_log_view']);

        //SMTP Routes
        Route::get('add/smtp', ['as' => 'admin.smtp', 'uses' => '\App\Http\Controllers\Admin\SmtpController@add_smtp']);
        Route::post('smtp/update', ['as' => 'admin.smtp.update', 'uses' => '\App\Http\Controllers\Admin\SmtpController@updateSmtpConfig']);

        //Email Templates Routes
        Route::get('email/template', ['as' => 'admin.email.templates', 'uses' => '\App\Http\Controllers\Admin\SmtpController@emailTemplates']);
        Route::post('email/template', ['as' => 'update.email.template', 'uses' => '\App\Http\Controllers\Admin\SmtpController@updateTemplate']);

        
    });
});

Route::controller(IndexController::class)->group(function () {
    Route::get('/',  'index')->name('home');
    Route::get('/influencers',  'exploreInfluencers')->name('explore');
    Route::get('/influencers/search',  'explore')->name('search.Influencer');
    Route::get('/influencer-details/{id}',  'influencerDetails')->name('influencer.details');
    Route::get('join-as-brand',  'joinAsBrand')->name('join.brand');
    Route::get('/brand-signup',  'brandSingup')->name('brand.signup');
    Route::get('/influencer-marketplace',  'marketplace')->name('marketplace');
    Route::get('/blogs',  'blogs')->name('blogs');
    Route::get('/creator-hub',  'hub')->name('hub');
    Route::get('/case-study',  'caseStudy')->name('case.study');
    Route::get('/affiliate-program',  'program')->name('affiliate.program');
    Route::get('/ebook',  'ebook')->name('ebook');
    Route::get('/report',  'report')->name('report');
    Route::get('/influencer-rate-calculator',  'rateCalculator')->name('influencer.rate.calculator');
    Route::get('/instagram-engagement-rate-calculator',  'instaRateCalculator')->name('instagram-engagement.rate.calculator');
    Route::get('/tiktok-engagement-rate-calculator',  'tiktokRateCalculator')->name('tiktok.engagement.rate.calculator');
    Route::get('/influencer-campaign-brief-template',  'campainTemplate')->name('influencer.campaign.brief.template');
    Route::get('/influencer-contract-template',  'contractTemplate')->name('influencer.contract.template');
    Route::get('/find-influencer',  'findInfluencer')->name('find.influencer');
    Route::get('/top-influencer',  'topInfluencer')->name('top.influencer');
    Route::get('/hire-influencer',  'hireInfluencer')->name('hire.influencer');
    Route::get('/search-influencer',  'searchInfluencers')->name('influencer.search');
    Route::get('/buy-content',  'buyContent')->name('buy.content');
    Route::get('/buy-shoutouts',  'buyShoutouts')->name('buy.shoutouts');
    Route::get('/contact-us',  'contactUs')->name('contact.us');
    Route::get('/how-it-work',  'howItWork')->name('how.it.work');
    Route::get('/faqs',  'faqs')->name('faqs');
    Route::get('/verify-email',  'verifyEmail')->name('verify.email');
    Route::get('/verify-your-email',  'verifyYourEmail')->name('verify.email');
    Route::get('/complete-profile/{id}',  'completeProfile')->name('complete.profile');
    Route::get('/login',  'login')->name('user.login');
    Route::get('/creator',  'joinAsCreator')->name('join.creator');
    Route::get('/creator-signup/{username}',  'cratorSingup')->name('creator.signup');
    Route::get('/create-page/{id}',  'createPage')->name('creater.page');
    Route::get('/pricing',  'pricing')->name('pricing.page');
    Route::get('/profile/{id}',  'profile')->name('profile.page');
    Route::get('/edit-page/{id}',  'editProfile')->name('profile.edit');
    Route::get('/create-campaign/{id}',  'createCampaign')->name('create.campaign');
    Route::get('/get-started/{id}',  'getStarted')->name('create.campaign');
    Route::get('/phone-verifcation',  'phoneNumber')->name('phone.number');
    Route::get('/verify-phone-number',  'otp')->name('verification.form');
    Route::get('/payment-verification',  'payment')->name('card.verification');
    Route::get('/referrals',  'referrals')->name('creator.referrals');
    Route::get('/insights',  'insights')->name('creator.insights');
    Route::get('/orders',  'orders')->name('creator.orders');
    Route::get('/lists',  'lists')->name('like.lists');
    Route::get('/checkout/{id}',  'checkout')->name('brand.checkout');
    Route::get('/create/payment/order',  'create_payment_order')->name('create_payment_order');
    Route::get('/create-offer/{id}',  'createOffer')->name('offer.create');
    Route::post('/order/process',  'order_process')->name('order.process');
    Route::post('/order/conformation/process',  'order_conformation_process')->name('order.conformation.process');

    Route::get('/test',  'testEvent')->name('event.test');

    Route::get('/campaigns',  'campaigns')->name('brand.campaigns');
    Route::get('/earnings',  'earnings')->name('creator.earnings');
    Route::get('/account',  'account')->name('creator.account');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::post('/create-page/{id}',  'createPage')->name('create.page');
    Route::post('/creator-signup/{username}',  'creatorSingup')->name('creator.signup');
    Route::post('/brand-signup',  'brandRegister')->name('brand.register');
    Route::post('/login',  'login')->name('login');
    Route::post('/create-page',  'creatorRegister')->name('creator.register');
    Route::post('/verify/{token}', 'verify')->name('verification.verify');
    Route::post('/token/{token}', 'token')->name('verification.token');
    Route::post('/complete-profile/{id}', 'registerBrand')->name('register.brand');
    Route::post('/create-campaign/{id}',  'createCampaign')->name('create.campaign');
    Route::post('/submit-campaign/{id}',  'submitCampaign')->name('submit.campaign');
    Route::post('/submit-brand/{id}',  'submitBrand')->name('submit.brand');
    Route::post('/submit-creator/{id}',  'submitCreator')->name('submit.creator');
    Route::post('/package',  'packages')->name('creator.package');
    Route::post('/phone-verifcation',  'phoneVerification')->name('phone.verify');
    Route::post('/verify-phone-number',  'verification_form_process')->name('verification.process');
    Route::post('/create-offer/{id}',  'createOffer')->name('offer.create');
    Route::post('/edit-page/{id}',  'editProfile')->name('profile.update');

    Route::get('/google', 'redirectToGoogle')->name('login.google');
    Route::any('/google/callback', 'handleGoogleCallBack');
});

Route::prefix('/user')->group(function () {

    Route::get('/forgot-password', [RegisterController::class, 'requestPassword'])->name('password.request')->middleware('guest');
    Route::post('/forgot-password', [RegisterController::class, 'emailPassword'])->name('password.email')->middleware('guest');

    Route::get('/reset-password/{token}', [RegisterController::class, 'resetPassword'])->name('password.reset')->middleware('guest');
    Route::post('/reset-password', [RegisterController::class, 'updatePassword'])->name('password.update')->middleware('guest');
});
