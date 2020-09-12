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
class mediacenter extends Controller
{
	public function index(Request $r){

        $data = DB::table('news')
    			->where('lang','en')
                ->orderBy('created_at','desc')
                ->get();


                $rows = DB::table('rewards')
    			->where('lang','en')
                ->orderBy('created_at','desc')
                ->get();

                $faq = DB::table('faqs')
    			->where('lang','en')
                ->orderBy('created_at','desc')
                ->get();

                $init = DB::table('initiative')
    			->where('lang','en')
                ->orderBy('created_at','desc')
                ->get();
    	// return view('front.main')->with(["datas" => $data]);
    	return view('front.main',compact(['data', 'rows','faq','init']));
    }


	public function Arindex(Request $r){
    	$data = DB::table('news')
    			->where('lang','ar')
    			->orderBy('created_at','desc')
                ->get();

                $rows = DB::table('rewards')
    			->where('lang','ar')
                ->orderBy('created_at','desc')
                ->get();

                $faq = DB::table('faqs')
    			->where('lang','ar')
                ->orderBy('created_at','desc')
                ->get();
        // return view('front.Armain')->with(["data" => $row]);
        return view('front.Armain',compact(['data', 'rows','faq']));
    }

    public function admin(Request $r){
    	$value = Cookie::get('user');
     	if($value)
    		return redirect('/panel');

    	return redirect('/signin');;
    }

	public function signin(){
		$value = Cookie::get('user');
     	if($value)
    		return redirect('/panel');

        return  view('admin.login');
    }


	public function logout(){
    	return redirect('/signin')->withCookie(Cookie::forget('user'));
     }



	public function login(Request $r)
     {

     	$user = DB::table('user')
 				->select("name","id")
 				->where('name',$r->username)
 				->where('password',$r->password)
 				->first();

 		if($user !=null){

      		return redirect('/panel')->withCookie(cookie('user', json_encode($user), 45000));;
      	}else
      		return redirect()->back()->withErrors(['error' => 'Invalid User']);


     }

     public function panel(Request $r)
     {
 		$value = Cookie::get('user');
     	if($value)
    		return view('admin.panel');

       	return redirect('/signin');;

     }

     public function News(Request $r)
     {
     	$value = Cookie::get('user');
     	if($value)
			return view('admin.addNews');

       	return redirect('/signin');;


     }

      public function EditNews(Request $r,$id)
     {
     	$value = Cookie::get('user');
     	if($value){
     		$row = DB::table('news')
	 				->where("id",$id)
	 				->first();

			return view('admin.editNews')->with(["row" => $row]);;
     	}
       	return redirect('/signin');;

	 }



