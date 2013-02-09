DROP TABLE IF EXISTS invoices;
CREATE TABLE invoices 
(
`InvoiceID` varchar(3) NOT NULL,
`CustName` varchar(80),
`Status` varchar(80),
`InvoiceDate` varchar(80),
 PRIMARY KEY (`InvoiceID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('111', 'Parry', 'A', '2013.02.01');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('112', 'Tao', 'A', '2013.01.11');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('323', 'Tangeman', 'A', '2012.12.25');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('232', 'Abdulla', 'A', '2013.01.01');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('345', 'Braham', 'D', '2012.04.23');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('789', 'Giorgio', 'D', '2013.03.01');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('444', 'Kaul', 'A', '2012.08.25');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('356', 'Havlik', 'A', '2012.07.20');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('745', 'Monier', 'D', '2012.11.12');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('177', 'Kesler', 'A', '2012.10.22');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('333', 'Bieska', 'D', '2012.09.07');
INSERT INTO invoices (InvoiceID, CustName, Status, InvoiceDate) 
	VALUES ('241', 'Volpatti', 'A', '2012.03.04');