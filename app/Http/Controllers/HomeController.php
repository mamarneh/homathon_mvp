<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

    public function submitSubscriptions () {
        //do actions  array $data
        // redirect to homepage
        return redirect('/chatbot');
    }

    public function subscription () {
        
        // redirect to homepage
        return view('subscription');
    }

    public function saveSurveyData () {
        //do actions  array $data
        // redirect to homepage
        return redirect('/subscription');
    }

    public function chatbot () {
        
        // redirect to homepage
        return view('chatbot');
    }
    
}
