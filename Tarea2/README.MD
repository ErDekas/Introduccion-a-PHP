### Ejercicio 1: Estaciones y cumpleaños

#### Enunciado en PHP

Crea un proyecto nuevo en el que realizar los siguientes ejercicios. Cada uno de los ejercicios se escribirá en un archivo PHP distinto.

**Ejercicio 1: estaciones y cumpleaños**

Una máquina calcula la estación del año en la que nacimos. Para ello, necesita conocer la fecha de nuestro cumpleaños. Implementa un programa en PHP que solicite al usuario un día (número entero entre 1 y 31) y un mes (número entero entre 1 y 12). Solo se trabaja con años no bisiestos, es decir, que no se admite la fecha 29 de febrero: si los valores no son correctos para formar una fecha válida (números fuera del rango indicado o bien el día no es coherente con el mes), se indicará que la fecha no es correcta y finalizará el programa; si la fecha es correcta, el programa procederá a calcular a qué estación corresponde esa fecha y lo mostrará por pantalla. Ten en cuenta que:
- Se valorará que se minimice el número de líneas. Intenta utilizar los operadores lógicos para ir agrupando las condiciones de cada estación en una única sentencia `if` diferente.
- Antes de comenzar a analizar a qué estación pertenece una fecha, deberías primero comprobar que la fecha es correcta.
- Una vez que se establezca que la fecha pertenece a una estación, no deberías seguir realizando comprobaciones. No es necesario y sería ineficiente. Para ello puedes aprovechar el uso del `if/elseif`.
- Si has hecho la comprobación de tres estaciones y la fecha no corresponde con ellas, no es necesario que hagas una cuarta comprobación. Sería redundante pues sabrás seguro que estás en la cuarta estación, dado que no hay otra posibilidad. Para eso tienes el `else`.
- No puedes usar ningún método, ni la API de PHP ni propio, en ninguna parte del código. Tampoco se puede usar ninguna clase adicional, ni propia ni del API de PHP, para resolver el ejercicio; se deberán utilizar estructuras `if/else` o `if/elseif/else` obligatoriamente.

**Ejercicio 2: número de días del mes**

Estamos interesados en saber cuántos días puede tener un mes del calendario y nos han pedido que lo hagamos utilizando la sentencia `switch` y sin hacer uso de la sentencia `if`. Implementa un programa en PHP que solicite al usuario un mes (número entero entre 1 y 12) de manera que: si el valor del mes es correcto, el programa procederá a obtener cuántos días tiene ese mes y lo mostrará por pantalla. Se supone un año no bisiesto, es decir, que febrero tendrá 28 días; si el valor del mes no es correcto (número fuera del rango indicado 1-12) se mostrará el valor 0. Ten en cuenta que:
- Se deberá utilizar la estructura `switch` obligatoriamente.
- Se valorará que se minimice el número de líneas. Procura que cuando haya varias circunstancias (cláusulas `case`) en las que se deba hacer la misma acción, estén todas agrupadas y se lleve a cabo esa acción una sola vez.
- La comprobación de que el número no está en el rango debe hacerse también dentro de la estructura `switch`. Para eso dispones de la cláusula `default`.
- No puedes usar ningún método, ni la API de PHP ni propio, en ninguna parte del código. Tampoco se puede usar ninguna clase adicional, ni propia ni del API de PHP, para resolver el ejercicio.
- No pueden utilizarse estructuras `if/else` o `if/elseif/else`, ni el operador condicional (`?`). El objetivo de este ejercicio es que practiques con el uso de la estructura `switch`.

**Ejercicio 3: entrenamiento de natación**

Una deportista entrena en la piscina haciendo un largo de ida a estilo crol, un largo de vuelta a estilo espalda, un largo de ida a estilo braza y de nuevo vuelta a estilo espalda, y así sucesivamente. Implementa un programa en PHP que solicite al usuario la cantidad de largos que ha hecho la nadadora. Debe estar en el rango 0-50, ambos valores incluidos. Si el valor no está en el rango permitido, deberá volverse a solicitar para que se introduzca una cantidad válida. Se permitirá introducir hasta tres valores (tres intentos). Un tercer intento no válido hará que el programa finalice sin calcular nada indicando que se ha superado el máximo de intentos erróneos. Los valores límite del número de largos que se usarán para las comprobaciones (mínimo 0, máximo 50) deben estar almacenados como variables de tipo constante en lugar de usar literales. También debe usarse una variable de tipo constante para almacenar el número máximo de intentos (tres). En el caso de que se haya introducido finalmente una cantidad válida, se procederá a componer, utilizando obligatoriamente un bucle, una cadena de caracteres donde se representará el desarrollo de cada uno de los largos que ha realizado la nadadora durante su entrenamiento. La cadena, que se mostrará como resultado de la ejecución del programa, tendrá la siguiente estructura:
- Comenzará con una apertura de llave (carácter `{`) y un espacio en blanco.
- Se irá indicando cómo se ha hecho cada largo alternando las palabras “Crol”, “Espalda”, “Braza”, “Espalda”, “Crol”, “Espalda”, etc.
- Cada palabra debe ir separada de la anterior y de la siguiente por un espacio. Se terminará con un espacio en blanco y el cierre de llave (carácter `}`).
- Si se introducen cero largos como entrada, simplemente se mostrará una lista vacía de largos entre llaves.

**Ejercicio 4: escalera incremental**

Estamos enseñando a un niño a contar y para ello estamos realizando diversos puzzles y juegos para estimular su curiosidad y creatividad. Escribe un programa en PHP que solicite por teclado un número de filas (entre 1 y 10) y que genere una cadena de caracteres con una escalera del siguiente tipo: en cada fila habrá una cantidad de números igual al número de filas en las que se esté. Se empezará contando desde el 1 en la primera fila y ese contador se irá "arrastrando" en cada fila sucesiva. Cada número debe ir separado del siguiente por un espacio en blanco. Es decir en la primera fila habrá un único número, el 1; en la segunda, dos números (2 y 3); en la tercera, tres números (4, 5 y 6); y así sucesivamente tal y como se puede observar en el ejemplo siguiente:
```
1: 1
2: 2 3
3: 4 5 6
4: 7 8 9 10
5: 11 12 13 14 15
6: 16 17 18 19 20 21
```
Observa que al principio de cada fila se debe escribir el número de fila, dos puntos y la secuencia del contador incrementándose. Si se introduce una cantidad de filas que no se encuentra en el rango permitido (1-10, ambos inclusive), el programa volverá a solicitar la cantidad de filas hasta que ésta sea correcta el número de veces que sea necesario. Para llevar a cabo este control, te recomendamos utilizar un bucle `do-while`. Una vez que se haya construido la cadena con la escalera, debes mostrarla por pantalla como resultado final del programa. Para construir la escalera debes utilizar bucles `for`.