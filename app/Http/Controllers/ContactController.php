<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Review;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        //TODO send email to user and admin
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();

        return view('contact',["recentReviews"=>$recentReviews,'datasubmited'=>true,"newitems"=>$newItems]);
    }
    //
    public function index()
    {
        //
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();
        return view('contact',["recentReviews"=>$recentReviews,'datasubmited'=>false,"newitems"=>$newItems]);
    }
    public function sendMail(Request $request) {
        //dd($request->all());

        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();

       $this->validate($request, [
                                    'name' => 'required|max:255',
                                    'email' => 'required|email|max:255',
                                    'subject' => 'required',
                                    'bodymessage' => 'required']
        );

        $name = $request->name;
        $email = $request->email;
        $title = $request->subject;
        $content = $request->bodymessage;
        Mail::send('emails.visitor_email', ['name' => $name, 'email' => $email, 'title' => $title, 'content' => $content], function ($message) {
            $message->to('yoosinpaddyrop@gmail.com')->subject('New Message');
            });

        return view('contact',["recentReviews"=>$recentReviews,'datasubmited'=>true,"newitems"=>$newItems]);

        // return redirect('contact')->with('status', 'You have successfully sent an email to the admin!');

    }
}
