<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Lecture;
use Illuminate\Support\Facades\Auth;
use App\Models\shop;

class StudentController extends Controller
{

    public function student()
    {
        $user = Auth::user();
        if (Auth::check() && $user->role === "student") {
            session()->put("username", $user->name);
            session()->put("studentId", $user->studentId);
            session()->put("role", $user->role);
            return view('student.student-dashboard');
        }
        return redirect('admin/login');
    }

    function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'contact' => 'required|unique:users|max:15',
            'password' => 'required|min:8',
        ]);

        $student = new Student;
        $student->name = $data['name'];
        $student->email = $data['email'];
        $student->contact = $data['contact'];
        $student->password = $data['password'];
        $student->save();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'password' => $data['password'],
            'role' => 'student',
        ]);

        return redirect('admin/login')->with('success', 'Registration Completed, now you can login');
    }

    public function courses()
    {
        $studentId = session()->get('studentId');

        $courses = Course::join('enrolls', 'courses.id', '=', 'enrolls.course_id')
            ->join('students', 'students.id', '=', 'enrolls.student_id')
            ->join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('courses.id', 'courses.course_image', 'courses.title', 'teachers.first_name', 'teachers.last_name', 'courses.start_date', 'courses.end_date', 'courses.sub_title', 'courses.fee', 'courses.link', 'courses.category', 'courses.description', 'courses.status', 'enrolls.student_id')
            ->where('courses.status', '1')
            ->where('enrolls.student_id', $studentId)
            ->get();

        $data = compact('courses');
        return view('student.courses')->with($data);
    }

    public function teachers()
    {
        $studentName = session()->get('username');

        $teachers = Enroll::join('courses', 'enrolls.course_id', '=', 'courses.id')
            ->join('students', 'enrolls.student_id', '=', 'students.id')
            ->join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('teachers.first_name', 'teachers.last_name', 'teachers.level', 'teachers.email', 'teachers.contact', 'teachers.id', 'courses.title')
            ->where('students.name', $studentName)
            ->get();

        $data = compact('teachers');
        return view('student.teachers')->with($data);
    }

    public function classes()
    {
        $lectures = Lecture::all();

        $events = array();

        foreach ($lectures as $lecture) {
            $events[] = [
                'id' => $lecture->id,
                'title' => $lecture->title,
                'start' => $lecture->start_date,
                'end' => $lecture->end_date,
                'color' => '#1367C9'
            ];
        }

        $data = compact('events');
        return view('student.classes')->with($data);
    }

    function shop()
    {

        $studentId = session()->get('studentId');

        $shop = shop::join('enrolls', 'shops.id', '=', 'enrolls.shop_id')
            ->join('courses', 'courses.id', '=', 'enrolls.course_id')
            ->join('students', 'students.id', '=', 'enrolls.student_id')
            ->join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('courses.id', 'courses.course_image', 'courses.title', 'teachers.first_name', 'teachers.last_name', 'courses.start_date', 'courses.end_date', 'courses.sub_title', 'courses.fee', 'courses.link', 'courses.category', 'courses.description', 'courses.status', 'enrolls.student_id', 'shops.id', 'shops.title', 'shops.image', 'shops.material', 'shops.price', 'shops.description')
            ->where('courses.status', '1')
            ->where('enrolls.student_id', $studentId)
            ->get();

        // $shop = shop::all();
        $data = compact('shop');
        return view('student/shop')->with($data);
    }
}
