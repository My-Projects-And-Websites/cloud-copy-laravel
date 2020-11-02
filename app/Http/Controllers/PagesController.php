<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{
    public function index() {
        $data['categories'] = Category::all();
        
        return view('main.index', $data);
    }

    public function about() {
        
        return view('main.about');
    }

    public function services() {
        
        return view('main.services');
    }

    public function portfolio() {
        
        return view('main.portfolio');
    }

    public function contact() {
        
        return view('main.contact');
    }
}
