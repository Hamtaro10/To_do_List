<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Request;

class MainController extends Controller
{
    public function showLandingPage(){
        return view('layouts.main');
    }

    
}
