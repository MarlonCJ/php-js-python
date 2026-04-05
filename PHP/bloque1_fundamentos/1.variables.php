<?php

// 🟣 PHP — VARIABLES (ENSEÑANZA COMPLETA)

// 1. 📌 Definición técnica

// Una variable en PHP es un espacio en memoria que almacena un valor que puede cambiar durante la ejecución del programa.

// 2. 🧩 Contexto dentro de PHP

// PHP es un lenguaje interpretado del lado del servidor. Las variables permiten:

// Guardar datos del usuario
// Procesar formularios
// Manejar lógica del sistema

// 3. ⚙️ Funcionamiento interno

// Cuando declaras:

$nombre = "Juan";

// PHP:

// Reserva espacio en memoria
// Asocia el nombre $nombre
// Guarda el valor "Juan"

// 4. 🧾 Sintaxis completa

// $variable = valor;

// 🔹 Reglas:

// Siempre inicia con $
// No se declara tipo (tipado dinámico)
// Sensible a mayúsculas/minúsculas

// 5. 🧪 Ejemplo básico

// $edad = 25;
// echo $edad;

// 📌 Salida:

// 25

// 6. 🧠 Ejemplo aplicado (caso real)

$nombre = "Carlos";
$edad = 30;

echo "Hola, mi nombre es " . $nombre . " y tengo " . $edad . " años.";

// 7. 🔍 Análisis del ejemplo

// $nombre almacena texto
// $edad almacena número
// . concatena strings
// echo imprime en pantalla

// 8. ✅ Buenas prácticas

// ✔ Nombres descriptivos:

$precioProducto = 100;

// ✔ Evitar:

// $x = 100;

// ✔ Usar camelCase:

// $nombreUsuario

// 9. ❌ Errores comunes

// 🚫 Olvidar el $

// nombre = "Juan"; // ERROR

// 🚫 Mal uso de comillas:

// echo 'Hola $nombre'; // No interpreta variable

// 10. 🧾 Conclusión técnica

// Las variables en PHP son fundamentales para almacenar y manipular datos dinámicos dentro de una aplicación. Dominar su uso es obligatorio para avanzar en cualquier lógica de programación.

// 🧪 VALIDACIÓN DE COMPRENSIÓN (OBLIGATORIA)

// Responde correctamente:

// 1. ¿Qué símbolo SIEMPRE debe llevar una variable en PHP?

// siempre se debe estable el simbolo $ para la creacion de una variable

// 2. ¿Qué tipo de lenguaje es PHP respecto a tipado?

// es un lenguaje interpretado al lado del servidor

// 3. ¿Qué hace el operador . en PHP?

// El operador . sirve para concatenar valores , string

// 4. Corrige este error:
// nombre = "Luis";

// $nombre = "Luis";


// 🔄 NUEVA VALIDACIÓN (OBLIGATORIA)

// Responde nuevamente:

// 1. ¿Qué significa que PHP sea de tipado dinámico?

// Es un lenguaje que no necesita declarar el tipo de dato a sus variables

// 2. ¿PHP requiere declarar el tipo de dato de una variable? ¿Por qué?

// No necesita declarar el tipo de dato de una variable por PHP es un lenguaje de tipado dinamico

// 3. Escribe un ejemplo donde una variable cambie de tipo en PHP

// $numero = "10"; tipo string
// $numero = 10; cambie el valor a un entero

// 4. ¿Qué pasaría si usas una variable sin $?

// en php no se puede crear variables sin el signo $ esto generaria error, mala Sintaxis