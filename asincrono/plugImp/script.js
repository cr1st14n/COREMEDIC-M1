const RUTA_API = "http://localhost:8000";
const $estado = document.querySelector("#estado"),
    $listaDeImpresoras = document.querySelector("#listaDeImpresoras"),
    $btnLimpiarLog = document.querySelector("#btnLimpiarLog"),
    $btnRefrescarLista = document.querySelector("#btnRefrescarLista"),
    $btnEstablecerImpresora = document.querySelector("#btnEstablecerImpresora"),
    $texto = document.querySelector("#texto"),
    $impresoraSeleccionada = document.querySelector("#impresoraSeleccionada"),
    $btnImprimir = document.querySelector("#btnImprimir");



const loguear = texto => $estado.textContent += (new Date()).toLocaleString() + " " + texto + "\n";
const limpiarLog = () => $estado.textContent = "";

$btnLimpiarLog.addEventListener("click", limpiarLog);

const limpiarLista = () => {
    for (let i = $listaDeImpresoras.options.length; i >= 0; i--) {
        $listaDeImpresoras.remove(i);
    }
};

const obtenerListaDeImpresoras = () => {
    loguear("Cargando lista...");
    Impresora.getImpresoras()
        .then(listaDeImpresoras => {
            refrescarNombreDeImpresoraSeleccionada();
            loguear("Lista cargada");
            limpiarLista();
            listaDeImpresoras.forEach(nombreImpresora => {
                const option = document.createElement('option');
                option.value = option.text = nombreImpresora;
                $listaDeImpresoras.appendChild(option);
            })
        });
}

const establecerImpresoraComoPredeterminada = nombreImpresora => {
    loguear("Estableciendo impresora...");
    Impresora.setImpresora(nombreImpresora)
        .then(respuesta => {
            refrescarNombreDeImpresoraSeleccionada();
            if (respuesta) {
                loguear(`Impresora ${nombreImpresora} establecida correctamente`);
            } else {
                loguear(`No se pudo establecer la impresora con el nombre ${nombreImpresora}`);
            }
        });
};

const refrescarNombreDeImpresoraSeleccionada = () => {
    Impresora.getImpresora()
        .then(nombreImpresora => {
            $impresoraSeleccionada.textContent = nombreImpresora;
        });
}


$btnRefrescarLista.addEventListener("click", obtenerListaDeImpresoras);
$btnEstablecerImpresora.addEventListener("click", () => {
    const indice = $listaDeImpresoras.selectedIndex;
    if (indice === -1) return loguear("No hay ninguna impresora seleccionada")
    const opcionSeleccionada = $listaDeImpresoras.options[indice];
    establecerImpresoraComoPredeterminada(opcionSeleccionada.value);
});

$btnImprimir.addEventListener("click", () => {
    let impresora = new Impresora(RUTA_API);
    impresora.setFontSize(1, 1);
    impresora.write("TRAUMA MEDICAL\n");
    impresora.write("Fuente 1,1\n");
    impresora.write("Alta especialidad en reemplazos articulares\n");
    impresora.write("Av. Arica esquina Calle Fernando Romero\n");
    impresora.write("Edificio el Faro Nro 65\n");
    impresora.write("Frente a la Estación del Teleferico Morado\n");
    impresora.write("--------------------------------\n");
    impresora.setEmphasize(1);
    impresora.write(`Paciente\n`);
    impresora.write("--------------------------------\n");
    impresora.setAlign("left");
    impresora.write(`trauma: dolor de huzo}  \n`);
    impresora.setAlign("right");
    impresora.write(`55 Bs.-\n`);
    impresora.write("--------------------------------\n");
    impresora.setAlign("right");
    impresora.write(`TOTAL :55 Bs.-\n`);
    impresora.write("--------------------------------\n");
    impresora.write("Forma de Pago: CONTADO");
   
    impresora.feed(2);
    impresora.write("***Gracias por su preferencia !*** \n");
    impresora.cut();
    impresora.cutPartial(); // Pongo este y también cut porque en ocasiones no funciona con cut, solo con cutPartial
    impresora.end();
});

// En el init, obtenemos la lista
obtenerListaDeImpresoras();
// Y también la impresora seleccionada
refrescarNombreDeImpresoraSeleccionada();

function imprimirNota_1(res) {
    let impresora = new Impresora(RUTA_API);
    impresora.setFontSize(1, 1);
    impresora.write("TRAUMA MEDICAL\n");
    impresora.write("Alta especialidad en reemplazos articulares\n");
    impresora.write("Av. Arica esquina Calle Fernando Romero\n");
    impresora.write("Edificio el Faro Nro 65\n");
    impresora.write("Frente a la Estacion del Teleferico Morado\n");
    impresora.write("--------------------------------\n");
    impresora.setEmphasize(1);
    impresora.write(`Paciente : ${res.pa.pa_nombre} ${res.pa.pa_appaterno} ${res.pa.pa_apmaterno}\n`);
    impresora.write(`CI : ${res.pa.pa_ci}\n`);
    impresora.write("--------------------------------\n");
    impresora.setAlign("left");
    impresora.write(`${res.esp.esp_nombre} ${res.esp.esp_detalle} \n`);
    impresora.setAlign("right");
    impresora.write(`${res.esp.esp_costo} Bs.-\n`);
    impresora.write("--------------------------------\n");
    impresora.setAlign("right");
    impresora.write(`TOTAL :${res.esp.esp_costo} Bs.-\n`);
    impresora.write("--------------------------------\n");
    impresora.write("Forma de Pago: CONTADO");
   
    impresora.feed(2);
    impresora.write("***Gracias por su preferencia !*** \n");
    impresora.cut();
    impresora.cutPartial(); // Pongo este y también cut porque en ocasiones no funciona con cut, solo con cutPartial
    impresora.end();
  }