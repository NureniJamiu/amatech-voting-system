<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingApprovalController extends Controller
{
    public function index(Request $request)
    {
        return view('pending-approval');
    }
}
