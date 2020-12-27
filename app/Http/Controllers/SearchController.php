<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\School;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();
        //get results from database and display
        $results=School::where('name', 'like', '%'.$request->keyword.'%')
        ->orWhere('motto', 'like', '%'.$request->keyword.'%')
        ->orWhere('level', 'like', '%'.$request->keyword.'%')
        ->orWhere('ownership', 'like', '%'.$request->keyword.'%')->paginate(20);
        if ($request->ajax()) {
            return view('viewmodels.searchitem', ["recentReviews"=>$recentReviews,"schools"=>$results,"keywords"=>$request->keyword,"newitems"=>$newItems]);
        }
        return view("search", ["recentReviews"=>$recentReviews,"schools"=>$results,"keywords"=>$request->keyword,"newitems"=>$newItems]);
    }
    public function paginate(Request $request)
    {
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();
        //get results from database and display            n          
        $results=School::where('name', 'like', '%'.$request->keyword.'%')
        ->orWhere('motto', 'like', '%'.$request->keyword.'%')
        ->orWhere('level', 'like', '%'.$request->keyword.'%')
        ->orWhere('ownership', 'like', '%'.$request->keyword.'%')->paginate(10);
        if ($request->ajax()) {
            return view('viewmodels.searchitem', ["recentReviews"=>$recentReviews,"schools"=>$results,"keywords"=>$request->keyword,"newitems"=>$newItems]);
        }
        return view("search", ["recentReviews"=>$recentReviews,"schools"=>$results,"keywords"=>$request->keyword,"newitems"=>$newItems]);
    }
}
