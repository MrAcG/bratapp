-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 01:46 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
  `id` int(100) NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job`, `personality1`, `personality2`, `personality3`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Athletic Trainer', 'S', 'R', 'E', 'https://study.com/articles/Athletic_Trainer_Summary_of_How_to_Become_an_Athletic_Trainer.html', NULL, NULL),
(2, 'Cartographer', 'I', 'R', 'E', 'https://study.com/cartography_education.html', NULL, NULL),
(3, 'Commercial Airline Pilot', 'R', 'I', 'E', 'https://study.com/be_an_airline_pilot.html', NULL, NULL),
(4, 'Commercial Drafter', 'I', 'R', 'E', 'https://study.com/commercial_architect.html', NULL, NULL),
(5, 'Corrections Officer', 'S', 'E', 'R', 'https://study.com/how_to_become_a_corrections_officer.html', NULL, NULL),
(6, 'Dental Technician', 'R', 'E', 'I', 'https://study.com/articles/Dental_Technician%3A_Educational_Requirements_for_Becoming_a_Technician_in_the_Field_of_Dentistry.html', NULL, NULL),
(7, 'Farm Manager', 'E', 'S', 'R', 'https://study.com/articles/How_to_Become_a_Farm_Manager_Step-by-Step_Career_Guide.html', NULL, NULL),
(8, 'Fish and Game Warden', 'R', 'E', 'S', 'https://study.com/be_a_fish_and_game_warden.html', NULL, NULL),
(9, 'Floral Designer', 'R', 'A', 'E', 'https://study.com/articles/Become_a_Floral_Specialist_Step-by-Step_Career_Guide.html', NULL, NULL),
(10, 'Forester', 'R', 'I', 'S', 'https://study.com/articles/Become_a_Forester_Education_and_Career_Roadmap.html', NULL, NULL),
(11, 'Geodetic Surveyor', 'I', 'R', 'E', 'https://study.com/articles/geodetic_surveyor_job_description_salary.html', NULL, NULL),
(12, 'Industrial Arts Teacher', 'I', 'E', 'R', 'https://study.com/directory/category/Education/Teacher_Education_for_Specific_Subject_Areas/Industrial_Arts_Teacher_Education.html', NULL, NULL),
(13, 'Laboratory Technician', 'R', 'I', 'E', 'https://study.com/lab_technician_training.html', NULL, NULL),
(14, 'Landscape Architect', 'A', 'I', 'R', 'https://study.com/landscape_architect_education.html', NULL, NULL),
(15, 'Mechanical Engineer', 'R', 'I', 'S', 'https://study.com/mechanical_engineer.html', NULL, NULL),
(16, 'Optician', 'R', 'E', 'I', 'https://study.com/optician.html', NULL, NULL),
(17, 'Petroleum Geologist', 'R', 'I', 'E', 'https://study.com/articles/Petroleum_Geologist_Job_Description_Duties_and_Requirements.html', NULL, NULL),
(18, 'Police Officer', 'S', 'E', 'R', 'https://study.com/requirements_to_become_a_police_officer.html', NULL, NULL),
(19, 'Practical Nurse', 'S', 'E', 'R', 'https://study.com/license_practitioner_nurse.html', NULL, NULL),
(20, 'Property Manager', 'E', 'S', 'R', 'https://study.com/certified_property_manager.html', NULL, NULL),
(21, 'Recreation Manager', 'S', 'E', 'R', 'https://study.com/articles/Sports_Manager_Job_Description_Duties_and_Requirements.html', NULL, NULL),
(22, 'Service Manager', 'E', 'R', 'S', 'https://study.com/articles/How_to_Become_a_Service_Manager_Career_Roadmap.html', NULL, NULL),
(23, 'Software Technician', 'R', 'C', 'I', 'https://study.com/computer_information_technician.html', NULL, NULL),
(24, 'Ultrasound Technologist', 'R', 'S', 'I', 'https://study.com/articles/Ultrasound_Technician_Requirements_to_Start_a_Career_as_an_Ultrasound_Tech.html', NULL, NULL),
(25, 'Travel Agent', 'E', 'C', 'S', 'https://study.com/becoming_a_travel_agent.html', NULL, NULL),
(26, 'Actuary', 'I', 'S', 'E', 'https://study.com/articles/Actuary_Employment_Info_and_Requirements_for_Becoming_an_Actuary.html', NULL, NULL),
(27, 'Agronomist', 'I', 'R', 'S', 'https://study.com/articles/Agronomist_Job_Description_Duties_Salary_and_Outlook.html', NULL, NULL),
(28, 'Anesthesiologist', 'I', 'R', 'S', 'https://study.com/articles/Anesthesiologist_Education_Requirements_and_Career_Information.html', NULL, NULL),
(29, 'Anthropologist', 'I', 'R', 'E', 'https://study.com/articles/Anthropologist_Job_Description_Duties_and_Requirements.html', NULL, NULL),
(30, 'Biochemist', 'I', 'R', 'S', 'https://study.com/articles/Biochemist_Profile_and_Recommended_Education_for_a_Career_in_Biochemistry.html', NULL, NULL),
(31, 'Air Traffic Controller', 'S', 'E', 'R', 'https://study.com/articles/Air_Traffic_Controller_Salary_Duties_and_Requirements.html', NULL, NULL),
(32, 'Archaeologist', 'I', 'R', 'S', 'https://study.com/articles/Archaeologist_Educational_Requirements_for_a_Career_in_Archaeology.html', NULL, NULL),
(33, 'Biologist', 'I', 'S', 'R', 'https://study.com/articles/Biologist_Recommended_Education_for_a_Career_in_Biology.html', NULL, NULL),
(34, 'Chemical Engineer', 'I', 'R', 'E', 'https://study.com/articles/Chemical_Engineer_Education_Requirements_and_Career_Information.html', NULL, NULL),
(35, 'Chemist', 'I', 'R', 'E', 'https://study.com/articles/Lab_Chemist_Salary_Duties_and_Outlook.html', NULL, NULL),
(36, 'Computer Systems Analyst', 'I', 'E', 'R', 'https://study.com/articles/Systems_Analyst_Job_Description_and_Employment_Info_for_a_System_Analyst.html', NULL, NULL),
(37, 'Dentist', 'I', 'S', 'R', 'https://study.com/dentist_education_requirements.html', NULL, NULL),
(38, 'Ecologist', 'I', 'R', 'E', 'https://study.com/articles/Ecology_Career_Options_and_Requirements.html', NULL, NULL),
(39, 'Economist', 'I', 'A', 'S', 'https://study.com/become_an_economist.html', NULL, NULL),
(40, 'Electrical Engineer', 'I', 'R', 'E', 'https://study.com/articles/Electrical_Engineers_Job_Description_and_Info_About_Starting_a_Career_as_an_Electrical_Engineer.html', NULL, NULL),
(41, 'Geologist', 'I', 'R', 'E', 'https://study.com/geologist.html', NULL, NULL),
(42, 'Horticulturist', 'I', 'R', 'S', 'https://study.com/articles/Become_a_Horticulturalist_Education_and_Career_Roadmap.html', NULL, NULL),
(43, 'Mathematician', 'I', 'E', 'R', 'https://study.com/articles/Mathematician_Job_Outlook_and_Educational_Requirements_for_a_Career_in_Math.html', NULL, NULL),
(44, 'Medical Technologist', 'I', 'S', 'A', 'https://study.com/articles/Medical_Technologist_Job_Description_Duties_and_Requirements.html', NULL, NULL),
(45, 'Meteorologist', 'I', 'R', 'S', 'https://study.com/articles/Meteorologist_Employment_Information_for_Recent_Graduates_Pursuing_a_Career_in_Meteorology.html', NULL, NULL),
(46, 'Nurse Practitioner', 'I', 'S', 'A', 'https://study.com/nurse_practitioner_education_requirements.html', NULL, NULL),
(47, 'Pharmacist', 'I', 'E', 'S', 'https://study.com/pharmacist_education.html', NULL, NULL),
(48, 'Physician, General Practice', 'I', 'S', 'E', 'https://study.com/articles/Medical_Doctor_Job_Description_and_Info_for_Students_Considering_a_Career_as_a_Medical_Doctor_Dr.html', NULL, NULL),
(49, 'Psychologist', 'I', 'E', 'S', 'https://study.com/articles/Psychologist_Educational_Requirements.html', NULL, NULL),
(50, 'Research Analyst', 'I', 'R', 'C', 'https://study.com/articles/Market_Research_Analyst_Job_Duties_Requirements_and_Career_Information.html', NULL, NULL),
(51, 'Statistician', 'I', 'R', 'E', 'https://study.com/become_a_statistician.html', NULL, NULL),
(52, 'Surgeon', 'I', 'R', 'A', 'https://study.com/surgeon_education.html', NULL, NULL),
(53, 'Technical Writer', 'I', 'R', 'S', 'https://study.com/articles/Technical_Writer_Job_Description_and_Info_for_Students_Considering_a_Career_as_a_Tech_Writer.html', NULL, NULL),
(54, 'Veterinarian', 'I', 'R', 'S', 'https://study.com/veterinarian_education.html', NULL, NULL),
(55, 'Actor', 'A', 'E', 'S', 'https://study.com/articles/Acting_Career_Information_Becoming_an_Actor_or_Actress.html', NULL, NULL),
(56, 'Advertising Art Director', 'A', 'E', 'S', 'https://study.com/articles/Become_an_Advertising_Art_Director_Step-by-Step_Career_Guide.html', NULL, NULL),
(57, 'Advertising Manager', 'A', 'S', 'E', 'https://study.com/articles/Advertising_Manager_Job_Description_and_Requirements_for_a_Career_in_Advertising_Management.html', NULL, NULL),
(58, 'Architect', 'A', 'I', 'R', 'https://study.com/articles/Career_Information_for_a_Degree_in_Architectural_Studies.html', NULL, NULL),
(59, 'Art Teacher', 'A', 'S', 'E', 'https://study.com/articles/Art_Teacher_Educational_Requirements.html', NULL, NULL),
(60, 'Artist', 'A', 'S', 'I', 'https://study.com/artist.html', NULL, NULL),
(61, 'Copy Writer', 'A', 'S', 'I', 'https://study.com/articles/Copywriter_Salary_Duties_Outlook_and_Requirements.html', NULL, NULL),
(62, 'Dance Instructor', 'A', 'E', 'R', 'https://study.com/articles/How_to_Become_a_Dance_Teacher_Step-By-Step_Career_Guide.html', NULL, NULL),
(63, 'Drama Coach', 'A', 'S', 'E', 'https://study.com/be_a_drama_teacher.html', NULL, NULL),
(64, 'English Teacher', 'A', 'S', 'E', 'https://study.com/articles/Become_a_High_School_English_Teacher_Step-by-Step_Career_Guide.html', NULL, NULL),
(65, 'Entertainer/Performer', 'A', 'S', 'E', 'https://study.com/articles/Performer_Career_Information_and_Requirements_for_Becoming_a_Professional_Performing_Artist.html', NULL, NULL),
(66, 'Fashion Illustrator', 'A', 'S', 'R', 'https://study.com/articles/Fashion_Illustrator_Job_Description_Duties_and_Salary.html', NULL, NULL),
(67, 'Interior Designer', 'A', 'E', 'S', 'https://study.com/interior_design.html', NULL, NULL),
(68, 'Intelligence Research Specialist', 'A', 'E', 'I', 'https://study.com/articles/How_to_Become_an_Intelligence_Analyst_Step-by-Step_Career_Guide.html', NULL, NULL),
(69, 'Journalist or Reporter', 'A', 'S', 'E', 'https://study.com/journalist_education.html', NULL, NULL),
(70, 'Landscape Architect', 'A', 'I', 'R', 'https://study.com/landscape_architect_education.html', NULL, NULL),
(71, 'Librarian', 'S', 'A', 'I', 'https://study.com/articles/Librarian_Educational_Requirements_to_Be_a_Librarian.html', NULL, NULL),
(72, 'Medical Illustrator', 'A', 'I', 'E', 'https://study.com/directory/category/Medical_and_Health_Professions/Medical_Informatics_and_Illustration/Medical_Illustration.html', NULL, NULL),
(73, 'Museum Curator', 'A', 'E', 'S', 'https://study.com/articles/Become_a_Museum_Curator_Step-by-Step_Career_Guide.html', NULL, NULL),
(74, 'Music Teacher', 'A', 'S', 'I', 'https://study.com/articles/Music_Professor_Career_Information_and_Requirements.html', NULL, NULL),
(75, 'Photographer', 'A', 'E', 'S', 'https://study.com/photographer_career.html', NULL, NULL),
(76, 'Writer', 'A', 'S', 'I', 'https://study.com/articles/How_to_Become_a_Professional_Writer_Step-by-Step_Career_Guide.html', NULL, NULL),
(77, 'Graphic Designer', 'A', 'E', 'S', 'https://study.com/articles/Graphic_Designer_Educational_Requirements_for_a_Career_in_Graphic_Design.html', NULL, NULL),
(78, 'City Manager', 'S', 'E', 'C', 'https://study.com/articles/Become_a_City_Manager_Education_and_Career_Roadmap.html', NULL, NULL),
(79, 'Clinical Dietitian', 'S', 'I', 'E', 'https://study.com/clinical_dietician.html', NULL, NULL),
(80, 'College or University Faculty', 'S', 'E', 'I', 'https://study.com/articles/How_to_Become_a_College_Professor_Education_and_Career_Roadmap.html', NULL, NULL),
(81, 'Community Org. Director', 'S', 'E', 'A', 'https://study.com/articles/How_to_Become_a_Director_of_a_Community_Organization.html', NULL, NULL),
(82, 'Consumer Affairs Director', 'S', 'E', 'R', 'https://study.com/directory/category/Liberal_Arts_and_Humanities/Human_and_Consumer_Sciences/Consumer_Services.html', NULL, NULL),
(83, 'Counselor or Therapist', 'S', 'A', 'E', 'https://study.com/articles/How_to_Become_a_Counseling_Psychologist_Education_and_Career_Roadmap.html', NULL, NULL),
(84, 'Historian', 'S', 'E', 'I', 'https://study.com/be_a_historian.html', NULL, NULL),
(85, 'Hospital Administrator', 'S', 'E', 'R', 'https://study.com/articles/Hospital_Administrator_Learn_How_to_Start_a_Career_in_Hospital_Administration_and_Hospital_Management.html', NULL, NULL),
(86, 'Psychologist', 'S', 'E', 'I', 'https://study.com/psychologist.html', NULL, NULL),
(87, 'Insurance Claims Examiner', 'S', 'I', 'E', 'https://study.com/become_a_claims_examiner.html', NULL, NULL),
(88, 'Medical Assistant', 'S', 'C', 'R', 'https://study.com/articles/Medical_Assistants_Career_Information_and_Requirements_for_Becoming_a_Medical_Assistant.html', NULL, NULL),
(89, 'Minister or Priest or Rabbi', 'S', 'A', 'I', 'https://study.com/articles/Clergy_Professions_Job_Description_and_Information_for_Students_Considering_a_Career_in_the_Clergy_Professions.html', NULL, NULL),
(90, 'Paralegal', 'S', 'C', 'E', 'https://study.com/articles/How_to_Become_a_Paralegal_Specialist.html', NULL, NULL),
(91, 'Park Naturalist', 'S', 'E', 'I', 'https://study.com/articles/How_to_Become_a_Park_Naturalist_Step-by-Step_Career_Guide.html', NULL, NULL),
(92, 'Physical Therapist', 'S', 'I', 'E', 'https://study.com/education_required_to_become_a_physical_therapist.html', NULL, NULL),
(93, 'Police Officer', 'S', 'E', 'R', 'https://study.com/articles/Officer_of_the_Law_Introduction_to_a_Career_as_a_Sheriff_or_Police_Officer.html', NULL, NULL),
(94, 'Probation and Parole Officer', 'S', 'E', 'C', 'https://study.com/probation_officer_requirements.html', NULL, NULL),
(95, 'Real Estate Appraiser', 'S', 'C', 'E', 'https://study.com/how_to_become_an_appraiser.html', NULL, NULL),
(96, 'Recreation Director', 'S', 'E', 'R', 'https://study.com/articles/Recreation_Director_Certification_Training_and_Career_Information.html', NULL, NULL),
(97, 'Registered Nurse', 'S', 'I', 'A', 'https://study.com/nurse_requirements.html', NULL, NULL),
(98, 'Teacher', 'S', 'A', 'E', 'https://study.com/requirements_to_be_a_teacher.html', NULL, NULL),
(99, 'Social Worker', 'S', 'E', 'A', 'https://study.com/social_work_career.html', NULL, NULL),
(100, 'Speech Pathologist', 'S', 'A', 'I', 'https://study.com/speech_language_pathologist.html', NULL, NULL),
(101, 'Vocational Rehab Counselor', 'S', 'E', 'C', 'https://study.com/articles/Vocational_Rehab_Technician_Employment_Information_and_Requirements_for_a_Career_in_Vocational_Rehabilitation.html', NULL, NULL),
(102, 'Volunteer Services Director', 'S', 'E', 'C', 'https://study.com/articles/Volunteer_Coordinator_Job_Description_Duties_and_Salary.html', NULL, NULL),
(103, 'Advertising Executive', 'E', 'S', 'A', 'https://study.com/articles/Advertising_Executive_Job_Duties_and_Salary.html', NULL, NULL),
(104, 'Advertising Sales Rep', 'E', 'S', 'R', 'https://study.com/articles/advertising_sales_representative_job_description_salary.html', NULL, NULL),
(105, 'Banker or Financial Planner', 'E', 'S', 'R', 'https://study.com/articles/How_to_Be_a_Banker_Education_and_Career_Roadmap.html', NULL, NULL),
(106, 'Branch Manager', 'E', 'S', 'A', 'https://study.com/articles/How_to_Become_a_Bank_Branch_Manager_Education_and_Career_Roadmap.html', NULL, NULL),
(107, 'Business Manager', 'E', 'S', 'C', 'https://study.com/articles/Career_Information_for_a_Degree_in_Business_Management_and_Operations.html', NULL, NULL),
(108, 'Buyer', 'E', 'S', 'A', 'https://study.com/retail_buyer_career.html', NULL, NULL),
(109, 'Chamber of Commerce Exec', 'E', 'S', 'A', 'https://study.com/articles/How_to_Become_a_Business_Executive_Education_and_Career_Roadmap.html', NULL, NULL),
(110, 'Credit Analyst', 'E', 'A', 'S', 'https://study.com/articles/Credit_Analyst_Education_Requirements_and_Career_Information.html', NULL, NULL),
(111, 'Customer Service Manager', 'E', 'S', 'A', 'https://study.com/articles/Client_Services_Manager_Job_Description_and_Requirements_for_a_Career_in_Client_Services_Management.html', NULL, NULL),
(112, 'Education & Training Manager', 'E', 'I', 'S', 'https://study.com/articles/How_to_Become_a_Human_Resource_Manager_Education_and_Career_Roadmap.html', NULL, NULL),
(113, 'Entrepreneur', 'E', 'S', 'A', 'https://study.com/articles/Entrepreneurs_Information_About_a_Career_as_an_Entrepreneur.html', NULL, NULL),
(114, 'Foreign Service Officer', 'E', 'S', 'A', 'https://study.com/articles/How_to_Become_a_Foreign_Service_Officer.html', NULL, NULL),
(115, 'Funeral Director', 'E', 'S', 'R', 'https://study.com/articles/Careers_in_Funeral_Services_Options_and_Requirements.html', NULL, NULL),
(116, 'Insurance Manager', 'E', 'S', 'C', 'https://study.com/articles/How_to_Become_an_Insurance_Consultant_Step-by-Step_Career_Guide.html', NULL, NULL),
(117, 'Interpreter', 'E', 'S', 'A', 'https://study.com/become_an_interpreter.html', NULL, NULL),
(118, 'Lawyer or Attorney', 'E', 'S', 'A', 'https://study.com/education_requirements_for_becoming_a_lawyer.html', NULL, NULL),
(119, 'Lobbyist', 'E', 'S', 'A', 'https://study.com/articles/Become_a_Lobbyist_Education_and_Career_Roadmap.html', NULL, NULL),
(120, 'Office Manager', 'E', 'S', 'R', 'https://study.com/office_manager_duties.html', NULL, NULL),
(121, 'Personnel Recruiter', 'E', 'S', 'R', 'https://study.com/articles/How_to_Become_a_Recruiter_Education_and_Career_Roadmap.html', NULL, NULL),
(122, 'Politician', 'E', 'S', 'A', 'https://study.com/what_can_i_do_with_a_political_science_degree.html', NULL, NULL),
(123, 'Public Relations Rep', 'E', 'A', 'S', 'https://study.com/articles/Public_Relations_Specialist_Job_Description_Duties_and_Requirements.html', NULL, NULL),
(124, 'Retail Store Manager', 'E', 'S', 'R', 'https://study.com/articles/Store_Manager_Job_Description_Duties_and_Requirements.html', NULL, NULL),
(125, 'Sales Manager', 'E', 'S', 'A', 'https://study.com/sales_manager_education.html', NULL, NULL),
(126, 'Sales Representative', 'E', 'R', 'S', 'https://study.com/become_a_sales_representative.html', NULL, NULL),
(127, 'Social Service Director', 'E', 'S', 'A', 'https://study.com/social_work_career.html', NULL, NULL),
(128, 'Stockbroker', 'E', 'S', 'I', 'https://study.com/articles/Requirements_for_a_Licensed_Stock_Broker_Education_and_Career_Info.html', NULL, NULL),
(129, 'Tax Accountant', 'E', 'C', 'S', 'https://study.com/articles/How_to_Become_a_Tax_Advisor_Education_and_Career_Roadmap.html', NULL, NULL),
(130, 'Abstractor', 'C', 'S', 'I', 'https://study.com/articles/Certified_Abstractor_Job_Description_Duties_and_Education_Requirements.html', NULL, NULL),
(131, 'Accountant', 'C', 'S', 'E', 'https://study.com/articles/Tax_Accountant_Career_and_Salary_Information.html', NULL, NULL),
(132, 'Administrative Assistant', 'E', 'S', 'C', 'https://study.com/administrative_assistant_job_description.html', NULL, NULL),
(133, 'Budget Analyst', 'C', 'E', 'R', 'https://study.com/articles/Budget_Analysts_Job_Duties_and_Information_About_Becoming_a_Budget_Analyst.html', NULL, NULL),
(134, 'Business Manager', 'E', 'S', 'C', 'https://study.com/articles/Business_Operations_Manager_Job_Description_and_Requirements_for_Becoming_a_Business_Operations_Manager.html', NULL, NULL),
(135, 'Business Programmer', 'C', 'R', 'I', 'https://study.com/articles/How_to_Become_a_Data_Programmer_Career_Guide.html', NULL, NULL),
(136, 'Business Teacher', 'C', 'S', 'E', 'https://study.com/become_a_business_teacher.html', NULL, NULL),
(137, 'Catalog Librarian', 'C', 'S', 'E', 'https://study.com/articles/Library_Assistant_Employment_Info_and_Requirements_for_Becoming_a_Library_Assistant.html', NULL, NULL),
(138, 'Claims Adjuster', 'S', 'E', 'C', 'https://study.com/articles/How_to_Become_an_Auto_Claims_Adjuster_Career_Guide.html', NULL, NULL),
(139, 'Computer Operator', 'C', 'S', 'R', 'https://study.com/articles/How_to_Become_a_Computer_Operator_Education_and_Career_Roadmap.html', NULL, NULL),
(140, 'Congressional District Aide', 'C', 'E', 'S', 'https://study.com/articles/Become_a_Congressional_Aide_Career_and_Education_Requirements.html', NULL, NULL),
(141, 'Cost Accountant', 'C', 'E', 'S', 'https://study.com/articles/Cost_Accountant_Job_Duties_Salary_and_Education_Requirements.html', NULL, NULL),
(142, 'Court Reporter', 'C', 'S', 'E', 'https://study.com/articles/Court_Reporter_How_Do_I_Become_a_Court_Reporter.html', NULL, NULL),
(143, 'Credit Manager', 'E', 'S', 'C', 'https://study.com/articles/Become_a_Credit_Collections_Manager_Education_and_Career_Roadmap.html', NULL, NULL),
(144, 'Customs Inspector', 'C', 'E', 'I', 'https://study.com/articles/Customs_Inspector_Job_Description_and_Education_Requirements.html', NULL, NULL),
(145, 'Editorial Assistant', 'C', 'S', 'I', 'https://study.com/articles/How_to_Become_an_Editorial_Assistant_Step-by-Step_Career_Guide.html', NULL, NULL),
(146, 'Elementary School Teacher', 'S', 'E', 'C', 'https://study.com/elementary_school_teacher_information.html', NULL, NULL),
(147, 'Financial Analyst', 'C', 'S', 'I', 'https://study.com/articles/Financial_Analyst_Educational_Requirements_for_Financial_Analysts.html', NULL, NULL),
(148, 'Insurance Manager', 'E', 'S', 'C', 'https://study.com/articles/How_to_Become_a_Healthcare_Manager_Step-by-Step_Career_Guide.html', NULL, NULL),
(149, 'Insurance Underwriter', 'C', 'S', 'E', 'https://study.com/articles/Insurance_Underwriter_Employment_Info_and_Requirements_for_a_Career_in_Insurance_Underwriting.html', NULL, NULL),
(150, 'Internal Auditor', 'I', 'C', 'R', 'https://study.com/articles/Internal_Auditor_Education_Requirements_and_Career_Information.html', NULL, NULL),
(151, 'Kindergarten Teacher', 'E', 'S', 'C', 'https://study.com/articles/Kindergarten_Teacher_Career_Information_for_Those_Interested_in_Teaching_Kindergarten.html', NULL, NULL),
(152, 'Medical Records Technician', 'C', 'S', 'E', 'https://study.com/articles/Medical_Records_Technician_Employment_Info_and_Requirements_for_a_Career_as_a_Medical_Record_Technician.html', NULL, NULL),
(153, 'Museum Registrar', 'C', 'S', 'E', 'https://study.com/articles/Become_a_Museum_Curator_Step-by-Step_Career_Guide.html', NULL, NULL),
(154, 'Paralegal', 'S', 'C', 'E', 'https://study.com/articles/How_to_Become_a_Paralegal_Specialist.html', NULL, NULL),
(155, 'Safety Inspector', 'R', 'C', 'S', 'https://study.com/articles/How_to_Become_a_Safety_Inspector_Education_and_Career_Roadmap.html', NULL, NULL),
(156, 'Tax Accountant', 'E', 'C', 'S', 'https://study.com/articles/Tax_Accountant_Job_Description_and_Requirements_for_Becoming_a_Tax_Accountant.html', NULL, NULL),
(157, 'Tax Consultant', 'C', 'E', 'S', 'https://study.com/articles/How_to_Become_a_Tax_Advisor_Education_and_Career_Roadmap.html', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
