<img src="Pictures/1000000000000159000001534032C0E7.png"
style="width:4.32cm;height:4.246cm" />

**Ámbito de Sistemas operativos y Seguridad.**

#### <span id="anchor"></span>    • Elección justificada de software (sistemas operativos).

Para elegir el sistema operativo más óptimo en base a las necesidades de
FUsionSigma SL y garantizar que se pueda llevar a cabo el proyecto,
vamos considerar las siguientes opciones:

- Compatibilidad: Necesitamos un sistema operativo compatible con
  software técnico y administrativo, como MySQL Workbench, Visual Studio
  Code, herramientas de desarrollo web (para el desarrollador), y
  software de gestión de proyectos y CRM (para marketing y ventas).
- Facilidad de uso: La interfaz debe ser intuitiva para empleados no
  técnicos (como marketing, HR y contabilidad), para evitar pérdidas de
  tiempo en caso de cambios de personal.
- Seguridad: Dado que FUsionSigma maneja datos sensibles de clientes
  (bases de datos y proyectos), el sistema operativo debe ofrecer un
  alto nivel de seguridad para prevenir ataques informáticos.
- Estabilidad: El sistema operativo debe ser confiable y no
  ralentizarse, especialmente para los administradores de bases de datos
  que realizan tareas intensivas.

- 

Analizando cuidadosamente todas estas opciones para garantizar el mejor
servicio a los usuarios de FUsionSigma, tenemos la siguiente solución:

- Para los empleados en la oficina (administradores de bases de datos,
  desarrollador web, especialista en seguridad, CEO, CTO, marketing, HR
  y contabilidad):

  - Elegiremos mantener y actualizar las licencias de Windows 11 Pro en
    los 20 equipos de los administradores de bases de datos (Intel i7,
    32 GB RAM, 1 TB SSD) y los 2 portatiles del resto del equipo (Intel
    i7, 32GB RAM y 2TB SSD ),que se van a comprar i instalar.

  - Justificación:

    - Compatibilidad: Windows 11 Pro es compatible con herramientas
      clave como MySQL Workbench, Visual Studio Code, Microsoft Teams, y
      el CRM (HubSpot) que usará el equipo de marketing.
    - Facilidad de uso: Su interfaz es intuitiva para empleados no
      técnicos (como marketing, HR y contabilidad), con una curva de
      aprendizaje baja, lo que reduce el tiempo de adaptación.
    - Seguridad: Windows 11 Pro ofrece características de seguridad como
      BitLocker (para cifrado de discos) y Windows Defender.
    - Estabilidad: Es un sistema estable para tareas intensivas, como
      las de los administradores de bases de datos.
    - Precio: Aunque las licencias tienen un costo, FusionSigma ya las
      tiene instaladas, y solo será necesario adquirir 3 licencias
      adicionales para los nuevos portátiles, lo que se ajusta al
      presupuesto.

