<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Review;

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
}
