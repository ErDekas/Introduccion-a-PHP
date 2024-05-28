### Descripción de la tarea

Desarrolla una aplicación de gestión de una biblioteca en PHP, que incluye una interfaz de menú para facilitar la interacción con el sistema. Esta aplicación permitirá no solo el registro y la gestión de libros y usuarios, sino también el manejo eficiente de préstamos para mantener un control sobre los libros disponibles.

### Objetivo

La aplicación debe proporcionar las siguientes funcionalidades a través de una interfaz de menú:

1. **Registrar nuevos usuarios** teniendo en cuenta las restricciones de unicidad.
2. **Ver la información de un usuario:** Mostrar el valor de todos los atributos incluyendo el histórico de préstamos.
3. **Registrar nuevos libros** teniendo en cuenta las restricciones de unicidad.
4. **Ver la información de un libro:** Mostrar el valor de todos los atributos, si está disponible o en préstamo y el histórico de préstamos.
5. **Realizar préstamos de libros a usuarios.**
6. **Finalizar un préstamo activo** (cuando se devuelve el libro prestado).
7. **Consultar (listar) los libros disponibles.**
8. **Consultar (listar) los préstamos activos.**

### Especificaciones Técnicas

Se deben implementar las clases `Libro`, `Usuario` y `Prestamo`, que encapsulen los atributos y métodos necesarios.

#### Clase `Usuario`

Atributos privados:
- `id`: Identificador único (tipo: String - código alfanumérico)
- `nombre`: Nombre del usuario (tipo: String)
- `correo`: Correo del usuario único (tipo: String)

#### Clase `Libro`

Atributos privados:
- `id`: Identificador único (tipo: String - código alfanumérico)
- `titulo`: Título del libro (tipo: String)
- `autor`: Autor del libro (tipo: String)

#### Clase `Prestamo`

Atributos privados:
- `usuario`: Usuario del préstamo (tipo: Usuario)
- `libro`: Libro prestado (tipo: Libro)
- `fechaInicio`: Fecha de inicio del préstamo (tipo: Date)

### Estructuras de Datos

- `ArrayList` para gestionar la colección de usuarios registrados.
- `ArrayList` para gestionar la colección de libros registrados.
- `HashMap<String, ArrayList<Prestamo>>` para gestionar el histórico de préstamos del usuario a través de su identificador.
- `HashMap<String, ArrayList<Prestamo>>` para gestionar el histórico de préstamos del libro a través de su identificador.
- `LinkedHashSet<Prestamo>` para mantener el listado de préstamos activos.

### Valoraciones adicionales

Se valorará, además del funcionamiento correcto de la aplicación:

1. La calidad y organización del código, así como la implementación de clases propias.
2. La funcionalidad, claridad y facilidad de uso de la interfaz de menú.
3. La documentación (`PHPDoc`) y claridad de los comentarios en el código.
4. La creatividad en la resolución de problemas y el diseño de la interfaz de usuario.
5. El control de todos los posibles errores (control de excepciones).

### Detalles adicionales

- **Calidad y organización del código:** Asegúrate de seguir buenas prácticas de codificación.
- **Funcionalidad y claridad de la interfaz:** La interfaz de menú debe ser fácil de usar y clara.
- **Documentación y comentarios:** Incluye PHPDoc y comentarios claros en el código.
- **Creatividad y diseño:** Sé creativo en la resolución de problemas y en el diseño de la interfaz de usuario.
- **Control de excepciones:** Implementa control de errores para manejar posibles problemas.