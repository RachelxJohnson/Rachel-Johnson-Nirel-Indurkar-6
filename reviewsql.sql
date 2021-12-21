show databases;
create database rev;
use rev;
describe rev;
create table rev2(
id int auto_increment primary key,
revstr varchar(100),
revnum int);
insert into rev2(
revstr, revnum)values(
"Sorry to hear that, maybe the next recipe will be better", 1),(
'Aw, sorry!', 2),(
'Hopefully next time will be better', 3),(
'Nice!', 4),(
'Glad to hear that!', 5);
select avg(revnum) from rev where revnum > 12;

select * from rev2 ;
describe rev2;
insert into rev2(revstr,revnum)values('this is a test',99);