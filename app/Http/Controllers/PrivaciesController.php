<?php

/*
    Author: Jimm Inciong
    Created At: 10/11/2020
    Modified Last At: 26/11/2020
*/

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
