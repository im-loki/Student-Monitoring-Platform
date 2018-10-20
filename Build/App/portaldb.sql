create table class(sec char(1),sem char(1),constraint sec_pk primary key(sec),constraint sem_pk primary key(sem));

create table teacher(ssn char(10),name varchar(20),constraint ssn_pk primary key(ssn));

create table student(usn char(10),name varchar(20),sec char(1),sem char(1),ssn char(10),constraint usn_pk primary key(usn),constraint ssn_fk foreign key(ssn) references teacher(ssn) on delete cascade,constraint sec_fk foreign key(sec) references class(sec) on delete cascade,constraint sem_fk foreign key(sem) references class(sem) on delete cascade);

create table student_marks(usn char(10),marks number,constraint usn1_pk primary key(usn),constraint usn_fk foreign key(usn) references student(usn) on delete cascade);

create table student_attendance(usn char(10),attendance number,constraint usn2_pk primary key(usn),constraint usn1_fk foreign key(usn) references student(usn) on delete cascade);

create table course(cin varchar(7),name varchar(20),constraint cin_pk primary key(cin));

create table teacher_offer(ssn char(10),cin varchar(7),constraint offer_pk primary key(ssn,cin),constraint ssn1_fk foreign key(ssn) references teacher(ssn) on delete cascade,constraint cin_fk foreign key(cin) references course(cin) on delete cascade);

create table enroll(cin varchar(7),usn char(10),sec char(1),sem char(1),constraint enroll_pk primary key(cin,usn,sec,sem),constraint cin1_fk foreign key(cin) references course(cin) on delete cascade,constraint usn2_fk foreign key(usn) references student(usn) on delete cascade,constraint sec_fk foreign key(sec) references class(sec) on delete cascade,constraint sem1_fk foreign key(sem) references class(sem) on delete cascade);
