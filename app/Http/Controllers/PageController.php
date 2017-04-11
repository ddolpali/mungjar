<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index()
    {
        return view('home');
    }

	public function portfolio()
    {
        return view('portfolio');
    }

	public function tos()
    {
        return view('tos');
    }

	public function faq()
    {
        return view('faq');
    }

	public function packages()
    {
        return view('packages');
    }

	public function contact(Request $request)
    {
		if ($request->isMethod('get'))
		    return view('contact', ['success' => false]);

		$this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'order' => 'nullable|max:255',
            'body' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

		$input = $request->all();
		sendHook("**A new inquiry has been made**\r\nName: {$input['name']}\r\nEmail: {$input['email']}\r\nOrder URL: {$input['order']}\r\nBody: {$input['body']}\r\n@everyone", "Contact");
		return view('contact', ['success' => true ]);
    }
}
