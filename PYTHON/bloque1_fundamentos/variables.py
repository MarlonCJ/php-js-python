
# 🐍 Python — VARIABLES (REENSEÑANZA COMPLETA Y PROFUNDA)

# 1. 📌 Definición técnica

# Una variable en Python es una referencia a un objeto en memoria, no un contenedor directo de valores.

# 👉 Esto significa que la variable no guarda el dato, sino que apunta a un objeto que contiene ese dato.

# 2. 🧩 Contexto dentro de Python

# Python es un lenguaje:

# Interpretado
# De alto nivel
# De tipado dinámico

# Las variables son la base para:

# Manipular datos
# Controlar flujo
# Construir lógica compleja
# Trabajar con estructuras (listas, diccionarios, etc.)

# 3. ⚙️ Funcionamiento interno (CLAVE)

# Cuando haces:

x = 10

# Python hace esto internamente:

# Crea un objeto entero 10 en memoria
# Crea el nombre x
# Hace que x apunte a ese objeto

# 🔥 Ejemplo crítico (referencias)

a = 10
b = a

# 🔍 Resultado:

# a y b apuntan al mismo objeto

# Si haces:

a = 20

# Ahora:

# a apunta a 20
# b sigue apuntando a 10

# 👉 Esto demuestra que Python trabaja con referencias, no copias directas

# 4. 🧾 Sintaxis completa

nombre = "Carlos"
edad = 30
precio = 99.99
activo = True

# 🔹 Reglas:

# NO usa $
# NO requiere tipo explícito
# Sensible a mayúsculas
# Asignación con =

# 5. 🧪 Ejemplo básico

nombre = "Ana"
print(nombre)

# Salida:

# Ana

# 6. 🧠 Ejemplo aplicado (caso real)

nombre = "Luis"
edad = 25
salario = 1500.50

print(f"Empleado: {nombre}, Edad: {edad}, Salario: {salario}")

# 7. 🔍 Análisis del ejemplo

# f"" → interpolación de variables
# {} → inserta valores
# Tipado automático
# Uso real en sistemas (usuarios, datos, etc.)

# 8. ✅ Buenas prácticas

# ✔ Usar snake_case:

nombre_usuario = "Carlos"

# ✔ Nombres descriptivos:

precio_producto = 200

# ✔ Mantener consistencia

# 9. ❌ Errores comunes

# 🚫 Usar $:

# $nombre = "Juan"  # ERROR

# 🚫 Mezclar tipos incorrectamente:

# edad = "25" + 5  # ERROR

# 🚫 Nombres poco claros:

# x = 10  # Mala práctica

# 10. 🧾 Conclusión técnica

# En Python:

# Las variables no almacenan valores
# Almacenan referencias a objetos
# El tipado es dinámico
# Todo en Python es un objeto

# 👉 Este concepto es CRÍTICO para entender memoria, mutabilidad y estructuras avanzadas.

# 🧪 VALIDACIÓN DE COMPRENSIÓN (OBLIGATORIA)

# Ahora sí, responde:

1. ¿Qué almacena realmente una variable en Python?

Almacena una referencia un objeto que contiene ese valor

2. ¿Python guarda valores o referencias? Explica

guarda referenecia a un objeto que almacena ese valor en pytho todo es un objeto

3. ¿Qué significa que Python sea de tipado dinámico?

que no es necesario colocar el tipo de dato, el mismo lenguaje asimila su tipado de forma automatica

4. Corrige este código:

$edad = 25 #no debe ir simbolo $
print(edad)

