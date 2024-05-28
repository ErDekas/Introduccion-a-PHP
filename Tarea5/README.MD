Claro, aquí tienes el enunciado reescrito para una práctica en PHP:

---

## Descripción de la tarea

Escribe un programa en PHP para gestionar la convocatoria de un equipo de baloncesto. Tendremos un archivo con una lista de jugadores (`jugadores.txt`) de un equipo, pero hay varios jugadores que se han dado de baja. Estos jugadores los tenemos en otro fichero (`faltan.txt`).

### Objetivo

Crea un array con los jugadores que están en la plantilla. La clase `Jugador` estará formada por tres atributos: `dorsal` (int), `nombre` (String) y `mote` (String). Debes crear los métodos convencionales (getters, setters) e implementar también el método `__toString()` de la clase `Jugador` para que dé la misma salida por jugador que el archivo `jugadores.txt`. En este caso, sería:

```
Juan 3 Pelucas
```

### Requisitos

1. **Leer los archivos:**
   - Lee el archivo `jugadores.txt` para obtener la lista de jugadores actuales.
   - Lee el archivo `faltan.txt` para obtener la lista de jugadores que se han dado de baja.

2. **Crear la clase `Jugador`:**
   - Atributos:
     - `dorsal` (int)
     - `nombre` (String)
     - `mote` (String)
   - Métodos:
     - Métodos "get" para los atributos.
     - Métodos "set" para los atributos.
     - Método `__toString()` para representar al jugador como una cadena en el formato: `nombre dorsal mote`.

3. **Filtrar jugadores:**
   - Crea un array con los jugadores que están en la plantilla actual excluyendo aquellos que se han dado de baja.

4. **Escribir el nuevo archivo:**
   - Crea un nuevo archivo `nuevaJugadores.txt` que contenga la lista actualizada de jugadores.
   - La primera línea debe indicar el número de jugadores actuales.
   - Las siguientes líneas deben listar a los jugadores restantes en el formato especificado.

5. **Borrar archivos antiguos:**
   - Elimina los archivos `faltan.txt` y `jugadores.txt`.

### Implementación

1. **Clase `Jugador`:**
   - Define la clase con los atributos y métodos mencionados.
   - Implementa el método `__toString()`.

2. **Lectura de archivos:**
   - Lee los archivos `jugadores.txt` y `faltan.txt`.
   - Convierte los datos leídos en objetos de tipo `Jugador`.

3. **Filtrado de la lista de jugadores:**
   - Excluye los jugadores que se encuentran en `faltan.txt` de la lista de `jugadores.txt`.

4. **Escritura del nuevo archivo:**
   - Escribe el archivo `nuevaJugadores.txt` con la lista actualizada de jugadores.

5. **Borrado de archivos antiguos:**
   - Elimina `faltan.txt` y `jugadores.txt`.

Con este enunciado y el ejemplo de código, deberías poder implementar la práctica en PHP para gestionar la convocatoria de un equipo de baloncesto. Asegúrate de tener los archivos `jugadores.txt` y `faltan.txt` en el mismo directorio que tu script PHP.