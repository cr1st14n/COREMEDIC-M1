<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- stilo de tabla html -->
    <style>
        .header {
            background-color: #327a81;
            color: white;
            font-size: 1.5em;
            padding: 0.1rem;
            text-align: center;
            text-transform: uppercase;
        }

        img {
            border-radius: 50%;
            height: 50px;
            width: 50px;
        }

        .table-users {
            border: 1px solid #327a81;
            border-radius: 10px;
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            max-width: calc(100% - 2em);
            margin: 1em auto;
            overflow: hidden;
            width: 800px;
        }

        table {
            width: 100%;
        }

        table td,
        table th {
            color: #2b686e;
            padding: 5px;
            size: 10px;
            font-size: larger;
            font-weight: 800;
        }

        table td {
            text-align: center;
            vertical-align: middle;
            font-size: 11;
        }

        table td:last-child {
            font-size: 0.95em;
            line-height: 1.4;
            text-align: left;
        }

        table th {
            background-color: #daeff1;
            font-weight: 300;
        }

        table tr:nth-child(2n) {
            background-color: white;

        }

        table tr:nth-child(2n + 1) {
            background-color: #edf7f8;
        }

        @media screen and (max-width: 700px) {

            table,
            tr,
            td {
                display: block;
                size: 15;
            }

            td:first-child {
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                width: 100px;
            }

            td:not(:first-child) {
                clear: both;
                margin-left: 100px;
                padding: 4px 20px 4px 90px;
                position: relative;
                text-align: left;
            }

            td:not(:first-child):before {
                color: #91ced4;
                content: "";
                display: block;
                left: 0;
                position: absolute;
            }

            td:nth-child(2):before {
                content: "Name:";
            }

            td:nth-child(3):before {
                content: "Email:";
            }

            td:nth-child(4):before {
                content: "Phone:";
            }

            td:nth-child(5):before {
                content: "Comments:";
            }

            tr {
                padding: 10px 0;
                position: relative;
            }

            tr:first-child {
                display: none;
            }
        }

        @media screen and (max-width: 500px) {
            .header {
                background-color: transparent;
                color: white;
                font-size: 2em;
                font-weight: 700;
                padding: 0;
                text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
            }

            img {
                border: 3px solid;
                border-color: #daeff1;
                height: 100px;
                margin: 0.5rem 0;
                width: 100px;
            }

            td:first-child {
                background-color: #c8e7ea;
                border-bottom: 1px solid #91ced4;
                border-radius: 10px 10px 0 0;
                position: relative;
                top: 0;
                -webkit-transform: translateY(0);
                transform: translateY(0);
                width: 100%;
            }

            td:not(:first-child) {
                margin: 0;
                padding: 5px 1em;
                width: 100%;
            }

            td:not(:first-child):before {
                font-size: 0.8em;
                padding-top: 0.3em;
                position: relative;
            }

            td:last-child {
                padding-bottom: 1rem !important;
            }

            tr {
                background-color: white !important;
                border: 1px solid #6cbec6;
                border-radius: 10px;
                box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
                margin: 0.5rem 0;
                padding: 0;
            }

            .table-users {
                border: none;
                box-shadow: none;
                overflow: visible;
            }

            .logo1 {
                float: right;
                background-color: pink;
                color: red;
                font-family: monospace;
                font-size: 400%;
            }
        }
    </style>
    <style type="text/css">
        /* html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        } */

        .modal {
            background: dodgerblue;
            height: 1px;
            overflow: hidden;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.5s ease 0.5s,
                height 0.5s ease;
            width: 0;
        }

        .content {
            color: white;
            font-family: 'Consolas', arial, sans-serif;
            font-size: 2em;
            position: absolute;
            top: 50%;
            text-align: center;
            transform: translate3d(0, -50%, 0);
            transition: color 0.5s ease;
            width: 100%;
        }

        label {
            color: dodgerblue;
            cursor: pointer;
            font-family: 'Consolas', arial, sans-serif;
            font-size: 2em;
            position: fixed;
            left: 50%;
            top: 50%;
            text-transform: uppercase;
            transform: translate(-50%, -50%);
            transition: color 0.5s ease 0.5s;
        }

        input {
            cursor: pointer;
            height: 0;
            opacity: 0;
            width: 0;

            &:focus {
                outline: none;
            }
        }

        input:checked {
            height: 40px;
            opacity: 1;
            position: fixed;
            right: 20px;
            top: 20px;
            z-index: 1;
            -webkit-appearance: none;
            width: 40px;

            &::after,
            &:before {
                border-top: 1px solid #FFF;
                content: '';
                display: block;
                position: absolute;
                top: 50%;
                transform: rotate(45deg);
                width: 100%;
            }

            &::after {
                transform: rotate(-45deg);
            }
        }

        input:checked+label {
            color: #FFF;
            transition: color 0.5s ease,
        }

        input:checked~.modal {
            height: 100%;
            width: 100%;
            transition: width 0.5s ease,
                height 0.5s ease 0.5s;

            .content {
                color: #FFF;
                transition: color 0.5s ease 0.5s;
            }
        }
    </style>
    <style type="text/css">
        button {
            cursor: pointer;
            padding: 0 6px;
            min-width: 88px;
            min-height: 36px;
        }

        .controls {
            padding: 24px;
        }

        .modal-container {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.15);
            opacity: 0;
            visibility: hidden;
        }

        .modal-dialog {
            width: 70vmin;
            height: 70vmin;
            position: relative;
            overflow: hidden;
        }

        .modal-svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .modal-polygon {
            fill: #ab47bc;
        }

        .modal-content {
            position: relative;
            top: 0;
            left: 0;
            padding: 24px;
            visibility: hidden;
            opacity: 0;
            color: rgba(255, 255, 255, 0.87);
        }
    </style>
    <style>
        /* body {
            margin: 0;
            padding: 0;
        } */

        #video-background {
            height: 100%;
            position: fixed;
            width: 100%;
        }
    </style>
