<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherLandingController extends Controller
{
    /**
     * Show the teacher landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('teacher.index'); // Ensure the view path matches your setup
    }
}
