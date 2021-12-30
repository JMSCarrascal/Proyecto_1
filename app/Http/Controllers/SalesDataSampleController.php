<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;

// use \Maatwebsite\Excel\Excel;
use App\Imports\Salesimport;
use Illuminate\Http\Request;
use App\Models\SalesDataSample;
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

        $order_number = $request->get('order_number');
        if ($request->has('order_number') && $order_number != null) {
            $query = $query->where('ORDERNUMBER', $order_number);
        }


        $quantiy_ordered = $request->get('quantiy_ordered');
        if ($request->has('quantiy_ordered') && $quantiy_ordered != null) {
            $query = $query->where('QUANTITYORDERED', $quantiy_ordered);
        }

        $year_id = $request->get('year_id');
        if ($request->has('year_id') && $year_id != null) {
            $query = $query->where('YEAR_ID', $year_id);
        }

        $sales = $query->paginate(10);

        return view('sales.index', compact('sales', 'order_number', 'quantiy_ordered', 'year_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function import()
    {
        //
        Excel::import(new SalesImport, 'sales_data_sample.csv', null, \Maatwebsite\Excel\Excel::CSV);


        // return ('/sales');
    }
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales=new SalesDataSample();

        $sales->ORDERNUMBER=$request->input('ORDERNUMBER');
        $sales->QUANTITYORDERED=$request->input('QUANTITYORDERED');
        $sales->PRICEEACH=$request->input('PRICEEACH');
        $sales->ORDERLINENUMBER=$request->input('ORDERLINENUMBER');
        $sales->SALES=$request->input('SALES');
        $sales->ORDERDATE=$request->input('ORDERDATE');
        $sales->STATUS=$request->input('STATUS');
        $sales->QTR_ID=$request->input('QTR_ID');
        $sales->MONTH_ID=$request->input('MONTH_ID');
        $sales->YEAR_ID=$request->input('YEAR_ID');
        $sales->PRODUCTLINE=$request->input('PRODUCTLINE');
        $sales->MSRP=$request->input('MSRP');
        $sales->PRODUCTCODE=$request->input('PRODUCTCODE');
        $sales->CUSTOMERNAME=$request->input('CUSTOMERNAME');
        $sales->PHONE=$request->input('PHONE');
        $sales->ADDRESSLINE1=$request->input('ADDRESSLINE1');
        $sales->ADDRESSLINE2=$request->input('ADDRESSLINE2');
        $sales->CITY=$request->input('CITY');
        $sales->STATE=$request->input(' STATE');
        $sales->POSTALCODE=$request->input('POSTALCODE');
        $sales->COUNTRY=$request->input('COUNTRY');
        $sales->TERRITORY=$request->input('TERRITORY');
        $sales->CONTACTLASTNAME=$request->input('CONTACTLASTNAME');
        $sales->CONTACTFIRSTNAME=$request->input('CONTACTFIRSTNAME');
        $sales->DEALSIZE=$request->input('DEALSIZE');
        $sales->save();
        
        return redirect()->route('sales.index');
        
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
    public function edit( $id)
    {
        $sale=SalesDataSample::find($id);
        
        return view('sales.edit', compact('sale'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesDataSample  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $sale=SalesDataSample::find ($id);

        $sale->ORDERNUMBER=$request->input('ORDERNUMBER');
        $sale->QUANTITYORDERED=$request->input('QUANTITYORDERED');
        $sale->PRICEEACH=$request->input('PRICEEACH');
        $sale->ORDERLINENUMBER=$request->input('ORDERLINENUMBER');
        $sale->SALES=$request->input('SALES');
        $sale->ORDERDATE=$request->input('ORDERDATE');
        $sale->STATUS=$request->input('STATUS');
        $sale->QTR_ID=$request->input('QTR_ID');
        $sale->MONTH_ID=$request->input('MONTH_ID');
        $sale->YEAR_ID=$request->input('YEAR_ID');
        $sale->PRODUCTLINE=$request->input('PRODUCTLINE');
        $sale->MSRP=$request->input('MSRP');
        $sale->PRODUCTCODE=$request->input('PRODUCTCODE');
        $sale->CUSTOMERNAME=$request->input('CUSTOMERNAME');
        $sale->PHONE=$request->input('PHONE');
        $sale->ADDRESSLINE1=$request->input('ADDRESSLINE1');
        $sale->ADDRESSLINE2=$request->input('ADDRESSLINE2');
        $sale->CITY=$request->input('CITY');
        $sale->STATE=$request->input(' STATE');
        $sale->POSTALCODE=$request->input('POSTALCODE');
        $sale->COUNTRY=$request->input('COUNTRY');
        $sale->TERRITORY=$request->input('TERRITORY');
        $sale->CONTACTLASTNAME=$request->input('CONTACTLASTNAME');
        $sale->CONTACTFIRSTNAME=$request->input('CONTACTFIRSTNAME');
        $sale->DEALSIZE=$request->input('DEALSIZE');
        $sale->save();
         
        // return redirect()->route('sales.index'),compact('sale');
     
        return view('sales.index', compact('sale'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesDataSample  $sales_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale=SalesDataSample::find($id);
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
