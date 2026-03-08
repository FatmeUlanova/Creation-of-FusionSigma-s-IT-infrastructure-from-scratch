**Ámbito Base de Datos**

<div>

</div>

<img src="Pictures/1000000000000159000001534032C0E7.jpg"
style="width:2.397cm;height:2.357cm" />**

<span id="anchor"></span>
<span id="anchor-1"></span><img src="Pictures/10000001000003860000036A2F98A32D.png"
style="width:2.272cm;height:2.284cm" />

### <span id="anchor-2"></span> Diseño de la Base de Datos a Utilizar - Modelo Entidad-Relación (E/R)

FUsiónSigma necesita una base de datos para gestionar sus operaciones,
que incluyen:

\-**Gestión de Clientes**: Almacenar información de clientes (empresas
que usan los servicios de FusiónSigma).

**Gestión de Proyectos**: Registrar proyectos (desarrollo de software,
consultoría) asociados a clientes.

**Gestión de Empleados**: Gestionar información de los empleados (los 22
usuarios, incluyendo CEO y CTO) y su asignación a proyectos.

**Gestión de Tareas**: Seguimiento de tareas dentro de los proyectos,
asignadas a empleados.

**\*Integración con la Nube**: La base de datos debe sincronizarse con
servicios en la nube (AWS, GCP, Azure) para respaldos y análisis.

**Aplicación Web**: La base de datos debe soportar una aplicación web
para que los empleados (V2) accedan a la información (por ejemplo, ver
proyectos, registrar tareas).

#### <span id="anchor-3"></span>1. Identificación de Entidades y sus atributos.

Ahora vamos a analizar las entidades y relaciones del modelo del
FUsionSigma.

Tenemos las entidades de:

-Cliente

-Proyecto

-Tarea

-Empleado

Asignamos los atributos para cada identidad:

1.  Cliente:

    - Atributos:

      - ClienteID INT.
      - Nombre VARCHAR(50).
      - Email VARCHAR(50)
      - Telefono INT.
      - Direccion VARCHAR(100).

<!-- -->

1.  - - Pais VARCHAR (45)

<!-- -->

1.  - Descripción: Representa a los clientes de FusiónSigma.

2.  Proyecto:

    - Atributos:

<!-- -->

1.  - - ProyectoID INT(clave primaria).

<!-- -->

1.  - - Descripción VARCHAR (250)
      - FechaInicio DATE.
      - FechaFin DATE.

<!-- -->

1.  - - ClienteID INT(clave foránea).

<!-- -->

1.  - Descripción: Representa los proyectos asociados a un cliente.

2.  Empleado:

    - Atributos:

      - EmpleadoID INT(clave primaria).
      - Nombre VARCHAR(50)

<!-- -->

1.  - - Apellido VARCHAR(50).

<!-- -->

1.  - - Email VARCHAR (100).

      - Rol VARCHAR (45(por ejemplo, "CEO", "CTO", "Desarrollador")).

    - Descripción: Representa a los empleados de FusiónSigma (los 22
      usuarios).

2.  Tarea:

    - Atributos:

      - TareaID INT(clave primaria).

      - Nombre VARCHAR(100).

      - Descripción VARCHAR(250).

      - FechaInicio DATE.

      - FechaFin DATE.

      - Estado VARCHAR(20(ejemplo"Pendiente", "En Progreso",
        "Completada")).

      - ProyectoID INT(clave foránea).

      - EmpleadoID INT(clave foránea, referencia a Empleado).

    - Descripción: Representa las tareas dentro de un proyecto,
      asignadas a un empleado.

#### <span id="anchor-4"></span>2. Identificación de relaciones.

\* Relación: Cliente **CONTRATA** Proyecto

Cardinalidad:

Cliente: (0,n) → Un cliente puede contratar cero o muchos proyectos.

Proyecto: (1,1) → Un proyecto debe pertenecer a exactamente un cliente.

\* Relación: Proyecto **CONTIENE** Tarea

Cardinalidad:

Proyecto: (0,n) → Un proyecto puede contener cero o muchas tareas.

Tarea: (1,1) → Una tarea debe pertenecer a exactamente un proyecto.

