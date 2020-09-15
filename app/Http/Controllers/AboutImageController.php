<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use Cookie;
use App\Http\Helpers;
use Validator;
use Redirect;
use Response;

class AboutImageController extends Controller
{
    public function Images(Request $r)
    {
        $value = Cookie::get('user');
        if($value)
           return view('admin.aboutimg.addImage');

          return redirect('/signin');;


    }

     public function EditImages(Request $r,$id)
    {
        $value = Cookie::get('user');
        if($value){
            $row = DB::table('about_img')
                    ->where("id",$id)
                    ->first();

           return view('admin.aboutimg.editImage')->with(["row" => $row]);;
        }
          return redirect('/signin');;

    }



    public function addImages(Request $r)
    {


         $validator = Validator::make($r->all(), [
          'title' => 'required',
          'image' => 'required',
               ]);

           if ($validator->fails()) {
               return Redirect::back()->withErrors($validator);

           }else{

                $data = [
                    'title' 	  => $r->title,
                    'image' 	  => save_image($r->image,$r->title),
                    'created_at'  => time(),
                     'lang' 	  => $r->lang,
                    ];

                $post = DB::table('about_img')->insertGetId($data);
                if($post == 1)
                      return  redirect()->back()->with('success', 'Your message has been sent successfully!');
                  else
                   return  redirect()->back()->with(['error' => 'Something Want Weong']);
           }
    }


   public function Editabout_imgave(Request $r)
    {
         $validator = Validator::make($r->all(), [
          'title' => 'required',


               ]);

           if ($validator->fails()) {
               return Redirect::back()->withErrors($validator);

           }else{
               if($r->image != ""){
                    $data = [
                    'title' 	  => $r->title,
                    'image' 	  => save_image($r->image,$r->title),
                    'updated_at'  => time()
                    ];
               }else{
                   $data = [
                    'title' 	  => $r->title,
                     'updated_at'  => time()
                    ];
               }

                $post = DB::table('about_img')->where('id', $r->id)->update($data);
                if($post == 1)
                      return  redirect()->back()->with('success', 'Your Post successfully! Edit');
                  else
                   return  redirect()->back()->with(['error' => 'Something Want Weong']);
           }
    }

    public function manageImages(Request $r){
		$value = Cookie::get('user');
     	if($value){
	    	$row = DB::table('about_img')
	    			->orderBy('created_at','desc')
	    			->get();
	    	return view('admin.aboutimg.manageImage')->with(["data" => $row]);
     	}
 		return redirect('/signin');;

    }

    public function removeabout_img(Request $r){
    	$row = DB::table('about_img')
    			->where("id",$r->id)
    			->first();
		unlink($row->image);;
		$row = DB::table('about_img')
    			->where("id",$r->id)
    			->delete();
    	return response()->json(["message" => "Image Remove"]);
    }

}
