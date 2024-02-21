<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SipController extends Controller
{
    public function __invoke() {
        return view('sip');
    }
}
