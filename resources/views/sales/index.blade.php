
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
       .form-control{position:sticky; right:10% ;}
       .btn-primary{position:sticky;}
       .btn-success{width:250px;position:sticky;}

    </style>
    <title>Buscador</title>
</head>

<body>
   

    <div class="container"  >
        <h4>CLIENT MANAGEMENT</h4>
        <div class="row" >
            <form action="{{route('sales.index')}}" method="get">
                <div class="row" > 
                    <div class="col-2 my-2 "> 
                        <input type="number" name="order_number" class="form-control" placeholder="ORDER NUMBER" value="{{ $order_number}}"  >
                
                    </div>
                    <div class="col-2 my-2 "> 
                        <input type="number" name="quantiy_ordered" class="form-control" placeholder="QUANTITY ORDERED" value="{{$quantiy_ordered}}" min="0" >
                    </div>
                    <div class="col-2 my-2 "> 
                        <input type="number" name="year_id" class="form-control" placeholder="YEAR_ID" value="{{$year_id}}" min="2003" max="2021">
                    </div>
                    <div class="col-1 my-2">
                         <input type="submit" value="Search" class="btn btn-primary ">
                    </div>
                    <div class="col-3 my-2" >
                    
                        <a href="{{route('sales.create')}}" class="btn btn-success "  >NEW REGIST</a>
                    </div>

                </div> 
            </form>
        </div>
              {{-- TABLA --}}
      <div class="row">
        <div class="col-1x-12" style="margin-right: 3px">
            <div class="table-responsive-lg">
                <table class="table table-striped" >
                    <thead class="encabezado_tabla">
                        <tr>
                            <th>OPTIONS_CLIENT</th>
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
                            <td><a href="{{route('sales.edit',$sale->ORDERNUMBER)}}" class="btn btn-warning btn-sm"> Edit</a> |<a href=""> Delete </a></td>
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
                    
            </div>
        </div>
    </div>
    </div>
    {{$sales->links()}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>