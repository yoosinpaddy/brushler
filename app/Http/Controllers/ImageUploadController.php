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
            $directory = public_path('uploads');
            $filename = sha1(time().time()).".{$extension}";
            $rq=$request->file->move('/home/myschoo1/public_html/uploads', $filename);
            // $rq=$request->file->move( $directory , $filename);
            // dd($directory);
            // $upload_success = $request->upload('file', $directory, $filename);
            // if( $upload_success ) {
            //     return Response::json('success', 200);
            // } else {
            //     return Response::json('error', 400);
            // }
            if ($rq) {
                return response()->json([
                    'success'=>200,
                    'file'=>$filename
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
