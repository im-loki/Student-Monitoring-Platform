##attendance_all

select s.name,s.usn,s.sem,s.sec,sa.attendance
from student s, student_attendance sa
where s.usn=sa.usn and s.sem='5';

##marks

select s.name,s.usn,s.sem,s.sec,sm.test1,sm.test2,sm.test3,sm.finalia
from student s,student_marks sm
where s.usn=sm.usn and s.sem='5';

##class_average

select s.sem,s.sec,avg(test1) as test1,avg(test2) as test2,avg(test3) as test3,avg(finalia) as finalia
from student s, student_marks sm
where s.usn=sm.usn
group by s.sem,s.sec
order by s.sem,s.sec;

##mentor reports

insert into mentor(usn,comment) values('$usn','$comment');
