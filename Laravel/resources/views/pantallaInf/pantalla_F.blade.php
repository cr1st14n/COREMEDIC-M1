<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;
            background-color: black;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }


        thead {
            font-size: 25px;
            background-color: black;
            color: white;
        }

        tbody {
            font-size: larger;
        }

        .bod td:nth-child(1) {
            color: #E0BB82;
        }

        .bod td:nth-child(2) {
            color: yellow;
        }

        .bod td:nth-child(3) {
            color: #A5F998;
        }

        .bod td:nth-child(4) {
            font-size: 18px;
        }

        .bod tr:nth-child(even) {
            background-color: #212121;
        }

        .bod tr:nth-child(odd) {
            background-color: #0F0F0F;
        }

        h1 {
            color: yellow;
            text-align: center;
            /* text-shadow:
                3px 3px 1px red,
                5px 5px 2px yellow,
                8px 8px 3px blue;
            ; */
        }

        #horasis {
            color: yellow;
        }

        #mod_1 {
            opacity: 70.5;
        }

        #mod_1_1 {
            color: black;
        }

        .modalA {
            color: black;
        }

        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100%;
        }

        #title1 {
            color: black;
        }
    </style>

</head>

<body>
    <div class="row">
        <div class="col-lg-10" onclick="act_tablaCOntenido_1()">

            <h1>CENTRO DE SALUD JESUS OBRERO - INFORMACION</h1>
        </div>
        <div class="col-lg-2">

            <h3 id="horasis"></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <table with=95% class="table table-sm" style="color: white;">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                        <th>Medico</th>
                        <th>Dias</th>
                        <th>Horario</th>
                        <th>Consulta</th>
                    </tr>
                </thead>
                <tbody id="bod1" class="bod">
                    <tr>
                        <td>Medicina Familiar</td>
                        <td>Dr. Montecinos</td>
                        <td>L, Ma, J, V
                            <hr> Mi.
                        </td>
                        <td>Hrs 10:30am - 13:30
                            <hr>Hrs 14:30 - 20:00
                        </td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Medicina Familiar</td>
                        <td>Dr. Marquez</td>
                        <td>L. a V. </td>
                        <td>Hrs 9:00 - 13:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td rowspan="3">
                            <p> Ginecologia</p>
                        </td>
                        <td>Dra. Galvez</td>
                        <td>L, Ma, Mi, V </td>
                        <td>Hrs 8:30 - 14:30</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Dra. Cori</td>
                        <td>Ma. a V.</td>
                        <td>10:00 - 12:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Dra. Mamani</td>
                        <td>L. a S. </td>
                        <td>14:00 a 18:00</td>
                        <td>70 Bs.-</td>
                    </tr>

                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Quispe</td>
                        <td>L, Ma, Mi, V, S, </td>
                        <td>Hrs 8:00 - 12:00</td>
                        <td>70 BS.-</td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Guzman</td>
                        <td>L, Mi, V.
                            <hr>J.
                        </td>
                        <td>Hrs 15:00
                            <hr> Hrs 9:00
                        </td>
                        <td>70 BS.-</td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Huchani</td>
                        <td>Ma, J. </td>
                        <td>Hrs 15:00</td>
                        <td>70 BS.-</td>
                    </tr>

                    <tr>
                        <td>Medicina Interna</td>
                        <td>Dr. Mamani</td>
                        <td>V.</td>
                        <td>Hrs 15:00</td>
                        <td>140 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Odontologia</td>
                        <td>Dra. Adriana Tapia</td>
                        <td>L. a V. </td>
                        <td>9:00 - 13:00</td>
                        <td>10 Bs.-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-5">
            <table with=100% class="table table-sm" style="color: white;">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                        <th>Medico</th>
                        <th>Dias</th>
                        <th>Horario</th>
                        <th>Consulta</th>
                    </tr>
                </thead>
                <tbody id="bod2" class="bod">
                    <tr>
                        <td>Medicina General</td>
                        <td>Dr. Huallani</td>
                        <td>L. A V. </td>
                        <td>Hrs 14:00 - 20:00</td>
                        <td>60 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Medicina General</td>
                        <td>Dra. Villalobos</td>
                        <td>M, S. </td>
                        <td>Hrs 8:00 - 13:00</td>
                        <td>60 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Gastroenterologia</td>
                        <td>Dr. Flores</td>
                        <td>Ma, J. </td>
                        <td>Hrs 14:00 - 16:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Gastroenterologia</td>
                        <td>Dr. Ayoroa</td>
                        <td>L. a Mi.</td>
                        <td> 12:30 </td>
                        <td>70 Bs.-</td>
                    </tr>

                    <tr>
                        <td>Fisioterapia</td>
                        <td>Lic. Irma Rojas</td>
                        <td>L. a V. </td>
                        <td>Hrs 9:00 - 13:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Dermatologia</td>
                        <td>Dr. Salazar</td>
                        <td>M. y V. </td>
                        <td>Previa Cordinación</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Otorrino</td>
                        <td>Dra. Fuentelsaz</td>
                        <td>J.</td>
                        <td>9:30</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Cardiologia</td>
                        <td>Dr. Cadena</td>
                        <td>J.</td>
                        <td>Hrs 16:00</td>
                        <td>120 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Pediatria</td>
                        <td>Dra. Cortez</td>
                        <td>L. a V. </td>
                        <td>Hrs 8:00 a 12:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Cirugia</td>
                        <td>Dr. Lazo</td>
                        <td>L. a V. </td>
                        <td>Hrs 9:30</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Cirugia</td>
                        <td>Dr. Santander</td>
                        <td>L, M, Mi. y V.</td>
                        <td>Hrs 12:00 17:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Urologia</td>
                        <td>Dr. Henning</td>
                        <td>J. </td>
                        <td>Previa cordinación </td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Dr. Candia</td>
                        <td>L. y V. </td>
                        <td>Hrs 10:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-2">
            <table with=100% class="table table-sm" style="color: white;">

                <tbody class="bod">
                    <tr>
                        <td>Consulta de especialidades</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Prueba rapida COVID-19</td>
                        <td>250 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Prueba ELISA COVID-19</td>
                        <td>500 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Servicio de emergencias</td>
                        <td>24 horas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#md-321">Small modal</button> -->

    <div class="modal fade modalA" id="modalA" tabindex="-1" role="dialog">
        <img id="img_pub" src="" alt="" width="90%" height="90%" style="border:90px solid  transparent ">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/asincrono/PantInfo_pantallaTV.js') }}"></script>


</body>

</html>