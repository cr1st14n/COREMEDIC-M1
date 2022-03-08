$("#form_registerPciente").click(function (e) {
  e.preventDefault();
  console.log("holssss");
  alert("asdfasdf");
});
function registerPaciente_1() {
  console.log("que sera esra");
  $("#md-form_create_paciente").modal("show");
}


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

        imprimirNota_1(response.data)
      } else {
        notif("2", "Error!.");
      }
    },
  });
}

