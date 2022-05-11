<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();
        return view('pages.subjects.index',compact('subjects'));
    }
    public function create() {
        $terms = Term::all();
        return view('pages.subjects.create',compact('terms'));
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'string|required|min:1|max:200',
            'term_id' => 'required'
        ]);
        $subject =  Subject::create($data);
        if($subject) {
            return redirect()->route('subjects.index')->with('success',"New Subject Created");
        }else {
            return redirect()->route('subjects.index')->with('error',"Failed to Create");
        }
        return view('pages.subjects.create',compact('terms'));
    }
}
