### <span id="anchor"></span>                    ÁMBITO DE REDES             <img src="Pictures/1000000000000159000001534032C0E7.png"
style="width:2.304cm;height:2.263cm" />

#### 

#### 

#### 

#### 

#### 

#### <span id="anchor-1"></span>1.Datos de la empresa

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

<table>
<tbody>
<tr>
<td> <strong>Nombre</strong></td>
<td>FUsionSigma</td>
</tr>
<tr>
<td> <strong>CIF</strong></td>
<td>F1234567X</td>
</tr>
<tr>
<td> <strong>Tipo de empresa</strong></td>
<td>Sociedad Limitada (S.L.)</td>
</tr>
<tr>
<td> <strong>Ubicación</strong></td>
<td>Avda. de la Innovación, 15. Autovía del Mediterráneo (A-7). Salida
460 CP 04131 Almería</td>
</tr>
<tr>
<td> <strong>Propósito</strong></td>
<td><p>Desarrollo de Bases de Datos Personalizadas</p>
<p>y Gestión en la nube</p></td>
</tr>
<tr>
<td> <strong>Nº empleados</strong></td>
<td>22</td>
</tr>
<tr>
<td> <strong>Nº teléfono</strong></td>
<td> 613025813</td>
</tr>
<tr>
<td><strong>Pagina Web</strong></td>
<td>FusionSigma.com</td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td><p><a
href="mailto:fusionsigma@gmail.com">fusionsigma@gmail.com</a></p></td>
</tr>
<tr>
<td><p><strong>Logo</strong></p>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p></td>
<td> <img src="Pictures/1000000000000159000001534032C0E7.png"
style="width:3.649cm;height:3.586cm" /></td>
</tr>
</tbody>
</table>

#### 

#### <span id="anchor-2"></span>2.Necesidades y soluciones a la situación informática

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
consultas con caché, filtra sitios maliciosos y asegura continuidad si
falla el DNS del ISP.

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

Implementación: Servidor Radius (FreeRADIUS) para autenticación
centralizada.

Justificación: Gestiona acceso seguro a red, VPN y servicios, simplifica
administración y registra intentos de acceso, protegiendo recursos
críticos como servidores de BBDD.

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

»»»La alta disponibilidad es una inversión estratégica para FusionSigma,
una empresa mediana con crecimiento rápido proyectado. Los costos de un
servidor de backup y dos ISPs son razonables frente a las pérdidas por
inactividad, que afectarían el diseño de BBDD y la confianza de los
clientes. Proxmox optimiza recursos al virtualizar servicios y habilita
pruebas en el servidor de backup, mientras la redundancia en
conectividad soporta operaciones en la nube. Estas medidas aseguran
continuidad, cumplimiento normativo (GDPR) y competitividad,
posicionando a FusionSigma para escalar con éxito mientras cumple su
misión de modernización digital para PYMES.

\*Nota sobre VirtualBox: Aunque VirtualBox se usa para simulaciones, la
implementación real con Proxmox refuerza la escalabilidad y robustez,
alineándose con las necesidades de una empresa en expansión.

