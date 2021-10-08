<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }


    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function schedule()
    {
        return view('pages.schedule');
    }

    public function teachers()
    {
        return view('pages.teachers');
    }

    public function administration()
    {
        return view('pages.administration');
    }

    public function teacher()
    {
        return view('pages.teacher');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function event()
    {
        return view('pages.event');
    }

    public function admission()
    {
        return view('pages.admission');
    }

    public function academic()
    {
        return view('pages.academic');
    }

    public function students()
    {
        return view('pages.students');
    }

}
