<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("admin.index",['user' => $user]);
    }
}
