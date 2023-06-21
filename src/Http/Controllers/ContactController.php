<?php

namespace Amaal\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $data = $request->all();
        return view('contact::contact', compact('data'));
    }
}
