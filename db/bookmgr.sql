ͼ������ѹ���ϵͳ��
SHOW DATABASES;
SHOW TABLES;
CREATE DATABASE books;
USE books;
DROP DATABASE books;
����ͼ���
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
SELECT * FROM tushubiao;����where
DELETE FROM tushubiao; ����where
UPDATE tushubiao SET �ֶ�=��ֵ ����where
ͼ����ı�
CREATE TABLE tushujieyuebiao(
     ID INT NOT NULL AUTO_INCREMENT,
     jieyueren VARCHAR(10),
     jieyueriqi DATE,
     tushuming VARCHAR(10),
     PRIMARY KEY(ID)
);
DESC tushujieyuebiao;
DROP TABLE tushujieyuebiao;
SELECT * FROM tushujieyuebiao;����where
DELETE FROM tushujieyuebiao; ����where
UPDATE tushujieyuebiao SET �ֶ�=��ֵ ����where
�������ѱ�
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
SELECT * FROM friends;����where
DELETE FROM friends; ����where
UPDATE friends SET �ֶ�=��ֵ ����where

����ͼ�����ͱ�
CREATE TABLE tushuleixingbiao(
     ID INT NOT NULL AUTO_INCREMENT,
     leixing VARCHAR(100),
     PRIMARY KEY(ID)
);
DESC tushuleixingbiao;
DROP TABLE tushuleixingbiao;
SELECT * FROM tushuleixingbiao;����where
DELETE FROM tushuleixingbiao; ����where
UPDATE tushuleixingbiao SET �ֶ�=��ֵ ����where