create database criminal4;use criminal4;create table siteuser(username varchar(30) primary key,pwd varchar(50),dob date,serviceexperience varchar(30),servicedescription varchar(100),gender varchar(6),hintq varchar(255),hinta varchar(255),emailadd varchar(50),smsno varchar(15),role varchar(20));insert into siteuser values('admin','admin','1989-12-4','4 Year','Administrator','male','name','admin','admin@gmail.com','8602768216','admin');insert into siteuser values('pankaj','pankaj','1990-12-5','3 Year','Superintendent','male','name','pankaj','pankaj@gmail.com','9229465037','Jail_ SuperIntendent');insert into siteuser values('police','police','1990-12-5','2 Year','Superintendent','male','name','piyush','piyush@gmail.com','9229465037','Police_ Officers');insert into siteuser values('cbi','cbi','1990-12-5','2 Year','cbi','male','name','cbi','cbiofficer@gmail.com','9229465037','CBI_Officer');insert into siteuser values('officer','officer','1990-12-5','2 Year','Superintendent','male','name','officer','officer@gmail.com','9229465037','public');create table newcriminal(criminalid int(5) primary key AUTO_INCREMENT,criminalname varchar(30),cimage longtext,crimetype varchar(30),crimedesc varchar(30),crimedate varchar(30),crimetime varchar(30),nationality varchar(30),address varchar(30),sex varchar(30),contact varchar(30),age varchar(30),bloodgroup varchar(30),retinascan longtext,dnainformation varchar(30));create table crimecategory(crimecategoryid int(5) primary key AUTO_INCREMENT,crimecategoryname varchar(30),description varchar(200) );create table criminaltransfer(transferid int(5) primary key AUTO_INCREMENT,criminalid int(5),criminalname varchar(30),transferfrom varchar(30),transferto varchar(30),transferdate varchar(30));create table work(workid int(5) primary key AUTO_INCREMENT,criminalid int(5),criminalname varchar(30),workassign varchar(30),workstartdate varchar(30),salary varchar(30));create table meeting(meetingid int(5) primary key AUTO_INCREMENT,criminalid int(5),outsiderid int(5),outsidername varchar(30),meetingpurpose varchar(30),meetingtime varchar(30),meetingdate varchar(30));