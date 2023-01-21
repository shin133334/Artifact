<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subject;

class PostController extends Controller
{
    public function index(Subject $subject)
    {
        return view('posts/index')->with(['subject' => $subject->getSubjects()]);
    }
    
    public function show(Subject $subject)
    {
        return view('posts/show')->with(['subject' => $subject]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Request $request, Subject $subject)
    {
        $input = $request['subject'];
        $subject->fill($input)->save();
        return redirect('/');
    }
    
    public function delete(Subject $subject)
    {
        $subject->delete();
        return redirect('/');
    }
}
