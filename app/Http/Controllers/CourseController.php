<?php

namespace App\Http\Controllers;

use App\Course;
use App\Programme;
use Facades\App\Helpers\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    public function index(Request $request){
        $name = "%" . $request->input("name") . "%";
        $programme = $request->input("programme_id") ?? "%";

        $courses = Course::with("programme")
            -> orderBy("name")
            ->where(function ($query) use ($name, $programme) {
                $query->where('name', 'like', $name)
                    ->where('programme_id', 'like', $programme);
            })
            ->orWhere(function ($query) use ($name, $programme) {
                $query->where('description', 'like', $name)
                    ->where('programme_id', 'like', $programme);
            })
            -> get();

        $programmes = Programme::orderBy("name")
            -> has("courses")
            -> get();

        $result = compact("courses", "programmes");
        Json::dump($result);
        return view('course.index', $result);
    }

    public function show($id){
        $course = Course::with('programme')
            -> with('studentcourses')
            -> with('studentcourses.student')
            ->findOrFail($id);
//        $students = $course['studentcourses'];
//        dd($students);
        $result = compact('course');
        Json::dump($result);
        return view('course.show', $result);
    }
}
