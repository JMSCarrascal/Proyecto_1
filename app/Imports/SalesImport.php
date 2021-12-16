<?php

namespace App\Imports;

use App\Models\SalesDataSample;
use Maatwebsite\Excel\Concerns\ToModel;

class SalesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SalesDataSample([
            
           'ORDERNUMBER'     => $row[0],
           'QUANTITYORDERED' => $row[1], 
           'PRICEEACH'       => $row[2],
           'ORDERLINENUMBER' => $row[3],
           'SALES'           => $row[4],
           'ORDERDATE'       => $row[5],
           'STATUS'          => $row[6],
           'QTR_ID'          => $row[7],
           'MONTH_ID'        => $row[8],
           'YEAR_ID'         => $row[9],
           'PRODUCTLINE'     => $row[10],
           'MSRP'            => $row[11],
           'PRODUCTCODE'     => $row[12],
           'CUSTOMERNAME'    => $row[13],
           'PHONE'           => $row[14],
           'ADDRESSLINE1'    => $row[15],
           'ADDRESSLINE2'    => $row[16],
           'CITY'            => $row[17],
           'STATE'           => $row[18],
           'POSTALCODE'      => $row[19],
           'COUNTRY'         => $row[20],
           'TERRITORY'       => $row[21],
           'CONTACTLASTNAME' => $row[22],
           'CONTACTFIRSTNAME'=> $row[23],
           'DEALSIZE'        => $row[24],
        ]);
    }
}
