CREATE DATABASE IF NOT EXISTS sms;
USE sms;

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `IdAdministrator` int(10) NOT NULL auto_increment,
  `Email` varchar(50) NOT NULL,  
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(70) NOT NULL,
  `LastName` varchar(70) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(9) NOT NULL,
  PRIMARY KEY (`IdAdministrator`),
 UNIQUE KEY `Unique_Email` (`Email`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `administrator` (`IdAdministrator`, `Email`, `Password`, `FirstName`, `LastName`, `Address`, `Phone`) VALUES
(1, 'admin@gmail.com', '123456', 'admin', 'admin', 'address admin', '262625262');

-- Verified , 1= creado , 2= utilizado
DROP TABLE IF EXISTS `confirmation`;
CREATE TABLE `confirmation` (
  `IdConfirmation` int(10) NOT NULL auto_increment,  
  `CreateDateTime` datetime DEFAULT '0000-00-00 00:00:00',
  `FromSms` varchar(50),  
  `BodySms` text,
  `CodeSms` varchar(50),  
  `PhoneSms` varchar(50),
  `EmailCreated` varchar(50),
  `PasswordCreated` varchar(50),
  `IpCreated` varchar(50),    
  `Verified` int(50) NOT NULL,
  `DomainCreated` varchar(50),
  PRIMARY KEY (`IdConfirmation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
