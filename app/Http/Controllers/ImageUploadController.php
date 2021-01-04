<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ImageUploadController extends Controller
{
    //

    /**
     * uploadImage a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request)
    {
        //

		$input = FacadesRequest::all();
		$rules = array(
		    'file' => 'image|max:3000',
		);

		$validation = $request->validate($rules);

		if (count($validation)==0)
		{
			return Response::make($validation[0], 400);
		}
        // foreach (FacadesRequest::file('file') as $file){
            $file = $request->file('file');

            $extension = FacadesFile::extension($file->getClientOriginalName());
            $directory = storage_path('public').'uploads/'.sha1(time());
            $filename = sha1(time().time()).".{$extension}";
            // dd($extension);
            // $upload_success = $request->upload('file', $directory, $filename);
            // if( $upload_success ) {
            //     return Response::json('success', 200);
            // } else {
            //     return Response::json('error', 400);
            // }
            $rq=$request->file->move('/home/sarchemc/myschoolmychoice.co.ke/uploads', $filename);
            if ($rq) {
                # code...
            return response()->json([
                'success'=>200,
                'file'=>'/home/sarchemc/'.url('/').'uploads'
                ]);

            }else{
                return response()->json([
                    'success'=>300,
                    'file'=>$filename
                    ]);

            }
        // }
    }
}
