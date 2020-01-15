<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Auth::user();*/

        /*$password_changed_at = new Carbon((Auth::user()->password_changed_at) ? Auth::user()->password_changed_at : Auth::user()->created_at);
        dd(Carbon::now()->diffInDays($password_changed_at), config('auth.password_expires_days'));*/

        return view('home');
    }
}
