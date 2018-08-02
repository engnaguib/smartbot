<?php

namespace App\Http\Controllers;

use App\bot;
use Illuminate\Http\Request;
use Session;
class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=\App\bot::all();
        return view('bot.index',compact('all','$all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bot.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_obj=new \App\bot();
        $save_obj->message=$request->message;
        $save_obj->response=$request->response;
        $save_obj->save();
        Session::flash('success','done');
        return redirect('/Bot');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=\App\bot::find($id);
        return view('bot.edit',compact('item','$item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $save_obj=bot::find($id);
        $save_obj->message=$request->message;
        $save_obj->response=$request->response;
        $save_obj->save();
        Session::flash('success','done');
        return redirect('/Bot');
    }


}
