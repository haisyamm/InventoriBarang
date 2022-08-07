<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function index()
    {
        return view('management.release');
    }
}
