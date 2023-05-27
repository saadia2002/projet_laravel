<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('home.contact');
    }

  
}
