-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 06:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registro_inscripcion`
--

-- --------------------------------------------------------

--
-- Table structure for table `archivos_inscripcion`
--

CREATE TABLE `archivos_inscripcion` (
  `id_alumno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datos_de_pago`
--

CREATE TABLE `datos_de_pago` (
  `id_alumno` int(15) NOT NULL,
  `banco` varchar(15) NOT NULL,
  `nro_referencia` int(11) NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `archivo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos_de_pago`
--

INSERT INTO `datos_de_pago` (`id_alumno`, `banco`, `nro_referencia`, `tipo_pago`, `fecha`, `archivo`) VALUES
(9876543, 'Banesco', 5454, 0, '21/08/2021', 0x53637265656e73686f745f31372e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `inscripcion`
--

CREATE TABLE `inscripcion` (
  `ci_alumno` int(20) NOT NULL,
  `nombre_alumno` varchar(30) NOT NULL,
  `apellido_alumno` varchar(30) NOT NULL,
  `ano_a_cursar` varchar(10) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `nombre_representante` varchar(30) NOT NULL,
  `apellido_representante` varchar(30) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telf_representante` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inscripcion`
--

INSERT INTO `inscripcion` (`ci_alumno`, `nombre_alumno`, `apellido_alumno`, `ano_a_cursar`, `mensaje`, `nombre_representante`, `apellido_representante`, `correo`, `telf_representante`) VALUES
(9876543, 'Jorge', 'Pérez K', '3ero', 'ESTO ES UNA PRUEBA', 'Ramon', 'Pérez', 'ramon@gmail.com', '564654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archivos_inscripcion`
--
ALTER TABLE `archivos_inscripcion`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indexes for table `datos_de_pago`
--
ALTER TABLE `datos_de_pago`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indexes for table `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`ci_alumno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos_de_pago`
--
ALTER TABLE `datos_de_pago`
  MODIFY `id_alumno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9876544;

--
-- AUTO_INCREMENT for table `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `ci_alumno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datos_de_pago`
--
ALTER TABLE `datos_de_pago`
  ADD CONSTRAINT `datos_de_pago_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `inscripcion` (`ci_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
