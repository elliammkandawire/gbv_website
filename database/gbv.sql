-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 06:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbv`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`slug`, `date`, `details`, `name`, `picture`) VALUES
('ICGBV', '2022-07-26 21:32:41', 'This year’s Commission on the Status of Women (CSW) is focused on ‘the empowerment of rural women and girls’. It is the first time Ireland has chaired the Commission and it presents an opportunity not only to help forge a more ambitious plan of action to support the empowerment of women and girls in rural contexts, but to do so with knowledge gained from a very broad range of experience in this area. The Consortium believes that understanding the relationship between addressing GBV and the empowerment of rural women and girls must be central to the outcomes of this year’s CSW session and consortium members’ experience of programming in rural areas provides crucial insight and learning in this area. The Consortium worked with Dr. Aising Swaine, Assistant Professor of Gender and Security at the Department of Gender Studies on the development of a policy brief which explores these issues GBV in relation to rural women and girls overall inequality. The policy brief describes key approaches and learning for addressing GBV through empowerment programming in rural areas, through examples from the work of members of the ICGBV. It shows that the theme of this year’s CSW is fitting and timely as the rural context often puts women and girls at an increased risk of GBV.', 'ICGBV AND CSW62', 'icgbv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `slug` varchar(255) NOT NULL,
  `background` text DEFAULT NULL,
  `core_values` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `mission` varchar(255) DEFAULT NULL,
  `motto` varchar(255) DEFAULT NULL,
  `objective` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `shortname` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `mobile_logo` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `about_picture` text NOT NULL,
  `footer_logo` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedin` text NOT NULL,
  `map_src` text NOT NULL,
  `brief_background` text NOT NULL,
  `events_header` text NOT NULL,
  `programs_header` text NOT NULL,
  `contact_header` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`slug`, `background`, `core_values`, `date`, `email`, `fullname`, `location`, `logo`, `mission`, `motto`, `objective`, `phone`, `postal_address`, `shortname`, `youtube`, `icon`, `twitter`, `facebook`, `mobile_logo`, `header`, `about_picture`, `footer_logo`, `instagram`, `linkedin`, `map_src`, `brief_background`, `events_header`, `programs_header`, `contact_header`) VALUES
