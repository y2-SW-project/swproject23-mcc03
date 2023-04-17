<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        return view('user/welcome');

    }

    public function userHome()
    {
        return view('user/welcome');

    }

    public function adminHome()
    {
        // authorization check if user has admin role
        if (Gate::allows('view-admin-welcome')) {
            return view('admin/welcome');
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
