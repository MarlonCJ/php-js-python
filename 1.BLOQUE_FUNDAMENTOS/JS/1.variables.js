
// 🟡 JavaScript — VARIABLES (ENSEÑANZA COMPLETA)

// 1. 📌 Definición técnica

// Una variable en JavaScript es un contenedor de datos que permite almacenar valores que pueden cambiar durante la ejecución del programa.

// 2. 🧩 Contexto dentro de JavaScript

// JavaScript es un lenguaje que se ejecuta principalmente en el navegador (cliente), aunque también en servidor (Node.js).

// Las variables permiten:

// Manipular el DOM
// Gestionar eventos
// Almacenar datos temporales
// Controlar lógica de aplicaciones

// 3. ⚙️ Funcionamiento interno

// Cuando declaras:

let nombre = "Juan";

// JavaScript:

// Reserva espacio en memoria
// Crea una referencia llamada nombre
// Asigna el valor "Juan"
// Determina automáticamente el tipo (string)

// 4. 🧾 Sintaxis completa

// JavaScript tiene 3 formas de declarar variables:

var nombre2 = "Juan";
let edad = 25;
const PI = 3.1416;

// 🔍 Diferencias clave:

// Tipo	    Reasignable	    Re-declarable	Alcance
// var	    Sí	            Sí	            Global / función
// let	    Sí	            No	            Bloque
// const	No	            No	            Bloque


// 5. 🧪 Ejemplo básico

let edad2 = 20;
console.log(edad2);

// 📌 Salida:

// 20

// 6. 🧠 Ejemplo aplicado (caso real)

nombre = "Carlos";
edad = 30;

console.log(`Hola, mi nombre es ${nombre} y tengo ${edad} años`);

// 7. 🔍 Análisis del ejemplo

// let permite cambiar el valor
// ` ` (backticks) permiten interpolación
// ${} inserta variables dentro del texto
// console.log imprime en consola

// 8. ✅ Buenas prácticas

// ✔ Usar let en lugar de var
// ✔ Usar const cuando el valor no cambia
// ✔ Nombres descriptivos:

let precioProducto = 100;

// 9. ❌ Errores comunes

// 🚫 Usar var sin entender su alcance
// 🚫 Reasignar una constante:

// const PI = 3.14;
// PI = 3.1416; // ERROR

// 🚫 No declarar variables:

// nombre = "Juan"; // Mala práctica

// 10. 🧾 Conclusión técnica

// Las variables en JavaScript son fundamentales para manejar datos dinámicos. Entender let, const y el alcance es clave para escribir código profesional.

// 🧪 VALIDACIÓN DE COMPRENSIÓN (OBLIGATORIA)

// Responde con precisión técnica:

1. ¿Cuál es la diferencia clave entre let y const?

let es para declarar variables de bloque se puede modificar el valor posteriormente
const es para declarar constantes de bloque se utiliza para valores fijos que no se modifican

2. ¿Por qué var es considerado problemático?

por que es un tipo para declarar variables pero forma global , esto permite utilizar esa variable
de forma global y se puede modificar el valor posteriormente si no se tiene cuidado puede generar errores en el codigo por modificar su valor en parte del codigo que no es requerido.

3. ¿Qué significa que JavaScript tenga alcance de bloque?

que una ves declarada solamente se puede utilizar en ese archivo o bloque

4. Corrige este código:

const edad = 20;
edad = 25;

const EDAD = 20;
console.log(EDAD);