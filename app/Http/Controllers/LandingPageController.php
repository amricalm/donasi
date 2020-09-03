<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return view('pages.landingpage');
    }
}
