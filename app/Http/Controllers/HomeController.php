<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // If the user is a customer, they are directed to the dashboard view
        if(Auth::user()->user_type == 'customer'){
            return view('dashboard');
        }
        // However, if the user is an admin, they are directed to the admin home view
        else{
            return view('admin.home');
        }
    }

    public function page()
    {
        return view('admin-page');
    }
}