3\. Relación: Empleado **ASIGNADO_A** Tarea

Cardinalidad:

Empleado: (0,n) → Un empleado puede estar asignado a cero o muchas
tareas.

Tarea: (1,1) → Una tarea debe estar asignada a exactamente un empleado.

#### <span id="anchor-5"></span> 3. Definición de los Roles

En la relación **CONTRATA :**

- Cliente-Proyecto **(1:N)**:

  - Un cliente puede tener muchos proyectos, pero un proyecto pertenece
    a un solo cliente.
  - Representado por la clave foránea ClienteID en la entidad Proyecto.

En la relación **CONTIENE** :

- Proyecto-Tarea **(1:N)**:

  - Un proyecto puede tener muchas tareas, pero una tarea pertenece a un
    solo proyecto.
  - Representado por la clave foránea ProyectoID en la entidad Tarea.

Y en la relación **ASIGNADO_A :**

- Empleado-Tarea **(1:N)**:

  - Un empleado puede estar asignado a muchas tareas, pero una tarea es
    asignada a un solo empleado.
  - Representado por la clave foránea EmpleadoID en la entidad Tarea.

#### <span id="anchor-6"></span>4.Modelo Entidad-Relación (E/R)

<img src="Pictures/10000001000003BC00000232D57AE52A.png"
style="width:17cm;height:9.992cm" />

###### <span id="anchor-7"></span>Herramientas que se van usar:

