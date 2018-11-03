<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class MailChimpController extends Controller
{


    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email'
        ]);

        if ( ! Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribe($request->email);
        }else{
            return redirect()->back()->withNote('You are already subscribed to our newsletter');
        }

            return redirect()->back()->withSuccess('Thank you for subscribed to our newsletter');

    }


}
