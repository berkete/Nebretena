<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class AboutController extends Controller
{
    //


    public function create(){

        return view('contact');
    }

    public function store(ContactFormRequest $request){
        /* for mailgun
        for mb_send_mail()
         */

        Mail::send('email',
            array('name'=>$request->get('name'),
            'from'=>$request->get('from'),
            'subject'=>$request->get('subject'),
            'body'=>$request->get('body')),function ($message) use ($request) {//used to accept the from form input
//                    var_dump($request->get('from'));
                    $message->from($request->get('from'));
                    $message->to('shume98@gmail.com','Berhe')->subject('This is from our service users');
            });

      return redirect('contact')->with('message','Thanks for contacting us');

    }
}
