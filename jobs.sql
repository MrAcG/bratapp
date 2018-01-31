-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 08:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bratapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job`, `personality1`, `personality2`, `personality3`, `created_at`, `updated_at`) VALUES
('Athletic Trainer', 'S', 'R', 'E', NULL, NULL),
('Cartographer', 'I', 'R', 'E', NULL, NULL),
('Commercial Airline Pilot', 'R', 'I', 'E', NULL, NULL),
('Commercial Drafter', 'I', 'R', 'E', NULL, NULL),
('Corrections Officer', 'S', 'E', 'R', NULL, NULL),
('Dental Technician', 'R', 'E', 'I', NULL, NULL),
('Farm Manager', 'E', 'S', 'R', NULL, NULL),
('Fish and Game Warden', 'R', 'E', 'S', NULL, NULL),
('Floral Designer', 'R', 'A', 'E', NULL, NULL),
('Forester', 'R', 'I', 'S', NULL, NULL),
('Geodetic Surveyor', 'I', 'R', 'E', NULL, NULL),
('Industrial Arts Teacher', 'I', 'E', 'R', NULL, NULL),
('Laboratory Technician', 'R', 'I', 'E', NULL, NULL),
('Landscape Architect', 'A', 'I', 'R', NULL, NULL),
('Mechanical Engineer', 'R', 'I', 'S', NULL, NULL),
('Optician', 'R', 'E', 'I', NULL, NULL),
('Petroleum Geologist', 'R', 'I', 'E', NULL, NULL),
('Police Officer', 'S', 'E', 'R', NULL, NULL),
('Practical Nurse', 'S', 'E', 'R', NULL, NULL),
('Property Manager', 'E', 'S', 'R', NULL, NULL),
('Recreation Manager', 'S', 'E', 'R', NULL, NULL),
('Service Manager', 'E', 'R', 'S', NULL, NULL),
('Software Technician', 'R', 'C', 'I', NULL, NULL),
('Ultrasound Technologist', 'R', 'S', 'I', NULL, NULL),
('Vocational Rehabilitation\r\nConsultant', 'E', 'S', 'R', NULL, NULL),
('Actuary', 'I', 'S', 'E', NULL, NULL),
('Agronomist', 'I', 'R', 'S', NULL, NULL),
('Anesthesiologist', 'I', 'R', 'S', NULL, NULL),
('Anthropologist', 'I', 'R', 'E', NULL, NULL),
('Biochemist', 'I', 'R', 'S', NULL, NULL),
('Air Traffic Controller', 'S', 'E', 'R', NULL, NULL),
('Archaeologist', 'I', 'R', 'S', NULL, NULL),
('Biologist', 'I', 'S', 'R', NULL, NULL),
('Chemical Engineer', 'I', 'R', 'E', NULL, NULL),
('Chemist', 'I', 'R', 'E', NULL, NULL),
('Computer Systems Analyst', 'I', 'E', 'R', NULL, NULL),
('Dentist', 'I', 'S', 'R', NULL, NULL),
('Ecologist', 'I', 'R', 'E', NULL, NULL),
('Economist', 'I', 'A', 'S', NULL, NULL),
('Electrical Engineer', 'I', 'R', 'E', NULL, NULL),
('Geologist', 'I', 'R', 'E', NULL, NULL),
('Horticulturist', 'I', 'R', 'S', NULL, NULL),
('Mathematician', 'I', 'E', 'R', NULL, NULL),
('Medical Technologist', 'I', 'S', 'A', NULL, NULL),
('Meteorologist', 'I', 'R', 'S', NULL, NULL),
('Nurse Practitioner', 'I', 'S', 'A', NULL, NULL),
('Pharmacist', 'I', 'E', 'S', NULL, NULL),
('Physician, General Practice', 'I', 'S', 'E', NULL, NULL),
('Psychologist', 'I', 'E', 'S', NULL, NULL),
('Research Analyst', 'I', 'R', 'C', NULL, NULL),
('Statistician', 'I', 'R', 'E', NULL, NULL),
('Surgeon', 'I', 'R', 'A', NULL, NULL),
('Technical Writer', 'I', 'R', 'S', NULL, NULL),
('Veterinarian', 'I', 'R', 'S', NULL, NULL),
('Actor', 'A', 'E', 'S', NULL, NULL),
('Advertising Art Director', 'A', 'E', 'S', NULL, NULL),
('Advertising Manager', 'A', 'S', 'E', NULL, NULL),
('Architect', 'A', 'I', 'R', NULL, NULL),
('Art Teacher', 'A', 'S', 'E', NULL, NULL),
('Artist', 'A', 'S', 'I', NULL, NULL),
('Copy Writer', 'A', 'S', 'I', NULL, NULL),
('Dance Instructor', 'A', 'E', 'R', NULL, NULL),
('Drama Coach', 'A', 'S', 'E', NULL, NULL),
('English Teacher', 'A', 'S', 'E', NULL, NULL),
('Entertainer/Performer', 'A', 'S', 'E', NULL, NULL),
('Fashion Illustrator', 'A', 'S', 'R', NULL, NULL),
('Interior Designer', 'A', 'E', 'S', NULL, NULL),
('Intelligence Research Specialist', 'A', 'E', 'I', NULL, NULL),
('Journalist/Reporter', 'A', 'S', 'E', NULL, NULL),
('Landscape Architect', 'A', 'I', 'R', NULL, NULL),
('Librarian', 'S', 'A', 'I', NULL, NULL),
('Medical Illustrator', 'A', 'I', 'E', NULL, NULL),
('Museum Curator', 'A', 'E', 'S', NULL, NULL),
('Music Teacher', 'A', 'S', 'I', NULL, NULL),
('Photographer', 'A', 'E', 'S', NULL, NULL),
('Writer', 'A', 'S', 'I', NULL, NULL),
('Graphic Designer', 'A', 'E', 'S', NULL, NULL),
('City Manager', 'S', 'E', 'C', NULL, NULL),
('Clinical Dietitian', 'S', 'I', 'E', NULL, NULL),
('College/University Faculty', 'S', 'E', 'I', NULL, NULL),
('Community Org. Director', 'S', 'E', 'A', NULL, NULL),
('Consumer Affairs Director', 'S', 'E', 'R', NULL, NULL),
('Counselor/Therapist', 'S', 'A', 'E', NULL, NULL),
('Historian', 'S', 'E', 'I', NULL, NULL),
('Hospital Administrator', 'S', 'E', 'R', NULL, NULL),
('Psychologist', 'S', 'E', 'I', NULL, NULL),
('Insurance Claims Examiner', 'S', 'I', 'E', NULL, NULL),
('Medical Assistant', 'S', 'C', 'R', NULL, NULL),
('Minister/Priest/Rabbi', 'S', 'A', 'I', NULL, NULL),
('Paralegal', 'S', 'C', 'E', NULL, NULL),
('Park Naturalist', 'S', 'E', 'I', NULL, NULL),
('Physical Therapist', 'S', 'I', 'E', NULL, NULL),
('Police Officer', 'S', 'E', 'R', NULL, NULL),
('Probation and Parole Officer', 'S', 'E', 'C', NULL, NULL),
('Real Estate Appraiser', 'S', 'C', 'E', NULL, NULL),
('Recreation Director', 'S', 'E', 'R', NULL, NULL),
('Registered Nurse', 'S', 'I', 'A', NULL, NULL),
('Teacher', 'S', 'A', 'E', NULL, NULL),
('Social Worker', 'S', 'E', 'A', NULL, NULL),
('Speech Pathologist', 'S', 'A', 'I', NULL, NULL),
('Vocational-Rehab. Counselor', 'S', 'E', 'C', NULL, NULL),
('Volunteer Services Director', 'S', 'E', 'C', NULL, NULL),
('Advertising Executive', 'E', 'S', 'A', NULL, NULL),
('Advertising Sales Rep', 'E', 'S', 'R', NULL, NULL),
('Banker/Financial Planner', 'E', 'S', 'R', NULL, NULL),
('Branch Manager', 'E', 'S', 'A', NULL, NULL),
('Business Manager', 'E', 'S', 'C', NULL, NULL),
('Buyer', 'E', 'S', 'A', NULL, NULL),
('Chamber of Commerce Exec', 'E', 'S', 'A', NULL, NULL),
('Credit Analyst', 'E', 'A', 'S', NULL, NULL),
('Customer Service Manager', 'E', 'S', 'A', NULL, NULL),
('Education & Training Manager', 'E', 'I', 'S', NULL, NULL),
('Entrepreneur', 'E', 'S', 'A', NULL, NULL),
('Foreign Service Officer', 'E', 'S', 'A', NULL, NULL),
('Funeral Director', 'E', 'S', 'R', NULL, NULL),
('Insurance Manager', 'E', 'S', 'C', NULL, NULL),
('Interpreter', 'E', 'S', 'A', NULL, NULL),
('Lawyer/Attorney', 'E', 'S', 'A', NULL, NULL),
('Lobbyist', 'E', 'S', 'A', NULL, NULL),
('Office Manager', 'E', 'S', 'R', NULL, NULL),
('Personnel Recruiter', 'E', 'S', 'R', NULL, NULL),
('Politician', 'E', 'S', 'A', NULL, NULL),
('Public Relations Rep', 'E', 'A', 'S', NULL, NULL),
('Retail Store Manager', 'E', 'S', 'R', NULL, NULL),
('Sales Manager', 'E', 'S', 'A', NULL, NULL),
('Sales Representative', 'E', 'R', 'S', NULL, NULL),
('Social Service Director', 'E', 'S', 'A', NULL, NULL),
('Stockbroker', 'E', 'S', 'I', NULL, NULL),
('Tax Accountant', 'E', 'C', 'S', NULL, NULL),
('Abstractor', 'C', 'S', 'I', NULL, NULL),
('Accountant', 'C', 'S', 'E', NULL, NULL),
('Administrative Assistant', 'E', 'S', 'C', NULL, NULL),
('Budget Analyst', 'C', 'E', 'R', NULL, NULL),
('Business Manager', 'E', 'S', 'C', NULL, NULL),
('Business Programmer', 'C', 'R', 'I', NULL, NULL),
('Business Teacher', 'C', 'S', 'E', NULL, NULL),
('Catalog Librarian', 'C', 'S', 'E', NULL, NULL),
('Claims Adjuster', 'S', 'E', 'C', NULL, NULL),
('Computer Operator', 'C', 'S', 'R', NULL, NULL),
('Congressional-District Aide', 'C', 'E', 'S', NULL, NULL),
('Cost Accountant', 'C', 'E', 'S', NULL, NULL),
('Court Reporter', 'C', 'S', 'E', NULL, NULL),
('Credit Manager', 'E', 'S', 'C', NULL, NULL),
('Customs Inspector', 'C', 'E', 'I', NULL, NULL),
('Editorial Assistant', 'C', 'S', 'I', NULL, NULL),
('Elementary School Teacher', 'S', 'E', 'C', NULL, NULL),
('Financial Analyst', 'C', 'S', 'I', NULL, NULL),
('Insurance Manager', 'E', 'S', 'C', NULL, NULL),
('Insurance Underwriter', 'C', 'S', 'E', NULL, NULL),
('Internal Auditor', 'I', 'C', 'R', NULL, NULL),
('Kindergarten Teacher', 'E', 'S', 'C', NULL, NULL),
('Medical Records Technician', 'C', 'S', 'E', NULL, NULL),
('Museum Registrar', 'C', 'S', 'E', NULL, NULL),
('Paralegal', 'S', 'C', 'E', NULL, NULL),
('Safety Inspector', 'R', 'C', 'S', NULL, NULL),
('Tax Accountant', 'E', 'C', 'S', NULL, NULL),
('Tax Consultant', 'C', 'E', 'S', NULL, NULL),
('Travel Agent', 'E', 'C', 'S', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
