# los condicionales 

Los condicionales son estructuras que permiten tomar decisiones dentro de un programa. Gracias a ellos, el flujo de ejecución puede variar según se cumplan o no determinadas condiciones.

Un condicional evalúa una expresión lógica y, dependiendo de si el resultado es verdadero o falso, ejecuta diferentes bloques de instrucciones. Esto hace posible que el programa responda de manera dinámica a distintos escenarios.

Existen varias formas de usar condicionales en PHP:

## if:
se emplea para ejecutar un bloque de código únicamente cuando la condición es verdadera.

## if ... else: 
añade una alternativa, de modo que se ejecuta un bloque si la condición es verdadera y otro si es falsa.

## elseif: 
permite evaluar múltiples condiciones de manera secuencial, ofreciendo más de dos caminos posibles.

## switch: 
resulta útil cuando se necesita comparar una misma variable con varios valores posibles, simplificando la estructura en lugar de usar múltiples if.

## Bucles 

**While** → Es un bucle que primero evalúa una condición antes de ejecutar cualquier instrucción. Solo si esa condición es verdadera entra al ciclo y repite el proceso continuamente hasta que deje de cumplirse. Esto significa que existe la posibilidad de que el bloque de código no se ejecute nunca si la condición es falsa desde el inicio. Se utiliza cuando no se sabe exactamente cuántas veces se repetirá el proceso, pero sí se conoce la condición que debe cumplirse.
**Do While** → Es un bucle que ejecuta el bloque de código primero y después evalúa la condición. Esto garantiza que el contenido del ciclo se ejecute al menos una vez, sin importar si la condición es verdadera o falsa desde el principio. Es útil en situaciones donde se necesita que una acción ocurra obligatoriamente antes de validar si debe repetirse.
**For** → Es un bucle más estructurado que integra en una sola línea la inicialización de la variable, la condición y el cambio que se le hace en cada repetición. Se utiliza principalmente cuando se conoce de antemano cuántas veces se quiere ejecutar un bloque de código. Permite un mayor control y organización del ciclo, haciendo que sea más claro y compacto cuando el número de iteraciones está definido.