/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Lynone
 * Created: 2016-5-21
 */
CREATE DATABASE db_meetingManagement;

USE db_meetingManagement;

CREATE TABLE tb_user(
userID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
userPassword VARCHAR(30) NOT NULL,
isAdmin BOOLEAN DEFAULT FALSE,
isFrozen BOOLEAN DEFAULT FALSE,
apartmentName VARCHAR(30) NOT NULL
);
INSERT INTO tb_user(userPassword, isAdmin, apartmentName) VALUES('root', true, 'A');

CREATE TABLE tb_apartment(
apartmentID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
apartmentName VARCHAR(30) NOT NULL
);
INSERT INTO tb_apartment(apartmentName) VALUES('A');

CREATE TABLE tb_meeting(
meetingID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
meetingName VARCHAR(100) NOT NULL,
apartmentName VARCHAR(30) NOT NULL,
meetingPlace VARCHAR(50) NOT NULL,
meetingDate DATE NOT NULL,
hostName VARCHAR(30) NOT NULL,
meetingAbstract VARCHAR(150) NOT NULL
);