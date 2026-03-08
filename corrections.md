### []{#anchor}                    ÁMBITO DE REDES             ![](Pictures/1000000000000159000001534032C0E7.png){width="2.304cm" height="2.263cm"}

#### 

#### 

#### 

#### 

#### 

#### []{#anchor-1}1.Datos de la empresa

FusionSigma SL se dedica a la provisión de soluciones tecnológicas
disruptivas, caracterizadas por su accesibilidad y eficiencia, con el
firme propósito de impulsar la modernización y la optimización integral
de las operaciones de pequeñas y medianas empresas (PYMES) inmersas en
el ecosistema digital contemporáneo. La compañía se erige como un socio
estratégico fundamental, acompañando meticulosamente a estas
organizaciones en su proceso de transformación digital mediante una
metodología pragmática y altamente adaptada a sus necesidades
específicas. Su actividad principal se vertebra en dos dominios
esenciales: el diseño y la implementación de arquitecturas de bases de
datos a medida y la administración integral de infraestructuras en la
nube.

La estructura organizativa de la empresa se compone de un equipo de 25
profesionales distribuidos entre sus dos sedes: la sede principal en
Almería y la sede en Málaga. En la sede de Málaga, se cuenta con un
equipo especializado que incluye a 3 administradores de bases de datos,
quienes refuerzan la capacidad de la empresa para ofrecer soluciones
personalizadas y garantizar la gestión eficiente de datos para sus
clientes.

\
\
CEO (Chief Executive Officer), Director Ejecutivo: 1\
CTO (Chief Technology Officer), Director de Tecnología: 1\
Desarrolladores Web: 1\
Administradores de Bases de Datos: 15+3 en Málaga.\
Especialistas en Seguridad Informática: 1\
Departamento de Marketing y Ventas: 1\
Departamento de Recursos Humanos (HR): 1\
Departamento de Contabilidad: 1

+-----------------------+--------------------------------------------------------------------+
| **Nombre**            | FUsionSigma                                                        |
+-----------------------+--------------------------------------------------------------------+
| **CIF**               | F1234567X                                                          |
+-----------------------+--------------------------------------------------------------------+
| **Tipo de empresa**   | Sociedad Limitada (S.L.)                                           |
+-----------------------+--------------------------------------------------------------------+
| **Ubicación**         | Avda. de la Innovación, 15. Autovía del Mediterráneo (A-7). Salida |
|                       | 460 CP 04131 Almería                                               |
+-----------------------+--------------------------------------------------------------------+
| **Propósito**         | Desarrollo de Bases de Datos Personalizadas                        |
|                       |                                                                    |
|                       | y Gestión en la nube                                               |
+-----------------------+--------------------------------------------------------------------+
| **Nº empleados**      | 22                                                                 |
+-----------------------+--------------------------------------------------------------------+
| **Nº teléfono**       | 613025813                                                          |
+-----------------------+--------------------------------------------------------------------+
| **Pagina Web**        | FusionSigma.com                                                    |
+-----------------------+--------------------------------------------------------------------+
| **Email**             | <fusionsigma@gmail.com>                                            |
+-----------------------+--------------------------------------------------------------------+
| **Logo**              |                                                                    |
|                       | ![](Pictures/1000000000000159000001534032C0E7.png){width="3.649cm" |
|                       | height="3.586cm"}                                                  |
+-----------------------+--------------------------------------------------------------------+

#### 

#### []{#anchor-2}2.Necesidades y soluciones a la situación informática

1\. La empresa requiere una red que soporte servicios críticos como:

a\. DHCP (Asignación dinámica de IPs)

Implementación: Servidor DHCP local virtualizado.

Justificación: Asigna IPs personalizadas por empleado, mejora la gestión
de red y reduce riesgos frente al DHCP del ISP. Garantiza control y
seguridad para servidores y estaciones de trabajo.

b\. DNS (Resolución de nombres - Primario y Forwarder)

Implementación: Servidor DNS local (Active Directory) como primario para
dominios internos y forwarderpara consultas externas, redirigiendo al
DNS del ISP o a servicios públicos como Google DNS (8.8.8.8) cuando sea
necesario.

Justificación: Resuelve rápidamente nombres internos
(intranet.fusionsigma.local) para administradores de BBDD, acelera
consultas con caché.

c\. HTTP/HTTPS (Servicios web)

Implementación: Servidor web (Apache) virtualizado con SSL/TLS.

Justificación: Aloja aplicaciones internas (paneles de BBDD, CRM) y
prototipos web para pruebas. HTTPS protege datos sensibles y refuerza la
imagen profesional ante clientes PYMES.

d\. BBDD (Bases de datos)

Implementación: Servidores de BBDD (PostgreSQL/MySQL) en clúster
virtualizado.

Justificación: Soporta el diseño y prueba de bases de datos a medida,
core del negocio. Entornos locales seguros permiten desarrollo sin
depender de la nube, con alta disponibilidad.

e\. SFTP (Transferencia segura de datos)

Implementación: Servidor SFTP (OpenSSH) con autenticación Radius.

Justificación: Transfiere archivos sensibles (backups, scripts) de forma
cifrada entre empleados y clientes, cumpliendo GDPR y facilitando
colaboración interna segura.

f\. Radius (Autenticación)

Implementación: Servidor FreeRADIUS para autenticación centralizada de
usuarios.

Justificación: En nuestra red, Radius se utiliza exclusivamente para
autenticar usuarios que se conectan a través de los puntos de acceso
Wi-Fi, garantizando un acceso seguro, simplificando la gestión de
credenciales y registrando intentos de conexión para mayor control y
seguridad.

g\. Proxy (Control de acceso a internet)

Implementación: Servidor proxy (Squid) con filtrado y caché.

Justificación: Restringe sitios no laborales, ahorra ancho de banda con
caché, bloquea amenazas y monitorea tráfico, protegiendo datos sensibles
y optimizando productividad.

Implementar un servidor principal con virtualización (usare VirtualBox
para la simulación) para alojar todos los servicios mencionados, con un
servidor de backup para redundancia.

2\. Se necesita seguridad para proteger datos sensibles y acceso a
internet confiable con redundancia.

Incorporar un router principal (R1) que funcione como enrutador y
firewall para gestionar el tráfico entre VLANs y garantizar la seguridad
de la red. Además, incluir dos routers adicionales (R2 y R3),
proporcionados por Movistar y Vodafone, responsables del balanceo de
carga, failover y la conectividad a Internet. Utilizar switches con
soporte 802.1q para la segmentación de VLANs.

3\. Virtualización para optimizar recursos y reducir costos.

La virtualización reduce el hardware necesario, mejora la escalabilidad
y permite restaurar servicios rápidamente en caso de fallo. Los routers
y el firewall aseguran conectividad redundante y protección contra
amenazas externas, mientras que las VLANs segmentan el tráfico (por
ejemplo, VLAN para usuarios y otra para servidores).

»»»Alta Disponibilidad en FusionSigma

La alta disponibilidad es clave para FusionSigma, una empresa mediana
con rápido crecimiento proyectado. Los costos de un servidor de backup y
dos ISPs son razonables frente a las pérdidas por inactividad, que
interrumpirían operaciones en la sede remota, aunque los empleados
locales puedan seguir trabajando y los clientes no perciban caídas en la
web alojada en hosting. Proxmox optimiza recursos al virtualizar
servicios y permite pruebas en el servidor de backup, mientras la
redundancia en conectividad asegura operaciones en la nube. Estas
medidas garantizan continuidad, cumplimiento normativo (GDPR) y
competitividad, posicionando a FusionSigma para escalar con éxito en su
misión de modernización digital para PYMES.

\*Nota sobre VirtualBox: Aunque VirtualBox se usa para simulaciones, la
implementación real con Proxmox refuerza la escalabilidad y robustez,
alineándose con las necesidades de una empresa en expansión.

