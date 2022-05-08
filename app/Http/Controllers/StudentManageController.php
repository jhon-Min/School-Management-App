<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreStudentManageRequest;

class StudentManageController extends Controller
{
    public function index()
    {
        $students = User::with('rooms')->where('usertype', 'student')->get();
        return view('student-manage.index', compact('students'));
    }

    public function ssd(Request $request)
    {
        $students = User::with('rooms')->where('usertype', 'student');
        return DataTables::of($students)
            ->addColumn('action', function ($each) {
                $edit = "";
                $detail= "";

                $edit = '<a href="'.route('user.edit', $each->id).'" class="btn mr-1 btn-success btn-sm rounded-circle"><i class="fa-solid fa-pen-to-square fw-light"></i></a>';

                $detail = '<a href="' . route('user.show', $each->id) . '" class="btn mr-1 btn-info btn-sm rounded-circle"><i class="fa-solid fa-circle-info"></i></a>';

                return '<div class="action-icon">' . $edit  . $detail. '</div>';
            })
            ->addColumn('classrooms', function($each){
                $output ="<div>";
                foreach ($each->rooms as $room) {
                    $output .=  $room->name. ', ' . '<span class="mx-1"></span>' . '  ' ;
                }

                return $output;
            })
            ->rawColumns(['action', 'classrooms'])
            ->make(true);
    }


    public function takeCourse()
    {
        $rooms =  Classroom::latest()->get();
        $students = User::where('usertype', 'student')->latest()->get();
        return view('student-manage.take-course', compact('rooms', 'students'));
    }

    public function storeCourses(StoreStudentManageRequest $request)
    {
        $student = User::findOrFail($request->user_id);
        $student->rooms()->sync($request->rooms);

        return redirect()->route('student.index')->with('create_alert', ['icon' => 'success', 'title' => 'Successfully Added', 'message' => "Add student's course are  successfully"]);
    }
}