Link: [Windows 11
Pro](https://www.pccomponentes.com/microsoft-windows-11-pro-64-bit-espanol-licencia-permanente-fpp-descarga-digital)

- - - 

- Para los servidores locales y en la nube (desarrollo, pruebas y
  gestión de infraestructuras):

  - Optaremos por instalar Ubuntu Server 22.04 en los 2 servidores
    locales adquiridos y en las instancias en la nube (AWS, Google Cloud
    y Microsoft Azure) que se usarán para desarrollo, pruebas y gestión
    de infraestructuras de clientes.

- - Justificación:

    - Compatibilidad: Ubuntu Server es compatible con software de bases
      de datos (MySQL, PostgreSQL), herramientas de desarrollo (Docker,
      Node.js), y servicios en la nube (AWS, GCP, Azure), que son
      esenciales para FusionSigma.
    - Facilidad de uso: Aunque tiene una curva de aprendizaje más alta,
      los servidores serán gestionados por el equipo técnico
      (administradores de bases de datos y especialista en seguridad),
      que ya tienen experiencia con Linux.
    - Seguridad: Ubuntu Server ofrece un alto nivel de seguridad con
      actualizaciones frecuentes y configuraciones avanzadas de firewall
      (ufw).
    - Estabilidad: Es extremadamente estable para entornos de
      servidores, ideal para tareas intensivas como pruebas de bases de
      datos y gestión de infraestructuras.
    - Precio: Es gratuito, lo que reduce costos para FusionSigma,
      permitiendo invertir en otras áreas como licencias de Windows o
      herramientas de colaboración.

Link: [Ubuntu Server 22.04](https://ubuntu.com/download/server)

- - - 

- Para la virtualización en los servidores locales:

  - Usaremos Proxmox VE como sistema operativo de virtualización en los
    2 servidores locales.

  - Justificación:

    - Proxmox VE es una solución gratuita y de código abierto que
      soporta virtualización de servidores (KVM y LXC), ideal para crear
      entornos de prueba para las bases de datos.
    - Es gestionado por el equipo técnico, por lo que la curva de
      aprendizaje no es un problema.
    - Ofrece alta estabilidad y seguridad, con herramientas integradas
      para copias de seguridad y clustering.

Por lo tanto, mantendremos y actualizaremos licencias de Windows 11 Pro
para los equipos de los empleados en la oficina, instalaremos Ubuntu
Server 22.04 en los servidores locales y en la nube, y usaremos Proxmox
VE para la virtualización en los servidores locales.

Link:
[Proxmox](https://www.proxmox.com/en/downloads/proxmox-virtual-environment)
y [Proxmox Backup
](https://www.proxmox.com/en/downloads/proxmox-backup-server/agreements/proxmox-backup-server-subscription-agreement)
( para Servidor2).

<span id="anchor-1"></span>Sistemas operativos usados para maquinas
virtuales:

Máquinas Virtuales (VM) Configuradas:

VM para DNS/AD:

Sistema operativo: Windows Server 2022.

Función: Aloja los servicios de Active Directory (AD) y DNS para la
gestión de usuarios y resolución de nombres en la red.

IP: 10.13.0.100 (V1).

VM para DHCP:

Sistema operativo: Alpine-extended-3.20.3-x86_64 (bajo consumo)

Función: Proporciona asignación dinámica de direcciones IP a los
dispositivos en las VLANs (V1, V3, etc.).

IP: 10.13.0.2 (V1).

VM para HTTP/HTTPS, BBDD, y SFTP :

Sistema operativo: Windows Server 2022.

Funciones:

-HTTP/HTTPS: Aloja un servidor web para las aplicaciones web de
Fusionsigma (fusionsigma.local). En Windows Server, puedes usar IIS
(Internet Information Services) como servidor web para HTTP/HTTPS.

-BBDD (Base de Datos): Ejecuta una base de datos relacional. En Windows
Server, se va instalar Microsoft SQL Server (o una alternativa como
MySQL/PostgreSQL para Windows) para almacenar datos de las aplicaciones.

-SFTP: Proporciona un servidor SFTP para la transferencia segura de
archivos. Windows Server no tiene un servidor SFTP nativo, pero se puede
instalar software de terceros como OpenSSH Server (disponible en Windows
Server 2022) o herramientas como FileZilla Server con soporte SFTP.

IP: 10.13.0.10 (V1)

VM para Proxy no transparente:

Sistema operativo: Ubuntu Server 22.04.

Función: Ejecuta un proxy no transparente (Squid) para controlar y
filtrar el tráfico web de los trabajadores.

IP: 10.13.0.30 (V1).

VM para RADIUS:

Sistema operativo:Ubuntu Server 22.04.

Función: Aloja un servidor RADIUS (por ejemplo, FreeRADIUS) para la
autenticación de usuarios en la red (por ejemplo, para los puntos de
acceso AP3 y AP4).

IP: 10.13.0.20 (V1).

\* Todas las VMs están en el Servidor 1, que pertenece a la VLAN 1 (V1:
10.13.0.0/24). El Servidor 1 está conectado a Sw1 (puerto 1, VLAN 1), y
las IPs de las VMs están dentro del rango de V1. Las VMs se conectan a
la red a través de un puente de red en Proxmox (vmbr0), asociado a la
interfaz física del Servidor 1, que está en VLAN 1.

R1 (10.13.0.1) enruta el tráfico entre las VMs (V1) y otras VLANs (V2,
V3, V4), aplicando reglas de firewall.

Link:[Windows Server
2022](https://www.pccomponentes.com/microsoft-windows-11-pro-64-bit-espanol-licencia-permanente-fpp-descarga-digital)

Link: [Ubuntu Server 22.04](https://ubuntu.com/download/server)

#### <span id="anchor-2"></span>    • Esquema lógico de los componentes de la red.

<img src="Pictures/100000010000064C000003165B95BC6C.png"
style="width:17.376cm;height:8.516cm" />

VLANs y subredes:

V1 (10.13.0.0): Servidor 1 con servicios como DHCP, DNS/AD, HTTP/HTTPS,
BBDD, SFTP, Radius, Proxy No Transparente y Servidor 2 como Backup.

V2 (10.13.1.0): Dispositivos de gestión (CEO, CTO, Trabajadores x20).

V3 (10.13.3.0): Dispositivos de red (puntos de acceso).

V4 (10.13.4.0): Conexión externa a ISPs (Vodafone, Movistar) y el
dominio fusionsigma.com.

V6 (10.13.2.0): Una subred guardada para visitantes y clientes de la
empresa.

#### <span id="anchor-3"></span>    • Servidores y clientes.

Voy a configurar varios servidores en la nueva infraestructura de
FUsionSigma SL para cumplir con los objetivos de la empresa, aquí hay
una explicación centrada en para qué usaría cada uno de ellos:

<span id="anchor-4"></span>SERVIDORES:

1.  DHCP (en Server 1):

    - Este servicio asignara direcciones IP de manera dinámica a los
      dispositivos de la red.
    - Lo usaré para que los 22 empleados (CEO, CTO, administradores de
      bases de datos, desarrollador web, etc.) y los nuevos equipos
      obtengan IPs automáticamente dentro de la red de FUsionSigma
      (VLANs V1, V2, V3, V4), facilitando la conexión al dominio interno
      y a los servicios de la empresa.

2.  - 

3.  DNS (en Server 1):

    - Este servicio traduce nombres de dominio a direcciones IP.

    - Lo configuraré para resolver el dominio interno de FusionSigma
      (intranet.fusionsigma.local) y el dominio público
      (fusionsigma.com), permitiendo a los empleados acceder a la
      aplicación web interna y a los clientes visitar la página pública.

4.  Radius (en Server 1):

    - Este servidor se usará para autenticar a los usuarios de la
      empresa.
    - Lo implementaré para gestionar el acceso a la VPN y a la red
      interna, asegurando que solo los empleados autorizados (con
      credenciales de Active Directory) puedan conectarse, especialmente
      para accesos remotos.

5.  Proxy (No transparente, en Server 1):

    - Este servidor lo usaré para filtrar el tráfico de red y proteger
      contra amenazas.

    - Lo configuraré para bloquear sitios web, proteger a los empleados
      contra malware, y monitorear el uso de Internet en la red de
      FusionSigma, mejorando la seguridad general.

6.  HTTP/HTTPS, BBDD, (en Server 1 y Server 2 - Backup):

    - Aquí alojaré la aplicación web interna de FusionSigma (para
      gestionar proyectos, tareas y clientes) y la página web pública
      (fusionsigma.com) para presentar los servicios a los clientes.

    - También alojaré la base de datos interna (con tablas como CLIENTE,
      PROYECTO, TAREA, EMPLEADO, USUARIOS) en Server 1, con copias de
      seguridad automáticas en Server 2 (Backup) para garantizar la
      continuidad del negocio.

\* Para consultar los Base de Datos pincha en el link:
[DataBase](https://drive.google.com/file/d/1vASebgDZPp22c2LAyE0j1kK28T5Kj5M9/view?usp=sharing)
, [MySQL
Workbench](https://drive.google.com/file/d/1vASebgDZPp22c2LAyE0j1kK28T5Kj5M9/view?usp=sharing)
esquema y
[ScriptSQL](https://drive.google.com/file/d/1u2jjus9pkfOO5hf45tkdgE_1di_OMMrn/view?usp=sharing).

7.  SFTP (en Server 1):

    - Este servicio lo usaré para transferencias seguras de archivos.

    - Permitirá a los administradores de bases de datos y al
      desarrollador web compartir archivos (como backups de bases de
      datos o código) de forma segura con clientes o entre ellos mismos.

8.  Active Directory (en Server 1):

    - Este servicio gestionará las cuentas de usuario y los permisos de
      los 22 empleados.
    - Lo configuraré para centralizar la autenticación y garantizar que
      cada empleado tenga acceso solo a los recursos necesarios (por
      ejemplo, los administradores de bases de datos accederán a la base
      de datos, pero el equipo de marketing no).

\*Adjunto la esquema lógica de Active Directory:
[AD](https://docs.google.com/document/d/1qpCHlVyrtSCIF7ouV7G6Fm1EokUsLj1hSt2MCuSWOsE/edit?usp=sharing)

9.  Backup (en Server 2 - Backup):

    - Este servidor se dedicará a almacenar copias de seguridad.
    - Lo usaré para guardar backups automáticos de la base de datos, los
      archivos de la aplicación web, y los datos críticos de
      FUsionSigma, asegurando la recuperación en caso de fallos.

<span id="anchor-5"></span>CLIENTES:

La empresa FusionSigma constará de 22 empleados donde:\
\
1 CEO gestionará la dirección y tendrá acceso a informes en el Servidor
1.\
1 CTO tendrá acceso total a toda la infraestructura (servidores, red,
nube).\
1 Desarrollador Web tendrá acceso restringido al servidor de
aplicaciones web (en Servidor 1).\
15 Administradores de Bases de Datos tendrán acceso a Servidor 1,
Servidor 2 y al servidor en la nube para gestionar bases de datos.\
1 Especialista en Seguridad Informática tendrá acceso total a la
infraestructura, incluyendo el router.\
1 Responsable de Marketing y Ventas tendrá acceso al CRM (externo al
esquema).\
1 Responsable de Recursos Humanos tendrá acceso a sistemas de RRHH
(externo al esquema).\
1 Responsable de Contabilidad tendrá acceso a sistemas financieros
(externo al esquema).\
Todos los empleados de FusionSigma utilizarán un cliente VPN lo que
controla el acceso a la red.

<span id="anchor-6"></span>

#### <span id="anchor-7"></span>    • Medidas de seguridad lógica .

Para que la red y los sistemas de FUsionSigma SL tengan una seguridad
óptima, emplearé las siguientes medidas:

1.  Autenticación:

    - Verificaré la identidad de los usuarios al conectarse a la red y
      al iniciar sesión en los sistemas.

    - Usaré Radius (configurado en Server 1) para autenticar a los
      empleados que accedan a la red a través de la VPN, asegurando que
      solo personal autorizado pueda conectarse.

    - Crearé cuentas de usuario en Active Directory para que los 22
      empleados (CEO, CTO, administradores de bases de datos, etc.)
      inicien sesión en sus equipos con Windows 11 Pro y en la
      aplicación web interna
      [AD](https://docs.google.com/document/d/1qpCHlVyrtSCIF7ouV7G6Fm1EokUsLj1hSt2MCuSWOsE/edit?usp=sharing).

2.  Permisos y niveles de autoridad:

3.  - Asignaré permisos específicos a cada empleado según su rol.
    - Los administradores de bases de datos tendrán acceso completo a la
      base de datos (CLIENTE, PROYECTO, TAREA, etc.), mientras que el
      equipo de marketing solo podrá acceder al CRM y a datos de
      clientes.
    - Configuraré niveles de autoridad en Active Directory para
      controlar qué información pueden ver o modificar los usuarios (por
      ejemplo, HR solo accederá a datos de empleados).

4.  Antivirus:

    - Para proteger los equipos y prevenir amenazas como malware o
      ataques de ingeniería social, usaré las licencias de Kaspersky
      Small Office Security (22 licencias para equipos, 22 para
      dispositivos móviles, y 2 para servidores de archivo).
    - Configuraré Kaspersky para monitorear en tiempo real los 20
      equipos de los administradores de bases de datos, los 2 portátiles
      de CEO y CTO , además de los 2 servidores locales (Server 1 y
      Server 2 - Backup), asegurando actualizaciones automáticas y
      protección contra ransomware.

\*Guía de Instalación del antivirus Kaspersky:\
\
Vamos al sitio web de
[*Kaspersky*](https://www.kaspersky.es/small-business-security/small-office-security)
** y descargamos el paquete de instalación de Windows de 64 bits.
Ejecutamos el archivo de instalación una vez descargado. Luego,
aceptamos los términos de licencia.\
Una vez descargado, empezamos a configurar el antivirus.\
a. Configuramos las políticas de actualización del antivirus a políticas
mensuales.\
b. Configuramos la exploración programada a semanal. Esto nos es útil
para identificar amenazas en sistemas que no se usan habitualmente.

5.  Política de contraseñas:

    Estas reglas se aplicarán a todos los equipos: servidores, equipos
    personales, base de datos y el router.

    -  • Longitud mínima de 10 caracteres.

      • Combinación de caracteres de mayúsculas, minúsculas, números y
      caracteres especiales.

      • No revelar la contraseña a nadie y no escribirla en lugares que
      cualquiera pueda leerla.

      • Cambiar las contraseñas cada 90 días.

      • Evitar que se repitan. Esto se controlará a través del historial
      de contraseñas de Windows Server.

    - Éste guardará un máximo de 8 contraseñas.

      • Bloquear el usuario tras introducir una contraseña incorrecta 5
      veces.

      • Doble factor de autenticación con Microsoft authenticator.

<img src="Pictures/100000010000037200000131C37CE3E0.png"
style="width:13.718cm;height:4.743cm" />

6.  - 

    - Para configurar estas políticas de contraseñas en Windows Server
      2022 (para la simulación usare 2019), vamos seguir estos pasos:\

    -  Longitud mínima, complejidad, historial y caducidad:\
      Abrimos el "Administrador del servidor" y vamos a "Herramientas"
      \> "Directiva de seguridad local".\
      Navegamos a "Directivas de cuenta" \> "Directiva de contraseñas".\
      Aquí podemos configurar:\
      "La contraseña debe cumplir los requisitos de complejidad":
      Habilitado.\
      "Longitud mínima de la contraseña": 10 caracteres.

      "Vigencia máxima de la contraseña": 90 días.\
      "Exigir historial de contraseñas": 8 contraseñas recordadas.

<img src="Pictures/10000001000002FA000001E785BD5F96.png"
style="width:11.04cm;height:7.054cm" />

#### 

1.  - 
    - Aplicamos los Cambios:\
      \
      Una vez que hemos configurado todas las políticas, abrimos el
      símbolo del sistema como administrador y ejecutamos el comando
      gpupdate /force. Esto actualizará las directivas de grupo en el
      equipo.

<img src="Pictures/1000000100000277000000DC65051309.png"
style="width:10.391cm;height:3.623cm" />

1.  - 
    - En la base de datos, las contraseñas de la tabla USUARIOS se
      almacenarán como hashes (usando bcrypt MD5).

<img src="Pictures/1000000100000593000001221133DCBC.png"
style="width:15.487cm;height:2.933cm" />

2.  Directorio Activo:

    - Usaré Active Directory (configurado en Server 1) para controlar
      los accesos a carpetas, directorios y recursos de la red.

    - Gestionaré permisos para que los empleados solo accedan a los
      datos necesarios (por ejemplo, el desarrollador web accederá a los
      archivos de la aplicación web, pero no a los datos financieros).

\* Diseño de la estructura jerárquica de usuarios y perfiles(AD):
[Active
Directory](https://docs.google.com/document/d/1qpCHlVyrtSCIF7ouV7G6Fm1EokUsLj1hSt2MCuSWOsE/edit?usp=sharing)

\*Usare GPOs para aplicar políticas de seguridad (como las de
contraseñas) a todos los equipos en el dominio fusionsigma.local.

3.  Cifrado y VPN:

    - Implementaré cifrado para los datos en reposo y en tránsito:
      habilitaré SSL para las conexiones a la base de datos y usaré
      HTTPS para la aplicación web interna y la página pública
      (fusionsigma.com).
    - La VPN (configurada en el router Cisco RV340) asegurará que todo
      el tráfico remoto esté cifrado, protegiendo los accesos a los
      servidores en la nube (AWS) y a la red interna

4.  Monitoreo y auditorías:

    - Configuraré Kaspersky Small Office Security para monitorear
      amenazas en tiempo real y realizaré auditorías de seguridad
      mensuales para identificar vulnerabilidades.

Link: [Antivirus
Kaspersky](https://www.kaspersky.es/small-business-security/small-office-security)

5.  - Usaré herramientas como Splunk para registrar y analizar los
      accesos a la red y a la base de datos, detectando actividades
      sospechosas. Este mismo se va instalar en el Servidor 1 (principal
      con todos VM\`s) y como una herramienta poderosa, que recoge logs
      (registros de actividad) de los servidores, red y dispositivos, y
      permite buscar, analizar y visualizar esos datos para detectar
      problemas o actividades sospechosas.

Link: [Splunk](https://www.splunk.com/)

6.   **Consideraciones Adicionales:**\
    Doble factor de autenticación (2FA): En este caso, Windows Server
    2019 no tiene 2FA integrado para inicios de sesión de usuario
    estándar. Pero en Winows Server 2022, si lo tiene y se aplicara
    también.\
    También hay que aplicar a otros equipos. Cuando tenemos los otros
    equipos en el dominio fusionsigma.local configuramos las directivas
    de grupo a través de la Consola de administración de directivas de
    grupo (gpmc.msc) en el controlador de dominio.

7.  Configuración de UEFI BIOS

<img src="Pictures/100000010000039A000001F185D6C051.png"
style="width:10.846cm;height:5.846cm" />

-Acceso a la UEFI BIOS:

Apagar el equipo completamente.

Encender y presionar repetidamente F10 al aparecer el logo de HP (o Esc
y luego F10, según modelo) para entrar en la configuración de la BIOS.

-Configuración de Contraseña de Administrador:

En la pestaña Security (Seguridad), seleccionar Administrator Password
(Contraseña de administrador).

Ingresar y confirmar una contraseña segura (mínimo 10 caracteres,
combinando mayúsculas, minúsculas, números y símbolos).

Esta contraseña restringe el acceso a la configuración de la BIOS.

-Configuración de Contraseña de Encendido (Power-On Password):

En la pestaña Security, seleccionar Power-On Password (Contraseña de
encendido).

Establecer y confirmar una contraseña distinta para cada empleado.

Se solicitará al iniciar el equipo, sin afectar el acceso a la
configuración de la BIOS.

-Guardado de Cambios:

Desde la pestaña Exit, seleccionar Save Changes and Exit (Guardar
cambios y salir), y confirmar con Yes.

El equipo se reiniciará con las nuevas configuraciones aplicadas.

-Verificación:

Reiniciamos para comprobar que la Power-On Password se solicita al
encender.

Acceder a la BIOS con F10 para validar que la Administrator Password
protege la configuración.

**Para consultar las herramientas usadas:** [**Herramentas / Seguridad
Logica**](https://docs.google.com/document/d/1u-OCJR4T8_feGoxl4NcoZxAovnppdK7cfmikYAPuUAY/edit?usp=sharing)

#### <span id="anchor-8"></span>    • Técnicas de acceso remoto.

VPN IPsec

Como FusionSigma SL necesita un acceso remoto seguro para sus 22
empleados (incluidos los administradores de bases de datos, el
desarrollador web y el especialista en seguridad) y para realizar
mantenimiento en caso de incidencias, procederemos a configurar una VPN
en el router Cisco RV340 usando el protocolo IPsec. La VPN nos permitirá
acceder de forma segura a los sistemas, dispositivos y servidores
(Server 1, Server 2, y servidores en la nube), así como gestionar la red
interna, resolver problemas de manera remota y colaborar con el equipo
mediante herramientas seguras integradas.

Cisco AnyConnect explicación de funcionamiento:
[Video](https://www.bing.com/videos/riverview/relatedvideo?q=configuration+VPN+en+Cisco+RV340&mid=4373C66EDED88ABC991B4373C66EDED88ABC991B&FORM=VIRE)

\* La simulación del acceso remoto se va hacer en GNS3 con un router que
suporta el protocolo Ipsec.

SSH: Protocolo de conexión segura

SSH (Secure Shell) es el protocolo que utilizaremos como respaldo en
caso de que la VPN falle o surja algún problema, permitiendo a los
administradores conectarse de forma segura en modo texto a routers,
switches y al servidor Ubuntu. Este acceso está protegido mediante
cifrado asimétrico para la autenticación (basado en pares de claves
pública/privada) y cifrado simétrico para la transmisión de datos,
garantizando la confidencialidad e integridad de la comunicación.

Configuración del acceso a los servidores:

En el servidor que aloja los servicios de la aplicación web (HTTPS) y el
servicio SFTP, el servidor SSH ya está instalado y configurado. En los
demás servidores, se instalará y configurará de la misma manera. Además,
se habilitará el puerto 22 en el cortafuegos de todos los servidores, al
igual que se ha hecho en el servidor SFTP, para permitir conexiones SSH
entrantes.

#### <span id="anchor-9"></span>    • Medidas de seguridad a aplicar en la red corporativa.

- Restricción del uso de la red Wi-Fi de la empresa para dispositivos
  personales:

<!-- -->

- Configuraré los puntos de acceso Wi-Fi (como los que se ven en el
  [plano](https://drive.google.com/file/d/1901DM2a2hDU9PYCAwoJSJpziM71CkN6q/view?usp=sharing)
  de la oficina) para que solo permitan la conexión de dispositivos
  corporativos registrados (los 20 equipos de los administradores de
  bases de datos, los 2 portátiles). Usaré autenticación basada en
  certificados para evitar que dispositivos personales de los empleados
  o externos se conecten a la red.

<!-- -->

- No almacenar datos o documentos en una nube pública sin cifrado:

<!-- -->

- Prohibiré el uso de nubes públicas (como Google Drive o Dropbox) para
  almacenar datos sensibles de FUsionSigma (como esquemas de bases de
  datos o información de clientes). En su lugar, usaré los servidores en
  la nube de AWS (EC2 y S3) con cifrado habilitado (usando AWS KMS) para
  almacenar y compartir datos (dependiendo de los clientes y sus
  necesidades) de forma segura, accesibles solo a través de la VPN.

- Empleo de Kaspersky para proteger la red contra amenazas cibernéticas:

<!-- -->

- Usaré Kaspersky Small Office Security (22 licencias para equipos, 22
  para dispositivos móviles, y 2 para servidores) para proteger la red
  de FusionSigma contra amenazas, asegurando una defensa integral y
  actualizada frente a virus, malware y ataques de ingeniería social. Lo
  configuraré en todos los equipos y servidores para monitoreo en tiempo
  real y actualizaciones automáticas.

<!-- -->

- Radius para autenticar a usuarios de la empresa y evitar accesos no
  autorizados:

<!-- -->

- Implementaré Radius (configurado en Server 1) para autenticar a los 22
  empleados que accedan a la red corporativa a través de la VPN o la red
  Wi-Fi, evitando que personas externas o no autorizadas puedan
  conectarse a la red de FUsionSigma.

#### <span id="anchor-10"></span>    • Políticas de copias de seguridad.

- 1.Copias de seguridad de los datos de los empleados y la aplicación
  web interna:

- Configuraré Duplicati en Server 1 para realizar copias de seguridad
  automáticas de los directorios de trabajo de los 22 empleados (como
  documentos, proyectos y configuraciones locales) en los 15 equipos de
  los administradores de bases de datos, los 7 equipos del resto del
  personal, todos con Windows 11 Pro.

- Estas copias se almacenarán de forma cifrada en un bucket de AWS S3
  (en lugar de una nube pública como Google Drive, para mayor
  seguridad), con una retención de 30 días para permitir la restauración
  en caso de fallos o pérdida de datos.

- También usaré Duplicati para respaldar los archivos de la aplicación
  web interna (en caso real seria alojada en AWS EC2), incluyendo el
  código fuente y los archivos de configuración, asegurando que podamos
  restaurar la aplicación rápidamente si hay problemas.

<img src="Pictures/100000010000040A000003C522517E8E.png"
style="width:9.354cm;height:8.729cm" />

\*Esto se va instalar en el servido rpincipal con todos servicios
incluidos!

- 

Ademas de esto, cada trabajador por separado va hacer copias de
seguridad incremental cada día, y una vez al mes copie de seguridad
completa. Para eso y un Backup total se va usar un software
especializado en backup\`s como “Acronis” (de pago, si era una situación
real) o “Duplicati” (gratuito ,lo usare como guía para enseñar como se
harían las copias de seguridad en los equipos de los trabajadores con SO
Windows 11 Pro.

Duplicati es no solo gratuito ,pero también de código abierto ,lo que lo
hace muy recomendable y accesible y personalizable. Ademas comprime los
datos y esto lo hace muy apropiado para la empresa como FusionSigma que
va necesitar hacer copias de mucha información.

1.Empezamos con la instalación del Duplicati.

<img src="Pictures/10000001000004EE000002888423AEA7.png"
style="width:11.931cm;height:6.128cm" />

<img src="Pictures/100000010000025F000001D9A704823A.png"
style="width:7.586cm;height:5.913cm" /><img src="Pictures/100000010000026C000001D467589042.png"
style="width:7.594cm;height:5.733cm" />

2.Añadimos una contraseña que corresponde a cada trabajador.

<img src="Pictures/10000001000004A6000002EC45BA4210.png"
style="width:8.797cm;height:5.53cm" />

3.Añadimos una nueva copie de seguridad:

<img src="Pictures/10000001000006FA000001FB113BCA8A.png"
style="width:13.885cm;height:3.941cm" />

4.Damos a “Siguiente” y rellenamos el nombre ,el tipo de cifrado que
vamos usar y una frase de seguridad que es muy recomendado. Sera muy
útil teniendo la descripción también y el diferente tipo de cifrado
incorporado para la seguridad de los datos de los clientes de
FusionSigma.

<img src="Pictures/1000000100000543000003131131A4AC.png"
style="width:11.137cm;height:6.505cm" />

5.Lo siguiente es elegir el destinación donde guardamos nuestro copie de
seguridad. Se puede observar, que tenemos muchas opciones entre muchos y
lo que va usar FusionSigma sera el Google Cloud Storage,S3 de Amazon
Azure y mas dependiendo de los clientes y datos con lo que se va
trabajar ya que ofrece muchas opciones ,seguridad y suficiente espacio
para todos los datos que se van a guardar del empresas pequeñas y
medianas. Para la simulación como funciona este software usare Google
Drive,ya que tengo cuenta:

<img src="Pictures/10000001000005070000033AAE375E1D.png"
style="width:11.647cm;height:7.477cm" />

<img src="Pictures/10000001000005590000025C0796461C.png"
style="width:12.557cm;height:5.539cm" />

6.Una vez seleccionado el Google Drive tenemos que crear AuthID. El
AuthID es un código de autorización que permite que el software de
copias de seguridad acceda a mi cuenta de Google Drive. Es como una
"llave" que le damos al programa para que pueda guardar los archivos en
la nube.

En"Ruta del servidor" lo dejamos vació. Este campo no es aplicable para
Google Drive, ya que Google Drive no es un servidor local. Se usa para
ubicaciones de red locales.

<img src="Pictures/10000001000004F300000198589F6C6A.png"
style="width:13.912cm;height:4.479cm" />

7.Confirmación

<img src="Pictures/1000000100000535000001DBCA3830C7.png"
style="width:10.008cm;height:3.567cm" /><img src="Pictures/10000001000005310000028DBA60A6E0.png"
style="width:8.396cm;height:4.126cm" />

8.Elección de carpetas para el Backup:

Podemos ver que esta súper personalizado, podemos incluir ,buscar una
ruta especifica o aplicar filtros para que los datos de origen serán
concretos. En este caso hacer una copia de seguridad a la carpeta ASIR2
con todas las subcarpetas que incluye.

<img src="Pictures/10000001000006D40000034B833891A4.png"
style="width:13.882cm;height:6.694cm" />

7.Damos a “Siguiente” y especificamos el horario , en el caso de
FusionSigma se va hacer cada día de lunes a viernes a las 20:00.

<img src="Pictures/100000010000054700000389780BBE0B.png"
style="width:12.769cm;height:8.553cm" />

8.Elegimos el tamaño de volumen necesario para el Backup (en este caso
50MByte sera suficiente) y especificamos como queremos conservar las
copias de seguridad (en mi caso quiero mantener todas las copies de
seguridad).

<img src="Pictures/10000001000006E3000002F8B012D98E.png"
style="width:16.305cm;height:7.029cm" />

9.Vemos que la tarea esta programada para nuestros copias de seguridad.

<img src="Pictures/1000000100000530000001E7D88B54BB.png"
style="width:12.631cm;height:4.632cm" />

Si queremos hacer copie de seguridad al disco entero o cuota especifica
se hace en la misma manera:

<img src="Pictures/100000010000053D00000281774E9B75.png"
style="width:12.106cm;height:5.786cm" />

<img src="Pictures/10000001000006C900000237D6A005DA.png"
style="width:12.947cm;height:4.225cm" />

10.Restauración

La restauración se hace de una manera súper fácil, ya que nos aparece
directamente el “backup” al que hemos hecho

una copia de seguridad.

<img src="Pictures/10000001000005660000024066F505E5.png"
style="width:15.443cm;height:6.436cm" />

Ademas de eso tenemos la opción de restaurar exclusivamente solo parte
del copie que nos interesa. Por ejemplo solo “Empresa”:

<img src="Pictures/10000001000006D800000320067E0700.png"
style="width:11.426cm;height:5.218cm" />

**\*Para consultar URL\`s de referencia:**
[**URL\`s**](https://docs.google.com/document/d/1j1U4bYTSwE6y7dMFnQl4gDazF0OM8nTT4YRI13xru0U/edit?usp=sharing)

- 2.Copias de seguridad de la base de datos interna:

<!-- -->

- Implementaré un script automatizado en Server 1 (con Ubuntu Server
  22.04) que use mysqldump para realizar copias de seguridad diarias de
  la base de datos MySQL interna (que contiene las tablas CLIENTE,
  PROYECTO, TAREA, EMPLEADO, USUARIOS (tabla extra (usuarios) creada
  para permisos de la Web interna).
- Estas copias se cifrarán con Duplicati y se almacenarán tanto en
  Server 2 (Backup) como en AWS S3, con una política de retención de 90
  días para las copias diarias y 1 año para las copias semanales,
  garantizando que podamos restaurar datos históricos si es necesario.
- Configuraré notificaciones automáticas (usando AWS SNS) para alertar
  al equipo técnico si una copia de seguridad falla, asegurando una
  supervisión constante.

\* [Script Autiomatizado
](https://drive.google.com/file/d/1xltInVqJQptFx0SzXfjkkf1tZQrilff3/view?usp=sharing)

- 

<!-- -->

- 3.Copias de seguridad de los servidores virtualizados:

<!-- -->

- Para los servidores locales virtualizados con Proxmox VE (en Server 1
  y Server 2), implementaré una estrategia de copias de seguridad que
  consistirá en crear snapshots diarios de todas las máquinas virtuales
  (VMs) que alojan servicios como Radius, Active Directory, y la base de
  datos.
- Usaré las herramientas integradas de Proxmox para almacenar estos
  snapshots en Server 2 (Backup), y adicionalmente configuraré Duplicati
  para enviar copias cifradas de los snapshots a AWS S3, con una
  retención de 60 días.
- Cuando se realicen modificaciones importantes en las VMs (como
  actualizaciones de software o cambios de configuración), crearé un
  nuevo snapshot y eliminaré el anterior, asegurando que siempre
  tengamos una versión actualizada y funcional para restaurar en caso de
  fallos.

- 4.Copias de seguridad de los servidores en la nube (AWS):

<!-- -->

- Para los servidores en la nube (instancias en AWS,Google Cloud y
  Microsoft Azure) que pueden alojar la aplicación web( la interna
  ,donde gestionan las clientes,tareas,proyectos y etc.), BD de clientes
  y otros servicios), configuraré AWS Backup para realizar copias de
  seguridad automáticas de las instancias y los volúmenes EBS asociados,
  con una frecuencia diaria y una retención de 30 días.

\*EBS significa Elastic Block Store (Almacenamiento en Bloques Elástico)
y es un servicio de almacenamiento proporcionado por Amazon Web Services
(AWS). Es un tipo de almacenamiento persistente que se utiliza con las
instancias EC2 (los servidores virtuales en la nube de AWS) para guardar
datos, como si fuera un disco duro virtual.

- Usaré Duplicati para respaldar los datos críticos generados en estas
  instancias (como logs y archivos temporales) y almacenarlos en un
  bucket separado de AWS S3, con cifrado habilitado, asegurando una capa
  adicional de protección.

<table>
<tbody>
<tr>
<td><p>Herramienta</p></td>
<td><p>Uso</p></td>
<td><p>Enlace</p></td>
</tr>
<tr>
<td><p>Proxmox VE (vzdump)</p></td>
<td><p>Snapshots y backups locales</p></td>
<td><p>Integrado en:</p>
<p><a href="https://www.proxmox.com/en/downloads">Download Proxmox
software, datasheets, agreements</a> </p></td>
</tr>
<tr>
<td><p>Duplicati</p></td>
<td><p>Cifrado y envío a S3</p></td>
<td><a href="https://duplicati.com/download">Download Duplicati
application</a> </td>
</tr>
<tr>
<td><p>AWS S3</p></td>
<td><p>Almacenamiento externo</p></td>
<td><a href="https://aws.amazon.com/es/s3/">AWS | Almacenamiento de
datos seguro en la nube (S3)</a> </td>
</tr>
</tbody>
</table>

#### <span id="anchor-11"></span>    • Elección de Hardware para medidas de seguridad físicas.

Para los servidores físicos la primera medida de seguridad que
aplicaremos es instalar

alarmas donde se encuentran funcionando los servidores en caso de robo y
también contratamos con una
[empresa](https://www.prosegur.es/camaras-vigilancia-seguridad) para
control del seguridad de la empresa.

El hardware necesario es el siguiente que tendré en cuenta:

-Cámaras de vigilancia(2 unidades):

Para los servidores físicos la primera medida de seguridad que
aplicaremos es instalar

alarmas donde se encuentran funcionando los servidores en caso de robo.
Y también contratamos una empresa para vigilancia con cámara y panel
táctil para el RACK de los servidores (que solo el CEO y CTO tendrán
acceso) para seguridad total de la empresa.

-SAI:

Utilizamos un SAI para proteger los equipos de cortes de energía y
fluctuaciones de voltaje. Con un SAI, el dispositivo detecta el corte de
energía y automáticamente comienza a suministrar energía de respaldo
desde sus baterías. Esto le da tiempo suficiente para guardar los datos
y apagar el servidor de forma segura, o para que un generador de
respaldo entre en funcionamiento. Usaremos un SAI de espera (offline):
Es el tipo más básico y económico. Solo proporciona energía de respaldo
cuando hay un corte de energía.

-Climatización:

Para asegurar el mantenimiento de los valores óptimos de temperatura y
humedad en los servidores y dispositivos de red, es necesario un flujo
constante de aire. Los parámetros a mantener se encuentran en el
siguiente rango:

• El rango de temperatura para operaciones continuas es de 10 a 35°C.

• El rango de humedad relativa para operaciones continuas es del 8% al
80%.

-Extintores:

Se han elegido los extintores de polvo ABC para extinguir el fuego en
sus primeras etapas. Este tipo de extintor es seguro para los
dispositivos electrónicos y fácil de utilizar.

-Cerradura Biométrica Southco H3-EM con Lector de Huellas Digitales:

La Southco H3-EM es una cerradura electrónica modular que puede
integrarse con un lector biométrico de huellas dactilares (como el
modelo H3-EM-60-100 con opción de lector integrado). Es una solución
diseñada específicamente para racks de servidores, gabinetes
industriales y entornos de alta seguridad. Este tipo de cerradura
combina autenticación biométrica con capacidades electrónicas avanzadas.

-Cerradura de Cilindro de Alta Seguridad ASSA ABLOY Yale Maximum
Security (Para la puerta principal de la oficina).

La ASSA ABLOY Yale Maximum Security es una cerradura de cilindro
mecánica de alta seguridad diseñada para puertas de oficinas, almacenes
o entornos donde se necesita proteger activos valiosos, como un rack de
servidores. Es un modelo de cilindro europerfil (compatible con puertas
estándar europeas) que utiliza llaves físicas tradicionales con
tecnología anti-copia.

\* Para consultar todo el hardware y software seleccionado con
presupuesto:
[HWandSW](https://drive.google.com/file/d/1W8YYqHJ3scINps-sRE3RS4Ng04g2Hugm/view?usp=sharing)

#### <span id="anchor-12"></span>    • Política de cuotas de disco.

El objetivo es controlar el espacio de almacenamiento utilizado por
administradores y empleados para evitar el consumo excesivo de disco y
proporcionar advertencias antes de que se alcance un límite estricto.

Las cuotas que se aplicarán son "blandas", lo que significa que los
usuarios podrán exceder los límites establecidos.\
En lugar de bloquear el acceso cuando se alcanza el límite, se enviarán
notificaciones para alertar a los usuarios y administradores.

1.Cuotas para Administradores (Servidores):\

Estas cuotas se configurarán en los servidores.\
Umbrales de notificación: Cuando el espacio utilizado alcance el 85% de
la cuota asignada, el administrador recibirá un correo electrónico de
advertencia. Si el uso continúa aumentando y llega al 95%, se enviará
otra notificación.\
Umbral límite: El límite máximo de espacio permitido es de 10 GB.\
Si un administrador supera este límite, se enviará una notificación por
correo electrónico a todos los administradores.

2.Cuotas para Empleados (Portátiles y ordenadores):\

Estas cuotas se configurarán en cada ordenador o portátil individual de
los empleados.\
Umbral de notificación: Cuando el espacio utilizado alcance el 70% de la
cuota asignada, el empleado recibirá un correo electrónico de
advertencia.\
Umbral límite: El límite máximo de espacio permitido es de 819 MB.\
Si un empleado supera este límite, se enviará una notificación por
correo electrónico a los administradores.

3.Implementación Técnica:\
\
Para configurar las cuotas de disco para los administradores en los
servidores, es necesario instalar el rol de "Administrador de recursos
del servidor de archivos" en Windows Server 2022.\
Este rol proporciona las herramientas necesarias para crear y
administrar las cuotas de disco.

\*Para la simulación estoy usando Windows Server 2019:

Una vez instalado el rol entramos en administración de Cuotas:

<img src="Pictures/10000001000003F800000147427A2808.png"
style="width:14.183cm;height:4.565cm" />

La cuota se aplica a los administradores en los servidores.

<img src="Pictures/1000000100000409000002CE50BF0A7E.png"
style="width:12.109cm;height:8.416cm" />

Y una vez asignado el umbral de 85%, asignamos la notificación que se
envié en el correo electrónico: <fusionsigma@gmail.com>.

<img src="Pictures/10000001000003FE000002D75B34E86E.png"
style="width:12.652cm;height:8.999cm" />

Después se aplican las Cuotas a los trabajadores (usuarios del dominio)
en sus equipos.

<img src="Pictures/1000000000000352000002C2055845A8.png"
style="width:11.709cm;height:9.724cm" />

#### <span id="anchor-13"></span>    • Diseño de la estructura jerárquica de usuarios y perfiles(AD).

<img src="Pictures/10000001000003EB000002BA0DFEC1A7.png"
style="width:15.09cm;height:10.5cm" />

Aplicado en el servidor:

<img src="Pictures/10000001000003EF000002D7E464C42D.png"
style="width:15.69cm;height:11.326cm" />

**Active Directory (AD)** se configura en Server 1(VM DNS/AD) para
gestionar accesos a recursos de red (carpetas, directorios,
aplicaciones) de manera centralizada. La estructura jerárquica se basa
en unidades organizativas (OUs) que agrupan usuarios según sus roles,
con permisos específicos asignados a cada grupo.

1.**OU Directivos** (CEO, CTO):

Grupo: Directivos.

Permisos: Acceso total a todos los recursos

**2.OU Administradores** BD (BD1, BD2, BD3, BD4, +11):

Grupo: AdminsBD.

Permisos: Acceso completo a bases de datos

**3.OU Web y Marketing** (WEB, Marketing):

Grupo: WebMarketing.

Permisos: Acceso al CRM / Customer Relationship Management (Gestión de
Relaciones con Clientes)

y archivos web.

**4.OU Seguridad** (Admin Seguridad):

Grupo: SoporteSeguridad.

Permisos: Acceso a logs y herramientas de seguridad

**5.OU HR y Contabilidad** (HR, Contabilidad):

Grupo: HRContabilidad.

Permisos: Acceso a datos de empleados y financieros

#### <span id="anchor-14"></span>    **• GPO (Group Policy Object).**

En una empresa como FusionSigma, de una gran importancia es que después
de definir la política de contraseñas. Para garantizar la seguridad de
los accesos a estos servidores, FusionSigma ha decidido implementar una
solución robusta para la gestión de contraseñas. En lugar de almacenar
las contraseñas en documentos o sistemas en la nube, que podrían ser
vulnerables, la empresa optará por un enfoque local y

seguro utilizando KeePass, un gestor de contraseñas de código abierto. A
continuación, se detalla cómo FusionSigma implementará esta solución.

<img src="Pictures/10000001000002FA000001E785BD5F96.png"
style="width:11.04cm;height:7.054cm" />

1\. Objetivo de FusionSigma

FusionSigma necesita que las contraseñas de acceso a sus servidores
virtuales sean seguras, únicas y cumplan con las políticas de seguridad
internas (como las definidas por el GPO que vimos anteriormente:
contraseñas de al menos 10 caracteres, con complejidad, etc.). Para
evitar riesgos, las contraseñas no se almacenarán en servidores en la
nube ni se sincronizarán entre dispositivos. En cambio, cada empleado
tendrá una base de datos local de contraseñas en su equipo, y el
administrador principal de FusionSigma será el encargado de gestionar la
base de datos maestra.

2\. Solución elegida: **KeePass**

FusionSigma ha seleccionado KeePass como su gestor de contraseñas.
KeePass permite:

-Crear contraseñas seguras que cumplen con las políticas de la empresa.

-Almacenarlas en una base de datos cifrada, protegida por una contraseña
maestra.

-Mantener todo localmente, sin conexión a internet ni sincronización.

3\. Instrucciones para implementar KeePass en FusionSigma

a\) Descargar KeePass

Nos dirígimos al sitio oficial de KeePass: [Installer for Windows
2.58](https://keepass.info/download.html)

En la sección de descargas, buscamos la versión adecuada para los
equipos de FusionSigma.

Esto asegura que KeePass se instale correctamente en los sistemas
operativos Windows que usa FusionSigma.

Guardamos el archivo (por ejemplo, KeePass-2.56-Setup.exe) en las
computadoras y lo instalamos.

<img src="Pictures/10000001000001490000002208DC0C0A.png"
style="width:8.707cm;height:0.9cm" />

b\) Configurar KeePass para FusionSigma.

Al abrir KeePass por primera vez, estará vacío. Para empezar, creamos
una base de datos donde se guardarán las contraseñas:

-Hacemos clic en **File \> New (Archivo \> Nuevo)** o presionamos el
ícono de una hoja blanca con una estrella (nueva base de datos).

-Elige una ubicación en el equipo para guardar el archivo. Por ejemplo,
en el equipo del administrador principal de FusionSigma, en una carpeta
segura como C:\Users\AdministradorFusionSigma\Contraseñas\\

-Nombramos el archivo, por ejemplo, FusionSigma_Servidores.kdbx, y
hacemos clic en "Guardar".

<img src="Pictures/10000001000003A50000020F9F4A1395.png"
style="width:14.873cm;height:8.4cm" />

c\) Establecemos una contraseña maestra:

-Ingresamos una contraseña maestra fuerte (por ejemplo,
Fusion2025!Seguridad).

-Esta contraseña será la única que necesitaremos recordar para acceder a
todas las demás contraseñas.

-Confirmamos la contraseña y hacemos clic en "OK".

<img src="Pictures/10000001000002260000024B986D6DC5.png"
style="width:7.872cm;height:8.401cm" />

d\) d) Organizamos las contraseñas de los todos servidores virtuales

Una vez creada la base de datos, organizamos las contraseñas de los
servidores virtuales de FusionSigma:

En el panel izquierdo de KeePass, creamos un nuevo grupo para los
servidores y los nombramos , por ejemplo, Servidores FusionSigma.

<img src="Pictures/10000001000002D6000000F9C2DB23E4.png"
style="width:9.569cm;height:3.283cm" /><img src="Pictures/100000010000017E000000C148885018.png"
style="width:6.195cm;height:3.131cm" />

<img src="Pictures/100000010000027F0000026CB2987165.png"
style="width:6.133cm;height:5.951cm" />

Y Añadimos las contraseñas de los servidores:

Dentro del grupo Servidores FusionSigma, haz clic derecho y

seleccionamos **Add Entry** (Añadir entrada)

o usando el ícono de una llave amarilla.

Rellenamos los campos:

Title: en nuestro caso, "Servidor de Datos".

Username: El usuario del servidor (por ejemplo, admin_fusionsigma).

Password:

Usamos el generador de contraseñas de KeePass (haciendo clic en el ícono
de una llave al lado del campo de contraseña). Y ConfiguraMOS el
generador para que la contraseña cumpla con las políticas de FusionSigma
(basadas en el GPO):Longitud: 10 caracteres. Incluye mayúsculas,
minúsculas, números y símbolos (por ejemplo, Fus10n\$igma2025!).

<img src="Pictures/1000000100000284000002B8299E8344.png"
style="width:7.987cm;height:8.631cm" />

Repitamos este proceso para cada servidor virtual de FusionSigma ( ej:
Servidor Web, Servidor de Respaldos y etc.).

Y nos aseguramos que las contraseñas se guardan en
C:\Users\AdministradorFusionSigma\Contraseñas

Cada empleado también puede tener su propia base de datos local en su
equipo para contraseñas individuales, siguiendo el mismo proceso.

4\. Usar las contraseñas en FusionSigma

Cuando el administrador o un empleado necesite acceder a un servidor:

-Abre KeePass y desbloquea la base de datos con la contraseña maestra.

-Busca la entrada correspondiente (por ejemplo, "Servidor de Datos -
Admin").

-Haz doble clic en el campo de usuario o contraseña para copiarlo al
portapapeles.

-Pega la información en el inicio de sesión del servidor.

-KeePass borra automáticamente el portapapeles después de unos segundos
para evitar que la contraseña quede expuesta.

###### <span id="anchor-15"></span> **• Bitlocker**

FusionSigma maneja información crítica en sus equipos y servidores, como
datos de clientes, configuraciones de servidores virtuales y documentos
internos. Para proteger esta información, la empresa ha decidido usar
BitLocker, una herramienta integrada en Windows que asegura los datos
mediante el cifrado de discos completos. En términos simples, BitLocker
"bloquea" los datos en los discos duros de los equipos y servidores, de
modo que, si alguien roba un dispositivo o intenta acceder a él sin
autorización, no podrá leer la información sin la clave de cifrado
adecuada. Esto es especialmente importante para FusionSigma, ya que un
robo físico de un equipo o servidor podría exponer datos sensibles, pero
con BitLocker, esos datos permanecerán protegidos.

GPO

Instalación de la característica “Cifrado de unidad Bitlocker”.

<img src="Pictures/10000001000003F4000002F83B5F3FFB.png"
style="width:8.765cm;height:6.583cm" /><img src="Pictures/10000001000003DC000002B7C219A8A6.png"
style="width:9.181cm;height:6.458cm" />

Una vez instalado lo activamos y configuramos TPM(Módulo de Plataforma
Segura). Es un chip especializado que se encuentra en la placa base de
muchos ordenadores modernos. Su función principal es proporcionar
seguridad basada en hardware.

<img src="Pictures/10000001000003A80000022146EF8931.png"
style="width:11.855cm;height:6.902cm" />

Habilitar el requisito de tener el módulo *TPM* para almacenar la clave
de cifrado de *Bitlocker*.

<img src="Pictures/10000001000002AC0000029ACB004874.png"
style="width:7.329cm;height:7.135cm" /><img src="Pictures/10000001000002AD0000029FDD104FA4.png"
style="width:7.294cm;height:7.144cm" />

Habilitamos también el poder de guardar la clave de recuperación en el
directorio activo.

Y se va compartir para que solo el administrador tenga
acceso:<img src="Pictures/10000001000001EC00000260F0319C9B.png"
style="width:6.362cm;height:7.863cm" />

<img src="Pictures/10000001000003590000020A4E1B21F0.png"
style="width:10.832cm;height:6.595cm" />

#### <span id="anchor-16"></span>    •Guía de las herramientas empleadas para la recuperación de los sistemas en caso de desastre. 

FusionSigma gestiona datos críticos con dos servidores físicos: uno
principal con 5 máquinas virtuales (VMs) activas y otro servidor de
respaldo (backup) para garantizar continuidad. Este plan asegura la
continuidad del negocio ante incidentes, con procedimientos claros. El
equipo de FusionSigma supervisará, mientras que
[Almerimatik](https://www.almerimatik.es/) ejecutará las tareas
técnicas.

1.Caída del Servidor Físico Principal

Proxmox detecta la caída del servidor principal (con 5 VMs) y las inicia
en el servidor de respaldo, usando la unidad de almacenamiento
compartida entre ambos servidores. Se envía un aviso al equipo de
FusionSigma, que contacta a Almerimatik
([link](https://www.almerimatik.es/)) para verificar la caída. Si es una
avería física, Almerimatik reemplaza el servidor en un máximo de 2
días.Si es una avería de software, un técnico de Almerimatik reconfigura
el servidor presencialmente en 1 día.

2.Caída de Ambos Servidores Físicos

Corte de luz:

Los servidores se apagan correctamente gracias al SAI. Si FusionSigma no
puede restablecer los diferenciales, Almerimatik coordina con un
proveedor eléctrico para reparar el suministro.Una vez restaurada la
energía, Almerimatik verifica de forma remota que los servidores
funcionen correctamente.

Daño físico:

Dado que las copias de seguridad están en OneDrive, Almerimatik
sustituye ambos servidores en 2 días y restaura las configuraciones en 1
día.

3.Pérdida de Datos de Cualquier Máquina Virtual

Las copias de seguridad de las 5 VMs están separadas en cuentas
individuales de OneDrive, permitiendo recuperar datos
fácilmente.Almerimatik identifica la VM afectada, descarga el respaldo
de OneDrive, lo descifra (usando claves de KeePass) y restaura los
datos. Este proceso lo realiza Almerimatik de forma remota en 1 día.

4.Caída de los Routers o Switches

Almerimatik reinicia los dispositivos y verifica su estado. Si hay un
defecto físico, los sustituye en un máximo de 2 días y los configura el
mismo día.

5.Caída de Alguna de las Dos Líneas de Internet

Almerimatik diagnostica el router de forma remota. Si es problema del
ISP, lo notifica; si el router falla, lo sustituye en 2 días. Dado que
hay dos ISPs contratados (Vodafone y Movistar), el tráfico pasa por el
router activo restante.

#### <span id="anchor-17"></span>    • Manual de instalación del sistema operativo: 

Esquema físico de la simulación:

<img src="Pictures/10000001000003FF00000307AE0AEFAC.png"
style="width:17cm;height:12.876cm" />

#### <span id="anchor-18"></span>▪ Guía de instalación básica. 

En los equipos de los trabajadores ,ya viene con sus SO de Windows 11
Pro instalada. Así que se va proceder con la instalación de SO para los
portátiles de CEO y CTO con Windows 11 Pro y los Servidores
Virtualizados (en la simulación con VirtualBox) con Windows Server 2022
y Ubuntu Server.

###### <span id="anchor-19"></span>Windows 11 Pro 

\*Para la simulación usare Windows 10 Pro si sigue los mismos:

Portátiles del CEO y CTO

Para los portátiles de Alejandro (CEO, VLAN V2) y María (CTO, VLAN V2):

-Descargamos la Imagen: Usare el enlace de PcComponentes para descargar
la ISO de [*Windows 11
Pro*](https://www.pccomponentes.com/microsoft-windows-11-pro-64-bit-espanol-licencia-permanente-fpp-descarga-digital)*.*

-Creamos USB Booteable: Con un USB (mínimo 8 GB), usare la Media
Creation Tool para hacerlo booteable.

-Configuramos BIOS: Encendimos el portátil, presionamos F2/F12/Del,
configuramos el USB como primera opción de arranque.

Instalación de Windows 11 Pro:

-Seguimos el instalador: idioma (español), acepta términos.

-Elegimos "Custom Install".

-Crea una partición de 20 GB (NTFS) para programas e instalamos ahí.

-Activamos: Settings \> System \> Activation \> Ingresamos la clave de
producto de PcComponentes.

-Repitimos para ambos portátiles.

<img src="Pictures/100000010000042600000326B070C428.png"
style="width:7.692cm;height:5.838cm" />
<img src="Pictures/10000001000004100000030D639CC5B8.png"
style="width:7.426cm;height:5.577cm" />

Partición de Programas y Aplicaciones (20 GB): Sistema operativo y
programas de FusionSigma.

Partición de Datos (10 GB): Hojas de cálculo, documentos,
presentaciones, aplicaciones.

Partición SWAP (8 GB): Espacio de intercambio para memoria virtual.

Instalado configuramos el SO de la siguiente manera.

 - Seleccionamos como región España.

 - Escogemos la distribución de teclado española:

<img src="Pictures/1000000100000422000003166E027B73.png"
style="width:8.703cm;height:6.498cm" />

\- Después, le damos a la configuración de organización en vez de a la
personal.

\- Creamos el usuario que va a usar la cuenta para cada vez que tengamos
que instalar el SO para administrador,director, recursos humanos y etc.

\- Creamos las contraseñas.

\- Completamos las preguntas en caso de recuperación:

<img src="Pictures/100000010000041600000309B4BE9724.png"
style="width:7.676cm;height:5.703cm" /><img src="Pictures/100000010000043900000335BB8EBB47.png"
style="width:7.735cm;height:5.876cm" />

\- Omitimos las demás opciones (innecesarias en nuestro caso) y damos
información de nuestros datos personales a Windows 11 Pro.

<img src="Pictures/10000001000003360000026A4849C7C0.png"
style="width:8.537cm;height:6.151cm" /><img src="Pictures/10000001000003390000025F7EC69D6A.png"
style="width:8.236cm;height:6.077cm" />

\- Añadimos el nombre usuario y tenemos configurado el SO:

<img src="Pictures/100000010000041600000309B4BE9724.png"
style="width:8.805cm;height:6.541cm" /><img src="Pictures/100000010000042E00000328BE1DA201.png"
style="width:8.341cm;height:6.301cm" />

**

###### <span id="anchor-20"></span>**Ubuntu Server en VirtualBox para los Servidores (Radius y Proxy):**

Optamos por Ubuntu Server porque, al no tener interfaz gráfica, consume
menos recursos (CPU, RAM), dejando más potencia para los servicios clave
de FusionSigma. Virtualizaremos los servicios en VirtualBox para mayor
flexibilidad.

La mayoría de servicios los vamos a virtualizar, por lo tanto esta guía
será la instalación del SO en VirtualBox.

-Damos a nueva máquina virtual y la nombramos de acuerdo al servicio que
vamos a implantar , elegimos el ISO de la SO que vamos usar,en este caso
es UbuntuServer , tendremos en cuenta la versión que necesitamos y la
aplicamos también:

<img src="Pictures/1000000100000420000002B27D9F6B37.png"
style="width:12.621cm;height:8.246cm" />

\- Asignamos un nombre de usuario y la contraseña que deberemos
recordar. En caso real deberíamos tener en cuenta el nombre de dominio
real de la empresa y en el caso de Windows Server el clave de producto
(UbuntoServer es Open source y no lo hay):

<img src="Pictures/100000010000035500000124DAA9B606.png"
style="width:16.349cm;height:5.597cm" />

-Lo siguiente que vamos asignar es la memoria, tanto RAM como el numero
de procesadores (en el caso de Proxy que ejecutara un solo único
servicio nos vale un CPU ,pero en el caso de HTTP/HTTPS/BBDD/SFTP ,VM
que ejecutaría varios servicios,necesitamos mas):

<img src="Pictures/10000001000003D7000000C998F784BA.png"
style="width:17cm;height:3.475cm" />

-La creación del Disco Duro Virtual.

El espacio que damos también depende de las necesidades de la dicha
maquina virtual:

<img src="Pictures/100000010000034F000001D1CB5CD649.png"
style="width:14.815cm;height:8.133cm" />

Una vez terminado ,se enciende la Servidor Virtual y empezamos a
configurar los parámetros de nuestra máquina virtual.

<img src="Pictures/10000001000002D1000001DD2E5D34B6.png"
style="width:9.918cm;height:6.07cm" />

<img src="Pictures/100000010000040B00000281472ED7D6.png"
style="width:9.888cm;height:5.749cm" />

He decidido de configurar en ingles en modo básico para la prueba:

<img src="Pictures/100000010000040D00000282F8DC0F20.png"
style="width:8.929cm;height:5.292cm" /><img src="Pictures/100000010000041200000287BFE00129.png"
style="width:8.553cm;height:5.036cm" />

Configuramos la red en que se va asignar la VM:

<img src="Pictures/10000001000004E00000031D1BB300F6.png"
style="width:12.481cm;height:7.971cm" />

La configuración de red durante la instalación de Ubuntu Server en
VirtualBox, donde se ha seleccionado la interfaz de red enp0s3 para usar
la configuración DHCP proporcionada por el host bridge. Aunque la
configuración muestra la IP del host bridge (192.168.1.248), la máquina
virtual tendra la dirección IP 10.13.0.30 (como se muestra en la esquema
lógica de la red de FusionSigma).

<img src="Pictures/10000001000004910000031E65783738.png"
style="width:11.668cm;height:7.966cm" />

Aquí se presenta la configuración del espejo de archivos de Ubuntu
durante la instalación, donde se ha introducido la dirección del espejo
español (*http://es.archive.ubuntu.com/ubuntu/*). El sistema ha probado
con éxito este espejo, como se indica en el mensaje y en la descarga de
los archivos *InRelease*.

<img src="Pictures/10000001000004C60000014ADC316B6F.png"
style="width:14.688cm;height:3.965cm" />

Después se muestra muestra la configuración del almacenamiento durante
la instalación de Ubuntu Server, detallando la creación de un grupo de
volúmenes LVM llamado ubuntu-vg y un volumen lógico / de 14.320G
formateado como ext4. También se observa la partición /boot de 2000M en
el disco local y el espacio libre disponible.

<img src="Pictures/10000001000004B40000031A481F3ECA.png"
style="width:12.554cm;height:8.278cm" />

La siguiente captura presenta una advertencia crucial durante la
instalación de Ubuntu Server, informando que la selección de "Continue"
iniciará el proceso de instalación y resultará en la pérdida de todos
los datos en los discos formateados. Además, se indica que una vez
iniciada la instalación, no se podrá regresar a esta ni a pantallas
anteriores.

<img src="Pictures/1000000100000263000000F9885ED6D2.png"
style="width:13.164cm;height:5.364cm" />

Una vez confirmado, seguimos con la configuración del perfil de usuario
durante la instalación de Ubuntu Server, donde se están introduciendo
los detalles del usuario, incluyendo el nombre completo (fatme), el
nombre del servidor (proxy), el nombre de usuario para el sistema
(fusionsigna), y la contraseña (oculta por asteriscos) que se está
confirmando. Esta información será utilizada para acceder al sistema y
para realizar tareas administrativas con sudo.

<img src="Pictures/10000001000004F30000015488B7D148.png"
style="width:17cm;height:4.561cm" />

Después se ofrece la opción de actualizar a Ubuntu Pro durante la
instalación, lo que proporcionaría actualizaciones de seguridad
extendidas para una gama más amplia de paquetes hasta 2034 y asistencia
para varios estándares de cumplimiento. Actualmente, la opción que
seleccionamos es "Skip for now", indicando que esta actualización se
omitirá en este momento.

<img src="Pictures/10000001000004F600000120E558FEA3.png"
style="width:17cm;height:3.854cm" />

Instalamos un servicio SSH para poder configurar lo en remoto (esto se
va aplicar para todas la VM):

<img src="Pictures/10000001000004FC00000142E1E36DAE.png"
style="width:15.339cm;height:3.87cm" />

En la pantalla "Featured server snaps" se permite elegir software
adicional para el servidor Ubuntu durante el proceso de instalación. En
lugar de tener que instalarlos manualmente después, podemos seleccionar
desde esta lista aplicaciones preempaquetadas y listas para usar,
conocidas como snaps, como un sistema de orquestación de contenedores
(microk8s), una solución de almacenamiento en la nube personal
(nextcloud), o la popular plataforma de contenedores (docker).

<img src="Pictures/10000001000004D2000001C9FF5C8DFF.png"
style="width:12.751cm;height:4.722cm" />

Al final se muestra el progreso detallado de la instalación del sistema
Ubuntu Server, mostrando en tiempo real las diversas tareas que se están
llevando a cabo, como la configuración del almacenamiento (particionado
y formato), la instalación de paquetes, la configuración de servicios y
la instalación del kernel. Esta pantalla indica que el proceso de
instalación está en curso y debemos esperar a que finalice para poder
reiniciar el servidor con el nuevo sistema operativo instalado.

<img src="Pictures/10000001000004E700000325A2EEC4DF.png"
style="width:12.679cm;height:8.132cm" />

###### <span id="anchor-21"></span>**Windows Server 2022 en VirtualBox para los Servidores (HTTP/HTTPS/BBDD/SFTP y DNS/AD):**

Para la instalación de Windows Server 2022 (simulación en VirtualBox),lo
primero que hacemos es descargar el ISO de la pagina oficial de
Microsoft:

<img src="Pictures/10000001000006160000039E129040E0.png"
style="width:8.728cm;height:5.186cm" />

<img src="Pictures/10000001000002DC00000151CB0235B2.png"
style="width:7.945cm;height:3.657cm" />

Una vez descargada repetimos el proceso para crear una nueva maquina
virtual en VirtualBox.

<img src="Pictures/1000000100000446000002F637D7428C.png"
style="width:10.956cm;height:7.59cm" />

Para la simulación ponemos adaptador de puente,para asignación de la
misma red como el host. Esta maquina virtual se va usar como Servidor
Web (que en realidad FusionSigma tendrá hosting para su pagina Web),que
pertenecerá en Vlan 5 (10.13.5.0/24).

<img src="Pictures/1000000100000432000002665FA55DF1.png"
style="width:10.566cm;height:6.04cm" />

Cuando encendemos nuestra VM seleccionamos el ISO (ya que no la elegido
al principio para evitar problemas de instalación):

<img src="Pictures/10000001000002D7000001ED9D8133A9.png"
style="width:10.125cm;height:6.867cm" />

Empezamos la instalación con que nos pide que configuramos las
preferencias regionales para la instalación. Debemos seleccionar el
idioma que deseamos usar durante la instalación y posteriormente en el
sistema operativo, así como el formato de hora y moneda que se ajuste a
tu ubicación.

<img src="Pictures/10000001000003E800000351F712CCF3.png"
style="width:8.28cm;height:7.029cm" /><img src="Pictures/10000001000003F9000003515BA49D8C.png"
style="width:7.976cm;height:6.659cm" />

Ahora nos toca decidir qué tipo de instalación quieremos realizar de
Windows Server 2022. Tenemos que elegir entre las diferentes ediciones
que se te presentan, como la Standard o la Datacenter, y si deseas la
experiencia de escritorio completa (como es sen nuestro caso):

<img src="Pictures/10000001000003EA0000033DE194D50C.png"
style="width:8.363cm;height:6.918cm" />

<img src="Pictures/100000010000028B000001EBFF70B40E.png"
style="width:8.313cm;height:6.271cm" />

Creamos las particiones y donde se va instalar la SO, damos a “Next” y
esperamos la se cumple la instalacion:

<img src="Pictures/10000001000003F30000033F5E81B01F.png"
style="width:7.803cm;height:6.412cm" /><img src="Pictures/10000001000003E500000320C1937B82.png"
style="width:6.609cm;height:6.257cm" />

Una vez realizada, el Windows Server 2022 se enciende y pide
configuración de Administrador con su contraseña correspondiente:

<img src="Pictures/10000001000003FB00000300C8FB4ADA.png"
style="width:7.288cm;height:5.493cm" />

<img src="Pictures/10000001000003FF000003559D81E843.png"
style="width:6.56cm;height:5.47cm" />

Y ya tenemos nuestro servidor instalado y funcionando:

<img src="Pictures/10000001000003F2000002EC9B18E6D1.png"
style="width:12.786cm;height:9.469cm" />

\*En caso real para la instalación de **PROXMOX** se va usar Vmware,
pero para la simulación de todas las maquinas Virtuales de este proyecto
estoy usando VirtualBox. Aun así ,voy ha dejar una guía básica para la
instalación de Proxmox en Vmware.

***\****[***Guía completa para instalar ProxMox en el
servidor***](https://www.assetware-technology.com/es/guia-completa-para-instalar-proxmox-en-su-servidor/)

**

**

#### <span id="anchor-22"></span>▪ Acceso remoto 

**

\* Tengo la intención de configurar un acceso remoto a través del
Router/Firewall con la opción de VPN, pero actualmente para los
servidores dejo las opciones:

*\*Para ver la simulación de VPN en Gns3 consulta* [*Ambito de
Redes*](https://drive.google.com/file/d/1N3xoHeE7KgAsywHqjekGS2v9wPGuYJfm/view?usp=sharing)
!

**

###### <span id="anchor-23"></span>RDP (Windows)

Este protocolo será implementado para gestionar de forma remota los
servidores Windows y sus servicios en modo gráfico desde los
dispositivos de los administradores. La seguridad del acceso estará
garantizada por un sistema de cifrado asimétrico combinado con una clave
de acceso (cifrado simétrico), y será administrado a través del
directorio activo.

Facilitamos el acceso a los servidores a través de activar la función de
Escritorio Remoto en “Configuración / Sistema / Escritorio Remoto”.

<img src="Pictures/10000001000001A2000001DDC04DEFBD.png"
style="width:6.392cm;height:7.294cm" />

<img src="Pictures/10000001000003D5000002264D6D3A9D.png"
style="width:8.797cm;height:4.932cm" />

Con los equipos de los trabajadores usando Windows 11 Pro, solamente hay
que dar permiso.

Con Windows Server tendremos que instalar el Rol especifico para esto:

<img src="Pictures/100000010000031C00000231821EC0B2.png"
style="width:10.723cm;height:7.557cm" />

<img src="Pictures/100000010000031500000231A896E075.png"
style="width:10.597cm;height:7.535cm" />

###### <span id="anchor-24"></span>SSH

Es el protocolo que emplearemos para que los administradores se conecten
de manera segura en modo texto a routers, switches y al servidor Ubuntu.
La conexión estará protegida por cifrado asimétrico junto con una clave
de acceso (cifrado simétrico).

Habilitar acceso a los servidores\
En el servidor que ejecuta los servicios de la aplicación web HTTPS y
SFTP, el servidor SSH ya está configurado. En los demás servidores, se
instala de la misma manera. También abrimos el puerto 22, como se
realizó en el servidor SFTP.

1.Descargamos Open SSH para nuestro sistema operativo (en este caso
Windows Server 2016).

<img src="Pictures/10000001000003FA000002FF545B9833.png"
style="width:9.641cm;height:7.264cm" />

2.Los descomprimimos ( yo le he renombrado como OpenSSH) y lo movemos en
“Archivos de programa” que se encuentra en (C:).

<img src="Pictures/100000010000031C000001C27BFF9E02.png"
style="width:10.38cm;height:5.868cm" />

3.Para instalarlo ejecutamos el script a través de powershell con el
siguiente comando:

<img src="Pictures/10000001000003C800000129AB82E729.png"
style="width:14.005cm;height:4.295cm" />

4\. Y lo encendimos:

<img src="Pictures/10000001000002AE000000733395ACA4.png"
style="width:12.666cm;height:2.124cm" /> ****

Y vemos que escucha en el puerto correspondiente ,que es 22:

<img src="Pictures/10000001000002A9000001FF90DC218D.png"
style="width:10.283cm;height:7.717cm" />

###### 

5.Configurar el servidor SFTP

Habilitamos el inicio automático para el servicio “sshd” e iniciarlo
usando los siguientes comandos de PowerShell:

PS C:\Users\Administrador\> Set-Service -Name sshd -StartupType
'Automatic'

PS C:\Users\Administrador\> start-service sshd

Habilitar la regla de firewall necesaria para SSH con el puerto 22.

<span id="anchor-25"></span>6.Habilitamos el servicio con su puerto
creando un “FirewallRule”:

<img src="Pictures/10000001000003F7000001D84BE10A40.png"
style="width:12.506cm;height:5.814cm" />

###### 

###### 

###### 

Y lo automatizamos:

<img src="Pictures/100000010000023A000000262A3C4D89.png"
style="width:12.584cm;height:0.84cm" />

<span id="anchor-26"></span>Creando también un usuarios o varios para el
servicio:

###### <img src="Pictures/100000010000022F0000005B1476B17C.png"
style="width:12.98cm;height:2.113cm" />

<img src="Pictures/10000001000002F0000001FEBD90BC5F.png"
style="width:10.47cm;height:7.101cm" />7.Editar el fichero
“sshd_config_default” ubicado en “C:\ProgramData\SSH\\ y verificar que
la siguiente línea está descomentada.

\

Para la prueba he creado una carpeta “fisionsigma” y he asignado todos
los permisos para el administrador que hemos creado el usuario
anteriormente en Open SSH “FusionSigma2”:

<img src="Pictures/10000001000002F30000020009BD73C3.png"
style="width:11.786cm;height:7.992cm" />

8.Conexión al servidor SFTP mediante WinSCP

Descargamos “WinSCP” desde este
[enlace](https://winscp.net/eng/download.php) y lo instalamos.
Especificamos el protocolo a utilizar, el nombre del servidor, el puerto
de éste, el usuario con el que queremos iniciar sesión en el servidor y
su contraseña.

La prueba la estoy haciendo desde mi propio portátil (como un
cliente),ya que esta en la misma red con el Servidor SFTP:

<img src="Pictures/1000000100000325000002093A1DF069.png"
style="width:13.174cm;height:8.527cm" />

El IP del servidor es 192.168.1.211, porque he asignado como adaptador
el host para la prueba. En el caso real esta VM estará con IP
correspondiente del esquema lógico (10.13.0.10/24).

Nos asignamos con el usuario creado previamente ,usando el puerto 22 y
la contraseña correspondiente.

Damos a “Conectar” y observamos todas las carpetas en el servidor SFTP.
Dependiendo de los permisos a cada carpeta ,tendremos o no acceso.

<img src="Pictures/10000001000005420000036414824019.png"
style="width:11.841cm;height:7.636cm" />

Podemos observar que se puede abrir la carpeta de fusionsigma y si
abrimos el archivo de tarea.php la podemos modificar:

<img src="Pictures/100000010000053E0000035D75AF1B03.png"
style="width:8.426cm;height:5.406cm" /><img src="Pictures/100000010000055A0000035DC2E0B95C.png"
style="width:8.072cm;height:5.073cm" />

<span id="anchor-27"></span>\*Para consultar la guía de las
instalaciones de todos los servicios y sus funcionamientos en las
maquinas virtuales, consulta [Ambito de
Redes](https://drive.google.com/file/d/1N3xoHeE7KgAsywHqjekGS2v9wPGuYJfm/view?usp=sharing).

\*Para consultar el SSH , Firewall y reglas en la red de FusionSigma
consulta el
[LINK](https://drive.google.com/file/d/1DrVL5ruorGAre9hFoPC3_kutYIPtsT4o/view?usp=sharing).

#### <span id="anchor-28"></span>▪ Controlador de dominio FusionSigma

**

*FusionSigma SL tiene un servidor con Windows Server 2016 (para la
simulación) que actúa como controlador de dominio (DC) para el dominio
fusionsigma.com. Los 22 empleados usan equipos (Windows 10 para la
simulación) que necesitan unirse al dominio para acceder a recursos
compartidos.*

Nombre del servidor:fusionsigma

Dirección IP estática: 10.13.0.100/24

Nombre de dominio: fusionsigma.com.

Rol: Active Directory Domain Services (AD DS) y DNS Server instalados.

El equipo cliente para simulacion es Windows 10 con IP 10.13.1.3/24.

Seleccionamos el equipo y hacemos clic con el botón derecho. Luego,
ingresamos a las propiedades del sistema, accedemos a la configuración
del nombre del equipo y seleccionamos 'Cambiar'. Después, añadimos el
nombre del dominio:

<img src="Pictures/10000001000003F5000002F587E1F828.png"
style="width:8.613cm;height:6.435cm" /><img src="Pictures/10000001000002DB0000028AAA4845D1.png"
style="width:7.578cm;height:6.738cm" />

Nos pedirá el nombre de usuario del administrador y la contraseña.
Ingresamos esta información y luego hacemos clic en Entrar y lo
reiniciamos:

<img src="Pictures/10000001000003BC000002A691622FCF.png"
style="width:7.181cm;height:5.046cm" /><img src="Pictures/100000010000016D000000BBB5584DA9.png"
style="width:7.726cm;height:3.958cm" />

**

**

Creamos una regla Ping en el Firewall en el servidor, para asegurarnos
la conexión del equipo de trabajo que vamos unir en el controlador del
dominio:

**

***I****MPORTANTE!!! Nunca desactivamos el Firewall.***

<img src="Pictures/10000001000003240000025207B9F30D.png"
style="width:12.058cm;height:8.908cm" />**

Desde la “Regla de entrada” creamos una “Regla nueva” \> \>
“Personalizada” \> \> “ICMPv4”

<img src="Pictures/100000010000032800000264D332FEE8.png"
style="width:8.167cm;height:6.186cm" /><img src="Pictures/10000001000003210000025F6CB1893F.png"
style="width:8.281cm;height:6.276cm" />

En caso real se van asignar los IP\`s correspondientes de todos los
equipos de trabajo, mejorando la seguridad del controlador de dominio y
de la red de FusionSigma:

<img src="Pictures/10000001000003240000027820EEE2BE.png"
style="width:7.306cm;height:8.184cm" /><img src="Pictures/1000000100000228000001D6D4B0564A.png"
style="width:9.11cm;height:7.756cm" />

<img src="Pictures/100000010000021D000001D4DFAD2E73.png"
style="width:9.038cm;height:7.546cm" />

Así procedemos con todos los equipos de los empleados de la empresa,
uniéndolos al dominio y configurando cuentas de usuario individuales
para cada empleado, asegurándonos de que puedan iniciar sesión
correctamente con sus propios usuarios.

#### <span id="anchor-29"></span>▪ Script para insertar todos los trabajadores en OU y grupos correspondientes:

**

\# Dominio

\$Domain = "FusionSigma.com"

\# Ruta CSV

\$Ruta = "C:\\Personal\\listausuarios.csv"

\# Importamos CSV

\$Usuarios = Import-Csv -Path \$Ruta -ErrorAction Stop

foreach (\$Usuario in \$Usuarios) {

\$GivenName = \$Usuario.GivenName

\$SurName = \$Usuario.SurName

\$DisplayName = \$Usuario.DisplayName

\$SamAccountName = \$Usuario.SamAccountName

\$Description = \$Usuario.Description

\$City = \$Usuario.City

\$Mobile = \$Usuario.Mobile

\$OU = \$Usuario.OU

\$Group = \$Usuario.Group

\$Password = ConvertTo-SecureString \$Usuario.Password -AsPlainText
-Force

New-ADOrganizationalUnit -Name "Silo" -Path
"OU=\$OU,OU=usuarios,DC=JMDInnovatech,DC=local"

New-ADGroup -Name "\$Group-\$SamAccountName-GrupoCategory Security"
-GroupScope Global -DisplayName "\$Group" -Path
"OU=Silo,OU=usuarios,DC=JMDInnovatech,DC=local"

New-ADUser -GivenName \$GivenName -SurName \$SurName -DisplayName
\$DisplayName -Name \$SamAccountName -UserPrincipalName
"\$SamAccountName@\$Domain" -Description \$Description -City \$City
-Mobile \$Mobile -Path "OU=\$OU,OU=usuarios,DC=JMDInnovatech,DC=local"
-Enabled \$true -PasswordNeverExpires \$true -ChangePasswordAtLogon
\$false -AccountPassword \$Password -ErrorAction Stop

Add-ADGroupMember -Identity "\$Group-\$SamAccountName-GrupoCategory
Security" -Members \$SamAccountName

}

Write-Host "Carga completada" -ForegroundColor Red

**

#### <span id="anchor-30"></span>▪ Carpetas compartidas

**

Carpeta "Database":

Descripción: Almacena archivos relacionados con el diseño,
implementación y mantenimiento de arquitecturas de bases de datos a
medida, el núcleo de los servicios de FusionSigma.

Esta carpeta le damos los permisos y restricciones necesarios de
“Propiedades” al grupo entero que hemos creado previamente de BD
Administradores:

<img src="Pictures/10000001000003F7000002C887001CB7.png"
style="width:9.287cm;height:6.514cm" />

<img src="Pictures/10000001000002EA0000021ADA7A422E.png"
style="width:8.742cm;height:6.304cm" />

Usuarios:

Administradores de bases de datos (15 profesionales).

Permisos:

Administradores de bases de datos: Acceso completo (lectura, escritura).

*Y podemos observar en el ejemplo que en la carpeta “Database” tenemos
otra, un archivo sql y documento de texto. Para la simulación , desde mi
portátil usando como un cliente (Administrador de base de datos) en la
misma red, debería poder acceder en ella y tener permisos de escritura.*

<img src="Pictures/10000001000003EF000002F01752DCAF.png"
style="width:11.024cm;height:8.232cm" />

Y podemos observar que efectivamente la carpeta compartida del Servido
BBDD/SFTP nos aparece.

<img src="Pictures/10000001000002BD00000332F6DFF82C.png"
style="width:10.245cm;height:11.954cm" />

Y si abrimos el archivo de texto que era vació, podemos ver que gracias
a los permisos de escritura lo podemos modificar.

<img src="Pictures/100000010000058D00000323BF515963.png"
style="width:13.222cm;height:7.472cm" />

\*Con las otras dos carpetas se hace lo mismo, asignando las permisos
que les corresponden.

Carpeta "Management":

Descripción: Contiene documentos estratégicos, planes de negocio,
informes ejecutivos y comunicaciones relacionadas con la dirección de la
empresa.

Usuarios:

CEO (Alejandro Gómez).

CTO (Director de Tecnología).

Permisos:

CEO y CTO: Acceso completo (lectura, escritura, modificación).

Otros usuarios: Sin acceso, salvo autorización explícita del CEO.

Carpeta "HumanResources":

Descripción: Almacena información sobre gestión de personal, incluyendo
contratos, nóminas, políticas internas y procesos de contratación.

Usuarios:

Responsable del departamento de recursos humanos.

CEO (acceso restringido según necesidad).

Permisos:

Responsable de recursos humanos: Acceso completo (lectura, escritura,
modificación).

CEO: Acceso de solo lectura para supervisión, con permisos específicos
otorgados por el responsable de recursos humanos.

#### <span id="anchor-31"></span>▪ Métodos y políticas de actualización: 

**

*Aunque en la empresa FusionSigma se usa solo Windows 11 Pro de los
trabajadores ,dejo una guía simple para las Actualizaciones
automáticas:*

***E****n Windows:***

He habilitado las actualizaciones automáticas del sistema operativo,
programándolas para que se ejecuten fuera del horario laboral de la
empresa, con un margen adicional para quienes trabajan horas extras (de
21:00 a 22:00). Además, he configurado un script en el Programador de
Tareas de Windows para apagar automáticamente los equipos a las 22:00,
una vez completadas las actualizaciones, asegurando que no se
interrumpan las operaciones ni se dejen equipos encendidos
innecesariamente.

1.Crear una nueva tarea:

<img src="Pictures/10000001000003130000025574FE08E3.png"
style="width:11.559cm;height:8.768cm" />**

**

**

**

**

**

**

**

**

**

**

2.Configurar el desencadenador:

<img src="Pictures/10000001000002D80000028852D75BDF.png"
style="width:11.247cm;height:10.012cm" />

**

**

**

**

**

**

**

**

**

**

**

**

**

3.Configura la acción:

a\) Crear el script “apagar_post_actualizacion.ps1”

b\) Crear “nueva acción”:

<img src="Pictures/1000000100000320000000FDD83D93ED.png"
style="width:13.679cm;height:4.327cm" /> ******

**

**

**

**

**

**

**

**

<img src="Pictures/10000001000002320000026C52688028.png"
style="width:6.888cm;height:7.599cm" />**

**

**

**

**

**

**

**

**

**

**

**

En Linux:

He configurado una tarea programada en Linux utilizando cron para
gestionar las actualizaciones automáticas del sistema operativo y el
apagado posterior del equipo. Un script ejecuta las actualizaciones a
las 21:10, fuera del horario laboral, instalando los paquetes
disponibles. A las 21:20, otro script apaga el equipo, asegurando que
las actualizaciones se completen sin interrumpir el trabajo y
optimizando el consumo energético.

<img src="Pictures/10000001000002F8000000768827EEA1.png"
style="width:17.649cm;height:2.831cm" /> ******

<img src="Pictures/1000000100000156000000690CAC47DF.png"
style="width:7.452cm;height:2.223cm" /> ******

**

**

**

**

**

<img src="Pictures/10000001000003860000036A2F98A32D.png"
style="width:2.921cm;height:2.397cm" />**

**

FIN
