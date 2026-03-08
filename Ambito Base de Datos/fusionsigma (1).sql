-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2025 a las 14:08:47
-- Versión del servidor: 10.4.32-MariaDB-log
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fusionsigma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ClienteID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Pais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ClienteID`, `Nombre`, `Email`, `Telefono`, `Direccion`, `Pais`) VALUES
(1, 'TechSolutions S.A.', 'contacto@techsolutions.com', '+34 912 345 678', 'Calle Mayor 123, Madrid', 'España'),
(2, 'InnovaPYME', 'info@innovapyme.com', '+34 934 567 890', 'Avenida Diagonal 456, Barcelona', 'España'),
(3, 'DigitalGrow', 'soporte@digitalgrow.com', '+34 915 678 901', 'Plaza España 789, Valencia', 'España'),
(4, 'EcoSoft', 'ventas@ecosoft.com', '+34 910 123 456', 'Calle Gran Vía 321, Bilbao', 'España'),
(5, 'SmartRetail', 'admin@smartretail.com', '+34 911 234 567', 'Paseo de la Castellana 654, Madrid', 'España'),
(6, 'GreenTech Solutions', 'info@greentechsolutions.com', '+34 912 987 654', 'Calle de la Paz 12, Sevilla', 'España'),
(7, 'OptiLogistics', 'contacto@optilogistics.com', '+34 933 456 789', 'Ronda de Sant Pere 45, Barcelona', 'España'),
(8, 'MediCare Systems', 'soporte@medicaresystems.com', '+34 914 567 890', 'Calle Alcalá 78, Madrid', 'España'),
(9, 'EducaDigital', 'ventas@educadigital.com', '+34 910 987 654', 'Avenida de la Constitución 23, Granada', 'España'),
(10, 'AgroInnovate', 'admin@agroinnovate.com', '+34 911 876 543', 'Calle Real 56, Málaga', 'España'),
(11, 'SmartEnergy', 'info@smartenergy.com', '+34 912 654 321', 'Paseo del Prado 89, Madrid', 'España'),
(12, 'RetailPro', 'contacto@retailpro.com', '+34 934 876 543', 'Calle Balmes 101, Barcelona', 'España'),
(13, 'HealthTech Innovations', 'soporte@healthtech.com', '+34 915 432 109', 'Plaza de la Independencia 34, Valencia', 'España'),
(14, 'EcoBuild', 'ventas@ecobuild.com', '+34 910 345 678', 'Calle Euskadi 67, Bilbao', 'España'),
(15, 'TechConsulting', 'admin@techconsulting.com', '+34 911 567 890', 'Avenida de América 90, Madrid', 'España'),
(16, 'FoodChain Solutions', 'info@foodchainsolutions.com', '+34 912 123 456', 'Calle de la Libertad 22, Zaragoza', 'España'),
(17, 'TravelEasy', 'contacto@traveleasy.com', '+34 933 789 012', 'Paseo de Gracia 33, Barcelona', 'España'),
(18, 'FinTech Advisors', 'soporte@fintechadvisors.com', '+34 914 321 098', 'Calle Serrano 44, Madrid', 'España'),
(19, 'GreenFarm', 'ventas@greenfarm.com', '+34 910 654 321', 'Avenida de Andalucía 55, Córdoba', 'España'),
(20, 'SmartLogistics', 'admin@smartlogistics.com', '+34 911 789 012', 'Calle de la Marina 66, Alicante', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `EmpleadoID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`EmpleadoID`, `Nombre`, `Apellido`, `Email`, `Rol`) VALUES
(1, 'Alejandro', 'Gómez', 'alejandro.gomez@fusionsigma.com', 'CEO'),
(2, 'María', 'López', 'maria.lopez@fusionsigma.com', 'CTO'),
(3, 'Carlos', 'Rodríguez', 'carlos.rodriguez@fusionsigma.com', 'Desarrollador Web'),
(4, 'Sofía', 'Martínez', 'sofia.martinez@fusionsigma.com', 'Administrador de Bases de Datos'),
(5, 'Juan', 'Pérez', 'juan.perez@fusionsigma.com', 'Administrador de Bases de Datos'),
(6, 'Ana', 'García', 'ana.garcia@fusionsigma.com', 'Administrador de Bases de Datos'),
(7, 'Pedro', 'Sánchez', 'pedro.sanchez@fusionsigma.com', 'Administrador de Bases de Datos'),
(8, 'Laura', 'Fernández', 'laura.fernandez@fusionsigma.com', 'Administrador de Bases de Datos'),
(9, 'Diego', 'Ramírez', 'diego.ramirez@fusionsigma.com', 'Administrador de Bases de Datos'),
(10, 'Elena', 'Torres', 'elena.torres@fusionsigma.com', 'Administrador de Bases de Datos'),
(11, 'Miguel', 'Díaz', 'miguel.diaz@fusionsigma.com', 'Administrador de Bases de Datos'),
(12, 'Carmen', 'Ruiz', 'carmen.ruiz@fusionsigma.com', 'Administrador de Bases de Datos'),
(13, 'Javier', 'Moreno', 'javier.moreno@fusionsigma.com', 'Administrador de Bases de Datos'),
(14, 'Lucía', 'Jiménez', 'lucia.jimenez@fusionsigma.com', 'Administrador de Bases de Datos'),
(15, 'Pablo', 'Álvarez', 'pablo.alvarez@fusionsigma.com', 'Administrador de Bases de Datos'),
(16, 'Marta', 'Romero', 'marta.romero@fusionsigma.com', 'Administrador de Bases de Datos'),
(17, 'Andrés', 'Herrera', 'andres.herrera@fusionsigma.com', 'Administrador de Bases de Datos'),
(18, 'Clara', 'Molina', 'clara.molina@fusionsigma.com', 'Administrador de Bases de Datos'),
(19, 'Raúl', 'Castro', 'raul.castro@fusionsigma.com', 'Especialista en Seguridad Informática'),
(20, 'Isabel', 'Ortega', 'isabel.ortega@fusionsigma.com', 'Responsable de Marketing y Ventas'),
(21, 'Víctor', 'Reyes', 'victor.reyes@fusionsigma.com', 'Encargado de Recursos Humanos'),
(22, 'Natalia', 'Vega', 'natalia.vega@fusionsigma.com', 'Miembro de Contabilidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `ProyectoID` int(11) NOT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `CLIENTE_ClienteID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`ProyectoID`, `Descripcion`, `FechaInicio`, `FechaFin`, `CLIENTE_ClienteID`) VALUES
(1, 'Sistema de Gestión ERP: Implementación de un sistema ERP para optimizar procesos internos.', '2025-01-15', '2025-06-30', 1),
(2, 'Plataforma E-commerce: Desarrollo de una plataforma de comercio electrónico personalizada.', '2025-02-01', '2025-08-15', 2),
(3, 'Migración a la Nube: Migración de datos y aplicaciones a un entorno en la nube.', '2025-03-01', NULL, 3),
(4, 'App de Gestión de Inventarios: Desarrollo de una app para gestionar inventarios en tiempo real.', '2025-01-20', '2025-07-10', 4),
(5, 'Sistema de Reservas Online: Implementación de un sistema de reservas para tiendas minoristas.', '2025-02-15', '2025-09-30', 5),
(6, 'Optimización de Energía: Solución para monitorear y optimizar el consumo energético.', '2025-03-10', NULL, 6),
(7, 'Plataforma de Logística: Desarrollo de una plataforma para gestionar envíos y rutas.', '2025-04-01', '2025-10-15', 7),
(8, 'Sistema de Telemedicina: Implementación de un sistema para consultas médicas online.', '2025-02-20', '2025-08-20', 8),
(9, 'Plataforma Educativa: Desarrollo de una plataforma de aprendizaje en línea.', '2025-03-15', NULL, 9),
(10, 'App de Gestión Agrícola: Solución para monitorear cultivos y optimizar recursos.', '2025-01-25', '2025-07-25', 10),
(11, 'Sistema de Energía Inteligente: Implementación de un sistema para gestionar energía renovable.', '2025-04-05', '2025-11-30', 11),
(12, 'Portal de Ventas: Desarrollo de un portal para ventas mayoristas.', '2025-02-10', '2025-09-10', 12),
(13, 'App de Salud Digital: Solución para gestionar citas y registros médicos.', '2025-03-20', NULL, 13),
(14, 'Sistema de Gestión de Obras: Plataforma para gestionar proyectos de construcción.', '2025-01-30', '2025-06-30', 14),
(15, 'Consultoría Tecnológica: Asesoría para implementar soluciones tecnológicas.', '2025-04-10', '2025-12-15', 15),
(16, 'Sistema de Trazabilidad: Solución para rastrear productos en la cadena de suministro.', '2025-02-25', '2025-08-25', 16),
(17, 'Plataforma de Reservas de Viajes: Desarrollo de un sistema para reservas de viajes.', '2025-03-25', NULL, 17),
(18, 'Sistema de Gestión Financiera: Implementación de un sistema para gestionar finanzas.', '2025-01-10', '2025-07-10', 18),
(19, 'App de Agricultura Sostenible: Solución para promover prácticas agrícolas sostenibles.', '2025-04-15', '2025-10-30', 19),
(20, 'Plataforma de Logística Inteligente: Desarrollo de una plataforma para optimizar logística.', '2025-02-05', '2025-09-05', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `TareaID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `PROYECTO_ProyectoID` int(11) NOT NULL,
  `EMPLEADO_EmpleadoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`TareaID`, `Nombre`, `Descripcion`, `FechaInicio`, `FechaFin`, `Estado`, `PROYECTO_ProyectoID`, `EMPLEADO_EmpleadoID`) VALUES
(1, 'Diseño de Base de Datos', 'Diseñar la estructura de la base de datos para el ERP.', '2025-01-15', '2025-02-15', 'Completada', 1, 4),
(2, 'Desarrollo del Frontend', 'Crear la interfaz de usuario para la plataforma.', '2025-02-01', '2025-04-01', 'En Progreso', 2, 3),
(3, 'Análisis de Datos', 'Analizar los datos a migrar a la nube.', '2025-03-01', '2025-03-20', 'Completada', 3, 5),
(4, 'Configuración de Base de Datos', 'Configurar la base de datos para la app.', '2025-01-20', '2025-02-20', 'Completada', 4, 6),
(5, 'Desarrollo del Backend', 'Implementar la lógica del sistema de reservas.', '2025-02-15', '2025-04-15', 'En Progreso', 5, 7),
(6, 'Análisis de Consumo', 'Analizar patrones de consumo energético.', '2025-03-10', '2025-04-10', 'En Progreso', 6, 8),
(7, 'Diseño de Rutas', 'Diseñar un sistema para optimizar rutas de envío.', '2025-04-01', '2025-05-01', 'Pendiente', 7, 9),
(8, 'Configuración de Seguridad', 'Implementar medidas de seguridad para datos médicos.', '2025-02-20', '2025-03-20', 'Completada', 8, 19),
(9, 'Desarrollo de Módulos', 'Crear módulos de aprendizaje interactivos.', '2025-03-15', NULL, 'En Progreso', 9, 3),
(10, 'Integración de Sensores', 'Integrar sensores para monitoreo de cultivos.', '2025-01-25', '2025-03-25', 'Completada', 10, 10),
(11, 'Configuración de Servidores', 'Configurar servidores para gestionar datos energéticos.', '2025-04-05', '2025-05-05', 'Pendiente', 11, 11),
(12, 'Campaña de Marketing', 'Diseñar una campaña para el lanzamiento del portal.', '2025-02-10', '2025-04-10', 'En Progreso', 12, 20),
(13, 'Diseño de Base de Datos', 'Diseñar la base de datos para registros médicos.', '2025-03-20', '2025-04-20', 'En Progreso', 13, 12),
(14, 'Desarrollo de Reportes', 'Crear reportes para seguimiento de obras.', '2025-01-30', '2025-03-30', 'Completada', 14, 13),
(15, 'Análisis de Necesidades', 'Analizar las necesidades tecnológicas del cliente.', '2025-04-10', '2025-05-10', 'Pendiente', 15, 2),
(16, 'Integración de Blockchain', 'Implementar blockchain para trazabilidad.', '2025-02-25', '2025-04-25', 'En Progreso', 16, 14),
(17, 'Desarrollo del Frontend', 'Crear la interfaz de usuario para reservas.', '2025-03-25', NULL, 'En Progreso', 17, 3),
(18, 'Configuración de Reportes', 'Configurar reportes financieros.', '2025-01-10', '2025-03-10', 'Completada', 18, 15),
(19, 'Análisis de Datos Agrícolas', 'Analizar datos para prácticas sostenibles.', '2025-04-15', '2025-05-15', 'Pendiente', 19, 16),
(20, 'Optimización de Rutas', 'Implementar un algoritmo para optimizar rutas.', '2025-02-05', '2025-04-05', 'En Progreso', 20, 17);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_empleadosportarea`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_empleadosportarea` (
`TareaID` int(11)
,`NombreTarea` varchar(100)
,`Estado` varchar(20)
,`EmpleadoID` int(11)
,`NombreEmpleado` varchar(50)
,`Apellido` varchar(50)
,`Rol` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_proyectosactivos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_proyectosactivos` (
`ProyectoID` int(11)
,`DescripcionProyecto` varchar(250)
,`NombreCliente` varchar(50)
,`FechaInicio` date
,`FechaFin` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_proyectosporcliente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_proyectosporcliente` (
`ClienteID` int(11)
,`NombreCliente` varchar(50)
,`EmailCliente` varchar(50)
,`ProyectoID` int(11)
,`DescripcionProyecto` varchar(250)
,`FechaInicio` date
,`FechaFin` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_resumenproyectostareas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_resumenproyectostareas` (
`ProyectoID` int(11)
,`DescripcionProyecto` varchar(250)
,`NombreCliente` varchar(50)
,`TotalTareas` bigint(21)
,`TareasCompletadas` decimal(22,0)
,`EstadoProyecto` varchar(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_tareaspendientesporempleado`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_tareaspendientesporempleado` (
`EmpleadoID` int(11)
,`NombreEmpleado` varchar(50)
,`Apellido` varchar(50)
,`TareaID` int(11)
,`NombreTarea` varchar(100)
,`Descripcion` varchar(250)
,`FechaInicio` date
,`FechaFin` date
,`Estado` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_tareasporproyecto`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_tareasporproyecto` (
`ProyectoID` int(11)
,`DescripcionProyecto` varchar(250)
,`TareaID` int(11)
,`NombreTarea` varchar(100)
,`DescripcionTarea` varchar(250)
,`FechaInicio` date
,`FechaFin` date
,`Estado` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_empleadosportarea`
--
DROP TABLE IF EXISTS `vw_empleadosportarea`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_empleadosportarea`  AS SELECT `t`.`TareaID` AS `TareaID`, `t`.`Nombre` AS `NombreTarea`, `t`.`Estado` AS `Estado`, `e`.`EmpleadoID` AS `EmpleadoID`, `e`.`Nombre` AS `NombreEmpleado`, `e`.`Apellido` AS `Apellido`, `e`.`Rol` AS `Rol` FROM (`tarea` `t` join `empleado` `e` on(`t`.`EMPLEADO_EmpleadoID` = `e`.`EmpleadoID`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_proyectosactivos`
--
DROP TABLE IF EXISTS `vw_proyectosactivos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_proyectosactivos`  AS SELECT `p`.`ProyectoID` AS `ProyectoID`, `p`.`Descripcion` AS `DescripcionProyecto`, `c`.`Nombre` AS `NombreCliente`, `p`.`FechaInicio` AS `FechaInicio`, `p`.`FechaFin` AS `FechaFin` FROM (`proyecto` `p` join `cliente` `c` on(`p`.`CLIENTE_ClienteID` = `c`.`ClienteID`)) WHERE `p`.`FechaFin` is null OR `p`.`FechaFin` > curdate() ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_proyectosporcliente`
--
DROP TABLE IF EXISTS `vw_proyectosporcliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_proyectosporcliente`  AS SELECT `c`.`ClienteID` AS `ClienteID`, `c`.`Nombre` AS `NombreCliente`, `c`.`Email` AS `EmailCliente`, `p`.`ProyectoID` AS `ProyectoID`, `p`.`Descripcion` AS `DescripcionProyecto`, `p`.`FechaInicio` AS `FechaInicio`, `p`.`FechaFin` AS `FechaFin` FROM (`cliente` `c` join `proyecto` `p` on(`c`.`ClienteID` = `p`.`CLIENTE_ClienteID`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_resumenproyectostareas`
--
DROP TABLE IF EXISTS `vw_resumenproyectostareas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_resumenproyectostareas`  AS SELECT `p`.`ProyectoID` AS `ProyectoID`, `p`.`Descripcion` AS `DescripcionProyecto`, `c`.`Nombre` AS `NombreCliente`, count(`t`.`TareaID`) AS `TotalTareas`, sum(case when `t`.`Estado` = 'Completada' then 1 else 0 end) AS `TareasCompletadas`, CASE WHEN count(`t`.`TareaID`) = sum(case when `t`.`Estado` = 'Completada' then 1 else 0 end) THEN 'Completado' ELSE 'En Progreso' END AS `EstadoProyecto` FROM ((`proyecto` `p` join `cliente` `c` on(`p`.`CLIENTE_ClienteID` = `c`.`ClienteID`)) left join `tarea` `t` on(`p`.`ProyectoID` = `t`.`PROYECTO_ProyectoID`)) GROUP BY `p`.`ProyectoID`, `p`.`Descripcion`, `c`.`Nombre` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_tareaspendientesporempleado`
--
DROP TABLE IF EXISTS `vw_tareaspendientesporempleado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tareaspendientesporempleado`  AS SELECT `e`.`EmpleadoID` AS `EmpleadoID`, `e`.`Nombre` AS `NombreEmpleado`, `e`.`Apellido` AS `Apellido`, `t`.`TareaID` AS `TareaID`, `t`.`Nombre` AS `NombreTarea`, `t`.`Descripcion` AS `Descripcion`, `t`.`FechaInicio` AS `FechaInicio`, `t`.`FechaFin` AS `FechaFin`, `t`.`Estado` AS `Estado` FROM (`empleado` `e` join `tarea` `t` on(`e`.`EmpleadoID` = `t`.`EMPLEADO_EmpleadoID`)) WHERE `t`.`Estado` <> 'Completada' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_tareasporproyecto`
--
DROP TABLE IF EXISTS `vw_tareasporproyecto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tareasporproyecto`  AS SELECT `p`.`ProyectoID` AS `ProyectoID`, `p`.`Descripcion` AS `DescripcionProyecto`, `t`.`TareaID` AS `TareaID`, `t`.`Nombre` AS `NombreTarea`, `t`.`Descripcion` AS `DescripcionTarea`, `t`.`FechaInicio` AS `FechaInicio`, `t`.`FechaFin` AS `FechaFin`, `t`.`Estado` AS `Estado` FROM (`proyecto` `p` join `tarea` `t` on(`p`.`ProyectoID` = `t`.`PROYECTO_ProyectoID`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ClienteID`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`EmpleadoID`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`ProyectoID`),
  ADD KEY `fk_PROYECTO_CLIENTE_idx` (`CLIENTE_ClienteID`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`TareaID`),
  ADD KEY `fk_TAREA_PROYECTO1_idx` (`PROYECTO_ProyectoID`),
  ADD KEY `fk_TAREA_EMPLEADO1_idx` (`EMPLEADO_EmpleadoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ClienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `ProyectoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `TareaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_PROYECTO_CLIENTE` FOREIGN KEY (`CLIENTE_ClienteID`) REFERENCES `cliente` (`ClienteID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `fk_TAREA_EMPLEADO1` FOREIGN KEY (`EMPLEADO_EmpleadoID`) REFERENCES `empleado` (`EmpleadoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TAREA_PROYECTO1` FOREIGN KEY (`PROYECTO_ProyectoID`) REFERENCES `proyecto` (`ProyectoID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
