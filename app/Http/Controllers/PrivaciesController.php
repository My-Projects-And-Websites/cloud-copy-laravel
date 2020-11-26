<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivaciesController extends Controller
{
    public function tc() {
        return view('tc.termsconditions');
    }

    public function pp() {
        return view('tc.privacy');
    }
}
