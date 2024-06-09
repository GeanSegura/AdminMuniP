<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainMenuController extends Controller
{
    public function adminDashboard()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function workerDashboard()
    {
        $user = Auth::user();
        return view('worker.dashboard', compact('user'));
    }
}
