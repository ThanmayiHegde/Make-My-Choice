
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `faculty_delete` (IN `ID` VARCHAR(50))   begin
	declare emp_id varchar(50);
	declare user varchar(50);
	declare F_Name varchar(20);
	declare L_Name varchar(20);
	declare Gender varchar(10);
	declare Qualification varchar(50);
	declare Grade_Taught varchar(20);
	declare DOJ date;
	declare YOE int(3);
	declare phone int(10);
	declare email varchar(20);
	declare password varchar(15);
	declare count int(11);
	declare happy varchar(200);
	declare about_college varchar(200);
	declare about_curr varchar(200);
	declare workload varchar(20);
	declare remunerisation varchar(200);
	declare recommend varchar(200);
	declare preference varchar(200);
	declare HOD varchar(20);
	declare suggestions varchar(200);
	
	
	
	declare done int default 0;
	declare val int;
	declare cur cursor for select
		t1.emp_id,t1.user,t1.F_Name,t1.L_Name,t1.Gender,t1.Qualification,t1.Grade_Taught,t1.DOJ,t1.YOE,t1.phone,t1.email,t1.password,t2.count,t2.happy,t2.about_college,t2.about_curr,t2.workload,t2.remunerisation,t2.recommend,t2.preference,t2.HOD,t2.suggestions
		from faculty as t1,ffeed as t2 
		where t1.emp_id = t2.emp_id;


	declare continue handler for not found set done=1;
	open cur;
	c1:loop
		fetch cur into emp_id,user,F_Name,L_Name,Gender,Qualification,Grade_Taught,DOJ,YOE,phone,email,password,count,happy,about_college,about_curr,workload,remunerisation,recommend,preference,HOD,suggestions;
		if done=1 then leave c1;
		end if;
		insert into backup_faculty values(emp_id,user,F_Name,L_Name,Gender,Qualification,Grade_Taught,DOJ,YOE,phone,email,password,count,happy,about_college,about_curr,workload,remunerisation,recommend,preference,HOD,suggestions);
	end loop;
	close cur;

	set val = (select count(*) from backup_faculty
			where backup_faculty.emp_id = ID);
	if val>0 then
		delete from ffeed where ffeed.emp_id = ID;
		
	end if;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `no_of_years` (IN `UID` VARCHAR(50))   begin
declare year_count int;
declare report varchar(50);
set year_count=(select year(CURRENT_DATE())-year(s.DOJ) from student as s where UID=s.std_id);
update student
set No_Of_Years=year_count 
where UID=std_id;
set report = ("success!!");
end$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `experiences` (`joined_date` DATE) RETURNS VARCHAR(50) CHARSET utf8mb4  BEGIN
DECLARE val int;
DECLARE msg varchar(20);
SET val=DATEDIFF(CURRENT_DATE(),joined_date);
IF val > 1000 THEN
SET msg = "YES";
ELSE
SET msg= "No";
END IF;
RETURN msg;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `backup_faculty`
--

