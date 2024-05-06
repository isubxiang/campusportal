
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users`(
	`userid` int(11) NOT NULL AUTO_INCREMENT,
	`uemail` varchar(32)  CHARACTER SET utf8 NOT NULL,
	`upassword` varchar(32)  CHARACTER SET utf8 NOT NULL,
	`uname` varchar(32)  CHARACTER SET utf8 NOT NULL,
	`uphone` varchar(32)  CHARACTER SET utf8 NOT NULL,
	`uweixin` varchar(32)  CHARACTER SET utf8 DEFAULT NULL,
	`uaddress` varchar(32)  CHARACTER SET utf8 DEFAULT NULL,
    PRIMARY KEY(`userid`)

)
ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT  CHARSET=utf8 COLLATE=utf8_bin;

--
-- 
--
INSERT INTO `users`(`userid`,`uemail`,`upassword`,`uname`,`uphone`,`uweixin`,`uaddress`)
VALUES(1,'sdsdsds@qq.com','123456','zy','4758885338','zhouyouzy','广西大学'),
(2,'iwjhw@qq.com','123456','带我去','32321123123',NULL,NULL);