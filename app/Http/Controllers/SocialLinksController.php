<?php

/*
    Author: Jimm Inciong
    Created At: 10/11/2020
    Modified Last At: 26/11/2020
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialLinksController extends Controller
{
    public function linkedin() {
        return redirect('https://www.linkedin.com/company/69258866/');
    }

    public function twitter() {
        return redirect('https://twitter.com/cloud_copy');
    }

    public function facebook() {
        return redirect('https://www.facebook.com/CloudCopyContent');
    }

    public function instagram() {
        return redirect('https://www.instagram.com/cloudcopycontent/');
    }
}
