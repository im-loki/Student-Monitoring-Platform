CREATE [OR REPLACE ] TRIGGER trigger_name  
{BEFORE | AFTER | INSTEAD OF }  
{INSERT [OR] | UPDATE [OR] | DELETE}  
[OF col_name]  
ON table_name  
[REFERENCING OLD AS o NEW AS n]  
[FOR EACH ROW]  
WHEN (condition)   
DECLARE 
   Declaration-statements 
BEGIN  
   Executable-statements 
EXCEPTION 
   Exception-handling-statements 
END; 

CREATE OR REPLACE TRIGGER display_salary_changes 
BEFORE UPDATE ON marks 
FOR EACH ROW 
WHEN ((NEW.test1 > 0 and NEW.test2>0) or (NEW.test2 >0 and NEW.test3>0)
	or (NEW.test3>0 and NEW.test1>0))

DECLARE 
   avg number; 
BEGIN 
   sal_diff := :NEW.test1  + :NEW.test2; 
   dbms_output.put_line('Old salary: ' || :OLD.salary); 
   dbms_output.put_line('New salary: ' || :NEW.salary); 
   dbms_output.put_line('Salary difference: ' || sal_diff); 
END;

CREATE trigger final_ia
after UPDATE on marks
for each ROW
UPDATE marks 
set finalia=((:NEW.test1+:NEW.test2+:NEW.test3)-least(:NEW.test1,:NEW.test2,
	:NEW.test3))/2;
where usn=:old.usn and cin=:old.cin;