</head>

<body>
    <iframe id="video-background" width="660" height="315" src="//www.youtube.com/embed/9QNUXxuwt1Y?
    rel=0&amp;
    controls=0&amp;
    showinfo=0&amp;
    autoplay=1&amp;
    html5=0&amp;
    allowfullscreen=true&amp;
    wmode=transparent" frameborder="0" allowfullscreen></iframe>
    <div class="row">
        <div class="col-lg-11" align="center">
            <h1 style="color: white;"> <strong> CENTRO DE SALUD JESUS OBRERO - HORARIOS DE ATENCIÓN</strong></h1>

        </div>
        <div class="col-lg-1">
            <img class="logo1" src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="">
        </div>


        <div class="col-lg-4">
            <div class="table-users">
                <div class="header">Medina Familiar</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/med1.png') }}" alt="" /></td>
                        <td>Dr. Montecinos</td>
                        <td>Lunes, Martes, Jueves y Viernes
                            <hr> Miercoles</td>
                        <td>Hrs 9:30am - 13:30
                            <hr>Hrs 14:30 - 20:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Mollinedo</td>
                        <td>Lunes a Sabado </td>
                        <td>Hrs 9:00 - 14:00</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Ginecologia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Galvez</td>
                        <td>Lunes, Miercoles y Viernes </td>
                        <td>Hrs 9:00 - 14:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Pinaya</td>
                        <td>Martes y Jueves</td>
                        <td>9:00 - 13:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Romero</td>
                        <td>Martes a Viernes</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Gutierrez</td>
                        <td>Martes y Jueves Turno tarde </td>
                        <td>Hrs 15:00</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Traumatologia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Quispe</td>
                        <td>Lunes, Martes, Miercoles, Viernes, Sabado </td>
                        <td>Hrs 8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Guzman</td>
                        <td>Lunes, Miercoles, Viernes
                            <hr>jueves </td>
                        <td>Hrs 15:00
                            <hr> Hrs 9:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Huchani</td>
                        <td>Martes, Jueves </td>
                        <td>Hrs 15:00</td>
                    </tr>
                </table>
            </div>


        </div>
        <div class="col-lg-4">
            <div class="table-users">
                <div class="header">Medicina General</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Huallani</td>
                        <td>Lunes A Viernes </td>
                        <td>Hrs 14:00 - 20:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Villalobos</td>
                        <td>Miercoles,Sabado </td>
                        <td>Hrs 8:00 - 12:00</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Gastroenterologia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Flores</td>
                        <td>Martes, Jueves </td>
                        <td>Hrs 9:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Morochi</td>
                        <td>Lunes Miercoles</td>
                        <td>Hrs 9:00 </td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Otorrinolaringologia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. LLanos</td>
                        <td>Lunes </td>
                        <td>Hrs 9:00 - 11:00</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Fisioterapia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Lic. Irma Rojas</td>
                        <td>Lunes a Viernes </td>
                        <td>Hrs 9:00 - 13:00</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Dermatologia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Salazar</td>
                        <td>Miercoles </td>
                        <td>Hrs 10:30 - 12:00</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="table-users">
                <div class="header">Pediatria</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Cortez</td>
                        <td>Lunes a Viernes </td>
                        <td>Hrs 8:00 a 12:00</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dra. Mamani</td>
                        <td>Martes a Viernes </td>
                        <td>Hrs 12:30 - 15:30</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header">Cirugia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Lazo</td>
                        <td>Lunes a Viernes </td>
                        <td>Hrs 9:30</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Santander</td>
                        <td>Lunes, Martes, Miercoles y Viernes</td>
                        <td>Hrs 12:00 17:00</td>
                    </tr>
                </table>
            </div>

            <div class="table-users">
                <div class="header">Urologia</div>
                <table cellspacing="0">
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Henning</td>
                        <td>Martes y Jueves </td>
                        <td>Hrs 8:00 </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('plantillaPantalla/images/logo_csjo.jpg') }}" alt="" /></td>
                        <td>Dr. Candia</td>
                        <td> Lunes y Viernes </td>
                        <td>Hrs 9:00</td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <div class="header" style="background-color: #D2F72C; color:black">Costo del servicio</div>
                <table cellspacing="0">
                    <tr>
                        <td>Consulta medica</td>
                        <td>60 Bs.- </td>
                    </tr>
                    <tr>
                        <td>Control Medico Programado</td>
                        <td> 40 Bs.- </td>
                    </tr>
                    <tr>
                        <td>Consulta por emergencias</td>
                        <td> 60 Bs.- </td>
                    </tr>
                </table>
            </div>
            <div class="table-users">
                <table cellspacing="0">
                    <tr>
                        <td>Servicio de emergencias las 24 Horas</td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="col-lg-12">
            <div style="text-align:right;padding:1em 0;">
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FLa_Paz" width="100%" height="540" frameborder="0" seamless></iframe>
            </div>

        </div>
        <!-- <div class="col-lg-12">
            <br>
            <div style="text-align:center;">
                <img style="width:'100%' ;height:'200px'" src="{{ asset('plantillaPantalla/images/fotoMedico.png') }}"  alt="">
            </div>
            <br>
        </div> -->


    </div>

    <section class="controls">
        <button id="open-button">Open</button>
    </section>


    <section id="modal-1" class="modal-container">

        <div class="modal-dialog">
            <svg class="modal-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon class="modal-polygon" />
            </svg>

            <div class="modal-content">
                <h2>ESTE SERA UN ANUNCIO </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis excepturi ut inventore consectetur quos rerum quibusdam accusamus, labore itaque assumenda consequatur cum saepe velit quidem ipsa facilis. Repellendus, reiciendis quam?</p>
            </div>

        </div>
    </section>
    <input id='button' type='checkbox'>
    <label for='button'>Click Me!</label>
    <div class='modal'>
        <div class='content'>Pure CSS Modal! No JS!</div>
    </div>

    <!-- <script type="text/javascript" src="js/libs/gsap/TweenMax.min.js"></script> -->
    <script src="{{ asset('plantillaPantalla/modalAnimacion2/js/libs/gsap/TweenMax.min.js')}}"></script>

    <!-- modalAnimacion2 -->


    <script type="text/javascript">
        console.clear();

        var body = document.body;
        var modal = createModal(document.querySelector("#modal-1"));
        var openButton = document.querySelector("#open-button");

        openButton.addEventListener("click", function() {
            modal.open();
        });

        function createModal(container) {

            var content = container.querySelector(".modal-content");
            var dialog = container.querySelector(".modal-dialog");
            var polygon = container.querySelector(".modal-polygon");
            var svg = container.querySelector(".modal-svg");

            var point1 = createPoint(45, 45);
            var point2 = createPoint(55, 45);
            var point3 = createPoint(55, 55);
            var point4 = createPoint(45, 55);

            var animation = new TimelineMax({
                    onReverseComplete: onReverseComplete,
                    onStart: onStart,
                    paused: true
                })
                .to(point1, 0.3, {
                    x: 15,
                    y: 30,
                    ease: Power4.easeIn
                }, 0)
                .to(point4, 0.3, {
                    x: 5,
                    y: 80,
                    ease: Power2.easeIn
                }, "-=0.1")
                .to(point1, 0.3, {
                    x: 0,
                    y: 0,
                    ease: Power3.easeIn
                })
                .to(point2, 0.3, {
                    x: 100,
                    y: 0,
                    ease: Power2.easeIn
                }, "-=0.2")
                .to(point3, 0.3, {
                    x: 100,
                    y: 100,
                    ease: Power2.easeIn
                })
                .to(point4, 0.3, {
                    x: 0,
                    y: 100,
                    ease: Power2.easeIn
                }, "-=0.1")
                .to(container, 1, {
                    autoAlpha: 1
                }, 0)
                .to(content, 1, {
                    autoAlpha: 1
                })

            var modal = {
                animation: animation,
                container: container,
                content: content,
                dialog: dialog,
                isOpen: false,
                open: open,
                close: close
            };

            body.removeChild(container);

            function onClick() {

                if (modal.isOpen) {
                    close();
                }
            }

            function onStart() {
                body.appendChild(container);
                container.addEventListener("click", onClick);
            }

            function onReverseComplete() {
                container.removeEventListener("click", onClick);
                body.removeChild(container);
            }

            function open() {
                modal.isOpen = true;
                animation.play().timeScale(2);
            }

            function close() {
                modal.isOpen = false;
                animation.reverse().timeScale(2.5);
            }

            function createPoint(x, y) {
                var point = polygon.points.appendItem(svg.createSVGPoint());
                point.x = x || 0;
                point.y = y || 0;
                return point;
            }

            return modal;
        }
    </script>


</body>

</html>