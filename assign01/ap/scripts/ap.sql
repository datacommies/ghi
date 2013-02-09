DROP TABLE IF EXISTS vendors;
CREATE TABLE vendors 
(
`id`        varchar(3)  NOT NULL,
`name`      varchar(80) NOT NULL,
`status`    varchar(1)  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO vendors (id, name, status)
	VALUES ('001', 'Some Company', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('002', 'Supplier Inc', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('003', 'Vandelay Industries', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('004', 'Walmart', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('005', 'ABC Co', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('006', 'Some Dude', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('007', 'Foobar Ltd', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('008', 'PHP Inc', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('009', 'BCIT', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('010', 'Pizza Hut', 'A');
INSERT INTO vendors (id, name, status)
	VALUES ('011', 'The Dollar Store', 'D');
INSERT INTO vendors (id, name, status)
	VALUES ('999', 'Vendor Ltd', 'D');


