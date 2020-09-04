<?php

namespace App\Http\Controllers;
use App\marketingtask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Marketingtaskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $marketingtask  =  marketingtask::all()->toJson(JSON_PRETTY_PRINT);
        return $marketingtask;
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
        $marketingtask  = new marketingtask;
        $marketingtask->head_id= $request->head_id;
        $marketingtask->employee_id= $request->employee_id ;
        $marketingtask->task_details= $request->task_details;
        
        $marketingtask->save();
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
        $marketingtask = DB::table('marketingtasks')->where('employee_id', '=', $id)->get();
      
          return $marketingtask;
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
        
    }
}
