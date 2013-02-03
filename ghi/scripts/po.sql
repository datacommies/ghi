    DROP TABLE IF EXISTS po;
    CREATE TABLE po
    (
    `id` varchar(3) NOT NULL,
    `vendorID` varchar(3) NOT NULL,
    `description` varchar(80),
    `date` DATE,
    `status` varchar(1),
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
     
    INSERT INTO po (id, vendorID, description, date, status)
            VALUES ('001', '100', 'Crack cocaine', 01/01/2013, 'A');
    INSERT INTO po (id, vendorID, description, date, status)
            VALUES ('002', '200', 'The booze for Jewels is ready to be picked up. Naw meen.', 01/01/2013, 'A');
    INSERT INTO po (id, vendorID, description, date, status)
            VALUES ('003', '300', 'Korean Jesus is ready to do korean stuff', 01/01/2013, 'A');
