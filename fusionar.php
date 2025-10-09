<?php
function leerCSV($archivo) {
    $datos = [];
    if (($handle = fopen($archivo, "r")) !== FALSE) {
        $cabecera = fgetcsv($handle);
        while (($fila = fgetcsv($handle)) !== FALSE) {
            $datos[] = array_combine($cabecera, $fila);
        }
        fclose($handle);
    }
    return [$cabecera, $datos];
}

function escribirCSV($cabecera, $datos) {
    $f = fopen('php://temp', 'w+');
    fputcsv($f, $cabecera);
    foreach ($datos as $fila) {
        $linea = [];
        foreach ($cabecera as $col) {
            $linea[] = $fila[$col] ?? '';
        }
        fputcsv($f, $linea);
    }
    rewind($f);
    return stream_get_contents($f);
}

if ($_FILES['vehiculo']['error'] === UPLOAD_ERR_OK && $_FILES['b1']['error'] === UPLOAD_ERR_OK) {
    [$cabeceraVehiculo, $vehiculos] = leerCSV($_FILES['vehiculo']['tmp_name']);
    [, $b1] = leerCSV($_FILES['b1']['tmp_name']);

    $b1Map = [];
    foreach ($b1 as $fila) {
        $b1Map[$fila['codvehiculo']] = $fila;
    }

    foreach ($vehiculos as &$vehiculo) {
        $cod = $vehiculo['codvehiculo'];
        if (isset($b1Map[$cod])) {
            if (empty($vehiculo['bastidor'])) {
                $vehiculo['bastidor'] = $b1Map[$cod]['bastidor'];
            }
            if (empty($vehiculo['matricula'])) {
                $vehiculo['matricula'] = $b1Map[$cod]['matricula'];
            }
        }
    }

    $csvFinal = escribirCSV($cabeceraVehiculo, $vehiculos);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="vehiculos_fusionado.csv"');
    echo $csvFinal;
} else {
    http_response_code(400);
    echo "Error al subir los archivos.";
}
