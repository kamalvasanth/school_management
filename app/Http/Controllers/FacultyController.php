<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller {
    public function index() {
        $faculties = Faculty::all();
        return view('pages.faculties.index',compact('faculties'));
    }
    public function create() {
        return view('pages.faculties.create');
    }
    public function store(Request $request) {
       $data = $request->validate([
        'name' => 'string|required|min:1|max:200',
        'email' => 'required|email|unique:faculties,email'
       ]);
       $faculty = Faculty::create($data);
       if($faculty) {
        return redirect()->route('faculties.index')->with('success',"New Faculty Added");
         } else {
        return redirect()->route('faculties.index')->with('error',"Failed to Add");
       }
    }
}
