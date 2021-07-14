<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyPost;


class UploadFileController extends Controller
{

    public function upload(Request $res){

        $res->validate([
            'file' => 'required'
        ]);

        $title = time().'.'.request()->file->getClientOriginalExtension();

        $res->file->move(public_path('uploads'),$title);

        $storeFile=new MyPost;
        $storeFile->title =$title;
        $storeFile->save();

        return response()->json([
            'success'=>'File uploaded successfully'
        ]);
    }

    protected  function registered(Request $request, $user)
    {
        return redirect()->route('dashboard');
    }


}
