-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 09:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa_tal`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `ID_ADMIN` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`ID_ADMIN`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'Adrian', 'adrianpli8099@gmail.com', '123'),
(2, 'Emanuel', 'emanuel@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `ID` int(5) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contra` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(5) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `res_examen` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`ID`, `correo`, `contra`, `nombre`, `edad`, `sexo`, `res_examen`, `created_at`, `updated_at`) VALUES
(1, 'adrian@gmail.com', '$2y$10$7apLxHdXmZ9CRJG8yWLYK.njvIt6PgHBZ.RuW9rTn.7jCXzZUNPGW', 'adrian', 19, 'on', 3, '2021-03-30 13:33:57', '2021-04-04 00:25:46'),
(2, 'adrian2@gmail.com', '$2y$10$r4db1I2ipbZ2OQ4ioePh/esf5tYv2AGOJxX0PyleCSCG0opwW3D3y', 'adrian', 19, 'on', 0, '2021-03-30 13:35:19', '2021-03-30 13:35:19'),
(3, 'adrrianpli80099@gmail.com', '$2y$10$z0kqBX7Rtuu7Ez/CUs4xZO7HS1z731oiBTm5hQUz71vm.QnJ8RI3q', 'adrian', 19, 'on', 0, '2021-03-30 13:36:26', '2021-03-30 13:36:26'),
(4, 'adrriapli80099@gmail.com', '$2y$10$m1X2Eyf39kwsvI/HGyCrouFF/zSr2GJd8d3rRJnvhD4mx2nWgzRYC', 'asdas', 12, 'Hombre', 2, '2021-03-30 13:42:53', '2021-03-30 13:42:53'),
(5, 'dani@gmailc.om', '$2y$10$.1n39lJt8t0l9drWKtGWsOjKsDOGMuAoUgfjfSR0weDxymThe59dK', 'Daniela', 19, 'Mujer', 3, '2021-03-30 13:43:25', '2021-03-30 13:43:25'),
(6, 'cho@gmail.com', '$2y$10$dyL8eqSOYTFRFBh0GC8CFOW7oHgYMTGjxejBTY/ahv/XENUCOvLkS', 'cho', 56, 'Hombre', 4, '2021-03-31 08:20:19', '2021-03-31 08:20:19'),
(7, 'adrianpli8099@gmail.com', '$2y$10$U6Sa65uC6nfzAIVenMpM1uuy3PSweyTKipgX/rgRy1riksqIFssY.', 'Adrian', 19, 'Hombre', 1, '2021-04-01 08:33:53', '2021-04-01 08:33:53'),
(8, 'dany@gmail.com', '$2y$10$r5wyze9w2pW4j7ni9y4IdOkN7S.DvFoFUIIPmbY7eNq1qFguPDTZW', 'dany2', 19, 'Mujer', 5, '2021-04-02 00:58:33', '2021-04-02 00:58:59'),
(9, 'adrianfinal@gmail.com', '$2y$10$jMXQf3qu.u1zI.cxUQt/De1fHBtoJbxKUbOQIEZ9StGpyh0T/XIb.', 'adrianfinal', 16, 'Hombre', 4, '2021-04-02 10:54:06', '2021-04-02 10:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `examenes`
--

CREATE TABLE `examenes` (
  `ID_examen` int(5) NOT NULL,
  `ID_empleado` int(5) NOT NULL,
  `resultado` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `examenes`
--
DELIMITER $$
CREATE TRIGGER `enviarresultado` AFTER INSERT ON `examenes` FOR EACH ROW UPDATE empleados SET res_examen = resultado WHERE ID = ID_empleado
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `resultados` (`res_examen`);

--
-- Indexes for table `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`ID_examen`),
  ADD KEY `resultado` (`resultado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_ADMIN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `examenes`
--
ALTER TABLE `examenes`
  MODIFY `ID_examen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
