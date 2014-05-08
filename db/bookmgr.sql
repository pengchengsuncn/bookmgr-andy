图书和朋友管理系统：
SHOW DATABASES;
SHOW TABLES;
CREATE DATABASE books;
USE books;
DROP DATABASE books;
创建图书表：
CREATE TABLE tushubiao(
     ID INT NOT NULL AUTO_INCREMENT,
     tushuming VARCHAR(50),
     zuozhe VARCHAR(20),
     chubanshe  VARCHAR(50),
     chubanriqi  DATE,
     tushuleixing  VARCHAR(20),
     biaoqian VARCHAR(50),
     jiage FLOAT(3,2),
     shifoushangjia  VARCHAR(1),
     tushujianjie  VARCHAR(100),
     PRIMARY KEY(ID)
);
DESC tushubiao;
DROP TABLE tushubiao;
SELECT * FROM tushubiao;条件where
DELETE FROM tushubiao; 条件where
UPDATE tushubiao SET 字段=新值 条件where
图书借阅表：
CREATE TABLE tushujieyuebiao(
     ID INT NOT NULL AUTO_INCREMENT,
     jieyueren VARCHAR(10),
     jieyueriqi DATE,
     tushuming VARCHAR(10),
     PRIMARY KEY(ID)
);
DESC tushujieyuebiao;
DROP TABLE tushujieyuebiao;
SELECT * FROM tushujieyuebiao;条件where
DELETE FROM tushujieyuebiao; 条件where
UPDATE tushujieyuebiao SET 字段=新值 条件where
创建朋友表：
CREATE TABLE friends(
     ID INT NOT NULL AUTO_INCREMENT,
     xingming VARCHAR(50),
     sex VARCHAR(20),
     dianhua  VARCHAR(50),
     QQ VARCHAR(50),
     address  VARCHAR(20),
     email VARCHAR(50),
     birthday DATE,    
     aihao  VARCHAR(100),
     PRIMARY KEY(ID)
);
DESC friends;
DROP TABLE friends;
SELECT * FROM friends;条件where
DELETE FROM friends; 条件where
UPDATE friends SET 字段=新值 条件where

创建图书类型表；
CREATE TABLE tushuleixingbiao(
     ID INT NOT NULL AUTO_INCREMENT,
     leixing VARCHAR(100),
     PRIMARY KEY(ID)
);
DESC tushuleixingbiao;
DROP TABLE tushuleixingbiao;
SELECT * FROM tushuleixingbiao;条件where
DELETE FROM tushuleixingbiao; 条件where
UPDATE tushuleixingbiao SET 字段=新值 条件where