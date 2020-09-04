<?php

namespace App\Http\Controllers;
use App\marketinghead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Marketingheadcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketinghead  =  marketinghead::all()->toJson(JSON_PRETTY_PRINT);;
        return $marketinghead;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marketinghead  = new marketinghead;
        $marketinghead->name= $request->name;
        $marketinghead->id= $request->id ;
        $marketinghead->address= $request->address;
        $marketinghead->contact= $request->contact;
        $marketinghead->qualification= $request->qualification;
        $marketinghead->salary= $request->salary;
        $marketinghead->password= $request->password;
        $marketinghead->save();
        return response()->json(['status' => 'Success', 'message' => 'Details Saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
       
        $marketinghead = DB::table('marketingheads')->where('id', '=', $id)->get();
      
          return $marketinghead;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketinghead = marketinghead::find($id);
        $marketinghead->delete();
        return response()->json(['status' => 'Success', 'Message' => 'Head Details Deleted']);
    }
}
