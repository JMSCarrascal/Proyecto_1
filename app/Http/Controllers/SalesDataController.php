<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sales_data;
use Illuminate\Support\Facades\DB;

class SalesDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=$request->get('texto');
        $Sales=DB::table('sales_data')
        ->select('ORDERNUMBER','QUANTITYORDERED','PRICEEACH','ORDERLINENUMBER','SALES','ORDERDATE','STATUS','QTR_ID','MONTH_ID','YEAR_ID','PRODUCTLINE','MSRP','PRODUCTCODE','CUSTOMERNAME','PHONE','ADDRESSLINE1','ADDRESSLINE2','CITY','STATE','POSTALCODE','COUNTRY','TERRITORY','CONTACTLASTNAME','CONTACTFIRSTNAME','DEALSIZE')
        ->where('ORDERNUMBER', 'LIKE','%'.$texto.'%')
        ->orwhere('QUANTITYORDERED', 'LIKE','%'.$texto.'%')
        ->orwhere('YEAR_ID', 'LIKE','%'.$texto.'%')
        ->paginate(40);
        return view('sales.index',compact('Sales','texto'));
        //return $Sales;

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
     * @param  \App\Models\Sales_data  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function show(Sales_data $sales_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales_data  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales_data $sales_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales_data  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales_data $sales_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales_data  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales_data $sales_data)
    {
        //
    }
}
