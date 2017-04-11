<?php

namespace App\Http\Controllers;

use App\Commission;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('commissions.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!config('app.commissions'))
            return view('tos');
        return view('commissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'paypal' => 'required|max:255',
            'ign' => 'nullable|max:255',
            'deadline'=> 'nullable|max:255',
            'type' => 'required|max:255',
            'other' => 'nullable|max:255',
            'commercial' => 'required|boolean',
            'comments' => 'nullable',
            'tos' => 'required|accepted',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $input = $request->all();
        $token = str_random(8);

        $commission = new Commission();
        $commission->token = $token;
        $commission->name = $input['name'];
        $commission->paypal = $input['paypal'];
        $commission->ign = $input['ign'];
        $commission->deadline = $input['deadline'];
        $commission->type = $input['type'];
        $commission->other = $input['other'];
        $commission->commercial = $input['commercial'];
        $commission->comments = $input['comments'];

        $commission->save();

        if ($input['commercial'] > 0)
            $commercial = 'Yes';
        else
            $commercial = 'No';

        $route = route('commissions.show', $token);
        sendHook("**zOMG!!~ A new commission has been requested!**\r\nName: {$input['name']}\r\nPayPal Email: {$input['paypal']}\r\nCharacter Name: {$input['ign']}\r\nRequested Deadline: {$input['deadline']}\r\nCommission Type:{$input['type']}\r\nCommercial Use? {$commercial}\r\nAdditional Information: {$input['comments']}\r\n{$route}\r\n@everyone");

        return view('commissions.success', ['token' => $token]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commission  $commission
     * @return \Illuminate\Http\Response
     */
    public function show(Commission $commission)
    {
        return view('commissions.show', ['commission' => $commission]);
    }
}
