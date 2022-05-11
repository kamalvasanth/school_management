<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Subject;

class HomeController extends Controller
{
    public function dashboard() {
        $count['subjects']  = Subject::count();
        $count['faculties'] = Faculty::count();
       return view('pages.home',compact('count'));
    }
}
