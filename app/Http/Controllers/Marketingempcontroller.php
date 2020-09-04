<?php

namespace App\Http\Controllers;
use App\marketingemployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Marketingempcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        $marketingemployee  =  marketingemployee::all()->toJson(JSON_PRETTY_PRINT);;
        return $marketingemployee;
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
        $marketingemp  = new marketingemployee;
        $marketingemp->name= $request->name;
        $marketingemp->id= $request->id ;
        $marketingemp->address= $request->address;
        $marketingemp->contact= $request->contact;
        $marketingemp->qualification= $request->qualification;
        $marketingemp->salary= $request->salary;
        $marketingemp->password= $request->password;
        $marketingemp->save();
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
        $marketingemployee   = DB::table('marketingemployees')->where('id', '=', $id)->get();
        return $marketingemployee;
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
        $marketingemp = marketingemployee::find($id);
        $marketingemp->name= $request->name;
        $marketingemp->address= $request->address;
        $marketingemp->contact= $request->contact;
        $marketingemp->qualification= $request->qualification;
        $marketingemp->salary= $request->salary;
        $marketingemp->password= $request->password;
        $marketingemp->save();
        return response()->json(['status' => 'Success', 'message' => 'Details updated']);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketingemp = marketingemployee::find($id);
        $marketingemp->delete();
        return response()->json(['status' => 'Success', 'Message' => 'Employee Details Deleted']);
    }
}
