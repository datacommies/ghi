DROP TABLE IF EXISTS Invoices;
CREATE TABLE Invoices 
(
`InvoiceID` varchar(3) NOT NULL,
`CustName` varchar(80),
`Status` varchar(80),
`InvoiceDate` varchar(80),
 PRIMARY KEY (`InvoiceID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO Invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('123', 'Parry', 'A', '2013.02.01');
INSERT INTO Invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('456', 'Tao', 'A', '2013.01.11');
INSERT INTO Invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('789', 'Tangeman', 'A', '2012.12.25');