<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    // public function index()
    // {
    //     $user = Auth::user();

    //     if ($user->email !== 'admin@admin.com') {
    //         Auth::logout();
    //         return redirect('/login');
    //     }

    //     $projects = Project::all();
    //     return view('admin.dashboard', compact('projects'));
    // }

}
