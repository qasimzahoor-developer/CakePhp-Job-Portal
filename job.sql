-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2023 at 04:02 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobaak`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `cover` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_id`, `applicant_id`, `resume_id`, `cover`, `status`, `created`, `modified`) VALUES
(1, 2, 1, 2, 'z zczx ', 1, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(2, 2, 3, 34, 'f sdfsd fsdf', 1, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(3, 2, 1, 2, 'z zczx ', 2, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(4, 2, 3, 34, 'f sdfsd fsdf', 2, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(5, 2, 1, 2, 'z zczx ', 2, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(6, 2, 3, 34, 'f sdfsd fsdf', 3, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(7, 2, 1, 2, 'z zczx ', 3, '2017-06-14 00:00:00', '2017-06-14 00:00:00'),
(8, 2, 3, 34, 'f sdfsd fsdf', 0, '2017-06-15 00:00:00', '2017-06-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `new_window` tinyint(1) NOT NULL,
  `date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`) VALUES
(1, 'Abbaspur', 'jobs-in-abbaspur'),
(2, 'Abbottabad', 'jobs-in-abbottabad'),
(3, 'Arifwala', 'jobs-in-arifwala'),
(4, 'Attock', 'jobs-in-attock'),
(5, 'Badin', 'jobs-in-badin'),
(6, 'Bahawalnagar', 'jobs-in-bahawalnagar'),
(7, 'Bahawalpur', 'jobs-in-bahawalpur'),
(8, 'Bhakkar', 'jobs-in-bhakkar'),
(9, 'Bhalwal', 'jobs-in-bhalwal'),
(10, 'Chakwal', 'jobs-in-chakwal'),
(11, 'Chaman', 'jobs-in-chaman'),
(12, 'Chiniot', 'jobs-in-chiniot'),
(13, 'Chishtian', 'jobs-in-chishtian'),
(14, 'Chitral', 'jobs-in-chitral'),
(15, 'Depal Pur', 'jobs-in-depal-pur'),
(16, 'Dera Ghazi Khan', 'jobs-in-dera-ghazi-khan'),
(17, 'Dera Ismail Khan', 'jobs-in-dera-ismail-khan'),
(18, 'Dinga', 'jobs-in-dinga'),
(19, 'Faisalabad', 'jobs-in-faisalabad'),
(20, 'FR Peshawar', 'jobs-in-fr-peshawar'),
(21, 'FR Peshawar / Kohat', 'jobs-in-fr-peshawar-kohat'),
(22, 'Gharo', 'jobs-in-gharo'),
(23, 'Gilgit', 'jobs-in-gilgit'),
(24, 'Gujar Khan', 'jobs-in-gujar-khan'),
(25, 'Gujranwala', 'jobs-in-gujranwala'),
(26, 'Gujrat', 'jobs-in-gujrat'),
(27, 'Hafizabad', 'jobs-in-hafizabad'),
(28, 'Hari Pur', 'jobs-in-hari-pur'),
(29, 'Hassan Abdal', 'jobs-in-hassan-abdal'),
(30, 'Hub Chowki', 'jobs-in-hub-chowki'),
(31, 'Hub Inds Estate', 'jobs-in-hub-inds-estate'),
(32, 'Islamabad', 'jobs-in-islamabad'),
(33, 'Jehlum', 'jobs-in-jehlum'),
(34, 'Jhang', 'jobs-in-jhang'),
(35, 'Kala Shah Kaku', 'jobs-in-kala-shah-kaku'),
(36, 'Kandhkot', 'jobs-in-kandhkot'),
(37, 'Karachi', 'jobs-in-karachi'),
(38, 'Karak', 'jobs-in-karak'),
(39, 'Kashmir', 'jobs-in-kashmir'),
(40, 'Kasur', 'jobs-in-kasur'),
(41, 'Khanewal', 'jobs-in-khanewal'),
(42, 'Khanqah Sharif', 'jobs-in-khanqah-sharif'),
(43, 'Khushab', 'jobs-in-khushab'),
(44, 'Kohat', 'jobs-in-kohat'),
(45, 'Kotli', 'jobs-in-kotli'),
(46, 'Kotri', 'jobs-in-kotri'),
(47, 'Lahore', 'jobs-in-lahore'),
(48, 'Lakki Marwat', 'jobs-in-lakki-marwat'),
(49, 'Larkana', 'jobs-in-larkana'),
(50, 'Madinah', 'jobs-in-madinah'),
(51, 'Mandi Bahauddin', 'jobs-in-mandi-bahauddin'),
(52, 'Mandra', 'jobs-in-mandra'),
(53, 'Manga Mandi', 'jobs-in-manga-mandi'),
(54, 'Mansehra', 'jobs-in-mansehra'),
(55, 'Mardan', 'jobs-in-mardan'),
(56, 'Mian Walli', 'jobs-in-mian-walli'),
(57, 'Mithi', 'jobs-in-mithi'),
(58, 'Multan', 'jobs-in-multan'),
(59, 'Muzaffarabad', 'jobs-in-muzaffarabad'),
(60, 'Narowal', 'jobs-in-narowal'),
(61, 'Nawab Shah', 'jobs-in-nawab-shah'),
(62, 'Okara', 'jobs-in-okara'),
(63, 'Peshawar', 'jobs-in-peshawar'),
(64, 'Quetta', 'jobs-in-quetta'),
(65, 'Rahimyar Khan', 'jobs-in-rahimyar-khan'),
(66, 'Raiwind', 'jobs-in-raiwind'),
(67, 'Rawalpindi', 'jobs-in-rawalpindi'),
(68, 'Rawat', 'jobs-in-rawat'),
(69, 'Sahiwal', 'jobs-in-sahiwal'),
(70, 'Sajawal', 'jobs-in-sajawal'),
(71, 'Sargodha', 'jobs-in-sargodha'),
(72, 'Sheikhupura', 'jobs-in-sheikhupura'),
(73, 'Shikarpur', 'jobs-in-shikarpur'),
(74, 'Sialkot', 'jobs-in-sialkot'),
(75, 'Sukkur', 'jobs-in-sukkur'),
(76, 'Swabi', 'jobs-in-swabi'),
(77, 'Swat', 'jobs-in-swat'),
(78, 'Tando Allahyar', 'jobs-in-tando-allahyar'),
(79, 'Taxila', 'jobs-in-taxila'),
(80, 'Thatta', 'jobs-in-thatta'),
(81, 'Umer Kot', 'jobs-in-umer-kot'),
(82, 'Vehari', 'jobs-in-vehari'),
(83, 'Wah Cantt', 'jobs-in-wah-cantt'),
(84, 'Yazman Mandi', 'jobs-in-yazman-mandi'),
(85, 'Zahir Pir', 'jobs-in-zahir-pir'),
(86, 'Zhob', 'jobs-in-zhob');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `co_title` varchar(500) NOT NULL,
  `industry` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `op_since` int(11) NOT NULL,
  `co_address` text NOT NULL,
  `landline` varchar(16) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `no_employee` int(11) DEFAULT NULL,
  `no_offices` int(11) DEFAULT NULL,
  `website` varchar(500) DEFAULT NULL,
  `logo` varchar(500) NOT NULL,
  `details` text NOT NULL,
  `head_name` varchar(255) NOT NULL,
  `head_cnic` varchar(25) NOT NULL,
  `head_email` varchar(255) NOT NULL,
  `head_no` varchar(16) NOT NULL,
  `hr_name` varchar(255) NOT NULL,
  `hr_cnic` varchar(25) DEFAULT NULL,
  `hr_email` varchar(255) NOT NULL,
  `hr_no` varchar(16) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `user_id`, `co_title`, `industry`, `type`, `city`, `op_since`, `co_address`, `landline`, `mobile`, `no_employee`, `no_offices`, `website`, `logo`, `details`, `head_name`, `head_cnic`, `head_email`, `head_no`, `hr_name`, `hr_cnic`, `hr_email`, `hr_no`, `status`, `created`, `modified`) VALUES
(1, 2, 'Edixen Solution', 3, 3, 2, 1, 'INFOTECH GLOBAL PTE LTD \r\nTechnopreneur Centre \r\nBlk 1003, Bukit Merah Central, #04-14, ', '04231234567', '03005644006', 7, 6, 'blog.dineinthecity.com', '{\"main\":\"\\/images\\/employers\\/1497084027593bb07b7b031-jobimg.jpg\",\"200_200\":\"\\/images\\/employers\\/logo\\\\1497084027593bb07b7c2bb-jobimg.jpg\"}', 'Established in 1995, InfoTech now stands as a recognized market leader in Business & Information Management Consulting, Technology Solutions Provisioning, Systems Integration and Outsourcing Services.\r\n\r\n\r\n\r\nWith deep business process knowledge, highly skilled resources and collaborative working culture we are committed to delivering Performance-centric Technology Solutions for our customer to help them become high-performance businesses and governments.\r\n\r\n\r\n\r\nA decade of our alliance partnership with industry leaders like IBM, Oracle/Siebel, Microsoft, Cisco, Computer Associates, and others, provide us distinct advantages to remain as a \"Dependable & Trusted\" technology partner to our customers.', 'Qasim', '03001234567', 'co@edixen.com', '03001234567', 'Qasim', '56453', 'co@edixen.com', '03001234567', 0, '2017-06-10 08:40:27', '2017-06-10 08:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `functional`
--

DROP TABLE IF EXISTS `functional`;
CREATE TABLE IF NOT EXISTS `functional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `functional`
--

INSERT INTO `functional` (`id`, `name`, `slug`) VALUES
(1, 'Accountant', 'accountant-jobs'),
(2, 'Accounts, Finance & Financial Services ', 'accounts-finance-financial-services-jobs'),
(3, 'Administration Clerical', 'administration-clerical-jobs'),
(4, 'Admin', 'admin-jobs'),
(5, 'Administration ', 'administration-jobs'),
(6, 'Advertising ', 'advertising-jobs'),
(7, 'Architecture', 'architecture-jobs'),
(8, 'Architects & Construction ', 'architects-construction-jobs'),
(9, 'Advertisment', 'advertisment-jobs'),
(10, 'Advertising', 'advertising-jobs'),
(11, 'Admin Operation', 'admin-operation-jobs'),
(12, 'Business Management', 'business-management-jobs'),
(13, 'Bank Operation', 'bank-operation-jobs'),
(14, 'Business Development', 'business-development-jobs'),
(15, 'Business Systems Analyst', 'business-systems-analyst-jobs'),
(16, 'Clerical', 'clerical-jobs'),
(17, 'Client Services & Customer Support ', 'client-services-customer-support-jobs'),
(18, 'Computer Networking ', 'computer-networking-jobs'),
(19, 'Corporate Affairs ', 'corporate-affairs-jobs'),
(20, 'Creative Design ', 'creative-design-jobs'),
(21, 'Computer Hardware', 'computer-hardware-jobs'),
(22, 'Consultant', 'consultant-jobs'),
(23, 'Customer Support', 'customer-support-jobs'),
(24, 'Content Writer', 'content-writer-jobs'),
(25, 'Creative Writer', 'creative-writer-jobs'),
(26, 'Data Entry Operator', 'data-entry-operator-jobs'),
(27, 'Data Entry ', 'data-entry-jobs'),
(28, 'Database Administration  ', 'database-administration-jobs'),
(29, 'Distribution & Logistics ', 'distribution-logistics-jobs'),
(30, 'Development', 'development-jobs'),
(31, 'Engineering Construction', 'engineering-construction-jobs'),
(32, 'Engineering ', 'engineering-jobs'),
(33, 'Executive Management ', 'executive-management-jobs'),
(34, 'Electronics Technician', 'electronics-technician-jobs'),
(35, 'Executive Secretary', 'executive-secretary-jobs'),
(36, 'Education & Training', 'education-training-jobs'),
(37, 'Field Operations ', 'field-operations-jobs'),
(38, 'Front Desk Clerk', 'front-desk-clerk-jobs'),
(39, 'Front Desk Officer', 'front-desk-officer-jobs'),
(40, 'Graphic Design', 'graphic-design-jobs'),
(41, 'Hardware ', 'hardware-jobs'),
(42, 'Health Care', 'health-care-jobs'),
(43, 'Health Related', 'health-related-jobs'),
(44, 'Health & Medicine ', 'health-medicine-jobs'),
(45, 'Hotel Management', 'hotel-management-jobs'),
(46, 'Hotel/Restaurant Management ', 'hotel-restaurant-management-jobs'),
(47, 'HR', 'hr-jobs'),
(48, 'Human Resources ', 'human-resources-jobs'),
(49, 'Health & Safety', 'health-safety-jobs'),
(50, 'Interior Designers & Architects', 'interior-designers-architects-jobs'),
(51, 'Import & Export ', 'import-export-jobs'),
(52, 'Industrial Production ', 'industrial-production-jobs'),
(53, 'Internship', 'internship-jobs'),
(54, 'Intern ', 'intern-jobs'),
(55, 'Investment Operations ', 'investment-operations-jobs'),
(56, 'Installation & Repair', 'installation-repair-jobs'),
(57, 'IT Security', 'it-security-jobs'),
(58, 'IT Systems Analyst', 'it-systems-analyst-jobs'),
(59, 'Legal & Corporate Affairs', 'legal-corporate-affairs-jobs'),
(60, 'Legal Research', 'legal-research-jobs'),
(61, 'Legal Affairs ', 'legal-affairs-jobs'),
(62, 'Logistics & Warehousing', 'logistics-warehousing-jobs'),
(63, 'Managerial', 'managerial-jobs'),
(64, 'Media & Advertising', 'media-advertising-jobs'),
(65, 'Medicine', 'medicine-jobs'),
(66, 'Medical', 'medical-jobs'),
(67, 'Maintenance/Repair ', 'maintenance-repair-jobs'),
(68, 'Management Consulting ', 'management-consulting-jobs'),
(69, 'Management Information System  ', 'management-information-system-jobs'),
(70, 'Manufacturing ', 'manufacturing-jobs'),
(71, 'Marketing ', 'marketing-jobs'),
(72, 'Media - Print & Electronic ', 'media-print-electronic-jobs'),
(73, 'Merchandising ', 'merchandising-jobs'),
(74, 'Monitoring & Evaluation  ', 'monitoring-evaluation-jobs'),
(75, 'Merchandising & Product Management', 'merchandising-product-management-jobs'),
(76, 'Marketing', 'marketing-jobs'),
(77, 'Manufacturing & Operations', 'manufacturing-operations-jobs'),
(78, 'Network Administration', 'network-administration-jobs'),
(79, 'Network Operation', 'network-operation-jobs'),
(80, 'Online Advertising', 'online-advertising-jobs'),
(81, 'Operations ', 'operations-jobs'),
(82, 'Online Marketing', 'online-marketing-jobs'),
(83, 'Project Management Consultant', 'project-management-consultant-jobs'),
(84, 'Production', 'production-jobs'),
(85, 'Printing', 'printing-jobs'),
(86, 'Print Media', 'print-media-jobs'),
(87, 'Planning', 'planning-jobs'),
(88, 'Planning & Development ', 'planning-development-jobs'),
(89, 'Procurement ', 'procurement-jobs'),
(90, 'Product Development', 'product-development-jobs'),
(91, 'Product Developer', 'product-developer-jobs'),
(92, 'Product Development ', 'product-development-jobs'),
(93, 'Product Management ', 'product-management-jobs'),
(94, 'Project Management ', 'project-management-jobs'),
(95, 'PR', 'pr-jobs'),
(96, 'Public Relations ', 'public-relations-jobs'),
(97, 'Production & Quality Control', 'production-quality-control-jobs'),
(98, 'QA', 'qa-jobs'),
(99, 'Quality Assurance  ', 'quality-assurance-jobs'),
(100, 'QC', 'qc-jobs'),
(101, 'Quality Inspection', 'quality-inspection-jobs'),
(102, 'Quality Control ', 'quality-control-jobs'),
(103, 'Qualitative Research', 'qualitative-research-jobs'),
(104, 'Restaurant Management', 'restaurant-management-jobs'),
(105, 'Recruiting', 'recruiting-jobs'),
(106, 'Recruitment', 'recruitment-jobs'),
(107, 'Repair & Overhaul', 'repair-overhaul-jobs'),
(108, 'Retail Merchandising', 'retail-merchandising-jobs'),
(109, 'Research & Evaluation', 'research-evaluation-jobs'),
(110, 'Retail Buying', 'retail-buying-jobs'),
(111, 'Retail Buyer', 'retail-buyer-jobs'),
(112, 'Research & Fellowships', 'research-fellowships-jobs'),
(113, 'Research & Development ', 'research-development-jobs'),
(114, 'Researcher ', 'researcher-jobs'),
(115, 'Retail & Wholesale', 'retail-wholesale-jobs'),
(116, 'Retail ', 'retail-jobs'),
(117, 'Sales Support', 'sales-support-jobs'),
(118, 'Supply Chain', 'supply-chain-jobs'),
(119, 'Software Testing', 'software-testing-jobs'),
(120, 'Security & Environment', 'security-environment-jobs'),
(121, 'Safety & Environment ', 'safety-environment-jobs'),
(122, 'Sales', 'sales-jobs'),
(123, 'Sales & Business Development ', 'sales-business-development-jobs'),
(124, 'SEM', 'sem-jobs'),
(125, 'SMO', 'smo-jobs'),
(126, 'Search Engine Optimization  ', 'search-engine-optimization-jobs'),
(127, 'Secretarial, Clerical & Front Office ', 'secretarial-clerical-front-office-jobs'),
(128, 'Security Guard', 'security-guard-jobs'),
(129, 'Security ', 'security-jobs'),
(130, 'Software Engineer', 'software-engineer-jobs'),
(131, 'Software & Web Development ', 'software-web-development-jobs'),
(132, 'Supply Chain Management ', 'supply-chain-management-jobs'),
(133, 'Systems Analyst ', 'systems-analyst-jobs'),
(134, 'Stores & Warehousing', 'stores-warehousing-jobs'),
(135, 'Typing', 'typing-jobs'),
(136, 'Testing', 'testing-jobs'),
(137, 'Training & Development', 'training-development-jobs'),
(138, 'Teachers/Education, Training & Development ', 'teachers-education-training-development-jobs'),
(139, 'TSR', 'tsr-jobs'),
(140, 'Tele Sale Representative', 'tele-sale-representative-jobs'),
(141, 'Telemarketing ', 'telemarketing-jobs'),
(142, 'Transportation & Warehousing', 'transportation-warehousing-jobs'),
(143, 'Technical Writer', 'technical-writer-jobs'),
(144, 'Web Marketing', 'web-marketing-jobs'),
(145, 'Web Developer', 'web-developer-jobs'),
(146, 'Warehousing ', 'warehousing-jobs'),
(147, 'Writer ', 'writer-jobs');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

DROP TABLE IF EXISTS `industry`;
CREATE TABLE IF NOT EXISTS `industry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `name`, `slug`) VALUES
(1, 'Accounting', 'accounting-jobs'),
(2, 'Accounts', 'accounts-jobs'),
(3, 'Audit', 'audit-jobs'),
(4, 'Accountant', 'accountant-jobs'),
(5, 'Auditor', 'auditor-jobs'),
(6, 'Accounting/Taxation', 'accounting-taxation-jobs'),
(7, 'Advertising/PR', 'advertising-pr-jobs'),
(8, 'Agriculture', 'agriculture-jobs'),
(9, 'Agricultural', 'agricultural-jobs'),
(10, 'Agriculture/Fertilizer/Pesticide', 'agriculture-fertilizer-pesticide-jobs'),
(11, 'Apparel', 'apparel-jobs'),
(12, 'Apparel/Clothing', 'apparel-clothing-jobs'),
(13, 'Architecture', 'architecture-jobs'),
(14, 'Architectural Services', 'architectural-services-jobs'),
(15, 'Architects', 'architects-jobs'),
(16, 'Architecture/Interior Design', 'architecture-interior-design-jobs'),
(17, 'Arts', 'arts-jobs'),
(18, 'Arts / Entertainment', 'arts-entertainment-jobs'),
(19, 'Automotive', 'automotive-jobs'),
(20, 'AutoMobile', 'automobile-jobs'),
(21, 'Aviation', 'aviation-jobs'),
(22, 'Apparel & Fashion', 'apparel-fashion-jobs'),
(23, 'Attorney', 'attorney-jobs'),
(24, 'Advocate', 'advocate-jobs'),
(25, 'Advertisement', 'advertisement-jobs'),
(26, 'Banking', 'banking-jobs'),
(27, 'Banking/Financial Services', 'banking-financial-services-jobs'),
(28, 'BPO', 'bpo-jobs'),
(29, 'Broadcasting', 'broadcasting-jobs'),
(30, 'Broadcaster', 'broadcaster-jobs'),
(31, 'Broadcasting', 'broadcasting-jobs'),
(32, 'Business Development', 'business-development-jobs'),
(33, 'Business', 'business-jobs'),
(34, 'BizDev', 'bizdev-jobs'),
(35, 'Business Development', 'business-development-jobs'),
(36, 'Building & Construction', 'building-construction-jobs'),
(37, 'Banking & Finance', 'banking-finance-jobs'),
(38, 'Commerce', 'commerce-jobs'),
(39, 'Clothing', 'clothing-jobs'),
(40, 'CSR', 'csr-jobs'),
(41, 'Call Center', 'call-center-jobs'),
(42, 'Chemical', 'chemical-jobs'),
(43, 'Chemical Operator', 'chemical-operator-jobs'),
(44, 'Chemical Industry', 'chemical-industry-jobs'),
(45, 'Chemicals', 'chemicals-jobs'),
(46, 'Construction', 'construction-jobs'),
(47, 'Cement', 'cement-jobs'),
(48, 'Contractor', 'contractor-jobs'),
(49, 'Construction/Cement/Metals', 'construction-cement-metals-jobs'),
(50, 'Consultants', 'consultants-jobs'),
(51, 'Courier/Logistics', 'courier-logistics-jobs'),
(52, 'Catering', 'catering-jobs'),
(53, 'Chef', 'chef-jobs'),
(54, 'Communications', 'communications-jobs'),
(55, 'Clinical Research', 'clinical-research-jobs'),
(56, 'Design', 'design-jobs'),
(57, 'Distribution and Logistics', 'distribution-and-logistics-jobs'),
(58, 'Design & Fashion', 'design-fashion-jobs'),
(59, 'Digital Media', 'digital-media-jobs'),
(60, 'Designing', 'designing-jobs'),
(61, 'Entertainment', 'entertainment-jobs'),
(62, 'Education', 'education-jobs'),
(63, 'Education/Training', 'education-training-jobs'),
(64, 'Electrical Engineering', 'electrical-engineering-jobs'),
(65, 'Electronic Engineering', 'electronic-engineering-jobs'),
(66, 'Electronics', 'electronics-jobs'),
(67, 'Engineering', 'engineering-jobs'),
(68, 'Event Management', 'event-management-jobs'),
(69, 'Finance', 'finance-jobs'),
(70, 'Fertilizer', 'fertilizer-jobs'),
(71, 'Fashion Stylist', 'fashion-stylist-jobs'),
(72, 'Fashion & Beauty', 'fashion-beauty-jobs'),
(73, 'Fashion', 'fashion-jobs'),
(74, 'Female', 'female-jobs'),
(75, 'Fast Moving Consumer Goods', 'fast-moving-consumer-goods-jobs'),
(76, 'Food & Beverages', 'food-beverages-jobs'),
(77, 'Federal Government', 'federal-government-jobs'),
(78, 'Fitness', 'fitness-jobs'),
(79, 'Fitness Trainers', 'fitness-trainers-jobs'),
(80, 'Gems & Jewelery', 'gems-jewelery-jobs'),
(81, 'Govt.', 'govt-jobs'),
(82, 'Government Sector', 'government-sector-jobs'),
(83, 'Government', 'government-jobs'),
(84, 'Gym Instructor', 'gym-instructor-jobs'),
(85, 'Garments', 'garments-jobs'),
(86, 'Health', 'health-jobs'),
(87, 'Health Services', 'health-services-jobs'),
(88, 'Health Beauty Fitness', 'health-beauty-fitness-jobs'),
(89, 'Health & Fitness', 'health-fitness-jobs'),
(90, 'Healthcare & Medical', 'healthcare-medical-jobs'),
(91, 'Healthcare/Hospital/Medical', 'healthcare-hospital-medical-jobs'),
(92, 'Hospitality &Tourism', 'hospitality-tourism-jobs'),
(93, 'Hospitality', 'hospitality-jobs'),
(94, 'Hotel Management', 'hotel-management-jobs'),
(95, 'Hotel', 'hotel-jobs'),
(96, 'Hospitality', 'hospitality-jobs'),
(97, 'Hotel Management / Restaurants', 'hotel-management-restaurants-jobs'),
(98, 'Home Care', 'home-care-jobs'),
(99, 'Hosiery Garments', 'hosiery-garments-jobs'),
(100, 'Hotel & Tourism', 'hotel-tourism-jobs'),
(101, 'Interior Designer', 'interior-designer-jobs'),
(102, 'Interior Design', 'interior-design-jobs'),
(103, 'Information And Broadcasting', 'information-and-broadcasting-jobs'),
(104, 'Importers/ Distributors/Exporters', 'importers-distributors-exporters-jobs'),
(105, 'IT', 'it-jobs'),
(106, 'Information Technology', 'information-technology-jobs'),
(107, 'Insurance / Takaful', 'insurance-takaful-jobs'),
(108, 'Investments', 'investments-jobs'),
(109, 'ISP', 'isp-jobs'),
(110, 'Logistics & Supply', 'logistics-supply-jobs'),
(111, 'Law Firms', 'law-firms-jobs'),
(112, 'Legal', 'legal-jobs'),
(113, 'Lawyers', 'lawyers-jobs'),
(114, 'Legal Advisor', 'legal-advisor-jobs'),
(115, 'Law Firms/Legal', 'law-firms-legal-jobs'),
(116, 'Logistics', 'logistics-jobs'),
(117, 'Modeling', 'modeling-jobs'),
(118, 'Media', 'media-jobs'),
(119, 'Metals', 'metals-jobs'),
(120, 'Mechanical Engineering', 'mechanical-engineering-jobs'),
(121, 'Managment', 'managment-jobs'),
(122, 'Manufacturing', 'manufacturing-jobs'),
(123, 'Media/Communications', 'media-communications-jobs'),
(124, 'Mining', 'mining-jobs'),
(125, 'Mining/Oil & Gas/Petroleum', 'mining-oil-gas-petroleum-jobs'),
(126, 'Medical Research', 'medical-research-jobs'),
(127, 'Medical', 'medical-jobs'),
(128, 'Marine & Ocean', 'marine-ocean-jobs'),
(129, 'News Channel', 'news-channel-jobs'),
(130, 'Newspaper', 'newspaper-jobs'),
(131, 'Natural Resources', 'natural-resources-jobs'),
(132, 'NGO', 'ngo-jobs'),
(133, 'N.G.O./Social Services', 'n-g-o-social-services-jobs'),
(134, 'Networking', 'networking-jobs'),
(135, 'Network ISP', 'network-isp-jobs'),
(136, 'Online BPO', 'online-bpo-jobs'),
(137, 'Oil & Gas', 'oil-gas-jobs'),
(138, 'PR', 'pr-jobs'),
(139, 'Public Relations', 'public-relations-jobs'),
(140, 'Pesticide', 'pesticide-jobs'),
(141, 'Principal', 'principal-jobs'),
(142, 'Public Sector', 'public-sector-jobs'),
(143, 'Press', 'press-jobs'),
(144, 'Print Media', 'print-media-jobs'),
(145, 'Petroleum', 'petroleum-jobs'),
(146, 'Packaging', 'packaging-jobs'),
(147, 'Personal Care', 'personal-care-jobs'),
(148, 'Personal Care and Services', 'personal-care-and-services-jobs'),
(149, 'Pharmaceuticals', 'pharmaceuticals-jobs'),
(150, 'Pharma', 'pharma-jobs'),
(151, 'Pharmacy', 'pharmacy-jobs'),
(152, 'Pharmaceuticals/Clinical Research', 'pharmaceuticals-clinical-research-jobs'),
(153, 'Power/Energy', 'power-energy-jobs'),
(154, 'Project Management', 'project-management-jobs'),
(155, 'Publishing', 'publishing-jobs'),
(156, 'Printing', 'printing-jobs'),
(157, 'Printing Services', 'printing-services-jobs'),
(158, 'Publishers', 'publishers-jobs'),
(159, 'Publishing/Printing', 'publishing-printing-jobs'),
(160, 'Police', 'police-jobs'),
(161, 'Ports & Shipping', 'ports-shipping-jobs'),
(162, 'Restaurants', 'restaurants-jobs'),
(163, 'Real Estate/Property', 'real-estate-property-jobs'),
(164, 'Recruitment/Employment Firms', 'recruitment-employment-firms-jobs'),
(165, 'Retailer', 'retailer-jobs'),
(166, 'Retail', 'retail-jobs'),
(167, 'Showbiz', 'showbiz-jobs'),
(168, 'Sales & Business Development', 'sales-business-development-jobs'),
(169, 'Shipping & Logistics', 'shipping-logistics-jobs'),
(170, 'Stock Exchange', 'stock-exchange-jobs'),
(171, 'Social Services', 'social-services-jobs'),
(172, 'Services', 'services-jobs'),
(173, 'Security Guard', 'security-guard-jobs'),
(174, 'Security/Law Enforcement', 'security-law-enforcement-jobs'),
(175, 'Services', 'services-jobs'),
(176, 'Shipping/Marine', 'shipping-marine-jobs'),
(177, 'Storage & Distribution', 'storage-distribution-jobs'),
(178, 'Stores & Warehousing', 'stores-warehousing-jobs'),
(179, 'Taxation', 'taxation-jobs'),
(180, 'Tax', 'tax-jobs'),
(181, 'Tax Collector', 'tax-collector-jobs'),
(182, 'TV', 'tv-jobs'),
(183, 'Transportation & Logistics', 'transportation-logistics-jobs'),
(184, 'Transportation & Distribution', 'transportation-distribution-jobs'),
(185, 'Training', 'training-jobs'),
(186, 'Teaching', 'teaching-jobs'),
(187, 'Teachers Training', 'teachers-training-jobs'),
(188, 'Trainee Teacher', 'trainee-teacher-jobs'),
(189, 'Teacher', 'teacher-jobs'),
(190, 'Textiles & Fashion', 'textiles-fashion-jobs'),
(191, 'Technology', 'technology-jobs'),
(192, 'Telecommunication', 'telecommunication-jobs'),
(193, 'Telecom', 'telecom-jobs'),
(194, 'Telecom ISP', 'telecom-isp-jobs'),
(195, 'Telecommunication/ISP', 'telecommunication-isp-jobs'),
(196, 'Textile', 'textile-jobs'),
(197, 'Textile Garments', 'textile-garments-jobs'),
(198, 'Textiles/Garments', 'textiles-garments-jobs'),
(199, 'Tiles & Ceramics', 'tiles-ceramics-jobs'),
(200, 'Travel', 'travel-jobs'),
(201, 'Tourism', 'tourism-jobs'),
(202, 'Transportation', 'transportation-jobs'),
(203, 'Transportation Services', 'transportation-services-jobs'),
(204, 'Travel/Tourism/Transportation', 'travel-tourism-transportation-jobs'),
(205, 'Transportation & Warehousing', 'transportation-warehousing-jobs'),
(206, 'Warehousing', 'warehousing-jobs');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `functional` int(11) NOT NULL,
  `industry` int(11) NOT NULL,
  `skills` varchar(555) NOT NULL,
  `cities` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `positions` int(11) NOT NULL,
  `job_type` int(11) NOT NULL,
  `job_shift` int(11) NOT NULL,
  `salary_min` int(11) NOT NULL,
  `salary_max` int(11) NOT NULL,
  `job_details` text NOT NULL,
  `degree_title` varchar(300) NOT NULL,
  `degree_type` int(11) NOT NULL,
  `degree_range` int(11) NOT NULL,
  `career_level` int(11) NOT NULL,
  `experience_min` int(11) NOT NULL,
  `experience_max` int(11) NOT NULL,
  `age_min` int(11) NOT NULL,
  `age_max` int(11) NOT NULL,
  `apply_date` datetime NOT NULL,
  `apply_by_deactvate` int(11) NOT NULL,
  `publish_date` datetime NOT NULL,
  `application_emails` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `user_id`, `job_title`, `functional`, `industry`, `skills`, `cities`, `gender`, `positions`, `job_type`, `job_shift`, `salary_min`, `salary_max`, `job_details`, `degree_title`, `degree_type`, `degree_range`, `career_level`, `experience_min`, `experience_max`, `age_min`, `age_max`, `apply_date`, `apply_by_deactvate`, `publish_date`, `application_emails`, `status`, `created`, `modified`) VALUES
(1, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(2, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(3, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(4, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(5, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(6, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(7, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(8, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(9, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(10, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(11, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(12, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(13, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(14, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(15, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(16, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(17, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(18, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(19, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(20, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(21, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(22, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(23, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(24, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(25, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(26, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(27, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(28, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(29, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(30, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(31, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(32, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(33, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(34, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(35, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(36, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(37, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(38, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(39, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(40, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(41, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(42, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(43, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(44, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(45, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(46, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(47, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(48, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(49, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(50, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(51, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(52, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(53, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(54, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(55, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(56, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(57, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(58, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(59, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(60, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(61, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(62, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(63, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(64, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53'),
(65, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '1', '2017-06-05 07:44:58', '2017-06-05 07:44:58'),
(66, 0, 2, 'Website Developer Required With PHP Skill', 145, 106, 'PHP', '32', 0, 4, 1, 0, 6, 10, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 4, 1, 3, 3, 6, 4, 8, '2017-06-08 00:00:00', 1, '2017-06-23 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:45:39', '2017-06-05 07:45:39'),
(67, 0, 2, 'Website Developer Required With PHP Skill', 3, 2, 'PHP', '2', 1, 2, 0, 2, 15, 17, 'Website Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP SkillWebsite Developer Required With PHP Skill', 'Master Degree', 0, 0, 1, 9, 10, 1, 3, '2017-06-29 00:00:00', 0, '2017-06-15 00:00:00', 'qasim@hubsil.ae', '2', '2017-06-05 07:50:07', '2017-06-05 07:50:07'),
(68, 0, 2, 'Web Developer / Web Designer', 131, 105, 'PHP', '32', 1, 3, 1, 0, 6, 8, 'Our firm is looking for a web designer who can work on a front end and manage our all websites. make new web sites and all the matters regarding domains will be his duty. \r\nQualification: minimum Bs.it or equalent.\r\nExperience: minimum 1 year', 'BSCS / BSIT', 4, 0, 3, 4, 5, 4, 6, '2017-06-28 00:00:00', 0, '2017-06-21 00:00:00', 'qasim@hubsil.ae', '3', '2017-06-07 10:30:53', '2017-06-07 10:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

DROP TABLE IF EXISTS `majors`;
CREATE TABLE IF NOT EXISTS `majors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=338 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`) VALUES
(1, 'Accounting'),
(2, 'Actuarial Sciences'),
(3, 'Aerospace Engineering'),
(4, 'Agribusiness Economics'),
(5, 'Agricultural Economics'),
(6, 'Agricultural Extension'),
(7, 'Agriculture'),
(8, 'Animal Science'),
(9, 'Animal Science & Pre-Veterinary'),
(10, 'Animal Science-Equine Science'),
(11, 'Animal Science-Production'),
(12, 'Anthropology'),
(13, 'Others'),
(14, 'Applied Anthropology'),
(15, 'Applied Science & Arts'),
(16, 'Architectural Engineering'),
(17, 'Architectural Studies'),
(18, 'Architecture'),
(19, 'Art Education'),
(20, 'Art Therapy'),
(21, 'Art-Art History'),
(22, 'Art-Ceramics'),
(23, 'Art-Communication Design'),
(24, 'Art-Drawing'),
(25, 'Art-General Studio'),
(26, 'Art-Glass'),
(27, 'Art-Industrial Design'),
(28, 'Art-Metalsmithing'),
(29, 'Art-Painting'),
(30, 'Art-Printmaking'),
(31, 'Art-Sculpture'),
(32, 'Artificial Intelligence'),
(33, 'Arts'),
(34, 'Arts Administration'),
(35, 'Arts/Science in Counseling Psychology'),
(36, 'Arts/Science in Education'),
(37, 'Arts/Science in Teaching'),
(38, 'Automotive Technology'),
(39, 'Aviation Flight'),
(40, 'Aviation Management'),
(41, 'Aviation Technologies'),
(42, 'Aviation Technologies-Aircraft Maintenance'),
(43, 'Aviation Technologies-Aviation Electronics'),
(44, 'Aviation Technologies-Helicopter Maintenance'),
(45, 'Behavior Analysis and Therapy'),
(46, 'Behavioral Science'),
(47, 'Bioinformatics'),
(48, 'Biological Sciences'),
(49, 'Biological Sciences (Education and Human Services)'),
(50, 'Biological Sciences-Biomedical Science'),
(51, 'Biological Sciences-Ecology'),
(52, 'Biomedical Engineering'),
(53, 'Business'),
(54, 'Business Administration'),
(55, 'Business Economics'),
(56, 'Ceramic Engineering'),
(57, 'Chemical Engineering'),
(58, 'Chemistry'),
(59, 'Chemistry-American Chemical Society Certification'),
(60, 'Chemistry-Biochemistry'),
(61, 'Chemistry-Business'),
(62, 'Chemistry-Comprehensive Chemistry'),
(63, 'Chemistry-Environmental Chemistry'),
(64, 'Chemistry-Forensic Chemistry'),
(65, 'Chiropractic-Pre'),
(66, 'Cinema & Photography'),
(67, 'Cinema & Photography-Cinema'),
(68, 'City and Regional Planning'),
(69, 'City Planning'),
(70, 'Civil Engineering'),
(71, 'Civil Engineering-Environmental Engineering'),
(72, 'Classics'),
(73, 'Clinical Medical Science'),
(74, 'College of Education and Human Services Undeclared'),
(75, 'College Teaching'),
(76, 'Commerce'),
(77, 'Communication Disorders'),
(78, 'Communication Studies'),
(79, 'Communication Studies-Intercultural Communication'),
(80, 'Communication Studies-Interpersonal Communication'),
(81, 'Communication Studies-Organizational Communication'),
(82, 'Communication Studies-Performance Studies'),
(83, 'Communication Studies-Persuasive Communication'),
(84, 'Communication Studies-Public Relations'),
(85, 'Communications'),
(86, 'Community Health'),
(87, 'Community Psychology'),
(88, 'Computer Engineering'),
(89, 'Computer Networking'),
(90, 'Computer Science'),
(91, 'Criminal Justice'),
(92, 'Criminology and Criminal Justice'),
(93, 'Crop, Soil, and Environmental Management'),
(94, 'Crop, Soil, and Environmental Management-Crop Production and Management[Science and General]'),
(95, 'Crop, Soil, and Environmental Management-Soil Science[Science and General]'),
(96, 'Cross-Cultural Studies'),
(97, 'Data Sciences'),
(98, 'Dental Hygiene'),
(99, 'Dentistry'),
(100, 'Design'),
(101, 'Design-General Design'),
(102, 'Divinity'),
(103, 'Does not matter'),
(104, 'Early Childhood'),
(105, 'Early Childhood-Child and Family Services'),
(106, 'Early Childhood-Preschool/Primary'),
(107, 'Economics'),
(108, 'Economics-Financial Economics'),
(109, 'Economics-General Economics'),
(110, 'Economics-International Economics'),
(111, 'Economics-Law and Economics'),
(112, 'Education'),
(113, 'Electrical and Computer Engineering'),
(114, 'Electrical Engineering'),
(115, 'Electronic Systems Technologies'),
(116, 'Electronics'),
(117, 'Elementary Education'),
(118, 'Engineering'),
(119, 'Engineering Management'),
(120, 'Engineering Science'),
(121, 'Engineering Technology'),
(122, 'English (Education and Human Services)'),
(123, 'English-Creative Writing'),
(124, 'English-General'),
(125, 'English-Preprofessional'),
(126, 'English-Teacher Education'),
(127, 'Environmental Design'),
(128, 'Environmental Engineering'),
(129, 'Environmental Planning'),
(130, 'Environmental Science'),
(131, 'Exercise and Sport Studies'),
(132, 'Exercise Science'),
(133, 'Exploratory (Undecided)'),
(134, 'Family Counseling'),
(135, 'Family Therapy'),
(136, 'Fashion Design and Merchandising'),
(137, 'Fashion Design and Merchandising-Fashion Stylist'),
(138, 'Fashion Design Merchandising-Fashion Design'),
(139, 'Fermentation Science'),
(140, 'Finance'),
(141, 'Finance-Financial Institutions'),
(142, 'Finance-Financial Management'),
(143, 'Finance-Investments'),
(144, 'Fine Arts'),
(145, 'Foreign Languages and Literatures'),
(146, 'Forensic Science'),
(147, 'Forestry'),
(148, 'Forestry-Forest Hydrology'),
(149, 'Forestry-Forest Recreation and Park Management'),
(150, 'Forestry-Forest Resources Management'),
(151, 'Forestry-Urban Forest Management'),
(152, 'Forestry-Wildlife Habitat Management and Conservation'),
(153, 'French (Education and Human Services)'),
(154, 'Genetic Counseling'),
(155, 'Geography & Environmental Resources'),
(156, 'Geological Engineering'),
(157, 'Geology'),
(158, 'Geology-Environmental Geology'),
(159, 'Geology-Geophysics'),
(160, 'Geology-Resource Geology'),
(161, 'German Studies(Education and Human Services)'),
(162, 'Gerontology'),
(163, 'Health Administration'),
(164, 'Health Care Administration'),
(165, 'Health Care Management'),
(166, 'Heritage/Historical Preservation'),
(167, 'History'),
(168, 'History (Education and Human Services)'),
(169, 'History-History Honors'),
(170, 'Home Economics'),
(171, 'Horticulture'),
(172, 'Horticulture-Landscape Horticulture'),
(173, 'Horticulture-Production Horticulture'),
(174, 'Horticulture-Turfgrass Management'),
(175, 'Hospitality & Tourism Administration'),
(176, 'Hospitality Management'),
(177, 'Human Nutrition & Dietetics'),
(178, 'Human Resource Development'),
(179, 'Human Resources'),
(180, 'Individualized/Interdisciplinary Studies'),
(181, 'Industrial Design'),
(182, 'Industrial Engineering'),
(183, 'Industrial Management and Applied Engineering-Qualtiy Management'),
(184, 'Information Resources Management'),
(185, 'Information Science'),
(186, 'Information Systems Technologies'),
(187, 'Information Technology'),
(188, 'Interior Design'),
(189, 'International Affairs'),
(190, 'International Studies'),
(191, 'Journalism'),
(192, 'Journalism-Advertising'),
(193, 'Journalism-New Media News Production'),
(194, 'Journalism-News-Editorial'),
(195, 'Journalism-Photojournalism'),
(196, 'Journalism-Sports Media'),
(197, 'Justice Administration'),
(198, 'Landscape Architecture'),
(199, 'Languages, Cultures, and International Studies'),
(200, 'Law Librarianship'),
(201, 'Law-Pre'),
(202, 'Laws'),
(203, 'Liberal Arts'),
(204, 'Liberal Studies'),
(205, 'Library Science'),
(206, 'Linguistics'),
(207, 'Linguistics-English as a New Language'),
(208, 'M.B.B.S.'),
(209, 'Machine Learning'),
(210, 'Management'),
(211, 'Management-Entrepreneurship'),
(212, 'Management-Global E-Business'),
(213, 'Management-Management of Health Care Enterprises'),
(214, 'Management-Personnel Management'),
(215, 'Management-Supply Chain Management'),
(216, 'Manufacturing Engineering'),
(217, 'Manufacturing Management'),
(218, 'Marine Affairs'),
(219, 'Marketing'),
(220, 'Mass Communication and Media Arts'),
(221, 'Mass Communications'),
(222, 'Materials Science'),
(223, 'Mathematics'),
(224, 'Mathematics & Statistics'),
(225, 'Mathematics (Education and Human Services)'),
(226, 'Mathematics (Liberal Arts)'),
(227, 'Mechanical Engineering'),
(228, 'Medical Education Preparation'),
(229, 'Medical Illustration'),
(230, 'Medical Technology'),
(231, 'Medicine-Pre'),
(232, 'Metallurgical Engineering'),
(233, 'Microbiology'),
(234, 'Mining Engineering'),
(235, 'Molecular, Cellular and Systemic Physiology'),
(236, 'Mortuary Science & Funeral Service'),
(237, 'Music'),
(238, 'Music Education'),
(239, 'Music Therapy'),
(240, 'Natural Science'),
(241, 'Nuclear Engineering'),
(242, 'Nurse Anesthesia'),
(243, 'Nursing'),
(244, 'Nursing Administration'),
(245, 'Nursing-Pre, Pre-Professional'),
(246, 'Occupational Safety and Health'),
(247, 'Occupational Therapy'),
(248, 'Optometry-Pre'),
(249, 'Orthodontics'),
(250, 'Paralegal Studies'),
(251, 'Paralegal Studies-Pre-Law'),
(252, 'Pathology'),
(253, 'Petroleum Engineering'),
(254, 'Pharmaceutical Sciences'),
(255, 'Pharmacy'),
(256, 'Philosophy'),
(257, 'Philosophy-Pre Law'),
(258, 'Photography (Cinema & Photography)'),
(259, 'Physical Education'),
(260, 'Physical Education Teacher Education'),
(261, 'Physical Therapist Assistant'),
(262, 'Physical Therapy'),
(263, 'Physician Assistant-Pre'),
(264, 'Physics'),
(265, 'Physics-Biomedical Physics'),
(266, 'Physics-Computational Physics'),
(267, 'Physics-Materials and Nanophysics'),
(268, 'Physiology'),
(269, 'Planning'),
(270, 'Plant Biology'),
(271, 'Plant Biology-Molecular and Biochemical Physiology'),
(272, 'Plant Biology-Systematics and Biodiversity'),
(273, 'Podiatry-Pre'),
(274, 'Political Science'),
(275, 'Political Science-International Affairs'),
(276, 'Political Science-Public Service'),
(277, 'Professional Accounting'),
(278, 'Project Management'),
(279, 'Psycholgy-Parent Training'),
(280, 'Psychology'),
(281, 'Public Administration'),
(282, 'Public and International Affairs'),
(283, 'Public Health'),
(284, 'Public Health Education'),
(285, 'Public Management'),
(286, 'Public Policy'),
(287, 'Public Safety Management'),
(288, 'Radio Television and Digital Media-Electronic Sports Media'),
(289, 'Radio, Television, and Digital Media'),
(290, 'Radiologic Sciences'),
(291, 'Radiologic Sciences-Diagnostic Medical Ultrasound'),
(292, 'Radiologic Sciences-Magnetic Resonance Imaging/Computed'),
(293, 'Radiologic Sciences-Magnetic Resonance Imaging/Computed Tomography'),
(294, 'Radiologic Sciences-Radiation Therapy Technology'),
(295, 'Radiologic Sciences-Radiology Education and Management'),
(296, 'Real Estate Development'),
(297, 'Recreation'),
(298, 'Recreation Administration'),
(299, 'Recreation and Parks Administration'),
(300, 'Recreation-Leisure Services Management'),
(301, 'Recreation-Outdoor Recreation Leadership and Management'),
(302, 'Recreation-Therapeutic Recreation'),
(303, 'Regional Planning'),
(304, 'Rehabilitation Counseling'),
(305, 'Rehabilitation Medicine'),
(306, 'Rehabilitation Services'),
(307, 'Religious Education'),
(308, 'Science'),
(309, 'Services Administration'),
(310, 'Social Work'),
(311, 'Sociology'),
(312, 'Software Engineering'),
(313, 'Special Education'),
(314, 'Sport Administration'),
(315, 'Taxation'),
(316, 'Technical Resource Management'),
(317, 'Technical Resource Management-Health and Safety Management'),
(318, 'Technical Resource Management-Organizational Development'),
(319, 'Technology'),
(320, 'Textiles'),
(321, 'The Humanities'),
(322, 'Theater'),
(323, 'Theology'),
(324, 'Tourism Management'),
(325, 'University Studies'),
(326, 'Urban Planning'),
(327, 'Urban Studies'),
(328, 'Veterinary Medicine-Pre'),
(329, 'Veterinary Science'),
(330, 'Women\'s Studies'),
(331, 'Workforce Education & Development'),
(332, 'Zoology'),
(333, 'Zoology-Animal Biology'),
(334, 'Zoology-Environmental Biology'),
(335, 'Zoology-Fisheries Biology'),
(336, 'Zoology-Pre-Veterinary Medicine'),
(337, 'Zoology-Wildlife Biology');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `post_route` varchar(255) DEFAULT NULL,
  `view` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `top_show` tinyint(1) NOT NULL,
  `top_order` int(11) DEFAULT NULL,
  `bottom_show` tinyint(1) NOT NULL,
  `bottom_order` int(11) DEFAULT NULL,
  `new_window` tinyint(1) NOT NULL,
  `element` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `parent_id`, `lft`, `rght`, `level`, `name`, `sub_title`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `slug`, `route`, `post_route`, `view`, `class`, `top_show`, `top_order`, `bottom_show`, `bottom_order`, `new_window`, `element`, `created`, `modified`) VALUES
(1, NULL, 1, 2, NULL, 'Home', NULL, 'Welcome to Coderity', '', '', '<div class=\"row\">\r\n<div class=\"col-lg-12 text-center\">\r\n<h1>Welcome to Coderity</h1>\r\n\r\n<p class=\"lead\">Welcome to Coderity (pronouced Co-der-ity).&nbsp; Coderity is an &quot;out of the box&quot; CMS&nbsp;for the <a href=\"http://www.cakephp.org\" target=\"_blank\">CakePHP framework</a>, available on GitHub under the MIT license.</p>\r\n\r\n<p>Elegant, simple to use and install, Coderity provides a easy to use, straight forward Content Management System for CakePHP 2.</p>\r\n\r\n<p>Coderity is built on top of CakePHP. &nbsp;It is useful if you are looking for an out of the box, simple to use CakePHP CMS, which can be expanded and made your own!</p>\r\n\r\n<p class=\"lead\">Features include:</p>\r\n\r\n<ul class=\"list-unstyled\">\r\n <li>Pages management - add, edit and delete pages.</li>\r\n <li>Drag and drop ordering of the navigation menu, with the option to select which pages show in the top and bottom menu.</li>\r\n  <li>Site Blocks - Set general content global area&#39;s - such as header and footer sections, which can be edited and updated site wide.</li>\r\n <li>Blog - add, edit and delete blog articles. &nbsp;Have the ability to turn off the blog section if it isn&#39;t needed.</li>\r\n <li>Contact Form and Leads Management. &nbsp;A simple contact form is included by default, which emails the website administrator and stores the details in the Leads area.</li>\r\n  <li>Manage Admin Users - add, edit and delete the users of the CMS.</li>\r\n  <li>Redirects - add, edit and delete 301 redirects.</li>\r\n  <li>General Settings - control the overall settings such as the Site Name, Site Email Address and Google Analytics script.</li>\r\n <li>Easy installer. &nbsp;On initial set up, the website has a simple installer for setting the site details and creating the first admin user.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<!-- /.row -->', 'home', '/', '', '', '', 1, 0, 1, NULL, 0, 0, NULL, '2015-02-23 22:43:31'),
(2, NULL, 3, 4, NULL, 'Docs', NULL, 'Docs', '', '', '<div class=\"row\">\r\n<div class=\"col-lg-12 text-center\">\r\n<h1>Coderity Docs</h1>\r\n\r\n<p class=\"lead\">Need Help with Coderity</p>\r\n\r\n<p>Check out the <a href=\"http://www.coderity.com/docs\" target=\"_blank\">Coderity Docs</a> for help using Coderity!</p>\r\n</div>\r\n</div>\r\n', 'docs', '', '', '', '', 1, 1, 1, 1, 0, 0, '2015-02-23 22:46:06', '2015-02-23 22:46:06'),
(3, NULL, 5, 6, NULL, 'Contact Form', NULL, 'Contact Form', '', '', '<div class=\"row\">\r\n<div class=\"col-lg-12 text-center\">\r\n<h1>Example Contact Form</h1>\r\n\r\n<p class=\"lead\">The following is an example of a Contact Form from Coderity.&nbsp; This is set by setting the &quot;Page View&quot; to &quot;contact&quot; in the Pages CMS.&nbsp; You can create your own custom view files in app/View/Pages and link them to the CMS by changing the &quot;Page View&quot; value!</p>\r\n\r\n<p>For more information on this, check out the <a href=\"http://www.coderity.com/docs\" target=\"_blank\">Coderity Docs</a>!</p>\r\n</div>\r\n</div>\r\n', 'contact', '', '', 'contact', '', 1, 2, 1, 2, 0, 0, '2015-02-23 22:48:52', '2015-02-23 22:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text,
  `basic_info` text NOT NULL,
  `experience` text,
  `skills` text,
  `education` text,
  `certifications` text,
  `projects` text,
  `awards` text,
  `reference_s` text,
  `others` text,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `summary`, `basic_info`, `experience`, `skills`, `education`, `certifications`, `projects`, `awards`, `reference_s`, `others`, `status`, `created`, `modified`) VALUES
(1, 2, 'Master Jackets Mughal', 'Document Controller with 6 years experience in Saudi Arabia within construction Field.Oracle\'s Primavera Unifier Project ControlsTruss Software12 years of experience in Pakistan of Document controller & Administration', '', NULL, NULL, '{\"2\":{\"degree_title\":\"BSCS \\/ BSIT\",\"institution_name\":\"jhbjhb\",\"degree_type\":\"0\",\"major_subject\":\"Applied Science & Arts\",\"grade\":\"754l\",\"date_completed\":\"14\"}}', NULL, NULL, NULL, NULL, NULL, 1, '2017-06-21 19:36:41', '2017-06-21 19:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `redirects`
--

DROP TABLE IF EXISTS `redirects`;
CREATE TABLE IF NOT EXISTS `redirects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `redirect` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redirects`
--

INSERT INTO `redirects` (`id`, `url`, `redirect`, `created`, `modified`) VALUES
(1, 'index.html', '', NULL, NULL),
(2, 'index.htm', '', NULL, NULL),
(3, 'default.html', '', NULL, NULL),
(4, 'default.htm', '', NULL, NULL),
(5, 'index.php', '', NULL, NULL),
(6, 'index.shtml', '', NULL, NULL),
(7, 'index.asp', '', NULL, NULL),
(8, 'default.asp', '', NULL, NULL),
(10, 'index.cfm', '', NULL, NULL),
(11, 'index.pl', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
CREATE TABLE IF NOT EXISTS `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `revision` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `model_id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `model_id` (`model_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `modified`) VALUES
(2, 'site_name', '', NULL),
(3, 'site_email', '', NULL),
(4, 'google_analytics', '', NULL),
(5, 'site_emails_cc', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `password`, `first_name`, `last_name`, `email`, `created`, `modified`) VALUES
(1, 'superadmin', 0, '$2y$10$Y.LvJtXTrknkxz3wkXha8usF6vKnd2rMYJhkIs5j9CDe2EwjXKrGW', 'Qasim', 'Zahoor', 'qasimzahoor786@gmail.com', '2015-07-15 12:49:09', '2015-10-01 02:36:40'),
(2, 'employer', 2, '$2y$10$Y.LvJtXTrknkxz3wkXha8usF6vKnd2rMYJhkIs5j9CDe2EwjXKrGW', 'Employer', 'Account', 'qasimzahoor786@gmail.com', '2015-07-15 12:49:09', '2015-10-01 02:36:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