\*Para mas información: [Ambito
Comun](https://drive.google.com/file/d/1t_Dek7EE4OY3OvUv6rw3K0LT904VDtSm/view?usp=sharing).

###### 

#### []{#anchor-3}3.Esquema lógico real

![](Pictures/100000010000064C000003165B95BC6C.png){width="17cm"
height="8.331cm"}

VLANs y subredes:

V1 (10.13.0.0): Servidor 1 con servicios como DHCP, DNS/AD, HTTP/HTTPS,
BBDD, SFTP, Radius, Proxy No Transparente y Servidor 2 como Backup.

V2 (10.13.1.0): Dispositivos de gestión (CEO, CTO, Trabajadores x20).

V3 (10.13.3.0): Es exclusivamente para la administración de dispositivos
de red (AP\`s y switches) no para usuarios Wi-Fi, y los switches y
puntos de acceso tienen IPs en este rango para su gestión segura y
centralizada. Los usuarios que se conectan a través de los puntos de
acceso Wi-Fi no forman parte de esta red. En su lugar, se les asigna IPs
en una red diferente (10.13.2.0/24), segregada para garantizar seguridad
y evitar que accedan a la red de administración.

V4 (10.13.4.0): Conexión externa a ISPs (Vodafone, Movistar) y el
dominio fusionsigma.com.

V5 (10.13.2.0): Red reservada para visitantes de la empresa con conexión
unicamente por Wifi.

Dispositivos de red:

R1: Router principal y firewall, conectado a Sw1 (puerto 3, dot1q), con
interfaces en V1 (10.13.0.1), V2 (10.13.1.0), V3 (10.13.3.1), y V4
(10.13.4.1).

R2 y R3: Routers que conectan a los ISPs (Vodafone y Movistar) con
direcciones 10.13.4.2 y 10.13.4.3.

Sw1 y Sw2: Dos switches que conectan los dispositivos dentro de las
VLANs.

Puntos de acceso V3 (AP):

AP1 - Conectado a Sw1 (puerto 23, PoE).

AP2 - Conectado a Sw2 (puerto 23, PoE).

\*Se ha dejado VLAN 5 (10.13.2.0/24): creada para clientes y visitantes
que usan la Wi-Fi (SSID de invitados), aislada de VLANs internas (V1,
V2) por seguridad, permitiendo solo acceso a internet.

###### []{#anchor-4}!!!

#### []{#anchor-5}4.Esquema físico real

![](Pictures/100000010000044E000003311E0F8CB9.png){width="16.679cm"
height="11.017cm"}

\*Los R2 y R3 se van enchufar en Switch2 (puertos 22 y 23 a través de
vlan 4).

Switch / Sede Málaga \*Todo se conecta atraves de Vlan 1/access

![](Pictures/100000010000036E0000024A7A022937.png){width="11.599cm"
height="7.742cm"}

Switch 1 (Sw1)

Puerto 1: Servidor 1 (10.13.0.3, V1) - Modo access.

Puertos 4-5: 2 portátiles HP Victus (10.13.1.2 y 10.13.1.3, V2) - Modo
access.

Puerto 3: Router Cisco ASA5506 (10.13.0.1, V1; 10.13.4.1, V4;
10.13.1.1,V2; 10.13.3.1, V3) - Modo dot1q (trunk) para VLANs 1, 2, 3, 4.

Puerto 23: Punto de Acceso 1 (10.13.3.2, V3) - Modo access, PoE+.b

Puerto 24: Switch 2 (Sw2) - Modo dot1q (trunk) para VLANs 1, 2, 3, 4.

Switch 2 (Sw2)

Puertos 1-20: 20 sobremesas PcCom Work (10.13.1.4 a 10.13.1.23, V2) -
Modo access.

Puerto 21: Servidor 2 (10.13.0.200, V1) - Modo access.

Puerto 23: Punto de Acceso 2 (10.13.3.3, V3) - Modo access, PoE+.

Puerto 24: Switch 1 (Sw1) - Modo dot1q (trunk) para VLANs 1, 2, 3, 4.

Switch 3 (PoE)

Puerto 1: Modo access 3 (AP 1 / 10.13.3.10)

Puerto 2: Modo access 3 (AP 2 / 10.13.3.20)

Puerto 3: Modo access 3 (Conexión con SW2)

\* Vlan Nativa sera Vlan 1 (por defecto).

###### []{#anchor-6}Implementación de Infraestructura Tecnológica Escalable y Segura para FusiónSigma.

FusiónSigma es una empresa especializada en la gestión de bases de datos
en la nube, ofreciendo soluciones robustas para clientes que requieren
almacenamiento, procesamiento y análisis de datos a gran escala. Para
cumplir con sus objetivos operativos y estratégicos, la empresa necesita
una infraestructura tecnológica que combine hardware físico de alto
rendimiento, conectividad avanzada, seguridad de red y la integración de
plataformas líderes en la nube como Amazon Web Services (AWS), Google
Cloud Platform (GCP) y Microsoft Azure.

Además, se requiere el desarrollo de una **aplicación web (acceso
restringido)** que sirva como interfaz para los empleados, permitiendo
la gestión y consulta de bases de datos en tiempo real, permitiendo
crear, modificar y optimizar esquemas de bases de datos locales
(PostgreSQL/MySQL) mediante paneles como phpMyAdmin o interfaces
personalizadas y proporciona acceso inmediato a datos de prueba y
métricas de rendimiento (uso de CPU, tiempo de consultas y etc.). Esta
aplicación interna, se accede mediante un nombre de dominio interno
gestionado por el servidor DNS local. Este dominio es resuelto por el
DNS primario configurado en la infraestructura local (Active Directory),
accesible solo dentro de la red de FusionSigma.

Y una **externa (pagina web usando hosting)**, diseñado para:

-Anunciar los servicios de FusionSigma, como gestión de bases de datos
en la nube, integración con AWS/GCP/Azure, y soluciones de análisis de
datos.

-Presentar al equipo (CEO, CTO, etc.) para proyectar profesionalismo y
confianza.

-Atraer clientes PYMES mediante información sobre casos de éxito,
testimonios y un formulario de contacto.

**- Router/Firewall (1 unidad): Cisco ASA5506-SEC-BUN-K9**

Marca: Cisco ASA5506-SEC-BUN-K9

Características: VPN, filtrado de tráfico, detección de intrusos

Uso en FusiónSigma: Garantiza que las conexiones a la nube y la
aplicación web sean seguras, protegiendo datos sensibles de clientes.

\- Conmutadores Ethernet (2 unidades): TP-Link TL-SG1428PE

Marca: TP-Link TL-SG1428PE

Puertos: 24 puertos Gigabit PoE+ (10/100/1000 Mbps) + 2 puertos SFP por
unidad

Características: PoE+ (250W por switch), soporte VLAN, QoS

Uso en FusiónSigma:

-Integra toda la infraestructura local con velocidad y estabilidad.

-Soporta tráfico hacia/desde la nube para sincronización de bases de
datos.

\- Puntos de Acceso (2 unidades)

Marca:TP-Link EAP610

Ofrece Wi-Fi 6 (AX1800), velocidades de hasta 1201 Mbps en 5 GHz y 574
Mbps en 2.4 GHz, soporta PoE (compatible con los switches TL-SG1428PE).

Tras ser contratado por la empresa para lograr estos objetivos,
enfocándome en que la red sea más segura y eficaz, estos son los puntos
clave en los que me concentraré en mi proyecto:

• Adquirir, instalar y configurar nuevos equipos de hardware
(computadoras, servidores, routers y switches) de alta calidad para que
las tareas sean más productivas.

• Implementar y ajustar servidores, routers y switches para garantizar
el adecuado desarrollo, operación y soporte de la arquitectura de red y
sus servicios.

• Desplegar todos los servicios necesarios para la automatización de
procesos en la empresa.

• Diseñar una base de datos que organice la información de los
proyectos, el personal y los clientes habituales.

• Configurar y administrar cuentas de usuario dentro de la empresa para
que cada trabajador disponga de su propio espacio privado en el entorno
laboral.

• Definir políticas de seguridad internas.

• Desarrollar una aplicación web (interna) que solo ciertas trabajadores
tendrán acceso para asignar tareas ,proyectos y gestionar trabajadores y
clientes .

• Desarrollar una página web que permita a los clientes realizar y
consultar todos los servicios que ofrece FUsionSigma.

Esta página será alojada en un proveedor de
[hosting](https://www.hostinger.es/) externo. Optamos por hospedarla
externamente por varias razones:

1.Alta disponibilidad: Los proveedores externos ofrecen centros de datos
distribuidos globalmente con sistemas redundantes (RAID, servidores
espejo, energía de respaldo). Esto garantiza un tiempo de actividad
cercano al 99.9%, incluso ante fallos de hardware o cortes eléctricos.
Un servidor local sería vulnerable a interrupciones por fallos en la red
eléctrica, averías de hardware o problemas de conectividad, lo que
podría dejar la página web de la empresa fuera de línea.

2.Seguridad avanzada: Los proveedores implementan medidas robustas
contra amenazas como ataques DDoS (firewalls, sistemas de mitigación en
la nube), además de monitoreo continuo por equipos especializados.
Configurar estas defensas localmente requeriría un firewall dedicado,
software IDS/IPS (ej. Suricata), y personal capacitado en
ciberseguridad, lo que implica un alto costo y conocimientos técnicos
que podrían no estar disponibles en la empresa.

3.Escalabilidad: Los servicios de hosting externo ajustan
automáticamente recursos (CPU, RAM, ancho de banda) para manejar picos
de tráfico sin degradar el rendimiento. Un servidor local tendría
limitaciones de hardware (ej. capacidad de CPU o memoria) y requeriría
actualizaciones físicas o servidores adicionales para gestionar aumentos
súbitos de visitas, lo que puede ser costoso y lento de implementar.

4.Costes reducidos: Montar un servidor local implica inversiones
iniciales en hardware (servidor, SAI, almacenamiento redundante),
conectividad (IP pública fija, router/firewall), y servicios externos
(DNS, dominio). Además, incurre en gastos recurrentes como electricidad,
mantenimiento, y personal para administración y resolución de fallos. En
cambio, el hosting externo ofrece una solución predecible por menos de 3
euros al mes, eliminando la necesidad de infraestructura propia y
optimizando los recursos de la empresa.

5.Almacenamiento: El plan proporciona 200 GB de almacenamiento,
suficiente para alojar archivos, imágenes, videos y bases de datos de la
página web sin restricciones de espacio a corto o medio plazo.

6.Relación calidad-precio: Por menos de 3 euros al mes, este plan ofrece
alta disponibilidad, seguridad, escalabilidad y almacenamiento adecuado,
siendo una solución eficiente y económica para FUsionSigma.

#### []{#anchor-7}5.Virtualización con Proxmox

FusiónSigma utilizara un servidor físico (el Servidor 1, Dell PowerEdge
R6515) con Proxmox VE (Virtual Environment) como plataforma de
virtualización. Proxmox es un hipervisor de código abierto basado en
Debian que permite alojar múltiples máquinas virtuales (VM) y
contenedores (LXC) en un único servidor físico. Esto significa que, en
lugar de tener servidores físicos separados para cada función (como
DHCP, DNS, HTTP/HTTPS, BBDD,SFTP Proxy y RADIUS), todas estas funciones
se ejecutan como máquinas virtuales independientes dentro del Servidor
1.

Máquinas Virtuales (VM) Configuradas:

VM para DNS/AD:

Sistema operativo: Windows Server 2022.

Función: Aloja los servicios de Active Directory (
[AD](https://docs.google.com/document/d/1qpCHlVyrtSCIF7ouV7G6Fm1EokUsLj1hSt2MCuSWOsE/edit?usp=sharing)
) y DNS para la gestión de usuarios y resolución de nombres en la red.

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
Fusionsigma (fusionsigma.local). En Windows Server, para la simulación
usaremos IIS (Internet Information Services) como servidor web para
HTTP/HTTPS.

-Base de Datos (BBDD): Se implementará una base de datos relacional en
el servidor Windows utilizando XAMPP, que incluye MariaDB (compatible
con MySQL) como motor de base de datos. Esto permitirá almacenar y
gestionar los datos de las aplicaciones de forma eficiente. XAMPP
también proporcionará un entorno integrado con Apache para alojar
aplicaciones web y PHP para interactuar con la base de datos.

\*Para comprobar BBDD pulsa en el [Ambito de Base de
Datos](https://drive.google.com/file/d/1vASebgDZPp22c2LAyE0j1kK28T5Kj5M9/view?usp=sharing).

-SFTP: Proporcionamos un servidor SFTP para la transferencia segura de
archivos. Windows Server no tiene un servidor SFTP nativo, pero
instalando un software de terceros, en nuestro caso OpenSSH Server, lo
conseguimos. El servicio lo usarán principalmente los Administradores de
Bases de Datos (15 profesionales) y el CTO para:

-Intercambio seguro de datos: Enviar/recibir backups, esquemas de bases
de datos o configuraciones con clientes o entre sistemas internos.

-Automatización: Facilitar procesos como la carga de datos a la nube o
actualizaciones de entornos.

-Cumplimiento: Garantizar transferencias cifradas para cumplir con
regulaciones de seguridad.

IP: 10.13.0.10 (V1)

VM para Proxy no transparente:

Sistema operativo: Ubuntu Server 22.04.

Función: Ejecuta un proxy no transparente (Squid) para controlar y
filtrar el tráfico web de los trabajadores.

IP: 10.13.0.30 (V1).

VM para RADIUS:

Sistema operativo:Ubuntu Server 22.04.

Función: Aloja un servidor RADIUS (FreeRADIUS) para la autenticación de
usuarios en la red (AP3 y AP4).

IP: 10.13.0.20 (V1).

\* Todas las VMs están en el Servidor 1, que pertenece a la VLAN 1 (V1:
10.13.0.0/24). El Servidor 1 está conectado a Sw1 (puerto 1, VLAN 1), y
las IPs de las VMs están dentro del rango de V1. Las VMs se conectan a
la red a través de un puente de red en Proxmox (vmbr0), asociado a la
interfaz física del Servidor 1, que está en VLAN 1.

R1 (10.13.0.1) enruta el tráfico entre las VMs (V1) y otras VLANs (V2,
V3, V4), aplicando reglas de firewall.

La virtualización con Proxmox ofrece múltiples ventajas frente a usar
servidores físicos separados para cada función.

1.Disminución de costes: En lugar de comprar cinco servidores físicos
separados (uno para DHCP, otro para HTTP/HTTPS, otro para BBDD, etc.),
todo se consolida en un único servidor físico (Servidor 1). Esto reduce
los costos de hardware, mantenimiento y espacio físico.

2.Mantenimiento sin interrupciones: Al tener cada servicio en una VM
independiente, se puede realizar mantenimiento (actualizaciones,
parches, reinicios) en una VM sin afectar a las demás. Proxmox permite
apagar o reiniciar una VM específica mientras las otras siguen
funcionando.

3.Clonación y recuperación de máquinas virtuales: Proxmox permite crear
copias (clones) de las VM y realizar snapshots (instantáneas) de su
estado en un momento dado. Si una VM falla, se puede restaurarla
rápidamente a un estado anterior sin necesidad de reconfigurarla desde
cero.

4.Escalabilidad y flexibilidad: Proxmox permite añadir o eliminar VM
según las necesidades de la empresa sin necesidad de hardware adicional,
siempre que el servidor físico tenga recursos suficientes (CPU, RAM,
almacenamiento). Esto es ideal para una empresa como FusiónSigma, que
puede necesitar nuevos servicios en el futuro.

5.Entornos de pruebas y desarrollo: La virtualización permite crear
entornos aislados para pruebas sin afectar los sistemas de producción.
Puedes crear una VM, probar configuraciones o software, y eliminarla si
no funciona, todo sin riesgos.

6.Eficiencia energética y sostenibilidad: Usar un solo servidor físico
en lugar de varios reduce el consumo de energía y la necesidad de
enfriamiento. Esto no solo baja los costos operativos, sino que también
contribuye a la sostenibilidad ambiental.

7.Interfaz web intuitiva de Proxmox: Proxmox ofrece una interfaz web
accesible desde cualquier navegador (en caso de FUsionSigma
https://10.13.0.3:8006), que permitiera gestionar todas las VM y
contenedores desde un único lugar. Se puede crear, eliminar, iniciar,
detener, y monitorear las VM, así como asignar recursos (CPU, RAM,
almacenamiento) de forma dinámica.

8.Optimización del sistema operativo para cada servicio: Con la
virtualización, puedes elegir el sistema operativo más adecuado para
cada servicio, independientemente del hardware físico o de los otros
servicios. Esto optimiza el rendimiento y la compatibilidad.

#### []{#anchor-8}6.Restricciones al tráfico con ACL, proxy, reglas FW

Las restricciones se aplicarán principalmente en el router/firewall (R1
Fusion), ya que es el dispositivo central que gestiona el tráfico entre
VLANs y hacia/desde Internet. Se van a configurar las listas de control
de acceso que permitan solo al administrador gestionar routers o
switches mediante VPN. El administrador que va administrar la red de
FusionSigma remotamente a través de VPN, se le va asignar un IP fija
(\*172.168.13.10) y así se va filtrar a través del una ACL que solo el
accede.

Además, implementaremos un servidor proxy para controlar el tráfico web
de los trabajadores, bloqueando el acceso a sitios web no autorizados
por la empresa, como ([www.facebook.com](http://www.facebook.com/) ,
[www.x.com](http://www.x.com/) ,
[www.youtube.com](http://www.youtube.com/) ,
[www.instagram.com](http://www.instagram.com/) entre otros. Esto
permitirá restringir el uso de recursos de red a actividades laborales,
mejorando la productividad y reduciendo riesgos de seguridad asociados
al acceso a sitios no relacionados con las operaciones de FUsionSigma.

Los puntos principales de restricciones que se van a asignar son:

1.Proteger los servidores (V1 10.13.0.0/24) de accesos no autorizados.

2.Controlar el acceso a Internet (V4 10.13.4.0/24) para evitar uso
indebido.

3.Permitir solo al administrador gestionar routers o switches.

4.Configurar el proxy(10.13.0.30) para bloquear sitios web específicos.

###### []{#anchor-9}!!!

*Listas de acceso principales:*

Estas ACL\`s se van aplicar en el R1 Fusion protegiendo la red de los
servidores y dejando permisos únicamente en la red de los switches,
AP\`s y Administrador (10.13.3.0/24) acceder en esta red a través de
SSH, telnet y RDP.

ACL 101

Access-list 101 deny tcp any any eq 22 (bloquear acceso SSH)

access-list 101 deny tcp any any eq 23 (bloquear acceso Telnet)

access-list 101 deny tcp any any eq 3389 (bloquear acceso RDP)

access-list 102 permit ip any any

\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\--

interface f0/0.1 (de trabajadores)

ip access-group 101 in

ACL 102

Access-list 102 deny any any eq 22

access-list 102 deny tcp any any eq 23

access-list 102 deny tcp any any eq 3389

access-list 102 permit ip any any

\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\--

interface f0/0.5 (de visitantes)

ip access-group 101 in

De esta manera denegamos acceso de las redes de trabajadores y
visitantes y el único acceso posible para administrar se queda la vlan 3
(10.13.3.0/24).

Antes de aplicar la lista de acceso, comprobamos que el portátil
10.13.1.4/24 de Vlan2 (trabajadores) puede acceder a través de ssh al
servidor en Vlan1 (servidores):

Para hacer la prueba he instalado se ha instalado OpenSSH en el servidor
BBDD/SFTP con IP 10.13.0.10/24, dándole los permisos necesarios en dicha
VM que se ejecuta siempre.\

![](Pictures/1000000100000400000002FBF0DBDC57.png){width="10.809cm"
height="8.054cm"}

![](Pictures/1000000100000368000002A50B13E7BF.png){width="7.502cm"
height="5.824cm"}![](Pictures/10000001000003E9000002F6E095F628.png){width="7.371cm"
height="5.581cm"}

\*Importante aplicar las reglas en el Firewall en los servidores para
que las ACL\`s funcionen correctamente.

En este caso para la simulación aplicamos una nueva regla
específicamente para ver el funcionamiento y acceso que estamos
permitiendo a través de ssh puerto 22.

![](Pictures/10000001000003EE000002F4E671F52E.png){width="8.467cm"
height="6.362cm"}![](Pictures/10000001000002E60000026444C87E70.png){width="7.47cm"
height="6.161cm"}

Y ya tenemos nuestra nueva regla de entrada en el Firewall creada:

![](Pictures/10000001000003EB000000CBAC11A40B.png){width="17cm"
height="3.44cm"}

Y comprobamos al final la conectividad desde el portátil 10.13.1.4/24:

![](Pictures/1000000100000401000002FC832ED637.png){width="8.416cm"
height="6.272cm"}

![](Pictures/10000001000003F4000002FA35045459.png){width="8.301cm"
height="6.251cm"}

Y podemos observar que tenemos acceso a traves del ssh en el servidor
10.13.0.10/24 desde el portátil 10.13.1.4/24:

![](Pictures/1000000100000409000002FE6EC4534D.png){width="10.363cm"
height="7.685cm"}

Ahora aplicamos las ACL previstas en nuestra red (R1 Fusion) y probamos
de nuevo:

![](Pictures/100000010000022B0000011352AC86E3.png){width="8.966cm"
height="4.441cm"}![](Pictures/1000000100000197000000F74A1676C5.png){width="7.177cm"
height="4.355cm"}

Y ahora de nuevo intentamos conectarnos de la misma manera:

![](Pictures/1000000100000403000002F610DD0C18.png){width="8.546cm"
height="6.308cm"}![](Pictures/10000001000002DF000001F10198EB6B.png){width="8.006cm"
height="5.415cm"}

O también podemos probar conectarnos con su nombre de dominio que hemos
asignado previamente en el servidor DNS. En ambos casos la conexión
falla por las ACL´s que hemos aplicado en el R1 Fusion:

![](Pictures/1000000100000408000002FDE42A6E58.png){width="8.486cm"
height="6.29cm"}![](Pictures/10000001000003FC000002F9C876FCDE.png){width="8.319cm"
height="6.205cm"}

Y observamos en la lista de acceso 101 como los "matches" donde negamos
acceso en el puerto 22 han cambiado:

![](Pictures/10000001000002050000019F882BE5BF.png){width="9.398cm"
height="7.544cm"}

Los puertos y servicios están prohibidos, pero seguimos teniendo
conexión y lo podemos comprobar con ping desde el portátil al servidor:

![](Pictures/1000000100000402000002F19B84ABF8.png){width="9.433cm"
height="6.922cm"}

Después para comprobar que el administrador que se conecta en vlan3, le
hemos asignado una IP estática y hacemos la misma prueba, conexión a
través de SSH con el servidor SFTP:

###### []{#anchor-10}![](Pictures/10000001000003F2000002F8149CA60D.png){width="8.728cm" height="6.567cm"} 

###### 

###### 

###### 

###### 

###### 

###### 

###### 

###### 

###### 

###### []{#anchor-11}!!!

Usaremos Putty para la prueba:

\*Cuando he intentado conectar al servidor usando PuTTY por SSH (puerto
22), aparece un aviso de \"Possible Security Breach\" (posible problema
de seguridad). Esto pasa porque PuTTY guarda una \"clave\" del servidor
para reconocerlo, pero la clave que el servidor (en la IP 10.13.0.10)
está mostrando ahora no es la misma que PuTTY tiene guardada.

En palabras simples: PuTTY no está seguro de que el servidor sea el
mismo al que me he conectado antes(porque no era el mismo).

###### ![](Pictures/10000001000003F9000002F9A80048B9.png){width="8.218cm" height="6.149cm"}![](Pictures/10000001000003FE000002FF3B0D3CF8.png){width="7.976cm" height="5.985cm"}

###### 

###### 

Y podemos observar que efectivamente los dispositivos en la vlan 3 tiene
acceso a la red de los servidores (en este caso 10.13.0.10/24).

![](Pictures/1000000100000357000000850BA461FB.png){width="13.926cm"
height="2.166cm"}

###### 

![](Pictures/100000010000040100000304F251F61A.png){width="9.133cm"
height="6.879cm"}

\*La lista de acceso no cambia (no aparecen maches) ,ya que es la vlan
que queda permitiendo el acceso.

###### []{#anchor-12}Configuraciones y Pruebas de ACL\`s

Otra ACL que se va a aplicar en la red separada del túnel, para permitir
el acceso de un administrador a través de SSH en la red de la sede
Almería desde la sede Málaga

![](Pictures/1000000100000422000002E1D4F7544E.png){width="9.934cm"
height="6.92cm"}

! Aplicamos la ACL en la interfaz Tunnel 10

interface Tunnel10

ip access-group 100 in

Esta ACL no afecta el tráfico interno entre subredes dentro de
10.13.0.0/24 (como el tráfico desde 10.13.1.0/24 hacia 10.13.0.3),
porque el tráfico interno no pasa por la interfaz Tunnel 10.

![](Pictures/100000010000064C000003165B95BC6C.png){width="12.827cm"
height="6.287cm"}

\*Simulación para la comprobación del servicio Telnet desde
Administrador (sede Málaga) usando el túnel al servidor 1 (Sede
Almeria):

![](Pictures/10000001000002F60000008D232E7C6C.png){width="11.252cm"
height="2.094cm"}

access-list 101 permit tcp host 192.168.1.10 host 10.13.0.3

interface Tunnel10

ip access-group 101 in

Haciendo un ping desde cliente 1 al router de Fusionsigma se ve
claramente que los paquetes pasan por el túnel 10 encriptados:

![](Pictures/10000001000003E5000001BF3B416A70.png){width="7.096cm"
height="3.182cm"}![](Pictures/10000001000002A00000011DDECEF860.png){width="7.385cm"
height="3.133cm"}

Probando hacer ping desde el servidor al cliente también observamos que
hay conexión y que va encriptada. Ya que tenemos conexión accedemos a
través de SSH con IP del servidor Ubuntu :

![](Pictures/1000000100000404000002FFEC96D1E7.png){width="8.094cm"
height="6.04cm"}![](Pictures/10000001000003EE000002BC264DD196.png){width="8.281cm"
height="5.761cm"}

![](Pictures/10000001000003FE000002FAC6879B23.png){width="7.867cm"
height="5.867cm"}![](Pictures/10000001000003F800000302BEB668B8.png){width="8.319cm"
height="6.304cm"}

Y podemos ver que, efectivamente tenemos conexión segura a través del
Ipsec y el túnel anteriormente creado.

\* EL ACL QUE SE HA APLICADO AQUÍ ERA PARA EL FUNCIONAMIENTO VPN
UNICAMENTE Y ENSEÑAR COMO SU PUEDE APLICAR EN CASO REAL.

Si probamos de otro equipo de la misma red en Málaga conectarse con el
servidor en Almería, este esta denegado y se ve claramente en la ACL
también.

![](Pictures/10000001000002C80000006CEA7C746B.png){width="11.677cm"
height="1.771cm"}

#### 

#### []{#anchor-13}7.Acceso remoto

El mantenimiento remoto consiste en acceder a los dispositivos de red
(R1, R2, R3, Sw1, Sw2, APs, servidores) desde una ubicación externa a
través de Internet, utilizando protocolos como SSH y RDP para el acceso
remoto. Dado que R1 es el router principal y el firewall, será el punto
de entrada principal para estas conexiones.

Sin embargo, si usamos SSH o RDP, no podemos acceder directamente desde
Internet, sino únicamente desde la red privada, ya que estos protocolos
utilizan la IP directa del equipo al que deseas conectarte. Desde los
dos sedes, podemos conectar por SSH y RDP a cualquier dispositivo dentro
de la red privada de Fusionsigma, ya que están conectados mediante un
túnel.

\*Ventaja del Cisco ASA:

El Cisco ASA5506-SEC-BUN-K9 **(R1 Fusion)** ofrece capacidades avanzadas
para VPN (como IPsec y actuando como SSL VPN server). Soporta dos tipos
principales de VPN que pueden configurarse para acceso remoto:

IPsec VPN: Proporciona un túnel seguro basado en el protocolo Ipsec.

SSL VPN: Utiliza SSL/TLS para crear un túnel seguro, comúnmente
implementado con Cisco AnyConnect. Este método es más flexible y fácil
de usar para los clientes, ya que permite conexiones desde navegadores o
aplicaciones específicas como OpenVPN.

\*Esta no esta simulada en el proyecto!

En FusionSigma, se va a usar para el acceso remoto SSH (para la gestión
segura de dispositivos de red) y RDP (para acceso a servidores o
máquinas con interfaz gráfica). Estas opciones son muy seguras y fáciles
de configurar, abriendo puertos directamente para SSH (puerto 22) o RDP
(puerto 3389). Esto permite gestionar la red de manera remota con un
alto nivel de seguridad.

\*Para las simulaciones de acceso remoto se usa SSH.

¿Por qué usare VPN en R1 para el mantenimiento remoto?

1.Seguridad:

Una VPN cifra el tráfico, protegiendo datos sensibles (como
credenciales) de ataques o interceptaciones y evita accesos no
autorizados, ya que solo usuarios autenticados pueden conectarse.

2.Acceso seguro a toda la red:

Permite al administrador, un MSP(Proveedor de Servicios Gestionados)
acceder a R1, switches (Sw1, Sw2), puntos de acceso (AP1, AP2), y
servidores (Server 1, Server 2) desde fuera, como si estuviera en la red
local.

\*No se necesita exponer cada dispositivo a Internet, reduciendo
riesgos.

3.Control:

La VPN autentica a los usuarios (con contraseñas o certificados),
asegurando que solo el personal autorizado acceda a la red.

Como?

En la simulación, voy a crear un túnel GRE con IPsec para encriptar los
datos entre Sede Almería y Sede Málaga:

Para hacer esto, tendré varias cosas en cuenta:

-IP pública de R2: R2 está conectado a Internet a través de V4
(10.13.4.1). Asumamos que la IP pública de R2 es 100.12.12.1.

-Cliente VPN: El administrador remoto (MSP) usará un cliente VPN como
IPsec genérico.

\* La simulación del acceso remoto se ha hecho en GNS3 con un router que
suporta el protocolo Ipsec y se va hacer desde R2(FusionSigma) con un
esquema separado del principal, ya que la configuración del router en
realidad es mucho mas fácil y tiene todo necesario integrado.

###### []{#anchor-14}a)Routers

En R2 (Vodafone / 10.13.4.2/24) y R3 (Movistar / 10.13.4.3/24) se va
configurar "line vty 0 4" simple en modo usuario:

![](Pictures/10000001000000EF000000B19EEA9C0B.png){width="3.801cm"
height="2.815cm"}![](Pictures/10000001000000DE000000AC08723BE8.png){width="3.452cm"
height="2.674cm"}

Y nos conectamos desde R1(Fusion) a través de telnet para comprobar el
acceso en R2 y R3:

![](Pictures/100000010000011D000000B668A452ED.png){width="3.988cm"
height="2.547cm"}![](Pictures/100000010000010B000000A2AFE79B06.png){width="4.122cm"
height="2.501cm"}

Y en Router principal de la red: R1(Fusion/Firewall) encriptamos la
contraseña para acceso en nivel 5, que es el nivel mas alto que existe.

![](Pictures/1000000100000223000000DE86540511.png){width="8.585cm"
height="3.484cm"}

Para extra seguridad en el R1 creamos usuario con contraseña y la
encriptamos también:

Firewall(config)#username fatme password fatme

Firewall(config)#service password-encryption

![](Pictures/10000001000001960000004D83F20D1C.png){width="7.939cm"
height="1.506cm"}

!!! La contraseña del usuario es de nivel 7, lo que hace posible que se
desencripta fácilmente de la siguiente manera:

Firewall(config)#key chain clave

Firewall(config-keychain)#key 1

Firewall(config-keychain-key)#key-string 7 045D0A120224

Y si queremos saber la contraseña con el comando **show key chain
clave:**

![](Pictures/1000000100000285000000849C8FEC44.png){width="10.809cm"
height="2.212cm"}

\* Esta desencriptación se menciona por tema de seguridad.

***IMPORTANTE*** que todas las contraseñas están de nivel 5 para
seguridad maxima.

Configuramos permisos para acceso remoto a traves de telnet en
R1(10.13.0.1/24):

Firewall#conf t

Firewall(config)#line vty 0 15

Firewall(config-line)#login local

Y si probamos hacer telnet desde R3(Movistar),vemos que se nos piden
permisos primero de usuario con su contraseña y después para modo
privilegiado:

![](Pictures/10000001000001820000011E5D794EAC.png){width="7.477cm"
height="5.54cm"}

###### []{#anchor-15}Simulación Ipsec sobre GRE Tunnel en GNS3:

En resumen, el primer paso que se va hacer es establecer el túnel GRE
creando una interfaz virtual (Tunnel10) en cada router. En cada
interfaz, definimos una dirección IP privada para la comunicación dentro
del túnel (172.16.13.1 en FusionSigma y, después también, 172.16.13.2 en
Administrator). Luego, especificamos el origen del túnel (tunnel source
FastEthernet0/1, la interfaz pública) y el destino del túnel (tunnel
destination, la dirección IP pública del otro extremo). Esto encapsula
el tráfico dentro de paquetes IP para viajar a través de la red pública.

![](Pictures/1000000100000464000002EBC8B86F09.png){width="13.395cm"
height="8.902cm"}

Configuramos los IP\`s de dos extremos ( el servidor y pc-Fatme)
manualmente.

Una vez configuran el túnel GRE, comprobamos tanto desde el Router de
FusionSigma y el de Administrator los vecinos del protocolo OSPF que
hemos restablecido:

![](Pictures/10000001000002C600000077784A6B01.png){width="9.825cm"
height="1.647cm"}

![](Pictures/10000001000002E100000072EFB9FA2F.png){width="9.911cm"
height="1.533cm"}

La captura de Wireshark muestra claramente el proceso de encapsulación y
desencapsulación que permite que el tráfico de la red privada de
PC-Fatme viaje a través de la red pública y llegue a la red privada del
Servidor, todo ello \"oculto\" dentro de los paquetes GRE.

![](Pictures/1000000100000276000000504911F9D7.png){width="10.414cm"
height="1.323cm"}

Para la simulación configuramos un conjunto de transformación IPSec
llamado \"AES_SHA\". Este conjunto de transformación especifica que se
utilizará el protocolo ESP (Encapsulating Security Payload) para
proporcionar seguridad. ESP se encargará de:\
\
-Confidencialidad de los datos: Cifrando el contenido de los paquetes.\
-Autenticación: Verificando que los paquetes no han sido alterados.\
-Protección contra la reproducción: Evitando que un atacante capture y
reenvíe paquetes antiguos.\
\
Además, se configura el modo de operación de IPSec como \"túnel\", lo
que significa que todo el paquete IP original será cifrado y se le
añadirá una nueva cabecera IPsec.

![](Pictures/100000010000029600000064B9CC8498.png){width="10.924cm"
height="1.651cm"}

Justo después configuramos el IPSec profile (fatme):

![](Pictures/1000000100000279000000835C522E91.png){width="10.125cm"
height="2.096cm"}

Y lo aplicamos en el túnel:

![](Pictures/1000000100000455000000D1BC157CF5.png){width="17cm"
height="3.203cm"}

Hacemos la misma configuración el el router de Administrador, con la
única diferencia es la IP (la pública de FusionSigma) en el PSK
configuración:

![](Pictures/10000001000002890000003723B8B175.png){width="9.548cm"
height="0.81cm"}

Y después configuramos Ipsec también:

![](Pictures/1000000100000232000000611A8C0350.png){width="9.356cm"
height="1.616cm"}

Configuración de Ipsec Profile en Administrador:

![](Pictures/1000000100000276000000806A9789C4.png){width="9.714cm"
height="1.974cm"}

Y aplicándolo en el túnel:

![](Pictures/10000001000004430000012EAFE5FF96.png){width="11.989cm"
height="3.318cm"}

Realizamos un ping continuo desde PC-Fatme al FusionSigma Server y
podemos observar que todos los paquetes que se están generando son ESP,
viendo únicamente las IPs públicas de los dos routers.

![](Pictures/100000010000048F000002EB8FC7BA34.png){width="9.444cm"
height="6.043cm"}

![](Pictures/1000000100000256000001CB0E0E9FE8.png){width="7.228cm"
height="5.549cm"}

Si abrimos uno de estos paquetes, por ejemplo, el 238, vemos que las
direcciones IP 181.23.13.1 y 100.12.12.1 en la cabecera IP externa del
paquete ESP son las direcciones IP públicas de los dispositivos en los
extremos del túnel IPsec (en este caso, los routers Administrator y
FusionSigma). Estas direcciones enrutan el tráfico ESP a través de
Internet. El router emisor (Administrator) cifra el paquete IP original
con ESP y lo encapsula en un nuevo paquete IP con estas IPs públicas. El
router receptor (FusionSigma) lo desencapsula, descifra y entrega el
paquete original al destino final

![](Pictures/10000001000003A9000003969C8153DD.png){width="6.69cm"
height="6.556cm"}

![](Pictures/10000001000002BC0000007E59BB83FF.png){width="7.826cm"
height="1.51cm"}

![](Pictures/10000001000002AC000000630A0DCFDD.png){width="7.733cm"
height="1.49cm"}

Con este comando, podemos ver todos los paquetes que se han encapsulado
y desencapsulado, así como el protocolo del túnel.

![](Pictures/10000001000002E400000202B88194FB.png){width="7.539cm"
height="5.237cm"}![](Pictures/10000001000002C1000001D3AFAE4691.png){width="8.133cm"
height="5.389cm"}

\*Consulta el
[LINK](https://drive.google.com/file/d/1BPAd0qhF81hJV8uUOBr468s6gVOPSq_p/view?usp=sharing)
para configuraciones.

###### []{#anchor-16}!!!

###### []{#anchor-17}Contrato de Mantenimiento:

###### 

\* Datos de contacto a través de los cuales la empresa podría ponerse en
contacto conmigo si encuentran algún problema relacionado con las
funciones de su red:

• Tel.: 617025813

• Web: https://fatme.es

• Correo Electrónico: <ulanova92fatme@gmail.com>

• Servicios de Mantenimiento:

Como técnicos encargados del mantenimiento de Fusionsigma, nos
encargaremos de realizar un seguimiento en línea y tareas de
mantenimiento preventivo de manera periódica. Si surge una emergencia o
avería que requiera nuestra presencia en la empresa, nos desplazaremos
al lugar en un plazo de 5 a 8 horas tras recibir el aviso para
solucionar el problema.

Fusionsigma me ha contratado como técnico de grado superior para
realizar tareas de mantenimiento. En caso de que surjan problemas
complejos con switches, routers o equipos, intervendré directamente, ya
sea desplazándome a la empresa o resolviendo la incidencia de manera
remota a través de VPN o SSH.

Pagos:

Fusionsigma abonará una cuota mensual de 200 € por los servicios de
mantenimiento continuo en línea que proporcionaremos como técnicos. Esto
cubre hasta 10 horas de trabajo remoto por mes. Si no se utilizan todas
las horas en un mes, estas no se acumulan para el mes siguiente, pero la
cuota asegura nuestra disponibilidad inmediata y prioritaria para
atender cualquier incidencia o tarea requerida. Esto incluye soporte
técnico, configuración de dispositivos, y resolución de problemas en la
red (como los dispositivos R1, R2, R3, Sw1, Sw2, APs, y servidores).
Nuestro objetivo es garantizar la estabilidad de su infraestructura,
incluso si no se requiere el uso total de las horas.

Tipos de Problemas para los que me Pueden Llamar:\
El mantenimiento continuo en línea y preventivo incluye tareas que no
requieren presencia física, como:

Seguimiento en Línea:

-Monitoreo de servidores (V1): Verificar el estado de DHCP (10.13.0.2),
DNS/AD (10.13.0.100), HTTP/HTTPS/BBDD/SFTP (10.13.0.10), Radius
(10.13.0.20), y Proxy (10.13.0.30).

-Comprobación de logs del firewall (Cisco ASA) y del Proxy para detectar
accesos no autorizados o problemas de rendimiento.

Mantenimiento Preventivo:

-Actualización de software en servidores (parches de seguridad para
DNS/AD, BBDD, Proxy).

-Revisión de reglas del firewall (Cisco ASA) para asegurar que la ACL
100 sigue protegiendo V1 y forzando el uso del Proxy.

-Comprobación de configuraciones de los APs (10.13.3.10, 10.13.3.20)
para SSIDs de empleados (V2) y visitantes (V6).

-Respaldo remoto de configuraciones del firewall, switches, y Aps.

Resolución Remota de Problemas:

-Problemas con servicios en V1 (ej. DNS/AD no responde, Proxy bloquea
sitios incorrectamente).

-Configuración o ajustes en el Cisco ASA (ACLs, NAT, VPN).

-Problemas con switches (Sw1, Sw2) o APs (AP1, AP2) que puedan
resolverse vía SSH o interfaz web (ej. reinicio, ajustes de SSID).

-Soporte a usuarios en V2 (empleados) o V6 (visitantes) para configurar
el Proxy (10.13.0.30:3128)

-Acceso remoto a los PCs de los trabajadores, siempre que sea necesario
para resolver problemas relacionados con el mantenimiento de la red o
los sistemas conectados a ella.

Emergencias:

Si se presenta una emergencia que necesite mi asistencia presencial, la
empresa deberá cubrir una tarifa adicional de emergencia de 100 € para
que me desplace al lugar y solucione la incidencia.

#### []{#anchor-18}8.Presupuesto de equipos de red.

+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| PcCom Essential Bobina Cable de Red RJ45 Cat6 UTP CCA AWG24 hasta Mbps 100m                                                                                                                                                                                                                                 | **Link de compra:** [PcCom Essential Bobina Cable de Red RJ45 Cat6 UTP CCA AWG24 hasta Mbps 100m \| PcComponentes.com](https://www.pccomponentes.com/pccom-essential-bobina-cable-de-red-rj45-cat6-utp-cca-awg24-hasta-mbps-100m)                                                                                                                                  | ![](Pictures/100000010000027700000243ADC23AF3.png){width="3.713cm"                  |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    | height="3.406cm"}                                                                   |
| (5 unidades)                                                                                                                                                                                                                                                                                                | **Precio:**5x35.99=179,95                                                                                                                                                                                                                                                                                                                                          |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| Router/Firewall (1 unidad )                                                                                                                                                                                                                                                                                 | **Link de compra:** [Cisco ASA5506-SEC-BUN-K9 \| segunda mano \| refurbished \| datasheet](https://it-planet.com/es/p/cisco-asa5506-sec-bun-k9-12277.html?number=3698873000)                                                                                                                                                                                       |                                                                                     |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| **Marca**:Cisco ASA5506-SEC-BUN-K9                                                                                                                                                                                                                                                                          | **Precio:675,00**                                                                                                                                                                                                                                                                                                                                                  |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| []{#anchor-19}**Aisens Conector RJ45 8 Hilos Cat.6 AWG24 100 Unidades**                                                                                                                                                                                                                                     | **Link de compra:** [Aisens Conector RJ45 8 Hilos Cat.6 AWG24 100 Unidades \| PcComponentes.com](https://www.pccomponentes.com/aisens-conector-rj45-8-hilos-cat6-awg24-100-unidades)                                                                                                                                                                               | ![](Pictures/100000010000025C0000027C4C11FAF5.png){width="2.725cm"                  |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    | height="2.868cm"}                                                                   |
|                                                                                                                                                                                                                                                                                                             | **Precio:** 2x10.99=21,98                                                                                                                                                                                                                                                                                                                                          |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| []{#anchor-20}Switch (2 unidades)                                                                                                                                                                                                                                                                           | **Link de compra:** [TP-Link TL-SG1024DE Switch 24 Puertos Gigabit \| PcComponentes.com](https://www.pccomponentes.com/tp-link-tl-sg1024de-switch-24-puertos-gigabit)                                                                                                                                                                                              | ![](Pictures/10000001000002D20000010B5EA5679D.png){width="4.399cm"                  |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    | height="1.626cm"}                                                                   |
| Marca: TP-Link TL-SG1024DE Switch 24 Puertos Gigabit                                                                                                                                                                                                                                                        | **Precio:** 2x100.99=201,98                                                                                                                                                                                                                                                                                                                                        |                                                                                     |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| Suporta 802.1q                                                                                                                                                                                                                                                                                              |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| No gestionable (plug-and-play).                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| TP-Link EAP610 Punto de Acceso Inalámbrico WiFi 6 AX1800                                                                                                                                                                                                                                                    | **Link de compra:** [TP-Link EAP610 Punto de Acceso Inalámbrico WiFi 6 AX1800 \| PcComponentes.com](https://www.pccomponentes.com/tp-link-eap610-punto-de-acceso-inalambrico-wifi-6-ax1800)                                                                                                                                                                        | ![](Pictures/100000010000027B0000025C972DE96C.png){width="3.849cm" height="3.66cm"} |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| ( 2 unidades)                                                                                                                                                                                                                                                                                               | **Precio:** 2x91.10=182.                                                                                                                                                                                                                                                                                                                                           |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| []{#anchor-21}Switch PoE (1 unidad)                                                                                                                                                                                                                                                                         | Link de compra: [Switch PoE](https://www.pccomponentes.com/tp-link-tl-sf1008p-switch-poe-8-puertos)                                                                                                                                                                                                                                                                | ![](Pictures/10000001000002D7000001417B1D2FEE.png){width="4.399cm"                  |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    | height="1.942cm"}                                                                   |
| Marca: TP-Link TL-SF1008P Switch PoE 8 Puertos                                                                                                                                                                                                                                                              | Precio: 45                                                                                                                                                                                                                                                                                                                                                         |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| Panel de parcheo:                                                                                                                                                                                                                                                                                           | Link de compra: [*Panel de parcheo 24 puertos*](https://www.pccomponentes.com/equip-326424-panel-de-parcheo-24-puertos-cat-6)                                                                                                                                                                                                                                      | ![](Pictures/1000000100000282000001532F6126A0.png){width="4.399cm"                  |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    | height="2.321cm"}                                                                   |
| ( 1 unidad )                                                                                                                                                                                                                                                                                                | *Precio: 88.34€*                                                                                                                                                                                                                                                                                                                                                   |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| ![](Pictures/100000010000029D0000014A536EAF89.png){width="4.036cm" height="1.99cm"}TP-Link TL- SG1016D Switch 16 Puertos Gigabit 10/100/1000                                                                                                                                                                | Link de compra:[Switch                                                                                                                                                                                                                                                                                                                                             |                                                                                     |
|                                                                                                                                                                                                                                                                                                             | Malaga](https://www.pccomponentes.com/tp-link-tl-sg1016d-switch-16-puertos-gigabit-10-100-1000?s_kwcid=AL!14405!3!!e!!o!2331583126710440!&msclkid=05c0e0b70c2b1da6bb128881b042f133&utm_source=bing&utm_medium=cpc&utm_campaign=000%20-%20Shopping%20compras%20inteligentes%20resto%20productos%20-%20bing&utm_term=2331583126710440&utm_content=resto%20productos) |                                                                                     |
| (1 unidad para Malaga)                                                                                                                                                                                                                                                                                      |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
|                                                                                                                                                                                                                                                                                                             | Precio:60.92€                                                                                                                                                                                                                                                                                                                                                      |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+
| Fibra óptica Movistar (1Gbps) y Vodafone (1Gbps)                                                                                                                                                                                                                                                            |                                                                                                                                                                                                                                                                                                                                                                    | ![](Pictures/10000001000000D80000004C4C7768D1.png){width="3.584cm"                  |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    | height="1.261cm"}![](Pictures/10000001000000E80000004DF79345DD.png){width="3.803cm" |
| **Link:** [**Movistar**](https://www.movistar.es/fibra-optica/fibra-1gb/)                                                                                                                                                                                                                                   |                                                                                                                                                                                                                                                                                                                                                                    | height="1.263cm"}                                                                   |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| **Link:**                                                                                                                                                                                                                                                                                                   |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| [***Vodafone***](https://oferta.vodafone.es/vodafone-fibra/?cid=377192889:dt-20200101:cp-vdf_tol_continuidad:cn-sem:kw-77859436910644:cc-:cl-no_cliente:sp-Bing:cr-:gk-marca:st-prospecting:ta-base:md-adsl:ds-responsive:pr-2p:wn-tol:pl-/VDF-TOL-Fiber-Def-BASE&msclkid=150c0ada6fb1102687e16d05ba6bf790) |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| **Precio Movistar:** 29.90€ /mes                                                                                                                                                                                                                                                                            |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
|                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
| Precio Vodafone: 45€ /mes                                                                                                                                                                                                                                                                                   |                                                                                                                                                                                                                                                                                                                                                                    |                                                                                     |
+-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-------------------------------------------------------------------------------------+

**TOTAL: 1 394,25€**

**Para comprobar el resto del Hardware pulsa en el** [**Ambito de
Sistemas
Informaticos**](https://drive.google.com/file/d/1W8YYqHJ3scINps-sRE3RS4Ng04g2Hugm/view?usp=sharing).

#### []{#anchor-22}**9.Esquema lógico de la simulación.**

**

![](Pictures/100000010000059D000003096AC31E15.png){width="17cm"
height="9.192cm"}**

###### []{#anchor-23}!!!

**

#### []{#anchor-24}**10.Esquema físico de la simulación.**

[]{#anchor-25}
![](Pictures/100000010000040E0000030DB38C8549.png){width="11.601cm"
height="8.728cm"}

\*Pasamos V1 entre SW1 y SW2 para garantizar que los dispositivos y
servicios en VLAN 1 (como DHCP, DNS/AD, y gestión) puedan comunicarse a
través de ambos switches, soportando la conectividad y funcionalidad de
toda la red. El enlace trunk entre los switches permite este intercambio
de VLANs de manera eficiente y segura.

#### []{#anchor-26}**11.Configuración de switches.**

![](Pictures/1000000100000307000001CF456A7022.png){width="9.013cm"
height="5.385cm"}![](Pictures/1000000100000303000001D6ECF88052.png){width="8.828cm"
height="5.382cm"}**

**

**

**

**

**

![](Pictures/1000000100000300000001D6FA4B75DF.png){width="9.372cm"
height="5.734cm"}![](Pictures/100000010000033A000002186DB70000.png){width="8.456cm"
height="5.487cm"} ******

*******\*****V****lan5 esta asignada en Sw.2 unicamente para la
simulación del Servidor Web.***

![](Pictures/10000001000003410000021DDFB7B35B.png){width="9.225cm"
height="6.854cm"}![](Pictures/10000001000002AF000001ECB1BB4769.png){width="8.849cm"
height="6.338cm"} ******

**

**

**

**

**

**

**

**

###### []{#anchor-27}!!!

***E****n Packet** **T****racer Podemos observar configuraciones mas
concretas en los switches:***

**

![](Pictures/100000010000054D0000032EEBE54293.png){width="10.178cm"
height="6.105cm"}**

**

**

**

**

**

**

\*La MAC que aparece en la captura no esta asignado manualmente.

Las líneas rojas representan los enlaces troncales, los cuales debemos
considerar al realizar las configuraciones. Cada interfaz se configura
en modo access o trunk según corresponda. Esta configuración se aplica a
todos los dispositivos conectados. En el caso de FusionSigma, mi
objetivo es proteger con port-security los ordenadores y los dos
servidores físicos.

Configurar port-security con la opción sticky y un máximo de 1 dirección
MAC nos permite que la interfaz aprenda automáticamente la primera MAC
que se conecta y la almacene de forma persistente en la configuración
del dispositivo. Esto asegura que solo el dispositivo con esa MAC pueda
conectarse a la interfaz en el futuro, sin necesidad de introducir la
MAC manualmente. La ventaja de usar sticky es que simplifica la
configuración inicial, ya que no requiere conocer ni registrar las MAC
de antemano, pero sigue proporcionando un nivel de seguridad alto al
restringir el acceso a un único dispositivo autorizado.

Con port-security en FusionSigma, se protegen específicamente los
ordenadores y los dos servidores físicos. Esta medida garantiza que solo
los dispositivos autorizados (aquellos cuya MAC ha sido aprendida
automáticamente por la interfaz) puedan acceder a la red, previniendo
conexiones no autorizadas que podrían comprometer la seguridad de la red
o los datos sensibles gestionados por estos dispositivos.

#### []{#anchor-28}**12.Configuración y comprobación del Servidor DHCP.**

**

• Aquí proporcionare una guía básica para instalar y configurar un
servidor DHCP:

ServidorDHCP(alpine-extended-3.20.3-x86_64)-Asigna direcciones IP,
máscara de red, puerta de enlace y DNS a los clientes.

Instalamos el servidor de bajo consumo Alpine, y hacemos unas
configuraciones y update del sistema.

1.setup-interfaces

2.apk utdate

3.apk upgrade

Desde /etc/network con nano interfaces configuramos la interfaz del
servidor DHCP:

![](Pictures/10000001000002D600000122248EF126.png){width="10.07cm"
height="4.023cm"}

En esta configuración asignamos IP 10.13.0.2/24, el puerto de enlace
10.13.0.1 y el DNS Server que va usar el servicio.

Despues editamos el fichero dhcp.conf asignando los vlans:

servidor-dhcp:\~# nano /etc/dhcp/dhcpd.conf

![](Pictures/100000010000034A00000264FE5A5D77.png){width="14.178cm"
height="10.306cm"}

Pool 1 (10.13.0.0) es para los servidores, tanto como físicos con VM\`s

Pool 2 (10.13.1.0) es para todos los trabajadores (portátiles y pc\`s).

Pool 3 (10.13.3.0) es para switches, AP y asignación de administrador.

Pool 6 (10.13.2.0) es reservado para visitantes y clientes que se pueden
conectar en la red de FusionSigma.

Pool para HTTP/HTTPS (10.13.5.0) es únicamente para la simulación,
separando este servidor del restos.

Añadimos la MAC del clientes de la empresa (servidores y equipos de
trabajo,en este caso serán el CTO y un PC de Administrador BD) junto con
la dirección IP fija que queremos asignarles. La configuración será la
siguiente:

![](Pictures/100000010000018D000000D7E067CF9B.png){width="9.199cm"
height="4.981cm"}

\*Mientras se realiza el trabajo, se van asignar IP\`s fijas a los
servidores y clientes necesarios.

Reiniciamos el servidor y verificamos que sigue funcionando sin errores:

*servidor-dhcp:/etc/dhcp# **/etc/init.d/dhcpd** **re****start***

**

***** **• Aquí** **compr****o****bamos el correcto funcionamiento del
servicio DHCP****:***

**

Para comprobar que el DHCP de la empresa funciona correctamente y otorga
los parámetros necesarios a los equipos de la empresa:

Entramos al terminal y ejecutamos **ipconfig /all** en Windows 10
(usando para simulación).

Probamos en equipo de CEO ( conectado en vlan 2 / 10.13.1.0):

**

**

Desde el cliente(CEO):

**

![](Pictures/1000000100000403000002FE22D8D3ED.png){width="11.749cm"
height="8.763cm"}**

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

**

**

**

**

**

**

**

Como muestra la captura del servidor DHCP de FusionSigma (10.13.0.2)
está funcionando correctamente, ya que ha asignado una IP y otros
parámetros a los equipos. El DHCP relay (IP Helper) también funciona
bien, porque permitió que el equipo de DNS (que esta en la misma subred)
y CEO (que esta en una subred/VLAN diferente), recibiera los parámetros
del servidor DHCP.

###### []{#anchor-29}!!!

#### []{#anchor-30}**13.Configuración y comprobación del Servidor DNS/AD.**

FusionSigma va usar DNS Forwarder y DNS Primario.

**DNS Forwarder**

En la simulación, se usará la IP del ISP de casa (192.168.1.1) como DNS
Forwarder.

En la red real de FusionSigma, el DNS Forwarder se configurará en los
routers R2 (Vodafone) y R3 (Movistar) en la Sede Almería, que gestionan
la salida a Internet.

En los dispositivos de la red (como CEO+1, PC+19, y los portátiles en
Málaga), el servidor DNS configurado será el del Server 1 (DNS/AD,
10.13.0.1), que a su vez reenviará las consultas externas al DNS
Forwarder configurado en R2/R3.

**DNS Primario** (para fusionsigma.com):

Para controlar su dominio fusionsigma.com y que sus servicios (como el
SFTP o paneles para clientes) sean fáciles de encontrar con nombres en
lugar de Ips.

\*El controlador de dominio de FusionSigma es fusionsigma.com (en
realidad se va asignar diferente "fusionsigma.local")

Abrimos Windows PowerShell e introducimos:

PS C:\\Users\\Administrador\> Install-WindowsFeature -Name DNS
-IncludeManagementTools

Y como resultado devuelve:

![](Pictures/100000010000024F000000342D54F7BF.png){width="15.639cm"
height="1.376cm"}

Se ha instalado con éxito el servidor DNS en Windows Server 2016 (en
realidad se va usar Windows Server 2022).

Ejecutamos con Windows+R para configurar el DNS como Forwarder:

![](Pictures/10000001000001A5000000F03ED7AAF8.png){width="7.745cm"
height="4.415cm"}![](Pictures/1000000100000179000000DE294E834B.png){width="7.751cm"
height="4.563cm"}

Hacemos clic en "Reenviadores", "Editar..." e introducimos la dirección
IP del servidor DNS Forwarder.

Para la simulación estaré usando el de mi casa:

![](Pictures/100000010000027E000001E2BE44D023.png){width="9.211cm"
height="6.959cm"}

Activamos el registro de depuración DNS ofrece solamente para ver si
funciona correctamente durante el periodo de pruebas:\
\
Ver tráfico DNS: El registro muestra la actividad del servidor.\
Solucionar errores: Ayuda a identificar problemas en la búsqueda de
nombres.\
Control de registro: Permite elegir ubicación y nombre del archivo.

![](Pictures/100000010000024B00000204532E0AF3.png){width="7.923cm"
height="6.966cm"}

Para que funcione como DNS Primario ,cambiamos la configuración:

![](Pictures/10000001000001ED000001886F56B777.png){width="7.107cm"
height="5.652cm"}
![](Pictures/10000001000001ED0000017FD3984326.png){width="7.049cm"
height="5.475cm"}

![](Pictures/10000001000001E8000001895D447C12.png){width="7.304cm"
height="5.883cm"}![](Pictures/10000001000001E90000018920283533.png){width="7.437cm"
height="5.976cm"}

![](Pictures/10000001000002ED00000126036553D2.png){width="9.964cm"
height="3.911cm"}![](Pictures/1000000100000125000000ED7FADB6E1.png){width="4.819cm"
height="3.898cm"}

Añadimos un registro A

Para añadir un registro A seleccionamos la zona de búsqueda directa
"fusionsigma.local" y hacemos clic en "Host nuevo (A o AAAA)...".

![](Pictures/1000000100000403000002FB690D1E49.png){width="8.553cm"
height="6.354cm"}![](Pictures/100000010000022C000001B772EE5CD5.png){width="8.162cm"
height="6.443cm"}

Una vez configurado el Servidor DNS comprobamos el correcto
funcionamiento con dominios externos y internos:

![](Pictures/10000001000001F7000000C52F740778.png){width="8.038cm"
height="3.149cm"}
![](Pictures/1000000100000212000000D819BAB280.png){width="8.165cm"
height="3.327cm"}

Si abrimos los logs podemos observar el correcto funcionamiento del DNS
tanto como Primario, como Forewarder:

![](Pictures/10000001000003FE000003032E7C368E.png){width="6.167cm"
height="4.651cm"}

![](Pictures/10000001000002FA000000B4E9098217.png){width="9.698cm"
height="2.291cm"}

#### []{#anchor-31}**14.Configuración y comprobación del Servidor Proxy no transparente.**

Instalación de servidor proxy con el comando:

sudo apt install squid

Y comprobamos su funcionamiento y el puerto en el que escucha con
**netstat -app \| grep squid**:

![](Pictures/10000001000002DC000000F5FE1C08D4.png){width="9.285cm"
height="3.108cm"}

Entramos al archivo de configuración desde terminal de servidor y
ejecutamos este comando **/etc/squid/squid.conf .**

• Añadimos la siguiente configuración :

![](Pictures/1000000100000333000002003ED42C06.png){width="9.432cm"
height="5.897cm"}

\*Dentro del archivo **/etc/squid/prohibido** añadimos todos los
dominios de los sitios web que la empresa quiere bloquear:

![](Pictures/1000000100000326000000E7C24770F3.png){width="12.407cm"
height="3.556cm"}

Y recargamos con **service squid reload.**

![](Pictures/10000001000001F40000005E4B4B552A.png){width="9.368cm"
height="1.762cm"}

En todos los puestos de trabajo configuramos el uso del servidor proxy
en la siguiente manera:

![](Pictures/10000001000003F700000303307E48D2.png){width="7.779cm"
height="5.909cm"}

Y comprobamos el Proxy desde el mismo PC que estamos haciendo la prueba:

![](Pictures/10000001000003F5000002FF7E93A8C2.png){width="7.867cm"
height="5.957cm"}

Podemos observar que el error que nos da, viene del servidor Proxy
(fatme-VirtualBox).

Por otro lado, se permite el acceso a páginas y sitios web que no están
especificados en el archivo de \"sitios prohibidos\".

![](Pictures/10000001000003F2000002FC737BF2CF.png){width="8.184cm"
height="6.191cm"}![](Pictures/10000001000003F80000030105D71D79.png){width="8.066cm"
height="6.105cm"}

#### []{#anchor-32}**15.Configuración y comprobación del Servidor Radius.**

Una vez instalada la maquina virtual ( Usare Ubuntu 20.04 para la
simulación) hacemos la actualización de paquetes y descargamos
freeradius con los siguientes comandos:

sudo apt update

sudo apt install freeradius freeradius-mysql

Y con **systemctl status freeradius** comprobamos si se ha descargado
correctamente y si está activo:

![](Pictures/10000001000002DB00000136FAC800B8.png){width="9.387cm"
height="3.981cm"}

Y verificamos los puertos en lo que esta escuchando:

![](Pictures/100000010000023A00000125CF7F3BDA.png){width="8.285cm"
height="4.258cm"}

Con el comando **nano /etc/freeradius/3.0/clients.conf** configuramos el
fichero y añadimos los clientes (puntos de acceso) de la empresa
FusionSigma con sus IP\`s y contraseñas.

\*Para probar el servicio de Radius, se ha hecho por separado a la
simulación principal, usando mi portátil como servidor Radius (IP:
192.168.0.101) y una AP real (IP: 192.168.0.1).

![](Pictures/10000001000002A00000027119898E38.png){width="5.622cm"
height="5.228cm"}![](Pictures/1000000100000208000001B656A62036.png){width="6.14cm"
height="5.173cm"}

\*En caso real los IP\`s de los AP\`s serán 10.13.3.10 y 10.13.3.20.

Añadimos las configuraciones para los usuarios de la empresa, utilizando
los datos de los empleados registrados en la base de datos. El nombre de
usuario será el nombre del empleado y la contraseña será su apellido,
ademas añadimos para los visitantes y clientes de la empresa el nombre
para conexión a los AP\`s **"user"** con la contraseña
**"Fusionsigma2025"**:

\*Cada "nombre" y "contraseña" corresponde al trabajador real de la
empresa:

![](Pictures/1000000100000583000000F9227B45C4.png){width="17cm"
height="2.999cm"}

[]{#anchor-33}

Para la simulación estoy configurando mi portátil como servidor, dándole
la IP correspondiente:

![](Pictures/10000001000001EA0000023BC4180AEA.png){width="5.56cm"
height="6.479cm"}

Posteriormente, configuramos el cliente del servidor RADIUS, que en este
caso será un punto de acceso TP-Link. Asignamos el nombre de la red
(SSID) \"fusionsigma2025\", con seguridad WPA/WPA2 Enterprise, y
especificamos la IP del servidor RADIUS previamente configurada
(192.168.0.101) junto con el puerto del servicio (1812).

![](Pictures/10000001000005010000031BE3C19CCF.png){width="9.336cm"
height="5.794cm"}

Finalmente, creamos manualmente la nueva red desde \"Redes e Internet\",
especificando el nombre, el tipo de seguridad y configurando la conexión
para que se inicie automáticamente. Una vez creada, en \"Propiedades\"
\> \"Seguridad\" \> \"Configuración avanzada\", habilitamos el inicio de
sesión único en esta red, configurándolo para que se realice
inmediatamente después de que el usuario inicie sesión.

![](Pictures/10000001000001E7000002BE82BAED4F.png){width="4.759cm"
height="6.86cm"}

![](Pictures/10000001000002BD0000024314EF0BE4.png){width="7.546cm"
height="6.232cm"}

Verificamos que la red \"Fusionsigma2025\" aparece correctamente en la
lista de conexiones inalámbricas disponibles. Al conectar mi teléfono
personal al punto de acceso TP-Link, el servidor DHCP asigna
automáticamente la dirección IP 192.168.0.100, confirmando el
funcionamiento correcto de la configuración.

![](Pictures/10000001000001E000000198A6BA86DC.png){width="6.151cm"
height="5.228cm"}![](Pictures/100000010000050C0000030A89E6F6AB.png){width="9.043cm"
height="5.445cm"}

De esta manera, todos los nombres de usuario con sus respectivas
contraseñas, configurados en el servidor, tienen acceso autorizado.

![](Pictures/10000000000003990000080083FB3F87.jpg){width="2.868cm"
height="6.378cm"}![](Pictures/1000000000000399000008006240FB55.jpg){width="2.875cm"
height="6.394cm"}![](Pictures/100000000000039900000800BBE1994E.jpg){width="2.849cm"
height="6.334cm"}![](Pictures/100000000000039900000800D84E0FE7.jpg){width="2.803cm"
height="6.232cm"}

Al realizar un debug del servidor RADIUS, se observa claramente la
autenticación del usuario \"Fatme\" a través del cliente 192.168.0.1
(punto de acceso TP-Link). El proceso incluye el envío de la clave
encriptada (MS-MPPE-Recv-Key y MS-MPPE-Send-Key), confirmando la
correcta asignación y seguridad de la contraseña mediante WPA/WPA2
Enterprise.

![](Pictures/100000010000035E000000F7CE8176CB.png){width="9.611cm"
height="2.753cm"}

#### []{#anchor-34}**16.Configuración y comprobación del Servidor HTTP/HTTPS / BBDD / FSTP .**

En esta misma máquina virtual se van a instalar estos tres servicios (en
Windows Server 2022).

\*Para la simulación estoy usando Windows Server 2022.

###### []{#anchor-35}a) HTTP/HTTPS (Servidor Web)

###### []{#anchor-36}

[]{#anchor-37}

Configuración en Windows Server 2022:

Usaremos IIS (Internet Information Services) para alojar el sitio web.

Instalación de IIS:

-Abrimos \"Server Manager\" \> \"Manage\" \> \"Add Roles and Features\".

-Seleccionamos \"Role-based or feature-based installation\" y elegimos
nuestro servidor.

-En \"Server Roles\", marcamos \"Web Server (IIS)\" y hacemos clic en
\"Next\" hasta instalar.

-Nos asegúramos de incluir el módulo \"HTTP\" y \"HTTPS\".

![](Pictures/100000010000021E0000021D292C4944.png){width="5.733cm"
height="5.722cm"}

Configuración HTTP:

-Abrimos \"IIS Manager\" (buscamos \"inetmgr\" en el menú de inicio).

-En el panel izquierdo, selecciona tu servidor y haz clic en \"Sites\".

-Hacemos clic en \"Add Website\":

-Ponemos el nombre: \"FusionSigma\".

-Physical Path: Creamos una carpeta (C:\\inetpub\\fusionsigma) y
colocamos ahí los archivos de nuestro sitio.

-Binding: Puerto 80, IP 10.13.5.100.

-Iniciamos el sitio y verificamos que sea accesible desde un navegador
(http://10.13.5.100).

![](Pictures/10000001000003CD0000033F252460F3.png){width="7.288cm"
height="6.225cm"}![](Pictures/1000000100000402000002BD7D696392.png){width="9.37cm"
height="6.403cm"}

Configuración HTTPS:

-Obtenemos un certificado SSL (vamos usar uno autofirmado para la
simulación):

![](Pictures/10000001000002B90000028D35461C7B.png){width="5.362cm"
height="4.946cm"}

![](Pictures/100000010000039B00000184042421A4.png){width="6.759cm"
height="3.78cm"}

-En IIS Manager, seleccionamos el servidor y hacemos clic en \"Server
Certificates\".

-Creamos un certificado autofirmado o (en caso real) importamos uno
válido.

![](Pictures/10000001000002EB000000EEAEC9B203.png){width="7.92cm"
height="2.524cm"}

-Volvemos a \"Sites\" y seleccionamos \"FusionSigma\", después hacemos
clic en \"Bindings\".

-Agregamos un binding para HTTPS (puerto 443), seleccionando el
certificado SSL.

-Reinicia el sitio y hacemos la prueba
([https://10.13.5.100](https://10.13.5.100/)).

\*Importante tener en cuenta los permisos en Firewall:

![](Pictures/10000001000003230000019D8D0C03B7.png){width="11.622cm"
height="5.978cm"}

Saltamos los avisos por seguridad y podemos ver que la aplicación esta
funcionando con el servidor HTTPS y su FQDN. Con "nslookup" observamos
que el nombre de dominio corresponde con la IP del servidor HTTPS y el
servidor DNS que traduce este nombre es el 10.13.0.100.

![](Pictures/10000001000003F8000002F85B599EF7.png){width="11.926cm"
height="8.922cm"}

###### 

###### 

Y hacemos una prueba desde le servidor DNS:

![](Pictures/10000001000003F3000002FBE5AF1751.png){width="8.493cm"
height="6.41cm"}

###### []{#anchor-38}b) BBDD

La base de datos (BBDD) de FusionSigma almacenan los datos dinámicos del
sitio web en esta misma máquina (10.13.0.10) y se va a conectar con el
servidor web para procesar solicitudes (insertar nuevas tareas para
administradores,administrar clientes y etc.).

Inicio de MySQL:

-Abrimos el panel de control de XAMPP (C:\\xampp\\xampp-control.exe).

-Iniciamos el módulo de MySQL.

-MySQL usará el puerto 3306 por defecto.

![](Pictures/10000001000003430000020021A45B8D.png){width="8.377cm"
height="5.136cm"}

Configurar los Bases de Datos:

-Accedemos a phpMyAdmin (incluido en XAMPP) abriendo un navegador y
yendo a http://localhost/phpmyadmin.

-Creamos una nueva base de datos (fusionsigma).

-Crea tablas según las necesitamos (en nuestro caso tenemos 4 tablas
creadas).

![](Pictures/10000001000006C1000001D382386524.png){width="11.777cm"
height="3.18cm"}

-Configuramos un usuario de MySQL con permisos:

![](Pictures/100000010000038E000002DDC307E12D.png){width="8.514cm"
height="6.856cm"}

Conectamos el Sitio Web con la BBDD:

-Nos aseguramos de que el sitio web (en IIS) tenga un backend (PHP, que
viene con XAMPP).

-Copiamos la carpeta C:\\xampp\\php a C:\\php y agrega C:\\php a las
variables de entorno (PATH).

Y si todo esta bien nos debería salir la pagina:

![](Pictures/100000010000074B000003C6307A1FA2.png){width="14.344cm"
height="7.421cm"}

###### []{#anchor-39}c) SFTP

Usaremos SFTP (Secure File Transfer Protocol) en FusionSigma para
transferir archivos de forma segura, con cifrado SSH. Además, es fácil
de configurar y usa un solo puerto (22), simplificando la gestión de
firewalls.

1.Descargamos Open SSH para nuestro sistema operativo (en este caso
Windows Server 2016).

![](Pictures/10000001000003FA000002FF545B9833.png){width="8.855cm"
height="6.671cm"}

2.Los descomprimimos (yo le he renombrado como OpenSSH) y lo movemos en
"Archivos de programa" que se encuentra en (C:).

![](Pictures/100000010000031C000001C27BFF9E02.png){width="9.622cm"
height="5.44cm"}

3.Para instalarlo ejecutamos el script a través de powershell con el
siguiente comando:

![](Pictures/10000001000003C800000129AB82E729.png){width="14.005cm"
height="4.295cm"}

4.Se arranca el servicio:

![](Pictures/10000001000002AE000000733395ACA4.png){width="12.666cm"
height="2.124cm"} ****

Y vemos que escucha en el puerto correspondiente ,que es 22:

![](Pictures/10000001000002A9000001FF90DC218D.png){width="10.283cm"
height="7.717cm"}

###### 

5.Configurar el servidor SFTP

Habilitamos el inicio automático para el servicio "sshd" e iniciarlo
usando los siguientes comandos de PowerShell:

PS C:\\Users\\Administrador\> Set-Service -Name sshd -StartupType
\'Automatic\'

PS C:\\Users\\Administrador\> start-service sshd

Habilitar la regla de firewall necesaria para SSH con el puerto 22.

[]{#anchor-40}6.Habilitamos el servicio con su puerto creando un
"FirewallRule":

![](Pictures/10000001000003F7000001D84BE10A40.png){width="12.506cm"
height="5.814cm"}

###### 

###### 

###### 

Y lo automatizamos:

![](Pictures/100000010000023A000000262A3C4D89.png){width="12.584cm"
height="0.84cm"}

[]{#anchor-41}Creando también un usuarios o varios para el servicio:

###### ![](Pictures/100000010000022F0000005B1476B17C.png){width="12.98cm" height="2.113cm"}

7.Editar el fichero "sshd_config_default" ubicado en
"C:\\ProgramData\\SSH\\" y verificar que la siguiente línea está
descomentada.

![](Pictures/10000001000002F0000001FEBD90BC5F.png){width="10.164cm"
height="6.893cm"}

Para la prueba he creado una carpeta "fisionsigma" para la simulación,
se han asignado todos los permisos a dicha carpeta. Sin embargo, en la
implementación real, se tendrán diferentes carpetas con distintos
permisos según los usuarios.

![](Pictures/10000001000002F30000020009BD73C3.png){width="10.894cm"
height="7.387cm"}

8.Conexión al servidor SFTP mediante WinSCP

Descargamos "WinSCP" desde este
[enlace](https://winscp.net/eng/download.php) y lo instalamos.
Especificamos el protocolo a utilizar, el nombre del servidor, el puerto
de éste, el usuario con el que queremos iniciar sesión en el servidor y
su contraseña.

La prueba la estoy haciendo desde mi propio portátil (como un
cliente),ya que esta en la misma red con el servidor SFTP:

![](Pictures/1000000100000325000002093A1DF069.png){width="13.174cm"
height="8.527cm"}

El IP del servidor es 192.168.1.211 porque he asignado como adaptador el
host para la prueba. En el caso real esta VM estará con IP
correspondiente del esquema lógico (10.13.0.10/24).

Nos conectamos con el usuario creado previamente, utilizando el puerto
22 y la contraseña correspondiente.

Hacemos clic en "Conectar" y observamos todas las carpetas en el
servidor SFTP. Dependiendo de los permisos asignados a cada carpeta,
tendremos o no acceso.

Los permisos de las carpetas, tanto en este servidor como en el Active
Directory (AD), se asignarán según las necesidades específicas de la
empresa.

![](Pictures/10000001000005420000036414824019.png){width="11.841cm"
height="7.636cm"}

Podemos observar que se puede abrir la carpeta de fusionsigma y si
abrimos el archivo de tarea.php la podemos modificar:

![](Pictures/100000010000053E0000035D75AF1B03.png){width="8.426cm"
height="5.406cm"}![](Pictures/100000010000055A0000035DC2E0B95C.png){width="8.072cm"
height="5.073cm"}

#### 

#### []{#anchor-42}17.Port Security y Port Mirroring en Packet Tracer

###### []{#anchor-43}a) Port Security

![](Pictures/100000010000047400000253C2FADD1C.png){width="12.31cm"
height="5.766cm"}

\*Implementaré port security con una MAC permitida en los switches de
Fusionsigma para garantizar que solo los dispositivos autorizados se
conecten, evitando accesos no deseados y reforzando la seguridad de la
red. Las pruebas realizadas, junto con los errores encontrados y sus
soluciones, tienen como objetivo documentar los problemas y las
resoluciones aplicadas en esta etapa, sirviendo como material de
capacitación técnica.

Port Security limitará las direcciones MAC permitidas en un puerto para
evitar accesos no autorizados. Lo configuraremos en los puertos de
acceso clave para proteger dispositivos sensibles. En realidad se va
configurar para todos los servidores físicos y estaciones de
trabajo,pero para la simulación he dejado el portátil del CEO, dos
administradores de BD y el servidor físico.

Hacemos la prueba con el servidor DHCP y el portatil CEO.

DHCP : 10.13.0.3/24

CEO: 10.13.1.3/24

![](Pictures/10000001000006AA000003498D850B1C.png){width="15.815cm"
height="6.872cm"}

Una vez configurado Port Security en los switches hacemos la prueba con
el portátil de CEO configurado en Switch1:

![](Pictures/10000001000003630000030F31C28575.png){width="8.939cm"
height="8.073cm"}

Para hacer la prueba cambio el portátil con otro, asignando la misma IP
y se puede ver que no puede hacer ping ,aunque esta conectado en el
mismo puerto con la misma IP, ya que el switch ya había guardado la MAC:

![](Pictures/10000001000003E700000224DCC5CCDC.png){width="9.045cm"
height="4.96cm"}

\*Problemas encontrados:

![](Pictures/100000010000030200000208C850FE55.png){width="9.005cm"
height="6.082cm"}

00E0.F9AC.E2C5

0007.ECE3.D610

0010.113A.388B

Esto indica que, a pesar de maximum 1, el puerto está registrando más
direcciones MAC.

Resolución de problema:

Falta de modo \"sticky\": No he usado **switchport port-security
mac-address sticky**, lo que significa que el switch no está fijando la
primera dirección MAC que aprende. En su lugar, está aprendiendo
dinámicamente nuevas direcciones MAC, lo que puede causar que se
registren más direcciones de las permitidas.

![](Pictures/100000010000043D000002494A2CE0CE.png){width="9.89cm"
height="5.332cm"}

Ahora de nuevo probemos con diferente portátil:

![](Pictures/100000010000029C000000E473E4AD00.png){width="6.742cm"
height="2.302cm"}Este vez ha guardado la MAC como Type: SecureSticky.

![](Pictures/1000000100000461000002DFACD28C38.png){width="11.31cm"
height="7.415cm"}

Y después de un par de intentos, es importante tener en cuenta que los
comandos están en orden,porque si no ,no funciona.

Se puede observar que ya funciona el Port Security:

![](Pictures/10000001000002A10000021EE82F0E65.png){width="7.412cm"
height="5.969cm"}

Como el Mac,que sale en la configuración se ha asignado
automáticamente(aprendido solo):

![](Pictures/10000001000001ED0000008EE6FBF551.png){width="7.795cm"
height="2.245cm"}

###### []{#anchor-44}!!!

###### []{#anchor-45}b) Port Mirroring 

SPAN configuración:

Utilizaré el servidor como \"Source\" para monitorear el tráfico con la
IP 10.13.0.3/24, que había sido asignada previamente, y un portátil como
\"Destination\", conectado al puerto Fa0/6 de Sw1 con la IP
10.13.1.6/24. Realizamos las configuraciones necesarias en el switch
para la interfaz Fa0/6.

![](Pictures/10000001000002090000010EABDC7708.png){width="5.913cm"
height="3.064cm"}

-Configurar SPAN en el switch1:

!

monitor session 1 source interface Fa0/1

monitor session 1 destination interface Fa0/6

!

-Comprobar la configuraciones

Después con los comandos: show monitor detail y show monitor sesion 1
comprobamos :

En el primer caso, antes de generar cualquier tráfico, verificamos que
la configuración de los puertos a monitorear y los utilizados para el
monitoreo sea correcta. Dado que en Packet Tracer no es posible usar
Wireshark para capturar paquetes, utilizaremos la herramienta Sniffer
integrada en el software.

![](Pictures/100000010000016B0000025D26130AA4.png){width="4.195cm"
height="6.994cm"}

Para ver un monitoreo, cambio el portátil con un Sniffer, en el mismo
puerto ( el sniffer es el "destination" ahora) y filtramos los paquetes
del ICMP:

![](Pictures/100000010000052A0000025E48E4FA61.png){width="10.391cm"
height="4.764cm"}

Y hacemos ping desde le Source a R1:

Se puede observar cómo el sniffer ha capturado el tráfico desde el
servidor hacia R1.

![](Pictures/1000000100000354000002C22D6FBFC8.png){width="8.895cm"
height="7.37cm"}![](Pictures/100000010000021300000340A7DCD1D9.png){width="5.417cm"
height="8.488cm"}

SPAN permite \"escuchar\" lo que está sucediendo en un puerto o VLAN sin
interferir con el tráfico normal de la red. Es una herramienta muy útil
para la resolución de problemas (troubleshooting), el análisis de
seguridad y la monitorización del rendimiento de la red. En la red de
Fusionsigma se utilizará de manera puntual.

#### []{#anchor-46}18.Manual Intermedio de la Red del FUsionSigma

Este manual está diseñado para que los trabajadores puedan resolver
problemas básicos que puedan surgir en la red local.

\*Para consultar el manual haz clic en el
[LINK](https://drive.google.com/file/d/1IJvtE1kzFXvgf1a29IE8D0hKSFuyZO7R/view?usp=sharing).

#### []{#anchor-47}19. Webgrafia

Este parte recopila recursos en línea seleccionados para la
configuración y mantenimiento de servicios de red críticos en la
infraestructura tecnológica de FusionSigma. Estos materiales, dirigidos
al equipo técnico, ofrecen guías prácticas para abordar problemas
básicos y avanzados en la red local, garantizando un funcionamiento
eficiente y seguro. A continuación, se detalla el propósito de cada
recurso y su aplicación en el contexto de la empresa:

1.  Configuración del Servidor Proxy\
    El tutorial
    [(https://www.youtube.com/watch?v=wTUchaXLc_w)](https://www.youtube.com/watch?v=wTUchaXLc_w)
    explica cómo implementar un servidor proxy, optimizando el tráfico
    de red, mejorando la seguridad y controlando el acceso a internet en
    FusionSigma. Es ideal para administradores que buscan configurar o
    solucionar problemas en el proxy.

2.  Configuración del Servidor RADIUS\
    El video de YouTube
    [(https://www.youtube.com/watch?v=gwf3dCwsGwY&t=605s)](https://www.youtube.com/watch?v=gwf3dCwsGwY&t=605s)
    proporciona una guía detallada para configurar un servidor RADIUS,
    esencial para la autenticación, autorización y auditoría (AAA) de
    usuarios en la red de FusionSigma. Este recurso es clave para
    gestionar accesos seguros a dispositivos de red, como puntos de
    acceso Wi-Fi o switches, y establecer políticas de seguridad
    robustas.

3.  Configuración del Servidor DNS\
    El video
    [(https://www.youtube.com/watch?v=uKzac7Gj5v8)](https://www.youtube.com/watch?v=uKzac7Gj5v8)
    ofrece instrucciones claras para configurar un servidor DNS,
    garantizando una resolución eficiente de nombres de dominio en la
    red local de FusionSigma. Este recurso ayuda a prevenir problemas de
    conectividad y mejora la experiencia de los usuarios en la red.

4.  Configuración de VPN Túnel\
    El video
    [(https://www.youtube.com/watch?v=8orLcC3aaAI&t=28s)](https://www.youtube.com/watch?v=8orLcC3aaAI&t=28s)
    detalla cómo establecer un túnel VPN, permitiendo conexiones seguras
    para usuarios remotos o entre oficinas de FusionSigma. Este recurso
    es fundamental para proteger los datos transmitidos y facilitar el
    acceso remoto a recursos internos.

5.  Instalación del Servidor SFTP\
    El artículo
    [(https://informaticamadridmayor.es/tips/instalacion-del-servidor-sftp-ssh-ftp-en-windows-con-openssh/)](https://informaticamadridmayor.es/tips/instalacion-del-servidor-sftp-ssh-ftp-en-windows-con-openssh/)
    describe la configuración de un servidor SFTP en Windows con
    OpenSSH. En FusionSigma, este recurso es crucial para la
    transferencia segura de archivos entre departamentos o con socios
    externos, garantizando confidencialidad e integridad.

6.  Configuración del Servidor DHCP\
    La guía de Alpine Linux
    [(https://wiki.alpinelinux.org/wiki/Configure_Networking)](https://wiki.alpinelinux.org/wiki/Configure_Networking)
    proporciona instrucciones detalladas para configurar un servidor
    DHCP, que asigna direcciones IP automáticamente a los dispositivos
    en la red de FusionSigma. Este recurso es esencial para gestionar
    eficientemente la conectividad de dispositivos en entornos dinámicos
    y evitar conflictos de IP.

7.  Configuración de Port Security

    El video [Port Security Configuration on a Cisco Switch in Cisco
    Packet Tracer](https://www.youtube.com/watch?v=v01C2VBLWH4) explica
    cómo implementar Port Security en switches de red, una medida
    crítica para proteger la red de FusionSigma contra accesos no
    autorizados. Este recurso detalla cómo limitar el número de
    dispositivos que pueden conectarse a un puerto específico,
    previniendo ataques como el spoofing de MAC o conexiones no
    autorizadas.

8.  

Estos recursos han sido seleccionados por su claridad, relevancia y
enfoque práctico. Se recomienda que el equipo técnico de FusionSigma
consulte estas guías junto con la documentación interna de la empresa,
realizando pruebas en entornos de desarrollo antes de implementar
cambios en producción. Esto asegura una configuración alineada con las
políticas de seguridad y los estándares operativos de FusionSigma.

#### []{#anchor-48}20.Alta disponibilidad

Configurar HSRP en R2 y R3 en la simulación de Fusionsigma es una medida
importante para asegurar la robustez y la continuidad operativa de la
red local. Garantiza que la pérdida de uno de los routers no interrumpa
la conectividad de los dispositivos en esa red, contribuyendo a una
infraestructura de Fusionsigma más confiable.

[]{#anchor-49}La prioridad HSRP se puede utilizar para determinar el
router activo. El router con la prioridad HSRP más alta será el router
activo. De manera predeterminada, la prioridad HSRP es 100. Si las
prioridades son iguales, el router con la dirección IPv4 numéricamente
más alta es elegido como router activo.

![](Pictures/10000001000005FC000002C84A41D92B.png){width="15.923cm"
height="7.398cm"}

Configuraciones de HSRP / Hot Standby Router Protocol (Protocolo de
Router en Espera Activa):

R2 / Vodafone

*interface FastEthernet0/0.4*

**

*standby version 2*

*standby 1 ip 10.13.4.10*

*standby 1 priority 110*

*standby 1 preempt*

R3 / Movistar

*interface FastEthernet0/0.4*

**

*standby version 2*

*standby 1 ip 10.13.4.20*

*standby 1 priority 100*

*standby 1 preempt*

**El R**2(Vodafone)* *se configuró con la prioridad de HSRP de 1**1**0
mientras que el R**3(Movistar)* *tiene la prioridad de HSRP
predeterminada de 100.* *La prioridad* *está habilitad**a* *en el
R**2**. Con una prioridad más alta, el R**2* *es el router activo y el
R**3* *es el router de reserva. Debido a un corte de energía que solo
afecta al R**2**, el router activo ya no está disponible y el router de
reserva R**3* *asume el rol de router activo. Después de que se restaura
la energía, el R**2* *vuelve a estar en línea. Dado que R**2* *tiene una
prioridad más alta y el intento de prioridad se encuentra habilitado,
forzará un nuevo proceso de elección. R**2* *reanudará su rol de router
activo y el R**3* *volverá al rol de router de reserva.**

#### []{#anchor-50}![](Pictures/10000001000002400000014AC4594C2A.png){width="8.916cm" height="5.108cm"}![](Pictures/100000010000025400000149BF0936DC.png){width="9.243cm" height="5.103cm"} 

Para verificar el correcto funcionamiento, apagaremos el R2(Vodafone) y
con el comando **show standby brief** o **show standby** en el router
que estaba en standby (R3).

![](Pictures/100000010000038F000001DCCB25F39E.png){width="12.211cm"
height="6.38cm"}

La captura ilustra cómo el router Movistar (R3) ha tomado exitosamente
el rol de **router activo** en el grupo HSRP 1 para la interfaz
FastEthernet0/0.4, asumiendo la responsabilidad de reenviar el tráfico
para la dirección IP virtual 10.13.4.20.

\*Problema encontrado: Ahora la red no tiene conexión internet debido a
la ruta por defecto que le había asignado de R2
(10.13.4.2/24),actualmente apagado.

\*Solución: En caso real, hay que asignar nueva ruta por defecto para
salida a internet a través del R3 (10.13.4.3/24) o la IP del Router
virtual.

!!!

Balanceo

En lugar de que un solo router siempre envíe todo el tráfico
(activo/pasivo), creamos varios \"caminos virtuales\" (Grupos HSRP).
Cada router será el principal para algunos de esos caminos, y de
respaldo para otros.

Esto permite que ambos routers estén trabajando activamente al mismo
tiempo, compartiendo la carga del tráfico de la red. Si un router falla,
el otro toma el control de sus caminos, manteniendo la conexión. En
resumen, mejor uso de recursos y mayor capacidad de tráfico, manteniendo
la redundancia.

R2/Vodafone

interface FastEthernet0/0.4\
\
standby version 2

\
standby 1 ip 10.13.4.10\
standby 1 priority 110\
standby 1 preempt

\
standby 2 ip 10.13.4.20\
standby 2 priority 100\

R3/Movistar

interface FastEthernet0/0.4\
\
standby version 2\
\
standby 1 ip 10.13.4.10\
standby 1 priority 100\
standby 1 preempt\
\
standby 2 ip 10.13.4.20\
standby 2 priority 110\
standby 2 preempt

#### 

###### []{#anchor-51}!!!

\*Con la configuración de balanceo y Nat estático.

#### []{#anchor-52}21.Configuraciones de R1, R2 y R3.

R1:

Firewall#sh run

Building configuration\...

Current configuration : 2032 bytes

!

version 12.4

service timestamps debug datetime msec

service timestamps log datetime msec

no service password-encryption

!

hostname Firewall

!

boot-start-marker

boot-end-marker

!

no aaa new-model

memory-size iomem 5

no ip icmp rate-limit unreachable

ip cef

!

no ip domain lookup

ip auth-proxy max-nodata-conns 3

ip admission max-nodata-conns 3

!

username fatme privilege 5 password 0 fatme

!

ip tcp synwait-time 5

!

interface FastEthernet0/0

no ip address

duplex auto

speed auto

!

interface FastEthernet0/0.1

encapsulation dot1Q 1 native

ip address 10.13.0.1 255.255.255.0

ip access-group 101 in

ip helper-address 10.13.0.2

!

interface FastEthernet0/0.2

encapsulation dot1Q 2

ip address 10.13.1.1 255.255.255.0

ip helper-address 10.13.0.2

!

interface FastEthernet0/0.3

encapsulation dot1Q 3

ip address 10.13.3.1 255.255.255.0

ip helper-address 10.13.0.2

!

interface FastEthernet0/0.4

encapsulation dot1Q 4

ip address 10.13.4.1 255.255.255.0

ip helper-address 10.13.0.2

!

interface FastEthernet0/0.6

encapsulation dot1Q 6

ip address 10.13.2.1 255.255.255.0

ip access-group 102 in

!

interface FastEthernet0/1

no ip address

shutdown

duplex auto

speed auto

!

router ospf 1

log-adjacency-changes

!

router rip

version 2

network 10.0.0.0

!

ip forward-protocol nd

ip route 0.0.0.0 0.0.0.0 10.13.4.2

!

no ip http server

no ip http secure-server

!

access-list 101 deny tcp any any eq 22

access-list 101 deny tcp any any eq telnet

access-list 101 deny tcp any any eq 3389

access-list 101 permit ip any any

access-list 102 deny tcp any any eq 22

access-list 102 deny tcp any any eq telnet

access-list 102 deny tcp any any eq 3389

access-list 102 permit ip any any

no cdp log mismatch duplex

!

control-plane

!

line con 0

exec-timeout 0 0

privilege level 15

logging synchronous

line aux 0

exec-timeout 0 0

privilege level 15

logging synchronous

line vty 0 4

privilege level 5

password fusionsigma2025.SL

login local

!

end

R2/Vodafone:

Vodafone#sh run

Building configuration\...

Current configuration : 1710 bytes

!

version 12.4

service timestamps debug datetime msec

service timestamps log datetime msec

no service password-encryption

!

hostname Vodafone

!

boot-start-marker

boot-end-marker

!

no aaa new-model

memory-size iomem 5

no ip icmp rate-limit unreachable

ip cef

!

no ip domain lookup

ip auth-proxy max-nodata-conns 3

ip admission max-nodata-conns 3

!

ip tcp synwait-time 5

!

interface FastEthernet0/0

no ip address

duplex auto

speed auto

!

interface FastEthernet0/0.4

encapsulation dot1Q 4

ip address 10.13.4.2 255.255.255.0

ip helper-address 10.13.0.2

ip nat inside

ip virtual-reassembly

standby version 2

standby 1 ip 10.13.4.10

standby 1 priority 110

standby 1 preempt

standby 2 ip 10.13.4.20

standby 2 preempt

!

interface FastEthernet0/0.5

encapsulation dot1Q 5

ip address 10.13.5.1 255.255.255.0

ip helper-address 10.13.0.2

ip nat inside

ip virtual-reassembly

!

interface FastEthernet0/1

ip address dhcp

ip nat outside

ip virtual-reassembly

duplex auto

speed auto

!

router ospf 1

log-adjacency-changes

network 10.0.0.0 0.255.255.255 area 0

!

router rip

version 2

network 10.0.0.0

!

ip forward-protocol nd

!

no ip http server

no ip http secure-server

ip nat inside source list 1 interface FastEthernet0/1 overload

ip nat inside source static tcp 10.13.5.100 80 192.168.1.247 80
extendable

ip nat inside source static tcp 10.13.5.100 443 192.168.1.247 443
extendable

!

access-list 1 permit any

no cdp log mismatch duplex

!

control-plane

!

line con 0

exec-timeout 0 0

privilege level 15

logging synchronous

line aux 0

exec-timeout 0 0

privilege level 15

logging synchronous

line vty 0 4

login

!

end

Vodafone#

R3/Movistar:

Movistar#sh run

Building configuration\...

Current configuration : 1272 bytes

!

version 12.4

service timestamps debug datetime msec

service timestamps log datetime msec

no service password-encryption

!

hostname Movistar

!

boot-start-marker

boot-end-marker

!

no aaa new-model

memory-size iomem 5

no ip icmp rate-limit unreachable

ip cef

!

no ip domain lookup

ip auth-proxy max-nodata-conns 3

ip admission max-nodata-conns 3

!

ip tcp synwait-time 5

!

interface FastEthernet0/0

no ip address

duplex auto

speed auto

!

interface FastEthernet0/0.4

encapsulation dot1Q 4

ip address 10.13.4.3 255.255.255.0

ip nat inside

ip virtual-reassembly

standby version 2

standby 1 ip 10.13.4.20

standby 1 preempt

!

interface FastEthernet0/1

ip address dhcp

ip nat outside

ip virtual-reassembly

duplex auto

speed auto

!

router ospf 1

log-adjacency-changes

network 10.0.0.0 0.255.255.255 area 0

!

router rip

version 2

network 10.0.0.0

default-information originate

!

ip forward-protocol nd

!

no ip http server

no ip http secure-server

!

no cdp log mismatch duplex

!

control-plane

!

line con 0

exec-timeout 0 0

privilege level 15

logging synchronous

line aux 0

exec-timeout 0 0

privilege level 15

logging synchronous

line vty 0 4

password fusionsigma

login

!

!

end

###### []{#anchor-53}FIN
