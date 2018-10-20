CREATE TABLE class(
    sem VARCHAR(5),
    sec VARCHAR(5),
    CONSTRAINT pk_01 PRIMARY KEY(sem, sec)
); CREATE TABLE teacher(
    ssn VARCHAR(5),
    NAME VARCHAR(20),
    CONSTRAINT pk_02 PRIMARY KEY(ssn)
); CREATE TABLE course(
    cin VARCHAR(5),
    NAME VARCHAR(20),
    credits INTEGER,
    sem VARCHAR(5),
    CONSTRAINT pk_03 PRIMARY KEY(cin),
    CONSTRAINT fk_01 FOREIGN KEY(sem) REFERENCES class(sem) ON DELETE CASCADE
); CREATE TABLE student(
    usn VARCHAR(10),
    NAME VARCHAR(20),
    sem VARCHAR(5),
    sec VARCHAR(5),
    ssn VARCHAR(5),
    CONSTRAINT pk_04 PRIMARY KEY(usn),
    CONSTRAINT fk_02 FOREIGN KEY(sem, sec) REFERENCES class(sem, sec),
    CONSTRAINT fk_03 FOREIGN KEY(ssn) REFERENCES teacher(ssn)
); CREATE TABLE attandance(
    attandance FLOAT,
    cin VARCHAR(5),
    usn VARCHAR(10),
    CONSTRAINT fk_04 FOREIGN KEY(cin) REFERENCES course(cin),
    CONSTRAINT fk_05 FOREIGN KEY(usn) REFERENCES student(usn),
    CONSTRAINT pk_05 PRIMARY KEY(cin, usn)
); CREATE TABLE marks(
    test1 FLOAT,
    test2 FLOAT,
    test3 FLOAT,
    finalia FLOAT,
    cin VARCHAR(5),
    usn VARCHAR(5),
    CONSTRAINT fk_06 FOREIGN KEY(cin) REFERENCES course(cin),
    CONSTRAINT fk_07 FOREIGN KEY(usn) REFERENCES student(usn),
    CONSTRAINT pk_06 PRIMARY KEY(cin, usn)
); CREATE TABLE teaches(
    ssn VARCHAR(5),
    cin VARCHAR(5),
    CONSTRAINT fk_08 FOREIGN KEY(ssn) REFERENCES teacher(ssn),
    CONSTRAINT fk_09 FOREIGN KEY(cin) REFERENCES course(cin),
    CONSTRAINT pk_07 PRIMARY KEY(ssn, cin)
); CREATE TABLE m_reports(
    usn VARCHAR(10),
    comments VARCHAR(100),
    CONSTRAINT fk_10 FOREIGN KEY(usn) REFERENCES student(usn)
);