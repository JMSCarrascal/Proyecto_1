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


    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .thead_page {
            width: 100%;
            margin-left: 1px;
            background-color: rgb(39, 39, 39);


        }

        .Management {
            position: sticky;
            top: 0px;
        }

        .thead_table {
            background-color: rgb(155, 155, 155);

        }

        .button_regist {
            background-color: #24c44c;
            min-width: 140px;
            font-size: 13px;
        }

        .search_button {
            background-color: rgb(54, 90, 211);
            font-size: 13px;
        }

        .tittle {
            margin-left: 13px;
            text-align: center;
            padding-top: 10px;
            border: 1px solid rgb(170, 170, 170);
            sha
        }

        .form-control {
            font-size: 13px;
        }

        .option_buttons {

            vertical-align: middle;
            width: 70%;
            height: 35px;
            font-weight: 500;
        }

        .icons_proyect {
            vertical-align: middle;
            font-size: 15px;
        }

        .table_sales {
            font-size: 13px;

        }

        @media (max-width: 767px) {
            .principal_buttons {
                width: 100%;
            }
        }

    </style>

    <title>Homepage</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row container-fluid">
            <div class="row">
                <h4 class="text-dark bg-gradient rounded tittle">CLIENT MANAGEMENT</h4>
            </div>
        </div>
        <div class="row container-fluid Management ">

            <form action="{{route('sales.index')}}" method="get">
                <div class="row bg-gradient pt-4 bg-gradient rounded thead_page">
                    <div class="col-4 col-md-2  col-lg-2">
                        <input type="number" name="order_number" class="form-control" placeholder="ORDER NUMBER"
                            value="{{ $order_number}}">
                    </div>

                    <div class="col-4 col-md-2  col-lg-2 ">
                        <input type="number" name="quantiy_ordered" class="form-control" placeholder="QUANTITY ORDERED"
                            value="{{$quantiy_ordered}}" min="0">
                    </div>

                    <div class="col-4 col-md-2  col-lg-2 mb-2">
                        <input type="number" name="year_id" class="form-control " placeholder="YEAR ID"
                            value="{{$year_id}}" min="2000" max="2022">
                    </div>

                    <div class="col-12 col-md-2 col-lg-2 mb-2">
                        <input type="submit" value="Search" class="btn btn-primary bg-gradient  search_button principal_buttons ">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 mb-3 d-flex justify-content-end">
                        <a href="{{route('sales.create')}}"
                            class="btn btn-success bg-gradient button_regist principal_buttons"><span
                                class="material-icons-outlined icons_proyect">
                                add_circle
                            </span>
                            <span> New Regist</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
        {{-- TABLA --}}
        <div class="row tabla container-fluid table_sales " style="overflow-x: scroll;">
            <div class="col-1x-12  ">
                <div class="table-responsive rounded">
                    <table class="table table-striped">
                        <thead class=" bg-gradient thead_table ">
                            <tr>
                                <th style="font-size: 15px">OPTIONS&nbsp;CLIENT</th>
                                <th>ORDER&nbsp;NUMBER</th>
                                <th>QUANTITY&nbsp;ORDERED</th>
                                <th>PRICE&nbsp;EACH</th>
                                <th>ORDER&nbsp;LINE&nbsp;NUM</th>
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
                                                class="btn btn-warning btn-sm mb-1 pt-2 option_buttons ">&nbsp;<span
                                                    class=" material-icons-outlined icons_proyect me">edit</span>&nbsp;&nbsp;<span
                                                    style="vertical-align:middle; margin-right:14px;">Edit</span>
                                            </a>

                                            <form action="{{route('sales.destroy',$sale->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn btn-sm bg-danger d-flex text-white option_buttons">
                                                    <label for="delete"
                                                        class="pt-2 material-icons-outlined icons_proyect">remove_circle</label>
                                                    <input type="submit" id="delete"
                                                        class='btn btn-sm text-white d-flex justify-content-star '
                                                        value="Delete"
                                                        onclick="return confirm('Are you sure, do you want delete this register?')">
                                                </div>
                                            </form>
                                        </div>
                                    </td>
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
            <div class="mt-3">
                {{$sales->links()}}
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
