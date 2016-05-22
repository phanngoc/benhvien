-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 09:40 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `hoten` varchar(200) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `hoten`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'phann123', '$2a$08$K/ULY/V9s2G5Og1pdeRvyOqe5lWbzGgotBkIx1lIvbgelvjbfimwa', 'lequidon.1993@gmail.com', 'Phan Ngoc', 'YtHc3fYiRjLhkvz9SvuJexs1xajML9M2qSt0nGTN9AJSkdXdueQszuKN83Zx', '2016-05-21 09:54:45', '2016-05-21 02:54:45'),
(2, 'hagiang11t1', '$2a$08$K/ULY/V9s2G5Og1pdeRvyOqe5lWbzGgotBkIx1lIvbgelvjbfimwa', 'hagiang11t1@gmail.com', 'Ha Giang 1', '', '2016-04-24 08:11:41', '2016-04-22 19:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `benhnhan`
--

CREATE TABLE IF NOT EXISTS `benhnhan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `CMND` int(11) NOT NULL,
  `gioitinh` tinyint(4) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benhnhan`
--

INSERT INTO `benhnhan` (`id`, `hoten`, `code`, `username`, `password`, `ngaysinh`, `diachi`, `CMND`, `gioitinh`, `sodienthoai`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'qưqe', 'fUczp3YTb2', NULL, '$2y$10$EMq1duYLiURJOdJTIzPLS.a69Z2QiDwND1rvCW3RncroUw9DZIvkK', '2016-05-21 00:00:00', 'Hòa Khánh, Liên Chiểu', 1021332421, 1, 12312324, 'health-nudge@linkncom.co.jp', '', '2016-05-17 00:48:32', '2016-05-17 00:48:32'),
(7, 'Tran Thi Kim Ngan', 'hGsf8puGZo', NULL, '$2y$10$fXXw5U.cdRhd0YNPnuP4tOdYpo6Yo61KxNGAliyHKUU3pf5w77yAS', '2016-05-11 00:00:00', 'Nguyễn Văn Linh, Đà Nẵng', 12345678, 0, 1234567890, 'lequidon.1993@gmail.com', '878bd51hmETSqkjjTTRKHYl5uiWsdcNBj3CX1KtignChkkDaiOEMmQc3iLSs', '2016-05-22 06:29:03', '2016-05-21 23:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `benhvien`
--

CREATE TABLE IF NOT EXISTS `benhvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `thongtin` text NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benhvien`
--

INSERT INTO `benhvien` (`id`, `ten`, `diachi`, `hinhanh`, `sodienthoai`, `email`, `thongtin`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'Danang General Hospital', '124 Haiphong, Haichau district', 'NaI1BDH8bDUQE0sUKbWu4bkNehCj1ucIZOqiuAlm.jpg', '0511.3821118', 'benhviendanang@danang.gov.vn', 'Summary\r\n\r\nPerforated sinus of Valsalva is a rare congenital defect; the natural history is not well defined but, if left untreated, the prognosis is poor. It has been shown that conventional surgical repair of perforated sinus of Valsalva carries low morbidity and mortality, but recurrence or the presence of a residual shunt may necessitate a second operation which carries a higher risk. Transcatheter closure of perforated sinus of Valsalva has the definite advantage of obviating open heart surgery under cardiopulmonary bypass and its inherent risk problems.\r\n\r\nWith the improvement in cardiac imaging and availability of various catheter materials, including occlusion devices, non-surgical closure of various intracardiac defects is becoming a primary alternative to open surgical repair. We report one patient for catheter closure of perforated the right coronary sinus of Valsalva into the right atrium at Danang Hospital. We succeeded in this case, and no complications related to the procedure occurred. Transcatheter closure has a number of potential advantages over surgical repair. That successful attempt to close the high-risk surgical candidates opened the possibility for transcatheter device closure of  perforated sinus of Valsalva.', '', '', '2016-05-21 08:59:48', '2016-05-21 01:59:48'),
(2, 'Danang C Hospital ', '122 Haiphong, Haichau district', 'sFQYmD0OU9aZN4mEkoloPNynEZCI7PwcFUP6IZH0.JPG', ' 0511 3821 118', ' benhviencdanang@gmail.com', 'Danang Hospital C today, is the only remaining Central Committee Central Park Medical People (former District 5) and the Hospital 1 Hospital 2, Zone 5. Zone Committee in March 1975, shortly after liberation day, the Committee on Public health area 5, Hospital 1 Hospital 2 from the war zone along with the medical staff remain fully takeover the entire Hospital and Da Nang Vietnam Germany (Federal Republic of Germany by the Assembly MALTERSER built in 1968) which is a major field hospital surgical treatment is situated on an area of over 5 hectares between Danang. Standing committees areas 5 decided to take Danang Vietnam-Germany Hospital duty health care officials Zone 5, named Hospital C.\r\nDated 26-5-1976, the Minister of Health, Dr. Vu Van Can, 515-QD signed a decision / BYT established health service hospital staff Middle Central zone (old) on the basis of the whole body Vietnam-Germany Hospital facility has been taken over, still remain on the Da Nang Hospital C. Since then, C Da Nang Hospital under the Ministry of Health, are responsible for the care and protection of the health of middle-high officials of the provinces from Quang Nam - Da Nang, Khanh Hoa and the Central Highlands provinces. Then be assigned by the Council Classification Central Medical Evaluation II in Danang.', '', '', '2016-05-21 09:13:28', '2016-05-21 02:13:28'),
(3, 'Danang Hospital For Women And Children', '402 Levanhien, Khuemy, Nguhanhson district, Danang', 'og5nsDlSFEFAYZQUTGDuguwPSmn4ieE8jx4CJzIj.jpg', '(84.511) 3.957.777', 'benhvienphusannhi@danang.gov.vn', 'Pursuant to Decision No. 2821 / QD-Committee dated 13/04/2012 of People''s Committee of Da Nang City on the establishment of Obstetrics Hospital - Pediatric Danang regulating functions, duties and powers of the Hospital Women - Children Da Nang;\r\n   Pursuant to Decision No. 28/2011 / QD-Committee dated 14/09/2011 of People''s Committee of Da Nang City on promulgating regulations on the management of organizational structure, staffing officers muscle officer administrative offices, business units and business managers by the State as the owner of the Da Nang city People''s Committee;\r\n   Pursuant to Decision No 1895/1997 / QD-BYT dated 09/19/1997 of the Minister of Health to promulgate regulations on hospitals;\r\n   Pursuant to Decision No. 87 / QD-SYT Health Department dated 04/3/2014 of Danang on the approval and promulgation of the Regulation on organization and operation of the Maternity Hospital - Pediatric Da Nang;\r\n   Pursuant to Official Letter No. 1080 / SYT-TCCB dated 02/6/2014 of the Department of Health on the approval of the scheme established organizational structure;\r\n   At the proposal of the Head of Organization - Administration, decided: Establishment of the organizational structure of phase 1 of Obstetrics Hospital - Pediatrics Danang include 18 departments.', '', '', '2016-05-21 09:13:46', '2016-05-21 02:13:46'),
(4, 'Hoanmy Danang Hospital', '161 Nguyenvanlinh, Thanhkhe, Danang district', '4iU3FjkteYqVgxzZ4OZRRy5sJ8h2GqF0X2Whmf8n.jpg', '(0511) 3509 808', 'contactus.danang@hoanmy.com', 'Hoan My Da Nang is the preferred healthcare provider for the people of Da Nang City and its surrounding region. Inheriting more than 12 years of experience from Hoan My Medical Corporation, Hoan My Da Nang has grown rapidly since its establishment in 2002.\r\n\r\nHoan My Da Nang’s mission is to provide high quality, affordable healthcare services. Professional expertise, medical ethics, and patient-centred care are our top priorities. Our skilled team of doctors and support staff are committed to transforming healthcare in the wider Da Nang City community.\r\n\r\nWe are honoured to have been recognised for our contributions to healthcare by the Vietnamese Communist Party, the government, and other organisations. Our awards include: Third-Class Labor Medal (2012); certificates of hospital excellence from the Ministry of Health (2004 – 2013); achievements for upholding standards of medical ethics, continuous medical studies, and development of new procedures (2011); ISO 9001:2000 certification.', '', '', '2016-05-21 09:15:30', '2016-05-21 02:15:30'),
(5, 'Binhdan Danang Hospital', '36 Trancaovan, Xuanha district, Danang', '20160229100109_slide18.jpg', '+84 511 3714 030', '', 'Faculty Binh Dan Hospital is a private hospital of Vietnam''s first, was established on February 14, 1996 at 158 Nguyen Thi Minh Khai Danang.Hospital nearly 20 years operating with high efficiency and have more credibility with the people in the country. Hospital has 100 inpatient beds, equipped with modern machines, synchronized, has 148 employees, including 38 doctors have solid professional qualifications and experience of which 72% are Ph.D. , MA, Dr. CK1, CK2.\r\nAfter more than 20 years of investment in construction and development. The hospital has been equipped with an institution with a closed 5-storey building with full amenities in the heart of the city. Building Structural strict compliance by the business.', '', '', '2016-05-17 17:00:00', '0000-00-00 00:00:00'),
(6, 'Danang Dermatology Hospital ', '91 Dungsithanhkhe, Thanhkhetay, Thanhkhe district', 'benhviendalieu.a11_01.png', '+84 511 3757 293', 'hungkv@danang.gov.vn', 'Currently there are 10 functional departments to serve the examination, outpatient, inpatient, orthopedic surgery service of 70 beds, the suites are fully equipped with modern machinery and equipment. Hospital officials and employees increasingly mature, the hospital currently has 85 personnel including 29 officers graduate and undergraduate (20 doctors, including 01 PhD students and 17 graduate, 01 Pharmacy after a university, bachelor 10), school staff and 41 other staff 13. The hospital has implemented, applying the scientific and technical progress in the service of the patient as the treatment of the skin with lasers, surgery - cosmetic skin care, cultured isolates of bacteria, fungi, diagnostic allergens ...', '', '', '2016-05-18 09:44:22', '0000-00-00 00:00:00'),
(7, 'Danang Mental Hospital ', '193 Nguyenluongbang, Hoakhanhbac, LienChieu district', '14.JPG', '+84 511 3841 906', 'tutrung.lttrungdn@gmail.com', 'Psychiatric Hospital Danang previously called "Children''s Hospital of Hoa Khanh" was built around 1966 by the American management. But only lasted until 3/1975, before the onset of our army and people heading to liberate Danang. Before the retreat, in the chaos of military puppet, puppet authorities and residents of this area were looted, smashed, burned bare hospital only 4 houses gutted not damaged the gate, the fence crisscrossed by barbed security forces took over as Hoa Vang custody of hooligans and those who live in the streets homeless to be collected, of which about 50 people with mental illness. Despite how difficult postwar chaos, implementation of humanitarian policy of the Party and State, Military Management Committee has directed the health sector 1 QNDN appoint medical staff (YT. Van Viet Hung) carrying drugs to temporarily care for mental patients. Then, due to the situation of patients, Health Company has added a team of one doctor, four nurses and one elementary druggist by YT. Vo Duc Phuc charge of the police coordinating care, treatment and management of mental patients above. Until 1976 the number of patients increases, Ty Health reinforced management staff and some specialist doctors from the war zone down, from the North regrouped to return, organized care and treatment for patients is better.', '', '', '2016-05-18 08:18:06', '0000-00-00 00:00:00'),
(8, 'Danang Oncology Hospital', ' 78 Hoaminh, Lienchieu district', 'OPtkURKAQDrRvYvaPYVPoij0Ovdr3jsbTxCxa5oB.jpg', '+84 511 3717 717', 'benhvienungbuoudanang@danang.gov.vn', 'Da Nang Cancer Hospital was established by Decision No. 5898 / QD-Committee dated 08/15/2015 of Da Nang City People''s Committee on the basis of scientific reorganization affiliated Oncology Hospital receiving Danang and hold the status quo apparatus, employees, offices, facilities, equipment and financial assets of Da Nang Hospital Cancer support Association of women and the poor unfortunate children Danang.\r\n\r\nDa Nang Cancer Hospital is a public non-business units, subject to the management and direction of the Director of the Da Nang Department of Health.\r\nPeople''s Doctor, doctor CK2 Nguyen Ut, deputy director of the Da Nang Department of Health concurrently as Director of Da Nang Cancer Hospital under Decision No. 6034 dated 08/20/2015 // QD-Committee on appointment part-time civil servant leadership and management.', '', '', '2016-05-21 09:21:02', '2016-05-21 02:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE IF NOT EXISTS `khoa` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `tenkhoa` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `thongtin` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`id`, `benhvien_id`, `tenkhoa`, `hinhanh`, `thongtin`, `updated_at`, `created_at`) VALUES
(1, 1, 'Nursing Devision ', 'TpbHS6iQvodGG3CF7ArJDoZSHumRZSToBtGmzqxn', 'FUNCTIONS AND TASKS \r\n1. Planning nursing care work in a hospital for the hospital director''s approval\r\n2. Organizations implementing comprehensive patient care as prescribed\r\n3. Focal building regulations and technical expertise for patient care in accordance with the characteristics of hospital, specialist to the Board of Nursing reviewed and approved by the hospital director\r\n4. Urging, checking nurses, technicians and supporting care to comply with the regulations and technical expertise\r\n5. Collaborating with faculty, department involved in estimating procurement instruments, medical consumable materials and monitoring the use and preservation of prescribed\r\n6. Organizations Coordinate with staff in developing recruitment plans, layouts and maneuvering nurses, technicians, support care\r\n7. Coordinating with the infection control department to inspect hygiene, infection control in hospitals\r\n8. Coordinating with (center) Training done advanced training for qualified nurses, technicians, care assistant. Join organize and direct practice guidelines for participating students and vocational testing for nurses, technicians, care assistant before hiring\r\n9. Participating in scientific research, and direct online\r\n10. Periodically, summarize and report on the care of patients in hospital\r\n11. Performing other duties as are assigned by the hospital director.', '2016-05-19 00:02:28', '0000-00-00 00:00:00'),
(2, 1, 'Quality Management Department', '9CxMUWLSvz0p3DSA5yuOOWngKOKLVVKucvWlPtsv', 'Total: 2 employees. Acting Head: First Specialist Dr Dinh Bang Nguyen. Member: Pharmacist Loc Gia Le.\r\nFunction:\r\nA functional department directly responsible to the Board of Directors for the hospital quality management;\r\nActing as a deploying unit and advising the hospital Director, the hospital quality Management Council about the operation of hospital quality management system.\r\nMission:\r\nDevelop plans for quality management activities in the hospital and present them to the Director for approval;\r\nImplementing, monitoring, supervising, evaluating, reporting, coordinating, supporting the implementation of activities on quality assurance schemes to improve quality in all departments;\r\nEstablishing a management system of errors and adverse events, which includes the identification, collection, analysis, reporting and research, propose solutions for preventable adverse events;', '2016-05-19 02:07:27', '0000-00-00 00:00:00'),
(3, 1, 'Intensive Care Unit And Poison Control Centre ', 'dl474xbrYo0OYKO2We2S2he4YPoWwmRysMguGjpm', 'INTRODUCTION\r\nFaculty leaders\r\nHead of Department: Le Duc Nhan, MD, PhD.\r\nDeputy-Head of Department: Vo Duy Trinh, MD. Nguyen Thanh Trung, MD. Head-Nurse: Phan Xuan Thong, BSc in Nursing.\r\nStaff: 54\r\nPhysicians: 14\r\nNurses: 35\r\nNurse’s Aids: 5\r\nFUNCTION AND TASKS\r\nIntensive care unit and poison control centre (ICUPC) receive and treat patients with the most severe and life-threatening illnesses, complex diseases of Internal medicine, Surgery, Obstetrics… in hospital and other medical centre in Danang and nearby provinces, which require close invasive monitoring and support.\r\nCo-operating with departments in hospital to provide emergency operation\r\n Staff-training and transferring critical care medicine techniques to other medical centre in Danang, participating in post-graduated education.\r\nScience researching and international co-operating.', '2016-05-19 02:25:02', '0000-00-00 00:00:00'),
(4, 1, 'Department of Pharmacy', 'zTKBQkBeMJiLCg2xDpopuuVfes0wskBpP7ijdTjT', 'Introduction\r\nDean: Tran Thi Đam - First speciality pharmacist\r\nNumber of employees: 50. Master pharmacist: 01. First specialitypharmacists: 02. Pharmacist of high degree: 07. Pharmacists of middle degree: 42. Functions: Consulting Director about issues related to pharmacy services. Planning, providing and ensuring adequate high-quality drugs, chemicals, medical equipments timely provided to emergency aid, treatment and other requirements (epidemic diseases, disasters…). Managing and monitoring demands for drugs, chemicals, medical equipments in hospital departments as well as stocking, issuing and delivering drugs daily to patients, issuing chemicalsand medical equipmentsfor clinical departments, subclinical departments weekly or monthly. Monthlychecking inventory of drugs, chemicals and medical equipments in the warehouses of pharmacy department and subclinical departments. Reporting on the use of drugs, chemicals and medical equipmentsof each particular departmentstostrike a balance. Maintaining drugs, chemicals, medical equipmentsin compliance with regulations.\r\n Managing and monitoringpharmaceutical regulations in hospital departments. Preparingmedicines, antiseptic chemicals for the request of departments. Organizing and implementing the activities of the Council of Medication and Treatment.\r\n The work of Clinical pharmacy Participating in the consultation upon request, informing and counseling on the use of durgs, participating in scientific meetings of the hospital, involving in Pharmacovigilance, monitoring and reporting adverse drug reactions. Good practice tender evaluation. Participating in scientific researchs and training; guiding pharmaceutical students.\r\n Managing the operations of the hospital pharmacy in compliance with regulations.', '2016-05-19 02:31:29', '0000-00-00 00:00:00'),
(5, 1, 'Cardiovascular Internal Medicine Departement.', 'q43TO7bcaoGGVqp7d2nyV7TGrJd6yRDMY9LKBQt3', ' ORGANIZATION AND PERSONALS\r\nFormed in 2006, separated from Internal Medicine Department A.Chief of Department: Dr Huynh Dinh Lai. Vice chief of Department: Dr Le Van Minh and Dr Pham Van Hung. Physicans: Ho Van Phuoc, Nguyen Quoc Viet, Hoang Huy Liem, Huynh Huu Nam, Giao Thi Thoa, Nguyen Hoang Khanh, To Thi Phuong, Nguyen Dinh Giang. Chief of Nurse: Nguyen Thi Mai and the other 20 nurses, 04 medical supporters. \r\nLOCATION AND INSTRUMENTS\r\nThe inpatient area: located at 3 rd floor of the Internal Medicine Building. There are 110 beds, including 01 emergency room, 01 coronary care unit, 01 procedure room (01 defibrillator, 01 ultrasound machine, 01 monitor and oxygene system), 01 stress ECG treadmill, 01 Holter ECG room. The outpatient area: located at 2 nd floor of the outpatient clinic building. About 60 – 80 patients are taken care each day. Cath- lab room: 01 DSA system and 01 electrophysiology system.\r\nEchocardiography room: located at 2nd floor of Internal Medicine Building, a Philip HD 11 ultrasound machine with 3 probes: vascular probe, cardiac probe and abdominal probe.', '2016-05-19 02:36:10', '0000-00-00 00:00:00'),
(6, 1, 'Internal Department Of Gastroenterology And Biliary Hepatology', 'WtZeUHKTgqnsLcLhjIuGvyj9YXq8rEniClRzwTNe', 'Leaders of Department: Head of department: Huỳnh Thi Anh Dao, MD. Vice head: Senior Specialist. Nguyen Van Xung. Nursing head : Bachelor. Nguyen Thi Kim Hue. Staff: 1 senior specialist, 03 masters of medicine ( 01 will take a degree of senior specialist next year), 03 junior specialists,  02 physicians.(02 have completed FFI programme in France, 01 doctor has completed a stage in Switzerland).\r\n18 Nursing: 02 Bachelor of Nursing,  01 colleges, 15 Middle School of Nursing ( 01 is training a degree of bachelor), 03 nursing assistants.\r\nFunctions and tasks:  Examination, counseling and treatment of in and out-patients with diseases of the gastrointestinal and biliary hepatic system.  Diagnostic and treatment endoscopy with or without anesthesia. Diagnostic and treatment ultrasound.\r\nTechnology transfer endoscopy for some hospitals when they need.\r\nTraining medical students and physicians in gastrointestinal and liver diseases.\r\nEquipments: 01 gastrointestinal endoscopy ( 4 gastroscopies and 4 colonoscopies), 01 treating system of internal hemorrhoids by rubber band ligation and infrared photocoagulation. 02 automatically washing machines for endoscopes. Biopsy forceps, snares of polypectomy, ...\r\n 01 C-arm machine.\r\n 02 ultrasound machines: 01 black and white, 01 color.\r\n 01 machine of breath test for seeking bacteria of Helicobacter pylori.', '2016-05-19 02:42:38', '0000-00-00 00:00:00'),
(7, 1, 'Nephrology And Endocrinology Department', 'rwbTZcM2Ai1HIauI0BrXAorm3ke9vO5wdU6an6EC', ' HERITAGE\r\n* 1975 - 2000 :  Department of General Internal Medicine\r\n* 2000 - 2002 :  Divided into two Departments\r\nInternal Medicine A : Cardiology, Respiratory, Neurology, Musculoskeletal. Internal Medicine B : Gastroenterology, Nephrology, Endocrinology,  Hematology\r\n * 2002 - 2006 : Divided into three departments\r\n  Internal Medicine A : Cardivascular Department.\r\n  Internal Medicine B : Respiratory, Neurology, Musculoskeletal             \r\n  Internal Medicine C : Gastroenterology, Urology, Endocrinology\r\n* 2006: Divided into six departments: Cardiology ; Respiratory - Immunology - Allergy;  Nephrology - Endocrinology; Gastroenterology; Neurology - Musculoskeletal - Hematology and General internal medicine department.\r\n * 11-12-2006: Nephrology - Endocrinology Department was established. Location: 6th floor of  7 floor-Building, Da Nang Hospital.\r\n Phone number: 0511.3885275\r\n Human Resources\r\nDepartment has 90 beds. The staff consists of 28 members, including 9 doctors, 16 nurses, 3 assistant staffs\r\nDean: Dr. Nguyễn Hùng\r\nVice Dean: Dr. Đặng Anh Đào\r\nThe Other Doctors:\r\nDr. Võ Thị Hồng Vân\r\n Dr. Nguyễn Hữu Đa\r\nDr. Hà Nữ Thùy Nhi\r\nDr. Tô Viết Thuấn\r\nDr. Lê Thị Tiến\r\nDr. Nguyễn Thị Thủy\r\n Dr. Phan Nguyễn Tú Uyên', '2016-05-19 02:48:10', '0000-00-00 00:00:00'),
(8, 1, 'Department Of Neurology, Rheumatology And Hemotology', 'mVsFg3JNob3Lj2ahbi4ow1CBqAiFRI06o74RGaZd', 'INTRODUCTION\r\nAddress: 7th floor, Internal Medicine Building, Da Nang Hospital\r\n109 beds. Department Leader\r\nDeputy Chief Lê Hoang Truong M.D.\r\nDeputy Chief Tran Thi Thanh Huong M.D.\r\nEmployers: 29. Doctor: 8 persons. Ph.D.: 01\r\nMaster: 05. Level I specialist doctor: 01. Oriented specialist doctor: 01. Nurse: 18 persons. Bachelor nurse: 01, Colleges nurse: 03,\r\nHigh School nurse: 14, MISSION\r\nDiagnosis, Treatment, Management and Follow-up for patient with  internal neurologic, rheumatologic and hematologic disorders\r\nResearch, application and update the achievements in internal neurology, rheumatology and hematology fields\r\nContribute training for postgraduation diploma with specialization in internal neurology, rheumatology and hematology; Be the place of practical training for medical students, postgraduate and nurses.\r\nForeign corporation, exchange and study specialization\r\nMedical Guidelines, public health education about neurologic, rheumatologic and hematologic diseases', '2016-05-19 02:56:44', '0000-00-00 00:00:00'),
(9, 1, 'Department Of General Medicine ', 'Qr3qAGtdqZQmDp5yZwviozTY9oJJGkgHy5bG0MR9', 'INTRODUCTION\r\nDepartment of General Medicine was established on 8th completely new unit basing on the need of the hospital and the people of Danang City as well. Leaders: Chief of Department: Nguyen Duc Lu, MD, PhD\r\nDeputy Chief of Department: Dang Cong Lu, MD, PhD\r\n Head Nurse: Huynh Thi Thu Ha, BS in Nursing. Human Resources: 2 MD, PhD; 4 MD, MS in Medicine, 1 BS in Nursing, 15 nurses and 3 nurse’s aids. FUNCTION: Receiving all patients from specialities of internal medicine (cardiology, gastroenterology, endocrinology, neurology, musculoskeletal and connective tissue disorders, hematology, pulmonary diseases, uro-nephrology,...) need a special care. Receiving all the foreigner patients need a high quality treatment and care. Coordinating with specialists in internal, surgical medicine and critical care to guarantee an accurate diagnosis and a good treatment.\r\nEQUIPMENT: sets of electrical syringes, 2 infusion pumps, 3 nebulizers, 2 sets of ECG machines. ', '2016-05-19 03:00:38', '0000-00-00 00:00:00'),
(10, 1, 'Department Of Anesthesia & S.I.CU', '3QkEDuFFiAUh4Wr17cdkRluhOrd2so00GQjKR6LA', 'History:\r\n Before 1975: The Department of Anesthesia and SICU belonged to Da nang General Hospital under older goverment.\r\nFrom 1975 – 1995 : establising the Department of Anesthesia including 07 operating tables and The ICU with 15 beds.\r\nIn 1996: new building of the Department with 10 operating rooms including 13 operating tables and recovery room. in 2005: Renovate the old operating theatre to be the emergency operating theatre with 4 operating tables, building a new operating theatre having 8 modern operating rooms with 12 operating tables, the recovery room receiving the surgery patients in the same day and the SICU with 40 beds.\r\nIn 2012: building the emergency operating theatre with 7 operating rooms including 14 operating tables and the SICU with 40 beds, expected to put into operation in 2015.\r\nII. Personnel and organization of department\r\n1. Personnel: The department has 130 staffs including:\r\n16 Doctors (7 Grade I Specialists , 2 Masters, 6 General doctors).\r\n96 Nurses (12 Bachelors, 4 Collegues, 80 technicians and Nurses), 18 Nurses aid. Head of Deparment\r\n\r\nDr. Nguyen Thi Tho (1975-1976)\r\n\r\nDr. Tran Van An (1977-1996)\r\n\r\nDr. Phan Ngoc Quoc (1997- 2011)\r\n\r\nDr. Le Trong Binh from 2012 to present', '2016-05-19 03:16:42', '0000-00-00 00:00:00'),
(11, 1, 'Neurosugical Department ', 'IW6P2llikpYMtjEXu5pgnAbamveSsAs50DubZ9bS', ' Introduction: \r\nNeurosurgical Department of  Da Nang Hospital was officially established on 1st May 2004, was separated from Orthopedic-Neurosurgical Department.\r\nChief: Nguyen Ngoc Ba M.D. Vice Chief: Le Bao Nghiem M.D.                     Le Quang Chi Cuong M.D. Current staffing includes: 10 Neurosurgeons,3 Residences, 20 Nurses, 4 ordelies. \r\nStandard hospital beds is 110 beds, but the number of patients actually up to over 150 patients.\r\n\r\nWe regularly send our doctors for post-graduated training  at the Department of Neurosurgery in  Cho Ray Hospital, University of Medicine and Pharmacy of HCMC and Orthopedic Hospital in Ho Chi Minh City ,103 Hanoi Central Institute. Most doctors are highly qualified in English, French and well enough to communicate, read and work directly with foreign colleagues and trainees coming from foreign countries such as Britain, France, Japan, Korea, Singapore, Thailand, the United States, .... Many Professors and Specialists from USA, France,Japan, Australia... come to our hospital in the short term and long term to share experiences  and work together.\r\n\r\nWebsite : http://neurosurdn.webs.com', '2016-05-19 03:22:02', '0000-00-00 00:00:00'),
(12, 1, ' Thoracic Surgery Department.', 'kNoAWh7BGimGTudR7Mrjz44hy3r9vhT0lFeWOSrD', ' Development History\r\n\r\nBefore 2001, In it’s initial days, it was working as a General Surgery Department. Later on 2011, it became a specialised thoracic and Urology Surgery Department\r\n\r\nThoracic Surgery Department of Da Nang Hospital was established in 24/4/2014. It was detached from Thoracic-Urology Surgery Department.\r\n\r\nUp to now, The Thoracic Surgery Department consist 20 staffs. There are 5 Doctors, of which 3 masters, 1level one medical specialization, 1 doctor; 12 Nurses and 3 Nurse’s aides with 35 sick beds. It has been well – performing of its mission in training, scientific research, examining and treating medically as well as steering the primary health care service.\r\n\r\nWith the experimental physicians and high qualification, The Hospital was equipped with modern equipment in diagnosis and treatment such as PEC CT, MRI... .The Thoracic Surgery Department has become a specialised Department which contributes to improving the quality of treatment and public health care\r\n\r\nII. Functions and responsibilities\r\n\r\n1. Examination and surgical treatment of :\r\n\r\n- Thoracic diseases, peripheral vascular diseases, thyroid diseases, esophageal diseases.\r\n\r\n2. Training and scientific research\r\n\r\n- Teaching and clinical training for students and postgraduate students of Hue University of medicine and pharmacy.\r\n\r\n- Scientific research and new technic application offer health care services\r\n\r\n- Nurse training items of Da Nang University, Da Nang Technical University of Medicine and Pharmacy, Duy Tan University and other medical college in Da nang\r\n\r\n- Steering the primary health care service', '2016-05-19 03:26:05', '0000-00-00 00:00:00'),
(13, 1, ' Oncology Department ', 'vWNeGnUZ2UkoZtOt82mYz55HVmmAwZk4HUA0k404', 'GENERAL\r\n\r\n1. The formation and development of department\r\n\r\nThe decision was made to establish an oncology and radiotherapy Cobalt  units commencing from January 10th, 1992 for outpatient radiotherapy.\r\n\r\nOn May 2nd 2004, inpatients began being treated utilising the modalities of chemotherapy and radiotherapy incorporating palliative care.\r\n\r\nSurgical treatments were initiated in July 2007 and the Oncology clinic was opened in October, 2007. A new linear accelerator was commissioned and operation from January 3rd, 2011 enabling patients to receive CT simulation based radiotherapy.\r\n\r\n2. Human resources status\r\n\r\nHead of department: TRAN  Tu Quy, MD.\r\n\r\nVice Head of department: LE Quoc Tuan, MD.\r\n\r\nChief of nurses: TRUONG thi Mai, Bachelor\r\n\r\nThe total staff comprises of 59 employees:\r\n\r\nDoctor: 11 (Specialist level II: 02, Master: 03, Specialist level I: 2)\r\n\r\nPhysicist: 02\r\n\r\nNurse: 34 (Bachelor: 04, College: 03, Intermediate: 27)\r\n\r\nTechnician: 08 (College 1)\r\n\r\nWaiter: 04', '2016-05-19 03:28:30', '0000-00-00 00:00:00'),
(14, 1, 'Ent (Ent Nose Throat) Department ', 'FpPKbP2H0vllifuEsDtzhbg9XawZn4zXgjSJtEFg', 'Overview:\r\n\r\nWelcome to ENT department of Danang Hospital webpage. The ENT department is dedicated to providing state-of-the art medical care for individuals with ear, nose and throat conditions. Along with the development of the health sector in Da Nang city and Da Nang Hospital, ENT department has continued to develop the quality of medical care, apply the advanced techniques on treatment. As part of the dedication to teaching offers, the ENT department has a robust education program, which educates fellows as well as other physicians.\r\n\r\nMembers of the department are invited regionally, nationally, and internationally to present research and deliver lectures to other physicians. Our ENT doctors also provide care for patients with common and complex diseases including hearing and balance conditions, head and neck cancer, sinus and allergy diseases, breathing problems, …\r\n\r\nPhysicians include:\r\n\r\nDean: Dr. Huynh Anh\r\n\r\nVice Dean: Dr. Truong Ngoc Hung\r\n\r\nOur ENT doctors: 10 doctors\r\n\r\nChief of Nurse: Tran ThiNhu Y\r\n\r\nNurses: 11 people.\r\n\r\nBed plan: 91; Real bed statistics: 81.\r\nFunction and Task:\r\n\r\nENT department in Danang hospital includes more than 10 specialists. The department includes subspecialists in:\r\n\r\nOtology/Neurotology (ear problems)\r\n\r\nAudiology\r\n\r\nLaryngology\r\n\r\nHead and Neck Cancer\r\n\r\nPediatric Otorhinolaryngology\r\n\r\nRhinology (nose and sinus problems)\r\n\r\nGeneral Otorhinolaryngology\r\n\r\nMedical Otorhinolaryngology\r\n\r\nExperienced doctors in Otorhinolaryngology work together and with other specialties, especially Ophthalmology, Pediatrics, Neurology, Neurosurgery, Pulmonary Medicine and Oncology to provide comprehensive care for thousands of patients annually.Physician researchers in ENT help develop and improve treatment options for patients.', '2016-05-19 03:35:50', '0000-00-00 00:00:00'),
(15, 1, ' Traditional Medicine Faculty ', 'u2GB3qqwDmitjqQo64cnv3fsH2we05hOJEMRRBwX', 'Established since 1976, going through 38 years of construction and development. Along with the development of the entire Hospital, Traditional Medicine Faculty of DA NANG Hospital has gradually asserted its position, contributed to success of the hospital.\r\n\r\nI. Personnel:\r\n\r\n- Faculty Leader: Phan Thi Sam – Specialists I\r\n\r\n- Staff are:\r\n\r\n+ Doctor for treatment: 05 ( 02 Specialists I,02 MA, 01 Doctor)\r\n\r\n+Traditional Nurses: 10\r\n\r\nII. Functions and duties:\r\n\r\n      1.Functions:\r\n\r\n- Organizing the traditional medicine activities in the Hospital. It is considered as a ‘bridge’ between Traditional Medicine and Modern Medicine.\r\n\r\n- Implementing policies to build a typical model of the Traditional Medicine  Faculty in the Hospital.\r\n\r\n      2. Duties:\r\n\r\n- Treatment of patients with Traditional Medicine (Getting circuitry, prescription. Medicine, Acupuncture, Massage...). Examination and treatment are combining of Traditional Medicine and Modern Medicine.\r\n\r\n- Coordinating with the Clinical Faculty and Testing, Imaging Diagnostic, functional Exploration in the Hospital to promote the strengths of Traditional Medicine and Modern Medicine and to improve the quality of treatment.', '2016-05-19 03:39:26', '0000-00-00 00:00:00'),
(16, 2, 'Phòng Tổ Chức Cán Bộ', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, 'Phòng Kế Hoạch Tổng Hợp', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, 'Phòng Điều Dưỡng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 2, 'Phòng Vật Tư Thiết Bị Y Tế', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 2, 'Phòng Hành Chính Quản Trị', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 2, 'Phòng Chỉ Đạo Tuyến', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 2, 'Phòng Tài Chính - Kế Toán', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 2, 'Phòng Quản Lý Chất Lượng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 2, 'Phòng Công Nghệ Thông Tin', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 2, 'Khoa Dược', 'Screenshot at 20-22-03.png', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '2016-04-12 06:48:44', '0000-00-00 00:00:00'),
(26, 2, 'Khoa Khám Bệnh', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 2, 'Khoa Hồi Sức Tích Cực - Chống Độc', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 2, 'Khoa Nội Tim Mạch', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 2, 'Khoa Nội Hô Hấp - Miễn Dịch Dị Ứng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 2, 'Khoa Nội Tiêu Hóa - Gan Mật', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 3, 'Phòng Tổ Chức Cán Bộ', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 3, 'Phòng Kế Hoạch Tổng Hợp', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 3, 'Phòng Điều Dưỡng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 3, 'Phòng Vật Tư Thiết Bị Y Tế', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 3, 'Phòng Hành Chính Quản Trị', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 3, 'Phòng Chỉ Đạo Tuyến', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 3, 'Phòng Tài Chính - Kế Toán', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 3, 'Phòng Quản Lý Chất Lượng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 3, 'Phòng Công Nghệ Thông Tin', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 3, 'Khoa Dược', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 3, 'Khoa Khám Bệnh', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 3, 'Khoa Hồi Sức Tích Cực - Chống Độc', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `khoa` (`id`, `benhvien_id`, `tenkhoa`, `hinhanh`, `thongtin`, `updated_at`, `created_at`) VALUES
(43, 3, 'Khoa Nội Tim Mạch', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 3, 'Khoa Nội Hô Hấp - Miễn Dịch Dị Ứng', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 3, 'Khoa Nội Tiêu Hóa - Gan Mật', 'img/images/1.jpg', 'Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu. Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015 chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ 2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 3, 'qdewfewf', 'ZCUYM0NqgEntUiTHo7S5cIWe8Rx0yKH2x5u2FGT4', 'qwdwefwegwrg\r\nasdasdasd\r\nefewf', '2016-04-12 06:56:09', '2016-04-12 06:20:38'),
(47, 1, 'Infection Control Department.', 'lDp9Zv5dsGw1yJ1JWqSz9MDqUR6mJ2cEPjmuOYID', 'INTRODUCTION\r\n\r\nThe department was established in 1998. Since 2009 it has been renamed Infection Control Department.\r\nThe department consists of 3 teams:\r\n - Administrative surveillance team\r\n\r\n - Pasteurization – supplies team\r\n\r\n - Laundry team\r\n\r\nLeader:\r\n - Chief of department: doctor Le Thi Hong Chung\r\n\r\n - Head nurse: B.S in nursing Huynh Thi Thanh\r\n\r\nHuman resources:\r\n- 2 doctors\r\n\r\n- 3 B.S in nursing\r\n\r\n- 3 nurses\r\n\r\n- 19 medical workers.\r\nFUNCTION:\r\n\r\nPlanning infection control periodically and annually.\r\nEstablishing regulations infection control procedures based on the regulations and guidelines of the Ministry of Heath\r\nCoordinating with other related departments to supervise the infection control activities, investigating and reporting cases of nosocomial infection and proposing solutions, monitoring and reporting of antibiotic resistant bacteria.\r\nManaging, monitoring activities of disinfection and sterilization laundry; providing sterilized instruments, antiseptic chemicals, linens and consumable materials for infection control activities of the hospital.\r\nManaging, reporting of exposed cases, occupational accidents.\r\nPropagating, training, researching on infection control.', '2016-05-19 03:41:26', '2016-04-24 08:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `loaidichvu`
--

CREATE TABLE IF NOT EXISTS `loaidichvu` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `tendichvu` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaidichvu`
--

INSERT INTO `loaidichvu` (`id`, `benhvien_id`, `tendichvu`, `giatien`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gynecological ', 200000, '2016-05-19 10:56:57', '2016-05-19 03:56:57'),
(2, 1, ' Pediatric Care', 200000, '2016-05-21 09:28:21', '2016-05-21 02:28:21'),
(3, 1, 'Internal Examination', 200000, '2016-05-19 10:50:07', '2016-05-19 03:50:07'),
(4, 1, 'External Examination', 200000, '2016-05-19 10:52:27', '2016-05-19 03:52:27'),
(5, 1, 'Ultrasonic testing', 200000, '2016-05-19 10:53:23', '2016-05-19 03:53:23'),
(6, 2, 'Khám Sản, Khám Phụ Khoa', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 'Khám Nhi', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 'Khám Nội Khoa', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 'Nội Soi', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'Siêu Âm', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 3, 'Khám Sản, Khám Phụ Khoa', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 3, 'Khám Nhi', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 3, 'Khám Nội Khoa', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 3, 'Nội Soi', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 3, 'Siêu Âm', 200000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE IF NOT EXISTS `loaitin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(300) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`id`, `name`, `description`, `icon`, `benhvien_id`, `created_at`, `updated_at`) VALUES
(1, 'Health News', 'Health, updated useful information about common diseases, rare. Daily news related to human health', 'at4aQYSjAIDW6kpuDGO4qKMIbSxRM8odXvG6gd1Q.png', 1, '2016-05-19 03:05:11', '2016-05-18 20:05:11'),
(2, 'Organizational Chart', 'This part is chart which descript about orgnization of hospital. So we can images overview about hospital''s system.', 'hhHxh2GspvkkTFARyziIwJwxKEXYPm8mHhpH4zAH.png', 1, '2016-05-19 03:28:47', '2016-05-18 20:28:47'),
(4, 'Scientific activities', 'Description aout sciences activity in hospital. It include the scientific study of the doctor, reaching the top prize in the national contest', 'ktG3JPVogqjIMP9GjlWpquTYrXCgSLlJkwoSra8t.png', 3, '2016-05-19 03:39:13', '2016-05-18 20:39:13'),
(5, 'Scientific activities', 'Description aout sciences activity in hospital. It include the scientific study of the doctor, reaching the top prize in the national contest', 'sJxF3ECy96Zia0e9rsPKMCOLWMNdQNwyt3R5Xjsv.png', 1, '2016-05-19 03:44:51', '2016-05-18 20:44:51'),
(6, 'Insurrance', 'all the people required to participate in health insurance, along with people''s rights to health insurance will be expanded as: the poor, the minorities will not have to pay 5% when co-KCB; insured for 5 consecutive years and be paid 100% of health care costs.', '3jWxTZDgSD9e2lue7gWXc5dEEWlpkUIwrS1rgXmX.png', 1, '2016-05-18 20:50:57', '2016-05-18 20:50:57'),
(7, 'Careers', 'Hospital has many vacances for intership, docter and nurse, You can apply for these position. Wellcome with us.', '4iZex4pG6uuQRMGvFwKC2xkVTipMTZyKI2nTAomD.png', 1, '2016-05-19 04:28:24', '2016-05-18 21:28:24'),
(8, 'Services', 'Including all services in hospital, such as laboratory services, Boarding Services, Outpatient services, etc. We can response in the shortest time', 'pAgNnC1ZpmLdXMQ4YeYkLR6mSB4D8UEyefAa2lL5.jpg', 1, '2016-05-18 21:46:20', '2016-05-18 21:46:20'),
(9, 'Live Healthy', 'Know how  to improve healthy and health protection from the harmful agents, while providing useful tips to enhance the performance of health.', '9avQb5PAntdkReKqBsBVhOamqeswuRXH4VgePO7t.png', 1, '2016-05-21 09:34:53', '2016-05-21 02:34:53'),
(10, 'Consultant  Doctor', 'All docter''s advise will bring to you knowledge about daily life. You can apply for yourseft. All information is userful and practical, they make you feel better.', 'gHG3AGCN9457ue3DavYTANgUnR6Oq5GfTdNEfav7.png', 1, '2016-05-21 02:43:11', '2016-05-21 02:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `phongkham`
--

CREATE TABLE IF NOT EXISTS `phongkham` (
  `id` int(11) NOT NULL,
  `dichvu_id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `bacsi` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phongkham`
--

INSERT INTO `phongkham` (`id`, `dichvu_id`, `ten`, `bacsi`, `updated_at`, `created_at`) VALUES
(1, 1, 'Clinic No. 1', 'Nguyen Thanh Hai', '2016-05-20 02:31:58', '0000-00-00 00:00:00'),
(2, 1, 'Clinic No. 2', 'Phan Van Luong', '2016-05-20 02:34:06', '0000-00-00 00:00:00'),
(3, 1, 'Clinic No. 3', 'Truong Ngoc Thuy', '2016-05-20 02:34:53', '0000-00-00 00:00:00'),
(4, 3, 'Clinic No. 4', 'Nguyen Tan Kiet', '2016-05-20 02:35:33', '0000-00-00 00:00:00'),
(5, 4, 'Clinic No. 5', 'Phan Thanh', '2016-05-20 02:36:16', '0000-00-00 00:00:00'),
(6, 3, 'Clinic No. 7', 'Nguyen Dieu Hang', '2016-05-20 02:36:55', '0000-00-00 00:00:00'),
(7, 5, 'Clinic No. 8', 'Trinh Linh Giang', '2016-05-20 02:38:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkham`
--

CREATE TABLE IF NOT EXISTS `thongtinkham` (
  `id` int(11) NOT NULL,
  `benhnhan_id` int(11) NOT NULL,
  `phongkham_id` int(11) NOT NULL,
  `thoigiankham` datetime NOT NULL,
  `dakham` tinyint(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongtinkham`
--

INSERT INTO `thongtinkham` (`id`, `benhnhan_id`, `phongkham_id`, `thoigiankham`, `dakham`, `updated_at`, `created_at`) VALUES
(1, 6, 1, '2016-04-16 05:26:00', 1, '2016-05-21 14:51:16', '2016-04-22 20:36:41'),
(2, 6, 2, '2016-04-05 06:28:00', 1, '2016-05-21 14:51:13', '2016-04-22 20:36:41'),
(3, 7, 5, '2016-04-05 03:20:35', 1, '2016-05-21 14:51:09', '2016-04-22 20:36:41'),
(4, 7, 4, '2016-04-19 05:25:39', 0, '2016-05-21 14:51:06', '2016-04-22 20:36:41'),
(5, 6, 3, '2016-05-24 01:00:00', 0, '2016-05-21 14:49:31', '2016-04-22 20:36:41'),
(6, 6, 2, '2016-04-15 01:30:00', 0, '2016-05-21 14:49:34', '2016-04-24 08:00:58'),
(7, 6, 2, '2016-04-15 01:30:00', 0, '2016-05-21 14:49:37', '2016-04-24 08:04:48'),
(8, 6, 1, '2016-04-11 12:00:00', 0, '2016-05-21 14:48:12', '2016-04-24 08:20:42'),
(9, 6, 2, '2016-05-17 01:00:00', 0, '2016-05-21 14:51:30', '2016-05-12 07:07:41'),
(10, 7, 2, '2016-05-06 12:30:00', 0, '2016-05-21 14:48:16', '2016-05-17 00:48:32'),
(11, 7, 4, '2016-05-11 02:00:00', 0, '2016-05-21 14:48:18', '2016-05-21 01:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `author_id`, `category_id`, `tieude`, `noidung`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Going higher hospital charges', 'After much back plan, the Ministries of Health - Finance recently issued circular on unified medical service prices, health insurance and treatment between hospitals (BV), the same grade across the country, to apply from 1 -3 to.\r\nNguyen Nam Lien, director of the Department of Planning and Finance - Ministry of Health, said the adjustment of fees in 2016 has been divided into 2 phases. Accordingly, from October 1-3, will charge extra fees special allowances in addition to the direct cost of medicine today is, directly supplies; Electricity, water and waste treatment; maintenance, equipment maintenance, purchase replacement instruments, tools directly used to perform the service.\r\nSpecifically, the amount Class I medical examination in hospital is 20,000 / turn, Grade II BV VND15,000, VND10,000 BV and BV Grade III Grade IV 7000. From March 1-7, the "burden" additional medical staff salaries, wages will increase medical examination corresponding to the above-mentioned class BV 39,000 - 35000-31000 and 29,000 dong.', 'qQPup4omtD8Z95DT9X8J70hlL6a3yz6ERJUNZper', '2016-05-21 03:02:46', '2016-05-20 20:02:46'),
(2, 1, 1, 'Zika no longer threaten the people in Khanh Hoa', '22-4 pm, Khanh Hoa province has announced the end of Zika virus epidemic scale by communes in the province of Khanh Hoa.\r\nHowever, Khanh Hoa BND still required the Department of Health continues to monitor developments closely to the specific situation promptly report and propose solutions provinces implement disease prevention by Zika virus in the province provinces and minimize the spread community.\r\n\r\nEarlier, 5-4 pm, immediately after the Health Ministry announced on 2 cases of Zika virus first in Vietnam, including 1 case in Khanh Hoa province, the province has issued a decision on disclosure Zika virus epidemic scale by communes in the province.\r\n\r\nFemale patients with first Zika virus in Khanh Hoa, 64, residing in Phuoc Hoa Ward, Nha Trang City is determined to be caused by mosquito bites. According to the Health Ministry''s regulations, after 24 days of onset of the most recent cases, if no new cases appeared Zika virus are due to declare epidemic.', 'nGUpryQhALuQMXW70yGXZ2UilnkviwTMrbqEOxzn', '2016-05-21 03:30:02', '2016-05-20 20:30:02'),
(5, 1, 1, 'The habit of "confrontation" with sleep', 'We''ve known cause sleeplessness drinks such as coffee, tea ... However, there are many foods or other harmful habits and are quietly undermining nightly sleep that we rarely notice I. Health pages of the magazine Huffington Post (US) elements indicate that your sleep quality decreases seen and you need to give up even if you do not want it to ruin your health.\r\nSmartphone, Foods that cause insomnia and \r\nOther factors', 'S2MNOlEvE1kZ9k9WeM6HaeeU5TUNAUZSPnYfyGHd', '2016-05-21 03:33:52', '2016-05-20 20:33:52'),
(6, 1, 1, 'Women ask about dying, the doctor determined to save lives', 'SKDS - Women with HELLP syndrome, according to the 2nd hospital decentralization as insufficient Binh Thuan General Hospital and technical expertise to handle this situation.\r\nWomen with HELLP syndrome, according to the 2nd hospital decentralization as insufficient Binh Thuan General Hospital and technical expertise to handle this situation. BV has procedures for the patient was transferred to the City Tu Du Hospital. Ho Chi Minh to be the best treatment. However, due to the poor family circumstances, the manufacturer has determined not to give women the referral person that would like to go home to die. Before that situation, and with the heart of the physician, the Binh Thuan General Hospital doctors have overcome difficulties, boldly emergency surgery patients said although the mortality rate for this disease is quite high.\r\n19/5 days, talk to reporters in Health & Lifestyle, BS. Nguyen Huu Quang - Binh Thuan General Hospital Director said, this is the first time Binh Thuan General Hospital carried out emergency surgery women with HELLP syndrome and has successfully.', '3ECyB1yepliMNAhdEUpOfnf14S2vBbIzbIsgqdcX', '2016-05-21 03:37:13', '2016-05-20 20:37:13'),
(7, 1, 1, 'Hanoi: Free Blood Sugar Testing, Blood Fat', 'SKDS - To celebrate 126 years of the birth of President Ho Chi Minh 19/5, MEDLATEC Hospital performed a special incentive program "Free care Noi, glucose testing, blood fats" in new facilities 99 Trich Sai (old lakeside road), Tay Ho, Hanoi. The program applies to end on 05/31/2016.\r\nHow early diagnosis Blood sugar, blood fats\r\nIn Vietnam, more than 29% of Vietnamese adults were dyslipidemia, in which the ratio of urban population amounted to 44.3%. That shows just about 2 urban residents, a person with high cholesterol. The data also showed that, dyslipidemia and hypertension are closely related to 45% of deaths from cardiovascular diseases and 51% of deaths from stroke.\r\nHigh blood fat and blood sugar continues to tend to rejuvenate, focusing on those with dietary unreasonable. To remove, to find the causes, screening and compliance periodic advice of doctors. However, symptoms in each person are not the same, mostly silently performing difficult to detect.\r\nPeriodic health checks and conduct blood tests index, blood fat over a period of 3-6 months gold / times with nutrition, healthy rest are considered effective ways of screening patients Best.', 'xsTtoPmEtRX3KzQqy8t9YbbearlleLcUNTbqir87', '2016-05-20 20:40:02', '2016-05-20 20:40:02'),
(8, 1, 1, 'Health Department facility licensed for healthcare public', 'It is one of the content by the Prime Minister approving the plan to simplify the administrative procedures and regulations related to health facility for medical under management functions of the Ministry of Health.\r\nReduce the time evaluation of licensed health care facility\r\nFor the procedure for licensing the operation of clinics and treatment, according to the plan has been simplified approval, the Government proposed amending paragraph 1 of Article 46 of the Law on Examination and Treatment 40 / 2009 / QH12 dated 23/11/2009 in the direction required Leaving care facilities and treatment to provide "certified true copy of the establishment decision on the basis of medical examination and treatment of the State or certificate of business registration for care establishments, private medical treatment or investment certificate on the basis of medical examination and treatment of foreign investment "and" certified true copy of certificate job of all workers and personnel records of the medical professional working at the facility, but not subject to certification practice ".', 'uH4YqPrKd0ucmzd5KiGvxRo1LBrpjLwtfQQ1yknS', '2016-05-20 20:42:53', '2016-05-20 20:42:53'),
(9, 1, 1, 'EU aid to communities affected by drought and salinization in VN', 'SKDS - To deal with drought and saltwater intrusion taking place in many parts of Vietnam from late 2015, the European Union is providing humanitarian aid 90,000 EUR to support the most affected people in Central Highlands and the Mekong delta.\r\nEU grants in the financing package by 178,000 EUR Disaster Relief Fund to assist Emergency Vietnam Red Cross (VNRC) in providing much-needed support, including the provision of water safe drinking, promote hygiene practices and good health care, and unconditional cash transfers to the poorest households to meet the demand for food and other priorities. Humanitarian aid will directly assist 17 600 most vulnerable people affected by the climatic phenomenon in the seven most affected provinces include Ben Tre, Binh Thuan, Gia Lai, Long An, Soc Trang , Tien Giang and Tra Vinh.', '3abdH70Sh4xeheFheMGKpLFAcb7Vvs0TyyXZkCnH', '2016-05-20 20:46:03', '2016-05-20 20:46:03'),
(10, 1, 1, 'The hospital ready to rescue on election day', 'SKDS - The Ministry of Health requires hospitals to prepare full of drugs, equipment and mobile emergency teams ready to respond in the election.\r\nTo ensure the health service of the election of deputies of the National Assembly and the election of deputies XIV Councils at all levels for the period 2016-2021, the Ministry of Health requested the Health Services of the provinces and centrally-run cities, hospitals national and sector hospitals of Health to urgently carry out medical service of election of deputies to the National Assembly and the election of deputies XIV Councils at all levels for the period 2016- 2021 as follows:\r\nHospitals full preparation of drugs, equipment and rescue teams working to take over the sick and ready to respond in emergency situations: Trauma Injury, fire, poisoning exclusive series and disaster (if any);\r\nThe Department of Health plans to deploy enhanced in order to: ensure food safety and hygiene, sanitation and disease prevention at the local.\r\n', 'd7IIBqH8sOiBts8UexL40pqkyuJD1c6wPGbGqUKk', '2016-05-20 20:47:50', '2016-05-20 20:47:50'),
(11, 1, 1, 'Uniquely medicine "took poison with poison"', 'With processing reduces toxins, and increase activity in the county code healing amount. Over 100 years, traditional brand "Feng rheumatism Ms. Torn" and "finished Mrs. Colon Bracing" became the all male drug remarkable healing abilities.\r\nMs. Feng arthritis remedies Bracing comes from her grandfather Jiang (the second daughter of Lang Giang tool) that is specific Pham Viet regimen (Countryside Agency, Thieu Van commune, Thieu Hoa district, Thanh Hoa province).\r\nWhat made her brand of medicine that Bracing for processing raw materials are derived drugs, originating in Vietnam, mainly in mountainous areas such as the Ba Thuoc, Ngoc Lac (Thanh Hoa) or zone Highlands (Dak Lak), one of the key to make herbal remedies traditional male voice is the same method cash county code prefabricated code is preserved and handed down more than 100 years.\r\nLow Ms. Feng Te remedies by the Ministry of Health Bracing licensed as medicines and drugs included in the list of essential Health Insurance Vietnam. 2015, Enterprise Ba Giang Party and State has been awarded many prestigious awards such as the first time Star Vietnamese medicine, National Quality Brands', 'aOlGiFGFlGQroCzVhCFGW4knx0D1sm4yqT2nk7zV', '2016-05-20 20:49:56', '2016-05-20 20:49:56'),
(12, 1, 1, 'Simplify the procedures related to medical facility', 'Reduce licensing evaluation period\r\nFor the procedure for licensing the operation of clinics and treatment, according to the plan has been simplified approval, the Government proposed amending paragraph 1 of Article 46 of the Law on Examination and Treatment 40 / 2009 / QH12 dated 23/11/2009 in the direction required Leaving care facilities and treatment to provide "certified true copy of the establishment decision on the basis of medical examination and treatment by the state or certificate of business registration for care establishments, private medical treatment or investment certificate on the basis of medical examination and treatment of foreign investment "and" certified true copy of certificate job of all workers and personnel records of the medical professional working at the facility, but not subject to certification practice ".\r\nReason simplify this procedure is present, the licensing activities for care facilities and treatment is done through a process of evaluation at the facility should replace required to provide certified copies of the certified copy of the base.\r\n', 'ivtJFN6PICrltHvod8g57D7PlJajmwqGMMtr4Toa', '2016-05-20 20:51:03', '2016-05-20 20:51:03'),
(13, 1, 3, 'CASE REPORT: A RARE PRESENTATION OF ORBITAL COMPLICATION OF INVASIVE FUNGAL SINUSITIS', ' The purpose of our clincial case presentation is to emphasize the role of ear, nose and throat specialist in early recognition and urgent treatment of fulminant fungal sinuisitis. In our paper we present a case of orbital complication of invasive fungal sinusitis without history of diabetic or immunocompromise host. The typical presentation of rhino-orbital fungal infection is that of anterior orbital inflammation, severe visual loss, fever. Our diagnosis based on CTscan image suggested fungal sinusitis, biopsy exam during operating. Early recognition and treatment with urgent surgical debridement and systemic antifungal therapy is the key to the management of rhino-orbital fungal infection and is neccessary to limit the spread of infection, which can lead to morbidity and mortality. Therefore healthcare practitioners should familar with the signs and symptoms of the disease.', 'eLwkEvKDdgRkamJYA0PQup1lFUiJqVEkywEBC9Mf', '2016-05-21 06:45:14', '2016-05-20 23:45:14'),
(14, 1, 3, 'CASE REPORT: A RARE PRESENTATION OF ORBITAL COMPLICATION OF INVASIVE FUNGAL SINUSITIS', ' The purpose of our clincial case presentation is to emphasize the role of ear, nose and throat specialist in early recognition and urgent treatment of fulminant fungal sinuisitis. In our paper we present a case of orbital complication of invasive fungal sinusitis without history of diabetic or immunocompromise host. The typical presentation of rhino-orbital fungal infection is that of anterior orbital inflammation, severe visual loss, fever. Our diagnosis based on CTscan image suggested fungal sinusitis, biopsy exam during operating. Early recognition and treatment with urgent surgical debridement and systemic antifungal therapy is the key to the management of rhino-orbital fungal infection and is neccessary to limit the spread of infection, which can lead to morbidity and mortality. Therefore healthcare practitioners should familar with the signs and symptoms of the disease.', 'haa9eGPGmzY56FQswnCVYmnXGyBtLHPqiZ8lXXzT', '2016-05-20 23:46:23', '2016-05-20 23:46:23'),
(15, 1, 1, 'CASE REPORT: A RARE PRESENTATION OF ORBITAL COMPLICATION OF INVASIVE FUNGAL SINUSITIS', ' The purpose of our clincial case presentation is to emphasize the role of ear, nose and throat specialist in early recognition and urgent treatment of fulminant fungal sinuisitis. In our paper we present a case of orbital complication of invasive fungal sinusitis without history of diabetic or immunocompromise host. The typical presentation of rhino-orbital fungal infection is that of anterior orbital inflammation, severe visual loss, fever. Our diagnosis based on CTscan image suggested fungal sinusitis, biopsy exam during operating. Early recognition and treatment with urgent surgical debridement and systemic antifungal therapy is the key to the management of rhino-orbital fungal infection and is neccessary to limit the spread of infection, which can lead to morbidity and mortality. Therefore healthcare practitioners should familar with the signs and symptoms of the disease.', '', '2016-05-21 06:49:17', '2016-05-20 23:49:17'),
(16, 1, 7, 'CASE REPORT: A RARE PRESENTATION OF ORBITAL COMPLICATION OF INVASIVE FUNGAL SINUSITIS', ' The purpose of our clincial case presentation is to emphasize the role of ear, nose and throat specialist in early recognition and urgent treatment of fulminant fungal sinuisitis. In our paper we present a case of orbital complication of invasive fungal sinusitis without history of diabetic or immunocompromise host. The typical presentation of rhino-orbital fungal infection is that of anterior orbital inflammation, severe visual loss, fever. Our diagnosis based on CTscan image suggested fungal sinusitis, biopsy exam during operating. Early recognition and treatment with urgent surgical debridement and systemic antifungal therapy is the key to the management of rhino-orbital fungal infection and is neccessary to limit the spread of infection, which can lead to morbidity and mortality. Therefore healthcare practitioners should familar with the signs and symptoms of the disease.', 'hF9pMYpDpOHu4rPiojSrJknn1dV15hHt9QboZHa8', '2016-05-21 15:30:45', '2016-05-21 08:30:45'),
(17, 1, 6, 'sdfg', 'sdefrghj', 'QcI6kCZPynfMxvcr0rWbyQukuPXOug4U4XDDStmV', '2016-05-21 08:22:15', '2016-05-21 08:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `ykienphanhoi`
--

CREATE TABLE IF NOT EXISTS `ykienphanhoi` (
  `id` int(11) NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  `hoten` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ykien` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ykienphanhoi`
--

INSERT INTO `ykienphanhoi` (`id`, `benhvien_id`, `hoten`, `email`, `ykien`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'Tran Thi Kim Ngan', 'lyliflower-sunset@gmail.com', 'It''s nice! I can improve my English skill well. Beside, I can know information about hospital, saving time for go to hospital.\r\nI love it!', 1, '2016-05-21 00:16:50', '2016-03-31 06:38:42'),
(2, 2, 'Nguyen Van Hung', 'pandakungfu_bk@yahoo.com', 'This services of hospital very good, look nice, easy for using and provide necessary information for me. Thank!', 1, '2016-05-21 00:11:49', '2016-04-01 20:42:56'),
(3, 1, 'Nhan Duong', 'nhanduong@gmail.com', 'Offers web admin. Currently his group is promoting specialized search of 1 items lost in Danang, through the group so that everyone can sign for everyone else knew to jointly search help people lose items lost. Thanks admin group put information on the site for community development in Da Nang. Thanks admin website.', 1, '2016-05-21 00:27:52', '0000-00-00 00:00:00'),
(4, 1, 'Huynh Nhat Le', 'tomcut@gmail.com', 'Unfortunately it seems that the server was locked and we could not track videotutorialul.\r\nI wish I still wonder how I can do to get the command button dintrun online store, to put it on my desktop, but it is a simple image as a picture, you can sal handle how I want on my computer. A picture sent a document I did not use anything. Thank you.', 1, '2016-05-21 00:42:08', '2016-04-23 01:03:42'),
(5, 1, 'Ho Viet Nhan', 'ntnhan-hyhuu@gmail.com', 'So if you are elderly, hypertension associated osteoarthritis, osteoporosis, the oral calcium supplementation did not affect the drug''s effect is not ad CCB?', 1, '2016-05-21 00:48:16', '2016-04-23 01:03:51'),
(8, 1, 'Giang Hai Anh', 'anhkhungpho98@yahoo.com', 'Hope hospital pharmacist might notice a few days so that you can arrange the time to attend. The content like this is essential for the ds', 1, '2016-05-21 00:50:19', '2016-04-23 01:48:26'),
(9, 1, 'fghtyju defwrgeht', 'sadsd@sdsrh.sss', 'dừegrthryjukiluouiteefrthyukyil\nsadfsgdhjk', 0, '2016-04-23 01:53:15', '2016-04-23 01:53:15'),
(10, 1, 'efgthyju asdsad', 'dfgh@dsd.sdsd', 'fegertrhjtyk', 0, '2016-04-23 01:55:07', '2016-04-23 01:55:07'),
(11, 1, 'tran thi giang', 'trangiang11t1@gmail.com', 'ưertyuiuhgfffrgthyjukj', 0, '2016-05-21 07:14:08', '2016-05-21 07:14:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benhvien`
--
ALTER TABLE `benhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaidichvu`
--
ALTER TABLE `loaidichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phongkham`
--
ALTER TABLE `phongkham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinkham`
--
ALTER TABLE `thongtinkham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ykienphanhoi`
--
ALTER TABLE `ykienphanhoi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `benhvien`
--
ALTER TABLE `benhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `loaidichvu`
--
ALTER TABLE `loaidichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `phongkham`
--
ALTER TABLE `phongkham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `thongtinkham`
--
ALTER TABLE `thongtinkham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ykienphanhoi`
--
ALTER TABLE `ykienphanhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
