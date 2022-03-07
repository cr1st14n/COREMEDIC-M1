<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="{{ asset('factura/style.css') }}">
</head>

<body id="seleccion">
  <div class="ticket">
    <div align="center">
      <a href="#"><img src="{{ asset('assets/img/logo_ori.png')}}"></a>
    </div>
    <p class="centrado">
    <h2 class="centrado ">TRAUMA MEDICAL</h2>
    </p>

    <hr style="background-color:#000000">
    <h3 class="centrado">TICKET DE ANTENCION</h3>

    <p class="centrado">
      Alta especialidad en reemplazos articulares <br>
      Av. Arica, Esquina Calle Fernando Romero <br>
      Edificio el Faro Nro 65
    </p>
    <hr>
    <tr>
    </tr><br>
    <tr>
      <td>Fecha:{{$date}}</td>
    </tr><br>
    <tr>
        <td>Señor(es): {{ $paciente->pa_nombre}} {{ $paciente->pa_appaterno}} {{ $paciente->pa_apmaterno}}</td><br>
        <td>CI: {{ $paciente->pa_ci}}</td>
    </tr>
    <hr>
    <h3 style="text-align: center;">DETALLE DEL SERVICIO</h3>
    <table>
      <thead>
        <tr>
          <th class="cantidad" style="width: 90%;" >Detalle</th>
          <th class="precio"> Total</th>
        </tr>
      </thead>
      <tbody>
          <td> {{$atencion->ate_procedimiento}} {{$esp->nombre}} <br> Dr. {{$med->usu_nombre}} {{$med->usu_appaterno}}</td>
          <td>100 Bs.-</td>

      </tbody>
    </table>
    <hr>
    <p style="text-align: right;">Precio Total: 100 Bs.-</p>
    <div class="" style="text-align:center">
    </div>
    <p class="centrado">
      <Span>Forma de Pago</Span> Contado
    </p>
  </div>

  <script type="text/javascript">
    // $(document).ready(function(){
    //   window.print();
    setTimeout(() => {
      window.close();
    }, 300);
    // });
  </script>
</body>

</html>