<!---This Page was c0ded by Isa Iman Muhammad - 20051397019-->
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=dedvice-width">
        <title>
            Form Konversi Suhu
        </title>
        <style>
            html{
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
            }
            body {
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(8,25,131,1) 20%, rgba(3,142,209,1) 80%, rgba(0,212,255,1) 100%);
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;

            }
            .paragraf {
                font-family: comic sans MS;
                font-size: 30px;
                text-align: center;
                margin-top: -50px;
            }
            .container {
                margin-top: 120px;
                width: 330px;
                background: #fff;
                text-align: center;
                border-radius: 5px;
                padding: 50px 50px 20px 50px;
                box-shadow: 2px 5px 5px rgba(0,0,0,0.7);
            }
            .container .form-outer{
                width: 100%;
                overflow: hidden;
            }
            .container .form-outer form {
                width: 400%;
                display: flex;

            }
            .form-outer form .page {
                width: 25%;
                transition: margin-left 0.3s ease-in-out;

            }
            .form-outer form .page .title{
                font-size: 20px;
                font-weight: 500;
                text-align: left;
                }
            .form-outer form .page .field{
                width: 330px;
                height: 45px;
                margin :0;
                /* display: flex; */
                position: relative;
            }
            form .page .field .label{
                position: absolute;
                top: -30px;
                font-weight: 500;
            }
            form .page .field input{
                width: 93%;
                height: 100%;
                border-radius: 5px;
                border: 1px solid lightgrey;
                padding-left: 15px;
                font-size: 18px;
                
            }
            form .page .field select{
                width: 100%;
                padding-left: 130px;
                font-size: 17px;
                font-weight: 500;
                padding : 15px;
            }
            form .page .field button{
                width: 100%;
                height: calc(100% +
                5px);
                border: 2px solid #1c87c9;
                background: #1c87c9;
                border-radius:5px;
                margin-top: -20px;
                cursor: pointer;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: 0.5s ease;
            }
            form .page .btn button{
                margin-top: -20px!important;
            }
            form .page .field button:hover{
                background-color: white;             
                color: #1c87c9;
                cursor: pointer;
            }
            form .page .btn button.prev{
                margin-right: 3px;
                font-size: 17px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="paragraf">
                <p><b>Form Konverter Suhu</b></p>
            </div>
            <br>
            <div class="form-outer">
            <form method="POST" action="">
                <div class="page slide-page">
                    <div class="title">Suhu : <br></div> <br>
                    <div class="field">
                        <div class="field"><input type="number" name="celcius" placeholder="Masukkan derajat Celcius" required> </div>
                    </div>
			<br><br>
			<div class="title">Konversi ke :</div><br>
            <div class="field">
                <select name="pilihsuhu">
                            <option>Celsius</option>
                            <option>Reamur</option>
                            <option>Farenheit</option>
                            <option>Kelvin</option>
                            <option>Rankine</option>
                            <option>Delisle</option>
                            <option>Romer</option>
                            <option>Newton</option>
                        </select>
            </div>
			<br><br>
            <div class="field">
                <button class="submit" type="submit" name="konversi" value="konversi">Klik Untuk Konversi</button>
            </div>
            </div>
            </form>
            <?php

                $celsius 	= 	$_POST['celcius'];
                $suhu 		= 	$_POST['pilihsuhu'];
                $konversi 	= 	$_POST['konversi'];


                if(isset($konversi)){

                    switch ($suhu){

                        case "Celsius":
                        echo "Hasil Konversi : " .floatval($celsius) . " derajat Celcius";
                        break;

                        case "Reamur":
                        echo "Hasil Konversi : " .floatval($celsius * (4/5)) . " derajat Reamur";
                        break;

                        case "Farenheit":
                        echo "Hasil Konversi : " .floatval($celsius * (9/5) + 32) . " derajat Fahrenheit";
                        break;

                        case "Kelvin":
                        echo "Hasil Konversi : " .floatval($celsius + 273) . " derajat Kelvin";
                        break;

                        case "Rankine":
                        echo "Hasil Konversi : " .floatval(($celsius + 273)*9/5) . " derajat Rankine";
                        break;

                        case "Delisle":
                        echo "Hasil Konversi : " .floatval(100-($celsius*3/2)) . " derajat Delisle";
                        break;

                        case "Romer":
                        echo "Hasil Konversi : " .floatval($celsius * 21/40 * 7.5) . " derajat Romer";
                        break;

                        case "Newton":
                        echo "Hasil Konversi : " .floatval($celsius * 33/100) . " Newton";
                        break;

                    }
                }else{
                    echo "ANDA HARUS MEMILIH";
                }

            ?>
            
            </div>

        </div>
        
    </body>
</html>
