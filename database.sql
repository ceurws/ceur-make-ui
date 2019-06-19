	
/* Config */	
CREATE TABLE `tblConfig` (
	`config_name`			varchar(75) NOT NULL,
	`config_value`			varchar(255) NOT NULL DEFAULT '',	
	PRIMARY KEY (`config_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;	

INSERT INTO `tblConfig`( `config_name`, `config_value` ) VALUES ( 'admin_username', 'admin' ), ( 'admin_password', SHA1('12345678') );


/* Students */	
CREATE TABLE `tblStudents` (
	`student_id`				int UNSIGNED NOT NULL AUTO_INCREMENT,
	`full_name`					varchar(30) NOT NULL DEFAULT '',
	`dob`						DATE NOT NULL DEFAULT '0000-00-00',	
	`address`					text(500) NOT NULL DEFAULT '',	
	`father_name`				varchar(50) NOT NULL DEFAULT '',
	`father_mobile`				varchar(15) NOT NULL DEFAULT '',
	`father_occupation`			varchar(75) NOT NULL DEFAULT '',
	`mother_name`				varchar(50) NOT NULL DEFAULT '',	
	`mother_mobile`				varchar(15) NOT NULL DEFAULT '',	
	`mother_occupation`			varchar(75) NOT NULL DEFAULT '',
	`email`						varchar(75) NOT NULL DEFAULT '',
	`marital_status`			tinyint(1) NOT NULL DEFAULT '0',	/* 0 = unmarried, 1 = married */	
	`prev_dance_experience`		varchar(255) NOT NULL DEFAULT '',
	`medical_condition`			varchar(255) NOT NULL DEFAULT '',
	`profile_photo`				varchar(255) NOT NULL DEFAULT '',
	`doj`						DATE NOT NULL DEFAULT '0000-00-00',
	PRIMARY KEY (`student_id`),
	KEY (`father_mobile`),
	KEY (`mother_mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;	
	
	
/* Courses */	
CREATE TABLE `tblCourses` (
	`course_id`					mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
	`course_name`				varchar(50) NOT NULL DEFAULT '',
	`course_fees`				mediumint UNSIGNED NOT NULL DEFAULT '0',	
	PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;		

/* Student <--> Course */
CREATE TABLE `tblStudentCourseRel` (
	`enrollment_id`			int UNSIGNED NOT NULL AUTO_INCREMENT,
	`student_id`			int UNSIGNED NOT NULL DEFAULT '0',	
	`course_id`				mediumint UNSIGNED NOT NULL DEFAULT '0',	
	`enroll_date`			DATE NOT NULL DEFAULT '0000-00-00',
	`is_active`				tinyint(1) NOT NULL DEFAULT '1',
	`fees`					mediumint UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (`enrollment_id`),
	KEY (`student_id`, `course_id`, `enroll_date`),
	FOREIGN KEY (`student_id`) REFERENCES `tblStudents`(`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`course_id`) REFERENCES `tblCourses`(`course_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;	

/* Income */	
CREATE TABLE `tblIncome` (
	`rec_id`				bigint UNSIGNED NOT NULL AUTO_INCREMENT,
	`income_name`			varchar(150) NOT NULL DEFAULT '',	
	`income_type`			ENUM('course_fees', 'competition_fees', 'arangettam_fees', 'others') NOT NULL DEFAULT 'course_fees',
	`student_id`			int UNSIGNED NOT NULL DEFAULT '0',
	`course_id`				mediumint UNSIGNED NOT NULL DEFAULT '0',
	`amount`				mediumint UNSIGNED NOT NULL DEFAULT '0',
	`payment_date`			DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`rec_id`),
	KEY(`student_id`),
	KEY(`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;		
	
	
/* Expense */	
CREATE TABLE `tblExpense` (
	`rec_id`				bigint UNSIGNED NOT NULL AUTO_INCREMENT,
	`expense_name`			varchar(150) NOT NULL DEFAULT '',	
	`amount`				mediumint UNSIGNED NOT NULL DEFAULT '0',
	`payment_date`			DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`rec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;				
	