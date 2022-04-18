CREATE DATABASE naver;
USE naver;
CREATE TABLE t_naver
    (
    i_user INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id VARCHAR(100),
    user_password VARCHAR(20) NOT NULL,
    user_name CHAR(10),
    bir_yy CHAR(10) ,
    bir_mm CHAR(10) ,
    bir_dd CHAR(10) ,
    gender VARCHAR(10) ,
    user_email VARCHAR(50) ,
    phoneno CHAR(12) 
    );
