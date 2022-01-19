<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">

        <style>


/* body{
    margin: 0;
    padding: 0;
    background:src="{{URL::asset('directory/background.jpg')}}'");   
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
} */

.back_page{
    background-color: rgb(58, 55, 59);

}
        </style>
    <title>New</title>
</head>

<body class=" bg-light bg-gradient text-white  back_page shadow-none mb-5 ">
    
    <h3 class="bg-dark pt-4 pb-3  d-flex justify-content-center">NEW REGIST</h3>
    <div class="container-lg">
        
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('sales.store')}}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center text-dark">
                        <div class="col-sm-5 ">
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
                            
                            <form>
                                <div class="mb-3">
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
                                </div>
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
                                <input type="text" id="COUNTRY" class="form-control" list="country" name="COUNTRY" required="">
                                <datalist id="country">
                                <option value="AF">Afganistán</option>
                                <option value="AL">Albania</option>
                                <option value="DE">Alemania</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antártida</option>
                                <option value="AG">Antigua y Barbuda</option>
                                <option value="AN">Antillas Holandesas</option>
                                <option value="SA">Arabia Saudí</option>
                                <option value="DZ">Argelia</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaiyán</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrein</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BE">Bélgica</option>
                                <option value="BZ">Belice</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermudas</option>
                                <option value="BY">Bielorrusia</option>
                                <option value="MM">Birmania</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia y Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brasil</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="BT">Bután</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Camboya</option>
                                <option value="CM">Camerún</option>
                                <option value="CA">Canadá</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CY">Chipre</option>
                                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                <option value="CO" selected>Colombia</option>
                                <option value="KM">Comores</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, República Democrática del</option>
                                <option value="KR">Corea</option>
                                <option value="KP">Corea del Norte</option>
                                <option value="CI">Costa de Marfíl</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croacia (Hrvatska)</option>
                                <option value="CU">Cuba</option>
                                <option value="DK">Dinamarca</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egipto</option>
                                <option value="SV">El Salvador</option>
                                <option value="AE">Emiratos Árabes Unidos</option>
                                <option value="ER">Eritrea</option>
                                <option value="SI">Eslovenia</option>
                                <option value="ES">España</option>
                                <option value="US">Estados Unidos</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Etiopía</option>
                                <option value="FJ">Fiji</option>
                                <option value="PH">Filipinas</option>
                                <option value="FI">Finlandia</option>
                                <option value="FR">Francia</option>
                                <option value="GA">Gabón</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GD">Granada</option>
                                <option value="GR">Grecia</option>
                                <option value="GL">Groenlandia</option>
                                <option value="GP">Guadalupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GY">Guayana</option>
                                <option value="GF">Guayana Francesa</option>
                                <option value="GN">Guinea</option>
                                <option value="GQ">Guinea Ecuatorial</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="HT">Haití</option>
                                <option value="HN">Honduras</option>
                                <option value="HU">Hungría</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IQ">Irak</option>
                                <option value="IR">Irán</option>
                                <option value="IE">Irlanda</option>
                                <option value="BV">Isla Bouvet</option>
                                <option value="CX">Isla de Christmas</option>
                                <option value="IS">Islandia</option>
                                <option value="KY">Islas Caimán</option>
                                <option value="CK">Islas Cook</option>
                                <option value="CC">Islas de Cocos o Keeling</option>
                                <option value="FO">Islas Faroe</option>
                                <option value="HM">Islas Heard y McDonald</option>
                                <option value="FK">Islas Malvinas</option>
                                <option value="MP">Islas Marianas del Norte</option>
                                <option value="MH">Islas Marshall</option>
                                <option value="UM">Islas menores de Estados Unidos</option>
                                <option value="PW">Islas Palau</option>
                                <option value="SB">Islas Salomón</option>
                                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                <option value="TK">Islas Tokelau</option>
                                <option value="TC">Islas Turks y Caicos</option>
                                <option value="VI">Islas Vírgenes (EEUU)</option>
                                <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                <option value="WF">Islas Wallis y Futuna</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italia</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japón</option>
                                <option value="JO">Jordania</option>
                                <option value="KZ">Kazajistán</option>
                                <option value="KE">Kenia</option>
                                <option value="KG">Kirguizistán</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="LA">Laos</option>
                                <option value="LS">Lesotho</option>
                                <option value="LV">Letonia</option>
                                <option value="LB">Líbano</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lituania</option>
                                <option value="LU">Luxemburgo</option>
                                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                <option value="MG">Madagascar</option>
                                <option value="MY">Malasia</option>
                                <option value="MW">Malawi</option>
                                <option value="MV">Maldivas</option>
                                <option value="ML">Malí</option>
                                <option value="MT">Malta</option>
                                <option value="MA">Marruecos</option>
                                <option value="MQ">Martinica</option>
                                <option value="MU">Mauricio</option>
                                <option value="MR">Mauritania</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">México</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldavia</option>
                                <option value="MC">Mónaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MZ">Mozambique</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Níger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk</option>
                                <option value="NO">Noruega</option>
                                <option value="NC">Nueva Caledonia</option>
                                <option value="NZ">Nueva Zelanda</option>
                                <option value="OM">Omán</option>
                                <option value="NL">Países Bajos</option>
                                <option value="PA">Panamá</option>
                                <option value="PG">Papúa Nueva Guinea</option>
                                <option value="PK">Paquistán</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Perú</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PF">Polinesia Francesa</option>
                                <option value="PL">Polonia</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="UK">Reino Unido</option>
                                <option value="CF">República Centroafricana</option>
                                <option value="CZ">República Checa</option>
                                <option value="ZA">República de Sudáfrica</option>
                                <option value="DO">República Dominicana</option>
                                <option value="SK">República Eslovaca</option>
                                <option value="RE">Reunión</option>
                                <option value="RW">Ruanda</option>
                                <option value="RO">Rumania</option>
                                <option value="RU">Rusia</option>
                                <option value="EH">Sahara Occidental</option>
                                <option value="KN">Saint Kitts y Nevis</option>
                                <option value="WS">Samoa</option>
                                <option value="AS">Samoa Americana</option>
                                <option value="SM">San Marino</option>
                                <option value="VC">San Vicente y Granadinas</option>
                                <option value="SH">Santa Helena</option>
                                <option value="LC">Santa Lucía</option>
                                <option value="ST">Santo Tomé y Príncipe</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leona</option>
                                <option value="SG">Singapur</option>
                                <option value="SY">Siria</option>
                                <option value="SO">Somalia</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="PM">St Pierre y Miquelon</option>
                                <option value="SZ">Suazilandia</option>
                                <option value="SD">Sudán</option>
                                <option value="SE">Suecia</option>
                                <option value="CH">Suiza</option>
                                <option value="SR">Surinam</option>
                                <option value="TH">Tailandia</option>
                                <option value="TW">Taiwán</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TJ">Tayikistán</option>
                                <option value="TF">Territorios franceses del Sur</option>
                                <option value="TP">Timor Oriental</option>
                                <option value="TG">Togo</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad y Tobago</option>
                                <option value="TN">Túnez</option>
                                <option value="TM">Turkmenistán</option>
                                <option value="TR">Turquía</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UA">Ucrania</option>
                                <option value="UG">Uganda</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistán</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabue</option>
                            </datalist>


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
                    <div class="row justify-content-center ps-4">
                        
                         <input type="submit" value=" + add regist" class="col-sm-2  btn btn-success my-3 fs-5  me-3">

                        <input type="reset" value="Reset" class="col-sm-1  btn btn-secondary my-3 fs-5" >
            
                        <a href="{{route('sales.index')}}" class="col-sm-2 btn btn-link  my-3"><span class="material-icons-outlined" style="font-size: 30px;">
                            home
                            </span>
                            </a>
                    
                    </div>                 
                </form>
            </div>



        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>
