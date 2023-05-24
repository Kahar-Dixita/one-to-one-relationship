<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Employee;
use App\Models\Student;
use App\Models\Teacher;


class IndexController extends Controller
{
    public function data()
    {
        $teacher = Teacher::find(1);
        $teacher->students()->attach(1);
    }}
