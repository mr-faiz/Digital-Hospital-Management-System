-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 08:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
`AppointmentId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Problem` varchar(25) NOT NULL,
  `Status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`AppointmentId`, `PatientId`, `DoctorId`, `Date`, `Problem`, `Status`) VALUES
(1, 1, 1, '2018-02-16', 'Stomach problem', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign`
--

CREATE TABLE IF NOT EXISTS `tbl_assign` (
`AssignId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `SubRoomId` int(11) NOT NULL,
  `RoomId` int(11) NOT NULL,
  `Days` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assign`
--

INSERT INTO `tbl_assign` (`AssignId`, `PatientId`, `SubRoomId`, `RoomId`, `Days`, `Status`) VALUES
(1, 1, 9, 2, 2, 1),
(2, 1, 6, 1, 5, 1),
(3, 1, 5, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE IF NOT EXISTS `tbl_case` (
`CaseId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `BloodPressure` varchar(10) NOT NULL,
  `Diabetes` int(11) NOT NULL,
  `Cardio` varchar(100) NOT NULL,
  `Other` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_case`
--

INSERT INTO `tbl_case` (`CaseId`, `PatientId`, `BloodPressure`, `Diabetes`, `Cardio`, `Other`) VALUES
(1, 1, '140/92', 255, 'Cardio.jpg', 'null'),
(2, 2, '140/92', 254, 'Cardio.jpg', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
`CityId` int(11) NOT NULL,
  `CityName` varchar(20) NOT NULL,
  `StateId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`CityId`, `CityName`, `StateId`) VALUES
(1, 'Surat', 1),
(2, 'Bardoli', 1),
(3, 'Mumbai', 2),
(4, 'Pune', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
`CountryId` int(11) NOT NULL,
  `CountryName` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`CountryId`, `CountryName`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
`DeptId` int(11) NOT NULL,
  `DeptName` varchar(20) NOT NULL,
  `Description` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`DeptId`, `DeptName`, `Description`) VALUES
(3, 'Radiology', 'This is radiology department'),
(4, 'Pathology', 'Pathology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tbl_diagnosis` (
`DiagnosisId` int(11) NOT NULL,
  `DeptId` int(11) NOT NULL,
  `DiagnosisType` varchar(20) NOT NULL,
  `Instruction` varchar(20) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diagnosis`
--

INSERT INTO `tbl_diagnosis` (`DiagnosisId`, `DeptId`, `DiagnosisType`, `Instruction`, `PatientId`, `DoctorId`, `Date`) VALUES
(1, 4, 'Blood Test', 'btest', 2, 1, '2018-02-22'),
(2, 3, 'Mri', 'mri', 1, 2, '2018-02-22'),
(3, 4, 'urine test', 'ut', 1, 2, '2018-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
`DoctorId` int(11) NOT NULL,
  `UserId` varchar(25) NOT NULL,
  `DoctorName` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `DeptId` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `CountryId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `CityId` int(11) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `SpecialistId` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BloodGroup` varchar(5) NOT NULL,
  `RegNo` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Experience` int(11) NOT NULL,
  `JoiningDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`DoctorId`, `UserId`, `DoctorName`, `Email`, `Password`, `RoleId`, `DeptId`, `Address`, `CountryId`, `StateId`, `CityId`, `Pincode`, `Mobile`, `Picture`, `SpecialistId`, `Birthdate`, `Gender`, `BloodGroup`, `RegNo`, `Qualification`, `Experience`, `JoiningDate`) VALUES
(1, 'D101', 'Meek Kachhadiya', 'mk@gmail.com', '123', 1, 4, 'Katargam', 1, 1, 1, 395003, '9726737272', '22-02-2018-1519282798.jpg', 2, '1997-12-24', 'Male', 'A+', 'R101', 'MBBS', 2, '2018-02-22'),
(2, 'D102', 'Faizal Mahida', 'fm@gmail.com', '1234', 1, 3, 'Kamrej Char Rasta', 1, 1, 1, 395006, '9726737272', '22-02-2018-1519282861.jpg', 1, '1996-12-24', 'Male', 'A+', 'R102', 'MBBS', 2, '2018-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
`FeedbackId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `DRating` int(11) NOT NULL,
  `SRating` int(11) NOT NULL,
  `HRating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`FeedbackId`, `PatientId`, `Description`, `DRating`, `SRating`, `HRating`) VALUES
(1, 1, 'ok', 3, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
`LoginId` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`LoginId`, `Username`, `Password`, `Name`, `Picture`) VALUES
(1, 'admin', 'admin', 'Faizal Mahida', '11-02-2018-1518362955.jpg'),
(2, 'nurse', 'nurse', 'Atefa', '11-02-2018-1518359332.jpg'),
(3, 'pathology', 'pathology', 'Fahad Vohra', '21-02-2018-1519195706.jpg'),
(4, 'radiology', 'radiology', 'Ravi Savani', '21-02-2018-1519206623.jpg'),
(5, 'oncology', 'oncology', 'Nirav Donda', ''),
(6, 'oncology', 'oncology', 'Nirav Donda', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medicine`
--

CREATE TABLE IF NOT EXISTS `tbl_medicine` (
`MedicineId` int(11) NOT NULL,
  `MedicineName` varchar(25) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `Instruction` varchar(20) NOT NULL,
  `Days` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_medicine`
--

INSERT INTO `tbl_medicine` (`MedicineId`, `MedicineName`, `Type`, `Instruction`, `Days`, `PatientId`, `DoctorId`, `Date`) VALUES
(1, 'Sumo', 'cap', '1-1-1', 30, 2, 1, '2018-02-22'),
(2, 'Dolo', 'cap', '1-0-1', 30, 2, 1, '2018-02-22'),
(3, 'Paracetemol', 'cap', '1-1-1', 30, 1, 2, '2018-02-22'),
(4, 'Nebicard', 'cap', '1-1-1', 30, 1, 2, '2018-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_notice` (
`NoticeId` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`NoticeId`, `Title`, `Description`, `StartDate`, `EndDate`) VALUES
(1, 'Seminar', 'Doctor Seminar on brain tumer', '2018-02-13', '2018-02-13'),
(2, 'Seminar', 'Brain tumer seminar', '2018-02-13', '2018-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oncologydept`
--

CREATE TABLE IF NOT EXISTS `tbl_oncologydept` (
`ODId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `OTestId` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Date` datetime NOT NULL,
  `PaymentStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oncologytest`
--

CREATE TABLE IF NOT EXISTS `tbl_oncologytest` (
`OTestId` int(11) NOT NULL,
  `OTestName` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opd`
--

CREATE TABLE IF NOT EXISTS `tbl_opd` (
`OPDId` int(11) NOT NULL,
  `OPDPatientId` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `CountryId` int(11) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `SpecialistId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pathalogydept`
--

CREATE TABLE IF NOT EXISTS `tbl_pathalogydept` (
`PDId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `PTestId` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Date` datetime NOT NULL,
  `PaymentStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pathalogytest`
--

CREATE TABLE IF NOT EXISTS `tbl_pathalogytest` (
`PTestId` int(11) NOT NULL,
  `PTestName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
`PatientId` int(11) NOT NULL,
  `UserId` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `PatientName` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `CountryId` int(11) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `BirthDate` date NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `JoiningDate` date NOT NULL,
  `BloodGroup` varchar(4) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `HealthDesc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`PatientId`, `UserId`, `Password`, `PatientName`, `Address`, `Gender`, `CityId`, `StateId`, `CountryId`, `Pincode`, `BirthDate`, `Email`, `Mobile`, `JoiningDate`, `BloodGroup`, `RoleId`, `Picture`, `HealthDesc`) VALUES
(1, 'P101', '123', 'Atefa Mahida', 'Kholwad', 'Female', 1, 1, 1, 395006, '1996-07-23', 'am@gmail.com', '9726737272', '2018-02-22', 'A+', 1, '22-02-2018-1519282937.jpg', 'Fever overrated'),
(2, 'P102', '1234', 'Ravi Savani', 'Kamrej Char Rasta', 'Male', 1, 1, 1, 395006, '1997-05-22', 'rs@gmail.com', '9726737272', '2018-02-22', 'A-', 1, '22-02-2018-1519283009.jpg', 'Heavy Fever');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
`PaymentId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `PaymentMode` varchar(20) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE IF NOT EXISTS `tbl_prescription` (
`PrescriptionId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `MedicineId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_radiologydept`
--

CREATE TABLE IF NOT EXISTS `tbl_radiologydept` (
`RDId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `RTestId` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Date` datetime NOT NULL,
  `PaymentStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_radiologytest`
--

CREATE TABLE IF NOT EXISTS `tbl_radiologytest` (
`RTestId` int(11) NOT NULL,
  `RTestName` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reference`
--

CREATE TABLE IF NOT EXISTS `tbl_reference` (
`ReferenceId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reference`
--

INSERT INTO `tbl_reference` (`ReferenceId`, `PatientId`, `DoctorId`) VALUES
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refnurse`
--

CREATE TABLE IF NOT EXISTS `tbl_refnurse` (
`NrefId` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `PatientId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_refnurse`
--

INSERT INTO `tbl_refnurse` (`NrefId`, `Username`, `PatientId`) VALUES
(1, 'nurse', 1),
(2, 'nurse', 1),
(3, 'nurse', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE IF NOT EXISTS `tbl_request` (
`RequestId` int(11) NOT NULL,
  `DiagnosisId` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`RequestId`, `DiagnosisId`, `Status`) VALUES
(1, 1, 'Pending'),
(2, 2, 'Pending'),
(3, 3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
`RoleId` int(11) NOT NULL,
  `RoleName` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`RoleId`, `RoleName`) VALUES
(1, 'Doctor'),
(2, 'Patient'),
(3, 'Admin'),
(4, 'Nurse'),
(5, 'Pathology'),
(6, 'Radiology'),
(7, 'Oncology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE IF NOT EXISTS `tbl_room` (
`RoomId` int(11) NOT NULL,
  `RoomType` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `No_of_Room` int(11) NOT NULL,
  `BedCapacity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`RoomId`, `RoomType`, `Price`, `No_of_Room`, `BedCapacity`) VALUES
(1, 'General', 1000, 2, 3),
(2, 'Special', 2000, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE IF NOT EXISTS `tbl_schedule` (
`ScheduleId` int(11) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `AvailableDay` varchar(50) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`ScheduleId`, `DoctorId`, `AvailableDay`, `StartTime`, `EndTime`) VALUES
(1, 1, 'Monday Wednesday ', '10:00:00', '12:30:00'),
(2, 2, 'Monday Tuseday ', '10:00:00', '13:00:00'),
(3, 1, 'Monday Friday ', '11:00:00', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specialist`
--

CREATE TABLE IF NOT EXISTS `tbl_specialist` (
`SpecialistId` int(11) NOT NULL,
  `SpecialistName` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_specialist`
--

INSERT INTO `tbl_specialist` (`SpecialistId`, `SpecialistName`) VALUES
(1, 'Blood'),
(2, 'Brain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
`StateId` int(11) NOT NULL,
  `StateName` varchar(20) NOT NULL,
  `CountryId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`StateId`, `StateName`, `CountryId`) VALUES
(1, 'Gujarat', 1),
(2, 'MH', 1),
(3, 'LA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subroom`
--

CREATE TABLE IF NOT EXISTS `tbl_subroom` (
`SubRoomId` int(11) NOT NULL,
  `RoomId` int(11) NOT NULL,
  `RoomNo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subroom`
--

INSERT INTO `tbl_subroom` (`SubRoomId`, `RoomId`, `RoomNo`) VALUES
(1, 1, 101),
(2, 1, 102),
(3, 1, 103),
(4, 1, 201),
(5, 1, 202),
(6, 1, 203),
(7, 2, 101),
(8, 2, 102),
(9, 2, 201),
(10, 2, 202);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
 ADD PRIMARY KEY (`AppointmentId`);

--
-- Indexes for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
 ADD PRIMARY KEY (`AssignId`);

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
 ADD PRIMARY KEY (`CaseId`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
 ADD PRIMARY KEY (`CityId`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
 ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
 ADD PRIMARY KEY (`DeptId`);

--
-- Indexes for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
 ADD PRIMARY KEY (`DiagnosisId`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
 ADD PRIMARY KEY (`DoctorId`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
 ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`LoginId`);

--
-- Indexes for table `tbl_medicine`
--
ALTER TABLE `tbl_medicine`
 ADD PRIMARY KEY (`MedicineId`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
 ADD PRIMARY KEY (`NoticeId`);

--
-- Indexes for table `tbl_oncologydept`
--
ALTER TABLE `tbl_oncologydept`
 ADD PRIMARY KEY (`ODId`);

--
-- Indexes for table `tbl_oncologytest`
--
ALTER TABLE `tbl_oncologytest`
 ADD PRIMARY KEY (`OTestId`);

--
-- Indexes for table `tbl_opd`
--
ALTER TABLE `tbl_opd`
 ADD PRIMARY KEY (`OPDId`);

--
-- Indexes for table `tbl_pathalogydept`
--
ALTER TABLE `tbl_pathalogydept`
 ADD PRIMARY KEY (`PDId`);

--
-- Indexes for table `tbl_pathalogytest`
--
ALTER TABLE `tbl_pathalogytest`
 ADD PRIMARY KEY (`PTestId`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
 ADD PRIMARY KEY (`PatientId`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
 ADD PRIMARY KEY (`PaymentId`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
 ADD PRIMARY KEY (`PrescriptionId`);

--
-- Indexes for table `tbl_radiologydept`
--
ALTER TABLE `tbl_radiologydept`
 ADD PRIMARY KEY (`RDId`);

--
-- Indexes for table `tbl_radiologytest`
--
ALTER TABLE `tbl_radiologytest`
 ADD PRIMARY KEY (`RTestId`);

--
-- Indexes for table `tbl_reference`
--
ALTER TABLE `tbl_reference`
 ADD PRIMARY KEY (`ReferenceId`);

--
-- Indexes for table `tbl_refnurse`
--
ALTER TABLE `tbl_refnurse`
 ADD PRIMARY KEY (`NrefId`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
 ADD PRIMARY KEY (`RequestId`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
 ADD PRIMARY KEY (`RoleId`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
 ADD PRIMARY KEY (`RoomId`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
 ADD PRIMARY KEY (`ScheduleId`);

--
-- Indexes for table `tbl_specialist`
--
ALTER TABLE `tbl_specialist`
 ADD PRIMARY KEY (`SpecialistId`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
 ADD PRIMARY KEY (`StateId`);

--
-- Indexes for table `tbl_subroom`
--
ALTER TABLE `tbl_subroom`
 ADD PRIMARY KEY (`SubRoomId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
MODIFY `AppointmentId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
MODIFY `AssignId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
MODIFY `CaseId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
MODIFY `CityId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
MODIFY `DeptId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
MODIFY `DiagnosisId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
MODIFY `DoctorId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_medicine`
--
ALTER TABLE `tbl_medicine`
MODIFY `MedicineId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
MODIFY `NoticeId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_oncologydept`
--
ALTER TABLE `tbl_oncologydept`
MODIFY `ODId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_oncologytest`
--
ALTER TABLE `tbl_oncologytest`
MODIFY `OTestId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_opd`
--
ALTER TABLE `tbl_opd`
MODIFY `OPDId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pathalogydept`
--
ALTER TABLE `tbl_pathalogydept`
MODIFY `PDId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pathalogytest`
--
ALTER TABLE `tbl_pathalogytest`
MODIFY `PTestId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
MODIFY `PatientId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
MODIFY `PrescriptionId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_radiologydept`
--
ALTER TABLE `tbl_radiologydept`
MODIFY `RDId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_radiologytest`
--
ALTER TABLE `tbl_radiologytest`
MODIFY `RTestId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_reference`
--
ALTER TABLE `tbl_reference`
MODIFY `ReferenceId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_refnurse`
--
ALTER TABLE `tbl_refnurse`
MODIFY `NrefId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
MODIFY `RoleId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
MODIFY `RoomId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
MODIFY `ScheduleId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_specialist`
--
ALTER TABLE `tbl_specialist`
MODIFY `SpecialistId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
MODIFY `StateId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_subroom`
--
ALTER TABLE `tbl_subroom`
MODIFY `SubRoomId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
