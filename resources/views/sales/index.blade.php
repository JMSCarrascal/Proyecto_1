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

        .icons_proyect_delete {
            padding-bottom: 5px!important;
            /* vertical-align: middle !important; */
            font-size: 15px !important;
           
        }
        .icons_proyect_edit{

        }

        .material-icons-outlined{
            font-size: 15px;
            margin-top: 3px;
            
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
                        <input type="number" name="quantiy_ordered" class="form-control" placeholder="QUANTITY ORDERED"value="{{$quantiy_ordered}}" min="0">
                    </div>

                    <div class="col-4 col-md-2  col-lg-2 mb-2">
                        <input type="number" name="year_id" class="form-control " placeholder="YEAR ID"value="{{$year_id}}" min="2000" max="2022">
                    </div>

                    <div class="col-12 col-md-2 col-lg-2 mb-2">
                        <input type="submit" value="Search"class="btn btn-primary bg-gradient  search_button principal_buttons ">
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 mb-3 d-flex justify-content-end">
                        <button type="button" id="BtnNewRegist" class="btn bg-success text-white principal_buttons" data-bs-toggle="modal"
                            data-bs-target="#modal_created">
                            <span class="material-icons-outlined"> add_circle</span>
                             New Sale
                        </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- created modal --}}
        <div class="modal fade" id="modal_created" tabindex="-1" aria-labelledby="modal_createdLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Sale</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="salesnewform" action="{{route('sales.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center text-dark">
                                <div class="col-sm">
                                    <div class="row d-flex form-group my-2 fw-light" style="font-size: 13px">
                                    

                                        <div class="col-3">
                                        <label for="ORDERNUMBER"><span class="material-icons-outlined">
                                            description
                                            </span> Order number</label>
                                        <input type="number" id="ORDERNUMBER" class="form-control" name="ORDERNUMBER"
                                            min="1" required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="QUANTITYORDERED"><span class="material-icons-outlined">
                                            description
                                            </span> Quantity ordered</label>
                                        <input type="number" id="QUANTITYORDERED" class="form-control"
                                            name="QUANTITYORDERED" min="1" required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="PRICEEACH"><span class="material-icons-outlined">
                                            attach_money
                                            </span>Price each</label>
                                        <input type="text" id="PRICEEACH" class="form-control" name="PRICEEACH" required
                                            maxlength="7">
                                        </div>

                                        <div class="col-3">
                                        <label for="ORDERLINENUMBER"><span class="material-icons-outlined">
                                            description
                                            </span>Order line number</label>
                                        <input type="number" id="ORDERLINENUMBER" class="form-control"
                                            name="ORDERLINENUMBER" min="1" required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="SALES"><span class="material-icons-outlined">
                                            description
                                            </span> Sales</label>
                                        <input type="text" id="SALES" name="SALES" class="form-control" min="1"
                                            required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="ORDERDATE"><span class="material-icons-outlined">
                                            calendar_month
                                            </span> Order date</label>
                                        <input type="datetime-local" id="ORDERDATE" name="ORDERDATE"
                                          class="form-control" required="" placeholder="ORDER DATE">
                                        </div>
                                            
                                        <div class="col-3" class="col-3">
                                            <label for="STATUS"><span class="material-icons-outlined">
                                                local_shipping
                                                </span> Shipping status</label>
                                            <input type="text" id="STATUS" class="form-control" list="estado"
                                                name="STATUS" require="">
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

                                        <div class="col-3">
                                        <label for="QTR_ID"><span class="material-icons-outlined">
                                            inventory_2
                                            </span> QTR id</label>
                                        <input type="number" id="QTR_ID" class="form-control" name="QTR_ID" required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="MONTH_ID"><span class="material-icons-outlined">
                                            date_range
                                            </span> Mont</label>
                                        <input type="number" id="MONTH_ID" class="form-control" name="MONTH_ID" min="1"
                                            max="12" required="" placeholder="insert a value betwent 1-12.">
                                        </div>

                                        <div class="col-3">
                                        <label for="YEAR_ID"><span class="material-icons-outlined">
                                            calendar_today
                                            </span> Year id</label>
                                        <input type="number" id="YEAR_ID" class="form-control" name="YEAR_ID" max="2021"
                                            min="2000" required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="PRODUCTLINE"><span class="material-icons-outlined">
                                            view_in_ar
                                            </span> Product line</label>
                                        <input tipe="text" id="PRODUCTLINE" class="form-control" list="product_line"
                                            name="PRODUCTLINE" require="">
                                        <datalist id="product_line">
                                            <option>Motorcycle</option>
                                            <option>classic Cars</option>
                                            <option>Planes</option>
                                            <option>Ships</option>
                                        </datalist>
                                        </div>

                                        <div class="col-3">
                                        <label for="MSRP"><span class="material-icons-outlined">
                                            price_check
                                            </span> MSRP</label>
                                        <input type="number" id="MSRP" class="form-control" name="MSRP" required="">
                                        </div>

                                        <div class="col-4">
                                        <label for="PRODUCTCODE"><span class="material-icons-outlined">
                                            view_in_ar
                                            </span> Product code</label>
                                        <input type="text" id="PRODUCTCODE" class="form-control" name="PRODUCTCODE"
                                            required="">
                                        </div>

                                        <div class="col-4">
                                        <label for="CUSTOMERNAME"><span class="material-icons-outlined">
                                            person
                                            </span> Customer Name</label>
                                        <input type="text" id="CUSTOMERNAME" class="form-control" name="CUSTOMERNAME"
                                            required maxlength="150">
                                        </div>

                                        <div class="col-4">
                                        <label for="PHONE"><span class="material-icons-outlined">
                                            phone
                                            </span> Customer phone number</label>
                                        <input type="tel" id="PHONE" class="form-control" name="PHONE" required
                                            maxlength="15">
                                        </div>

                                        <div class="col-3">
                                        <label for="ADDRESSLINE1"><span class="material-icons-outlined">
                                            location_on
                                            </span> Adress 1</label>
                                        <input type="text" id="ADDRESSLINE1" class="form-control" name="ADDRESSLINE1"
                                            required="">
                                        </div>

                                        <div class="col-3">
                                        <label for="ADDRESSLINE2"><span class="material-icons-outlined">
                                            location_on
                                            </span> Adress 2</label>
                                        <input type="text" id="ADDRESSLINE2" class="form-control" name="ADDRESSLINE2">
                                        </div>

                                        <div class="col-3">
                                        <label for="CITY"><span class="material-icons-outlined">
                                            location_city
                                            </span> City</label>
                                        <input type="text" id="CITY" class="form-control" name="CITY" required
                                            maxlength="25">
                                        </div>
                                            
                                        <div class="col-3">
                                        <label for="STATE"> <span class="material-icons-outlined">
                                            location_on
                                            </span>State</label>
                                        <input type="text" id="STATE" class="form-control" name="STATE" maxlength="25">
                                        </div>

                                        <div class="col-4">
                                        <label for="POSTALCODE"><span class="material-icons-outlined">
                                            markunread_mailbox
                                            </span>
                                             Postalcode</label>
                                        <input type="number" id="POSTALCODE" class="form-control" name="POSTALCODE"
                                            required="">
                                        </div>


                                        <div class="col-4">
                                            <label for="COUNTRY"> <span class="material-icons-outlined">
                                                location_on
                                                </span>Country</label>
                                            <input type="text" id="COUNTRY" class="form-control" list="country"
                                                name="COUNTRY" required="">
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
                                        </div>

                                        <div class="col-4">
                                        <label for="TERRITORY"><span class="material-icons-outlined">
                                            location_on
                                            </span> Territory</label>
                                        <input type="text" id="TERRITORY" class="form-control" name="TERRITORY"
                                            required="">
                                        </div>

                                        <div class="col-6">
                                        <label for="CONTACTLASTNAME"><span class="material-icons-outlined">
                                            person
                                            </span> Contac lastname</label>
                                        <input type="text" id="CONTACTLASTNAME" class="form-control"
                                            name="CONTACTLASTNAME" required="">
                                        </div>
                                    
                                        <div class="col-6">
                                        <label for="CONTACTFIRSTNAME"><span class="material-icons-outlined">
                                            person
                                            </span> Contac firtsname</label>
                                        <input type="text" id="CONTACTFIRSTNAME" class="form-control"
                                            name="CONTACTFIRSTNAME" required="">
                                        </div>
                                        

                                        <div class=" col-4 ">
                                        <label for="DEALSIZE"><span class="material-icons-outlined">
                                            inventory_2
                                            </span> Deal size</label>
                                        <input tipe="text" id="DEALSIZE" class="form-control" list="deal_size"
                                            name="DEALSIZE" require="">
                                        <datalist id="deal_size">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </datalist>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="BtnUpdate" class="btn btn-success" data-dismiss="modal">
                            <span class="material-icons-outlined align-middle text-white" style="font-size: 18px">
                                    note_add
                                    </span>
                            Add New Sales
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- TABLE --}}
        <div id="table_refresh">
            <div class="row tabla container-fluid table_sales" style="overflow-x: scroll;">
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
                                        <td>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-warning btn-sm mb-1 pt-2 option_buttons"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal_edit{{$sale->id}}"><span
                                                        class=" material-icons-outlined icons_proyect_edit me-2 ">edit</span>
                                                    Edit
                                                </button>

                                                <form action="{{route('sales.destroy',$sale->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="btn btn-sm bg-danger d-flex text-white option_buttons">
                                                        <label for="delete"
                                                            class="pt-1 material-icons-outlined ">remove_circle</label>
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
                                        <td>
                                            {{-- EDIT MODAL --}}
                                            <div class="modal fade modal_edit" id="modal_edit{{$sale->id}}" tabindex="-1"
                                                aria-labelledby="modal_editLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modal_editLabel">Edit Sale</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="saleseditform" action="{{route('sales.update',$sale->id)}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div
                                                                    class="row row d-flex justify-content-center text-dark">
                                                                    <div class="col-sm">
                                                                        <div class="form-group row d-flex fw-light" style="font-size: 13px">
                                                                            
                                                                            <div class="col-3">
                                                                                <label for="ORDERNUMBER"><span class="material-icons-outlined">
                                                                                    description
                                                                                    </span> Order number</label>
                                                                                <input type="number" id="ORDERNUMBER" class="form-control" name="ORDERNUMBER" min="1"
                                                                                    value="{{$sale->ORDERNUMBER}}" required>
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="QUANTITYORDERED"><span class="material-icons-outlined">
                                                                                    description
                                                                                    </span> Quantity ordered</label>
                                                                                <input type="number" id="QUANTITYORDERED" class="form-control" name="QUANTITYORDERED"
                                                                                    min="1" value="{{$sale->QUANTITYORDERED}}" required="">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="PRICEEACH"><span class="material-icons-outlined">
                                                                                    attach_money
                                                                                    </span>Price each</label>
                                                                                <input type="text" id="PRICEEACH" class="form-control" name="PRICEEACH" min="0"
                                                                                    required="" value="{{$sale->PRICEEACH}}">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="ORDERLINENUMBER"><span class="material-icons-outlined">
                                                                                    description
                                                                                    </span> Order line number</label>
                                                                                <input type="number" id="ORDERLINENUMBER" class="form-control" name="ORDERLINENUMBER"
                                                                                    min="1" required="" value="{{$sale->ORDERLINENUMBER}}">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="SALES"><span class="material-icons-outlined">
                                                                                    description
                                                                                    </span> Sales</label>
                                                                                <input type="text" id="SALES" class="form-control" name="SALES" min="1" required=""
                                                                                    value="{{$sale->SALES}}">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="ORDERDATE"><span class="material-icons-outlined">
                                                                                    calendar_month
                                                                                    </span> Order date</label>
                                                                                <input type="text" id="ORDERDATE" class="form-control" name="ORDERDATE" required=""
                                                                                    placeholder="ORDER DATE" value="{{$sale->ORDERDATE}}" >
                                                                            </div>
                                                                                
                                                                            <div class="col-3">
                                                                                <label for="STATUS"><span class="material-icons-outlined">
                                                                                    local_shipping
                                                                                    </span> Shipping status</label>
                                                                                <input tipe="text" id="STATUS" class="form-control" list="estado" name="STATUS"
                                                                                    require="" value="{{$sale->STATUS}}">
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

                                                                            <div class="col-3">
                                                                                <label for="QTR_ID"><span class="material-icons-outlined">
                                                                                    inventory_2
                                                                                    </span> QTR id</label>
                                                                                <input type="number" id="QTR_ID" class="form-control" name="QTR_ID" required=""
                                                                                    value="{{$sale->QTR_ID}}">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="MONTH_ID"><span class="material-icons-outlined">
                                                                                    date_range
                                                                                    </span> Mont</label>
                                                                                <input type="number" id="MONTH_ID" class="form-control" name="MONTH_ID" min="1" max="12"
                                                                                    required="" placeholder="insert a number betwent 1-12." value="{{$sale->MONTH_ID}}" disabled>
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="YEAR_ID"><span class="material-icons-outlined">
                                                                                    calendar_today
                                                                                    </span> Year id</label>
                                                                                <input type="number" id="YEAR_ID" class="form-control" name="YEAR_ID" max="2021"
                                                                                    min="2000" required="" value="{{$sale->YEAR_ID}}" disabled>
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="PRODUCTLINE"><span class="material-icons-outlined">
                                                                                    view_in_ar
                                                                                    </span> Product line</label>
                                                                                <input tipe="text" id="PRODUCTLINE" class="form-control" list="product_line"
                                                                                    name="PRODUCTLINE" require="" value="{{$sale->PRODUCTLINE}}">
                                                                            <datalist id="product_line">
                                                                                <option>Motorcycle</option>
                                                                                <option>classic Cars</option>
                                                                                <option>Planes</option>
                                                                                <option>Ships</option>
                                                                            </datalist>
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="MSRP"><span class="material-icons-outlined">
                                                                                    price_check
                                                                                    </span> MSRP</label>
                                                                                <input type="number" id="MSRP" class="form-control" name="MSRP" required=""
                                                                                    value="{{$sale->MSRP}}">
                                                                            </div>

                                                                            <div class="col-4">
                                                                                <label for="PRODUCTCODE"><span class="material-icons-outlined">
                                                                                    view_in_ar
                                                                                    </span> Product code</label>
                                                                                <input type="text" id="PRODUCTCODE" class="form-control" name="PRODUCTCODE" required=""
                                                                                    value="{{$sale->PRODUCTCODE}}">
                                                                            </div>
                                                                            
                                                                            <div class="col-4">
                                                                                <label for="CUSTOMERNAME"><span class="material-icons-outlined">
                                                                                    person
                                                                                    </span> Customer Name</label>
                                                                                <input type="text" id="CUSTOMERNAME" class="form-control" name="CUSTOMERNAME" required
                                                                                    maxlength="150" value="{{$sale->CUSTOMERNAME}}">
                                                                            </div>

                                                                            <div class="col-4">
                                                                                <label for="PHONE"> <span class="material-icons-outlined">
                                                                                    phone
                                                                                    </span> Customer phone number</label>
                                                                                <input type="tel" id="PHONE" class="form-control" name="PHONE" required maxlength="15"
                                                                                    value="{{$sale->PHONE}}">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="ADDRESSLINE1"><span class="material-icons-outlined">
                                                                                    location_on
                                                                                    </span> Adress 1</label>
                                                                                <input type="text" id="ADDRESSLINE1" class="form-control" name="ADDRESSLINE1"
                                                                                    required="" value="{{$sale->ADDRESSLINE1}}">
                                                                                </div>

                                                                            <div class="col-3">
                                                                                <label for="ADDRESSLINE2"><span class="material-icons-outlined">
                                                                                    location_on
                                                                                    </span> Adress 2</label>
                                                                                <input type="text" id="ADDRESSLINE2" class="form-control" name="ADDRESSLINE2"
                                                                                    value="{{$sale->ADDRESSLINE2}}">
                                                                            </div>

                                                                            <div class="col-3">
                                                                                <label for="CITY"><span class="material-icons-outlined">
                                                                                    location_city
                                                                                    </span> City</label>
                                                                                <input type="text" id="CITY" class="form-control" name="CITY" required maxlength="25"
                                                                                    value="{{$sale->CITY}}">
                                                                            </div>
                                                                                    
                                                                            <div class="col-3">
                                                                                <label for="STATE"><span class="material-icons-outlined">
                                                                                    location_on
                                                                                    </span> State</label>
                                                                                <input type="text" id="STATE" class="form-control" name="STATE" maxlength="25"
                                                                                    value="{{$sale->STATE}}">
                                                                            </div>

                                                                            <div class="col-4">
                                                                                <label for="POSTALCODE"><span class="material-icons-outlined">
                                                                                    markunread_mailbox
                                                                                    </span>
                                                                                     Postalcode</label>
                                                                                <input type="number" id="POSTALCODE" class="form-control" name="POSTALCODE" required=""
                                                                                    value="{{$sale->POSTALCODE}}">
                                                                            </div>

                                                                            <div class="col-4">
                                                                                <label for="COUNTRY"><span class="material-icons-outlined">
                                                                                    location_on
                                                                                    </span> Country</label>
                                                                                <input type="text" id="COUNTRY" class="form-control" list="country" name="COUNTRY" required=""
                                                                                    value="{{$sale->COUNTRY}}">
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
                                                                            </div>

                                                                            <div class="col-4">
                                                                                <label for="TERRITORY"><span class="material-icons-outlined">
                                                                                    location_on
                                                                                    </span> Territory</label>
                                                                                <input type="text" id="TERRITORY" class="form-control" name="TERRITORY" required=""
                                                                                    value="{{$sale->TERRITORY}}">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <label for="CONTACTLASTNAME"><span class="material-icons-outlined">
                                                                                    person
                                                                                    </span> Contac lastname</label>
                                                                                <input type="text" id="CONTACTLASTNAME" class="form-control" name="CONTACTLASTNAME"
                                                                                    required="" value="{{$sale->CONTACTLASTNAME}}">
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <label for="CONTACTFIRSTNAME"><span class="material-icons-outlined">
                                                                                    person
                                                                                    </span> Contac firtsname</label>
                                                                                <input type="text" id="CONTACTFIRSTNAME" class="form-control" name="CONTACTFIRSTNAME"
                                                                                    required="" value="{{$sale->CONTACTFIRSTNAME}}">
                                                                            </div>

                                                                            <div class="col-4 mb-5">
                                                                                <label for="DEALSIZE"><span class="material-icons-outlined">
                                                                                    inventory_2
                                                                                    </span> Deal size</label>
                                                                                <input tipe="text" id="DEALSIZE" class="form-control" list="deal_size" name="DEALSIZE"
                                                                                    require="" value="{{$sale->DEALSIZE}}">
                                                                                <datalist id="deal_size">
                                                                                    <option>Small</option>
                                                                                    <option>Medium</option>
                                                                                    <option>Large</option>
                                                                                </datalist>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary"><span
                                                                            class="material-icons-outlined align-middle text-white"
                                                                            style="font-size: 20px">
                                                                            save
                                                                        </span> Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <script>
        $(document).ready(function () {

            $('#salesnewform').submit(function (event) {
                event.preventDefault();

                const formData = $(this).serializeArray()
                    .reduce(function (a, z) {
                        a[z.name] = z.value;
                        return a;
                    }, {});


                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (data) {
                        $('#salesnewform')[0].reset();
                        $('#modal_created').modal('hide');
                        // $("#table_refresh").load(" #table_refresh");
                        window.location.reload();
                    },
                    error: function (data) {
                        console.log('error')
                    }
                })

            });

            $('.saleseditform').submit(function (event) {
                event.preventDefault();
                
                const formData = $(this).serializeArray()
                    .reduce(function (a, z) {
                        a[z.name] = z.value;
                        return a;
                    }, {});
                $.ajax({
                    type: 'PUT',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (data) {
                        $('#salesnewform')[0].reset();
                        $('.modal_edit').modal('hide');
                        // $("#table_refresh").load(" #table_refresh")
                        window.location.reload();     
                    },
                    error: function (data) {
                        console.log('error')
                    }
                }) 
            });
        });
    </script>
</body>

</html>
