<<<<<<< HEAD
create table class(sec char(1),sem char(1),constraint sec_pk primary key(sec),constraint sem_pk primary key(sem));

create table teacher(ssn char(10),name varchar(20),constraint ssn_pk primary key(ssn));

create table student(usn char(10),name varchar(20),sec char(1),sem char(1),ssn char(10),constraint usn_pk primary key(usn),constraint ssn_fk foreign key(ssn) references teacher(ssn) on delete cascade,constraint sec_fk foreign key(sec) references class(sec) on delete cascade,constraint sem_fk foreign key(sem) references class(sem) on delete cascade);

create table student_marks(usn char(10),marks number,constraint usn1_pk primary key(usn),constraint usn_fk foreign key(usn) references student(usn) on delete cascade);

create table student_attendance(usn char(10),attendance number,constraint usn2_pk primary key(usn),constraint usn1_fk foreign key(usn) references student(usn) on delete cascade);

create table course(cin varchar(7),name varchar(20),constraint cin_pk primary key(cin));

create table teacher_offer(ssn char(10),cin varchar(7),constraint offer_pk primary key(ssn,cin),constraint ssn1_fk foreign key(ssn) references teacher(ssn) on delete cascade,constraint cin_fk foreign key(cin) references course(cin) on delete cascade);

create table enroll(cin varchar(7),usn char(10),sec char(1),sem char(1),constraint enroll_pk primary key(cin,usn,sec,sem),constraint cin1_fk foreign key(cin) references course(cin) on delete cascade,constraint usn2_fk foreign key(usn) references student(usn) on delete cascade,constraint sec_fk foreign key(sec) references class(sec) on delete cascade,constraint sem1_fk foreign key(sem) references class(sem) on delete cascade);
=======
CREATE TABLE class(
    sem VARCHAR(5),
    sec VARCHAR(5),
    CONSTRAINT pk_01 PRIMARY KEY(sem, sec)
); CREATE TABLE teacher(
    ssn VARCHAR(5),
    NAME VARCHAR(20),
    CONSTRAINT pk_02 PRIMARY KEY(ssn)
); CREATE TABLE course(
    cin VARCHAR(10),
    NAME VARCHAR(20),
    credits INTEGER,
    sem VARCHAR(5),
    CONSTRAINT pk_03 PRIMARY KEY(cin),
    CONSTRAINT fk_01 FOREIGN KEY(sem) REFERENCES class(sem) ON DELETE CASCADE
); CREATE TABLE student(
    usn VARCHAR(10),
    NAME VARCHAR(20),
    phno varchar(15),
    email varchar(30),
    sem VARCHAR(5),
    sec VARCHAR(5),
    ssn VARCHAR(5),
    CONSTRAINT pk_04 PRIMARY KEY(usn),
    CONSTRAINT fk_02 FOREIGN KEY(sem, sec) REFERENCES class(sem, sec),
    CONSTRAINT fk_03 FOREIGN KEY(ssn) REFERENCES teacher(ssn)
); CREATE TABLE attandance(
    attandance FLOAT,
    cin VARCHAR(10),
    usn VARCHAR(10),
    CONSTRAINT fk_04 FOREIGN KEY(cin) REFERENCES course(cin),
    CONSTRAINT fk_05 FOREIGN KEY(usn) REFERENCES student(usn),
    CONSTRAINT pk_05 PRIMARY KEY(cin, usn)
); CREATE TABLE marks(
    test1 FLOAT default 0,
    test2 FLOAT default 0,
    test3 FLOAT default 0,
    finalia FLOAT default 0,
    cin VARCHAR(10),
    usn VARCHAR(10),
    CONSTRAINT fk_06 FOREIGN KEY(cin) REFERENCES course(cin),
    CONSTRAINT fk_07 FOREIGN KEY(usn) REFERENCES student(usn),
    CONSTRAINT pk_06 PRIMARY KEY(cin, usn)
); CREATE TABLE teaches(
    ssn VARCHAR(5),
    cin VARCHAR(10),
    CONSTRAINT fk_08 FOREIGN KEY(ssn) REFERENCES teacher(ssn),
    CONSTRAINT fk_09 FOREIGN KEY(cin) REFERENCES course(cin),
    CONSTRAINT pk_07 PRIMARY KEY(ssn, cin)
); CREATE TABLE `mentor` (
 `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `usn` varchar(10) NOT NULL,
 `comments` varchar(100) NOT NULL,
 constraint pk_08 PRIMARY KEY (`usn`,`comments`),
 constraint fk_10 foreign key(usn) REFERENCES student(usn)
); CREATE TABLE `event_list` (
 `Event_id` int(11) NOT NULL AUTO_INCREMENT,
 `Event_name` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`Event_id`)
);
CREATE TABLE participates(
    event_id int(11),
    usn VARCHAR(10),
    CONSTRAINT pk_09 PRIMARY KEY(event_id, usn),
    CONSTRAINT fk_11 FOREIGN KEY(usn) REFERENCES student(usn),
    CONSTRAINT fk_12 FOREIGN KEY(event_id) REFERENCES event_list(event_id)
);
>>>>>>> 46f1994b1ee8067decb9106bff4bf303b0546810
