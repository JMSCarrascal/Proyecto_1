<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="">
    <style>
        body {
            font-family: 'Roboto', sans-serif;

        }

        .button_regist {
            background-color: #00CC33;
            min-width: 180px;
        }

        .Management {
            position: sticky;
            top: 0px;
            right: 5px;
        }

        .option_buttons {
            text-align: initial;
            width: 75%;
            height: 100%;
            font-family;
            font-weight: 500;



        }

        /* .icon {
            align: right;
        } */

        /* responsive */
        @media (max-width: 767px) {
            .principal_buttons {
                width: 100%;
                margin-right: 4px;
                max-width: 600px;

            }


        }

    </style>

    <title>Homepage</title>
</head>

<body class="bg-secondary ">


    <div class="container-sm mt-5 ">
        <h4 class="text-white">CLIENT MANAGEMENT</h4>
        <div class="row mb-2 Management">

            <form action="{{route('sales.index')}}" method="get">
                <div class="row">
                    <div class="col-4 col-md-3 mb-3">
                        <input type="number" name="order_number" class="form-control" placeholder="ORDER NUMBER"
                            value="{{ $order_number}}">
                    </div>

                    <div class="col-4 col-md-3 ">
                        <input type="number" name="quantiy_ordered" class="form-control" placeholder="QUANTITY ORDERED"
                            value="{{$quantiy_ordered}}" min="0">
                    </div>

                    <div class="col-4 col-md-2 ">
                        <input type="number" name="year_id" class="form-control" placeholder="YEAR_ID"
                            value="{{$year_id}}" min="2000" max="2022">
                    </div>

                    {{-- butons --}}
                    <div class="col-12 col-md-1  me-3 mb-2 ">
                        <input type="submit" value="Search" class="btn btn-primary bg-gradient principal_buttons ">
                    </div>
                    <div class="col-12 col-md-2 ">
                        <a href="{{route('sales.create')}}"
                            class="btn btn-success bg-gradient button_regist principal_buttons">
                       New Regist </a>

                    </div>
                </div>

            </form>
        </div>
        {{-- TABLA --}}

        <div class="row">
            <div class="col-1x-12" >
                <div class="table-responsive-xl">
                    <table class="table table-dark table-striped">
                        <thead class="encabezado_tabla">
                            <tr>

                                <th>OPTIONS&nbsp;CLIENT</th>
                                <th>id</th>
                                <th>ORDER&nbsp;NUMBER</th>
                                <th>QUANTITY&nbsp;ORDERED</th>
                                <th>PRICE&nbsp;EACH</th>
                                <th>ORDER&nbsp;LINENUMBER</th>
                                <th>SALES</th>
                                <th>ORDER&nbsp;DATE</th>
                                <th>STATUS</th>
                                <th>QTR&nbsp;ID</th>
                                <th>MONTH&nbsp;ID</th>
                                <th>YEAR&nbsp;ID</th>
                                <th>PRODUCT&nbsp;LINE</th>
                                <th>MSRP</th>
                                <th>PRODUCT&nbsp;CODE</th>
                                <th>CUSTOMER&nbsp;NAME</th>
                                <th>PHONE</th>
                                <th>ADDRESS&nbsp;LINE&nbsp;1</th>
                                <th>ADDRESS&nbsp;LINE&nbsp;2</th>
                                <th>CITY</th>
                                <th>STATE</th>
                                <th>POSTAL&nbsp;CODE</th>
                                <th>COUNTRY</th>
                                <th>TERRITORY</th>
                                <th>CONTACT&nbsp;LASTNAME</th>
                                <th>CONTACT&nbsp;FIRSTNAME</th>
                                <th>DEAL&nbsp;SIZE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($sales)<=0) <tr>
                                <td colspan="25"> Resoults not found</td>
                                </tr>
                                @else

                                @foreach ($sales as $sale )
                                <tr>
                                    {{-- Optión buttons --}}
                                    <td class="sticky-left">
                                        <div>
                                            
                                                <a href="{{route('sales.edit',$sale->id)}}" method="get"
                                                    class="btn btn-warning btn-sm mb-1 option_buttons "><span
                                                        class="pt-1 material-icons-outlined"
                                                        style="font-size:20px;">edit</span>&nbsp;&nbsp;&nbsp;Edit


                                                </a>
                                        
                                            <form action="{{route('sales.destroy',$sale->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div
                                                    class="btn btn-sm bg-danger  bg-gradient d-flex text-white option_buttons">
                                                    <label for="delete" class="pt-1 material-icons-outlined"
                                                        style="font-size: 20px">delete</label>
                                                    <input type="submit" id="delete" class='btn btn-sm text-white'
                                                        value="Delete"
                                                        onclick="return confirm('Are you sure, do you want delete this register?')">


                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{$sale->id}}</td>
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
        <div class="mt-3">
            {{$sales->links()}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
