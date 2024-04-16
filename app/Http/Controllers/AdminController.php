<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Student;
use App\Models\Lecture;
use App\Models\shop;
use App\Models\Contact;
use App\Models\ApostolicHub;
use App\Models\Enroll;
use App\Models\Payment;
use PHPMailer\PHPMailer\PHPMailer;

class AdminController extends Controller
{
    public function admin()
    {
        $user = Auth::user();
        $studentCount = Student::count();
        $courseCount = Course::count();
        $teacherCount = Teacher::count();
        $payments = Payment::count();
        $stripe = Payment::all();

        $successPayments = Payment::where('status', 'succeeded')->count();
        $refundedPayments = Payment::where('status', 'refunded')->count();
        $uncapturedPayments = Payment::where('status', 'uncaptured')->count();
        $failedPayments = Payment::where('status', 'failed')->count();

        if (Auth::check() && $user->role === "admin") {
            $data = compact('studentCount', 'courseCount', 'teacherCount', 'payments', 'successPayments', 'refundedPayments', 'uncapturedPayments', 'failedPayments', 'stripe');
            return view('admin/admin-dashboard')->with($data);
        }
        return redirect('admin/login');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function signup()
    {
        return view('admin/signup');
    }

    function loggedIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->input('remember'))) {

            $user = Auth::user();

            session()->put("username", $user->name);
            session()->put("role", $user->role);

            if ($user->role === "student") return redirect('student');

            elseif ($user->role === "teacher") return redirect('instructor');

            else return redirect('admin');
        }
        return redirect('admin/login')->with('warning', 'Login details are not valid');
    }

    function logout()
    {
        session()->forget("username");
        session()->forget("studentId");
        session()->forget("role");
        Auth::logout();

        return redirect('admin/login');
    }

    function courses()
    {
        $courses = Course::all();
        $data = compact('courses');
        return view('admin/courses')->with($data);
    }

    function teachers()
    {
        $teachers = Teacher::all();
        $data = compact('teachers');
        return view('admin/teachers')->with($data);
    }

    function students()
    {
        $students = Student::leftJoin('courses', 'students.course', '=', 'courses.id')
            ->select('students.id', 'students.name', 'students.email', 'students.contact', 'students.created_at', 'students.updated_at', 'courses.title')
            ->get();

        $data = compact('students');
        return view('admin/students')->with($data);
    }

    function shop()
    {
        $shop = shop::all();
        $data = compact('shop');
        return view('admin/shop')->with($data);
    }

    function addShop()
    {
        return view('admin/add-shop');
    }

    function addShops(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'material' => 'required',
        ]);

        $shop = new shop();
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('assets/images', $image);
        $shop->image = $image;
        $shop->title = $request['title'];
        $shop->price = $request['price'];
        $material = $request->file('material')->getClientOriginalName();
        $request->file('material')->move('assets/images/material', $material);
        $shop->material = $material;
        $shop->description = $request['description'];
        $shop->save();

        return redirect('admin/shop');
    }

    function editShop($id)
    {
        $shop = shop::find($id);
        if (is_null($shop)) {
            return redirect('admin/shop');
        } else {
            $url = url('admin/update-shop') . '/' . $id;
            $data = compact('shop', 'url');
            return view('admin.edit-shop')->with($data);
        }
    }

    function updateShop($id, Request $request)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'price' => 'required',
            'material' => 'required',
        ]);

        $shop = shop::find($id);
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('assets/images', $image);
        $shop->image = $image;
        $shop->title = $request['title'];
        $shop->price = $request['price'];
        $material = $request->file('material')->getClientOriginalName();
        $request->file('material')->move('assets/images/material', $material);
        $shop->material = $material;
        $shop->description = $request['description'];
        $shop->save();
        return redirect('admin/shop');
    }


    public function deleteShop($id)
    {
        $shop = shop::find($id);
        if (!is_null($shop)) {
            $shop->delete();
        }
        return redirect('admin/shop');
    }

    function addTeachers()
    {
        return view('admin.add-teacher');
    }

    function addCourse()
    {
        $courseTeacherData = Teacher::all();
        return view('admin/add-course', compact('courseTeacherData'));
    }

    function addCourses(Request $request)
    {
        $request->validate([ 
            'title' => 'required',
            'teacher' => 'required',
            'sub_title' => 'required',
        ]);

        $course = new Course();
        $filename = $request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->move('assets/images', $filename);
        $course->course_image = $filename;
        $course->title = $request['title'];
        $course->teacher = $request['teacher'];
        $course->start_date = $request['start_date'];
        $course->end_date = $request['end_date'];
        $course->ends_at = $request['ends_at'];
        $course->starts_at = $request['starts_at'];
        $course->sub_title = $request['sub_title'];
        $course->fee = $request['fee'];
        $course->link = $request['link'];
        $course->category = $request['category'];
        $course->description = $request['description'];
        $course->status = '0';
        $course->save();

        return redirect('admin/courses');
    }

    function contact()
    {
        $contact = Contact::all();
        $data = compact("contact");

        return view('admin.contact')->with($data);
    }

    function hub()
    {
        $hub = ApostolicHub::all();
        $data = compact("hub");

        return view('admin.hub')->with($data);
    }

    function deleteContact($id)
    {
        $contact = Contact::find($id);
        if (!is_null($contact)) {
            $contact->delete();
        }
        return redirect()->back();
    }

    function deleteHub($id)
    {
        $apostolicHub = ApostolicHub::find($id);
        if (!is_null($apostolicHub)) {
            $apostolicHub->delete();
        }
        return redirect()->back();
    }

    function addHub(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:apostolic_hubs',
            'contact' => 'required|unique:apostolic_hubs',
        ]);

        $apostolicHub = new ApostolicHub();
        if ($request['role'] == "instructor") {
            $apostolicHub->name = $request['name'];
            $apostolicHub->email = $request['email'];
            $apostolicHub->contact = $request['contact'];
            $apostolicHub->level = $request['level'];
            $apostolicHub->message = $request['message'];
            $filename = $request->file('resume')->getClientOriginalName();
            $request->file('resume')->move('assets/images/apostolicHub', $filename);
            $apostolicHub->bio = $filename;
            $apostolicHub->role = $request['role'];
            $apostolicHub->save();
        } else {
            $apostolicHub->name = $request['name'];
            $apostolicHub->email = $request['email'];
            $apostolicHub->contact = $request['contact'];
            $apostolicHub->message = $request['message'];
            $apostolicHub->role = $request['role'];
            $apostolicHub->save();
        }


        $sendTo = "info@taskministries.org";
        $subject = $request['name'] . ' Contacted you';
        $body =  $request['name'] . "<br />" . $request['email'] . "<br />" . $request['message'] . "";
        $isHTML = true;

        //Creating PHPMailer instance
        $mail = new PHPMailer();

        // Settings
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host       = env('SMTP_HOST', "");
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->Port       = env('SMTP_PORT', "");
        $mail->Username   = env('SMTP_USERNAME', "");
        $mail->Password   = env('SMTP_PASS', "");
        $mail->setFrom(env('SMTP_USERNAME', ""), "MY EMAIL");
        $mail->addAddress($sendTo);
        $mail->SMTPSecure = 'ssl';

        // Content
        $mail->isHTML($isHTML);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        //send
        $mail->send();

        return redirect()->back()->with("success", "for Contacting TASK Ministries, we'll get back to you shortly");

        return "Mail sent";
    }

    function addContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'contact' => 'required|unique:contacts',
        ]);

        $contact = new contact();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->contact = $request['contact'];
        $contact->message = $request['message'];
        $contact->save();

        $sendTo = "info@taskministries.org";
        $subject = $request['name'] . ' Contacted you';
        $body =  $request['name'] . "<br />" . $request['email'] . "<br />" . $request['message'] . "";
        $isHTML = true;

        //Creating PHPMailer instance
        $mail = new PHPMailer();

        // Settings
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host       = env('SMTP_HOST', "");
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->Port       = env('SMTP_PORT', "");
        $mail->Username   = env('SMTP_USERNAME', "");
        $mail->Password   = env('SMTP_PASS', "");
        $mail->setFrom(env('SMTP_USERNAME', ""), "MY EMAIL");
        $mail->addAddress($sendTo);
        $mail->SMTPSecure = 'ssl';

        // Content
        $mail->isHTML($isHTML);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        //send
        $mail->send();

        return redirect()->back()->with("success", "for Contacting TASK Ministries, we'll get back to you shortly");

        return "Mail sent";
    }

    function registerTeachers(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:teachers,email',
            'contact' => 'required|string|unique:teachers|max:12',
            'password' => 'required|min:8',
            'level' => 'required',
        ]);

        $teacher = new Teacher();
        $teacher->first_name = $request['first_name'];
        $teacher->last_name = $request['last_name'];
        $teacher->email = $request['email'];
        $teacher->contact = $request['contact'];
        $teacher->password = bcrypt($request['password']);
        $teacher->level = $request['level'];
        $teacher->save();

        $sendTo = $request['email'];
        $subject = 'Welcome to FLTC';
        $body =  "Dear " . $request['first_name'] . " " . $request['last_name'] . "<br />,
        We are delighted to inform you that you have been appointed as an " . $request['level'] . " at FLTC (Fivefold Leadership Training Center).<br/>
        **Login Credentials:** <br/>
        - **Username:** " . $request['email'] . "
        <br/>
        - **Temporary Password:** " . $request['password'] . "
        <br/>
        For security reasons, we recommend changing your password upon the first login.
        <br/>
        Please use the following link to access your account: [Login Link]
        <br/>
        If you have any questions or need further assistance, feel free to reach out to info@taskministries.org.
        <br/>
        We look forward to working with you and believe that your contributions will greatly benefit our students and the FLTC community.
        <br/>
        Welcome aboard!
        <br/>
        Best regards,<br/>
        Apostle Paula Wellings <br/>
        Admin<br/>
        info@taskministries.org<br/>
        FLTC - Fantastic Learning and Teaching Center<br/>";
        $isHTML = true;

        //Creating PHPMailer instance
        $mail = new PHPMailer();

        // Settings
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host       = env('SMTP_HOST', "");
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->Port       = env('SMTP_PORT', "");
        $mail->Username   = env('SMTP_USERNAME', "");
        $mail->Password   = env('SMTP_PASS', "");
        $mail->setFrom(env('SMTP_USERNAME', ""), "MY EMAIL");
        $mail->addAddress($sendTo);
        $mail->SMTPSecure = 'ssl';

        // Content
        $mail->isHTML($isHTML);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        //send
        $mail->send();

        if ($request['email'] != "info@taskministries.org" && $request['contact'] != "555-555-1235") {
            User::create([
                'name' => $request['first_name'],
                'email' => $request['email'],
                'contact' => $request['contact'],
                'password' => $request['password'],
                'role' => 'teacher',
            ]);
        }

        return redirect('admin/instructor');
    }

    function editCourse($id)
    {
        $course = Course::find($id);
        if (is_null($course)) {
            return redirect('admin/courses');
        } else {
            $url = url('admin/update-course') . '/' . $id;
            $data = compact('course', 'url');
            return view('admin.edit-course')->with($data);
        }
    }

    function editTeacher($id)
    {
        $teacher = Teacher::find($id);
        if (is_null($teacher)) {
            return redirect('admin/instructor');
        } else {
            $url = url('admin/update-instructor') . '/' . $id;
            $data = compact('teacher', 'url');
            return view('admin.edit-instructor')->with($data);
        }
    }

    function updateCourse($id, Request $request)
    {
        $course = Course::find($id);
        $filename = $request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->move('assets/images', $filename);
        $course->course_image = $filename;
        $course->title = $request['title'];
        $course->teacher = $request['teacher'];
        $course->start_date = $request['start_date'];
        $course->end_date = $request['end_date'];
        $course->sub_title = $request['sub_title'];
        $course->fee = $request['fee'];
        $course->link = $request['link'];
        $course->category = $request['category'];
        $course->description = $request['description'];
        $course->save();
        return redirect('admin/courses');
    }

    function updateTeacher($id, Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'contact' => 'required|string|max:12',
            'password' => 'required|min:8',
        ]);

        $teacher = Teacher::find($id);
        $teacher->first_name = $request['first_name'];
        $teacher->last_name = $request['last_name'];
        $teacher->email = $request['email'];
        $teacher->contact = $request['contact'];
        $teacher->password = bcrypt($request['password']);
        $teacher->level = $request['level'];
        $teacher->save();
        return redirect('admin/instructor');
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);
        if (!is_null($course)) {
            $course->delete();
        }
        return redirect('admin/courses');
    }

    public function deleteTeacher($id)
    {
        $teacher = Teacher::find($id);
        if (!is_null($teacher)) {
            $teacher->delete();
        }
        return redirect('admin/instructor');
    }

    public function draftCourse($id)
    {
        $course = Course::find($id);
        if (!is_null($course)) {
            $course->status = '0';
            $course->save();
        }
        return redirect('admin/courses');
    }

    public function publishCourse($id)
    {
        $course = Course::find($id);
        if (!is_null($course)) {
            $course->status = '1';
            $course->save();
        }
        return redirect('admin/courses');
    }

    public function calendar()
    {
        $lectures = Lecture::all();

        $events = array();

        foreach ($lectures as $lecture) {
            $events[] = [
                'id' => $lecture->id,
                'title' => $lecture->title,
                'start' => $lecture->start_date,
                'end' => $lecture->end_date,
                'color' => $lecture->color,
            ];
        }
        return view('admin.calendar', ['events' => $events]);
    }

    public function addEvent(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $lecture = new Lecture();
        $lecture->title = $request->title;
        $lecture->start_date = $request->start_date;
        $lecture->end_date = $request->end_date;
        $lecture->class_link = $request->class_link;
        $lecture->color = $request->color;
        $lecture->save();

        return response()->json($lecture);
    }

    public function delete($id)
    {
        $lecture = Lecture::find($id);

        if (is_null($lecture)) {
            return redirect('admin/calander');
        }

        $lecture->delete();
        return $id;
    }

    public function checkout($id)
    {
        $stripe = Course::find($id);

        $studentId = session()->get('studentId');
        $courseId = $stripe->id;

        $enroll = Enroll::firstOrNew(['course_id' => $courseId, 'student_id' => $studentId]);
        if (!$enroll->exists) {
            $enroll = new Enroll();
            $enroll->course_id = $courseId;
            $enroll->student_id = $studentId;
            $enroll->save();
        } else {
            return redirect()->back()->with('error', 'You are already Enrolled in the course');
        }

        \Stripe\Stripe::setApiKey('sk_test_51OAiS1KWAZDXjzFOybgw7Q9hFqeLhyBE969etjQSKkrCagXWPXIGTzn81KBEfkAmBgSgnstFQriTB81FFYPe06Pg00AgkEyTdS');

        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'description' => $stripe->title,
            'amount' => $stripe->fee * 100,
            'currency' => 'usd',
        ]);

        $payment = new Payment();
        $payment->amount = $charge->amount / 100;
        $payment->description = $charge->description;
        $payment->customer = $charge->source->name;
        $payment->status = $charge->status;
        $payment->save();

        return redirect()->back()->with('success', 'Your Ernrolment has been completed');
    }
}
