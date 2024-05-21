<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ViewController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function info(): View
    {
        return view('info');
    }

    public function dashboard(): View
    {
        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
    }
}