En el siguiente
[enlace](https://docs.google.com/document/d/1zqeYqEpBnY-HALB-ppVhOdVKAzgbbxW1sTAyfNWd6nM/edit?usp=sharing)
se pueden consultar la lista de herramientas que necesitamos

para llevar a cabo la solución propuesta.

#### <span id="anchor-8"></span>5.Planteamiento de una aplicación Web con BBDD como solución.

Planteamiento de una Aplicación Web con BBDD como Solución para
FusiónSigma

El objetivo de este planteamiento es desarrollar una base de datos
relacional que centralice y organice la información clave de
FusiónSigma, una empresa de servicios con 22 empleados que gestiona
clientes, proyectos, y tareas, con el propósito de optimizar la gestión
operativa y facilitar el acceso a la información para los empleados, el
CEO, y el CTO. La base de datos, diseñada con un modelo Entidad-Relación
(E/R) que incluye las entidades Cliente, Proyecto, Empleado, y Tarea, y
las relaciones CONTRATA, CONTIENE, y ASIGNADO_A, se alojará en el
Servidor 1 (10.13.0.10 VLAN 1) con una réplica en el Servidor 2
(10.13.0.200 VLAN 1) para garantizar redundancia.

\*Consulta [Esquemas Lógicos y Físico de
FUsionSigma](https://drive.google.com/file/d/1CD5kq5-vxuBwzLMswwd2lDmb31IC7NU4/view?usp=sharing)
(Incluidos ambos en el Ámbito de Redes).

Para interactuar con esta base de datos, se diseñará una aplicación web
que será accesible desde los dispositivos de la VLAN 2 (sobremesas,
portátiles, CEO, y CTO) y se alojará en el Servidor 1, aprovechando la
infraestructura existente (dirección 10.13.0.10). La aplicación web se
desarrollará utilizando el lenguaje de programación PHP con el framework
Laravel, lo que permitirá a los empleados realizar operaciones sobre la
base de datos de manera intuitiva y segura sin necesidad de acceder
directamente al sistema de gestión de bases de datos (DBMS), que será
MySQL. Las operaciones soportadas incluirán: Agregar nuevos datos: Crear
nuevos clientes, proyectos, y tareas (por ejemplo, registrar un nuevo
cliente o asignar una tarea a un empleado).

Eliminar datos no útiles: Eliminar clientes inactivos, proyectos
finalizados, o tareas completadas que ya no sean relevantes.

Modificar datos existentes: Actualizar información de clientes (como
email o teléfono), cambiar el estado de una tarea (Pendiente, En
Progreso, Completada), o reasignar tareas a otros empleados.

#### <span id="anchor-9"></span>6. Modelo E/R con WorkBench:

<img src="Pictures/100000010000040C000001DD498F9BB9.png"
style="width:17cm;height:7.826cm" />

#### <span id="anchor-10"></span>7. SQL Script generado por MySQL Workbench:

Para consultar el script [Link SQL
Script](https://drive.google.com/file/d/1fwG_dJMc9kJzJ43HqnCjZz-pxXGjYaPd/view?usp=sharing).

8\. Scripts SQL de inserción de datos en cada tabla.

EMPLEADO:

<img src="Pictures/10000001000002F0000001CA5694D765.png"
style="width:12.908cm;height:7.862cm" />

#### 

#### 

<span id="anchor-11"></span>CLIENTE:

<img src="Pictures/10000001000003BD000001B067831CCD.png"
style="width:17cm;height:7.673cm" />

PROYECTO:

<img src="Pictures/10000001000003EA000001B812566439.png"
style="width:17cm;height:7.465cm" />

TAREA:

<img src="Pictures/1000000100000427000001A81475AB0C.png"
style="width:17cm;height:6.779cm" />

<span id="anchor-12"></span>\*Para consultar:
[Link](https://drive.google.com/file/d/1NZMg38j7dfeg88h_WbaIrl3PWedKYtYf/view?usp=sharing)

#### <span id="anchor-13"></span>9. Ficheros LOG:

-Habilitación del General Log:

Ejecutamos el comando SQL en los base de datos “fusionsigma”:

SET GLOBAL general_log = 1;

O desde la carpeta “bin” en el archivo “mi.ini”:

<img src="Pictures/1000000100000179000000440E2D166D.png"
style="width:7.98cm;height:1.439cm" />

Y aqui esta el archivo log de mi servidor…

<img src="Pictures/10000001000006BA0000029F28DBB066.png"
style="width:17cm;height:6.623cm" />

Para consultar el archivo entero:
[fatme.log](https://drive.google.com/file/d/1PEMjHJJSBv_Gvr99u9zoBqaNlAwcnFi5/view?usp=sharing)

#### <span id="anchor-14"></span>9. Copias de seguridad:

En este apartado se detalla la política de copias de seguridad diseñada
para garantizar la integridad y disponibilidad de los datos de la base
de datos "fusionsigma", utilizada por la aplicación FUsionSigma. A
continuación, se describen los procedimientos, frecuencias y buenas
prácticas:

Copia de Seguridad Completa

\-**Frecuencia:** Se realizará una copia de seguridad completa de la
base de datos "fusionsigma" al inicio de cada trimestre (por ejemplo, 1
de enero, 1 de abril, 1 de julio y 1 de octubre).

\-**Propósito:** Esta copia servirá como punto de referencia para las
copias diferenciales posteriores y garantizará una restauración completa
en caso de fallo grave.

\-**Método:** Utilizar herramientas como mysqldump (si es MySQL) o
pg_dump (si es PostgreSQL) dependiendo de los base de datos que se van
usar para generar un archivo con la estructura y datos completos.

Script para Copia Completa (bash)

\#!/bin/bash

DATE=\$(date +%Y-%m-%d)

BACKUP_DIR="/var/backups/FusionSigma"

**DB_NAME="**f**usion**s**igma"**

DB_USER="root"

DB_PASS="contraseña"

**mysqldump -u \$DB_USER -p\$DB_PASS \$DB_NAME \>
\$BACKUP_DIR/**f**usion**s**igma_full\_\$DATE.sql**

echo "Copia completa realizada: \$DATE"

Copia de Seguridad Diferencial

**-Frecuencia:** Se creará una copia de seguridad diferencial de
"FusionSigmaDB" al final de cada mes del trimestre (por ejemplo, 31 de
enero, 28/29 de febrero, 31 de marzo, etc.), tomando como base la copia
completa del inicio del trimestre.

**-Propósito:** Capturar los cambios realizados desde la última copia
completa, optimizando el espacio y tiempo de respaldo.

**-Método:** Configurar un script que compare los datos con la copia
completa y guarde solo las modificaciones.

Script para Copia Diferencial

(Requiere una herramienta que soporte diferenciales, como mysqldump con
--where para cambios específicos o binlogs activados):

\#!/bin/bash

DATE=\$(date +%Y-%m-%d)

**BACKUP_DIR="/var/backups/**f**usionSigma"**

**DB_NAME="**f**usion**s**igma"**

DB_USER="root"

DB_PASS="contraseña"

mysqldump -u \$DB_USER -p\$DB_PASS \$DB_NAME --where="updated_at \>
(SELECT MAX(updated_at) FROM last_full_backup)" \>
\$BACKUP_DIR/FusionSigmaDB_diff\_\$DATE.sql

echo "Copia diferencial realizada: \$DATE"

Almacenamiento de Copias

**-Ubicación:** Todas las copias de seguridad se almacenarán en un
directorio específico del servidor, como /var/backups/fusionsigma/.

**-Respaldo Adicional:** El directorio será sincronizado regularmente
con un almacenamiento externo (servicio en la nube como AWS S3) para
mayor seguridad. Para este propósito se va usar Duplicati:

<img src="Pictures/100000010000051C0000037CCC17BF4F.png"
style="width:11.476cm;height:7.825cm" />

**-Nomenclatura:** Los archivos seguirán un formato claro, como
fusionsigma_full_2025-04-01.sql para copias completas y
fusionsigma_diff_2025-04-30.sql para diferenciales.

Gestión del Espacio en Disco

**-Verificación:** Antes de cada copia, se comprobará que el servidor
tenga suficiente espacio disponible (mínimo un 20% libre).

**-Rotación de Logs:** Configurar el sistema de logs de la base de datos
(binlogs en MySQL) para que roten semanalmente y se eliminen los
archivos antiguos tras 30 días, evitando acumulación innecesaria.

Monitoreo y Validación

**-Revisión Periódica:** Cada mes, un administrador revisará los logs de
las copias de seguridad para detectar errores o fallos.

**-Pruebas de Restauración:** Trimestralmente, se realizará una
restauración de prueba en un entorno aislado para confirmar que las
copias son funcionales y los datos recuperables.

Documentación

**Contenido:** Se mantendrá un documento actualizado con:

-Horarios de las copias (copia completa a las 00:00 del primer día del
trimestre, diferencial a las 23:59 del último día del mes).

-Ubicación exacta de los archivos (/var/backups/fusionsigma/ y copia en
AWS S3 bucket fusionsigma-backups).

-Procedimiento de recuperación paso a paso (mysql -u root -p fusionsigma
\< backup_file.sql).

-Cron para Automatización

\*Copia completa: 0 0 1 \*/3 \* /path/to/full_backup.sh (cada 3 meses).

\*Copia diferencial: 59 23 28-31 \* \* /path/to/diff_backup.sh (último
día del mes).

-Responsable: El trabajador de Seguridad será responsable para esta
política.

#### <span id="anchor-15"></span>10.Creación de Vistas:

1.Vista: Proyectos por Cliente

Esta vista mostrará todos los proyectos asociados a cada cliente, junto
con información básica del cliente.

CREATE VIEW vw_ProyectosPorCliente AS

SELECT <img src="Pictures/10000001000001B500000111BEDA96E9.png"
style="width:7.952cm;height:4.967cm" />

c.ClienteID,

c.Nombre AS NombreCliente,

c.Email AS EmailCliente,

p.ProyectoID,

p.Descripcion AS DescripcionProyecto,

p.FechaInicio,

p.FechaFin

FROM

CLIENTE c

JOIN PROYECTO p ON c.ClienteID = p.CLIENTE_ClienteID;

2.Vista: Tareas por Proyecto

Esta vista mostrará todas las tareas asociadas a cada proyecto,
incluyendo el estado de las tareas.

CREATE VIEW vw_TareasPorProyecto AS

SELECT <img src="Pictures/10000001000001AC000001159A0ED514.png"
style="width:9.073cm;height:5.872cm" />

p.ProyectoID,

p.Descripcion AS DescripcionProyecto,

t.TareaID,

t.Nombre AS NombreTarea,

t.Descripcion AS DescripcionTarea,

t.FechaInicio,

t.FechaFin,

t.Estado

FROM

PROYECTO p

JOIN TAREA t ON p.ProyectoID = t.PROYECTO_ProyectoID;

3\. Vista: Empleados por Tarea

Esta vista mostrará qué empleado está asignado a cada tarea, junto con
detalles del empleado.

CREATE VIEW vw_EmpleadosPorTarea
AS<img src="Pictures/10000001000001D30000010791C0E7F9.png"
style="width:9.885cm;height:5.567cm" />

SELECT

t.TareaID,

t.Nombre AS NombreTarea,

t.Estado,

e.EmpleadoID,

e.Nombre AS NombreEmpleado,

e.Apellido,

e.Rol

FROM

TAREA t

JOIN EMPLEADO e ON t.EMPLEADO_EmpleadoID = e.EmpleadoID;

4\. Vista: Proyectos Activos

Esta vista mostrará todos los proyectos que aún no han finalizado
(basado en la FechaFin mayor a la fecha actual o FechaFin nula).

CREATE VIEW vw_ProyectosActivos
AS<img src="Pictures/10000001000001A00000010165D7CAFD.png"
style="width:9.243cm;height:5.71cm" />

SELECT

p.ProyectoID,

p.Descripcion AS DescripcionProyecto,

c.Nombre AS NombreCliente,

p.FechaInicio,

p.FechaFin

FROM

PROYECTO p

JOIN CLIENTE c ON p.CLIENTE_ClienteID = c.ClienteID

WHERE

p.FechaFin IS NULL OR p.FechaFin \> CURRENT_DATE;

5\. Vista: Tareas Pendientes por Empleado

Esta vista mostrará todas las tareas pendientes (estado diferente de
"Completada") asignadas a cada empleado.

CREATE VIEW vw_TareasPendientesPorEmpleado
AS<img src="Pictures/10000001000001AD0000013C918222BC.png"
style="width:8.7cm;height:6.408cm" />

SELECT

e.EmpleadoID,

e.Nombre AS NombreEmpleado,

e.Apellido,

t.TareaID,

t.Nombre AS NombreTarea,

t.Descripcion,

t.FechaInicio,

t.FechaFin,

t.Estado

FROM

EMPLEADO e

JOIN TAREA t ON e.EmpleadoID = t.EMPLEADO_EmpleadoID

WHERE

t.Estado != 'Completada';

6\. Vista: Resumen de Proyectos y Tareas

Esta vista proporcionará un resumen con el número de tareas por proyecto
y el estado general del proyecto (calculando si todas las tareas están
completadas).

CREATE VIEW vw_ResumenProyectosTareas AS

SELECT

p.ProyectoID,

p.Descripcion AS DescripcionProyecto,

c.Nombre AS NombreCliente,

COUNT(t.TareaID) AS TotalTareas,

SUM(CASE WHEN t.Estado = 'Completada' THEN 1 ELSE 0 END) AS
TareasCompletadas,

CASE

WHEN COUNT(t.TareaID) = SUM(CASE WHEN t.Estado = 'Completada' THEN 1
ELSE 0 END) THEN 'Completado'

ELSE 'En Progreso'

END AS EstadoProyecto

FROM

PROYECTO p

JOIN CLIENTE c ON p.CLIENTE_ClienteID = c.ClienteID

LEFT JOIN TAREA t ON p.ProyectoID = t.PROYECTO_ProyectoID

GROUP BY

p.ProyectoID, p.Descripcion, c.Nombre;

<img src="Pictures/10000001000003020000015FB907D338.png"
style="width:13.487cm;height:6.147cm" />

<img src="Pictures/10000001000005C60000015ECF5C2C92.png"
style="width:17cm;height:4.025cm" />

#### <span id="anchor-16"></span>11.Diseño de Interfaces y Soluciones Web:

El diseño de las interfaces de nuestra aplicación web se desarrollará
utilizando HTML y CSS. HTML proporcionará la estructura y el contenido
del documento, mientras que CSS se encargará de aplicar un estilo visual
atractivo y funcional a la página. Implementaremos un diseño responsivo
que garantice una correcta visualización en todo tipo de dispositivos,
desde pantallas de ordenador hasta teléfonos móviles.

Además, se va considerar, si nuestra aplicación web no solo será
utilizada por usuarios con los navegadores más recientes. En la medida
de lo posible, aseguraremos compatibilidad con navegadores modernos y
antiguos, incluyendo desde Chrome hasta Internet Explorer. Para ofrecer
una experiencia dinámica, la web realizará consultas a nuestra base de
datos y enviará notificaciones al cliente. Esto se logrará mediante el
uso de PHP y JavaScript: PHP gestionará las interacciones con el
servidor y la base de datos, mientras que JavaScript aportará dinamismo
en la interfaz.

La aplicación incluirá un menú principal con opciones como tablas,
vistas, gestión de servicios y una sección de contacto. Esta última
contendrá información detallada de la empresa, como número de teléfono,
correo electrónico y dirección física, acompañada de un mapa interactivo
que muestre la ubicación de la empresa. Para proteger la integridad de
la base de datos, el acceso a la aplicación estará restringido: solo los
empleados registrados (CEO, CTO y Administrador web) podrán iniciar
sesión utilizando su nombre de usuario (DNI/NIE) y contraseña, evitando
así modificaciones no autorizadas.

Instalación de la aplicación web:

1\. Antes de descargar nuestra aplicación web vamos a preparar el
entorno. Nos vamos a la página de
[XAMPP](https://www.apachefriends.org/es/download.html) y descargamos la
última versión que hay.

2\. Una vez descargado e instalado en la máquina donde implantaremos la
aplicación, activamos los servicios de Apache y MySQL:

<img src="Pictures/10000001000003310000020DC069D4A4.png"
style="width:8.86cm;height:5.692cm" />

Cogemos la carpeta que incluye todos los archivos de la aplicación web
"fusionsigma" perteneciente a la empresa y la trasladamos a la ubicación
/xampp/htdocs en nuestro sistema. Esto significa que estamos colocando
esa carpeta dentro del directorio principal donde el servidor local
XAMPP almacena los proyectos web para que puedan ejecutarse y
visualizarse correctamente en un navegador.

<img src="Pictures/100000010000033500000287B6F2CEEC.png"
style="width:11.822cm;height:6.854cm" />

Después accedemos a phpMyAdmin, que es una herramienta que usamos para
gestionar bases de datos, y vamos a cargar la base de datos que está
guardada en la carpeta C:\Users\User\Desktop\FUsionSigma\Ambito Base de
Datos. Para hacerlo de forma ordenada, seguimos estos pasos: primero
subimos las tablas, que son como los esqueletos o estructuras vacías
donde se organizarán los datos, y después añadimos la información o los
datos que van dentro de esas tablas. Así, aseguramos que todo quede bien
configurado en el sistema.

<img src="Pictures/10000001000006A6000003838296FFCF.png"
style="width:17cm;height:8.98cm" />

Una vez que hemos importado la base de datos en phpMyAdmin (como
explicamos antes), el siguiente paso es comprobar que la aplicación web
"fusionsigma" funciona correctamente con esa base de datos integrada.
Para ello, abrimos un navegador (como Chrome o Firefox) y en la barra de
direcciones escribimos: localhost/fusionsigma/. Esto nos lleva a la
página principal de la aplicación que hemos copiado previamente en la
carpeta /xampp/htdocs/.

¿Por qué hacemos esto? Al escribir esa dirección, le estamos diciendo al
navegador que acceda al servidor local (localhost) que XAMPP tiene
activo en nuestro ordenador, y que busque específicamente la carpeta
"fusionsigma" dentro de /htdocs/. Si todo está bien configurado —es
decir, si los archivos de la aplicación están en su lugar y la base de
datos se ha importado correctamente—, deberíamos ver la aplicación web
funcionando. Esto significa que la base de datos ya está conectada (o
integrada) con la aplicación, permitiendo que la web muestre la
información almacenada o realice las funciones para las que fue
diseñada, como mostrar tablas, vistas, o cualquier otra característica
que tenga.

En resumen, este paso es como "encender" la aplicación en nuestro
ordenador para confirmar que todo —archivos y base de datos— está
trabajando junto sin problemas.

<img src="Pictures/10000001000006FD000003E3CC6154FF.png"
style="width:17cm;height:9.454cm" />

<img src="Pictures/10000000000001F4000001F46051F717.jpg"
style="width:3.433cm;height:3.433cm" />
