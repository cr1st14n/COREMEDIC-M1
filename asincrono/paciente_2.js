function registerPaciente_1() {
  console.log("que sera esra");
  $("#md-form_create_paciente").modal("show");
  $("#form_registerPaciente_1").trigger("reset");
}

$("#form_registerPaciente_1").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "/COREMEDIC-M1/Recepcion/paciente/register1",
    data: $("#form_registerPaciente_1").serialize(),
    // dataType: "dataType",
    success: function (response) {
      console.log(response);
      if (response.res) {
        showAtender(response.data.id)
        notif("1", "Paciente Registrado");
        $("#form_registerPaciente_1").trigger("reset");
        $("#md-form_create_paciente").modal("hide");
        //registerAtencion();
      } else {
        notif("2", "Error !");
      }
    },
  });
});

function registerAtencion() {
  inp = $("#ate_formCreateCitPrev_2").serializeArray();
  console.log(inp);
  $.ajax({
    type: "POST",
    url: "/COREMEDIC-M1/Recepcion/atencion/createAte1",
    data: {
      _token: $("meta[name=csrf-token]").attr("content"),
      data: inp,
      paciente: PaSe,
    },
    // dataType: "dataType",
    success: function (response) {
      console.log(response);
      if (response.res) {
        notif("1", "Guardados.");
        $("#ate_formCreateCitPrev_2").trigger("reset");
        $("#md-form_create_cita").modal("hide");
        console.log(response.data);
        imprimirNota_1(response.data);
      } else {
        notif("2", "Error!.");
      }
    },
  });
}
