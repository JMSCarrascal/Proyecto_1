<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>New</title>
</head>

<body>

    <div class="container-lg">
        <h4>NEW REGIST</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('sales.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group my-2">
                                <label for="ORDERNUMBER">Order number</label>
                                <input type="number" id="ORDERNUMBER" class="form-control" name="ORDERNUMBER" min="1"
                                    required="">


                                <label for="QUANTITYORDERED">Quantity ordered</label>
                                <input type="number" id="QUANTITYORDERED" class="form-control" name="QUANTITYORDERED"
                                    min="1" required="">


                                <label for="PRICEEACH">Price each</label>
                                <input type="text" id="PRICEEACH" class="form-control" name="PRICEEACH" 
                                    required maxlength="7">


                                <label for="ORDERLINENUMBER">Order line number</label>
                                <input type="number" id="ORDERLINENUMBER" class="form-control" name="ORDERLINENUMBER"
                                    min="1" required="">


                                <label for="SALES">Sales</label>
                                <input type="text" id="SALES" name="SALES"  class="form-control" min="1" required="">

                                <label for="ORDERDATE">Order date</label>
                                <input type="datetime-local" id="ORDERDATE" name="ORDERDATE" class="form-control" 
                                    required="" placeholder="ORDER DATE">


                                <label for="STATUS">Shipping status</label>
                                <input type="text" id="STATUS" class="form-control" list="estado" name="STATUS"
                                    require="">
                                <datalist id="estado">
                                    <option>Shipped</option>
                                    <option>Unshipped</option>
                                    <option>In Process</option>
                                    <option>Disputed</option>
                                    <option>On Hold</option>
                                    <option>Cancelled</option>
                                    <option>Resolved</option> 
                                </datalist>

                                <label for="QTR_ID"> QTR id</label>
                                <input type="number" id="QTR_ID" class="form-control" name="QTR_ID" required="">

                                <label for="MONTH_ID"> Mont id</label>
                                <input type="number" id="MONTH_ID" class="form-control" name="MONTH_ID" min="1" max="12"
                                    required="" placeholder="insert a value betwent 1-12.">

                                <label for="YEAR_ID"> Year id</label>
                                <input type="number" id="YEAR_ID" class="form-control" name="YEAR_ID" max="2021"
                                    min="2000" required="">

                                <label for="PRODUCTLINE">Product line</label>
                                <input tipe="text" id="PRODUCTLINE" class="form-control" list="product_line"
                                    name="PRODUCTLINE" require="">
                                <datalist id="product_line">
                                    <option>Motorcycle</option>
                                    <option>classic Cars</option>
                                    <option>Planes</option>
                                    <option>Ships</option>
                                </datalist>

                                <label for="MSRP"> MSRP</label>
                                <input type="number" id="MSRP" class="form-control" name="MSRP" required="">

                                <label for="PRODUCTCODE"> Product code</label>
                                <input type="text" id="PRODUCTCODE" class="form-control" name="PRODUCTCODE" required="">

                                <label for="CUSTOMERNAME"> Customer Name</label>
                                <input type="text" id="CUSTOMERNAME" class="form-control" name="CUSTOMERNAME" required
                                    maxlength="150">

                                <label for="PHONE"> Customer phone number</label>
                                <input type="tel" id="PHONE" class="form-control" name="PHONE" required maxlength="15">

                                <label for="ADDRESSLINE1"> Adress 1</label>
                                <input type="text" id="ADDRESSLINE1" class="form-control" name="ADDRESSLINE1"
                                    required="">

                                <label for="ADDRESSLINE2"> Adress 2</label>
                                <input type="text" id="ADDRESSLINE2" class="form-control" name="ADDRESSLINE2">

                                <label for="CITY"> City</label>
                                <input type="text" id="CITY" class="form-control" name="CITY" required maxlength="25">

                                <label for="STATE"> State</label>
                                <input type="text" id="STATE" class="form-control" name="STATE" maxlength="25">

                                <label for="POSTALCODE"> Postalcode</label>
                                <input type="number" id="POSTALCODE" class="form-control" name="POSTALCODE" required="">

                                <label for="COUNTRY"> Country</label>
                                <input type="text" id="COUNTRY" class="form-control" name="COUNTRY" required="">

                                <label for="TERRITORY"> Territory</label>
                                <input type="text" id="TERRITORY" class="form-control" name="TERRITORY" required="">

                                <label for="CONTACTLASTNAME"> Contac lastname</label>
                                <input type="text" id="CONTACTLASTNAME" class="form-control" name="CONTACTLASTNAME"
                                    required="">

                                <label for="CONTACTFIRSTNAME"> Contac firtsname</label>
                                <input type="text" id="CONTACTFIRSTNAME" class="form-control" name="CONTACTFIRSTNAME"
                                    required="">

                                <label for="DEALSIZE">Deal size</label> 
                                 <input  tipe="text" id="DEALSIZE"class="form-control" list="deal_size" name="DEALSIZE" require="">
                                      <datalist id="deal_size">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                        
                                      </datalist>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                         <input type="submit" value="Create User" class="col-sm-2  btn btn-primary my-4  ">

                        <input type="reset" value="Reset" class="col-sm-1  btn btn-secondary my-4" style="margin-left:10px">
            
                        <a href="{{route('sales.index')}}" class="col-sm-1 btn btn-link  my-4">back</a>
                    
                    </div>                 
                </form>
            </div>



        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>
