<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('manage.user.index');
    }
    public function create()
    {
        return view('manage.user.create');
    }
}
