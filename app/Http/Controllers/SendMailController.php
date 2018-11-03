<?php

namespace App\Http\Controllers;


use Newsletter;
use App\Mail\Thanks;
use LVR\Phone\Phone;
use App\Mail\RequestQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DesignByCode\MiniAdmin\Models\Client;

class SendMailController extends Controller
{



    public function send(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => ['required', new Phone],
            'message' => 'required'
        ]);



        if ( ! Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribe($request->email);
        }

        Mail::to('info@crystalbars.co.za')->queue(new RequestQuote($date = $request->only('name', 'email', 'phone', 'message')));

        Mail::to($request->email)->queue(new Thanks($name = $request->name));

        if (!$client::where('email', $request->email)->exists()) {
            $client->fill($request->only('name', 'email', 'phone'));
            $client->save();
        }

        return back()->withStatus('QUOTE SEND TO THE CRYSTAL BARS TEAM');
    }


}
