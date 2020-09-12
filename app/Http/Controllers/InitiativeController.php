<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Cookie;
use App\Http\Helpers;
use Validator;
use Redirect;
use Response;

class InitiativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = Cookie::get('user');
        if ($value) {
            $row = DB::table('initiative')
                ->orderBy('created_at', 'desc')
                ->get();
            return view('admin.manageInitiative')->with(["data" => $row]);
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
            return view('admin.addInitiatives');

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
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {

            $data = [
                'title'       => $r->title,
                'description' => $r->description,
                'image'       => save_image($r->image, $r->title),
                'created_at'  => time(),
                'lang'       => $r->lang,
            ];

            $post = DB::table('initiative')->insertGetId($data);
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
            $row = DB::table('initiative')
                ->where("id", $id)
                ->first();

            return view('admin.editInitiative')->with(["row" => $row]);;
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
    public function EditInitiativesSave(Request $r)
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
                    'image'       => save_image($r->image, $r->title),
                    'updated_at'  => time()
                ];
            } else {
                $data = [
                    'title'       => $r->title,
                    'description' => $r->description,
                    'updated_at'  => time()
                ];
            }

            $post = DB::table('initiative')->where('id', $r->id)->update($data);
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

        $row = DB::table('initiative')
            ->where("id", $id)
            ->first();
        unlink($row->image);;
        $row = DB::table('initiative')
            ->where("id", $id)
            ->delete();
        // return response()->json(["message" => "Initiative Remove"]);
        $request->session()->flash('msg','Record has been deleted Successfully');
        return redirect()->route('panel.index');
    }
}
