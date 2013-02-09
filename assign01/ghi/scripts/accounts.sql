DROP TABLE IF EXISTS accounts;
CREATE TABLE accounts
(
    `id` varchar(3) NOT NULL,
    `accname` varchar(80),
    `status` varchar(1),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO accounts (id, accname, status)
    VALUES ('123', 'Bill', 'A');
INSERT INTO accounts (id, accname, status)
    VALUES ('124', 'Nye', 'A');
INSERT INTO accounts (id, accname, status)
    VALUES ('125', 'The', 'D');
INSERT INTO accounts (id, accname, status)
    VALUES ('126', 'Science', 'A');
INSERT INTO accounts (id, accname, status)
    VALUES ('127', 'Guy', 'A');