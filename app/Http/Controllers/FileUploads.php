<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileUploads extends Controller
{
    function storeImage(Request $request)
    {
        $imageName = (string)Str::uuid() . $request->file('image')->getClientOriginalName();
        $imagePath =  $request->file('image')->storeAs('blogimages', $imageName, 'public');

        return ['imageName' => $imageName, 'imagePath' => $imagePath];
    }

    function storeFile(Request $request)
    {
        $fileName = (string)Str::uuid() . $request->file('file')->getClientOriginalName();
        $filePath =  $request->file('file')->storeAs('resumefiles', $fileName, 'public');

        return ['fileName' => $fileName, 'filePath' => $filePath];
    }
}
