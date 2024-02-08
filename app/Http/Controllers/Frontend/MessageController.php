<?php

namespace App\Http\Controllers\Frontend;

use Alert;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MessageController extends Controller
{
public function index()
{
    return view('frontend.contact');
}

    public function store(Request $request)
    {
        Message::create([
            'name' => $request->input('name'),
            'phone ' => $request->input('phonenumber'),
            'email' => $request->input('email'),
            'discription' => $request->input('discription'),
        ]);
        Alert::add('success', 'You have successfully logged in')->flash();

        return redirect('frontend.contact');

    }
}
