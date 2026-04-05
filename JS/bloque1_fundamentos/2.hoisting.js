
// 🟡 JavaScript — HOISTING (ENSEÑANZA COMPLETA)

// 1. 📌 Definición técnica

// El hoisting (elevación) en JavaScript es un comportamiento del motor donde las declaraciones de variables y funciones se “mueven” internamente al inicio de su contexto antes de ejecutar el código.

// ⚠️ Importante: NO se elevan los valores, solo las declaraciones

// 2. 🧩 Contexto dentro de JavaScript

// JavaScript ejecuta el código en dos fases:

// Fase de compilación (creación)
// Fase de ejecución

// Durante la primera fase ocurre el hoisting.

// 3. ⚙️ Funcionamiento interno

// Ejemplo:

// console.log(nombre);
// var nombre = "Carlos";

// 🔍 Internamente JS lo interpreta así:

// var nombre;
// console.log(nombre); // undefined
// nombre = "Carlos";

// 4. 🧾 Sintaxis y comportamiento según tipo

// 🔹 Con var:

// console.log(x);
// var x = 10;

// ✔ Resultado:

// undefined

// 🔹 Con let y const:

// console.log(y);
// let y = 10;

// ❌ Error:

// ReferenceError: Cannot access 'y' before initialization

// 5. 🧪 Ejemplo básico

// saludar();

// function saludar() {
//   console.log("Hola");
// }

// ✔ Funciona correctamente por hoisting de funciones

// 6. 🧠 Ejemplo aplicado (caso real)

// if (true) {
//   console.log(a); // undefined
//   var a = 5;
// }

// 🔍 Problema:

// var ignora el bloque y se eleva al contexto global o de función

// 7. 🔍 Análisis

// var → se eleva y se inicializa como undefined
// let y const → se elevan pero quedan en una zona llamada:

// 👉 Temporal Dead Zone (TDZ)

// No pueden usarse antes de declararse

// 8. ✅ Buenas prácticas

// ✔ Usar siempre let o const
// ✔ Declarar variables al inicio
// ✔ Evitar depender del hoisting

// 9. ❌ Errores comunes

// 🚫 Pensar que el valor también se eleva
// 🚫 Usar variables antes de declararlas
// 🚫 Abusar de var

// 10. 🧾 Conclusión técnica

// El hoisting es un comportamiento interno de JavaScript que puede generar errores si no se entiende bien. Dominarlo te permite escribir código más predecible y profesional.

// 🧪 VALIDACIÓN RÁPIDA (OBLIGATORIA)

// Responde:

// 1. ¿Qué se eleva en el hoisting, la variable o el valor?

// la declaracion de la variable

// 2. ¿Qué valor tiene una variable var antes de asignarse?

// undefined

// 3. ¿Por qué let y const generan error antes de declararse?

// Porque están en la Temporal Dead Zone (TDZ), donde la variable existe pero no puede ser accedida hasta su declaración.

// 4. ¿Qué es la Temporal Dead Zone (TDZ)?

// La TDZ es el período entre el inicio del bloque y la declaración de la variable, donde existe en memoria pero no puede ser utilizada.