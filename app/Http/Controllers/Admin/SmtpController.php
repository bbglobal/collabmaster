<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use Illuminate\Http\Request;

class SmtpController extends Controller
{
    public function add_smtp()
    {
        return view('admin.pages.smtp.table');
    }

    public function emailTemplates()
    {
        $template = EmailTemplate::find(1);

        return view('admin.pages.emails.table', compact('template'));
    }

    public function updateSmtpConfig(Request $request)
    {
        // Validate the form inputs (add validation rules as needed)
        $validatedData = $request->validate([
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'encryption' => 'required',
        ]);

        // Update the .env file with the new SMTP configuration
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        // Replace the existing SMTP configuration with the new values
        $str = preg_replace("/MAIL_HOST=(.*)/", "MAIL_HOST=" . $validatedData['host'], $str);
        $str = preg_replace("/MAIL_PORT=(.*)/", "MAIL_PORT=" . $validatedData['port'], $str);
        $str = preg_replace("/MAIL_USERNAME=(.*)/", "MAIL_USERNAME=" . $validatedData['username'], $str);
        $str = preg_replace("/MAIL_PASSWORD=(.*)/", "MAIL_PASSWORD=" . $validatedData['password'], $str);
        $str = preg_replace("/MAIL_ENCRYPTION=(.*)/", "MAIL_ENCRYPTION=" . $validatedData['encryption'], $str);

        file_put_contents($envFile, $str);

        // Restart the application to apply changes
        Artisan::call('config:cache');

        return redirect()->back()->with('success', 'SMTP configuration updated successfully.');
    }

    public function updateTemplate(Request $request)
    {
        // Validate the form inputs (add validation rules as needed)
        $request->validate([
            'heading' => 'required',
            'body' => 'required',
        ]);

        $template = EmailTemplate::find(1);
        $template->heading = $request->input('heading');
        $template->body = $request->input('body');
        $template->update();

        return redirect()->back()->with('success', 'Template Edited Successfully');
    }
}
