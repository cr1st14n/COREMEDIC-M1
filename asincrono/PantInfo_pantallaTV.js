// * variables de modal
min1 = 0;
min2 = 0;

// * variables de imagenes
dat_cont = 0;
dat_A = [
  // {
  //   ruta: "assets/img/pantalla/img_2.jpg",
  // },
  // {
  //   ruta: "assets/img/pantalla/img_1.png",
  // },
  // {
  //   ruta: "assets/img/pantalla/img_3.png",
  // },
  {
    ruta: "assets/img/pantalla/CAMPAÑA_1.png",
  },
  {
    ruta: "assets/img/pantalla/CAMPAÑA_1_1.png",
  },
  {
    ruta: "assets/img/pantalla/img_1.png",
  },
];

dat_TM = [];

setInterval("mueveReloj()", 1000);

function mueveReloj() {
  momentoActual = new Date();
  hora = momentoActual.getHours();
  minuto = momentoActual.getMinutes();
  segundo = momentoActual.getSeconds();
  if (minuto < 10) {
    minuto = "0" + minuto;
  }
  if (segundo < 10) {
    segundo = "0" + segundo;
  }
  horaImprimible = hora + " : " + minuto + ":" + segundo;
  document.getElementById("horasis").innerText = horaImprimible;

  cont = minuto % 10;
  // console.log(cont);
  if (cont == 0 || minuto < 0 ) {
    min1 = minuto;
    showModal();
    act_tablaCOntenido_1()
  }
}

function showModal() {

  if (min1 != min2) {
  console.log('se mostrara');

    document.getElementById("img_pub").src = dat_A[dat_cont].ruta;
    console.log(dat_cont);
    if (dat_A.length == dat_cont + 1) {
      dat_cont = 0;
      console.log(dat_cont);
    } else {
      dat_cont = dat_cont + 1;
    }
    $(".modalA").modal("show");
    setTimeout(function () {
      $(".modalA").modal("hide");
    }, 12000);
  }
  min2 = min1;
}

// * ---------funciones para actualizar los turnos
function act_tablaCOntenido_1() {
  $.ajax({
    type: "GET",
    url: "pantallaListMed",
    // data: "data",
    // dataType: "dataType",
    success: function (dat) {
      html = "";
      tableHtml = [];
      for (let i = 0; i < dat.length; i++) {
        d = "";
        h = "";
        for (let j = 0; j < dat[i].pf_tur.length; j++) {
          if (j == 0) {
            d = d + `${dat[i].pf_tur[j][0].dias}`;
            h = h + `${dat[i].pf_tur[j][0].hora}`;
          } else {
            d = d + `<br>${dat[i].pf_tur[j][0].dias}`;
            h = h + `<br>${dat[i].pf_tur[j][0].hora}`;
          }
        }

        html = `
        <tr>
            <td>${dat[i].pf_esp}</td>
            <td>${dat[i].pf_med}</td>
            <td>${d}</td>
            <td>${h}</td>
            <td>${dat[i].pf_cos}</td>
        </tr>
        `;
        tableHtml.push(html);
      }
      console.log(tableHtml[0]);
      console.log(tableHtml[1]);
      medio = tableHtml.length / 2;
      htmltad_1 = "";
      htmltad_2 = "";
      for (let q = 0; q < tableHtml.length ; q++) {
        if (q >= medio) {
            htmltad_1=htmltad_1+tableHtml[q];
        } else {
            htmltad_2=htmltad_2+tableHtml[q];   
        } 
      }
      $("#bod1").html(htmltad_1);
      $("#bod2").html(htmltad_2);
    },
  });
}