('MICGBV', '<p>The Irish Consortium on Gender Based Violence (ICGBV) was born from an Irish based alliance of international human rights, humanitarian and development organisations who are leaders in the </p><p><br></p><p>sector in terms of GBV prevention and response. Members include Action Aid Ireland, Concern Worldwide, Plan Ireland, World Vision Ireland, Trócaire, GOAL, Irish Red Cross, Christian Aid Ireland, Oxfam Ireland, Self Help Africa, Irish Aid and Irish Defence Forces. The Irish Consortium was established in 2005 as a response to reports of ongoing and systematic sexual violence against women and girls in the Darfur Region of Sudan. The ICGBV works together to increase knowledge and understanding of violence against women and girls, and to ensure high quality programming and policy responses, in both humanitarian and development settings. Collaboration between members at country level has been strongly encouraged to promote the following: shared learning and best practices; joint programming on preventing and responding to GBV; collaborative advocacy or research projects. In 2014/2015 the Irish Consortium opened a call to provide match funding for collaborative projects on addressing Gender Based Violence in four countries, Malawi, Democratic Republic of Congo, Kenya, and Great Syrian region. In Malawi, in 2014, Concern Worldwide, GOAL, Self-Help Africa and Trócaire, in collaboration with the Irish Embassy organized a photographic exhibition during the 16 Days of Activism which coincided with a State visit from Irish President Michael D Higgins. While no funding came from the ICGBV, the exhibition was brought to Ireland for the 16 Days commemoration in Dublin. Building on the success of the 2014 event in Dublin, the ICGBV members in Malawi successfully applied for ICGBV matched funding to hold 16 Days of Activism activities at national level in consecutive years from 2015 up to and including 2019. Over the years, other organizations joined the group, and it is currently comprised of 7 members, with UN Women working with the group as a coordinating UN agency on 16 days of activism campaign. Since 2014, the Consortium has been coming together to commemorate the 16 Days of Activism against GBV and beyond that the Consortium works together with the Government of Malawi and other likeminded institutions in responding to GBV and promotion of gender equality. The Consortium aims to promote evidence-based programming on gender equality and GBV and support the work that the Government of Malawi is doing through the Ministry of Gender, Community Development and Social Welfare.</p>', 'The MICGBV strives to achieve its objectives through:<br>i. Sharing learning and best practices grounded in evidence among the members and externally with relevant stakeholders.<br>ii. Identifying and exploring opportunities to work collaboratively to conduct research, to develop programme approaches and implement initiatives to promote gender equality and respond to gender-based violence.<br>iii. Joint advocacy: becoming a credible voice with a significant influence on policy and practice in relation to GBV and other gender issues, based on high&#8208;quality evidence / research and learning from the work of its members at field level.?<br>Further strengthen the Consortium?s advocacy capabilities to complement the work of existing national gender coordinating groups (and local CSOs.?<br>iv. Coordination and linkages: establishing linkages with other GBV/gender platforms for joint advocacy purposes and local capacity building, as relevant, of the same.<br>Overall, the Secretariat strategically positions the Consortium to be a stronger Malawi actor on GBV prevention and response, influencing policy and legislation and better advocating for change, while also linking up and strengthening local actors on ending GBV.', '2022-11-17 05:44:34', 'micgbvinfo@gbv.mw', 'Malawi Irish Consortium on Gender Based Violence', 'Area 30<br>Lilongwe, Malawi', 'logo_footer_21.PNG', NULL, 'For a Malawi Free from Gender Based Violence', 'Overall, the Malawi Irish Consortium aims to promote evidence-based programming on gender equality and GBV and support the relevant work of the Government of Malawi through the Ministry of Gender, Community Development and Social Welfare.', '(265) 0882 784 684', '<p>Trocaire Malawi, P.O Box A47, Lilongwe, Malawi<br></p>', 'MICGBV', 'https://www.youtube.com/user/gbvireland', NULL, 'https://twitter.com/icgbv_malawi', 'https://www.facebook.com/micgbv', 'logo_footer_21.PNG', 'main-slider-2-11.jpg', 'about_bg.png', 'logo_footer_2.png', '#', '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.2570382389813!2d33.759989214833254!3d-14.002767490185395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d30d840766ed%3A0xda570ee5ee3e20d1!2sTr%C3%B3caire%20Malawi!5e0!3m2!1sen!2smw!4v1661717712451!5m2!1sen!2smw', '<p align=\"center\">The Irish Consortium on Gender Based Violence (ICGBV) was born from an Irish based alliance of international human rights, humanitarian and development organisations who are leaders in the sector in terms of GBV prevention and response. Members include Action Aid Ireland, Concern Worldwide, Plan Ireland, World Vision Ireland, Trócaire, GOAL, Irish Red Cross, Christian Aid Ireland, Oxfam Ireland, Self Help Africa, Irish Aid and Irish Defence Forces. The Irish Consortium was established in 2005 as a response to reports of ongoing and systematic sexual violence against women and girls in the Darfur Region of Sudan. The ICGBV works together to increase knowledge and understanding of violence against women and girls, and to ensure high quality programming and policy responses, in both humanitarian and development settings. </p>', 'zimbiri_trimmed.PNG', 'contact.png', 'IMG_0494.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`slug`, `date`, `details`, `event_date`, `event_time`, `location`, `name`, `picture`, `status`) VALUES
('cdjdhjdhsd22222222NovNov17170603', '2022-11-17 05:59:05', '', '2020-09-19', '10:57:00', 'Hello', 'Now this is what I am talking', 'header.PNG', 1),
('gbv-international-day-malawi', '2022-08-15 11:32:11', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros.', '2022-07-25', '12:12:00', 'Lilongwe', 'GBV International Day Malawi', 'IWD_Posters-17.jpg', 1),
('joh22222222NovNov17170728', '2022-11-17 06:51:28', 'cjdc', '2021-12-20', '09:50:00', 'Hello', 'joh', 'requ.PNG', 1),
('play-for-the-world-with-us', '2022-08-15 11:32:23', 'Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-07-26', '12:11:00', 'Lilongwe', 'Women international Day', 'IWD_Posters-23.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `flyway_schema_history`
--

CREATE TABLE `flyway_schema_history` (
  `installed_rank` int(11) NOT NULL,
  `version` varchar(50) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `script` varchar(1000) NOT NULL,
  `checksum` int(11) DEFAULT NULL,
  `installed_by` varchar(100) NOT NULL,
  `installed_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `execution_time` int(11) NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flyway_schema_history`
--

INSERT INTO `flyway_schema_history` (`installed_rank`, `version`, `description`, `type`, `script`, `checksum`, `installed_by`, `installed_on`, `execution_time`, `success`) VALUES
(1, '1', 'init', 'SQL', 'V1__init.sql', 1360245462, 'root', '2022-07-27 18:50:34', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `slug` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `caption` text NOT NULL,
  `picture` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`slug`, `name`, `caption`, `picture`, `date`, `status`) VALUES
('activism', '16 Days of Activism', '16 Days of Activism', 'activism.png', '2022-08-17 20:56:13', 1),
('dckm22222222AugAug21212006', 'dckm', 'dmk', 'request1.PNG', '2022-08-21 18:04:06', 1),
('event', '16 Days of Activism', '16 Days of Activism', 'event.jpg', '2022-08-17 20:56:04', 1),
('gender-quality', 'Gender Equality Campaign', 'Gender Equality Campaign', 'gender-quality.jpg', '2022-08-17 20:56:39', 1),
('hon-mary-thom', 'Visit By Hon Mary Thom', 'Visit By Hon Mary Thom', 'hon-mary-thom.jpg', '2022-08-17 20:56:23', 1),
('micgbv-high-level-event', 'High Level Event', 'High Level Event', 'high-level-event.png', '2022-08-17 20:56:47', 1),
('national-level-virtual-meeting', 'National Virtual Meeting', 'Meeting Meeting', 'national-level-virtual-meeting.jpg', '2022-08-17 20:55:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`slug`, `date`, `description`, `name`, `picture`, `website`, `status`) VALUES
('actionaid_malawi', '2022-08-15 17:40:50', NULL, 'ActionAid Malawi', 'Actionaid_logo11.png', 'https://actionaid.ie/', 1),
('concern_worldwide', '2022-07-28 20:59:15', 'Concern works in Lilongwe, Mangochi, Phalombe, Nsanje and Mulanje districts. Concern has a strong emphasis in gender equality and GBV prevention in all its programmes in Malawi.  Concern implemented prevention of school related GBV programmes to protect children’s rights and improve attendance as well as achievement at school. Concern has experience in working on GBV in emergencies and during COVID response, produced gender transformative messages encouraging men to get involved in prevention and messages on GBV and use of referral pathways (IEC written materials).', 'Concern Worldwide', 'concern_wide_wide.png', 'https://www.concern.net/', 1),
('djfkd22222222AugAug19191630', '2022-08-19 14:48:30', NULL, 'djfkd', NULL, 'ml', 1),
('irish_rule_of_law', '2022-08-02 20:06:30', 'Irish Rule of Law works on improving access to justice for the most vulnerable within the central region by building the capacity of the key criminal justice institutions. IRLI provides direct legal support to vulnerable female prisoners including survivors of GBV and women who have been accused of infanticide following miscarriage, still birth or unsafe abortion. IRLI also facilitates training and development of guidelines on ensuring due process rights of women, children and vulnerable groups are protected and promoted.', 'Irish Rule of Law ', 'New IRLI Logo.jpg', 'https://www.irishruleoflaw.ie/malawi', 1),
('oxfam_in_malawi', '2022-08-02 20:21:28', 'Works in districts of Nsanje, Phalombe, Balaka, Zomba, Machinga, Mulanje, Thyolo, Kasungu, Mchinji, Dowa, Nkhatabay, Lilongwe, Karonga and Mzimba with local partner organizations in each district providing support to the district protection teams in monitoring GBV and in scaling up public hygiene messaging and awareness raising whilst integrating gender and anti-GBV messages. Oxfam has recently undertaken interrelated activities in gender and public health through distribution of hygiene kits, PPEs, and hygiene promotion campaigns in Machinga, Balaka, Mulanje, Thyolo and Nkhatabay to support partners and communities to better manage and respond to GBV. Oxfam has also undertaken responses in Lilongwe, Kasungu, Phalombe, Karonga Districts.', 'Oxfam in Malawi', 'oxfam.png', 'https://www.oxfamireland.org/', 1),
('sha_united_purpose', '2022-07-28 21:02:37', 'SHA-UP uses the Family Life Model to integrate gender in all its programmes. SHA creates awareness among all its beneficiaries on the need to stop GBV, report GBV cases and protect survivors of GBV. Awareness creation is done through meetings, training, and workshops. We use Gender Champions who are selected among the beneficiaries to help address GBV and we work with local and district level structures. Also, Under the BETTER project SHA use the Gender Action Learning System (GALS) to challenge harmful gender norms.', 'Self Help Africa (SHA)-United Purpose', 'self_help_africa.jpg', 'https://selfhelpafrica.org/ie/', 1),
('trocaire', '2022-08-02 20:24:45', 'Works exclusively through partnership with local NGOs and civil society organizations. Currently Trocaire works in Machinga, Salima, Ntcheu, Balaka and Zomba with programming on GBV prevention and response. Trócaire co-created the innovative community engagement gender transformative methodology SASA! Faith, developed in 2016 jointly with Raising Voices Uganda, as an adaptation of the original SASA! methodology. Since 2016, Trócaire has been delivering successful SASA! Faith interventions across five countries, namely Malawi, Kenya, Uganda, Zimbabwe, and Myanmar, in development and humanitarian contexts. Trócaire also supports a national GBV Helpline operated by YONECO, which has been registering increased numbers of cases related to GBV and COVID.', 'Trócaire', 'trócaire.png', 'https://www.trocaire.org/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slug`, `date`, `details`, `name`, `picture`, `status`) VALUES
('climate-change', '2022-08-15 20:05:31', 'The Irish Consortium of Gender Based Violence (ICGBV) is an Irish based alliance of International human rights, humanitarian and development organisations, including International NGO’s and Government Bodies. We work together to increase knowledge and understanding of gender based violence, and to ensure high quality programming and policy responses, in both Humanitarian and Development settings. We also build leadership to support our shared vision of a world free from gender based violence. Currently hosted by Trócaire, the Consortium is seeking to employ a fulltime Coordinator. The purpose of the Coordinator role is to support the Consortium’s members in the implementation of its multiannual Strategic Plan in accordance with annually agreed plans, to represent the Consortium with external bodies and to manage the staff of the Consortium. Reporting to the ICGBV Chair, this is a two year full time contract and is based in Ireland . The incumbent will be a line manager to the Policy and Research Officer in the ICGBV Safeguarding Programme Participants-Children & Adults The ICGBV is currently hosted by Trócaire and ICGBV contracts are issued by Trócaire. Therefore ICGBV staff are expected to comply with both the Consortium and Trócaire’s Safeguarding policies. Trócaire is committed to safeguarding people within our programmes from exploitation and abuse and has specific policies on this commitment (including a Global Code of Conduct) which outlines the expected behaviour and the responsibility of all staff, consultants and other organisational representatives. Any candidate offered a job with Trócaire will be expected to sign Trócaire’s Safeguarding Policies and Global Code of Conduct as an appendix to their contract of employment and agree to conduct themselves in accordance with the provisions of these documents. All offers of employment will be subject to pre employment checks including satisfactory references and appropriate screening (e.g. police/garda vetting, counter terrorism and anti-trafficking). Trócaire also participates in the InterAgency Misconduct Disclosure Scheme and all employees will be subject to this as part of contract of employment. <br>Key Duties & Responsibilities Strategy Play a lead role in setting the vision and strategic plan for the organisation over the medium-long term, working with the Chair and Steering Committee and other key stakeholders. Lead delivery and reporting of the strategic objectives of the organisation. In conjunction with the Chair, Steering Committee and Learning and Practice Working Group, develop and implement an annual operating plan and Key Performance Indicators (KPIs) aligned to the organisation’s strategic plan. Leadership Provide management and leadership for the team of employees and members of the Consortium. Promote an environment that is conducive to the development of best practice, enhances retention and promotes good employee relations. Maintain a high level of staff morale, promoting good communication, team spirit and job satisfaction among members of the team. Strive to ensure that staff are accountable, responsible and have authority to work within their roles. Play a lead role in the recruitment and selection of staff for the organisation. Ensure that the team are effectively supported with development of personal development plans and the implementation of appropriate performance management. Operations Build and maintain linkages with appropriate stakeholders within Ireland and internationally. Identify emerging needs for members in terms of learning, and coordinate and support members in the delivery of responses to such needs. Identify advocacy opportunities for the Consortium, and coordinate and support members in the delivery of responses to such opportunities.Governance Work with the Steering Committee to maintain and ensure adherence to the organisation’s governance code, and other statutory requirements, e.g. data protection. Prepare all Steering Committee meetings and ensure their smooth and effective running.', 'Climate Change', 'IWD Posters-14.jpg', 1),
('ICGBV', '2022-08-15 18:03:40', 'This year’s Commission on the Status of Women (CSW) is focused on ‘the empowerment of rural women and girls’. It is the first time Ireland has chaired the Commission and it presents an opportunity not only to help forge a more ambitious plan of action to support the empowerment of women and girls in rural contexts, but to do so with knowledge gained from a very broad range of experience in this area. The Consortium believes that understanding the relationship between addressing GBV and the empowerment of rural women and girls must be central to the outcomes of this year’s CSW session and consortium members’ experience of programming in rural areas provides crucial insight and learning in this area. The Consortium worked with Dr. Aising Swaine, Assistant Professor of Gender and Security at the Department of Gender Studies on the development of a policy brief which explores these issues GBV in relation to rural women and girls overall inequality. The policy brief describes key approaches and learning for addressing GBV through empowerment programming in rural areas, through examples from the work of members of the ICGBV. It shows that the theme of this year’s CSW is fitting and timely as the rural context often puts women and girls at an increased risk of GBV.<br>', 'International Womens day ', 'IWD_Posters-12.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `pdf_link` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`slug`, `date`, `details`, `name`, `picture`, `pdf_link`, `status`) VALUES
('concept_note', '2022-07-31 17:56:09', 'Concept note on Malawi Irish GBV SecretariatRevised 26Feb2021', 'Concept note on Malawi Irish GBV SecretariatRevised 26Feb2021', 'mobilising.png', 'http://127.0.0.1:8080/www.gbv.mw.com/assets/docs/ConceptNote.pdf', 1),
('profile', '2022-08-15 19:01:22', 'GBV Profile 2<br>', 'GBV Profile', 'news-1-2.jpg', 'http://127.0.0.1:8080/www.gbv.mw.com/assets/docs/Profile.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`slug`, `date`, `description`, `name`, `picture`, `status`) VALUES
('advocacy', '2022-08-15 11:10:25', 'GBV is present in every corner of the world, in the home and in public life. Yet despite its prevalence, in the majority of countries where data is available, a very low percentage of individuals affected are able seek help, and perpetrators are not held to account. The complexities of the issue, stigma, and a lack of prioritisation particularly in humanitarian emergencies are significant factors that have contributed to inadequate GBV response and prevention resources.The Consortium plans to continue to build and amplify its collective voice on the issue of GBV, harnessing the unique dynamic of the Consortium membership to advocate for the needs and rights of those vulnerable to GBV at individual, community, and institutional levels. The Consortium believes that advocacy and communication messages should be informed by and respectful to the experiences of survivors.', 'Advocacy', 'footer5.PNG', 1),
('learning', '2022-07-30 22:20:45', 'Continuous learning and reflection on best practice to end GBV is a priority for the Consortium. Since its inception, the Consortium has served as a hub for enhancing understanding of GBV in humanitarian and development contexts and works continuously to create a space for discussion of best practice. In doing so, the Consortium seeks to foster a robust technical learning environment and to facilitate peer support spaces to improve GBV programming. This is achieved through engagement with experts, in-country research opportunities and peer review and learning.', 'Learning', 'learning.png', 1),
('mobilising', '2022-07-30 22:49:38', 'Continuous learning and reflection on best practice to end GBV is a priority for the Consortium. Since its inception, the Consortium has served as a hub for enhancing understanding of GBV in humanitarian and development contexts and works continuously to create a space for discussion of best practice. In doing so, the Consortium seeks to foster a robust technical learning environment and to facilitate peer support spaces to improve GBV programming. This is achieved through engagement with experts, in-country research opportunities and peer review and learning.', 'Mobilising and Education', 'mobilising.png', 1),
('programming', '2022-07-30 22:21:37', 'The primary aim of the Consortium is to strive for the end of GBV, to increase support for survivors, and to empower those working to change the conditions that lead to GBV. The Consortium recognises that promoting the individual and collective agency of targeted communities, particularly women and girls, is an effective strategy to change the societal structures and norms that perpetuate GBV. Consortium Members work to help communities who are affected by or are vulnerable to GBV to understand its drivers, to know where they can go for help, to feel empowered to take action, and to feel better protected as a result of our interventions.', 'Programming', 'programming.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slug` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slug`, `title`, `description`, `picture`, `position`, `status`, `date`) VALUES
('dchj-11_17_2022_07:42:32', 'dchj', '<p>jv<br></p>', 'Patrick_Maganga.PNG', 0, 1, '2022-11-17 06:42:32'),
('hello', 'hello', '<p>Bwana wanga<br></p>', 'Limit_Details.PNG', 0, 1, '2022-11-17 06:29:18'),
('hello11', 'Hello', '<p>Bwelani<br></p>', 'request.PNG', 0, 1, '2022-11-17 06:28:07'),
('hello22222222', 'hello', '<p>bwana<br></p>', 'EASY_FINANCE2.png', 0, 1, '2022-11-17 06:19:06'),
('slider_1', 'Welcome to MICGBV Malawi', 'For a Malawi Free from Gender Based Violence', 'snipped.PNG', 0, 1, '2022-08-17 21:41:35'),
('slider_2', 'Welcome to MICGBV Malawi', 'Sharing learning and best practices grounded in evidence among the members and externally with relevant stakeholders', 'picture---4.jpg', 0, 1, '2022-08-17 21:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `slug` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `teams_group` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`slug`, `country`, `date`, `email`, `facebook_url`, `name`, `phone`, `picture`, `position`, `twitter_url`, `teams_group`, `status`) VALUES
('chairman', NULL, '2022-08-15 20:01:30', NULL, '#', 'Mr Chairman', NULL, 'team-1-1.jpg', 'Chairman', '#', 'management_group', 1),
('mr-vice-chairman', NULL, '2022-08-15 20:02:40', NULL, '#', 'Mr Vice Chairman', NULL, 'news-1-32.jpg', 'Vice Chairman', '#', 'management_group', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team_groups`
--

CREATE TABLE `team_groups` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_groups`
--

INSERT INTO `team_groups` (`slug`, `date`, `name`) VALUES
('management_group', '2022-07-26 12:04:31', 'Management Group'),
('other_group', '2022-07-26 12:05:52', 'Others'),
('technical_group', '2022-07-26 12:05:01', 'Technical Group');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `fname`, `status`, `role`) VALUES
('micgbvinfo@gbv.mw', '56c321f513a6f9c8af56cac131bce06b50b40da0', 'MICGBV', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`slug`, `date`, `details`, `name`, `status`) VALUES
('coordinator', '2022-08-01 12:59:57', 'The Irish Consortium of Gender Based Violence (ICGBV) is an Irish based alliance of International human rights, humanitarian and development organisations, including International NGO’s and Government Bodies. We work together to increase knowledge and understanding of gender based violence, and to ensure high quality programming and policy responses, in both Humanitarian and Development settings. We also build leadership to support our shared vision of a world free from gender based violence. Currently hosted by Trócaire, the Consortium is seeking to employ a fulltime Coordinator. The purpose of the Coordinator role is to support the Consortium’s members in the implementation of its multiannual Strategic Plan in accordance with annually agreed plans, to represent the Consortium with external bodies and to manage the staff of the Consortium. Reporting to the ICGBV Chair, this is a two year full time contract and is based in Ireland . The incumbent will be a line manager to the Policy and Research Officer in the ICGBV Safeguarding Programme Participants-Children & Adults The ICGBV is currently hosted by Trócaire and ICGBV contracts are issued by Trócaire. Therefore ICGBV staff are expected to comply with both the Consortium and Trócaire’s Safeguarding policies. Trócaire is committed to safeguarding people within our programmes from exploitation and abuse and has specific policies on this commitment (including a Global Code of Conduct) which outlines the expected behaviour and the responsibility of all staff, consultants and other organisational representatives. Any candidate offered a job with Trócaire will be expected to sign Trócaire’s Safeguarding Policies and Global Code of Conduct as an appendix to their contract of employment and agree to conduct themselves in accordance with the provisions of these documents. All offers of employment will be subject to pre employment checks including satisfactory references and appropriate screening (e.g. police/garda vetting, counter terrorism and anti-trafficking). Trócaire also participates in the InterAgency Misconduct Disclosure Scheme and all employees will be subject to this as part of contract of employment.\r\n\r\n\r\n<br><br><br>Key Duties & Responsibilities <br><br>\r\nStrategy Play a lead role in setting the vision and strategic plan for the organisation over the medium-long term, working with the Chair and Steering Committee and other key stakeholders. Lead delivery and reporting of the strategic objectives of the organisation. In conjunction with the Chair, Steering Committee and Learning and Practice Working Group, develop and implement an annual operating plan and Key Performance Indicators (KPIs) aligned to the organisation’s strategic plan. Leadership Provide management and leadership for the team of employees and members of the Consortium. Promote an environment that is conducive to the development of best practice, enhances retention and promotes good employee relations. Maintain a high level of staff morale, promoting good communication, team spirit and job satisfaction among members of the team. Strive to ensure that staff are accountable, responsible and have authority to work within their roles. Play a lead role in the recruitment and selection of staff for the organisation. Ensure that the team are effectively supported with development of personal development plans and the implementation of appropriate performance management. Operations Build and maintain linkages with appropriate stakeholders within Ireland and internationally. Identify emerging needs for members in terms of learning, and coordinate and support members in the delivery of responses to such needs. Identify advocacy opportunities for the Consortium, and coordinate and support members in the delivery of responses to such opportunities.Governance Work with the Steering Committee to maintain and ensure adherence to the organisation’s governance code, and other statutory requirements, e.g. data protection. Prepare all Steering Committee meetings and ensure their smooth and effective running.', 'Coordinator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `webinars`
--

CREATE TABLE `webinars` (
  `slug` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webinars`
--

INSERT INTO `webinars` (`slug`, `date`, `details`, `name`, `picture`) VALUES
('ICGBV', '2022-07-26 21:21:40', 'This year’s Commission on the Status of Women (CSW) is focused on ‘the empowerment of rural women and girls’. It is the first time Ireland has chaired the Commission and it presents an opportunity not only to help forge a more ambitious plan of action to support the empowerment of women and girls in rural contexts, but to do so with knowledge gained from a very broad range of experience in this area. The Consortium believes that understanding the relationship between addressing GBV and the empowerment of rural women and girls must be central to the outcomes of this year’s CSW session and consortium members’ experience of programming in rural areas provides crucial insight and learning in this area. The Consortium worked with Dr. Aising Swaine, Assistant Professor of Gender and Security at the Department of Gender Studies on the development of a policy brief which explores these issues GBV in relation to rural women and girls overall inequality. The policy brief describes key approaches and learning for addressing GBV through empowerment programming in rural areas, through examples from the work of members of the ICGBV. It shows that the theme of this year’s CSW is fitting and timely as the rural context often puts women and girls at an increased risk of GBV.', 'ICGBV AND CSW62', 'icgbv.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `flyway_schema_history`
--
ALTER TABLE `flyway_schema_history`
  ADD PRIMARY KEY (`installed_rank`),
  ADD KEY `flyway_schema_history_s_idx` (`success`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`slug`),
  ADD KEY `FKd7isyx6igwvhved3vx0giigy` (`teams_group`);

--
-- Indexes for table `team_groups`
--
ALTER TABLE `team_groups`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `webinars`
--
ALTER TABLE `webinars`
  ADD PRIMARY KEY (`slug`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `FKd7isyx6igwvhved3vx0giigy` FOREIGN KEY (`teams_group`) REFERENCES `team_groups` (`slug`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
