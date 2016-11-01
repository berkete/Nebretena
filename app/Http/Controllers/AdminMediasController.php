<?php

namespace App\Http\Controllers;

use App\Photo;
use Carbon\Carbon;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;


use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class AdminMediasController extends Controller
{
    //

    public function index(){


    $photos=Photo::all();

        return view('admin.media.index',compact('photos'));
    }
public function create(){




//    Photo::create($request->all());
//    return redirect('/admin/categories');


    return view('admin.media.create');

}

public function store(Request $request){

$file = $request->file('file');
    $name= time().$file->getClientOriginalName();
    $file->move('images',$name);
    Photo::create(['file'=>$name]);


}
public function destroy($id)
{

    $photo = Photo::findOrFail($id);
    //unlink(public_path().$photo->name);
    $photo->delete();


    return redirect('/admin/media');
}
public function show($id)
    {
        $file = public_path('images/'.$id);

        return response()->download($file);
        ob_flush();
        flush();
    }

public function update(){



}
    public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf
//        $entry= Photo::where('id','=',$fileId)->firstOrFail();
//        $path = public_path()."/images/".$entry->filename;
//        return response()->download($path,'Content-Type');

       return response()->download(public_path()."/images/1477617526sample_05.jpg");
    }
public function getTimms(){


    $shume = Carbon::now()->addDays(4)->diffForHumans();
    $shume2 = Carbon::createFromDate(1987,07,12)->age.'<br>';
    $shume4= $shume + $shume2.'<br>';

    //$x= Carbon::setTestNow(Carbon::createFromDate(2000, 1, 1));
    echo $shume,$shume2, $shume4;
}


}
