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

class ContactController extends Controller
{
    public function Contact(Request $r)
    {
        $value = Cookie::get('user');
        if($value)
           return view('admin.contact.addContact');

          return redirect('/signin');;


    }




    public function addContact(Request $r)
    {


         $validator = Validator::make($r->all(), [
          'phone' => 'required',
          'address' => 'required',
          'email' => 'required',


               ]);

           if ($validator->fails()) {
               return Redirect::back()->withErrors($validator);

           }else{

                $data = [
                    'phone' 	  => $r->phone,
                    'address' 	  => $r->address,
                    'email' 	  => $r->email,
                    'techsupport' => $r->techsupport,
                    'created_at'  => time(),
                     'lang' 	  => $r->lang,
                    ];

                $post = DB::table('contacts')->insertGetId($data);
                if($post == 1)
                      return  redirect()->back()->with('success', 'Your message has been sent successfully!');
                  else
                   return  redirect()->back()->with(['error' => 'Something Want Weong']);
           }
    }



    public function manageContact(Request $r){
		$value = Cookie::get('user');
     	if($value){
	    	$row = DB::table('contacts')
	    			->orderBy('created_at','desc')
	    			->get();
	    	return view('admin.contact.manageContact')->with(["data" => $row]);
     	}
 		return redirect('/signin');;

    }

    public function EditContact(Request $r,$id)
    {
        $value = Cookie::get('user');
        if($value){
            $row = DB::table('contacts')
                    ->where("id",$id)
                    ->first();

           return view('admin.contact.editContact')->with(["row" => $row]);;
        }
          return redirect('/signin');;

    }


    public function EditContactSave(Request $r)
     {

     	 $validator = Validator::make($r->all(), [
           'phone' => 'required',
           'address' => 'required',
           'email' => 'required',
           'techsupport' => 'required',

            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{
	    		if($r->image != ""){
		     		$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'updated_at'  => time()
		     		];
	    		}else{
    				$data = [
		     		'phone' 	  => $r->phone,
		     		'address' 	  => $r->address,
		     		'email' 	  => $r->email,
		    		'techsupport' => $r->techsupport,
 		     		'updated_at'  => time()
		     		];
	    		}

		     	$post = DB::table('contacts')->where('id', $r->id)->update($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your Post successfully! Edit');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }



}
