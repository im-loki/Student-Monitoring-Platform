CREATE TABLE `class`(
    `sec` CHAR(1) NOT NULL,
    `sem` CHAR(1) NOT NULL,
    PRIMARY KEY(`sem`, `sec`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `course`(
    `cin` VARCHAR(7) NOT NULL,
    `NAME` VARCHAR(20) DEFAULT NULL,
    PRIMARY KEY(`cin`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `enroll`(
    `cin` VARCHAR(7) NOT NULL,
    `usn` CHAR(10) NOT NULL,
    `sec` CHAR(1) NOT NULL,
    `sem` CHAR(1) NOT NULL,
    PRIMARY KEY(`cin`, `usn`, `sec`, `sem`),
    KEY `usn2_fk`(`usn`),
    KEY `sec01_fk`(`sem`, `sec`),
    CONSTRAINT `cin1_fk` FOREIGN KEY(`cin`) REFERENCES `course`(`cin`) ON DELETE CASCADE,
    CONSTRAINT `sec01_fk` FOREIGN KEY(`sem`, `sec`) REFERENCES `class`(`sem`, `sec`) ON DELETE CASCADE,
    CONSTRAINT `usn2_fk` FOREIGN KEY(`usn`) REFERENCES `student`(`usn`) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `student`(
    `usn` CHAR(10) NOT NULL,
    `NAME` VARCHAR(20) DEFAULT NULL,
    `sec` CHAR(1) DEFAULT NULL,
    `sem` CHAR(1) DEFAULT NULL,
    `ssn` CHAR(10) DEFAULT NULL,
    PRIMARY KEY(`usn`),
    KEY `ssn_fk`(`ssn`),
    KEY `sec_fk`(`sem`, `sec`),
    CONSTRAINT `sec_fk` FOREIGN KEY(`sem`, `sec`) REFERENCES `class`(`sem`, `sec`) ON DELETE CASCADE,
    CONSTRAINT `ssn_fk` FOREIGN KEY(`ssn`) REFERENCES `teacher`(`ssn`) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `student_attendance`(
    `usn` CHAR(10) NOT NULL,
    `attendance` FLOAT DEFAULT NULL,
    PRIMARY KEY(`usn`),
    CONSTRAINT `usn1_fk` FOREIGN KEY(`usn`) REFERENCES `student`(`usn`) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `student_marks`(
    `usn` CHAR(10) NOT NULL,
    `test1` FLOAT DEFAULT NULL,
    `test2` FLOAT DEFAULT NULL,
    `test3` FLOAT DEFAULT NULL,
    `finalia` FLOAT DEFAULT NULL,
    PRIMARY KEY(`usn`),
    CONSTRAINT `usn_fk` FOREIGN KEY(`usn`) REFERENCES `student`(`usn`) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `teacher`(
    `ssn` CHAR(10) NOT NULL,
    `NAME` VARCHAR(20) DEFAULT NULL,
    PRIMARY KEY(`ssn`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8; CREATE TABLE `teacher_offer`(
    `ssn` CHAR(10) NOT NULL,
    `cin` VARCHAR(7) NOT NULL,
    PRIMARY KEY(`ssn`, `cin`),
    KEY `cin_fk`(`cin`),
    CONSTRAINT `cin_fk` FOREIGN KEY(`cin`) REFERENCES `course`(`cin`) ON DELETE CASCADE,
    CONSTRAINT `ssn1_fk` FOREIGN KEY(`ssn`) REFERENCES `teacher`(`ssn`) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8;