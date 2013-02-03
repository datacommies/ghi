DROP TABLE IF EXISTS Customers;
CREATE TABLE Customers 
(
`id` varchar(10) NOT NULL,
`name` varchar(20) NOT NULL,
`status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO Customers 
    VALUES ('0001', 'Mike Smith', 'A');
INSERT INTO Customers 
    VALUES ('0002', 'Jason Jones', 'A');
INSERT INTO Customers 
    VALUES ('0003', 'Drew Barrymore', 'A');
INSERT INTO Customers 
    VALUES ('0004', 'Amanda Hugandkiss', 'A');
INSERT INTO Customers 
    VALUES ('0006', 'Latanya Jackson', 'A');
INSERT INTO Customers 
    VALUES ('0007', 'Oliver Stone', 'A');
INSERT INTO Customers 
    VALUES ('0008', 'Ban Cuba', 'A');
INSERT INTO Customers 
    VALUES ('0009', 'Miles Dickson', 'D');
INSERT INTO Customers 
    VALUES ('0010', 'Holly Miles', 'D');