     public function addNews(Request $r)
     {
     	 $validator = Validator::make($r->all(), [
           'title' => 'required',
           'description' => 'required',
           'image' => 'required',
            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{

		     	$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'image' 	  => save_image($r->image,$r->title),
		     		'created_at'  => time(),
     				 'lang' 	  => $r->lang,
		     		];

		     	$post = DB::table('news')->insertGetId($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your message has been sent successfully!');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }


	public function EditNewsSave(Request $r)
     {
     	 $validator = Validator::make($r->all(), [
           'title' => 'required',
           'description' => 'required',

            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{
	    		if($r->image != ""){
		     		$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'image' 	  => save_image($r->image,$r->title),
		     		'updated_at'  => time()
		     		];
	    		}else{
    				$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
 		     		'updated_at'  => time()
		     		];
	    		}

		     	$post = DB::table('news')->where('id', $r->id)->update($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your Post successfully! Edit');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }

	public function saveContactForm(Request $r)
     {
			 	$data = [
		     		'name' 	  => $r->name,
		    		'email' => $r->email,
		     		'mobile' 	  => $r->mobile,
		     		'subject'  => $r->subject,
		     		'status' => 1,
		     		'created_at'  => time()
		     		];

		     	$user = DB::table('contact_form')->where('email',$r->email)->first();
		     	if(!$user)
		     		$post = DB::table('contact_form')->insertGetId($data);

	     		Mail::send ( 'emails.mailEvent', $data, function ($message) use ($data) {
        			$message->from ('raj@dhanuinfosys.com' , 'Fazaa' );
			        $message->to ( 'webcontactform@fazaanationalrewards.ae' )->subject ('Fazaa - Contact form');
			    });

	       		return  response()->json(['success'=>'Your form has been submitted successfully.']);


    }

	public function manageNews(Request $r){
		$value = Cookie::get('user');
     	if($value){
	    	$row = DB::table('news')
	    			->orderBy('created_at','desc')
	    			->get();
	    	return view('admin.manageNews')->with(["data" => $row]);
     	}
 		return redirect('/signin');;

    }

	public function manageEmails(Request $r){
		$value = Cookie::get('user');
     	if($value){
	    	$row = DB::table('contact_form')
	    			->orderBy('created_at','desc')
	    			->get();
	    	return view('admin.manageEmails')->with(["data" => $row]);
     	}
 		return redirect('/signin');;

    }

    public function removeNews(Request $r){
    	$row = DB::table('news')
    			->where("id",$r->id)
    			->first();
		unlink($row->image);;
		$row = DB::table('news')
    			->where("id",$r->id)
    			->delete();
    	return response()->json(["message" => "News Remove"]);
    }




	public function export()
	{
	    $headers = array(
	        "Content-type" => "text/csv",
	        "Content-Disposition" => "attachment; filename=file.csv",
	        "Pragma" => "no-cache",
	        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
	        "Expires" => "0"
	    );

	    $reviews =	$row = DB::table('contact_form')
	    			->select('name','email','mobile','subject')
	    			->orderBy('created_at','desc')
	    			->get();
	    $columns = array('Name', 'Email', 'Mobile', 'Subject');

	    $callback = function() use ($reviews, $columns)
	    {
	        $file = fopen('php://output', 'w');
	        fputcsv($file, $columns);

	        foreach($reviews as $review) {
	            fputcsv($file, array($review->name, $review->email, $review->mobile, $review->subject));
	        }
	        fclose($file);
	    };
	    return Response::stream($callback, 200, $headers);
	}


	public function HomeD(){
    	return redirect('/');
    }


    public function Rewards(Request $r)
     {
     	$value = Cookie::get('user');
     	if($value)
			return view('admin.addReward');

       	return redirect('/signin');;


     }

     public function addRewards(Request $r)
     {

     	 $validator = Validator::make($r->all(), [
           'title' => 'required',
           'description' => 'required',
            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{

		     	$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'created_at'  => time(),
     				 'lang' 	  => $r->lang,
		     		];

		     	$post = DB::table('rewards')->insertGetId($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your message has been sent successfully!');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }

     public function manageRewards(Request $r){
		$value = Cookie::get('user');
     	if($value){
	    	$row = DB::table('rewards')
	    			->orderBy('created_at','desc')
	    			->get();
	    	return view('admin.manageReward')->with(["data" => $row]);
     	}
 		return redirect('/signin');;

    }

    public function removeRewards(Request $r){
    	$row = DB::table('rewards')
    			->where("id",$r->id)
    			->first();

		$row = DB::table('rewards')
    			->where("id",$r->id)
    			->delete();
    	return response()->json(["message" => "Rewards Removed"]);
    }


    public function EditRewards(Request $r,$id)
    {
        $value = Cookie::get('user');
        if($value){
            $row = DB::table('rewards')
                    ->where("id",$id)
                    ->first();

           return view('admin.editReward')->with(["row" => $row]);;
        }
          return redirect('/signin');;

    }


    public function EditRewardsSave(Request $r)
     {
     	 $validator = Validator::make($r->all(), [
           'title' => 'required',
           'description' => 'required',

            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{
	    		if($r->title != ""){
		     		$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'updated_at'  => time()
		     		];
	    		}

		     	$post = DB::table('rewards')->where('id', $r->id)->update($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your Post successfully! Edit');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }

// jksahfkhasdf

     public function Faqs(Request $r)
     {
     	$value = Cookie::get('user');
     	if($value)
			return view('admin.addFaq');

       	return redirect('/signin');;


     }

     public function addFaqs(Request $r)
     {


     	 $validator = Validator::make($r->all(), [
           'title' => 'required',
           'description' => 'required',
            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{

		     	$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'created_at'  => time(),
     				 'lang' 	  => $r->lang,
		     		];

		     	$post = DB::table('faqs')->insertGetId($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your message has been sent successfully!');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }

     public function manageFaqs(Request $r){
		$value = Cookie::get('user');
     	if($value){
	    	$row = DB::table('faqs')
	    			->orderBy('created_at','desc')
	    			->get();
	    	return view('admin.manageFaq')->with(["data" => $row]);
     	}
 		return redirect('/signin');;

    }

    public function removeFaqs(Request $r){
    	$row = DB::table('faqs')
    			->where("id",$r->id)
    			->first();

		$row = DB::table('faqs')
    			->where("id",$r->id)
    			->delete();
    	return response()->json(["message" => "Faq Removed"]);
    }


    public function EditFaqs(Request $r,$id)
    {
        $value = Cookie::get('user');
        if($value){
            $row = DB::table('faqs')
                    ->where("id",$id)
                    ->first();

           return view('admin.editFaq')->with(["row" => $row]);;
        }
          return redirect('/signin');;

    }


    public function EditFaqsSave(Request $r)
     {

     	 $validator = Validator::make($r->all(), [
           'title' => 'required',
           'description' => 'required',

            	]);

			if ($validator->fails()) {
	            return Redirect::back()->withErrors($validator);

	    	}else{
	    		if($r->title != ""){
		     		$data = [
		     		'title' 	  => $r->title,
		    		'description' => $r->description,
		     		'updated_at'  => time()
		     		];
	    		}

		     	$post = DB::table('faqs')->where('id', $r->id)->update($data);
		     	if($post == 1)
		       		return  redirect()->back()->with('success', 'Your Post successfully! Edit');
		       	else
		    		return  redirect()->back()->with(['error' => 'Something Want Weong']);
	    	}
     }

// jsadfkjhsdfklhlsd



     public function Initiative(Request $r)
     {

     	$value = Cookie::get('user');
     	if($value)
			return view('admin.addInitiatives');

       	return redirect('/signin');;


     }

}