CREATE TABLE `backup_faculty` (
  `emp_id` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Grade_Taught` varchar(20) DEFAULT NULL,
  `DOJ` date DEFAULT NULL,
  `YOE` int(3) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `happy` varchar(200) DEFAULT NULL,
  `about_college` varchar(200) DEFAULT NULL,
  `about_curr` varchar(200) DEFAULT NULL,
  `workload` varchar(20) DEFAULT NULL,
  `remunerisation` varchar(200) DEFAULT NULL,
  `recommend` varchar(200) DEFAULT NULL,
  `preference` varchar(200) DEFAULT NULL,
  `HOD` varchar(20) DEFAULT NULL,
  `suggestions` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backup_faculty`
--

INSERT INTO `backup_faculty` (`emp_id`, `user`, `F_Name`, `L_Name`, `Gender`, `Qualification`, `Grade_Taught`, `DOJ`, `YOE`, `phone`, `email`, `password`, `count`, `happy`, `about_college`, `about_curr`, `workload`, `remunerisation`, `recommend`, `preference`, `HOD`, `suggestions`) VALUES
('D_999', 'APOLO_1', 'Veena', 'Srivani', 'female', 'BSc , Msc in Zoology', 'MSc 2nd YEAR', '2020-01-01', 5, 2147483647, 'sri@gmail.com', 'vee111', 1, 'Happy', 'Good in infrastructure', 'Yes it good', 'Okay', 'Yes', 'Yes', 'CN', 'Good', 'All good'),
('PP_1', 'APOLO_1', 'Pushpa', 'R', 'female', 'MBBS,DNB', 'MBBS 2nd YEAR', '2020-05-31', 10, 997452368, 'pushpa@gmail.com', 'pus12', 1, 'Happy', 'Good college', 'Yes it cool', 'Okay', 'No', 'Yes', 'DNB', 'Rude', 'Need to increase salary'),
('RAA_999', 'APOLO_1', 'Ramya ', 'Krishnan', 'female', 'BDS,MDS', 'BDS 2nd YEAR', '2021-10-01', 2, 2147483647, 'ramya@gmail.com', 'ram12', 1, 'Happy', 'Good way of syllabus setting', 'Yes it good', 'Okay', 'No', 'Yes', 'OS', 'Good', 'Please do increase the salary on yearly basis instead of incrementing it for 2-years');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `emp_id` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Grade_Taught` varchar(20) DEFAULT NULL,
  `DOJ` date DEFAULT NULL,
  `YOE` int(3) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`emp_id`, `user`, `F_Name`, `L_Name`, `Gender`, `Qualification`, `Grade_Taught`, `DOJ`, `YOE`, `phone`, `email`, `password`) VALUES
('D_999', 'APOLO_1', 'Veena', 'Srivani', 'female', 'BSc , Msc in Zoology', 'MSc 2nd YEAR', '2020-01-01', 5, 2147483647, 'sri@gmail.com', 'vee111'),
('RAA_999', 'APOLO_1', 'Ramya ', 'Krishnan', 'female', 'BDS,MDS', 'BDS 2nd YEAR', '2021-10-01', 2, 2147483647, 'ramya@gmail.com', 'ram12'),
('SAH_9', 'APOLO_1', 'Sahana', 'Malhotra', 'female', 'BDS,MDS', 'BDS 2nd YEAR', '2021-09-15', 2, 2147483647, 'sahana@gmail.com', 'sah11');

--
-- Triggers `faculty`
--
DELIMITER $$
CREATE TRIGGER `trigger_faculty` BEFORE DELETE ON `faculty` FOR EACH ROW begin
	call faculty_delete(old.emp_id);
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_exp`
--

CREATE TABLE `faculty_exp` (
  `emp_id` varchar(50) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `DOJ` date DEFAULT NULL,
  `exp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_exp`
--

INSERT INTO `faculty_exp` (`emp_id`, `F_Name`, `L_Name`, `DOJ`, `exp`) VALUES
('D_999', 'Veena', 'Srivani', '2020-01-01', 'YES'),
('RAA_999', 'Ramya ', 'Krishnan', '2021-10-01', 'No'),
('PP_1', 'Pushpa', 'R', '2020-05-31', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `ffeed`
--

CREATE TABLE `ffeed` (
  `emp_id` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  `happy` varchar(200) DEFAULT NULL,
  `about_college` varchar(200) DEFAULT NULL,
  `about_curr` varchar(200) DEFAULT NULL,
  `workload` varchar(20) DEFAULT NULL,
  `remunerisation` varchar(200) NOT NULL,
  `recommend` varchar(200) NOT NULL,
  `preference` varchar(200) DEFAULT NULL,
  `HOD` varchar(20) NOT NULL,
  `suggestions` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ffeed`
--

INSERT INTO `ffeed` (`emp_id`, `user`, `name`, `count`, `happy`, `about_college`, `about_curr`, `workload`, `remunerisation`, `recommend`, `preference`, `HOD`, `suggestions`) VALUES
('D_999', 'APOLO_1', 'Veena Srivani', 1, 'Happy', 'Good in infrastructure', 'Yes it good', 'Okay', 'Yes', 'Yes', 'CN', 'Good', 'All good'),
('RAA_999', 'APOLO_1', 'Ramya Krishnan', 1, 'Happy', 'Good way of syllabus setting', 'Yes it good', 'Okay', 'No', 'Yes', 'OS', 'Good', 'Please do increase the salary on yearly basis instead of incrementing it for 2-years');

-- --------------------------------------------------------

--
-- Table structure for table `org_sign`
--

CREATE TABLE `org_sign` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `repeat_pass` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `timings` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `org_sign`
--

INSERT INTO `org_sign` (`user`, `pass`, `repeat_pass`, `email`, `name`, `timings`) VALUES
('APOLO_1', 'apolo@123', 'apolo@123', 'collegeapolo@rediffmail.com', 'APOLO College Of Medical And Dental Sciences', '0000-00-00 00:00:00'),
('CND_12', 'canada@123', 'canada@!23', 'canadaUni@gmail.com', 'Canada University', '0000-00-00 00:00:00'),
('NAL_001', 'nalanda', 'nalanda', 'nalanda@rediffmail.com', 'Nalanda University', '0000-00-00 00:00:00'),
('PES_005', 'pesu@123', 'pesu@123', 'pesu@gmail.com', 'PES University', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `std_id` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `password` varchar(15) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `stdname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`std_id`, `user`, `F_Name`, `L_Name`, `Qualification`, `Gender`, `phone`, `password`, `age`, `stdname`) VALUES
('STD_001', 'APOLO_1', 'Vinay', 'Sharma', 'Software Engineer At Google', 'male', 2147483647, 'vinny@123', 51, 'Siddarth Sharma'),
('KAM_1', 'APOLO_1', 'Krishna', 'Ram', 'BDS,MDS', 'male', 2147483647, 'krish@123', 50, 'Kamala K'),
('NAV_1', 'APOLO_1', 'Mala', 'BS', 'Teacher', 'female', 998855223, 'mala12', 45, 'Navya BS');

-- --------------------------------------------------------

--
-- Table structure for table `pfeed`
--

CREATE TABLE `pfeed` (
  `name` varchar(20) DEFAULT NULL,
  `std_id` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `happy` varchar(200) DEFAULT NULL,
  `about_college` varchar(200) DEFAULT NULL,
  `about_faculty` varchar(200) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `progress` varchar(200) DEFAULT NULL,
  `suggestions` varchar(200) DEFAULT NULL,
  `counts` int(11) DEFAULT NULL,
  `stdname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pfeed`
--

INSERT INTO `pfeed` (`name`, `std_id`, `user`, `happy`, `about_college`, `about_faculty`, `rate`, `progress`, `suggestions`, `counts`, `stdname`) VALUES
('Vinay Sharma', 'STD_001', 'APOLO_1', 'Sad', 'Good but not best', 'Not that great but okay', '7.00', 'Doing well in all domains', 'Need to increase quality of faculty.', 1, 'Siddarth Sharma'),
('Mala BS', 'NAV_1', 'APOLO_1', 'Happy', 'Good food and study environment', 'Okay', '9.90', 'Doing good in all and need to increase performance in DSA', 'Need good faculty for certain subjects', 2, 'Navya BS');

-- --------------------------------------------------------

--
-- Table structure for table `pubfeed`
--

CREATE TABLE `pubfeed` (
  `name` varchar(20) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `awareness` varchar(200) NOT NULL,
  `about_college` varchar(200) DEFAULT NULL,
  `infrastructure` varchar(200) DEFAULT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `recommend` varchar(200) DEFAULT NULL,
  `like_us` varchar(200) NOT NULL,
  `suggestions` varchar(200) DEFAULT NULL,
  `counts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pubfeed`
--

INSERT INTO `pubfeed` (`name`, `user`, `awareness`, `about_college`, `infrastructure`, `rate`, `recommend`, `like_us`, `suggestions`, `counts`) VALUES
('Ravi Kumar', 'APOLO_1', 'Posts', 'Good environment to teach and learn something.', 'Yes it good', '9.80', 'Yes', 'Transportation facilities', 'All good', 3),
('Karan M', 'APOLO_1', 'Posts', 'Its really excellent. I like the infrastructure and more', 'Yes it good', '9.00', 'Yes', 'Education energy', 'No Comments', 2);

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `user` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `Employment` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`user`, `password`, `F_Name`, `Employment`, `Gender`) VALUES
('APOLO_1', 'ravi@345', 'Ravi Kumar', 'Union Bank Employee at Bangalore', 'male'),
('APOLO_1', 'aa11', 'Karan M', 'Police Officer', 'male'),
('APOLO_1', 'sav11', 'Savitha Kamath', 'Vegetable Vendor', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `sfeed`
--

CREATE TABLE `sfeed` (
  `std_id` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `happy` varchar(200) DEFAULT NULL,
  `about_college` varchar(200) DEFAULT NULL,
  `about_faculty` varchar(200) DEFAULT NULL,
  `best_faculty` varchar(20) NOT NULL,
  `recommend` varchar(200) DEFAULT NULL,
  `preference` varchar(200) DEFAULT NULL,
  `suggestions` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sfeed`
--

INSERT INTO `sfeed` (`std_id`, `user`, `count`, `happy`, `about_college`, `about_faculty`, `best_faculty`, `recommend`, `preference`, `suggestions`) VALUES
('STD_001', 'APOLO_1', 1, 'Happy', 'Good environment to learn something', 'All my faculties are the best', 'Padma Sundar', 'Yes', 'DBMS,CN,OS,DAA,DSA,Complier Design', 'All good'),
('USN_109', 'CND_12', 1, 'Sad', 'Good in infrastructure', 'Not soo good but okay', 'Savitha Kamath', 'No', 'AFLL,CN,OS', 'Nothing is good'),
('KAM_1', 'APOLO_1', 1, 'Sad', 'Good in infrastructure', 'Not soo good but okay', 'Savitha Kamath', 'No', 'DNB', 'no comments'),
('AFT_123', 'PES_005', 1, 'Happy', 'Good environment to learn something', 'Yes it good', 'Savitha Kamath', 'Yes', 'VLSI,PDSP', 'All good'),
('NAV_1', 'APOLO_1', 1, 'Happy', 'Really good', 'All my faculties are the best', 'Prof. Aparna M', 'Yes', 'Human Anatomy', 'All good');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `password` varchar(15) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Grade` varchar(20) DEFAULT NULL,
  `DOJ` date DEFAULT NULL,
  `Batch` varchar(10) DEFAULT NULL,
  `Department` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `No_Of_Years` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `user`, `F_Name`, `L_Name`, `password`, `Gender`, `Grade`, `DOJ`, `Batch`, `Department`, `email`, `No_Of_Years`) VALUES
('AFT_123', 'PES_005', 'Ramitha ', 'Mallabdi', 'dvg2', 'female', 'Engineering 3nd YEAR', '2020-12-21', '2024', 'Electronic and Commu', 'rammi@gmail.com', 2),
('KAM_1', 'APOLO_1', 'Kamala', 'K', 'kam22', 'female', 'MBBS 2nd YEAR', '2021-04-15', '2025', 'MBBS', 'kamala123@gmail.com', 1),
('NAV_1', 'APOLO_1', 'Navya', 'BS', 'navaya', 'female', 'MBBS 2nd YEAR', '2021-08-27', '2025', 'MBBS', 'navya@gmail.com', 1),
('STD_001', 'APOLO_1', 'Siddarth', 'Sharma', 'sid@12', 'male', 'MBBS 2nd YEAR', '2020-10-01', '2025', 'MBBS', 'siddarth12@gmail.com', 2),
('USN_109', 'CND_12', 'Pallavi', 'Reddy', 'pallu@345', 'female', 'B.Com 2nd year', '2021-04-15', '8854712369', 'Computer Science', 'pallavireddy56@yahoo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `ffeed`
--
ALTER TABLE `ffeed`
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `org_sign`
--
ALTER TABLE `org_sign`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD KEY `std_id` (`std_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `pfeed`
--
ALTER TABLE `pfeed`
  ADD KEY `std_id` (`std_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `pubfeed`
--
ALTER TABLE `pubfeed`
  ADD KEY `user` (`user`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD KEY `user` (`user`);

--
-- Indexes for table `sfeed`
--
ALTER TABLE `sfeed`
  ADD KEY `std_id` (`std_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `user` (`user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `ffeed`
--
ALTER TABLE `ffeed`
  ADD CONSTRAINT `ffeed_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `faculty` (`emp_id`),
  ADD CONSTRAINT `ffeed_ibfk_2` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`),
  ADD CONSTRAINT `parent_ibfk_2` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `pfeed`
--
ALTER TABLE `pfeed`
  ADD CONSTRAINT `pfeed_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`),
  ADD CONSTRAINT `pfeed_ibfk_2` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `pubfeed`
--
ALTER TABLE `pubfeed`
  ADD CONSTRAINT `pubfeed_ibfk_1` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `public`
--
ALTER TABLE `public`
  ADD CONSTRAINT `public_ibfk_1` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `sfeed`
--
ALTER TABLE `sfeed`
  ADD CONSTRAINT `sfeed_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`),
  ADD CONSTRAINT `sfeed_ibfk_2` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user`) REFERENCES `org_sign` (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