\*Para mas información: [Ambito
Comun](https://drive.google.com/file/d/1t_Dek7EE4OY3OvUv6rw3K0LT904VDtSm/view?usp=sharing).

###### 

#### <span id="anchor-3"></span>3.Esquema lógico real

<img src="Pictures/100000010000064C000003165B95BC6C.png"
style="width:17cm;height:8.331cm" />

VLANs y subredes:

V1 (10.13.0.0): Servidor 1 con servicios como DHCP, DNS/AD, HTTP/HTTPS,
BBDD, SFTP, Radius, Proxy No Transparente y Servidor 2 como Backup.

V2 (10.13.1.0): Dispositivos de gestión (CEO, CTO, Trabajadores x20).

V3 (10.13.3.0): Dispositivos de red (puntos de acceso) y administración
.

V4 (10.13.4.0): Conexión externa a ISPs (Vodafone, Movistar) y el
dominio fusionsigma.com.

V5 (10.13.2.0): Red reservada para visitantes de la empresa .

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

\*Se he dejado VLAN 5 (10.13.2.0/24): Creada para clientes y visitantes
que usan la Wi-Fi (SSID de invitados), aislada de VLANs internas (V1,
V2) por seguridad, permitiendo solo acceso a internet.

#### <span id="anchor-4"></span>4.Esquema físico real

<img src="Pictures/100000010000044E000003311E0F8CB9.png"
style="width:16.679cm;height:11.017cm" />

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

###### <span id="anchor-5"></span>Implementación de Infraestructura Tecnológica Escalable y Segura para FusiónSigma.

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

#### <span id="anchor-6"></span>5.Virtualización con Proxmox

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

#### <span id="anchor-7"></span>6.Restricciones al tráfico con ACL, proxy, reglas FW

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

*Listas de acceso principales:*

Estas ACL\`s se van aplicar en el R1 Fusion protegiendo loa red de los
servidores y dejando permisos unicamente en la red de los Switches,
AP\`s y Administrador (10.13.3.0/24) acceder en esta red a traves de
SSH, telnet y RDP.

ACL 101

Access-list 101 deny tcp any any eq 22

access-list 101 deny tcp any any eq 23

access-list 101 deny tcp any any eq 3389

access-list 102 permit ip any any

-----------------

interface f0/0.1 (de trabajadores)

ip access-group 101 in

ACL 102

Access-list 102 deny any any eq 22

access-list 102 deny tcp any any eq 23

access-list 102 deny tcp any any eq 3389

access-list 102 permit ip any any

-----------------

interface f0/0.5 (de visitantes)

ip access-group 101 in

De esta manera denegamos acceso de las redes de trabajadores y
visitantes y el unico acceso posible para administrar se queda la vlan 3
(10.13.3.0/24).

Antes de aplicar la lista de acceso, comprobamos que el portátil
10.13.1.4/24 de Vlan2 (trabajadores) puede acceder a través de ssh al
servidor en Vlan1 (servidores):

Para que hacemos la prueba he instalado OpenSSH en el servidor BBDD/SFTP
con IP 10.13.0.10/24, dándole los permisos necesarios en dicha VM que se
ejecuta siempre.\

<img src="Pictures/1000000100000400000002FBF0DBDC57.png"
style="width:10.809cm;height:8.054cm" />

<img src="Pictures/1000000100000368000002A50B13E7BF.png"
style="width:7.502cm;height:5.824cm" /><img src="Pictures/10000001000003E9000002F6E095F628.png"
style="width:7.371cm;height:5.581cm" />

\*Importante aplicar las reglas en el Firewall en los servidores para
que las ACL\`s estan funcionando correctamente.

En este caso para la simulación aplicamos una nueva regla especifica
para ver el funcionamiento y acceso que estamos permitiendo a través de
ssh puerto 22.

<img src="Pictures/10000001000003EE000002F4E671F52E.png"
style="width:8.467cm;height:6.362cm" /><img src="Pictures/10000001000002E60000026444C87E70.png"
style="width:7.47cm;height:6.161cm" />

Y ya tenemos nuestra nueva regla de entrada en el Firewall creada:

<img src="Pictures/10000001000003EB000000CBAC11A40B.png"
style="width:17cm;height:3.44cm" />

Y comprobamos al final la conectividad desde el portátil 10.13.1.4/24:

<img src="Pictures/1000000100000401000002FC832ED637.png"
style="width:8.416cm;height:6.272cm" />

<img src="Pictures/10000001000003F4000002FA35045459.png"
style="width:8.301cm;height:6.251cm" />

Y podemos observar que si tenemos acceso a traves del ssh en el servidor
10.13.0.10/24 desde el portatil 10.13.1.4/24:

<img src="Pictures/1000000100000409000002FE6EC4534D.png"
style="width:10.363cm;height:7.685cm" />

Ahora aplicamos las ACL previstas en nuestra red (R1 Fusion) y probamos
de nuevo:

<img src="Pictures/100000010000022B0000011352AC86E3.png"
style="width:8.966cm;height:4.441cm" /><img src="Pictures/1000000100000197000000F74A1676C5.png"
style="width:7.177cm;height:4.355cm" />

Y ahora de nuevo intentamos conectarnos de la misma manera:

<img src="Pictures/1000000100000403000002F610DD0C18.png"
style="width:8.546cm;height:6.308cm" /><img src="Pictures/10000001000002DF000001F10198EB6B.png"
style="width:8.006cm;height:5.415cm" />

O también podemos probar conectarnos con su nombre de dominio que hemos
asignado previamente en el servido DNS. En ambos caso la conexión falla
por las ACL´s que hemos aplicado en el R1 Fusion:

<img src="Pictures/1000000100000408000002FDE42A6E58.png"
style="width:8.486cm;height:6.29cm" /><img src="Pictures/10000001000003FC000002F9C876FCDE.png"
style="width:8.319cm;height:6.205cm" />

Y observamos en la lista de acceso 101 como los “maches” donde negamos
acceso en el puerto 22 han cambiado:

<img src="Pictures/10000001000002050000019F882BE5BF.png"
style="width:9.398cm;height:7.544cm" />

Los dichos puertos y servicios están prohibidos ,pero seguimos teniendo
conexión y lo podemos comprobar con ping desde el portátil al servidor:

<img src="Pictures/1000000100000402000002F19B84ABF8.png"
style="width:9.433cm;height:6.922cm" />

Después para que comprobamos que el Administrador que se conecta en
vlan3, le hemos asignado una IP estatica y hacemos la mismo prueba,
conexión a través de SSH con el servidor SFTP:

\*Importante asignar la vlan3 en modo acceso en el switch, en el que
conecta el dicho administrador.

###### <span id="anchor-8"></span><img src="Pictures/10000001000003F2000002F8149CA60D.png"
style="width:8.728cm;height:6.567cm" /> 

###### 

###### 

###### 

###### 

###### 

###### 

###### 

###### 

###### 

Usaremos Putty para la prueba y conectándonos, salta un aviso de
seguridad:

###### <img src="Pictures/10000001000003F9000002F9A80048B9.png"
style="width:8.218cm;height:6.149cm" /><img src="Pictures/10000001000003FE000002FF3B0D3CF8.png"
style="width:7.976cm;height:5.985cm" />

###### 

###### 

Y podemos observar que efectivamente los dispositivos en la vlan 3 tiene
acceso a la red de los servidores (en este caso 10.13.0.10/24).

<img src="Pictures/1000000100000357000000850BA461FB.png"
style="width:13.926cm;height:2.166cm" />

###### 

<img src="Pictures/100000010000040100000304F251F61A.png"
style="width:9.133cm;height:6.879cm" />

\*La lista de acceso no cambia (no aparecen maches) ,ya que es la vlan
que queda permitiendo el acceso.

###### <span id="anchor-9"></span>Configuraciones y Pruebas de ACL\`s

Otra ACL que se va aplicar en la red separada del Tunel para permitir
acceso de un Administrador a traves de ssh en la red del Sede Almeria
desde el Sede Malaga.

<img src="Pictures/1000000100000422000002E1D4F7544E.png"
style="width:9.934cm;height:6.92cm" />

! Aplicamos la ACL en la interfaz Tunnel 10

interface Tunnel10

ip access-group 100 in

Esta ACL no afecta el tráfico interno entre subredes dentro de
10.13.0.0/24 (como el tráfico desde 10.13.1.0/24 hacia 10.13.0.3),
porque el tráfico interno no pasa por la interfaz Tunnel 10.

<img src="Pictures/100000010000064C000003165B95BC6C.png"
style="width:12.827cm;height:6.287cm" />

\*Simulación para la comprobación del servicio Telnet desde
Administrador (Sede Malaga) usando el tunel al servidor 1 (Sede
Almeria):

<img src="Pictures/10000001000002F60000008D232E7C6C.png"
style="width:11.252cm;height:2.094cm" />

access-list 101 permit tcp host 192.168.1.10 host 10.13.0.3

access-list 101 permit ip any any

interface Tunnel10

ip access-group 101 in

Para hacer una prueba mas clara, he cambiado los pc\`s con VM ,dándole
las mismas IP como la esquema y configurando el servidor Ubuntu con
servicio SSH, tambien descargando Putty para la simulación para
comprobar la conexión ssh pasado por el túnel.

Haciendo un ping desde cliente 1 al router de fusionsigma se ve
claramente que los paquetes pasan por el tunel 10 encriptados:

<img src="Pictures/10000001000003E5000001BF3B416A70.png"
style="width:7.096cm;height:3.182cm" /><img src="Pictures/10000001000002A00000011DDECEF860.png"
style="width:7.385cm;height:3.133cm" />

Probando hacer ping desde el servidor al cliente también observamos que
hay conexión y que va encriptada. Ya que tenemos conexión accedemos a
través de SSH con el IP del servidor Ubuntu :

<img src="Pictures/1000000100000404000002FFEC96D1E7.png"
style="width:8.094cm;height:6.04cm" /><img src="Pictures/10000001000003EE000002BC264DD196.png"
style="width:8.281cm;height:5.761cm" />

<img src="Pictures/10000001000003FE000002FAC6879B23.png"
style="width:7.867cm;height:5.867cm" /><img src="Pictures/10000001000003F800000302BEB668B8.png"
style="width:8.319cm;height:6.304cm" />

Y podemos ver que si, efectivamente tenemos conexión segura a través del
Ipsec y el túnel anteriormente creado.

\* EL ACL QUE SE HA APLICADO AQUÍ ERA PARA EL FUNCIONAMIENTO VPN
UNICAMENTE Y ENSEÑAR COMO SU PUEDE APLICAR EN CASO REAL.

Si probamos de otro equipo de la misma red en el Sede Málaga conectarse
con el servidor en Almería, este esta denegado y se ve claramente en la
ACL también:

<img src="Pictures/10000001000002650000022945322F15.png"
style="width:8.539cm;height:7.703cm" />

<img src="Pictures/10000001000002C80000006CEA7C746B.png"
style="width:11.677cm;height:1.771cm" />

#### 

#### <span id="anchor-10"></span>7.Acceso remoto

El mantenimiento remoto implica acceder a los dispositivos de red (R1,
R2, R3, Sw1, Sw2, APs, servidores) desde una ubicación externa a través
de Internet, utilizando protocolos como SSH y RDP para el acceso remoto.
Dado que R1 es el router principal y firewall, será el punto de entrada
principal para estas conexiones.

\*Ventaja del Cisco ASA:

El Cisco ASA5506-SEC-BUN-K9 **(R1 Fusion)** ofrece capacidades avanzadas
para VPN (como IPsec y actuando como SSL VPN server). Soporta dos tipos
principales de VPN que pueden configurarse para acceso remoto:

IPsec VPN: Proporciona un túnel seguro basado en el protocolo IPsec,
ideal para conexiones cliente-servidor o sitio-a-sitio. Es altamente
seguro, pero requiere configuración específica en el cliente.

SSL VPN: Utiliza SSL/TLS para crear un túnel seguro, comúnmente
implementado con Cisco AnyConnect. Este método es más flexible y fácil
de usar para los clientes, ya que permite conexiones desde navegadores o
aplicaciones específicas como OpenVPN.

\*Esta no esta simulada en el proyecto!

En FusionSigma, también se va usar para el acceso remoto SSH (para la
gestión segura de dispositivos de red) y RDP (para acceso a servidores o
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

\*Cisco AnyConnect explicación de funcionamiento:
[Video](https://www.bing.com/videos/riverview/relatedvideo?q=configuration+VPN+en+Cisco+RV340&mid=4373C66EDED88ABC991B4373C66EDED88ABC991B&FORM=VIRE)

\* La simulación del acceso remoto se ha hecho en GNS3 con un router que
suporta el protocolo Ipsec y se va hacer desde R2(FusionSigma) con un
esquema separado del principal, ya que la configuración del router en
realidad es mucho mas fácil y tiene todo necesario integrado.

###### <span id="anchor-11"></span>a)Routers

En R2 (Vodafone / 10.13.4.2/24) y R3 (Movistar / 10.13.4.3/24) se va
configurar “line vty 0 4” simple en modo usuario:

<img src="Pictures/10000001000000EF000000B19EEA9C0B.png"
style="width:3.801cm;height:2.815cm" /><img src="Pictures/10000001000000DE000000AC08723BE8.png"
style="width:3.452cm;height:2.674cm" />

Y nos conectamos desde R1(Fusion) a través de telnet para comprobar el
acceso en R2 y R3:

<img src="Pictures/100000010000011D000000B668A452ED.png"
style="width:3.988cm;height:2.547cm" /><img src="Pictures/100000010000010B000000A2AFE79B06.png"
style="width:4.122cm;height:2.501cm" />

Y en Router principal de la red: R1(Fusion/Firewall) encriptamos la
contraseña para acceso en nivel 5, que es el nivel mas alto que existe.

<img src="Pictures/1000000100000223000000DE86540511.png"
style="width:8.585cm;height:3.484cm" />

Para extra seguridad en el R1 creamos usuario con contraseña y la
encriptamos también:

Firewall(config)#username fatme password fatme

Firewall(config)#service password-encryption

<img src="Pictures/10000001000001960000004D83F20D1C.png"
style="width:7.939cm;height:1.506cm" />

!!! La contraseña del usuario es de nivel 7, lo que hace posible que se
desencripta fácilmente de la siguiente manera:

Firewall(config)#key chain clave

Firewall(config-keychain)#key 1

Firewall(config-keychain-key)#key-string 7 045D0A120224

Y si queremos saber la contraseña con el comando **show key chain
clave:**

<img src="Pictures/1000000100000285000000849C8FEC44.png"
style="width:10.809cm;height:2.212cm" />

\* Esta desencriptacion se menciona por tema de seguridad.

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

<img src="Pictures/10000001000001820000011E5D794EAC.png"
style="width:7.477cm;height:5.54cm" />

###### <span id="anchor-12"></span>Simulación Ipsec sobre GRE Tunnel en GNS3:

En resumen, el primer paso que se va hacer es establecer el túnel GRE
creando una interfaz virtual (Tunnel10) en cada router. En cada
interfaz, definimos una dirección IP privada para la comunicación dentro
del túnel (172.16.13.1 en FusionSigma y, después también, 172.16.13.2 en
Administrator). Luego, especificamos el origen del túnel (tunnel source
FastEthernet0/1, la interfaz pública) y el destino del túnel (tunnel
destination, la dirección IP pública del otro extremo). Esto encapsula
el tráfico dentro de paquetes IP para viajar a través de la red pública.

<img src="Pictures/1000000100000464000002EBC8B86F09.png"
style="width:15.951cm;height:10.601cm" />

Configuramos los IP\`s de dos extremos ( el servidor y pc-Fatme)
manualmente.

Una vez configuran el túnel GRE, comprobamos tanto desde el Router de
FusionSigma y el de Administrator los vecinos del protocolo OSPF que
hemos restablecido:

<img src="Pictures/10000001000002C600000077784A6B01.png"
style="width:9.825cm;height:1.647cm" />

<img src="Pictures/10000001000002E100000072EFB9FA2F.png"
style="width:9.911cm;height:1.533cm" />

La captura de Wireshark muestra claramente el proceso de encapsulación y
desencapsulación que permite que el tráfico de la red privada de
PC-Fatme viaje a través de la red pública y llegue a la red privada del
Servidor, todo ello "oculto" dentro de los paquetes GRE.

Podemos ver claramente:

-Paquetes ICMP originales originados en PC-Fatme y destinados al
Servidor.\
-Estos paquetes ICMP encapsulados dentro de paquetes GRE, con una
cabecera IP externa que tiene como origen y destino las direcciones IP
públicas de los extremos del túnel (Administrator e FusionSigma).\
-En el otro extremo del túnel, los paquetes GRE son desencapsulados,
revelando los paquetes ICMP originales que son luego entregados al
destino final.

\
-También observamos los paquetes OSPF Hello siendo intercambiados entre
las direcciones IP privadas de la interfaz del túnel (172.16.13.1 y
172.16.13.2), lo cual es necesario para que los routers formen
adyacencias OSPF a través del túnel.

<img src="Pictures/1000000100000381000001D25D7465FB.png"
style="width:9.04cm;height:4.695cm" />

Analizando el paquete 181, vemos la encapsulación GRE en acción:\
El paquete original de ping (ICMP) con origen en PC-Fatme (192.168.1.10)
y destino en el Servidor (10.13.0.3) ha sido envuelto por el router
Administrator dentro de un paquete GRE. Este paquete GRE tiene una nueva
cabecera IP externa con origen en la dirección pública de Administrator
(181.23.13.1) y destino en la dirección pública de FusionSigma
(100.12.12.1), permitiendo que el ping viaje a través de la red pública.

<img src="Pictures/10000001000003A80000011FFEDF6DC9.png"
style="width:9.562cm;height:2.93cm" />

El siguiente paso será creando un conjunto de reglas de seguridad (la
política ISAKMP) y una contraseña secreta que el router (FusionSigma)
usará para establecer una conexión segura (fase 1 de ISAKMP) con el
router Administrator (que tiene la dirección IP 181.23.13.1). Esto
sentará las bases para luego poder crear el túnel IPSec real (fase 2).

<img src="Pictures/1000000100000276000000504911F9D7.png"
style="width:10.414cm;height:1.323cm" />

Para la simulación configuramos un conjunto de transformación IPSec
llamado "AES_SHA". Este conjunto de transformación especifica que se
utilizará el protocolo ESP (Encapsulating Security Payload) para
proporcionar seguridad. ESP se encargará de:\
\
-Confidencialidad de los datos: Cifrando el contenido de los paquetes.\
-Autenticación: Verificando que los paquetes no han sido alterados.\
-Protección contra la reproducción: Evitando que un atacante capture y
reenvíe paquetes antiguos.\
\
Además, se configura el modo de operación de IPSec como "túnel", lo que
significa que todo el paquete IP original será cifrado y se le añadirá
una nueva cabecera IPsec.

<img src="Pictures/100000010000029600000064B9CC8498.png"
style="width:10.924cm;height:1.651cm" />

Justo después configuramos el IPSec profile (fatme):

<img src="Pictures/1000000100000279000000835C522E91.png"
style="width:10.125cm;height:2.096cm" />

Y lo aplicamos en el túnel:

<img src="Pictures/1000000100000455000000D1BC157CF5.png"
style="width:17cm;height:3.203cm" />

Hacemos la misma configuración el el router de Administrador, con la
única diferencia es la IP (la publica de FusionSigma) en el PSK
configuración:

<img src="Pictures/10000001000002890000003723B8B175.png"
style="width:9.548cm;height:0.81cm" />

Y después configuramos Ipsec también:

<img src="Pictures/1000000100000232000000611A8C0350.png"
style="width:9.356cm;height:1.616cm" />

Configuración de Ipsec Profile en Administrador:

<img src="Pictures/1000000100000276000000806A9789C4.png"
style="width:9.714cm;height:1.974cm" />

Y aplicándolo en el túnel:

<img src="Pictures/10000001000004430000012EAFE5FF96.png"
style="width:11.989cm;height:3.318cm" />

Y si abrimos Wireshark vemos que el protocolo ya se he cambiado a ESP o
Encapsulating Security Payload, es un protocolo que cifra el contenido
de los paquetes de red, garantizando la confidencialidad de los datos.
Además, los paquetes ESP verifican que no han sido alterados y los
protege contra la reproducción.

<img src="Pictures/10000001000004760000014C1AECA5AA.png"
style="width:15.222cm;height:4.424cm" />

Hacemos un ping continuo de PC-Fatme a FusionSigma Server y podemos
observar que todos los paquetes que se están creando son ESP ,viendo
solo las IP\`s publicas de los dos Routers:

<img src="Pictures/100000010000048F000002EB8FC7BA34.png"
style="width:9.444cm;height:6.043cm" />

<img src="Pictures/1000000100000256000001CB0E0E9FE8.png"
style="width:7.228cm;height:5.549cm" />

Si abrimos uno de estos paquetes, 238 por ejemplo, vemos las direcciones
IP 181.23.13.1 y 100.12.12.1 en la cabecera IP externa del paquete ESP
son las direcciones IP públicas de los dispositivos en los extremos del
túnel IPSec (en nuestro caso, los routers Administrator y FusionSigma).
Estas direcciones son las que enrutan el tráfico ESP a través de
Internet. Esencialmente, el paquete ESP se encapsula dentro de un
paquete IP normal para poder viajar a través de la red pública. El
router emisor (Administrator) toma el paquete IP original, lo cifra y
autentica con ESP, y luego lo envuelve en un nuevo paquete IP con estas
direcciones IP públicas como origen y destino. El router receptor
(FusionSigma) recibe este paquete externo, lo desencapsula, verifica la
autenticación, descifra el contenido ESP, y luego entrega el paquete IP
original al destino final.

<img src="Pictures/10000001000003A9000003969C8153DD.png"
style="width:6.69cm;height:6.556cm" />

<img src="Pictures/10000001000002BC0000007E59BB83FF.png"
style="width:7.826cm;height:1.51cm" />

<img src="Pictures/10000001000002AC000000630A0DCFDD.png"
style="width:7.733cm;height:1.49cm" />

Con este comando podemos ver todos los paquetes que se han encapsulados
y decapsulados y el Protocolo del túnel:

<img src="Pictures/10000001000002E400000202B88194FB.png"
style="width:7.539cm;height:5.237cm" /><img src="Pictures/10000001000002C1000001D3AFAE4691.png"
style="width:8.133cm;height:5.389cm" />

\*Consulta el
[LINK](https://drive.google.com/file/d/1BPAd0qhF81hJV8uUOBr468s6gVOPSq_p/view?usp=sharing)
para configuraciones.

###### <span id="anchor-13"></span>Contrato de Mantenimiento:

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

Fusionsigma abonará una cuota mensual de 600 € por los servicios de
mantenimiento continuo en línea que proporcionaremos como técnicos. Esto
cubre hasta 20 horas de trabajo remoto por mes. Si no se utilizan todas
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
empresa deberá cubrir una tarifa adicional de emergencia de 200 € para
que me desplace al lugar y solucione la incidencia.

#### <span id="anchor-14"></span>8.Presupuesto de equipos de red.

<table>
<tbody>
<tr>
<td><p>PcCom Essential Bobina Cable de Red RJ45 Cat6 UTP CCA AWG24 hasta
Mbps 100m</p>
<p>(5 unidades)</p></td>
<td><p><strong>Link de compra: </strong><a
href="https://www.pccomponentes.com/pccom-essential-bobina-cable-de-red-rj45-cat6-utp-cca-awg24-hasta-mbps-100m">PcCom
Essential Bobina Cable de Red RJ45 Cat6 UTP CCA AWG24 hasta Mbps 100m |
PcComponentes.com</a> </p>
<p><strong>Precio:</strong>5x35.99=179,95</p></td>
<td><img src="Pictures/100000010000027700000243ADC23AF3.png"
style="width:3.713cm;height:3.406cm" /></td>
</tr>
<tr>
<td><p>Router/Firewall (1 unidad )</p>
<p><strong>Marca</strong>:Cisco ASA5506-SEC-BUN-K9</p></td>
<td><p><strong>Link de compra: </strong><a
href="https://it-planet.com/es/p/cisco-asa5506-sec-bun-k9-12277.html?number=3698873000">Cisco
ASA5506-SEC-BUN-K9 | segunda mano | refurbished | datasheet</a> </p>
<p><strong>Precio:675,00</strong> </p></td>
<td></td>
</tr>
<tr>
<td><p> <span id="anchor-15"></span><strong>Aisens Conector RJ45 8 Hilos
Cat.6 AWG24 100 Unidades</strong></p></td>
<td><p><strong>Link de compra:</strong> <a
href="https://www.pccomponentes.com/aisens-conector-rj45-8-hilos-cat6-awg24-100-unidades">Aisens
Conector RJ45 8 Hilos Cat.6 AWG24 100 Unidades | PcComponentes.com</a>
</p>
<p><strong>Precio: </strong>2x10.99=21,98</p></td>
<td><p><img src="Pictures/100000010000025C0000027C4C11FAF5.png"
style="width:2.725cm;height:2.868cm" /></p></td>
</tr>
<tr>
<td><p><span id="anchor-16"></span>Switch (2 unidades)</p>
<p>Marca: TP-Link TL-SG1024DE Switch 24 Puertos Gigabit</p></td>
<td><p><strong>Link de compra:</strong> <a
href="https://www.pccomponentes.com/tp-link-tl-sg1024de-switch-24-puertos-gigabit">TP-Link
TL-SG1024DE Switch 24 Puertos Gigabit | PcComponentes.com</a> </p>
<p><strong>Precio: </strong>2x100.99=201,98</p></td>
<td><img src="Pictures/10000001000002D20000010B5EA5679D.png"
style="width:4.399cm;height:1.626cm" /></td>
</tr>
<tr>
<td><p>TP-Link EAP610 Punto de Acceso Inalámbrico WiFi 6 AX1800</p>
<p>( 2 unidades)</p></td>
<td><p> <strong>Link de compra:</strong> <a
href="https://www.pccomponentes.com/tp-link-eap610-punto-de-acceso-inalambrico-wifi-6-ax1800">TP-Link
EAP610 Punto de Acceso Inalámbrico WiFi 6 AX1800 | PcComponentes.com</a>
</p>
<p><strong>Precio: </strong>2x91.10=182.</p></td>
<td><p><img src="Pictures/100000010000027B0000025C972DE96C.png"
style="width:3.849cm;height:3.66cm" /></p></td>
</tr>
<tr>
<td><p><span id="anchor-17"></span>Switch PoE (1 unidad)</p>
<p>Marca: TP-Link TL-SF1008P Switch PoE 8 Puertos</p></td>
<td><p>Link de compra: <a
href="https://www.pccomponentes.com/tp-link-tl-sf1008p-switch-poe-8-puertos">Switch
PoE</a></p>
<p>Precio: 45</p></td>
<td><img src="Pictures/10000001000002D7000001417B1D2FEE.png"
style="width:4.399cm;height:1.942cm" /></td>
</tr>
<tr>
<td><p>Panel de parcheo:</p>
<p>( 1 unidad )</p></td>
<td><p>Link de compra: <a
href="https://www.pccomponentes.com/equip-326424-panel-de-parcheo-24-puertos-cat-6"><em>Panel
de parcheo 24 puertos</em></a></p>
<p><em></em></p>
<p><em>Precio: 88.34€</em></p></td>
<td><img src="Pictures/1000000100000282000001532F6126A0.png"
style="width:4.399cm;height:2.321cm" /></td>
</tr>
<tr>
<td><p>Fibra óptica Movistar (1Gbps) y Vodafone (1Gbps)</p>
<p><strong>Link: </strong><a
href="https://www.movistar.es/fibra-optica/fibra-1gb/"><strong>Movistar</strong></a></p>
<p><strong>Link: </strong><a
href="https://oferta.vodafone.es/vodafone-fibra/?cid=377192889:dt-20200101:cp-vdf_tol_continuidad:cn-sem:kw-77859436910644:cc-:cl-no_cliente:sp-Bing:cr-:gk-marca:st-prospecting:ta-base:md-adsl:ds-responsive:pr-2p:wn-tol:pl-/VDF-TOL-Fiber-Def-BASE&amp;msclkid=150c0ada6fb1102687e16d05ba6bf790"><em><strong>Vodafone</strong></em></a></p>
<p><strong>Precio Movistar: </strong>29.90€ /mes</p>
<p>Precio Vodafone: 45€ /mes</p></td>
<td></td>
<td><img src="Pictures/10000001000000D80000004C4C7768D1.png"
style="width:3.584cm;height:1.261cm" /><img
src="Pictures/10000001000000E80000004DF79345DD.png"
style="width:3.803cm;height:1.263cm" /></td>
</tr>
</tbody>
</table>

**TOTAL: 1 394,25€**

**Para comprobar el resto del Hardware pulsa en el** [**Ambito de
Sistemas
Informaticos**](https://drive.google.com/file/d/1W8YYqHJ3scINps-sRE3RS4Ng04g2Hugm/view?usp=sharing).

#### <span id="anchor-18"></span>**9.Esquema lógico de la simulación.**

**

<img src="Pictures/100000010000059D000003096AC31E15.png"
style="width:17cm;height:9.192cm" />**

**

**

#### <span id="anchor-19"></span>**10.Esquema físico de la simulación.**

**

<span id="anchor-20"></span><img src="Pictures/10000001000003FD0000030EE0AE02CD.png"
style="width:15.997cm;height:12.252cm" />

#### <span id="anchor-21"></span>**11.Configuración de switches.**

**

**

<img src="Pictures/1000000100000307000001CF456A7022.png"
style="width:9.013cm;height:5.385cm" /><img src="Pictures/1000000100000303000001D6ECF88052.png"
style="width:8.828cm;height:5.382cm" />**

**

**

**

**

**

**

**

**

**

<img src="Pictures/1000000100000300000001D6FA4B75DF.png"
style="width:9.372cm;height:5.734cm" /><img src="Pictures/100000010000033A000002186DB70000.png"
style="width:8.456cm;height:5.487cm" /> ******

**

<img src="Pictures/10000001000003410000021DDFB7B35B.png"
style="width:9.225cm;height:6.854cm" /><img src="Pictures/10000001000002AF000001ECB1BB4769.png"
style="width:8.849cm;height:6.338cm" /> ******

**

**

**

**

**

**

**

**

**

***E****n Packet** **T****racer Podemos observar configuraciones mas
concretas en los switches:***

**

<img src="Pictures/100000010000054D0000032EEBE54293.png"
style="width:10.178cm;height:6.105cm" />**

**

**

**

**

**

**

**

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
restringir el acceso a un único dispositivo autorizado. Si el
dispositivo conectado cambia (por ejemplo, se reemplaza un ordenador),
la MAC almacenada puede actualizarse automáticamente al detectar una
nueva conexión, siempre que se permita explícitamente, lo que reduce la
gestión manual mientras se mantiene la protección.

Con port-security en FusionSigma, se protegen específicamente los
ordenadores y los dos servidores físicos. Esta medida garantiza que solo
los dispositivos autorizados (aquellos cuya MAC ha sido aprendida
automáticamente por la interfaz) puedan acceder a la red, previniendo
conexiones no autorizadas que podrían comprometer la seguridad de la red
o los datos sensibles gestionados por estos dispositivos.

#### <span id="anchor-22"></span>**12.Configuración y comprobación del Servidor DHCP.**

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

<img src="Pictures/10000001000002D600000122248EF126.png"
style="width:10.8cm;height:4.314cm" />

En esta configuracion asignamos IP 10.13.0.2/24 , el puerto de enlace
10.13.0.1 y el DNS Server que va usar el servicio

Despues editamos el fichero dhcp.conf asignando los vlans:

servidor-dhcp:~# nano /etc/dhcp/dhcpd.conf

<img src="Pictures/100000010000034A00000264FE5A5D77.png"
style="width:14.178cm;height:10.306cm" />

Pool 1 (10.13.0.0) es para los servidores, tanto como físicos con VM\`s

Pool 2 (10.13.1.0) es para todos los trabajadores (portátiles y pc\`s).

Pool 3 (10.13.3.0) es para switches, AP y asignación de administrador.

Pool 6 (10.13.2.0) es reservado para visitantes y clientes que se pueden
conectar en la red de FusionSigma.

Pool para HTTP/HTTPS (10.13.5.0) es unicamente para la simulación,
separando este servidor del restos.

Añadimos la MAC del clientes de la empresa (servidores y equipos de
trabajo,en este caso serán el CTO y un PC de Administrador BD) junto con
la dirección IP fija que queremos asignarles (realmente van a tener IP
asignada por DHCP, pero he puesto la fija para evitar confusión en la
simulación). La configuración será la siguiente:

<img src="Pictures/100000010000018D000000D7E067CF9B.png"
style="width:9.199cm;height:4.981cm" />

\*Durante el trabajo se van asignar IP\`s fijas a los servidores y
clientes necesarios.

Reiniciamos el servidor y verificamos que sigue funcionando sin errores:

*servidor-dhcp:/etc/dhcp# **/etc/init.d/dhcpd** **re****start***

**

***** **• Aquí** **comprábamos el correcto funcionamiento del servicio
DHCP****:***

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

<img src="Pictures/1000000100000403000002FE22D8D3ED.png"
style="width:11.749cm;height:8.763cm" />**

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

Y hacemos la misma prueba desde el Servidor DNS (conectado en el vlan 1
/10.13.0.0)

**

**

**

Desde el Servidor DNS:

<img src="Pictures/10000001000003FF000002BD42806B6B.png"
style="width:13.742cm;height:9.417cm" />**

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
del servidor DHCP. Esto asegura que todos los departamentos de
FusionSigma (como Administradores, contabilidad, RRHH y Seguridad)
puedan obtener direcciones IP dinámicas sin problemas, incluso si están
en VLANs separadas.

#### <span id="anchor-23"></span>**13.Configuración y comprobación del Servidor DNS/AD.**

FusionSigma va usar DNS Forwarder y DNS Primario, porque cada uno hace
algo diferente:

**DNS Forwarder** (para la simulación usare el ISP de mi casa –
192.168.1.1) y en la realidad se va configurar en el router para salida
a internet (Vodafone).

Para que los empleados accedan rápido y seguro a sitios de internet que
necesitan para trabajar (como servicios en la nube).

**DNS Primario** (para fusionsigma.com):

Para controlar su dominio fusionsigma.com y que sus servicios (como el
SFTP o paneles para clientes) sean fáciles de encontrar con nombres en
lugar de IPs.

Juntos, hacen que FusionSigma funcione mejor: los empleados acceden
rápido a internet con el forwarder, y los servicios propios (como el
SFTP) son fáciles de usar con el primario.

Abrimos Windows PowerShell e introducimos:

PS C:\Users\Administrador\> Install-WindowsFeature -Name DNS
-IncludeManagementTools

Y como resultado devuelve:

<img src="Pictures/100000010000024F000000342D54F7BF.png"
style="width:15.639cm;height:1.376cm" />

Se ha instalado con éxito el servidor DNS en Windows Server 2016 (en
realidad se va usar Windows Server 2022).

Ejecutamos con Windows+R para configurar el DNS como Forwarder:

<img src="Pictures/10000001000001A5000000F03ED7AAF8.png"
style="width:7.745cm;height:4.415cm" /><img src="Pictures/1000000100000179000000DE294E834B.png"
style="width:7.751cm;height:4.563cm" />

Hacemos clic en “Reenviadores”, “Editar…” e introducimos la dirección IP
del servidor DNS Forwarder que sera el router de salida a Internet
(Vodafone).

Para la simulación estaré usando el de mi casa:

<img src="Pictures/100000010000027E000001E2BE44D023.png"
style="width:9.211cm;height:6.959cm" />

Activamos el registro de depuración DNS ofrece:\
\
Ver tráfico DNS: El registro muestra la actividad del servidor.\
Solucionar errores: Ayuda a identificar problemas en la búsqueda de
nombres.\
Control de registro: Permite elegir ubicación y nombre del archivo.

\*Estas opciones consumen recursos con lo que se van usar solo para
determinados servicios o para resolver problemas, no de manera habitual.

<img src="Pictures/100000010000024B00000204532E0AF3.png"
style="width:7.923cm;height:6.966cm" />

Para que funciona como DNS Primario ,cambiamos la configuración:

<img src="Pictures/10000001000001ED000001886F56B777.png"
style="width:7.107cm;height:5.652cm" />
<img src="Pictures/10000001000001ED0000017FD3984326.png"
style="width:7.049cm;height:5.475cm" />

<img src="Pictures/10000001000001E8000001895D447C12.png"
style="width:7.304cm;height:5.883cm" /><img src="Pictures/10000001000001E90000018920283533.png"
style="width:7.437cm;height:5.976cm" />

<img src="Pictures/10000001000002ED00000126036553D2.png"
style="width:9.964cm;height:3.911cm" /><img src="Pictures/1000000100000125000000ED7FADB6E1.png"
style="width:4.819cm;height:3.898cm" />

Añadimos un registro A

Para añadir un registro A seleccionamos la zona de búsqueda directa
“fusionsigma.local” y hacemos clic en “Host nuevo (A o AAAA)…”.

El registro A es la corresopondencia de un FQDN con una dirección IP.

<img src="Pictures/1000000100000403000002FB690D1E49.png"
style="width:8.553cm;height:6.354cm" /><img src="Pictures/100000010000022C000001B772EE5CD5.png"
style="width:8.162cm;height:6.443cm" />

Una vez configurado el Servidor DNS comprobamos el correcto
funcionamiento con dominios externos y internos:

<img src="Pictures/10000001000001F7000000C52F740778.png"
style="width:8.038cm;height:3.149cm" />
<img src="Pictures/1000000100000212000000D819BAB280.png"
style="width:8.165cm;height:3.327cm" />

Si abrimos los logs podemos observar el correcto funcionamiento del DNS
tanto como Primario, como Forewarder:

<img src="Pictures/10000001000003FE000003032E7C368E.png"
style="width:6.167cm;height:4.651cm" />

<img src="Pictures/10000001000002FA000000B4E9098217.png"
style="width:9.698cm;height:2.291cm" />

#### <span id="anchor-24"></span>**14.Configuración y comprobación del Servidor Proxy no transparente.**

Instalación de servidor proxy con el comando:

sudo apt install squid

Y comprobamos su funcionamiento y el puerto en el que escucha con
**netstat -app \| grep squid**:

<img src="Pictures/10000001000002DC000000F5FE1C08D4.png"
style="width:10.679cm;height:3.574cm" />

Entramos al archivo de configuración desde terminal de servidor y
ejecutamos este comando **/etc/squid/squid.conf .**

• Añadimos la siguiente configuración :

<img src="Pictures/1000000100000333000002003ED42C06.png"
style="width:11.299cm;height:7.064cm" />

\*Dentro del archivo **/etc/squid/prohibido** añadimos todos los
dominios de los sitios web que la empresa quiere bloquear:

<img src="Pictures/1000000100000326000000E7C24770F3.png"
style="width:12.407cm;height:3.556cm" />

Y recargamos con **service squid reload.**

<img src="Pictures/10000001000001F40000005E4B4B552A.png"
style="width:9.368cm;height:1.762cm" />

En todos los puestos de trabajo configuramos el uso del servidor proxy
en la siguiente manera:

<img src="Pictures/10000001000003F700000303307E48D2.png"
style="width:7.779cm;height:5.909cm" />

Y comprobamos el Proxy desde el mismo PC que estamos haciendo la prueba:

<img src="Pictures/10000001000003F5000002FF7E93A8C2.png"
style="width:10.305cm;height:7.802cm" />

Podemos observar que el error que nos da viene es del servidor Proxy
(fatme-VirtualBox).

Por otro lado, se permite el acceso a páginas y sitios web que no están
especificados en el archivo de "sitios prohibidos".

<img src="Pictures/10000001000003F2000002FC737BF2CF.png"
style="width:8.184cm;height:6.191cm" /><img src="Pictures/10000001000003F80000030105D71D79.png"
style="width:8.066cm;height:6.105cm" />

#### <span id="anchor-25"></span>**15.Configuración y comprobación del Servidor Radius.**

Una vez instalada la maquina virtual ( Usare Ubuntu 20.04 para la
simulación) hacemos la actualización de paquetes y descargamos
freeradius con los siguientes comandos:

sudo apt update

sudo apt install freeradius freeradius-mysql

Y con **systemctl status freeradius** comprobamos si se ha descargado
correctamente y si está activo:

<img src="Pictures/10000001000002DB00000136FAC800B8.png"
style="width:9.387cm;height:3.981cm" />

Y verificamos los puertos en lo que esta escuchando:

<img src="Pictures/100000010000023A00000125CF7F3BDA.png"
style="width:8.285cm;height:4.258cm" />

Con el comando **nano /etc/freeradius/3.0/clients.conf** configuramos el
fichero y añadimos los clientes (puntos de acceso) de la empresa
FusionSigma con sus IP\`s y contraseñas.

\*Para probar el servicio de Radius, se he hecho por separado a la
simulación principal, usando mi portátil como servidor Radius (IP:
192.168.0.101) y una AP real (IP: 192.168.0.1).

<img src="Pictures/10000001000002A00000027119898E38.png"
style="width:5.622cm;height:5.228cm" /><img src="Pictures/1000000100000208000001B656A62036.png"
style="width:6.14cm;height:5.173cm" />

\*En caso real los IP\`s de los AP\`s seran 10.13.3.10 y 10.13.3.20.

Añadimos las configuraciones para los usuarios de la empresa, utilizando
los datos de los empleados registrados en la base de datos. El nombre de
usuario será el nombre del empleado y la contraseña será su apellido,
ademas añadimos para los visitantes y clientes de la empresa el nombre
para conexión a los AP\`s **“user”** con la contraseña
**“Fusionsigma2025”**:

\*Cada “nombre” y “contraseña” corresponde al trabajador real de la
empresa:

<img src="Pictures/1000000100000583000000F9227B45C4.png"
style="width:17cm;height:2.999cm" />

<span id="anchor-26"></span>

Para la simulación estoy configurando mi portátil como servidor, dándole
la IP correspondiente:

#### 

#### 

<img src="Pictures/10000001000001EA0000023BC4180AEA.png"
style="width:5.56cm;height:6.479cm" />

Posteriormente, configuramos el cliente del servidor RADIUS, que en este
caso será un punto de acceso TP-Link. Asignamos el nombre de la red
(SSID) "fusionsigma2025", con seguridad WPA/WPA2 Enterprise, y
especificamos la IP del servidor RADIUS previamente configurada
(192.168.0.101) junto con el puerto del servicio (1812).

<img src="Pictures/10000001000005010000031BE3C19CCF.png"
style="width:9.336cm;height:5.794cm" />

Finalmente, creamos manualmente la nueva red desde "Redes e Internet",
especificando el nombre, el tipo de seguridad y configurando la conexión
para que se inicie automáticamente. Una vez creada, en "Propiedades" \>
"Seguridad" \> "Configuración avanzada", habilitamos el inicio de sesión
único en esta red, configurándolo para que se realice inmediatamente
después de que el usuario inicie sesión.

<img src="Pictures/10000001000001E7000002BE82BAED4F.png"
style="width:4.759cm;height:6.86cm" />

<img src="Pictures/10000001000002BD0000024314EF0BE4.png"
style="width:7.546cm;height:6.232cm" />

Verificamos que la red "Fusionsigma2025" aparece correctamente en la
lista de conexiones inalámbricas disponibles. Al conectar mi teléfono
personal al punto de acceso TP-Link, el servidor DHCP asigna
automáticamente la dirección IP 192.168.0.100, confirmando el
funcionamiento correcto de la configuración.

<img src="Pictures/10000001000001E000000198A6BA86DC.png"
style="width:6.151cm;height:5.228cm" /><img src="Pictures/100000010000050C0000030A89E6F6AB.png"
style="width:9.043cm;height:5.445cm" />

De esta manera, todos los nombres de usuario con sus respectivas
contraseñas, configurados en el servidor, tienen acceso autorizado.

<img src="Pictures/1000000000000399000008006240FB55.jpg"
style="width:3.844cm;height:8.546cm" /><img src="Pictures/100000000000039900000800BBE1994E.jpg"
style="width:3.803cm;height:8.454cm" /><img src="Pictures/100000000000039900000800D84E0FE7.jpg"
style="width:3.803cm;height:8.456cm" /><img src="Pictures/10000000000003990000080083FB3F87.jpg"
style="width:3.868cm;height:8.602cm" />

Al realizar un debug del servidor RADIUS, se observa claramente la
autenticación del usuario "Fatme" a través del cliente 192.168.0.1
(punto de acceso TP-Link). El proceso incluye el envío de la clave
encriptada (MS-MPPE-Recv-Key y MS-MPPE-Send-Key), confirmando la
correcta asignación y seguridad de la contraseña mediante WPA/WPA2
Enterprise.

<img src="Pictures/100000010000035E000000F7CE8176CB.png"
style="width:9.611cm;height:2.753cm" />

#### <span id="anchor-27"></span>**16.Configuración y comprobación del Servidor HTTP/HTTPS / BBDD / FSTP .**

En esta misma maquina virtual se van a instalar estos tres servicios (en
Windows Server 2022).

\*Para la simulación estoy usando Windows Server 2022.

###### <span id="anchor-28"></span>a) HTTP/HTTPS (Servidor Web)

###### <img src="Pictures/100000010000034A00000264E2888E6F.png"
style="width:8.426cm;height:6.126cm" />

###### <span id="anchor-29"></span>

<span id="anchor-30"></span>Se ha asignado un pool separado en el
servido dhcp para la asignasion del servidor web.

Configuración en Windows Server 2022:

Usaremos IIS (Internet Information Services) para alojar el sitio web.

Instalación de IIS:

-Abrimos "Server Manager" \> "Manage" \> "Add Roles and Features".

-Seleccionamos "Role-based or feature-based installation" y elegimos
nuestro servidor.

-En "Server Roles", marcamos "Web Server (IIS)" y hacemos clic en "Next"
hasta instalar.

-Nos asegúramos de incluir el módulo "HTTP" y "HTTPS".

<img src="Pictures/100000010000021E0000021D292C4944.png"
style="width:5.733cm;height:5.722cm" />

Configuración HTTP:

-Abrimos "IIS Manager" (buscamos "inetmgr" en el menú de inicio).

-En el panel izquierdo, selecciona tu servidor y haz clic en "Sites".

-Hacemos clic en "Add Website":

-Ponemos el nombre: "FusionSigma".

-Physical Path: Creamos una carpeta (C:\inetpub\fusionsigma) y colocamos
ahí los archivos de nuestro sitio.

-Binding: Puerto 80, IP 10.13.5.100.

-Iniciamos el sitio y verificamos que sea accesible desde un navegador
(http://10.13.5.100).

<img src="Pictures/10000001000003CD0000033F252460F3.png"
style="width:7.288cm;height:6.225cm" /><img src="Pictures/1000000100000402000002BD7D696392.png"
style="width:9.37cm;height:6.403cm" />

Configuración HTTPS:

-Obtenemos un certificado SSL (vamos usar uno autofirmado para la
simulación):

<img src="Pictures/10000001000002B90000028D35461C7B.png"
style="width:7.264cm;height:6.701cm" />

<img src="Pictures/100000010000039B00000184042421A4.png"
style="width:8.692cm;height:4.861cm" />

-En IIS Manager, seleccionamos el servidor y hacemos clic en "Server
Certificates".

-Creamos un certificado autofirmado o (en caso real) importamos uno
válido.

<img src="Pictures/10000001000002EB000000EEAEC9B203.png"
style="width:7.92cm;height:2.524cm" />

-Volvemos a "Sites" y seleccionamos "FusionSigma", después hacemos clic
en "Bindings".

-Agregamos un binding para HTTPS (puerto 443), seleccionando el
certificado SSL.

-Reinicia el sitio y hacemos la prueba
([https://10.13.5.100](https://10.13.5.100/)).

\*Importante tener en cuenta los permisos en Firewall:

<img src="Pictures/10000001000003230000019D8D0C03B7.png"
style="width:9.723cm;height:5.001cm" />

Saltamos los avisos por seguridad y podemos ver que la aplicación esta
funcionando con el se servidor HTTPS y su FQDN. Con “nslookup”
observamos que el nombre de dominio corresponde con la IP del servidor
HTTPS y el servidor DNS que traduce este nombre es el 10.13.0.100.

<img src="Pictures/10000001000003F8000002F85B599EF7.png"
style="width:11.956cm;height:8.943cm" />

###### 

###### 

###### 

###### 

###### 

###### 

Y hacemos una prueba desde le servidor DNS:

<img src="Pictures/10000001000003F3000002FBE5AF1751.png"
style="width:11.545cm;height:8.712cm" />

###### <span id="anchor-31"></span>b) BBDD

La base de datos (BBDD) de FusionSigma almacenan los datos dinámicos del
sitio web en esta misma máquina (10.13.0.10) y se va conectar con el
servidor web para procesar solicitudes (insertar nuevas tareas para
administradores,administrar clientes y etc.).

Inicio de MySQL:

-Abrimos el panel de control de XAMPP (C:\xampp\xampp-control.exe).

-Iniciamos el módulo de MySQL.

-MySQL usará el puerto 3306 por defecto.

<img src="Pictures/10000001000003430000020021A45B8D.png"
style="width:9.47cm;height:5.807cm" />

Configurar los Bases de Datos:

-Accedemos a phpMyAdmin (incluido en XAMPP) abriendo un navegador y
yendo a http://localhost/phpmyadmin.

-Creamos una nueva base de datos (fusionsigma).

-Crea tablas según las necesitamos (en nuestro caso tenemos 4 tablas
creadas).

<img src="Pictures/10000001000006C1000001D382386524.png"
style="width:13.869cm;height:3.745cm" />

-Configuramos un usuario de MySQL con permisos:

<img src="Pictures/100000010000038E000002DDC307E12D.png"
style="width:8.02cm;height:6.459cm" />

Conectamos el Sitio Web con la BBDD:

-Nos aseguramos de que el sitio web (en IIS) tenga un backend (PHP, que
viene con XAMPP).

-Copiamos la carpeta C:\xampp\php a C:\php y agrega C:\php a las
variables de entorno (PATH).

Y si todo esta bien nos debería salir la pagina:

<img src="Pictures/100000010000074B000003C6307A1FA2.png"
style="width:14.344cm;height:7.421cm" />

###### <span id="anchor-32"></span>c) SFTP

Usaremos SFTP (Secure File Transfer Protocol) en FusionSigma para
transferir archivos de forma segura, con cifrado SSH. Además, es fácil
de configurar y usa un solo puerto (22), simplificando la gestión de
firewalls.

1.Descargamos Open SSH para nuestro sistema operativo (en este caso
Windows Server 2016).

<img src="Pictures/10000001000003FA000002FF545B9833.png"
style="width:8.855cm;height:6.671cm" />

2.Los descomprimimos (yo le he renombrado como OpenSSH) y lo movemos en
“Archivos de programa” que se encuentra en (C:).

<img src="Pictures/100000010000031C000001C27BFF9E02.png"
style="width:9.622cm;height:5.44cm" />

3.Para instalarlo ejecutamos el script a través de powershell con el
siguiente comando:

<img src="Pictures/10000001000003C800000129AB82E729.png"
style="width:14.005cm;height:4.295cm" />

4.Se arranca el servicio:

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

<span id="anchor-33"></span>6.Habilitamos el servicio con su puerto
creando un “FirewallRule”:

<img src="Pictures/10000001000003F7000001D84BE10A40.png"
style="width:12.506cm;height:5.814cm" />

###### 

###### 

###### 

Y lo automatizamos:

<img src="Pictures/100000010000023A000000262A3C4D89.png"
style="width:12.584cm;height:0.84cm" />

<span id="anchor-34"></span>Creando también un usuarios o varios para el
servicio:

###### <img src="Pictures/100000010000022F0000005B1476B17C.png"
style="width:12.98cm;height:2.113cm" />

7.Editar el fichero “sshd_config_default” ubicado en
“C:\ProgramData\SSH\\ y verificar que la siguiente línea está
descomentada.

<img src="Pictures/10000001000002F0000001FEBD90BC5F.png"
style="width:10.164cm;height:6.893cm" />

Para la prueba he creado una carpeta “fisionsigma” y he asignado todos
los permisos para el administrador que hemos creado el usuario
anteriormente en Open SSH “FusionSigma2”:

<img src="Pictures/10000001000002F30000020009BD73C3.png"
style="width:10.894cm;height:7.387cm" />

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

\*Los permisos de las carpetas, tanto en este servidor como en el Active
Directory (AD), se asignarán según las necesidades específicas de la
empresa.

<img src="Pictures/10000001000005420000036414824019.png"
style="width:11.841cm;height:7.636cm" />

Podemos observar que se puede abrir la carpeta de fusionsigma y si
abrimos el archivo de tarea.php la podemos modificar:

<img src="Pictures/100000010000053E0000035D75AF1B03.png"
style="width:8.426cm;height:5.406cm" /><img src="Pictures/100000010000055A0000035DC2E0B95C.png"
style="width:8.072cm;height:5.073cm" />

#### 

#### <span id="anchor-35"></span>17.Port Security y Port Mirroring en Packet Tracer

###### <span id="anchor-36"></span>a) Port Security

<img src="Pictures/100000010000047400000253C2FADD1C.png"
style="width:12.31cm;height:5.766cm" />

\*Implementaré port security con una MAC permitida en los switches de
Fusionsigma para garantizar que solo los dispositivos autorizados se
conecten, evitando accesos no deseados y reforzando la seguridad de la
red. Las pruebas realizadas, junto con los errores encontrados y sus
soluciones, tienen como objetivo documentar los problemas y las
resoluciones aplicadas en esta etapa, sirviendo como material de
capacitación técnica.

Port Security limitara las direcciones MAC permitidas en un puerto para
evitar accesos no autorizados. Lo configuraremos en los puertos de
acceso clave para proteger dispositivos sensibles. En realidad se va
configurar para todos los servidores físicos y estaciones de
trabajo,pero para la simulación he dejado el portátil del CEO, dos
administradores de BD y el servidor físico.

Hacemos la prueba con el servidor DHCP y el portatil CEO.

DHCP : 10.13.0.3/24

CEO: 10.13.1.3/24

<img src="Pictures/10000001000006AA000003498D850B1C.png"
style="width:15.815cm;height:6.872cm" />

Una vez configurado Port Security en los switches hacemos la prueba con
el portátil de CEO configurado en Switch1:

<img src="Pictures/10000001000003630000030F31C28575.png"
style="width:8.939cm;height:8.073cm" />

Para hacer la prueba cambio el portátil con otro, asignando la misma IP
y se puede ver que no puede hacer ping ,aunque esta conectado en el
mismo puerto con la misma IP, ya que el switch ya había guardado la MAC:

<img src="Pictures/10000001000003E700000224DCC5CCDC.png"
style="width:9.045cm;height:4.96cm" />

\*Problemas encontrados:

<img src="Pictures/100000010000030200000208C850FE55.png"
style="width:9.005cm;height:6.082cm" />

00E0.F9AC.E2C5

0007.ECE3.D610

0010.113A.388B

Esto indica que, a pesar de maximum 1, el puerto está registrando más
direcciones MAC.

Resolución de problema:

Falta de modo "sticky": No he usado **switchport port-security
mac-address sticky**, lo que significa que el switch no está fijando la
primera dirección MAC que aprende. En su lugar, está aprendiendo
dinámicamente nuevas direcciones MAC, lo que puede causar que se
registren más direcciones de las permitidas.

<img src="Pictures/100000010000043D000002494A2CE0CE.png"
style="width:9.89cm;height:5.332cm" />

Ahora de nuevo probemos con diferente portátil:

<img src="Pictures/100000010000029C000000E473E4AD00.png"
style="width:6.742cm;height:2.302cm" />Este vez ha guardado la MAC como
Type: SecureSticky.

<img src="Pictures/1000000100000461000002DFACD28C38.png"
style="width:11.31cm;height:7.415cm" />

Y después de un par de intentos, es importante tener en cuenta que los
comandos están en orden,porque si no ,no funciona.

Se puede observar que ya funciona el Port Security:

<img src="Pictures/10000001000002A10000021EE82F0E65.png"
style="width:7.412cm;height:5.969cm" />

Como el Mac,que sale en la configuración se ha asignado automáticamente:

<img src="Pictures/10000001000001ED0000008EE6FBF551.png"
style="width:7.795cm;height:2.245cm" />

###### <span id="anchor-37"></span>b) Port Mirroring 

SPAN configuración:

Utilizaré el servidor como "Source" para monitorear el tráfico con la IP
10.13.0.3/24, que había sido asignada previamente, y un portátil como
"Destination", conectado al puerto Fa0/6 de Sw1 con la IP 10.13.1.6/24.
Realizamos las configuraciones necesarias en el switch para la interfaz
Fa0/6.

<img src="Pictures/10000001000002090000010EABDC7708.png"
style="width:5.913cm;height:3.064cm" />

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

<img src="Pictures/100000010000016B0000025D26130AA4.png"
style="width:4.195cm;height:6.994cm" />

Para ver un monitoreo, cambio el portátil con un Sniffer, en el mismo
puerto ( el sniffer es el “destination” ahora) y filtramos los paquetes
del ISMP:

<img src="Pictures/100000010000052A0000025E48E4FA61.png"
style="width:10.391cm;height:4.764cm" />

Y hacemos ping desde le Source a R1:

Se puede observar como el Sniffer ha capturado el trafico desde El
servidor al R1.

<img src="Pictures/1000000100000354000002C22D6FBFC8.png"
style="width:8.895cm;height:7.37cm" /><img src="Pictures/100000010000021300000340A7DCD1D9.png"
style="width:5.417cm;height:8.488cm" />

#### <span id="anchor-38"></span>18.Manual Intermedio de la Red del FUsionSigma

Este manual está diseñado para que los trabajadores puedan resolver
problemas básicos que puedan surgir en la red local.

\*Para consultar el manual haz clic en el
[LINK](https://drive.google.com/file/d/1IJvtE1kzFXvgf1a29IE8D0hKSFuyZO7R/view?usp=sharing).

#### <span id="anchor-39"></span>19. Webgrafia

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

#### <span id="anchor-40"></span>20.Alta disponibilidad

Configurar HSRP en R2 y R3 en la simulación de Fusionsigma es una medida
importante para asegurar la robustez y la continuidad operativa de la
red local. Garantiza que la pérdida de uno de los routers no interrumpa
la conectividad de los dispositivos en esa red, contribuyendo a una
infraestructura de Fusionsigma más confiable.

<span id="anchor-41"></span>La prioridad HSRP se puede utilizar para
determinar el router activo. El router con la prioridad HSRP más alta
será el router activo. De manera predeterminada, la prioridad HSRP es
100. Si las prioridades son iguales, el router con la dirección IPv4
numéricamente más alta es elegido como router activo.

<img src="Pictures/10000001000005FC000002C84A41D92B.png"
style="width:15.923cm;height:7.398cm" />

Configuraciones de HSRP / Hot Standby Router Protocol (Protocolo de
Router en Espera Activa):

R2 / Vodafone

*interface FastEthernet0/0.4*

**

*standby version 2*

*standby 1 ip 10.13.4.10*

*standby 1 priority 110*

*standby 1 preempt*

**

R3 / Movistar

*interface FastEthernet0/0.4*

**

*standby version 2*

*standby 1 ip 10.13.4.20*

*standby 1 priority 100*

*standby 1 preempt*

**El R**2(Vodafone)* *se configuró con la prioridad de HSRP de 1**1**0
mientras que el R**3(Movistar)* *tiene la prioridad de HSRP
predeterminada de 100. El intento de prioridad está habilitado en el
R**2**. Con una prioridad más alta, el R**2* *es el router activo y el
R**3* *es el router de reserva. Debido a un corte de energía que solo
afecta al R**2**, el router activo ya no está disponible y el router de
reserva R**3* *asume el rol de router activo. Después de que se restaura
la energía, el R**2* *vuelve a estar en línea. Dado que R**2* *tiene una
prioridad más alta y el intento de prioridad se encuentra habilitado,
forzará un nuevo proceso de elección. R**2* *reanudará su rol de router
activo y el R**3* *volverá al rol de router de reserva.**

#### <span id="anchor-42"></span><img src="Pictures/10000001000002400000014AC4594C2A.png"
style="width:8.916cm;height:5.108cm" /><img src="Pictures/100000010000025400000149BF0936DC.png"
style="width:9.243cm;height:5.103cm" /> 

Para verificar el correcto funcionamiento, apagaremos el R2(Vodafone) y
con el comando **show standby brief** o **show standby** en el router
que estaba en standby (R3).

<img src="Pictures/100000010000038F000001DCCB25F39E.png"
style="width:12.211cm;height:6.38cm" />

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

#### <span id="anchor-43"></span>21.Configuraciones de R1, R2 y R3.

R1:

Firewall#sh run

Building configuration...

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

Building configuration...

Current configuration : 1567 bytes

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

default-information originate

!

ip forward-protocol nd

!

no ip http server

no ip http secure-server

ip nat inside source list 1 interface FastEthernet0/1 overload

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

password fusionsigma

login

!

end

R3/Movistar:

Movistar#sh run

Building configuration...

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

###### <span id="anchor-44"></span>FIN
