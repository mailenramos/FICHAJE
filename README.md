 Primera Parte - Sistema de Registro de Usuarios y Establecimientos
Integrantes:
Mailen Ramos
Matías Toledo
Descripción del Proyecto
Este proyecto consiste en el diseño y construcción de una base de datos para un sistema de registro de usuarios y sus entradas/salidas en diversos establecimientos. La base de datos permite almacenar y gestionar información de los usuarios, establecimientos y los registros de sus acciones.

El modelo de datos está compuesto por tres tablas principales:

usuarios: Almacena la información de los usuarios registrados.
establecimientos: Almacena los diferentes establecimientos donde se registra la actividad de los usuarios.
registros: Almacena las entradas y salidas de los usuarios en los establecimientos, junto con detalles como la fecha y la hora de la acción.
Modelo de Datos
El sistema está estructurado con las siguientes relaciones:

Relación 1
entre usuarios y registros: Cada usuario puede tener múltiples registros de entrada/salida.
Relación 1
entre establecimientos y registros: Cada establecimiento puede tener múltiples registros de entrada/salida.
Tablas:
usuarios

id: Primary Key. Identificador único del usuario.
dni: Documento de identidad.
nombre: Nombre del usuario.
email: Correo electrónico del usuario.
telefono: Teléfono de contacto.
password: Contraseña del usuario (encriptada).
establecimientos

id: Primary Key. Identificador único del establecimiento.
establecimiento: Nombre o descripción del establecimiento.
registros

id: Primary Key. Identificador único del registro.
usuario_id: Foreign Key que referencia al usuario.
action: Acción registrada, ya sea 'ENTRADA' o 'SALIDA'.
fecha: Fecha de la acción.
hora: Hora de la acción.
establecimiento_id: Foreign Key que referencia al establecimiento.
ubicacion: Descripción textual de la ubicación dentro del establecimiento.
Relación de Tablas
La tabla registros tiene dos claves foráneas:
usuario_id hace referencia a la tabla usuarios.
establecimiento_id hace referencia a la tabla establecimientos.
Esto permite que un registro contenga información tanto del usuario como del establecimiento donde ocurrió la entrada o salida.
