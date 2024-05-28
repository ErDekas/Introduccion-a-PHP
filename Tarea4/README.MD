## Descripción de la tarea

La tarea a realizar se centrará en la creación de la clase `Monstruo`, la definición y utilización de métodos básicos y también el trabajo con constructores y parámetros en PHP.

### Objetivo

Construye un proyecto utilizando PHP que defina la clase `Monstruo`, sabiendo que un monstruo tendrá un nombre, una `posicionX`, una `posicionY` (enteros para saber en qué posición de la pantalla se encuentra el monstruo), un color (que habrá que declararlo como cadena de caracteres) y un booleano `vivo`, que determinará si está vivo o muerto.

### Requisitos

1. **Constantes de clase:**
    - `MIN_POSICION_X = 0`
    - `MAX_POSICION_X = 80`
    - `MIN_POSICION_Y = 0`
    - `MAX_POSICION_Y = 60`

2. **Atributos de clase (privados):**
    - `numMonstruosTotales` que almacenará en cada momento el número total de monstruos creados.
    - `numMonstruosVivos` que almacenará el número total de monstruos vivos.

3. **Constructor con parámetros para la clase `Monstruo`:**
    - Inicializa los atributos del objeto con los valores que se le pasen como parámetros. Un monstruo recién creado siempre está vivo. Se debe comprobar que los parámetros son válidos.

4. **Constructor sin parámetros para la clase `Monstruo`:**
    - Permite crear un objeto con los siguientes valores "por defecto" a sus atributos:
        - `nombre`: "Sin nombre"
        - `posicionX`: 0
        - `posicionY`: 0
        - `color`: "rojo"

5. **Métodos necesarios:**
    - Métodos "get" de: `nombre`, `posicionX`, `posicionY`, `color`, `vivo` (isVivo), `numMonstruosTotales` y `numMonstruosVivos`.
    - Métodos "set" de: `nombre`, `posicionX`, `posicionY`, `color`.
    - Método `void muere()`: cambia la variable `vivo` a `false`.
    - Método `void desplazarse(int unidadesX, int unidadesY, boolean derecha, boolean arriba)`: recibe el número de unidades a sumar a la posición X actual, el número de unidades a sumar a la posición Y actual, si el movimiento es a la derecha o no, y si el movimiento es hacia arriba o no. Por ejemplo, si se quiere desplazar el monstruo hacia la izquierda y hacia abajo, en dos unidades horizontales y tres verticales, entonces se efectuaría una llamada con los parámetros `desplazarse(2, 3, false, false)`.
    - Método `__toString()`: que devuelva un `string` indicando sus valores, por ejemplo: "El monstruo Willy está en la posición (22, 42), es de color rosa y está vivo", que usarás en la opción 8 del menú de la aplicación del siguiente apartado, para mostrar los datos de un monstruo.

6. **Enumerado de colores:**
    - Declarar un enumerado con los valores `BLANCO`, `ROSA`, `AMARILLO`, `ROJO`, `AZUL`, `VERDE`, que son los valores que puede admitir el atributo del color del monstruo.

### Clase de Prueba

Crea una clase `PruebaMonstruo` que tendrá un método `main()` que ofrezca un menú como el siguiente:

```
Configuración de Monstruos.
================================
   1.- Crear un nuevo monstruo sin datos.
   2.- Crear un nuevo monstruo con datos conocidos.
   3.- Asignar nombre a un monstruo.
   4.- Asignar posición X a un monstruo.
   5.- Asignar posición Y a un monstruo.
   6.- Asignar color a un monstruo.
   7.- Matar un monstruo.
   8.- Mostrar por pantalla los datos de un monstruo.
   0.- Salir de la aplicación.
================================ 
  Introduzca la opción elegida:
```

Debes implementar la funcionalidad de cada una de las opciones del menú. Para esto, usaremos un array de variables de tipo `Monstruo`, de tamaño 10. Las opciones que asignan un valor (3 a 7) podrán hacerlo para cualquiera de los elementos del array.

La opción de mostrar por pantalla los datos de un monstruo (8) lo hará mostrando uno a uno el valor de cada atributo recogido con el método "get" correspondiente, junto a un texto que indique de qué valor se trata y utilizando el método `__toString()`.

Naturalmente, tras realizar cualquiera de las opciones de la 1 a la 8, el menú debe volverse a mostrar, permitiendo elegir una nueva opción, hasta que se introduzca la opción 0 para salir. Cuando esto ocurra, se mostrarán por pantalla los valores de los atributos de clase.
