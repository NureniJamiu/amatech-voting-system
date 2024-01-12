<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserApprovalController extends Controller
{
    public function approval()
    {
        return view('approval');
    }
}
