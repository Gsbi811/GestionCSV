
# 🛠️ Fusionador de Archivos CSV para Vehículos

Este proyecto te permite combinar fácilmente dos archivos CSV con información de vehículos, completando los datos faltantes como matrícula, número de bastidor fecha de salida. Puedes hacerlo directamente en tu navegador o desde el servidor, según tus necesidades.

---

## 🌐 index.html — Fusión en el Navegador

Una interfaz web sencilla y directa que utiliza [PapaParse](https://www.papaparse.com/) para procesar los archivos sin necesidad de subirlos a un servidor.

### ¿Qué hace?

- 📂 Permite seleccionar dos archivos CSV:
  - **Archivo principal**: contiene la información base de los vehículos.
  - **Archivo complementario**: incluye datos adicionales como matrícula o bastidor.
- 🔄 Al hacer clic en **“Fusionar archivos”**, compara fila por fila y completa los datos faltantes del archivo principal usando el complementario.
- 📥 Descarga automáticamente un nuevo archivo CSV con toda la información combinada.

### 🖌️ Estilo

- Diseño limpio, centrado y minimalista.
- Enfocado en la funcionalidad para que completes tu tarea rápidamente.

---

## 🧾 fusionar.php — Fusión en el Servidor

Una alternativa que realiza la misma tarea, pero desde el servidor usando PHP. Ideal para manejar archivos grandes o entornos más controlados.

### ¿Cómo funciona?

- 📤 Recibe los dos archivos CSV que subes.
- 🧠 Lee y almacena los datos en memoria.
- 🔍 Recorre cada fila del archivo principal y completa los datos faltantes con el segundo archivo.
- 📦 Genera un nuevo archivo CSV con toda la información fusionada y lo envía para descarga.

### ✅ ¿Por qué usar esta opción?

- Perfecto para archivos grandes o cuando se necesita mayor control sobre el procesamiento.
- Más seguro, ya que los datos se procesan en el servidor y no en el navegador del usuario.

---

## 👥 Autores

- Gabriel Ortiz  
- Jorge Estrella
