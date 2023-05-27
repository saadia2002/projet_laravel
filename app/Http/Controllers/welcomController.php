<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class welcomController extends Controller
{
    public function index(){
        return view('pages.about');
    }
    public function index1(){
        return view('pages.home');
    }
    public function index2(){
        return view('pages.contact');
    }
    public function index3(){
        return view('pages.services');
    }
    public function loginIndex(){
        return view('pages.login');
    }
}
?>