# PHP
## Comentarios, variables, constantes
### Comentarios

-----

Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.


## Variables y Constantes

Ambas sirven para guardar informacion, pero funcionan de forma distinta:

Variables: Son "Contenedores" para datos que puedan cambiar durante la ejecucion.

Siempre empiezan con el signo peso ($) seguido del nombre de la variable. (ejemplo: $edad = 25; )

## Constantes

son valores fijos que NO pueden eliminarse ni modificarse una vez definidos.
se crean usando la funcion "define()" o la palabra clave "const", y a diferencia de las variables, no llevan

## Arrays y Arrays Asociativos
Un array permite almacenar múltiples valores en una sola variable, funcionando como una lista potente.

Arrays (Indexados): Los datos se organizan por posiciones numéricas (índices), que automáticamente empiezan desde el 0.
Por ejemplo, en una lista de frutas, la primera sería la posición 0, la segunda la 1, y así sucesivamente.

Arrays Asociativos: En lugar de usar números, utilizas nombres o "claves" personalizadas para guardar y encontrar los datos.

Se escriben en formato clave → valor (ejemplo: "nombre" => "Ana"). 

Son ideales cuando quieres asociar etiquetas con significado a los valores, como los detalles de un usuario.

## operadores: arismeticos,asignacion;comparacion,logicos,ingrimento/decremento

# Guía de PHP: Comentarios, Variables, Arrays y Operadores

Este documento resume los conceptos fundamentales de PHP para principiantes, cubriendo desde la sintaxis básica hasta el manejo de operadores.

## 1. Comentarios
Notas que el servidor ignora, útiles para documentar el código.
- **Línea única:** `//` o `#`
- **Multilínea:** `/* contenido */`

## 2. Variables y Constantes
- **Variables (`$variable`):** Contenedores de datos que pueden cambiar.
- **Constantes (`define` / `const`):** Valores inmutables. No llevan `$`.

## 3. Arrays
- **Indexados:** Acceso por posición numérica (empieza en 0).
- **Asociativos:** Acceso mediante claves personalizadas (`"clave" => "valor"`).

## 4. Operadores
- **Aritméticos:** `+`, `-`, `*`, `/`, `%` (módulo), `**` (potencia).
- **Asignación:** `=`, `+=`, `-=`, `*=`, `/=`.
- **Comparación:** `==` (valor), `===` (valor y tipo), `!=`, `<`, `>`, `<=`, `>=`.
- **Lógicos:** `&&` (AND), `||` (OR), `!` (NOT).
- **Incremento/Decremento:** `++`, `--`.