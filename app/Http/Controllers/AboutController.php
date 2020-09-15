<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Cookie;
use App\Http\Helpers;
use Validator;
use Redirect;
use Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexing()
    {
        $value = Cookie::get('user');
        if ($value) {
            $row = DB::table('abouts')
                ->orderBy('created_at', 'desc')
                ->get();
                // return view('admin.manageAboutus', compact('row'));
            return view('admin.manageAboutus')->with(["data" => $row]);
        }
        return redirect('/signin');;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $value = Cookie::get('user');
        if ($value)
            return view('admin.addAboutus');

        return redirect('/signin');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $validator = Validator::make($r->all(), [
            'title' => 'required',
            'lang' => 'required',
            'description' => 'required',

        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {

            $data = [
                'title'       => $r->title,
                'description' => $r->description,
                'conclusion' => $r->conclusion,
                'created_at'  => time(),
                'lang'       => $r->lang,
            ];

            $post = DB::table('abouts')->insertGetId($data);
            if ($post == 1)
                return  redirect()->back()->with('success', 'Your message has been sent successfully!');
            else
                return  redirect()->back()->with(['error' => 'Something Want Weong']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value = Cookie::get('user');
        if ($value) {
            $row = DB::table('abouts')
                ->where("id", $id)
                ->first();

            return view('admin.editAbout')->with(["row" => $row]);;
        }
        return redirect('/signin');;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditAboutSave(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'title' => 'required',
            'description' => 'required',

        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            if ($r->image != "") {
                $data = [
                    'title'       => $r->title,
                    'description' => $r->description,
                    'conclusion' => $r->conclusion,
                    'image'       => save_image($r->image, $r->title),
                    'updated_at'  => time()
                ];
            } else {
                $data = [
                    'title'       => $r->title,
                    'description' => $r->description,
                    'conclusion' => $r->conclusion,
                    'updated_at'  => time()
                ];
            }

            $post = DB::table('abouts')->where('id', $r->id)->update($data);
            if ($post == 1)
                return  redirect()->back()->with('success', 'Your Post successfully! Edit');
            else
                return  redirect()->back()->with(['error' => 'Something Want Weong']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $row = DB::table('abouts')
        ->where("id", $id)
        ->first();
    unlink($row->image);;
    $row = DB::table('abouts')
        ->where("id", $id)
        ->delete();
    // return response()->json(["message" => "Initiative Remove"]);
    $request->session()->flash('msg','Record has been deleted Successfully');
    return redirect()->route('page.about.read');
    }
}
