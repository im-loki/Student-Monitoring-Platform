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