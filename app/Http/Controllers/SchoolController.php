<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\School;
use App\Models\SchoolPhoto;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //For uploading new school
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();
        return view('newSchool',["recentReviews"=>$recentReviews,'datasubmited'=>false,"newitems"=>$newItems]);

    }
    public function dashboard()
    {
        //For uploading new school
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $newItems_3=School::orderBy('id','DESC')->limit(3)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();
        $featured=School::where('featured',true)->orderBy('id','ASC')->limit(4)->get();
        $popular=School::orderBy('views','DESC')->limit(4)->get();
        $popularPrimary=School::where('level','primary')->orderBy('views','DESC')->limit(6)->get();

    // dd($recentReviews[0]->user);
        //check if  we got something
        if (count($featured)<4) {
            $remainingpPosts=4-count($featured);
            $featured_add=School::inRandomOrder($remainingpPosts)->get();
            $featured = $featured->concat($featured_add);
            // dd($featured);
        }
        return view('dashboard',["newItems_3"=>$newItems_3,"popularPrimary"=>$popularPrimary,"popular"=>$popular,"featured"=>$featured,"recentReviews"=>$recentReviews,'datasubmited'=>false,"newitems"=>$newItems]);

    }
    public function school(Request $request,$id)
    {
        //For uploading new school
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $schoolModel=School::where('id',$id)->get();
        // $photos=School::find($id)->photos;
        $recentReviews=Review::orderBy('school_id','DESC')->limit(2)->get();
        $recentReview=Review::where('school_id',$id)->orderBy('id','DESC')->limit(2)->get();
        //Increment views
        if (count($schoolModel)>0) {
            # code...
            $school_=$schoolModel[0];
            $school_->views=$school_->views+1;
            $school_->save();
            $keywords='';
            foreach(explode(' ',$school_->name) as $row){
                $keywords.=$row.',';
            }
            foreach(explode(' ',$school_->description) as $row){
                $keywords.=$row.',';
            }
            //--increment views
            // dd($schoolModel[0]->photos);
            // $images=SchoolPhoto::where('id',$id)->orderBy('id','DESC')->limit(2)->get();
            return view('oneSchool',["schoolModel"=>$schoolModel[0],"recentReview"=>$recentReview,"recentReviews"=>$recentReviews,'datasubmited'=>false,"newitems"=>$newItems,"keywords"=>$keywords]);

        }else{
            return view('oneSchool',["schoolModel"=>$schoolModel,"recentReview"=>$recentReview,"recentReviews"=>$recentReviews,'datasubmited'=>false,"newitems"=>$newItems,"keywords"=>""]);

        }

    }
    public function itemModal(Request $request,$id)
    {
        $lastReview=Review::where('school_id',$id)->orderBy('id','DESC')->limit(1)->get();

        $schoolModel=School::where('id',$id)->get();
        //Increment views
        $school_=$schoolModel[0];
        $school_->views=$school_->views+1;
        $school_->save();
        //--increment views

        // dd($schoolModel[0]->photos);
        // $images=SchoolPhoto::where('id',$id)->orderBy('id','DESC')->limit(2)->get();
        return view('common.itemModal',["lastReview"=>$lastReview,"schoolModel"=>$schoolModel[0],'datasubmited'=>false]);

    }
    public function navigation(Request $request)
    {
        // $lastReview=Review::where('school_id',$id)->orderBy('id','DESC')->limit(1)->get();

        // $schoolModel=School::where('id',$id)->get();
        // //Increment views
        // $school_=$schoolModel[0];
        // $school_->views=$school_->views+1;
        // $school_->save();
        // //--increment views

        // // dd($schoolModel[0]->photos);
        // // $images=SchoolPhoto::where('id',$id)->orderBy('id','DESC')->limit(2)->get();
        return view('navigation');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request)
    {
        //
        // dd('got it');
        $user=Auth::user();
       $this->validate($request, [
                                    'score_value' => 'required|max:255',
                                    'school_id' => 'required|max:255',
                                    'message' => 'required|max:255'/* ,
                                    'package' => 'required' */]
        );
        $review=new Review();
        $review->comment=$request->message;
        $review->rating=$request->score_value;
        $review->school_id=$request->school_id;
        $review->user_id=$user->id;
        $canSave=$review->save();
        if($canSave){
            return Redirect::back();
        }else{
            return Redirect::back();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('got it');
        $newItems=School::orderBy('id','DESC')->limit(2)->get();
        $recentReviews=Review::orderBy('id','DESC')->limit(2)->get();

       $this->validate($request, [
                                    'name' => 'required|max:255',
                                    'email' => 'required|email|max:255',
                                    'county' => 'required',
                                    'locality' => 'required',
                                    'level' => 'required',
                                    'gender' => 'required',
                                    'phone' => 'required',
                                    'longitude' => 'required',
                                    'latitude' => 'required',
                                    'motto' => 'required',
                                    'description' => 'required',
                                    'vision' => 'required',
                                    'mission' => 'required',
                                    'performance' => 'required',
                                    'ownership' => 'required']
        );
        $school=new School();
        $school->name=$request->name;
        $school->email=$request->email;
        $school->county=$request->county;
        $school->locality=$request->locality;
        $school->level=$request->level;
        $school->gender=$request->gender;
        $school->phone=$request->phone;
        $school->motto=$request->motto;
        $school->description='Vision:'.$request->vision.'\n'.'Mision:'.$request->mission.'\n'.'Performance:'.$request->performance.'\n'.$request->description;
        $school->ownership=$request->ownership;
        // $school->package=$request->package;
        $school->latitude=$request->latitude;
        $school->longitude=$request->longitude;
        $canSave=$school->save();
        if($canSave){
            //save images
            $images=$request->file_name;
            foreach ($images as $image) {
                $myImage= new SchoolPhoto();
                $myImage->name=$image;
                $myImage->ismain=false;
                $myImage->school_id=$school->id;
                $myImage->save();
            }
            //save main courses

            $courses=$request->main_course;
            foreach ($courses as $course) {
                $myCourse= new course();
                $myCourse->name=$course;
                $myCourse->type="curricular";
                $myCourse->school_id=$school->id;
                if ($course!="") {
                    $myCourse->save();
                }
            }

            if ($request->has('other_course')) {
                //save other courses
                $other_courses=$request->other_course;
                foreach ($other_courses as $other_course) {
                    $myCourse2= new course();
                    $myCourse2->name=$other_course;
                    $myCourse2->type="extracurricular";
                    $myCourse2->school_id=$school->id;
                    if ($other_course!="") {
                        $myCourse->save();
                    }
                }
            }
            return redirect()->route('dashboard');
        }else{
            return Redirect::back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\school  $school
     * @return \Illuminate\Http\Response
     */
    public function show(school $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\school  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(school $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\school  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, school $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\school  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(school $school)
    {
        //
    }
}
