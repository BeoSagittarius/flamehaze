<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.pages.auth.forgot-password');
    }

    public function changePassword()
    {
        return 'change pass view';
    }

    public function sendToken()
    {
        return 'send token and link to redirect by email';
    }

    public function processChangePassword()
    {
        return 'process change password';
    }
}
