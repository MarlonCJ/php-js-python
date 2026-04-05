<?php

// 🟣 PHP — TIPOS DE DATOS (ENSEÑANZA PROFUNDA)

// 1. 📌 Definición técnica (nivel interno)

// Un tipo de dato en PHP es la forma en que el motor de PHP (Zend Engine) clasifica, almacena y manipula un valor en memoria, determinando:

// Cómo se guarda en memoria
// Qué operaciones se pueden aplicar
// Cómo se comporta en comparaciones y cálculos

// 2. 🧩 Contexto dentro de PHP (tipado dinámico real)

// PHP es un lenguaje de tipado dinámico y débil:

// 🔹 Dinámico:

// No defines el tipo:

// $valor = 10;

// PHP decide:

// “Esto es un int”

// 🔹 Débil:

// PHP puede convertir tipos automáticamente:

// $numero = "10" + 5; // resultado: 15

// ⚠️ Esto puede ser útil o peligroso

// 3. ⚙️ Funcionamiento interno (MEMORIA — CLAVE)

// Cuando haces:

// $numero = 10;

// PHP crea internamente una estructura llamada zval:

// 🔍 Contiene:

// Valor: 10
// Tipo: int

// Contador de referencias

// 🔥 Ejemplo clave:

// $a = 10;
// $b = $a;

// Internamente:

// $a y $b apuntan al mismo zval
// No se duplica memoria inmediatamente

// Si haces:

// $b = 20;

// 👉 PHP aplica:

// ⚠️ Copy-On-Write (COW)

// Se crea una copia SOLO cuando cambias el valor
// Optimización de memoria

// 4. 🧾 TIPOS DE DATOS EN PHP (DETALLADO)

// 🔹 A. Tipos primitivos (escalares)

// 1. 🟢 Integer (int)
// $numero = 10;

// ✔ Números enteros
// ✔ Sin decimales

// 2. 🔵 Float (double)

// $precio = 10.75;

// ✔ Números con decimales
// ✔ Precisión limitada (ojo con dinero en sistemas reales)

// 3. 🟡 String

// $nombre = "Carlos";

// ✔ Texto
// ✔ Puede usar comillas simples o dobles

// 🔥 Diferencia importante:

// $nombre = "Juan";
// echo "Hola $nombre"; // interpreta variable

// echo 'Hola $nombre'; // NO interpreta

// 4. 🟣 Boolean

// $activo = true;

// ✔ Solo: true o false

// 🔹 B. Tipos compuestos

// 1. 🧱 Array

// $numeros = [1, 2, 3];

// ✔ Colección de datos
// ✔ Puede mezclar tipos

// Ejemplo real:

// $usuario = [
//     "nombre" => "Carlos",
//     "edad" => 30
// ];

// 2. 🧩 Object

// class Persona {
//     public $nombre;
// }

// ✔ Representa entidades complejas
// ✔ Base de POO

// 🔹 C. Tipos especiales

// 1. ⚫ NULL
// $valor = null;

// ✔ Variable sin valor

// 2. 🔗 Resource

// Usado para conexiones:

// $conexion = fopen("archivo.txt", "r");

// 5. 🧪 Ejemplo básico

// $nombre = "Ana";
// $edad = 25;
// $activo = true;

// echo $nombre;

// 6. 🧠 Ejemplo aplicado (CASO REAL)

// Simulación de usuario en sistema:

// $usuario = "Luis";
// $edad = 28;
// $saldo = 1500.50;
// $activo = true;

// if ($activo) {
//     echo "Usuario activo: $usuario con saldo $saldo";
// }

// 7. 🔍 Análisis profundo

// $usuario → string
// $edad → int
// $saldo → float
// $activo → boolean

// 👉 PHP adapta comportamiento según tipo

// 8. ⚠️ CONVERSIONES AUTOMÁTICAS (PELIGRO)

// $resultado = "10" + "5"; // 15

// PHP convierte automáticamente a número

// 🚨 Problema:

// $valor = "10 manzanas" + 5; // 15

// 👉 PHP ignora texto → comportamiento riesgoso

// 9. ✅ Buenas prácticas (nivel profesional)

// ✔ Validar tipos:

// is_int($numero);
// is_string($texto);

// ✔ Usar tipado estricto (avanzado):

// declare(strict_types=1);

// ✔ No confiar en conversiones automáticas

// 10. ❌ Errores comunes (CRÍTICOS)

// 🚫 Mezclar tipos sin control
// 🚫 No validar datos de usuario
// 🚫 Usar strings como números sin verificar
// 🚫 Comparaciones débiles (== vs ===)

// 11. 🧾 Conclusión técnica

// En PHP:

// Los tipos de datos son dinámicos pero reales en memoria
// El motor decide el tipo automáticamente
// Las conversiones pueden generar errores si no se controlan
// Dominar esto evita bugs complejos en sistemas reales

// 🧪 VALIDACIÓN DE COMPRENSIÓN (OBLIGATORIA)

// Ahora sí, nivel exigente:

// 1. ¿Qué es un tipo de dato en PHP a nivel interno?

// Es la estructura interna que usa PHP para almacenar un valor en memoria (zval), incluyendo su tipo, valor y referencias.

// 2. ¿Qué diferencia hay entre tipado dinámico y débil?

// Dinámico → no declaras tipo
// Débil → PHP convierte tipos automáticamente en operaciones

// 3. Explica qué es Copy-On-Write en PHP

// PHP comparte memoria entre variables y solo crea una copia cuando una de ellas se modifica, optimizando memoria.

// 4. ¿Qué problema tiene este código y por qué es peligroso?


// $valor = "10 manzanas" + 5; // resultado: 15

// 🚨 Por qué es peligroso:

// Puede generar resultados incorrectos sin darte cuenta
// Errores silenciosos en sistemas reales (muy grave)


// 🔄 RESPONDE NUEVAMENTE (OBLIGATORIO)

// 1. Explica un tipo de dato en PHP a nivel de memoria (incluye zval)

// normalmente la computador entiende con codigo binario, 0 y 1 , aqui dentra la zval, cuando nosotros creamos una variables estamos utilizando un espacio de memoria, en la memoria interna de php que viendolo de otra forma
// corresponderia a una bodega, cada variable creada es una etiqueta que corresponde a un estan dentro de la bodega , que esta utilizando un espacio en la memoria interna, cuando nos referimos a zval, estamos indicando un contenedor, que guarda una estructura con 2 datos, el tipo de dato, y el valor de la variable creada. 

// 2. Diferencia técnica EXACTA:

// Tipado dinámico
// Tipado débil

// tipado dinamico, php establece el tipo de dato de forma automatica
// tipado debil: php puede convertir el tipo de datos en operaciones

// 3. Explica Copy-On-Write con ejemplo

// copy on write, es el proceso de modificar el contenido de la variable, ejemplo tipo de dato y valor, pero esto va mas alla de solo modificar, el decide cuando dividir la variable y cuando utilizar la etiqueta original , en caso que se crea una variable ejemplo

// esto esta etiquetando la nueva variable en el mismo estan de la bodega de la memoria interna
// y se utilizara los valores de ese contenedor osea de ese zval para ahorra recursos

// $a = "un monton de datos";
// $b = $a;

// cuando modificamos la nueva variable, esto separara la etiqueta del estan original y creara su mismo zval , p


// 4. ¿Qué hace EXACTAMENTE este código y por qué es peligroso?


// $valor = "10 manzanas" + 5; //esto genera una conversion de valores donde el string sumara el 5 convirtiendo la variable a tipo int



