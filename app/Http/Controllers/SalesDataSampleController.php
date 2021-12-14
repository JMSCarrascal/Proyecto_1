<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SalesDataSample;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class SalesDataSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Iluminate\http\Response;
     */
    public function index(Request $request)
    {
        
    $query = SalesDataSample::whereRaw('1=1');

    $order_number=$request->get('order_number');
    if($request->has('order_number' ) && $order_number !=null)
    {
    $query=$query->where('ORDERNUMBER',$order_number);
    }


    $quantiy_ordered=$request->get('quantiy_ordered');
    if($request->has('quantiy_ordered' ) && $quantiy_ordered !=null)
    {
    $query=$query->where('QUANTITYORDERED',$quantiy_ordered);
    }

    $year_id=$request->get('year_id');
    if($request->has('year_id' ) && $year_id !=null)
    {
    $query=$query->where('YEAR_ID',$year_id);
    }
     
    $sales=$query->paginate(10);
    
    return view('sales.index',compact('sales','order_number','quantiy_ordered','year_id')); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show(SalesDataSample $sales_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesDataSample  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesDataSample $sales_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesDataSample  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesDataSample $sales_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesDataSample  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesDataSample $sales_data)
    {
        //
    }
}
