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
    impresora.write("Fuente 1,1\n");
    impresora.setFontSize(1, 2);
    impresora.write("Fuente 1,2\n");
    impresora.setFontSize(2, 2);
    impresora.write("Fuente 2,2\n");
    impresora.setFontSize(2, 1);
    impresora.write("Fuente 2,1\n");
    impresora.setFontSize(1, 1);
    impresora.setEmphasize(1);
    impresora.write("Emphasize 1\n");
    impresora.setEmphasize(0);
    impresora.write("Emphasize 0\n");
    impresora.setAlign("center");
    impresora.write("Centrado\n");
    impresora.setAlign("left");
    impresora.write("Izquierda\n");
    impresora.setAlign("right");
    impresora.write("Derecha\n");
    impresora.setFont("A");
    impresora.write("Fuente A\n");
    impresora.setFont("B");
    impresora.write("Fuente B\n");
    impresora.feed(2);
    impresora.write("Separado por 2\n");
    impresora.cut();
    impresora.cutPartial(); // Pongo este y también cut porque en ocasiones no funciona con cut, solo con cutPartial
    impresora.end()
        .then(valor => {
            loguear("Al imprimir: " + valor);
        });
});

// En el init, obtenemos la lista
obtenerListaDeImpresoras();
// Y también la impresora seleccionada
refrescarNombreDeImpresoraSeleccionada();

function imprimirNota_1(res) {
    let impresora = new Impresora(RUTA_API);
    impresora.setFontSize(1, 1);
    impresora.setEmphasize(0);
    impresora.setAlign("center");
    impresora.write("TRAUMA MEDICAL\n");
    impresora.write("Alta especialidad en reemplazos articulares\n");
    impresora.write("Av. Arica esquina Calle Fernando Romero\n");
    impresora.write("Edificio el Faro Nro 65\n");
    impresora.write("Frente a la estación del teleferico morado\n");
    impresora.write("--------------------------------\n");
    impresora.write(`Paciente ${res.pa_nombre} ${res.pa_appaterno}\n`);
    impresora.write("\n");
    impresora.write("--------------------------------\n");
    impresora.setAlign("left");
    impresora.write(`${res.esp_nombre} ${res.esp_detalle}  \n`);
    impresora.setAlign("right");
    impresora.write(`${res.esp_costo} Bs.-\n`);
    impresora.write("--------------------------------\n");
    impresora.write(`TOTAL : ${res.esp_costo} Bs.-\n`);
    impresora.write("--------------------------------\n");
    impresora.write("Forma de Pago: CONTADO");
    impresora.setAlign("center");
    impresora.write("***Gracias por su preferencia !***");
    impresora.cut();
    impresora.cutPartial(); // use both because sometimes cut and/or cutPartial do not work
    impresora.end()
        .then(valor => {
            loguear("Response: " + valor);
        })
  }