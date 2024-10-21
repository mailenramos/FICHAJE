 Primera Parte - Sistema de Registro de Usuarios y Establecimientos
Integrantes:
Mailen Ramos
Matías Toledo
Descripción del Proyecto
Este proyecto consiste en el diseño y construcción de una base de datos para un sistema de registro de usuarios y sus entradas/salidas en diversos establecimientos. La base de datos permite almacenar y gestionar información de los usuarios, establecimientos y los registros de sus acciones.

Tabla establecimientos:
Columnas:
id: Identificador único del establecimiento (clave primaria).
nombre: Nombre del establecimiento.
ciudad: Ciudad donde se ubica.
direccion: Dirección del establecimiento.
imagen: Ruta de una imagen representativa.

Uso: Almacena información sobre diferentes establecimientos, como colegios.

Tabla registros:
Columnas:
id: Identificador único del registro (clave primaria).
nombre: Nombre del empleado que realiza la acción.
action: Indica si la acción es una "ENTRADA" o "SALIDA".
fecha: Fecha del registro.
hora: Hora del registro.
establecimiento_id: Relaciona el registro con un establecimiento específico (clave foránea).

Uso: Registra las entradas y salidas de los empleados en diferentes establecimientos.

Tabla usuarios:
Columnas:
id: Identificador único del usuario (clave primaria).
usuario: Nombre de usuario para el acceso.
password: Contraseña encriptada del usuario.


La tabla registros está vinculada a la tabla establecimientos a través de la columna establecimiento_id, que actúa como clave foránea. Esto significa que cada registro  está relacionado con un establecimiento específico.
