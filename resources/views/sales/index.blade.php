
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
     *{box-sizing: border-box;}
       .container-fluid{ margin-top: 1cm;margin-left: 1cm;}
       .encabezado_tabla{ background-color: rgb(199, 195, 195);}
    </style>
    <title>Buscador</title>
</head>

<body>
   

    <div class="container-fluid"  >
        <h4>CLIENT MANAGEMENT</h4>
        <div class="row" >
            
            <form action="{{route('sales.index')}}" method="get">
                <div class="row" > 
                    <div class="col-4 my-2 "> 
                        <input type="text" name="texto" class="form-control" placeholder="ORDER NUMBER,QUANTITY ORDERED,YEAR_ID" value="{{$texto}}" >
                    </div>
                     <div class="col-4">
                         <input type="submit" value="Search" class="btn btn-primary my-2">
                    </div>

                </div> 
            </form>
        </div>
              {{-- TABLA --}}
        <div class="col-1x-12" style="margin-right: 3px">
            <div class="table-responsive-lg">
                <table class="table table-striped" >
                    <thead class="encabezado_tabla">
                        <tr>
                            <th>ORDER NUMBER</th>
                            <th>QUANTITY ORDERED</th>
                            <th>PRICE EACH</th>
                            <th>ORDER LINENUMBER</th>
                            <th>SALES</th>
                            <th>ORDER DATE</th>
                            <th>STATUS</th>
                            <th>QTR_ID</th>
                            <th>MONTH_ID</th>
                            <th>YEAR_ID</th>
                            <th>PRODUCT LINE</th>
                            <th>MSRP</th>
                            <th>PRODUCT CODE</th>
                            <th>CUSTOMER NAME</th>
                            <th>PHONE</th>
                            <th>ADDRESS LINE_1</th>
                            <th>ADDRESS LINE_2</th>
                            <th>CITY</th>
                            <th>STATE</th>
                            <th>POSTAL CODE</th>
                            <th>COUNTRY</th>
                            <th>TERRITORY</th>
                            <th>CONTACT LASTNAME</th>
                            <th>CONTACT FIRSTNAME</th>
                            <th>DEAL SIZE</th>
                        </tr>
                    </thead>         
                    <tbody>
                        @if(count($sales)<=0)
                             <tr>
                                <td colspan="25"> Resoults not found</td>
                             </tr>
                        @else 
                 
                        @foreach ($sales as $sale )
                        <tr>
                            <td>{{$sale->ORDERNUMBER}}</td>
                            <td>{{$sale->QUANTITYORDERED}}</td>
                            <td>{{$sale->PRICEEACH}}</td>
                            <td>{{$sale->ORDERLINENUMBER}}</td>
                            <td>{{$sale->SALES}}</td>
                            <td>{{$sale->ORDERDATE}}</td>
                            <td>{{$sale->STATUS}}</td>
                            <td>{{$sale->QTR_ID}}</td>
                            <td>{{$sale->MONTH_ID}}</td>
                            <td>{{$sale->YEAR_ID}}</td>
                            <td>{{$sale->PRODUCTLINE}}</td>
                            <td>{{$sale->MSRP}}</td>
                            <td>{{$sale->PRODUCTCODE}}</td>
                            <td>{{$sale->CUSTOMERNAME}}</td>
                            <td>{{$sale->PHONE}}</td>
                            <td>{{$sale->ADDRESSLINE1}}</td>
                            <td>{{$sale->ADDRESSLINE2}}</td>
                            <td>{{$sale->CITY}}</td>
                            <td>{{$sale->STATE}}</td>
                            <td>{{$sale->POSTALCODE}}</td>
                            <td>{{$sale->COUNTRY}}</td>
                            <td>{{$sale->TERRITORY}}</td>
                            <td>{{$sale->CONTACTLASTNAME}}</td>
                            <td>{{$sale->CONTACTFIRSTNAME}}</td>
                            <td>{{$sale->DEALSIZE}}</td>
                         
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                    {{$sales->links()}}
            </div>
        </div>
    </div>
</body>
</html>