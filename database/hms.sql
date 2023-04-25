
-- php code 

-- Admin panel

-- Admin table creation

-- Database Name : hms

CREATE TABLE admin_panel(
    Id_no INT(8) NOT NULL,
    Username VARCHAR(50) NOT NULL ,
    Designation VARCHAR(20),
    Password VARCHAR(30) NOT NULL,
    PRIMARY KEY (Id_no)
)ENGINE = InnoDB;




-- Admin Value Submit
INSERT INTO admin_panel (Id_no, Username, Designation, Password) 
VALUES 
('20301348', 'Arnab Biswas', 'Author', '20301348'), 
('19101467', 'Tarikur Rahman Likhon', 'Author', '19101467'),
('20101090', 'Rupanti Alam', 'Author', '20101090');



-- Patient Table

CREATE TABLE patient_info(
	ssn_number int(11) NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	gender varchar(10) NOT NULL,
	phone_number varchar(20) NOT NULL,
	address varchar(100) NOT NULL,
	email varchar (80) NOT NULL,
	birthday date,
	blood_group varchar (10) NOT NULL,
	password varchar(60) NOT NULL,
	PRIMARY KEY (ssn_number)
)ENGINE = InnoDB;



-- patient table insert data for dummy work

INSERT INTO patient_info VALUES(2030134801,'Arnab Biswas','Male','01591132884','Gp Ja -149, Mohakhali, Dhaka','arnab.biswas58@gmail.com','2000-07-17','AB+','arnab');

INSERT INTO patient_info (username,gender,phone_number,address,email,birthday,blood_group,password)
VALUES
('Shafikul Islam','Male','01752569875','14\45 uttorpara, Mirpur', 'shafikul4152@gmail.com','1999-12-25','AB+','shafikul2020'),
('Nurjahan Begum','Female','01789525465','Uttar Patuapara, Comilla','nurjahan1452@gmail.com','1998-08-22','A+','nurjahan2020'),
('Sabrina Garcia','Female','11910515020', 'Perrysburg, New York(NY), 14129', 'manuela.lakin@gmail.com', '1993-04-22','B+','sabrina2020'),
('Lauren Martin','Female','(903) 874-6012)', '3550 Us 1 Hwy, Mims, Florida(FL), 32754','francisco53@yahoo.com', '1990-08-25','O+','lauren2020'),
(' Genevieve Tyler ','Female',    '(681) 404-6331)', '3217 Parkwood, Dr. Stevens Point, Wisconsin(WI), 54481', 'tyler21@gmail.com',  '1990-08-25', 'A+','tyler202'),
(' Isabel Garcia', 'Female',   '(408) 247-1277)', '910 23rd St Gothenburg, Nebraska(NE), 69138','isabel213@gmail.com',  '1983-09-25', 'B+','isabel202'),
('Axel Waters','Male','(617) 524-2904)', '5335 Elk River Rd Elkview, West Virginia(WV)', 'Axel333@gmail.com',  '1993-03-25', 'O+','axel202'),
('Kayla Stewart', 'Female', '(540) 788-455', '331 Erickson Rd Rochelle, Illinois(IL), 610',  'Kayla21@gmail.com',  '1992-07-15', 'A-','Kaylar202'),
('Samuel Berry', 'Male', '(319) 524-4089)',' 7901 N Saddle Ridge Ct Catlett, Virginia(VA), 20119', 'Samuel93@gmail.com',  '1989-09-05', 'O+','samuel202'),
('  Jocelyn Rogers' , 'Female', '(707) 652-2124)', '335 S Linn Ave New Hampton, Iowa(IA), 50659', 'Jecelyn101@gmail.com',  '1990-04-15', 'A-','jocelyn202'),
(' Hayden Ward', 'Male',  '(859) 291-6549)', '7893 Princeton Rd Middletown, Ohio(OH), 45044', 'hayden93@gmail.com',  '1999-03-03', 'B+','Hayden202'),
('Morgan Robinson', 'Female',   '(870) 972-8101)', '2839-B Lamotte St Marlette, Michigan(MI), 48453 ', 'Morgan9301@gmail.com',  '1980-09-15', 'O-','morgan202'),
('Elle Castillo', 'Female', '(920) 892-7016)', '1806 S Picher Ave Joplin, Missouri(MO), 64804',  'Castillo701@gmail.com', '1993-08-22','A-','Castilo202'),
(' Knox Patel',  'Male', '(620) 855-7749)', '0352 Royal Woods Ct Montgomery Village, Maryland(MD), 20886', 'patel701@gmail.com',  '1997-01-12','A+','Patel202'),
('Brantley Morris',  'Male ', '(716) 532-5154', '18 2nd St, Perrysburg, New York(NY), 14129)',  'morris8201@gmail.com',  '1996-09-26','B+','morris202');

-- Doctor Login 
CREATE TABLE doctor (
    id_no INT NOT NULL AUTO_INCREMENT , 
    name VARCHAR(50) NOT NULL , 
    specialty VARCHAR(30) NOT NULL , 
    age INT NOT NULL , 
    phone_no VARCHAR(11) NOT NULL , 
    room_no INT(10) NOT NULL , 
    password VARCHAR(20) NOT NULL, 
    PRIMARY KEY(id_no) 
)ENGINE = InnoDB;


INSERT INTO doctor(`name`, `specialty`, `age`, `phone_no`, `room_no`, `password`) 
VALUES
('Dr. Shifat Ullah', 'Psychiatrist', 42, '01789-789858', '1005', 'shifat'), 
('Mahfuz Billh', 'Psychologist', 58, '01789-583625', '2004', 'mahfuz'),
('Dr. Abdur Rahim', 'Psychiatrist', 58, '01748732100', '1008', 'rahim'),
('Dr. Rafi Ahmed', 'Psychologist',62, '01300589152', '2009', 'rafi'),
('Abdul Momen', 'Counselor', 51, '01838031231', '2022', 'momen'),
('Dr. Shafiq Miah', 'Medicine', 48, '01894143774', '2003', 'shafiq'),
('Abdul Kader', 'Counselor', 46, '01537345885', '2001', 'kader'),
('Rashed Kabir', 'Psychiatrist', 47, '01823572113','2006', 'rashed'),
('Dr. Abed kibria', 'Psychologist', 59, '01836703441', '2007',  'abed'),
('Rownak Rahman', 'Psychiatrist', 61, '01784263444', '2005', 'rownak');





-- appointment table

CREATE TABLE appointment(
	serial INT NOT NULL AUTO_INCREMENT, 
	id_no INT(11) NOT NULL, 
	time varchar(20) NOT NULL,
	date date,
	status VARCHAR(20) NULL,
	ssn_number INT NULL,
	PRIMARY KEY (serial)
)ENGINE = InnoDB;


--