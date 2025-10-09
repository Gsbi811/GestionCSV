
🌟 index.html
Este archivo es como una ventana web donde tú puedes subir dos archivos CSV y mezclarlos en uno solo, sin complicaciones. Usamos una herramienta llamada PapaParse que trabaja directamente en tu navegador para que no tengas que subir nada a un servidor.
¿Qué hace?
    • Te permite elegir dos archivos:
        ◦ El principal, que tiene la info base de los vehículos.
        ◦ Otro con datos extra que a veces faltan, como el número de bastidor o la matrícula.
    • Cuando haces clic en el botón “Fusionar archivos”, el programa lee ambos archivos y revisa fila por fila.
    • Si en el archivo principal falta algún dato (por ejemplo, el bastidor o la matrícula), lo toma del segundo archivo y lo añade.
    • Al final, te descarga automáticamente un archivo nuevo, con toda la información ya completa y lista para usar.
¿Y el estilo?
    • Todo está pensado para que se vea limpio, sencillo y ordenado.
    • Se centra en la página para que no te distraigas y puedas hacer tu tarea rápido.
🌟 fusionar.php
Este otro archivo hace básicamente lo mismo, pero funciona del lado del servidor. Esto es útil si prefieres que la fusión la haga la computadora que recibe los archivos, no tu navegador.
¿Cómo funciona?
    • Recibe los archivos que subes y los lee uno a uno, guardando la información en memoria.
    • Luego, revisa cada vehículo en el archivo principal y, si falta información como el bastidor o la matrícula, la completa con los datos del segundo archivo.
    • Finalmente, arma un archivo CSV nuevo con toda la información ya combinada y te lo envía para que lo descargues.
¿Por qué usar esto?
    • Si los archivos son muy grandes o quieres manejar los datos con más control, el PHP es la mejor opción.
    • También es más seguro, porque los datos se procesan en el servidor y no en el navegador de cada usuario.



@ Gabriel Ortiz y Jorge Estrella
