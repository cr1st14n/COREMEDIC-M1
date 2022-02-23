// *+++++++++++++ VARIABLES DE INICIO START
var contFila = 0;

// *+++++++++++++ VARIABLES DE INICIO END

function listPaciCola(data) {
  var html = data.map(function (PC, inex) {
    if (PC.ate_paog == "pendiente") {
      var pago = `<span class="label label-warning">${PC.ate_pago}</span>`;
    } else {
      var pago = `<span class="label label-success">${PC.ate_pago}</span>`;
    }
    return `<tr>
                    <th>${PC.pa_hcl} </th>
                    <th>${PC.pa_ci} </th>
                    <th>${PC.pa_nombre} ${PC.pa_appaterno} ${PC.pa_apmaterno} </td>
                    <TH>${PC.nombre} </TH>
                    <th>${PC.ps_nombre} ${PC.ps_appaterno} ${PC.ps_apmaterno}</th>
                    <th>${PC.ate_procedimiento}</th>
                    <TH>${PC.ate_num_ticked} </TH>
                    <TH>${PC.time_at} </TH>
                    <th>${PC.ate_turno}</th>
                    <th>${pago}</th>
                    <td>
                        <span class="tooltip-area">
                        <a href="{{route('ate_pago',$PC->id)}} " class="btn btn-default btn-sm" title="ON/OFF"><i class="fa  fa-thumb-tack"></i></a>
                        </span>
                    </td>
                </tr>`;
  });
}

function actListPaciCola() {
  if (contFila == 0 ) {
    datosS={cont:0};
  } else {
    datosS={cont:contFila};
  }
  console.log(datosS);
  $.ajax({
    type: "get",
    url: "pacEsp_1",
    data: datosS,
    // dataType: "Array",
    success: function (response) {
      console.log(response);
      
      html_table_contend = response.map(function (PC) {
        est_1 = "";
        if (PC.ate_pago == "pendiente") {
          est_1 = `<span class="label label-warning">Pendiente</span>`;
        } else {
          est_1 = `<span class="label label-success">Cancelado</span>`;
        }
        
        return (h = `
        <tr>
        <th>${PC.pa_hcl} </th>
        <th>${veriNull( PC.pa_ci)} </th>
        <th>${PC.pa_nombre}  ${PC.pa_appaterno} ${PC.pa_apmaterno} </td>
        <TH>${PC.nombre} </TH>
        <th>${veriNull( PC.ps_nombre)} ${veriNull( PC.ps_appaterno)} ${veriNull( PC.ps_apmaterno)}</th>
        <th>${PC.ate_procedimiento}</th>
        <TH>${PC.ate_num_ticked}</TH>
        <TH>${PC.time_at}</TH>
        <th>${PC.ate_turno}</th>
        <th id="body_table_paciCola_${PC.id}">${est_1}</th>
        <td>
        <button type="button" onClick="pago_realizar(${PC.id}) " class="btn btn-default btn-sm" title="ON/OFF"><i class="fa  fa-thumb-tack"></i></button>
        </span>
        <span class="tooltip-area">
        </td>
        </tr>
        `);
      });
      console.log(html_table_contend);
      console.log(contFila);
      if (contFila == 0) {
        $("#body_table_paciCola").html("");
        $("#body_table_paciCola").html(html_table_contend);
      } else {
        $("#body_table_paciCola_1er > tbody:last-child").after(html_table_contend);
      }
      if (response == []) {
        contFila=response[0].id;
      } 
    },
  });
}


{/* <a href="{{route('ate_pago',$PC->id)}} " class="btn btn-default btn-sm" title="ON/OFF"><i class="fa  fa-thumb-tack"></i></a> */}

// *============
function pago_realizar(idAte) {
  $.ajax({
    type: "post",
    url: "pago_1",
    data: { _token: $("meta[name=csrf-token]").attr("content"), id: idAte },
    // dataType: "dataType",
    success: function (response) {
      console.log(response);
      if (response) {
        if (response.tipo == 1) {
          ht = '<span class="label label-success">Cancelado</span>';
        } else {
          ht = '<span class="label label-warning">Pendiente</span>';
        }
        $("#body_table_paciCola_" + response.id).html(ht);
      } else {
        notif("4", "Error!");
      }
    },
  });
}
