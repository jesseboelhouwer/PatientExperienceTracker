<?php

namespace App\Http\Controllers;

use Auth;

class AdminHelpController extends Controller
{
    public function index()
    {
        if (!Auth::guard('admin')->check()) {//            
               return redirect('/');
        }

        return view('admin_help');
    }
}
